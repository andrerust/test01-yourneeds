<?php

namespace Main\UserBundle\Controller\Web;

use AppBundle\Controller\BaseController;
use AppBundle\Helper\DateHelper;
use DateTime;
use Main\InsuranceBundle\Helper\Structure\SurveyStructureHelper;
use Main\InsuranceBundle\Repository\ProcessActivityRepository;
use Main\InsuranceBundle\Repository\ProcessRepository;
use Main\InsuranceBundle\Repository\ProcessStatusRepository;
use Main\InsuranceBundle\Repository\ProcessTariffTrackerRepository;
use Main\InsuranceBundle\Repository\ProcessTypeRepository;
use Main\InsuranceBundle\Repository\StructureRepository;
use Main\InsuranceBundle\Repository\TypeRepository;
use Main\UserBundle\Entity\Address;
use Main\UserBundle\Entity\Custom\User\EditUserRequest;
use Main\UserBundle\Form\User\Admin\EditUserFormType;
use Main\UserBundle\Repository\ActivityRepository;
use Main\UserBundle\Repository\BenefitPartnerRepository;
use Main\UserBundle\Repository\BenefitPartnerUserRepository;
use Main\UserBundle\Repository\UserAddressRepository;
use Main\UserBundle\Repository\UserRepository;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class ManagerController extends BaseController
{
    /**
     * @Route("/manager/edit", name="manager_edit", requirements={"id" = "\d+"}, defaults={"id" = 0})
     */
    public function editManagerAction($id = null,
                                      Request $request,
                                      AuthorizationCheckerInterface $authorizationChecker,
                                      UserRepository $userRepository
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_PROFILE', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }


        $user = $this->user;
        $editRequest = EditUserRequest::factory($user);
        $form = $this->createForm(EditUserFormType::class, $editRequest, [
            'action' => $this->generateUrl('manager_edit', [
                'id' => $this->user->getId()
            ]),
            'attr' => [
                'id' => 'edit_user_form',
                'name' => 'edit_user_form',
                'class' => 'well form-horizontal edit_user_form'
            ],
            'method' => 'POST'
        ]);

        $currentImage = $editRequest->getProfilePicture();
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $titles = $em->getRepository('MainUserBundle:Title')
            ->findAll();

        $familyStatus = $em->getRepository('MainUserBundle:FamilyStatus')
            ->findAll();

        $jobGroups = $em->getRepository('MainAdminBundle:JobGroup')
            ->findAll();

        if ($form->isSubmitted()) {
            $validator = $this->get('validator');
            $errors = $validator->validate($editRequest);
            if (count($errors) > 0) {
                $this->addErrors($errors);
            } else {
                if ($form->isValid()) {
                    //$editRequest = $form->getData();
                    if ($editRequest->getProfilePicture() == null) {
                        $user->setProfilePicture($currentImage);
                    } else {
                        $file = $editRequest->getProfilePicture();
                        $fileService = $this->get('app.service.file_uploader');
                        $fileService->setActiveTargetDir("profiles");
                        $fileName = $fileService->upload($file);
                        $user->setProfilePicture($fileName);
                    }
                    /*if ($this->validateEmail($em, $editRequest->getEmail()) &&
                         $this->validatePhoneNumber($em, $editRequest->getPhoneNumber())
                    ) {*/
                    $user->setGender($editRequest->getGender());
                    $user->setFirstName($editRequest->getFirstName());
                    $user->setLastName($editRequest->getLastName());

                    $user->setEmail($editRequest->getEmail());
                    $user->setPhoneNumber($editRequest->getPhoneNumber());
                    $user->setBirthdate($editRequest->getBirthdate());
                    $user->setEmployer($editRequest->getEmployer());

                    if ($editRequest->getUserTitle() != null) {
                        $user->setUserTitle($em->getRepository('MainUserBundle:Title')
                            ->find($editRequest->getUserTitle()));
                    } else {
                        $user->setUserTitle($em->getRepository('MainUserBundle:Title')
                            ->findBy(['isDefault' => 1])[0]);
                    }

                    $user->setFamilyStatus($em->getRepository('MainUserBundle:FamilyStatus')
                        ->find($editRequest->getFamilyStatus()));

                    $user->setJobGroup($em->getRepository('MainAdminBundle:JobGroup')
                        ->find($editRequest->getJobGroup()));

                    //print_r($user->getJobGroup()->getId());die;
                    $em->persist($user);
                    $em->flush();
                    /*
                    $user = $form->getData();
                    */
                    if ($this->user && $this->user->getId() > 0) {
                        $address = null;
                        if (isset($this->user->getUserAddresses()[0])) {
                            return $this->redirectToRoute('manager_personal_data', []);
                        } else {
                            return $this->redirectToRoute('manager_address_new', []);
                        }
                    }

                    //} // mailIsUnique
                } // isValid
            } // count > 0
        } // isSubmitted


        $addressFlag = false;
        if (isset($this->user->getUserAddresses()[0])) {
            $addressFlag = true;
        }
        return $this->render('@MainUserBundle/Manager/profile/manager.edit.html.twig', [
            'user' => $this->user,
            'userId' => $user->getId(),
            'titles' => $titles,
            'addressFlag' => $addressFlag,
            'familyStatus' => $familyStatus,
            'jobGroups' => $jobGroups,
            'form' => $form->createView(),
            'errors' => $this->errorList
        ]);
    }

    /**
     * @Method({"PUT", "GET"})
     * @Route("/manager/{type}/result/{tariffId}", name="manager_show_result")
     */
    public function managerTypeShowApplicationAction(String $type = null,
                                                     $tariffId = null,
                                                     Request $request,
                                                     AuthorizationCheckerInterface $authorizationChecker,
                                                     UserRepository $userRepository,
                                                     TypeRepository $typeRepository,
                                                     StructureRepository $structureRepository,
                                                     ProcessTariffTrackerRepository $processTariffTrackerRepository,
                                                     ProcessRepository $processRepository,
                                                     ProcessStatusRepository $processStatusRepository,
                                                     ProcessTypeRepository $processTypeRepository,
                                                     ProcessActivityRepository $processActivityRepository,
                                                     ActivityRepository $activityRepository,
                                                     BenefitPartnerRepository $benefitPartnerRepository,
                                                     BenefitPartnerUserRepository $benefitPartnerUserRepository,
                                                     LoggerInterface $logger
    )
    {

        $this->initialize();
        if (!$this->allowedToUse('CAN_DO_APPLICATION', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $this->setType($type, $typeRepository);
        $typeIdentifier = $this->type->getIdentifier();

        $process = $this->saveProcess('survey', 'incomplete', 'application is open', 8,
            $processRepository, $processStatusRepository, $processTypeRepository);
        $processActivity = $this->saveActivity('application_is_open', $activityRepository,
            $process, '', 'Zahlweise ausgewählt ' . $this->apiTypeMapping[$this->type->getIdentifier()] . ' abgeschlossen', '', $processActivityRepository);

        $tmpProcessTracker = $processTariffTrackerRepository->findOneBy(
            [
                'process' => $process,
                'type' => $this->type,
                'isChoosen' => 1
            ],
            [
                'updatedAt' => 'DESC'
            ]
        );
        if (null !== $tmpProcessTracker
            && null != $tmpProcessTracker->getTariffId()
            && null != $tmpProcessTracker->getTmpTariffId()
        ) {
            //return $this->redirectToRoute('manager_choose_survey');
            $tariffId = $tmpProcessTracker->getTariffId();
            $tmpTariffId = $tmpProcessTracker->getTmpTariffId();
            $userIp = $tmpProcessTracker->getUserIp();
        }
        //print_r($tmpProcessTracker->getId());

        $sHelper = new SurveyStructureHelper($userRepository, $structureRepository, $this->getDoctrine()->getManager(), $logger);
        $sHelper->setUser($this->user);
        $sHelper->setRootDir($this->get('kernel')->getRootDir());
        $sHelper->setType($type, $typeRepository);
        $sHelper->loadLastStructure();
        if (false !== $sHelper->hasErrors()) {
            //print_r($sHelper->getErrors());
        } else {
            // $tmpStruc = $sHelper->getStructureAsArray();
        }
        $structure = $sHelper->getStructureAsArray();

        $urlBuilderClassName = 'Main\\InsuranceBundle\\Helper\\Url\\Application\\' . ucfirst($typeIdentifier . 'ApplicationUrlBuilder');
        $urlBuilder = (new $urlBuilderClassName());
        $urlBuilder->setUserRepository($userRepository);
        $urlBuilder->setUser($this->user);
        $urlBuilder->setIpAddOn();
        $urlBuilder->setUserIp($userIp);
        $urlBuilder->setBrokerId($this->getBrokerId());

        $benefitPartnerUser = $benefitPartnerUserRepository->findOneBy(
            [
                'user' => $this->user
            ],
            [
                'createdAt' => 'DESC'
            ]
        );
        if (null !== $benefitPartnerUser) {
            $urlBuilder->setBrokerSubId($this->getBrokerSubId());
        }

        $urlBuilder->setType($type, $typeRepository);
        $urlBuilder->setStructure($structure);
        $urlBuilder->setTariffId($tariffId);
        $urlBuilder->setTariffIdTmp($tmpTariffId);
        $tmpPayment = (null != $tmpProcessTracker && null != $tmpProcessTracker->getChoosenPayment())
            ? $tmpProcessTracker->getChoosenPayment() : 1;
        $urlBuilder->setPayment($tmpPayment);
        $urlBuilder->build();
        $urlBuilder->addApplication();
        $url = $urlBuilder->get();

        //print_r($url);
        //print_r(strtolower($tariffType[0]->getShortName()));die;
        return $this->render('@MainUserBundle/Manager/application.html.twig', [
                'user' => $this->user,
                'type' => $type,
                'url' => $url
            ]
        );
    }

    private function formatCurrency($value = null)
    {
        return number_format((float)$value, 2, '.', '');
    }


    /**
     * @Method({"GET"})
     * @Route("/manager/choose/{type}/{tariffId}/payment/{payment}/save", name="manager_choose_payment_save", requirements={"id" = "\d+"}, defaults={"id" = 0})
     */
    public function savePaymentAction(String $type = null,
                                      $payment = null,
                                      $tariffId = null,
                                      Request $request,
                                      AuthorizationCheckerInterface $authorizationChecker,
                                      UserRepository $userRepository,
                                      TypeRepository $typeRepository,
                                      ProcessTariffTrackerRepository $processTariffTrackerRepository,
                                      ProcessRepository $processRepository,
                                      ProcessStatusRepository $processStatusRepository,
                                      ProcessTypeRepository $processTypeRepository,
                                      ProcessActivityRepository $processActivityRepository,
                                      ActivityRepository $activityRepository,
                                      LoggerInterface $logger
    )
    {

        $this->initialize();
        if (!$this->allowedToUse('CAN_SAVE_SURVEY', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $this->setType($type, $typeRepository);
        $typeIdentifier = $this->type->getIdentifier();

        $process = $this->saveProcess('survey', 'incomplete', 'choose payment is done', 7,
            $processRepository, $processStatusRepository, $processTypeRepository);
        $processActivity = $this->saveActivity('choose_payment_is_done', $activityRepository,
            $process, '', 'Zahlweise ausgewählt ' . $this->apiTypeMapping[$this->type->getIdentifier()] . ' abgeschlossen', '', $processActivityRepository);

        $tmpProcessTracker = $processTariffTrackerRepository->findOneBy(
            [
                'process' => $process,
                'type' => $this->type,
                'isChoosen' => 1
            ],
            [
                'updatedAt' => 'DESC'
            ]
        );


        if (null !== $tmpProcessTracker && null !== $tmpProcessTracker->getUpdatedAt()) {
            $tmpProcessTracker->setIsChoosen(1);
            $tmpProcessTracker->setChoosenPayment($payment);
            $tmpProcessTracker->setIsChoosen(1);
            $this->databaseAccessor->persist($tmpProcessTracker);
            $this->databaseAccessor->flush();

            return $this->redirectToRoute('manager_sign_mandate', [
                'type' => $typeIdentifier,
                'tariffId' => $tariffId,
                'userIp' => $tmpProcessTracker->getUserIp()
            ]);
            /*
            return $this->redirectToRoute('manager_survey_type_result', [
                'type' => $typeIdentifier
            ]);
            */
        }
        return $this->redirectToRoute('manager_profile');
    }


    /**
     * @Method({"GET"})
     * @Route("/manager/choose/{type}/{tariffId}/payment", name="manager_choose_payment", requirements={"id" = "\d+"}, defaults={"id" = 0})
     */
    public function choosePaymentAction(String $type = null,
                                        $tariffId = null,
                                        Request $request,
                                        AuthorizationCheckerInterface $authorizationChecker,
                                        UserRepository $userRepository,
                                        TypeRepository $typeRepository,
                                        ProcessTariffTrackerRepository $processTariffTrackerRepository,
                                        ProcessRepository $processRepository,
                                        ProcessStatusRepository $processStatusRepository,
                                        ProcessTypeRepository $processTypeRepository,
                                        ProcessActivityRepository $processActivityRepository,
                                        ActivityRepository $activityRepository,
                                        LoggerInterface $logger
    )
    {

        $this->initialize();
        if (!$this->allowedToUse('CAN_CHOOSE_PAYMENT', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $this->setType($type, $typeRepository);
        $typeIdentifier = $this->type->getIdentifier();

        $process = $this->saveProcess('survey', 'incomplete', 'payment is open', 6,
            $processRepository, $processStatusRepository, $processTypeRepository);
        $processActivity = $this->saveActivity('choose_payment_is_open', $activityRepository,
            $process, '', 'Auswahl Zahlweise' . $this->apiTypeMapping[$this->type->getIdentifier()] . ' abgeschlossen', '', $processActivityRepository);

        $tmpProcessTracker = $processTariffTrackerRepository->findOneBy(
            [
                'process' => $process,
                'type' => $this->type,
                'tmpTariffId' => $tariffId
            ],
            [
                'updatedAt' => 'DESC'
            ]
        );
        if (null === $tmpProcessTracker) {
            return $this->redirectToRoute('manager_choose_survey');
        }

        /*
        print_r($process->getId());
        echo "<br><br>";
        print_r($this->type->getId());
        echo "<br><br>";
        print_r($tariffId);
        echo "<br><br>";
        */
        $paymentFlags = '';
        $paymentValues = '';
        $pFee = 0;

        $tmpProcessTracker->setIsChoosen(1);
        $this->databaseAccessor->persist($tmpProcessTracker);
        $this->databaseAccessor->flush();

        $paymentFlags = str_split($tmpProcessTracker->getPaymentFlags());
        $paymentValues = explode(';', $tmpProcessTracker->getPaymentValues());
        $pFee = floatval(str_replace(',', '.', $tmpProcessTracker->getFee()));

        $index = 0;
        $yearly = 0;
        $pFeeYearly = $pFee;
        $yearlyValue = 0;
        if (isset($paymentFlags[$index]) && $paymentFlags[$index] == 1) {
            $yearly = 1;
            $yearlyValue = (isset($paymentValues[$index])) ? $paymentValues[$index] : 0;
            if ($yearly > 0) {
                $pFeeYearly = $this->formatCurrency(($pFee + (($pFee / 100) * $yearlyValue)) / 12 * 12);
            }
        }


        $index = 1;
        $semiAnnually = 0;
        $semiAnnuallyValue = 0;
        $pFeeSemiAnnually = 0;
        if (isset($paymentFlags[$index]) && $paymentFlags[$index] == 1) {
            $semiAnnually = 1;
            $semiAnnuallyValue = (isset($paymentValues[$index])) ? $paymentValues[$index] : 0;
            if ($semiAnnually > 0) {
                $pFeeSemiAnnually = $this->formatCurrency(($pFee + (($pFee / 100) * $semiAnnuallyValue)) / 12 * 6);
            }
        }

        $index = 2;
        $quaterly = 0;
        $pFeeQuaterly = 0;
        $quaterlyValue = 0;
        if (isset($paymentFlags[$index]) && $paymentFlags[$index] == 1) {
            $quaterly = 1;
            $quaterlyValue = (isset($paymentValues[$index])) ? $paymentValues[$index] : 0;
            if ($quaterly > 0) {
                $pFeeQuaterly = $this->formatCurrency(($pFee + (($pFee / 100) * $quaterlyValue)) / 12 * 3);
            }
        }

        $index = 3;
        $monthly = 0;
        $pFeeMonthly = 0;
        $monthlyValue = 0;
        if (isset($paymentFlags[$index]) && $paymentFlags[$index] == 1) {
            $monthly = 1;
            $monthlyValue = (isset($paymentValues[$index])) ? $paymentValues[$index] : 0;
            if ($monthly > 0) {
                $pFeeMonthly = $this->formatCurrency(($pFee + floatval(($pFee / 100 * $monthlyValue))) / 12);
            }
        }
        $logger->info('Payment parameters: ', [
            'list' => [
                'monthly' => $monthly,
                'monthlyValue' => $monthlyValue,
                'pFeeMonthly' => $pFeeMonthly
            ]
        ]);
        /*
        echo " / ";
        print_r($pFeeYearly);
        echo "<br>";
        print_r($semiAnnually);
        echo "<br>";
        print_r($quaterly);
        echo "<br>";
        print_r($monthlyValue);
        echo " / ";
        print_r(number_format((float)$pFeeMonthly, 2, '.', ''));
        echo "<br>";
        */

        return $this->render('@MainUserBundle/Manager/survey.choose.payment.html.twig', [
            'user' => $this->user,
            'type' => $typeIdentifier,
            'tariffId' => $tariffId,
            'yearly' => $yearly,
            'yearlyValue' => $yearlyValue,
            'yearlyFee' => $pFeeYearly,
            'semiAnnually' => $semiAnnually,
            'semiAnnuallyValue' => $semiAnnuallyValue,
            'semiAnnuallyFee' => $pFeeSemiAnnually,
            'quaterly' => $quaterly,
            'quaterlyValue' => $quaterlyValue,
            'quaterlyFee' => $pFeeQuaterly,
            'monthly' => $monthly,
            'monthlyValue' => $monthlyValue,
            'monthlyFee' => $pFeeMonthly
        ]);
    }

    /**
     * @Method({"PUT"})
     * @Route("/manager/survey/{type}/save", name="manager_survey_type_save")
     */
    public function surveyTypeSaveAction(String $type = null,
                                         Request $request,
                                         AuthorizationCheckerInterface $authorizationChecker,
                                         UserRepository $userRepository,
                                         StructureRepository $structureRepository,
                                         TypeRepository $typeRepository,
                                         ProcessRepository $processRepository,
                                         ProcessStatusRepository $processStatusRepository,
                                         ProcessTypeRepository $processTypeRepository,
                                         ProcessActivityRepository $processActivityRepository,
                                         ActivityRepository $activityRepository,
                                         LoggerInterface $logger
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_SAVE_SURVEY', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $this->setType($type, $typeRepository);
        $typeIdentifier = $this->type->getIdentifier();

        if (0 === strpos($request->headers->get('Content-Type'), 'application/json')) {
            $data = json_decode($request->getContent(), true);
            $request->request->replace(is_array($data) ? $data : array());
        }
        $requestData = json_encode($data['structure']);
        /*
                $requestData = '
        {"targetGroup":"family","governmentEmployee":"yes","govenmentEmployeeLiability":"yes","govenmentCommittee":"teacher","governmentAdditionalServices":["none","Vehicles"],"badDeptLoss":"no","dataExchange":"unimportant","numberOfPreviousCases":"no","amountCovered":"1000000","amountCoveredUSA":"yes"}
        ';
        $requestData = '
{"job":"employee","privateLegallyAssured":"legallyAssured","propertyOrRent":"property","condominiumOrResidentialBuilding":"residentialBuilding","hasVehicle":["car","camper"],"hasPersonalLiabilityInsurance":"yes","horsesAndDogs":["none"],"livingTogether":"own","lawSupport":"yes","accident":"yes","survivingDependants":"yes"}
';
        */

        $jsonResponse['data'] = [];
        if ($requestData) {
            $jsonResponse['data'] = $requestData;
            /*
             * set structure
             */
            $sHelper = new SurveyStructureHelper($userRepository, $structureRepository, $this->getDoctrine()->getManager(), $logger);
            $sHelper->setUser($this->user);
            $sHelper->setRootDir($this->get('kernel')->getRootDir());
            $sHelper->setType($type, $typeRepository);
            $sHelper->buildStructure(null, null, $type, $requestData, '', 1);

            $process = $this->saveProcess('survey', 'incomplete', 'survey done', 4,
                $processRepository, $processStatusRepository, $processTypeRepository);
            $processActivity = $this->saveActivity('do_survey_is_done', $activityRepository,
                $process, '', 'Tarifumfrage ' . $this->apiTypeMapping[$this->type->getIdentifier()] . ' abgeschlossen', '', $processActivityRepository);
        }
        return new JsonResponse($jsonResponse, 200, array('Access-Control-Allow-Origin' => '*', 'Content-Type' => 'application/json'));
    }

    /**
     * @Method({"GET"})
     * @Route("/manager/survey/{type}", name="manager_survey_type")
     * @throws \Exception
     */
    public function surveyTypeDoAction(String $type = null,
                                       Request $request,
                                       AuthorizationCheckerInterface $authorizationChecker,
                                       UserRepository $userRepository,
                                       StructureRepository $structureRepository,
                                       TypeRepository $typeRepository,
                                       ProcessRepository $processRepository,
                                       ProcessStatusRepository $processStatusRepository,
                                       ProcessTypeRepository $processTypeRepository,
                                       ProcessActivityRepository $processActivityRepository,
                                       ActivityRepository $activityRepository,
                                       LoggerInterface $logger
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_DO_SURVEY', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        $this->setType($type, $typeRepository);
        $typeIdentifier = $this->type->getIdentifier();
        /*
         * set structure
         */
        $sHelper = new SurveyStructureHelper($userRepository, $structureRepository, $this->getDoctrine()->getManager(), $logger);
        $sHelper->setUser($this->user);
        $sHelper->setRootDir($this->get('kernel')->getRootDir());
        $sHelper->setType($type, $typeRepository);
        $sHelper->loadLastStructure();

        $structure = $sHelper->loadStructureJsonFileByType();
        //print_r($sHelper->getErrors());
        $process = $this->saveProcess('survey', 'incomplete', 'choose survey type done', 2,
            $processRepository, $processStatusRepository, $processTypeRepository);
        $processActivity = $this->saveActivity('choose_type_is_done', $activityRepository,
            $process, '', 'Tarifauswahl ' . $this->apiTypeMapping[$typeIdentifier] . ' getroffen', '', $processActivityRepository);

        $process = $this->saveProcess('survey', 'incomplete', 'start survey', 3,
            $processRepository, $processStatusRepository, $processTypeRepository);
        $processActivity = $this->saveActivity('do_survey_is_open', $activityRepository,
            $process, '', 'Tarifumfrage ' . $this->apiTypeMapping[$typeIdentifier] . ' begonnen', '', $processActivityRepository);

        $birthDate = new DateTime($this->user->getBirthdate());
        $currentYear = (new DateTime())->format('Y');
        $yearOfBirth = $birthDate->format('Y');

        return $this->render('@MainUserBundle/Manager/survey.type.html.twig', [
                'user' => $this->user,
                'type' => $type,
                'structure' => json_encode($structure),
                'recommendedSumSeniorAge' => '65',
                'yearOfBirth' => $yearOfBirth,
                'recommendedSumCurrentYear' => $currentYear,
                'recommendedSumCurrentDivider' => '3.5',
            ]
        );
    }

    /**
     * @Method({"GET"})
     * @Route("/manager/choose/survey", name="manager_choose_survey")
     */
    public function chooseSurveyAction(Request $request,
                                       AuthorizationCheckerInterface $authorizationChecker,
                                       UserRepository $userRepository,
                                       StructureRepository $structureRepository,
                                       TypeRepository $typeRepository,
                                       ProcessRepository $processRepository,
                                       ProcessStatusRepository $processStatusRepository,
                                       ProcessTypeRepository $processTypeRepository,
                                       ProcessActivityRepository $processActivityRepository,
                                       ActivityRepository $activityRepository,
                                       LoggerInterface $logger
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_CHOOSE_SURVEY', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        $type = 'basicneeds';
        $this->setType($type, $typeRepository);
        $typeIdentifier = $this->type->getIdentifier();

        /*
         * allow type processes
         */
        $isAllowed = [
            'basicneeds' => 1,
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
        $isAllowedBlocked = [
            'basicneeds' => 0,
            'pli' => 0,
            'hci' => 0,
            'lpi' => 0,
            'aci' => 0,
            'rbi' => 0,
            'ali' => 0,
            'ami' => 1,
            'rli' => 1,
            'msi' => 1
        ];
        // rli = risk life insurance
        // msi = medical supplement insurance
        $showGlobalProtectionText = false;
        $globalProtection = $isAllowed;

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
        $address = new Address();
        if (isset($userAddresses[0]) && $userAddresses[0]->getId() > 0) {
            $address = $userAddresses[0];
            if (empty($address->getPostalCode())
                || empty($address->getStreet())
                || empty($address->getStreetNumber())
                || empty($address->getCity())
            ) {
                $addressFlag = true;
            }
        } else {
            $addressFlag = true;
        }

        if (true === $addressFlag || true === $userFlag) {
            $showGlobalProtectionText = true;
            $isAllowed = $globalProtection;
            $isAllowedBlocked = [
                'basicneeds' => 1,
                'pli' => 1,
                'hci' => 1,
                'lpi' => 1,
                'aci' => 1,
                'rbi' => 1,
                'ali' => 1,
                'ami' => 1
            ];
        }

        /*
         * set basic needs structure to identify opening of types
         */
        $sHelper = new SurveyStructureHelper($userRepository, $structureRepository, $this->getDoctrine()->getManager(), $logger);
        $sHelper->setType($type, $typeRepository);
        $sHelper->setUser($this->user);
        $sHelper->loadLastStructure();
        //print_r($sHelper->getStructureAsArray());
        if (false !== $sHelper->hasErrors()) {
            // show error
        } else {
            if (null != $sHelper->getStructureAsArray()
                && !empty($sHelper->getStructureAsArray())
            ) {
                foreach ($isAllowed as $key => $value) {
                    if (isset($isAllowedBlocked[$key]) && $isAllowedBlocked[$key] == 0)
                        if ('basicneeds' == $key) {
                            $isAllowed['basicneeds'] = 1;
                        } elseif ('pli' == $key) {
                            $structureValue = $sHelper->getStructureValue('hasPersonalLiabilityInsurance');
                            if ('no' == $structureValue) {
                                $structureValueTmp = $sHelper->getStructureValue('hasPersonalLiabilityInsuranceOthers');
                                if ('no' == $structureValueTmp) {
                                    $isAllowed['pli'] = 1;
                                }
                            } elseif ('yes' == $structureValue) {
                                $isAllowed['pli'] = 1;
                            }
                        } elseif ('hci' == $key) {
                            $structureValue = $sHelper->getStructureValue('livingTogether');
                            if (!empty($structureValue)) {
                                $isAllowed['hci'] = 1;
                            }
                        } elseif ('lpi' == $key) {
                            $structureValue = $sHelper->getStructureValue('lawSupport');
                            if ('yes' == $structureValue) {
                                $isAllowed['lpi'] = 1;
                            }
                        } elseif ('aci' == $key) {
                            $structureValue = $sHelper->getStructureValue('accident');
                            if (!empty($structureValue)) {
                                $isAllowed['aci'] = 1;
                            }
                        } elseif ('rbi' == $key) {
                            $structureValue = $sHelper->getStructureValue('condominiumOrResidentialBuilding');
                            if (!empty($structureValue)) {
                                $isAllowed['rbi'] = 1;
                            }
                        } elseif ('ali' == $key) {
                            $structureValue = $sHelper->getStructureValue('horsesAndDogs');
                            if (!empty($structureValue) && $structureValue != 'none') {
                                $isAllowed['ali'] = 1;
                            }
                        } elseif ('ami' == $key) {
                            $structureValue = $sHelper->getStructureValue('hasVehicleSentinel');
                            if (!empty($structureValue) && $structureValue != 'yes') {
                                $isAllowed['ali'] = 1;
                            }
                        } elseif ('rli' == $key) {
                            $structureValue = $sHelper->getStructureValue('hasVehicleSentinel');
                            if (!empty($structureValue) && $structureValue != 'yes') {
                                $isAllowed['ali'] = 1;
                            }
                        } elseif ('msi' == $key) {
                            $structureValue = $sHelper->getStructureValue('hasVehicleSentinel');
                            if (!empty($structureValue) && $structureValue != 'yes') {
                                $isAllowed['ali'] = 1;
                            }
                        }

                }
            }
        }

        if (null === $sHelper->getStructure()) {
            $showGlobalProtectionText = true;
            $isAllowed = $globalProtection;
            $isAllowed['basicneeds'] = 1;
        }
        // user age to low
        $dateHelper = new DateHelper();
        $userAgeToLow = false;
        $birthDate = new DateTime($this->user->getBirthdate());
        $dateDifferenceUserAge = $dateHelper->getDateDifferenceInYears($birthDate, new DateTime());
        if (null !== $dateDifferenceUserAge && $dateDifferenceUserAge < 18) {
            $userAgeToLow = true;
            $isAllowed = [
                'basicneeds' => 0,
                'pli' => 0,
                'hci' => 0,
                'lpi' => 0,
                'aci' => 0,
                'rbi' => 0,
                'ali' => 0,
                'ami' => 0,
                'rli' => 0,
                'msi' => 0,
            ];
        }

        $process = $this->saveProcess('survey', 'incomplete', 'choose survey type open', 1,
            $processRepository, $processStatusRepository, $processTypeRepository, 1);
        $processActivity = $this->saveActivity('choose_type_is_open', $activityRepository,
            $process, '', 'Du hast die Tarifauswahl aufgerufen', '', $processActivityRepository);

        return $this->render('@MainUserBundle/Manager/choose.survey.html.twig', [
            'user' => $this->user,
            'showGlobalProtectionText' => $showGlobalProtectionText,
            'globalProtection' => $globalProtection,
            'isAllowed' => $isAllowed,
            'userFlag' => $userFlag,
            'addressFlag' => $addressFlag,
            'userAgeToLow' => $userAgeToLow,
            'address' => $address
        ]);
    }

    /**
     * @Method({"GET"})
     * @Route("/manager/personal", name="manager_personal_data")
     */
    public function personalDataAction(Request $request,
                                       AuthorizationCheckerInterface $authorizationChecker,
                                       UserRepository $userRepository,
                                       ProcessRepository $processRepository,
                                       ProcessStatusRepository $processStatusRepository,
                                       ProcessTypeRepository $processTypeRepository,
                                       ProcessActivityRepository $processActivityRepository,
                                       ActivityRepository $activityRepository,
                                       UserAddressRepository $userAddressRepository,
                                       LoggerInterface $logger
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_PROFILE', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        if (1 == $this->user->getIsBlocked()) {
            return $this->redirectToRoute('security_logout');
        }

        $bankAccount = null;
        $userAddresses = $userAddressRepository->findBy(
            [
                'user' => $this->user,
            ],
            [
                'isMain' => 'DESC'
            ]
        );
        if (isset($this->user->getBankAccounts()[0])) {
            $bankAccount = $this->user->getBankAccounts()[0];
        }
        /*
                $process = $this->saveProcess('visit', 'continue', 'walking', 0,
                    $processRepository, $processStatusRepository, $processTypeRepository);
                $processActivity = $this->saveActivity('profile_is_open', $activityRepository,
                    $process, '', 'Du hast dein Profil besucht', '', $processActivityRepository);
        */
        return $this->render('@MainUserBundle/Manager/personal.data.html.twig', [
            'user' => $this->user,
            'addresses' => $userAddresses,
            'bankAccount' => $bankAccount
        ]);
    }


    /**
     * @Method({"GET"})
     * @Route("/manager/profile/help", name="manager_profile_help")
     */
    public function profileHelpAction(Request $request,
                                      AuthorizationCheckerInterface $authorizationChecker,
                                      UserRepository $userRepository,
                                      ProcessRepository $processRepository,
                                      ProcessStatusRepository $processStatusRepository,
                                      ProcessTypeRepository $processTypeRepository,
                                      ProcessActivityRepository $processActivityRepository,
                                      ActivityRepository $activityRepository,
                                      LoggerInterface $logger
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_PROFILE', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        if (1 == $this->user->getIsBlocked()) {
            return $this->redirectToRoute('security_logout');
        }
        if ($this->user && $this->user->getId() > 0) {
            $address = null;
            if (isset($this->user->getUserAddresses()[0])) {
                $address = $this->user->getUserAddresses()[0];
            }
            $bankAccount = null;
            if (isset($this->user->getBankAccounts()[0])) {
                $bankAccount = $this->user->getBankAccounts()[0];
            }
        }

        /*

        $process = $this->saveProcess('visit', 'continue', 'walking', 0,
            $processRepository, $processStatusRepository, $processTypeRepository);
        $processActivity = $this->saveActivity('profile_is_open', $activityRepository,
            $process, '', 'Du hast dein Profil besucht', '', $processActivityRepository);
*/
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
        $address = new Address();
        if (isset($userAddresses[0]) && $userAddresses[0]->getId() > 0) {
            $address = $userAddresses[0];
            if (empty($address->getPostalCode())
                || empty($address->getStreet())
                || empty($address->getStreetNumber())
                || empty($address->getCity())
            ) {
                $addressFlag = true;
            }
        } else {
            $addressFlag = true;
        }

        $isAllowed = [
            'basicneeds' => 1,
            'pli' => 1,
            'hci' => 1,
            'lpi' => 1
        ];

        $showGlobalProtectionText = false;
        $globalProtection = $isAllowed;

        return $this->render('@MainUserBundle/Manager/profile.help.html.twig', [
            'user' => $this->user,
            'address' => $address,
            'bankAccount' => $bankAccount,
            'userFlag' => $userFlag,
            'showGlobalProtectionText' => $showGlobalProtectionText,
            'globalProtection' => $globalProtection,
            'isAllowed' => $isAllowed,
            'addressFlag' => $addressFlag
        ]);
    }

    /**
     * @Method({"GET"})
     * @Route("/manager/profile/check", name="manager_profile_check")
     */
    public function profileCheckAction(Request $request,
                                       AuthorizationCheckerInterface $authorizationChecker,
                                       UserRepository $userRepository,
                                       ProcessRepository $processRepository,
                                       ProcessStatusRepository $processStatusRepository,
                                       ProcessTypeRepository $processTypeRepository,
                                       ProcessActivityRepository $processActivityRepository,
                                       ActivityRepository $activityRepository,
                                       LoggerInterface $logger
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_PROFILE', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        if (1 == $this->user->getIsBlocked()) {
            return $this->redirectToRoute('security_logout');
        }
        if ($this->user && $this->user->getId() > 0) {
            $address = null;
            if (isset($this->user->getUserAddresses()[0])) {
                $address = $this->user->getUserAddresses()[0];
            }
            $bankAccount = null;
            if (isset($this->user->getBankAccounts()[0])) {
                $bankAccount = $this->user->getBankAccounts()[0];
            }
        }

        /*
        $process = $this->saveProcess('visit', 'continue', 'walking', 0,
            $processRepository, $processStatusRepository, $processTypeRepository);
        $processActivity = $this->saveActivity('profile_is_open', $activityRepository,
            $process, '', 'Du hast dein Profil besucht', '', $processActivityRepository);
*/
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
        $address = new Address();
        if (isset($userAddresses[0]) && $userAddresses[0]->getId() > 0) {
            $address = $userAddresses[0];
            if (empty($address->getPostalCode())
                || empty($address->getStreet())
                || empty($address->getStreetNumber())
                || empty($address->getCity())
            ) {
                $addressFlag = true;
            }
        } else {
            $addressFlag = true;
        }

        $isAllowed = [
            'basicneeds' => 1,
            'pli' => 1,
            'hci' => 1,
            'lpi' => 0
        ];

        $showGlobalProtectionText = false;
        $globalProtection = $isAllowed;

        return $this->render('@MainUserBundle/Manager/profile.check.html.twig', [
            'user' => $this->user,
            'address' => $address,
            'bankAccount' => $bankAccount,
            'userFlag' => $userFlag,
            'showGlobalProtectionText' => $showGlobalProtectionText,
            'globalProtection' => $globalProtection,
            'isAllowed' => $isAllowed,
            'addressFlag' => $addressFlag
        ]);
    }

    /**
     * @Method({"GET"})
     * @Route("/manager/home", name="manager_home")
     */
    public function profileAction(Request $request,
                                  AuthorizationCheckerInterface $authorizationChecker,
                                  UserRepository $userRepository,
                                  ProcessRepository $processRepository,
                                  ProcessStatusRepository $processStatusRepository,
                                  ProcessTypeRepository $processTypeRepository,
                                  ProcessActivityRepository $processActivityRepository,
                                  ActivityRepository $activityRepository,
                                  LoggerInterface $logger
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_PROFILE', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        if (1 == $this->user->getIsBlocked()) {
            return $this->redirectToRoute('security_logout');
        }
        if ($this->user && $this->user->getId() > 0) {
            $doRedirect = false;
            if (true == $this->user->getNewsShown()) {
                //return $this->redirectToRoute('manager_greetings');
                $dateDifference = null;
                if (null !== $this->user->getNewsShownUpdate()) {
                    $dateHelper = new DateHelper();
                    $dateDifference = $dateHelper->getDateDifferenceInMinutes($this->user->getNewsShownUpdate(), new DateTime());
                    if (null !== $dateDifference && $dateDifference > 1) {
                        $doRedirect = true;
                        return $this->redirectToRoute('manager_greetings');
                    }
                }
            } else {
                $doRedirect = true;
            }
            if (true == $doRedirect) {
                return $this->redirectToRoute('manager_greetings');
            }
            $bankAccount = null;
            if (isset($this->user->getBankAccounts()[0])) {
                $bankAccount = $this->user->getBankAccounts()[0];
            }
        }

        $process = $this->saveProcess('visit', 'continue', 'walking', 0,
            $processRepository, $processStatusRepository, $processTypeRepository);
        $processActivity = $this->saveActivity('profile_is_open', $activityRepository,
            $process, '', 'Du hast dein Profil besucht', '', $processActivityRepository);


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
        $address = new Address();
        if (isset($userAddresses[0]) && $userAddresses[0]->getId() > 0) {
            $address = $userAddresses[0];
            if (empty($address->getPostalCode())
                || empty($address->getStreet())
                || empty($address->getStreetNumber())
                || empty($address->getCity())
            ) {
                $addressFlag = true;
            }
        } else {
            $addressFlag = true;
        }

        $isAllowed = [
            'basicneeds' => 1,
            'pli' => 1,
            'hci' => 1,
            'lpi' => 1
        ];

        $showGlobalProtectionText = false;
        $globalProtection = $isAllowed;

        return $this->render('@MainUserBundle/Manager/profile.html.twig', [
            'user' => $this->user,
            'address' => $address,
            'bankAccount' => $bankAccount,
            'showGlobalProtectionText' => $showGlobalProtectionText,
            'globalProtection' => $globalProtection,
            'isAllowed' => $isAllowed,
            'userFlag' => $userFlag,
            'addressFlag' => $addressFlag
        ]);
    }


    /**
     * @Method({"GET"})
     * @Route("/manager/greetings", name="manager_greetings")
     */
    public function greetingsAction(Request $request,
                                    AuthorizationCheckerInterface $authorizationChecker,
                                    UserRepository $userRepository,
                                    LoggerInterface $logger
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_PROFILE', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        if (1 == $this->user->getIsBlocked()) {
            return $this->redirectToRoute('security_logout');
        }
        //$isBP = $this->user->isBenefitPartnerContactPerson();
        $newsFlag = 1;
        $this->user->setNewsShown(1);
        $this->user->setNewsShownUpdate(new \DateTime("now"));
        $this->databaseAccessor->persist($this->user);
        $this->databaseAccessor->flush();

        return $this->render('@MainUserBundle/Manager/greetings.html.twig', [
            'user' => $this->user,
            'newsFlag' => $newsFlag
        ]);
    }
}