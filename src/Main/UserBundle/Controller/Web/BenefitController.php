<?php

namespace Main\UserBundle\Controller\Web;

use AppBundle\Controller\BaseController;
use AppBundle\Entity\Document;
use AppBundle\Helper\ConstantHelper;
use AppBundle\Helper\DocumentStructureHelper;
use AppBundle\Repository\DocumentRepository;
use AppBundle\Repository\DocumentTypeRepository;
use AppBundle\Repository\MediaRepository;
use AppBundle\Repository\MediaTypeRepository;
use Knp\Snappy\Pdf;
use Main\AdminBundle\Repository\AddressTypeRepository;
use Main\AdminBundle\Repository\CityRepository;
use Main\AdminBundle\Repository\CountryRepository;
use Main\InsuranceBundle\Helper\Structure\DamageStructureHelper;
use Main\InsuranceBundle\Repository\DamageRepository;
use Main\UserBundle\Entity\Address;
use Main\UserBundle\Entity\BenefitPartner;
use Main\UserBundle\Entity\BenefitPartnerDocument;
use Main\UserBundle\Entity\BenefitPartnerUser;
use Main\UserBundle\Entity\User;
use Main\UserBundle\Repository\AddressRepository;
use Main\UserBundle\Repository\BenefitPartnerDocumentRepository;
use Main\UserBundle\Repository\BenefitPartnerRepository;
use Main\UserBundle\Repository\BenefitPartnerUserRepository;
use Main\UserBundle\Repository\UserRepository;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Swift_Attachment;
use Swift_Mailer;
use Swift_SmtpTransport;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class BenefitController extends BaseController
{

    public function benefitplusNewMailAction(String $id,
                                             String $attachment,
                                             BenefitPartnerRepository $benefitPartnerRepository,
                                             BenefitPartnerUserRepository $benefitPartnerUserRepository,
                                             LoggerInterface $logger
    )
    {
        $this->initialize();
        $benefitPartner = $benefitPartnerRepository->find($id);
        $benefitPartnerUser = $benefitPartnerUserRepository->findOneBy(
            [
                'benefitPartner' => $benefitPartner
            ]
        );

        $logger->info('STEP 2a :', [
            'benefitPartnerUser' => $benefitPartnerUser->getId()
        ]);
        if (true == ConstantHelper::getMailGeneral()['sendMail']) {
            $smtpHostIp = gethostbyname(ConstantHelper::getMailCustomerGeneral()['host']);
            $transport = (new Swift_SmtpTransport($smtpHostIp, ConstantHelper::getMailCustomerGeneral()['port'], null))
                ->setUsername(ConstantHelper::getMailCustomerGeneral()['user'])
                ->setPassword(ConstantHelper::getMailCustomerGeneral()['pass']);
            $mailer = new Swift_Mailer($transport);

            $message = (new \Swift_Message('YOURneeds GmbH - Deine Benefit+ Anmeldung'))
                ->setFrom(
                    [ConstantHelper::getMailContracts()['mail'] => ConstantHelper::getMailContracts()['sender']])
                ->setTo([$benefitPartnerUser->getUser()->getEmail()])
                ->setBCC(['andre.rust@intertects.com' => 'Admin'])
                ->setBody(
                    $this->renderView(
                        '@MainUserBundle/Benefit/mail/mail.benefit.new.html.twig',
                        [
                            'user' => $benefitPartnerUser->getUser(),
                            'benefitPartner' => $benefitPartner
                        ]
                    ),
                    'text/html'
                );

            if (!empty($attachment) && count($attachment) > 0) {
                $message->attach(Swift_Attachment::fromPath($attachment));
            }

            $mailer->send($message);

            $message = (new \Swift_Message('YOURneeds - neue Anmeldung eines Benefit+ Partners'))
                ->setFrom(
                    [ConstantHelper::getMailCustomerGeneral()['mail'] => ConstantHelper::getMailCustomerGeneral()['sender']])
                ->setTo([ConstantHelper::getMailContracts()['mail']])
                ->setBCC(['andre.rust@intertects.com' => 'Admin'])
                ->setBody(
                    $this->renderView(
                        '@MainUserBundle/Benefit/mail/mail.self.benefit.new.html.twig',
                        [
                            'user' => $benefitPartnerUser->getUser(),
                            'benefitPartner' => $benefitPartner
                        ]
                    ),
                    'text/html'
                );
            if (!empty($attachment) && count($attachment) > 0) {
                $message->attach(Swift_Attachment::fromPath($attachment));
            }
            $mailer->send($message);
        }
    }

    /**
     * @Route("/benefitplus/contract/download/{id}", name="benefitplus_contract_download", methods={"GET"})
     */
    public function benefitplusContractDownloadAction($id,
                                                      DocumentRepository $documentRepository,
                                                      BenefitPartnerDocumentRepository $benefitPartnerDocumentRepository,
                                                      SessionInterface $session,
                                                      Request $request,
                                                      AuthorizationCheckerInterface $authorizationChecker,
                                                      UserRepository $userRepository,
                                                      LoggerInterface $logger
    )
    {
        $this->initialize();
        $document = $documentRepository->find($id);
        $benefitPartnerDocument = $benefitPartnerDocumentRepository->findOneBy(
            [
                'document' => $document
            ]
        );
        $benefitPartner = $benefitPartnerDocument->getBenefitPartner();
        $pathBenefitPartnerId = str_pad($benefitPartner->getId(), 10, '0', STR_PAD_LEFT);
        $projectDir = $this->get('kernel')->getProjectDir();
        $secretPath = $projectDir . '/_uploads/partner/' . $pathBenefitPartnerId . '/documents/custom/contract/' . $document->getName();
        return $this->file($secretPath);
    }

    /**
     * @Route("/benefitplus/partner/save", name="benefitplus_partner_save", methods={"PUT"})
     */
    public function benefitplusDocumentUploadSaveAction(Request $request,
                                                        AuthorizationCheckerInterface $authorizationChecker,
                                                        UserRepository $userRepository,
                                                        DamageRepository $damageRepository,
                                                        DocumentRepository $documentRepository,
                                                        DocumentTypeRepository $documentTypeRepository,
                                                        CityRepository $cityRepository,
                                                        BenefitPartnerRepository $benetifPartnerRepository,
                                                        BenefitPartnerUserRepository $benetifPartnerUserRepository,
                                                        CountryRepository $countryRepository,
                                                        AddressRepository $addressRepository,
                                                        AddressTypeRepository $addressTypeRepository,
                                                        MediaRepository $mediaRepository,
                                                        MediaTypeRepository $mediaTypeRepository,
                                                        SessionInterface $session,
                                                        LoggerInterface $logger
    )
    {

        $this->initialize();

        $data = null;
        $requestData = null;
        $countMedia = 0;
        $fileNameContract = null;

        if (0 === strpos($request->headers->get('Content-Type'), 'application/json')) {
            $data = json_decode($request->getContent(), true);
            $request->request->replace(is_array($data) ? $data : array());
        }

        $jsonResponse['data'] = [];
        $status = '200';

        if (null != $data && null != $data['structure'] && !empty(null != $data['structure'])) {
            $sHelper = new DamageStructureHelper($userRepository, $damageRepository, $this->getDoctrine()->getManager(), $logger);
            $sHelper->setUser($this->user);
            $sHelper->parseCustomStructure($data['structure']);
            //$requestData = $sHelper->getStructureAsArray();
            $partnerContactIsSubscriber = $sHelper->getStructureValue('partnerContactIsSubscriber');
            $partnerContactIsSubscriberAndTakesData = $sHelper->getStructureValue('partnerContactIsSubscriberAndTakesData');
            $partnerType = $sHelper->getStructureValue('partnerType');
            $partnerSubType = $sHelper->getStructureValue('partnerSubType');
            $partnerName = $sHelper->getStructureValue('partnerName');
            $partnerContactPersonFirstName = $sHelper->getStructureValue('partnerContactPersonFirstName');
            $partnerContactPersonLastName = $sHelper->getStructureValue('partnerContactPersonLastName');
            $partnerContactPersonMail = $sHelper->getStructureValue('partnerContactPersonMail');
            $partnerContactPersonMailExistingUser = $sHelper->getStructureValue('partnerContactPersonMailExistingUser');
            $partnerContactPersonPhoneNumber = $sHelper->getStructureValue('partnerContactPersonPhoneNumber');
            $partnerStreet = $sHelper->getStructureValue('partnerStreet');
            $partnerZip = $sHelper->getStructureValue('partnerZip');
            $partnerCity = $sHelper->getStructureValue('partnerCity');
            $partnerSignature = $sHelper->getStructureValue('signature');

            $partnerAdditionalInfo = $sHelper->getStructureValue('partnerAdditionalInfo');
            $partnerSubType = $sHelper->getStructureValue('partnerSubType');
            $partnerStreetNo = $sHelper->getStructureValue('partnerStreetNo');

            $logger->info('STEP 1: ', [
                'partnerContactIsSubscriber' => $partnerContactIsSubscriber,
                'partnerContactPersonFirstName' => $partnerContactPersonFirstName,
                'partnerContactPersonLastName' => $partnerContactPersonLastName,
                'partnerContactPersonMail' => $partnerContactPersonMail,
                'partnerContactPersonMailExistingUser' => $partnerContactPersonMailExistingUser,
                'partnerContactPersonPhoneNumber' => $partnerContactPersonPhoneNumber,
                'partnerType' => $partnerType,
                'partnerSubType' => $partnerSubType,
                'partnerName' => $partnerName,
                'partnerStreet' => $partnerStreet,
                'partnerZip' => $partnerZip,
                'partnerCity' => $partnerZip,
                'partnerSubType' => $partnerSubType,
                'partnerAdditionalInfo' => $partnerAdditionalInfo,
                'partnerStreetNo' => $partnerStreetNo,
                '***' => '***',
                'partnerSignature' => $partnerSignature,
                '***' => '***',
                'requestData' => $sHelper->getStructureAsArray()
            ]);


            /*
             if (true === $sHelper->hasErrors()) {
                $logger->info('STEP 2a-error :', [
                    'errors true' => 'Sorry, errors in da house!',
                    'errors' => $sHelper->getErrors()
                ]);
                //$this->logMapStructure($sHelper->getErrors(), $logger);
            } else {
             */
            $partnerUser = null;

            if ('yes' == $partnerContactIsSubscriber) {
                $logger->info('STEP 1a :', [
                    'TRY' => 'user is subscriber'
                ]);

                if ('yes' == $partnerContactIsSubscriberAndTakesData) {
                    $logger->info('STEP 1a :', [
                        'TRY' => 'user want own data'
                    ]);

                    $tmpUserWithExistingMail = $userRepository->findOneBy(
                        [
                            'email' => $partnerContactPersonMailExistingUser
                        ]
                    );

                    if (null != $tmpUserWithExistingMail
                        && null != $tmpUserWithExistingMail->getId()
                        && $tmpUserWithExistingMail->getId() > 0) {
                        $logger->info('STEP 1a :', [
                            'TRY' => 'user is already logged in'
                        ]);
                        $partnerUser = $tmpUserWithExistingMail;

                        $logger->info('STEP 1b :', [
                            'USER' => 'is existing user',
                            'asked' => $partnerContactPersonMailExistingUser,
                            'really' => $tmpUserWithExistingMail
                        ]);
                    }
                }
            }

            if (null == $partnerUser) {
                $tmpUserWithNonExistingMail = $userRepository->findOneBy(
                    [
                        'email' => $partnerContactPersonMail
                    ]
                );
                if (null != $tmpUserWithNonExistingMail
                    && null != $tmpUserWithNonExistingMail->getId()
                    && $tmpUserWithNonExistingMail->getId() > 0) {
                    $partnerUser = $tmpUserWithNonExistingMail;
                    $logger->info('STEP 2a :', [
                        'USER' => 'is existing user with existing email',
                        'asked' => $partnerContactPersonMail,
                        'really' => $tmpUserWithNonExistingMail
                    ]);
                } else {
                    $logger->info('STEP 2b :', [
                        'USER' => 'is new user'
                    ]);
                    $partnerUser = new User();
                    $partnerUser->setEmail($partnerContactPersonMail);
                    $partnerUser->setUserName($partnerContactPersonMail);
                    $partnerUser->setFirstName($partnerContactPersonFirstName);
                    $partnerUser->setLastName($partnerContactPersonLastName);
                    $partnerUser->setPhoneNumber($partnerContactPersonPhoneNumber);
                    $partnerUser->setPrivacyPolicyAccepted(0);
                    $partnerUser->setTermsAccepted(0);
                    $partnerUser->setPrivacyPolicyAccepted(0);
                    $partnerUser->setRoles(['ROLE_USER_BENEFIT', 'ROLE_USER']);
                    $partnerUser->setNewsShown(0);
                    $this->databaseAccessor->persist($partnerUser);
                    $this->databaseAccessor->flush();
                }
            }
            $newBenefitUserId = $partnerUser->getId();

            if ($newBenefitUserId > 0) {
                $logger->info('STEP 3a:', [
                    'BENEFIT PARTNER' => 'is new partner'
                ]);
                $newBenefitPartner = new BenefitPartner();
                $newBenefitPartner->setPartnerType($partnerType);
                $newBenefitPartner->setName($partnerName);
                $newBenefitPartner->setDepartment($partnerSubType);
                $this->databaseAccessor->persist($newBenefitPartner);
                $this->databaseAccessor->flush();
                $newBenefitPartnerId = $newBenefitPartner->getId();

                $newBenefitPartnerUser = new BenefitPartnerUser();
                $newBenefitPartnerUser->setUser($partnerUser);
                $newBenefitPartnerUser->setBenefitPartner($newBenefitPartner);
                $newBenefitPartnerUser->setIsActive(1);
                $newBenefitPartnerUser->setIsResponsible(1);
                $this->databaseAccessor->persist($newBenefitPartnerUser);
                $this->databaseAccessor->flush();
                $newBenefitPartnerUserId = $newBenefitPartnerUser->getId();

                $tmpCity = $cityRepository->findOneBy(
                    [
                        'name' => $partnerCity
                    ]
                );
                $city = (null !== $tmpCity) ? $tmpCity : null;
                if (null === $city) {
                    $city = $cityRepository->findOneBy(
                        [
                            'name' => 'Hamburg'
                        ]
                    );
                }

                $country = $countryRepository->findOneBy(
                    [
                        'name' => 'Deutschland'
                    ]
                );

                $addressType = $addressTypeRepository->findOneBy(
                    [
                        'name' => 'Geschäftsadresse'
                    ]
                );
                $logger->info('STEP 2c:', [
                    'ADDRESS' => 'is new one'
                ]);

                $partnerAddress = new Address();
                $partnerAddress->setBenefitPartner($newBenefitPartner);
                $partnerAddress->setCity($city);
                $partnerAddress->setCountry($country);
                $partnerAddress->setStreet($partnerStreet);
                $partnerAddress->setStreetNumber($partnerStreetNo);
                $partnerAddress->setPostalCode($partnerZip);
                $partnerAddress->setAdditionalInfo($partnerAdditionalInfo);
                $partnerAddress->setType($addressType);
                $partnerAddress->setIsActive(1);
                $partnerAddress->setIsBlocked(0);
                $this->databaseAccessor->persist($partnerAddress);
                $this->databaseAccessor->flush();
                $newBenefitAddressId = $partnerAddress->getId();
            }


            $logger->info('STEP 4a-success: ', [
                'newBenefitUserId' => $newBenefitUserId,
                'newBenefitAddressId' => $newBenefitAddressId,
                'newBenefitPartnerUserId' => $newBenefitPartnerUserId,
                'newBenefitPartnerId' => $newBenefitPartnerId
            ]);


            /*
             * contract generation
             * logo upload
             * management of benefit partner
             *
            */
            $rootDir = $this->get('kernel')->getRootDir(); // $request->server->get('DOCUMENT_ROOT');
            $projectDir = $this->get('kernel')->getProjectDir();

            $logger->info('STEP 3b: ', [
                'rootDir' => $rootDir
            ]);

            $pathBenefitPartnerId = str_pad($newBenefitPartnerId, 10, '0', STR_PAD_LEFT);
            $secretPath = '_uploads/partner/' . $pathBenefitPartnerId . '/documents/custom/contract';
            if (!is_dir('../_uploads/partner/' . $pathBenefitPartnerId . '/documents')) {
                mkdir('../_uploads/partner/' . $pathBenefitPartnerId . '/documents', 0777, true);
                if (!is_dir('../_uploads/partner/' . $pathBenefitPartnerId . '/documents/custom')) {
                    mkdir('../_uploads/partner/' . $pathBenefitPartnerId . '/documents/custom', 0777, true);
                    if (!is_dir('../_uploads/partner/' . $pathBenefitPartnerId . '/documents/custom/contract')) {
                        mkdir('../_uploads/partner/' . $pathBenefitPartnerId . '/documents/custom/contract', 0777, true);
                    }
                }
            }
            date_default_timezone_set('Europe/Berlin');
            $timestamp = date("Ymd_His");

            $logger->info('STEP 4a: ', [
                'pathUserId' => $pathBenefitPartnerId,
                'imageUploadPath' => $secretPath
            ]);

            $fileNameSign = 'sign_' . $pathBenefitPartnerId . '_' . $timestamp . '.png';
            $encodedImage = explode(",", $partnerSignature)[1];
            $decodedImage = base64_decode($encodedImage);
            file_put_contents('../' . $secretPath . '/' . $fileNameSign, $decodedImage);

            if ($this->environment != 'dev') {
                $pathToPdfGeneratingLibrary = $projectDir . '/public/wkhtmltopdf/usr/local/bin/wkhtmltopdf';
            } else {
                $pathToPdfGeneratingLibrary = $projectDir . '/public/wkhtmltopdf/wkhtmltopdf';
            }

            /*
             * GENERATE PDF
             */
            $logger->info('STEP : generation', [
                'pathToPdfGeneratingLibrary' => $pathToPdfGeneratingLibrary
            ]);
            $snappy = new Pdf($pathToPdfGeneratingLibrary);
            //'date' => date("F j, Y"),
            //'dateTime' => date("F j, Y, g:i a"),
            $html = $this->renderView('@MainUserBundle/Benefit/contract/benefitplus.contract.tmpl.html.twig', [
                'userId' => $partnerUser->getId(),
                'user' => $partnerUser,
                'address' => $partnerAddress,
                'date' => date("d.m.Y"),
                'partner' => $newBenefitPartner,
                'partnerSubType' => $partnerSubType,
                'pathToLogo' => $projectDir . '/public/build/static/images/yourneeds-logo-color.png',
                'pathToResponsible' => $projectDir . '/_uploads/manager/___/faksimile_bjarke_pahrmann.jpg',
                'signDate' => date("d.m.Y (H:i:s)"),
                'path' => $projectDir . '/' . $secretPath,
                'fileNameSign' => $fileNameSign,
                'mandateDate' => date("d.m.Y (H:i:s)")
            ]);

            $fileNameContract = 'yourneeds_benefitplus_vertrag_' . $pathBenefitPartnerId . '_' . $timestamp . '.pdf';
            $snappy->setTemporaryFolder('../_uploads/tmp');
            $snappy->generateFromHtml($html, '../' . $secretPath . '/' . $fileNameContract, [], true);
            $snappy->removeTemporaryFiles();


            $documentType = $documentTypeRepository->findOneBy(['ident' => 'benefitpluscontract']);
            $logger->info('STEP fileNameSign: generation', [
                'fileNameDamageReport' => $fileNameContract,
                'fileNameSign' => $projectDir . '/' . $secretPath . '/' . $fileNameSign
            ]);

            $session->set('path_benefit_partner_id', $pathBenefitPartnerId);
            $session->set('document_name', $fileNameContract);

            $document = new Document();
            $document->setDocumentType($documentType);
            $document->setName($fileNameContract);
            $document->setPublicName($fileNameContract);
            $document->setFolder('benefit');
            $document->setIsActive(1);
            $document->setIsBenefit(1);
            $document->setUser($this->user);
            $this->databaseAccessor->persist($document);
            $this->databaseAccessor->flush();
            $documentId = $document->getId();

            $newBenefitPartnerDocument = new BenefitPartnerDocument();
            $newBenefitPartnerDocument->setBenefitPartner($newBenefitPartner);
            $newBenefitPartnerDocument->setDocument($document);
            $newBenefitPartnerDocument->setReference('benefit');
            $this->databaseAccessor->persist($newBenefitPartnerDocument);
            $this->databaseAccessor->flush();

            $jsonResponse['data'] = [
                'pathBenefitPartnerId' => $pathBenefitPartnerId,
                'documentName' => $fileNameContract
            ];
            $jsonResponse['data'] = [];
            $jsonResponse['status'] = '200';
            $jsonResponse['pathBenefitPartnerId'] = $pathBenefitPartnerId;
            $jsonResponse['documentName'] = $fileNameContract;
            $jsonResponse['documentId'] = $documentId;


            $logger->info('STEP 2b-success: ', [
                'newBenefitPartnerUserId' => $newBenefitPartnerUserId,
                'attachment' => '../' . $secretPath . '/' . $fileNameContract
            ]);

            $this->benefitplusNewMailAction(
                $newBenefitPartnerId,
                '../' . $secretPath . '/' . $fileNameContract,
                $benetifPartnerRepository,
                $benetifPartnerUserRepository,
                $logger
            );


        }
        return new JsonResponse($jsonResponse, 200, ['Access-Control-Allow-Origin' => '*', 'Content-Type' => 'application/json']);
    }

    /**
     * @Method({"GET"})
     * @Route("/benefitplus/partner", name="benefitplus_partner")
     */
    public function benefitPartnerAction(Request $request,
                                         AuthorizationCheckerInterface $authorizationChecker,
                                         UserRepository $userRepository,
                                         DocumentRepository $documentRepository,
                                         LoggerInterface $logger
    )
    {
        $this->initialize();
        /*
        if (!$this->allowedToUse('CAN_USE_BENEFIT', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        */

        $dsHelper = new DocumentStructureHelper($userRepository, $documentRepository, $this->getDoctrine()->getManager(), $logger);
        $dsHelper->setUser($this->user);
        $dsHelper->setRootDir($this->get('kernel')->getRootDir());
        $dsHelper->setFileDirName('../public/benefit');
        $dsHelper->setFileName('benefit_survey_partner');
        $structure = $dsHelper->loadStructureJsonFileByFileName();

        $logger->info('STEP MAIL:', [
            'email send to Andre: ' => 'andre.rust@intertects.com'
        ]);


        return $this->render('@MainUserBundle/Benefit/benefit.partner.html.twig', [
            'user' => $this->user,
            'structure' => $structure,
        ]);
    }

    /**
     * @Method({"GET"})
     * @Route("/benefitplus/greetings", name="benefitplus_greetings")
     */
    public function benefitGreetingsAction(Request $request,
                                           AuthorizationCheckerInterface $authorizationChecker,
                                           UserRepository $userRepository,
                                           BenefitPartnerRepository $benefitPartnerRepository,
                                           LoggerInterface $logger
    )
    {
        $this->initialize();
        /*
        if (!$this->allowedToUse('CAN_USE_BENEFIT', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        */
        $benfitPartners = $benefitPartnerRepository->findAll();
        $canAccess = false;
        if (null !== $benfitPartners
            && count($benfitPartners) > 0) {
            $canAccess = true;
        }

        return $this->render('@MainUserBundle/Benefit/benefit.greetings.html.twig', [
            'user' => $this->user,
            'canAccess' => $canAccess
        ]);
    }
}