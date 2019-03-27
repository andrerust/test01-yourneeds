<?php

namespace Main\InsuranceBundle\Controller;

use AppBundle\AppInterface\iStringHelper;
use AppBundle\Controller\BaseController;
use AppBundle\Helper\ConstantHelper;
use AppBundle\Helper\DateHelper;
use AppBundle\Helper\StringHelper;
use AppBundle\Repository\DocumentRepository;
use AppBundle\Repository\DocumentTypeRepository;
use DateTime;
use Main\InsuranceBundle\Entity\Contract;
use Main\InsuranceBundle\Entity\Custom\Contract\EditContractRequest;
use Main\InsuranceBundle\Form\Contract\EditContractFormType;
use Main\InsuranceBundle\Repository\CompanyRepository;
use Main\InsuranceBundle\Repository\ContractRepository;
use Main\InsuranceBundle\Repository\TariffTypeRepository;
use Main\InsuranceBundle\Repository\TypeRepository;
use Main\UserBundle\Entity\User;
use Main\UserBundle\Entity\UserAddress;
use Main\UserBundle\Repository\UserAddressRepository;
use Main\UserBundle\Repository\UserRepository;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Swift_Attachment;
use Swift_Mailer;
use Swift_SmtpTransport;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class ContractController extends BaseController implements iStringHelper
{
    /**
     * @Route("/manager/contract/{id}/mail", name="contract_new_mail", methods={"GET"})
     */
    public function contractNewMailAction($id = null,
                                          Request $request,
                                          AuthorizationCheckerInterface $authorizationChecker,
                                          UserRepository $userRepository,
                                          DocumentRepository $documentRepository,
                                          DocumentTypeRepository $documentTypeRepository,
                                          ContractRepository $contractRepository,
                                          UserAddressRepository $userAddressRepository
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_DO_NEW_CONTRACT', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $contract = $contractRepository->find($id);
        $contractTypeName = $contract->getContractType()->getName();

        $agencyNumber = '';
        if (null != $contract->getCompany()->getBrokerNumberGeneral()) {
            $agencyNumber = $contract->getCompany()->getBrokerNumberGeneral();
        }
        $companyName = '';
        if (null != $contract->getCompany()->getPublicName()) {
            $companyName = $contract->getCompany()->getPublicName();
        }
        $companyMail = '';
        if (null != $contract->getCompany()->getEmailTransfer()
            && !empty($contract->getCompany()->getEmailTransfer())) {
            $companyMail = $contract->getCompany()->getEmailTransfer();
            //$companyMail = 'andre.rust@intertects.com';
        }

        if (true == ConstantHelper::getMailGeneral()['sendMail']) {
            $smtpHostIp = gethostbyname(ConstantHelper::getMailCustomerGeneral()['host']);
            $transport = (new Swift_SmtpTransport($smtpHostIp, ConstantHelper::getMailCustomerGeneral()['port'], null))
                ->setUsername(ConstantHelper::getMailCustomerGeneral()['user'])
                ->setPassword(ConstantHelper::getMailCustomerGeneral()['pass']);
            $mailer = new Swift_Mailer($transport);

            $documentTypeMandate = $documentTypeRepository->findOneBy(
                [
                    'ident' => 'mandate'
                ]
            );
            $attachmentMandate = $documentRepository->findOneBy(
                [
                    'user' => $this->user,
                    'documentType' => $documentTypeMandate
                ]);
            $attachmentDocumentPath = $this->buildDocumentMandateLink($this->user->getId(), $attachmentMandate->getName());
            //print_r($attachmentDocumentPath);die;

            $address = $userAddressRepository->findOneBy(
                [
                    'user' => $this->user,
                    'isMain' => 1
                ]
            );
            $message = (new \Swift_Message('YOURneeds GmbH - Neuer Vertrag, mit Mandat'))
                ->setFrom(
                    [ConstantHelper::getMailCompanyGeneral()['mail'] => ConstantHelper::getMailCompanyGeneral()['sender']])
                ->setTo([ConstantHelper::getMailContracts()['mail'], $companyMail])
                ->setBCC(['andre.rust@intertects.com' => 'Admin'])
                ->setBody(
                    $this->renderView(
                        '@MainInsuranceBundle/Contract/mail/contract.new.html.twig',
                        [
                            'user' => $this->user,
                            'address' => $address,
                            'contract' => $contract,
                            'contractTypeName' => $contractTypeName,
                            'agencyNumber' => $agencyNumber
                        ]
                    ),
                    'text/html'
                )
                ->attach(Swift_Attachment::fromPath($attachmentDocumentPath));
            $mailer->send($message);
            $message = (new \Swift_Message('YOURneeds GmbH - Neuer Vertrag, mit Mandat'))
                ->setFrom(
                    [ConstantHelper::getMailCompanyGeneral()['mail'] => ConstantHelper::getMailCompanyGeneral()['sender']])
                ->setTo([ConstantHelper::getMailContracts()['mail']])
                ->setBCC(['andre.rust@intertects.com' => 'Admin'])
                ->setBody(
                    $this->renderView(
                        '@MainInsuranceBundle/Contract/mail/manager.contract.new.html.twig',
                        [
                            'user' => $this->user,
                            'contract' => $contract,
                            'contractTypeName' => $contractTypeName,
                            'companyName' => $companyName
                        ]
                    ),
                    'text/html'
                )
                ->attach(Swift_Attachment::fromPath($attachmentDocumentPath));
            $mailer->send($message);
        }

        return $this->redirectToRoute('contracts', [
            'id' => $this->user->getId()
        ]);
    }

    /**
     * @Route("/manager/contract/new", name="contract_new")
     */
    public function contractNewAction(Request $request,
                                      AuthorizationCheckerInterface $authorizationChecker,
                                      UserRepository $userRepository,
                                      DocumentRepository $documentRepository,
                                      DocumentTypeRepository $documentTypeRepository,
                                      CompanyRepository $companyRepository,
                                      UserAddressRepository $userAddressRepository,
                                      TypeRepository $typeRepository
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_DO_NEW_CONTRACT', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        $contract = new Contract();

        $formRequest = new EditContractRequest();
        $form = $this->createForm(EditContractFormType::class, $formRequest);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $validator = $this->get('validator');
            $errors = $validator->validate($formRequest);
            if (count($errors) > 0) {
                $this->addErrors($errors);

                //print_r($this->getErrorMessages($form));
                if ($this->hasErrors == true) {
                }
            } else {
                //print_r($formRequest->getDateRuntimeBegin());die;
                if ($form->isValid()) {
                    $contract->setContractType($formRequest->getContractType());
                    $contract->setStatus($formRequest->getStatus());
                    $contract->setDateRuntimeBegin(self::convertStringToDate($formRequest->getDateRuntimeBegin()));
                    $contract->setDateRuntimeEnd(self::convertStringToDate($formRequest->getDateRuntimeBegin()));
                    //$contract->setDateRuntimeEnd(self::convertStringToDate($formRequest->getDateRuntimeEnd()));
                    $contract->setDateProtectionBegin(self::convertStringToDate($formRequest->getDateProtectionBegin()));
                    $contract->setDateProtectionEnd(self::convertStringToDate($formRequest->getDateProtectionBegin()));
                    //$contract->setDateProtectionEnd(self::convertStringToDate($formRequest->getDateProtectionEnd()));
                    $contract->setDateCanceled(self::convertStringToDate($formRequest->getDateCanceled()));
                    $contract->setTariffName($formRequest->getTariffName());
                    $contract->setPaymentInterval($formRequest->getPaymentInterval());
                    $contract->setPaymentFee($formRequest->getPaymentFee());
                    $contract->setRuntime($formRequest->getRuntime());
                    $contract->setRetention($formRequest->getRetention());
                    $contract->setInsuranceNumber($formRequest->getInsuranceNumber());
                    $contract->setIsActive(1);
                    $contract->setUser($this->user);


                    if ($formRequest->getCompany() > 0) {
                        $companyId = $formRequest->getCompany();
                        $contract->setCompany($companyRepository->find($companyId));
                    }

                    if ($formRequest->getContractType() > 0) {
                        $contractId = $formRequest->getContractType();
                        $contractType = $typeRepository->find($contractId);
                        $contract->setContractType($contractType);
                    }
                    $this->databaseAccessor->persist($contract);
                    $this->databaseAccessor->flush();

                    /*
                    return $this->redirectToRoute('contract_new_mail', [
                        'id' => $contract->getId()
                    ]);
                    */
                    $documentTypeMandate = $documentTypeRepository->findOneBy(
                        [
                            'ident' => 'mandate'
                        ]
                    );
                    $documentMandate = $documentRepository->findOneBy(
                        [
                            'user' => $this->user,
                            'documentType' => $documentTypeMandate
                        ]
                    );

                    if ($documentMandate) {
                        return $this->redirectToRoute('contract_new_mail', [
                            'id' => $contract->getId()
                        ]);
                    } else {
                        //print_r($contract->getId());die;
                        return $this->redirectToRoute('manager_contract_sign_mandate', [
                            'type' => $contractType->getIdentifier(),
                            'id' => $contract->getId()
                        ]);
                    }

                }
            }
        }
        $companies = $companyRepository->findBy(
            [],
            [
                'name' => 'ASC'
            ]
        );
        $contractTypes = $typeRepository->findBy(
            [
                'isActive' => 1
            ],
            [
                'name' => 'ASC'
            ]
        );

        $paymentIntervals = [
            ['id' => 1, 'name' => 'monatlich'],
            ['id' => 3, 'name' => 'vierteljährlich'],
            ['id' => 6, 'name' => 'halbjährlich'],
            ['id' => 12, 'name' => 'jährlich'],
        ];

        $status = [
            ['id' => 1, 'name' => 'Aktiv'],
            ['id' => 2, 'name' => 'Gekündigt zum']
        ];

        $runtimes = [
            ['id' => 1, 'name' => '1 Jahr'],
            ['id' => 2, 'name' => '2 Jahre'],
            ['id' => 5, 'name' => '5 Jahre'],
            ['id' => 10, 'name' => '10 Jahre']
        ];


        /*
 * set data update flags for user information
 */
        $userFlag = false;
        if (empty($this->user->getBirthdate())
            || empty($this->user->getFamilyStatus())
            || empty($this->user->getFirstName())
            || empty($this->user->getLastName())
            || empty($this->user->getGender())
            || empty($this->user->getJobGroup())
        ) {
            $userFlag = true;
        }

        $userAddresses = $this->user->getUserAddresses();
        $addressFlag = false;
        $address = new UserAddress();
        if (isset($userAddresses[0]) && $userAddresses[0]->getId() > 0) {
            $address = $userAddresses[0];
            if (empty($address->getPostalCode())
                || empty($address->getStreet())
                || empty($address->getStreetNumber())
                || empty($address->getCity()
                )
            ) {
                $addressFlag = true;
            }
        } else {
            $addressFlag = true;
        }

        $isAllowed = true;
        if (true === $addressFlag || true === $userFlag) {
            $isAllowed = false;
        }


        // user age to low
        $dateHelper = new DateHelper();
        $userAgeToLow = false;
        $birthDate = new DateTime($this->user->getBirthdate());
        $dateDifferenceUserAge = $dateHelper->getDateDifferenceInYears($birthDate, new DateTime());
        if (null !== $dateDifferenceUserAge && $dateDifferenceUserAge < 18) {
            $userAgeToLow = true;
            $isAllowed = false;
        }

        return $this->render('@MainInsuranceBundle/Contract/contract.new.html.twig', [
            'contract' => $contract,
            'id' => $this->user->getId(),
            'user' => $this->user,
            'companies' => $companies,
            'contractTypes' => $contractTypes,
            'runtimes' => $runtimes,
            'paymentIntervals' => $paymentIntervals,
            'statusSet' => $status,
            'form' => $form->createView(),
            'isAllowed' => $isAllowed,
            'userFlag' => $userFlag,
            'addressFlag' => $addressFlag,
            'userAgeToLow' => $userAgeToLow
        ]);
    }


    protected function verifyAccessBySentinel($object, User $user)
    {
        if (!$object) {
            throw $this->createNotFoundException();
        }
        if (!$object->isOwner($user)) {
            $this->denyAccessUnlessGranted('edit', $object);
        }
    }

    /**
     * @Route("/manager/contract/{cid}/edit", name="contract_edit", requirements={"id" = "\d+", "aid" = "\d+"}, defaults={"id" = 0, "aId" = 0})
     */
    public function contractEditAction($cid = null,
                                       Request $request,
                                       AuthorizationCheckerInterface $authorizationChecker,
                                       UserRepository $userRepository,
                                       CompanyRepository $companyRepository,
                                       TariffTypeRepository $tariffTypeRepository,
                                       ContractRepository $contractRepository
    )
    {

        $this->initialize();
        if (!$this->allowedToUse('CAN_CHOOSE_PAYMENT', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        $contract = $contractRepository->find($cid);
        $this->verifyAccessBySentinel($contract, $this->user);

        $formRequest = EditContractRequest::factory($contract);

        $form = $this->createForm(EditContractFormType::class, $formRequest);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $validator = $this->get('validator');
            $errors = $validator->validate($formRequest);
            //print_r($this->getErrorMessages($form));
            if (count($errors) > 0) {
                $this->addErrors($errors);

                if ($this->hasErrors == true) {
                }
            } else {
                if ($form->isValid()) {
                    //print_r($formRequest->getContractType());die;
                    $contract->setContractType($formRequest->getContractType());
                    $contract->setStatus($formRequest->getStatus());
                    $contract->setDateRuntimeBegin(self::convertStringToDate($formRequest->getDateRuntimeBegin()));
                    $contract->setDateRuntimeEnd(self::convertStringToDate($formRequest->getDateRuntimeEnd()));
                    $contract->setDateProtectionBegin(self::convertStringToDate($formRequest->getDateProtectionBegin()));
                    $contract->setDateProtectionEnd(self::convertStringToDate($formRequest->getDateProtectionEnd()));
                    $contract->setTariffName($formRequest->getTariffName());
                    $contract->setPaymentInterval($formRequest->getPaymentInterval());
                    $contract->setPaymentFee($formRequest->getPaymentFee());
                    $contract->setRuntime($formRequest->getRuntime());
                    $contract->setRetention($formRequest->getRetention());
                    $contract->setInsuranceNumber($formRequest->getInsuranceNumber());
                    $contract->setIsActive($formRequest->getIsActive());
                    $contract->setUser($this->user);

                    if ($formRequest->getCompany() > 0) {
                        $companyId = $formRequest->getCompany();
                        $contract->setCompany($companyRepository->find($companyId));
                    }

                    $contractId = $formRequest->getContractType();
                    $tariffType = $tariffTypeRepository->find($contractId);
                    $contract->setContractType($tariffType);
                    if ($formRequest->getContractType() > 0) {
                    }
                    //print_r($tariffType->getIdentifier());die;

                    $em = $this->getDoctrine()->getManager();
                    $em->persist($contract);
                    $em->flush();
                    return $this->redirectToRoute('manager_mandate_sign', [
                        'id' => $this->user->getId(),
                        'type' => $tariffType->getIdentifier()
                    ]);
                }
            }
        }
        $companies = $companyRepository->findAll();
        $contractTypes = $tariffTypeRepository->findAll();
        $paymentIntervals = [
            ['id' => 1, 'name' => 'monatlich'],
            ['id' => 3, 'name' => 'vierteljährlich'],
            ['id' => 6, 'name' => 'halbjährlich'],
            ['id' => 12, 'name' => 'jährlich'],
        ];

        $status = [
            ['id' => 1, 'name' => 'Aktiv'],
            ['id' => 2, 'name' => 'Gekündigt zum']
        ];

        $runtimes = [
            ['id' => 1, 'name' => '1 Jahr'],
            ['id' => 2, 'name' => '2 Jahre'],
            ['id' => 5, 'name' => '5 Jahre'],
            ['id' => 10, 'name' => '10 Jahre']
        ];

        return $this->render('@MainInsuranceBundle/Contract/contract.edit.html.twig', [
            'contract' => $contract,
            'id' => $this->user->getId(),
            'user' => $this->user,
            'companies' => $companies,
            'contractTypes' => $contractTypes,
            'runtimes' => $runtimes,
            'paymentIntervals' => $paymentIntervals,
            'statusSet' => $status,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/manager/contract/{id}", name="contract_read", requirements={"id" = "\d+", "cId" = "\d+"}, defaults={"cId" = 0}, methods={"GET"})
     */
    public function managerContractReadAction(ContractRepository $contractRepository,
                                              Request $request,
                                              AuthorizationCheckerInterface $authorizationChecker,
                                              UserRepository $userRepository
    )
    {

        $this->initialize();
        if (!$this->allowedToUse('CAN_CHOOSE_PAYMENT', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        $contracts = $contractRepository->findBy(['user' => $this->user]);

        return $this->render('@MainInsuranceBundle/Contract/contract.html.twig', [
            'user' => $this->user,
            'contracts' => $contracts
        ]);
    }

    /**
     * @Route("/manager/contracts", name="contracts", methods={"GET"})
     */
    public function managerContractsAction(ContractRepository $contractRepository,
                                           Request $request,
                                           AuthorizationCheckerInterface $authorizationChecker,
                                           UserRepository $userRepository,
                                           DocumentRepository $documentRepository,
                                           LoggerInterface $logger
    )
    {

        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_OWN_CONTRACTS', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        /*
         * CONTRACTS
         */
        $contractList = $contractRepository->findBy(
            [
                'user' => $this->user
            ],
            [
                'updatedAt' => 'DESC'
            ]
        );
        $contractListIsEmpty = false;
        if ($contractList && empty($contractList)) {
            $contractListIsEmpty = true;
        }

        /*
         * DOCUMENTS
         */
        $pathUserId = str_pad($this->user->getId(), 10, '0', STR_PAD_LEFT);
        $secretPath = '../_uploads/manager/' . $pathUserId . '/documents/custom/';

        $tmpDocuments = $documentRepository->findBy(
            [
                'user' => $this->user
            ],
            [
                'updatedAt' => 'DESC'
            ]);

        $documents = [];
        $documentListIsEmpty = false;
        if ($tmpDocuments && !empty($tmpDocuments)) {
            foreach ($tmpDocuments as $tmpDocument) {

                $tmpDocumentName = (null != $tmpDocument
                    && null != $tmpDocument->getDocumentType()
                    && null != $tmpDocument->getDocumentType()->getName())
                    ? $tmpDocument->getDocumentType()->getName() : null;

                $tmpType = (null != $tmpDocument
                    && null != $tmpDocument->getDocumentType())
                    ? $tmpDocument->getDocumentType() : null;

                $tmpTypeFolder = (null != $tmpType && null != $tmpType->getFolder()) ? $tmpType->getFolder() : null;
                $pathUserId = str_pad($this->user->getId(), 10, '0', STR_PAD_LEFT);
                $secretPath = '../_uploads/manager/' . $pathUserId . '/documents/custom/' . $tmpTypeFolder;

                $tmpDocumentId = (null != $tmpDocument
                    && null != $tmpDocument->getId())
                    ? $tmpDocument->getId() : null;

                if (!is_file($secretPath . '/' . $tmpDocument->getName())) {
                    $tmpDocumentId = null;
                }

                $document = [];
                $document['id'] = $tmpDocument->getId();
                $document['name'] = StringHelper::cutMiddlePart($tmpDocument->getName(), 60);
                $document['documentTypeName'] = $tmpDocumentName;
                $document['documentId'] = $tmpDocumentId;
                //$document['link'] = $secretPath . '/' . $tmpDocument->getName();
                $updated = $tmpDocument->getUpdatedAt()->format('d.m.Y (H:i:s)');
                // {{ damage.updatedAt|date("d.m.Y H:m:s") }}
                $document['updatedAt'] = $updated;
                $documents[] = $document;

            }
        } else {
            $documentListIsEmpty = true;
        }
        return $this->render('@MainInsuranceBundle/Contract/contracts.html.twig', [
            'user' => $this->user,
            'contracts' => $contractList,
            'contractListIsEmpty' => $contractListIsEmpty,
            'documentList' => $documents,
            'documentListIsEmpty' => $documentListIsEmpty
        ]);
    }
}