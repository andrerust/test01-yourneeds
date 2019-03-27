<?php

namespace Main\InsuranceBundle\Controller;

use AppBundle\Controller\BaseController;
use AppBundle\Entity\Document;
use AppBundle\Helper\ConstantHelper;
use AppBundle\Helper\MediaHelper;
use AppBundle\Repository\DocumentRepository;
use AppBundle\Repository\DocumentTypeRepository;
use AppBundle\Repository\MediaRepository;
use AppBundle\Repository\MediaTypeRepository;
use Knp\Snappy\Pdf;
use Main\AdminBundle\Helper\AddressHelper;
use Main\InsuranceBundle\Entity\Contract;
use Main\InsuranceBundle\Entity\Damage;
use Main\InsuranceBundle\Entity\DamageDocument;
use Main\InsuranceBundle\Helper\Structure\DamageStructureHelper;
use Main\InsuranceBundle\Repository\ContractRepository;
use Main\InsuranceBundle\Repository\ContractRepository as ContractRepositoryAlias;
use Main\InsuranceBundle\Repository\DamageDocumentRepository;
use Main\InsuranceBundle\Repository\DamageMediaRepository;
use Main\InsuranceBundle\Repository\DamageRepository;
use Main\InsuranceBundle\Repository\TypeRepository;
use Main\UserBundle\Helper\BankAccountHelper;
use Main\UserBundle\Repository\BankAccountRepository;
use Main\UserBundle\Repository\UserAddressRepository;
use Main\UserBundle\Repository\UserRepository;
use Monolog\Logger;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Swift_Attachment;
use Swift_Mailer;
use Swift_SmtpTransport;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\File\MimeType\FileinfoMimeTypeGuesser;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class DamageReportController extends BaseController
{
    /**
     * @Method({"PUT", "GET"})
     * @Route("/api/contracts/survey/{type}/load", name="api_contracts_survey_type_load")
     */
    public function loadApiContractsSurveyAction($type = 'all',
                                                 Request $request,
                                                 AuthorizationCheckerInterface $authorizationChecker,
                                                 UserRepository $userRepository,
                                                 UserAddressRepository $userAddressRepository,
                                                 ContractRepository $contractRepository,
                                                 TypeRepository $typeRepository,
                                                 LoggerInterface $logger
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_DO_ADMIN_IMPORT', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        $this->setType($type, $typeRepository);

        $logger->info('STEP 2a :', [
            'user' => $this->user->getId(),
            '/api/contracts/survey/{type}/load' => $this->type->getIdentifier()
        ]);

        if (0 === strpos($request->headers->get('Content-Type'), 'application/json')) {
            $data = json_decode($request->getContent(), true);
            $request->request->replace(is_array($data) ? $data : array());
        } else {
            $data = json_decode($request->getContent(), true);
        }
        $requestData = json_encode($data['data']);

        /*
    if ('all' != $input) {
        $criteria = new Criteria();
        $criteria
            ->where($criteria->expr()->contains('name', $input));
        $tmpList = $addressRepository->matching($criteria);
    } else {
    }
        */
        $tmpList = $contractRepository->findBy(
            [
                'user' => $this->user,
                'contractType' => $this->type
            ]
        );

        $resultList = [];
        foreach ($tmpList as $key => $value) {
            $logger->info('resultList parameters: ', [
                'list' => [
                    'id' => $value->getId(),
                    'name' => $value->getInsuranceNumber(),
                ]
            ]);
            $contractString = 'VNr: ' . $value->getInsuranceNumber() . ' bei ' . $value->getCompany()->getPublicName();
            $resultList[] = ['id' => $value->getId(), 'name' => $contractString];
        }
        $jsonResponse['input'] = $type;
        $jsonResponse['resultList'] = $resultList;
        $jsonResponse['requestData'] = $requestData;
        $jsonResponse['status'] = '200';

        $this->logger = new Logger('my_logger');
        $logger->info('resultList parameters: ', [
            'list' => [
                'result' => $resultList
            ]
        ]);

        return new JsonResponse($resultList, 200, array('Access-Control-Allow-Origin' => '*', 'Content-Type' => 'application/json'));
    }

    public function logMapStructure($array, LoggerInterface $logger, int $level)
    {
        $level++;
        foreach ($array as $k => $v) {
            $logger->info('*** LVL' . $level . ':', [
                'k' => $k,
                'v' => $v
            ]);
            //" . $v . "<br>";
            if (is_array($v)) {
                $this->logMapStructure($v, $logger, $level);
            }
        }
    }


    /**
     * @param array $attachments
     */
    private function sendDamageReportMail(Array $attachments, LoggerInterface $logger, Contract $contract, $destination = null)
    {
        if (true == ConstantHelper::getMailGeneral()['sendMail']) {
            $smtpHostIp = gethostbyname(ConstantHelper::getMailCustomerGeneral()['host']);
            $transport = (new Swift_SmtpTransport($smtpHostIp, ConstantHelper::getMailCustomerGeneral()['port'], null))
                ->setUsername(ConstantHelper::getMailCustomerGeneral()['user'])
                ->setPassword(ConstantHelper::getMailCustomerGeneral()['pass']);
            $mailer = new Swift_Mailer($transport);
            //->setTo(['mail-test@yourneeds.de'])

            $agencyNumber = '';
            $insuranceNumber = '';
            if (null != $contract && null != $contract->getInsuranceNumber()) {
                $insuranceNumber = $contract->getInsuranceNumber();
                if (null != $contract->getCompany()->getBrokerNumberGeneral()) {
                    $agencyNumber = $contract->getCompany()->getBrokerNumberGeneral();
                    if (null != $contract->getCompany()->getEmailGeneral()
                        && !empty($contract->getCompany()->getEmailGeneral())) {
                        $companyMail = $contract->getCompany()->getEmailGeneral();
                        //$companyMail = 'andre.rust@intertects.com';
                    }
                }
            }

            if ('company' == $destination) {
                $message = (new \Swift_Message('YOURneeds Versicherungsmakler GmbH - Schadensmeldung'))
                    ->setFrom(
                        [ConstantHelper::getMailCompanyGeneral()['mail'] => ConstantHelper::getMailCompanyGeneral()['sender']])
                    ->setTo([$this->user->getEmail(), $companyMail])
                    ->setCc([ConstantHelper::getMailCompanyGeneral()['mail']])
                    ->setBcc(['andre.rust@intertects.com'])
                    ->setBody(
                        $this->renderView(
                        // templates/emails/registration.html.twig
                            '@MainInsuranceBundle/DamageReport/mail/damage.new.html.twig',
                            [
                                'user' => $this->user,
                                'insuranceNumber' => $insuranceNumber,
                                'agencyNumber' => $agencyNumber
                            ]
                        ), 'text/html'
                    );

            } elseif ('manager' == $destination) {
                $message = (new \Swift_Message('YOURneeds Versicherungsmakler GmbH - Schadensmeldung'))
                    ->setFrom(
                        [ConstantHelper::getMailCompanyGeneral()['mail'] => ConstantHelper::getMailCompanyGeneral()['sender']])
                    ->setTo([$this->user->getEmail()])
                    ->setCc([ConstantHelper::getMailCompanyGeneral()['mail']])
                    ->setBcc(['andre.rust@intertects.com'])
                    ->setBody(
                        $this->renderView(
                        // templates/emails/registration.html.twig
                            '@MainInsuranceBundle/DamageReport/mail/manager.damage.new.html.twig',
                            [
                                'user' => $this->user,
                                'insuranceNumber' => $insuranceNumber

                            ]
                        ), 'text/html'
                    );
            }
            foreach ($attachments as $attachment) {
                $message->attach(Swift_Attachment::fromPath($attachment));
            }
            $mailer->send($message);
            $logger->info('STEP MAIL:', [
                'email send to company: ' => $this->user->getEmail()
            ]);


            $message = (new \Swift_Message('YOURneeds Versicherungsmakler GmbH - Schadensmeldung'))
                ->setFrom(
                    [ConstantHelper::getMailCompanyGeneral()['mail'] => ConstantHelper::getMailCompanyGeneral()['sender']])
                ->setTo(['andre.rust@intertects.com'])
                ->setBody(
                    'Hallo Andre,
					<br><br>
					dies ist eine Schadensmeldung eines unserer Kunden. In der Anlage befindet sich das PDF mit der Beschreibung der Meldung und ggf weitere Medien.
					<br>
					Herzlichen Dank!
					<br><br>
					Ihr YOURneeds-Team'
                    , 'text/html'
                );
            foreach ($attachments as $attachment) {
                $message->attach(Swift_Attachment::fromPath($attachment));
            }
            $mailer->send($message);
            $logger->info('STEP MAIL:', [
                'email send to Andre: ' => 'andre.rust@intertects.com'
            ]);

        }
    }

    /**
     * @Route(
     * {"en": "/manager/damage/{type}/report/save",
     * "de": "/manager/damage/{type}/report/speichern"}, name="damage_type_report_save", methods={"PUT"}
     * )
     */
    public function damageReportSaveAction($type = null,
                                           Request $request,
                                           AuthorizationCheckerInterface $authorizationChecker,
                                           UserRepository $userRepository,
                                           TypeRepository $typeRepository,
                                           DamageRepository $damageRepository,
                                           MediaRepository $mediaRepository,
                                           MediaTypeRepository $mediaTypeRepository,
                                           DamageMediaRepository $damageMediaRepository,
                                           UserAddressRepository $userAddressRepository,
                                           BankAccountRepository $bankAccountRepository,
                                           DocumentRepository $documentRepository,
                                           DocumentTypeRepository $documentTypeRepository,
                                           ContractRepository $contractRepository,
                                           LoggerInterface $logger
    )
    {

        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_CHOOSE_SURVEY', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        $this->setType($type, $typeRepository);

        $data = null;
        $requestData = null;
        $countMedia = 0;
        $fileNameDamageReport = null;
        date_default_timezone_set('Europe/Berlin');
        $timestamp = date("Ymd_His");

        if (0 === strpos($request->headers->get('Content-Type'), 'application/json')) {
            $data = json_decode($request->getContent(), true);
            $request->request->replace(is_array($data) ? $data : array());
        }

        $sHelper = new DamageStructureHelper($userRepository, $damageRepository, $this->getDoctrine()->getManager(), $logger);
        $sHelper->setType($type, $typeRepository);
        $sHelper->setUser($this->user);
        $sHelper->parseCustomStructure($data);
        $requestData = $sHelper->getStructureAsArray();
        //$this->logMapStructure($requestData, $logger);
        //die;

        $damageHelperClassName = 'Main\\InsuranceBundle\\Helper\\Damage\\' . ucfirst($this->type->getIdentifier() . 'DamageReportHelper');
        $requestParser = (new $damageHelperClassName($userRepository, $this->getDoctrine()->getManager(), $logger));
        $requestParser->setUser($this->user);
        $requestParser->setType($this->type->getIdentifier(), $typeRepository);
        $requestParser->parseParams($requestData['structure']);
        $requestParams = $requestParser->getParsedParameters();

        $logger->info('STEP 1: ', [
            'type' => $this->type->getIdentifier(),
            'typeId' => $this->type->getId(),
            'userId' => $this->user->getId(),
            'data' => $data,
            'divider' => '****************************',
            'contractId' => $requestData['structure']['contracts']
        ]);

        /*
         * GET USER CONTRACT
         */
        $contract = $contractRepository->findOneBy(
            [
                'user' => $this->user,
                'id' => $requestData['structure']['contracts']
            ]
        );

        $newDamage = new Damage();
        $newDamage->setUser($this->user);
        $newDamage->setType($this->type);
        $newDamage->setSubType($this->type->getName());
        $newDamage->setDescription('no description');
        $newDamage->setPublicName('Schadensmeldung ' . $this->type->getName());
        $newDamage->setJson(json_encode($requestData));
        $newDamage->setDocumentName('---');
        $newDamage->setContract($contract);
        $newDamage->setCountMedia($countMedia);
        $this->databaseAccessor->persist($newDamage);
        $this->databaseAccessor->flush();
        $newDamageId = $newDamage->getId();
        //print_r($newDamage->get());

        $damageObjectId = (array)$damageRepository->find($newDamageId)->getId();
        $logger->info('STEP 2 :', [
            'damageObjectId' => $damageObjectId
        ]);

        $jsonResponse['data'] = [];
        if (false !== $sHelper->hasErrors()) {
            $logger->info('STEP 3a :', [
                'errors' => 'Sorry, errors in da house!'
            ]);
            //$this->logMapStructure($sHelper->getErrors(), $logger);
        } else {
            if ($requestData && !empty($requestData)) {


                $jsonResponse['status'] = '200';
                $rootDir = $this->get('kernel')->getRootDir(); // $request->server->get('DOCUMENT_ROOT');
                $projectDir = $this->get('kernel')->getProjectDir();

                $logger->info('STEP 3b: ', [
                    'rootDir' => $rootDir
                ]);

                $pathUserId = str_pad($this->user->getId(), 10, '0', STR_PAD_LEFT);
                $imageUploadPath = '_uploads/manager/' . $pathUserId . '/documents/custom/damage';
                if (!is_dir('../_uploads/manager/' . $pathUserId . '/documents')) {
                    mkdir('../_uploads/manager/' . $pathUserId . '/documents', 0777, true);
                    if (!is_dir('../_uploads/manager/' . $pathUserId . '/documents/custom')) {
                        mkdir('../_uploads/manager/' . $pathUserId . '/documents/custom', 0777, true);
                        if (!is_dir('../_uploads/manager/' . $pathUserId . '/documents/custom/damage')) {
                            mkdir('../_uploads/manager/' . $pathUserId . '/documents/custom/damage', 0777, true);
                        }
                    }
                    /*
                    mkdir('../_uploads/manager/' . $pathUserId . '/images', 0777, true);
                    */
                }

                $logger->info('STEP 4a: ', [
                    'pathUserId' => $pathUserId,
                    'imageUploadPath' => $imageUploadPath
                ]);

                $mediaObjectPathList = [];
                $mediaHelper = null;
                $mediaCounter = 0;
                if (isset($requestData['structure']['imageUpload'])) {

                    $logger->info('STEP 4b: ', [
                        'INIT MEDIA' => true
                    ]);

                    $mediaHelper = new MediaHelper($userRepository, $mediaRepository, $this->getDoctrine()->getManager(), $logger);
                    $mediaHelper->setMediaTypeRepository($mediaTypeRepository);
                    $mediaHelper->setUser($this->user);
                    $mediaHelper->setEnvironment($this->environment);
                    $mediaHelper->setDamageReference($newDamage);
                    $mediaHelper->setMediaList($requestData['structure']['imageUpload']);
                    $mediaHelper->parseMediaDamageData();
                    $mediaObjectPathList = array_merge($mediaHelper->getMediaObjectPathList(), $mediaObjectPathList);
                    $mediaCounter = $mediaHelper->getMediaCounter();
                }

                $addressHelper = new AddressHelper($userRepository, $userAddressRepository, $this->getDoctrine()->getManager(), $logger);
                $addressHelper->setUser($this->user);
                $addressHelper->setPrimaryAddress();
                $addressParameterList = $addressHelper->getPrimaryAddressParameterList();

                $bankHelper = new BankAccountHelper($userRepository, $bankAccountRepository, $this->getDoctrine()->getManager(), $logger);
                $bankHelper->setUser($this->user);
                $bankHelper->setPrimaryBankAccount();
                $bankAccountParameterList = $bankHelper->getPrimaryBankParameterList();

                $salutation = '';
                if (null != $this->user->getGender()) {
                    $gender = $this->user->getGender();
                    if (1 == $gender) {
                        $salutation = 'Herr';
                    } elseif (2 == $gender) {
                        $salutation = 'Frau';
                    } elseif (3 == $gender) {
                        $salutation = 'Divers';
                    }
                }

                $agencyNumber = 'YOURneeds Versicherungsmakler GmbH';
                if (null != $contract && null != $contract->getInsuranceNumber()) {
                    $insuranceNumber = $contract->getInsuranceNumber();
                    $companyName = $contract->getCompany()->getName();
                    if (null != $contract->getCompany()->getBrokerNumberGeneral()) {
                        $agencyNumber = $contract->getCompany()->getBrokerNumberGeneral();
                    }
                }

                /*
                 * GET MANDATE DATE
                 */
                $documentType = $documentTypeRepository->findOneBy(
                    [
                        'ident' => 'mandate'
                    ]
                );
                $documentMandate = $documentRepository->findOneBy(
                    [
                        'user' => $this->user,
                        'documentType' => $documentType
                    ]
                );


                /*
                 * GENERATE PDF
                 */
                if ($this->environment != 'dev') {
                    $pathToPdfGeneratingLibrary = $projectDir . '/public/wkhtmltopdf/usr/local/bin/wkhtmltopdf';
                } else {
                    $pathToPdfGeneratingLibrary = $projectDir . '/public/wkhtmltopdf/wkhtmltopdf';
                }

                $logger->info('STEP ' . (5 + $countMedia) . ' : ', [
                    'pathToPdfGeneratingLibrary' => $pathToPdfGeneratingLibrary
                ]);
                $snappy = new Pdf($pathToPdfGeneratingLibrary);
                //'date' => date("F j, Y"),
                //'dateTime' => date("F j, Y, g:i a"),
                $html = $this->renderView('@MainInsuranceBundle/DamageReport/reports/manager.' . $this->type->getIdentifier() . '.damage-report.tmpl.html.twig', [
                    'userId' => $this->user->getId(),
                    'user' => $this->user,
                    'salutation' => $salutation,
                    'address' => $addressParameterList,
                    'bankAccount' => $bankAccountParameterList,
                    'dateTime' => date("d.m.Y (H:i:s)"),
                    'date' => date("d.m.Y"),
                    'agencyNumber' => $agencyNumber,
                    'insuranceNumber' => $insuranceNumber,
                    'countMedia' => $mediaCounter,
                    'requestData' => $requestParams,
                    'company' => ['name' => $companyName],
                    'pathToLogo' => $projectDir . '/public/build/static/images/yourneeds-logo-color.png',
                    'pathToResponsible' => $projectDir . '/_uploads/manager/___/faksimile_bjarke_pahrmann.jpg',
                    'signDate' => date("d.m.Y (H:i:s)"),
                    'mandateDate' => $documentMandate->getUpdatedAt()
                ]);

                $secretPath = '../_uploads/manager/' . $pathUserId . '/documents/custom/damage';
                $fileNameDamageReport = 'damage_' . $this->type->getIdentifier() . '_' . $pathUserId . '_' . $timestamp . '.pdf';
                $snappy->setTemporaryFolder('../_uploads/tmp');
                $snappy->generateFromHtml($html, $secretPath . '/' . $fileNameDamageReport, [], true);
                $snappy->removeTemporaryFiles();

                $documentTypeDamage = $documentTypeRepository->findOneBy(
                    [
                        'ident' => 'damage'
                    ]
                );

                $document = new Document();
                $document->setDocumentType($documentTypeDamage);
                $document->setName($fileNameDamageReport);
                $document->setPublicName($documentTypeDamage->getName());
                $document->setFolder('damage');
                $document->setIsActive(1);
                $document->setUser($this->user);
                $this->databaseAccessor->persist($document);
                $this->databaseAccessor->flush();

                $newDamageMedia = new DamageDocument();
                $newDamageMedia->setDamage($newDamage);
                $newDamageMedia->setDocument($document);
                $newDamageMedia->setReference('damage');
                $this->databaseAccessor->persist($newDamageMedia);
                $this->databaseAccessor->flush();

                /*
                 * add to media objects for mail
                 */
                $mediaObjectPathList[] = $secretPath . '/' . $fileNameDamageReport;

                $logger->info('STEP ' . (6 + $countMedia) . ' : ', [
                    'file exists: ' => file_exists($secretPath . '/' . $fileNameDamageReport)
                ]);
            }
        }

        $this->sendDamageReportMail($mediaObjectPathList, $logger, $contract, 'manager');
        $this->sendDamageReportMail($mediaObjectPathList, $logger, $contract, 'company');
        $currentDamageObject = $damageRepository->find($newDamageId);
        $currentDamageObject->setDocumentName($fileNameDamageReport);
        $currentDamageObject->setCountMedia($countMedia);
        $this->databaseAccessor->persist($currentDamageObject);
        $this->databaseAccessor->flush();

        return new JsonResponse($jsonResponse, 200, array('Access - Control - Allow - Origin' => ' * ', 'Content - Type' => 'application / json'));
    }


    /**
     * @Route("/manager/damage/{type}/report", name="damage_type_report", methods={"GET"})
     */
    public function damageDecisionSurveyAction(String $type = null,
                                               Request $request,
                                               AuthorizationCheckerInterface $authorizationChecker,
                                               UserRepository $userRepository,
                                               DamageRepository $damageRepository,
                                               TypeRepository $typeRepository,
                                               LoggerInterface $logger
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_PROFILE', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        $this->setType($type, $typeRepository);

        $sHelper = new DamageStructureHelper($userRepository, $damageRepository, $this->getDoctrine()->getManager(), $logger);
        $sHelper->setUser($this->user);
        $sHelper->setType($type, $typeRepository);
        $sHelper->setRootDir($this->get('kernel')->getRootDir());
        $sHelper->setFileDirName('../public/damage_report');
        $sHelper->setFileNamePraefix('damage_survey_');
        $structure = $sHelper->loadStructureJsonFileByType();

        return $this->render('@MainInsuranceBundle/DamageReport/damage.type.survey.html.twig', [
                'user' => $this->user,
                'type' => $this->type->getIdentifier(),
                'structure' => json_encode($structure)
            ]
        );
    }

    /**
     * @Route("/manager/damage/decision", name="damage_type_decision", methods={"GET"})
     */
    public function damageDecisionAction(Request $request,
                                         AuthorizationCheckerInterface $authorizationChecker,
                                         UserRepository $userRepository,
                                         ContractRepositoryAlias $contractRepository
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_PROFILE', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        //$damages = $damageRepository->findBy(['user' => $this->user]);

        $isAllowed = [
            'pli' => 0,
            'hci' => 0,
            'lpi' => 0,
            'aci' => 0,
            'rbi' => 0,
            'ali' => 0,
            'ami' => 0,
            'rli' => 0,
            'msi' => 0
        ];

        $contractList = $contractRepository->findBy(
            [
                'user' => $this->user
            ]
        );
        foreach ($contractList as $contract) {
            if (isset($isAllowed[$contract->getContractType()->getIdentifier()])) {
                $isAllowed[$contract->getContractType()->getIdentifier()] = 1;
            }
        }

        return $this->render('@MainInsuranceBundle/DamageReport/damage.decide.html.twig', [
                'user' => $this->user,
                'isAllowed' => $isAllowed
            ]
        );
    }


    /**
     * @Route("/manager/damage/{id}/send", name="manager_damage_report_send", methods={"GET"})
     */
    public function damageResultPdfSendAction($id = null,
                                              Request $request,
                                              AuthorizationCheckerInterface $authorizationChecker,
                                              UserRepository $userRepository,
                                              DamageRepository $damageRepository,
                                              DamageMediaRepository $damageMediaRepository,
                                              LoggerInterface $logger
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_PROFILE', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        $damage = $damageRepository->find($id);
        $pathUserId = str_pad($this->user->getId(), 10, '0', STR_PAD_LEFT);
        $secretPathDocuments = '../_uploads/manager/' . $pathUserId . '/documents';
        $secretPathImages = '../_uploads/manager/' . $pathUserId . '/images';

        $tmpMedias = $damageMediaRepository->findBy(
            [
                'damage' => $damage
            ],
            [
                'updatedAt' => 'DESC'
            ]
        );

        $mediaObjectPaths = [];
        $mediaObjectPaths[] = $secretPathDocuments . '/' . $damage->getDocumentName();

        foreach ($tmpMedias as $tmpMedia) {
            $mediaObjectPaths[] = $secretPathImages . '/' . $tmpMedia->getMedia()->getName();
        }

        $this->sendDamageReportMail($mediaObjectPaths, $logger);
        return $this->redirectToRoute('show_damages', []);
    }

    /**
     * @Route("/manager/damage/{id}/download", name="manager_damage_report_download")
     */
    public function damageResultPdfDownloadAction($id = null,
                                                  Request $request,
                                                  AuthorizationCheckerInterface $authorizationChecker,
                                                  UserRepository $userRepository,
                                                  DamageRepository $damageRepository
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_PROFILE', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        $damage = $damageRepository->find($id);
        $pathUserId = str_pad($this->user->getId(), 10, '0', STR_PAD_LEFT);
        $secretPath = '../_uploads/manager/' . $pathUserId . '/documents';

        // This should return the file to the browser as response
        $response = new BinaryFileResponse($secretPath . '/' . $damage->getDocumentName());

        // To generate a file download, you need the mimetype of the file
        $mimeTypeGuesser = new FileinfoMimeTypeGuesser();
        // Set the mimetype with the guesser or manually
        if ($mimeTypeGuesser->isSupported()) {
            // Guess the mimetype of the file according to the extension of the file
            $response->headers->set('Content-Type', $mimeTypeGuesser->guess($secretPath . '/' . $damage->getDocumentName()));
        } else {
            // Set the mimetype of the file manually, in this case for a text file is text/plain
            $response->headers->set('Content-Type', 'text/plain');
        }
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $damage->getDocumentName()
        );
        /*
         * return $this->file($secretPath);
         */
        return $response;
    }

    /**
     * @Route("/manager/damages", name="show_damages")
     */
    public function damagesAction(Request $request,
                                  AuthorizationCheckerInterface $authorizationChecker,
                                  UserRepository $userRepository,
                                  DocumentRepository $documentRepository,
                                  DamageRepository $damageRepository,
                                  DamageDocumentRepository $damageDocumentRepository
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_PROFILE', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $pathUserId = str_pad($this->user->getId(), 10, '0', STR_PAD_LEFT);
        $secretPath = '../_uploads/manager/' . $pathUserId . '/documents/custom/';

        $tmpDamages = $damageRepository->findBy(
            [
                'user' => $this->user
            ],
            [
                'updatedAt' => 'DESC'
            ]);

        $damages = [];
        $damageListIsEmpty = false;
        if ($tmpDamages && !empty($tmpDamages)) {
            foreach ($tmpDamages as $tmpDamage) {
                if ($tmpDamage && !empty($tmpDamage)) {
                    $damageDocument = $damageDocumentRepository->findOneBy(
                        [
                            'damage' => $tmpDamage
                        ]);

                    $tmpDocumentId = (null != $damageDocument
                        && null != $damageDocument->getDocument()
                        && null != $damageDocument->getDocument()->getId())
                        ? $damageDocument->getDocument()->getId() : null;

                    if (!is_file($secretPath . '/damage/' . $tmpDamage->getDocumentName())) {
                        $tmpDocumentId = null;
                    }
                    $damage = [];
                    $damage['id'] = $tmpDamage->getId();
                    $damage['publicName'] = $tmpDamage->getPublicName();
                    $damage['documentId'] = $tmpDocumentId;
                    //$damage['link'] = $secretPath . '/' . $tmpDamage->getDocumentName();
                    $updated = $tmpDamage->getUpdatedAt()->format('d.m.Y (H:i:s)');
                    // {{ damage.updatedAt|date("d.m.Y H:m:s") }}
                    $damage['updatedAt'] = $updated;
                    $damage['countMedia'] = 3;
                    $damages[] = $damage;
                }
            }
        }
        if (empty($damages)) {
            $damageListIsEmpty = true;
        }
        return $this->render('@MainInsuranceBundle/DamageReport/damages.html.twig', [
                'user' => $this->user,
                'damageList' => $damages,
                'damageListIsEmpty' => $damageListIsEmpty
            ]
        );
    }
}
