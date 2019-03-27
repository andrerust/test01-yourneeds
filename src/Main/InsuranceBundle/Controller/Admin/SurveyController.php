<?php

namespace Main\InsuranceBundle\Controller\Admin;

use AppBundle\Controller\BaseController;
use Main\InsuranceBundle\Entity\Structure;
use Main\InsuranceBundle\Entity\SurveyQuestion;
use Main\InsuranceBundle\Helper\FileParserHelper;
use Main\InsuranceBundle\Helper\Structure\SurveyStructureHelper;
use Main\InsuranceBundle\Repository\StructureRepository;
use Main\InsuranceBundle\Repository\SurveyQuestionRepository;
use Main\InsuranceBundle\Repository\TariffRepository;
use Main\InsuranceBundle\Repository\TariffTypeRepository;
use Main\InsuranceBundle\Repository\TypeRepository;
use Main\UserBundle\Repository\UserRepository;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class SurveyController extends BaseController
{
    protected $cheapestList = array();
    protected $bestFitList = array();
    protected $performanceList = array();
    protected $resultParamList = [
        'numberOfPreviousCases',
        'dataExchange'
    ];


    /**
     * @Route("/survey/{type}/edit/helptexts/save", name="survey_edit_helptexts_save")
     */
    public function adminSurveyElementsSaveAction(String $type,
                                                  Request $request,
                                                  AuthorizationCheckerInterface $authorizationChecker,
                                                  UserRepository $userRepository,
                                                  StructureRepository $structureRepository,
                                                  TypeRepository $typeRepository,
                                                  SurveyQuestionRepository $surveyQuestionRepository,
                                                  LoggerInterface $logger
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_CHOOSE_SURVEY', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $this->setType($type, $typeRepository);
        $typeIdentifier = $this->type->getIdentifier();

        //print_r($post);
        $sHelper = new SurveyStructureHelper($userRepository, $structureRepository, $this->getDoctrine()->getManager(), $logger);
        $sHelper->setUser($this->user);
        $sHelper->setRootDir($this->get('kernel')->getRootDir());
        $sHelper->setType($type, $typeRepository);
        $sHelper->loadStructureJsonFileByType();
        $sHelper->setElementList();
        //$sHelper->showElementList();
        $elementList = $sHelper->getElementList();

        $jsonResponse['data'] = [];
        $count = 0;
        if ($elementList) {
            $post = $request->request->all();
            //$jsonResponse['data'] = $post;

            //print_r($post);
            if (isset($elementList) && isset($post)) {
                foreach ($elementList as $elementKey => $elementValue) {
                    $tmpSurveyQuestion = $surveyQuestionRepository->findOneBy(
                        [
                            'ident' => $elementValue['name']
                        ]
                    );

                    if (!$tmpSurveyQuestion || null == $tmpSurveyQuestion->getId()) {
                        $tmpSurveyQuestion = new SurveyQuestion();
                        $tmpSurveyQuestion->setType($this->type);
                        $tmpSurveyQuestion->setIsActive(1);
                        $tmpSurveyQuestion->setIdent($elementKey);
                    }

                    if (isset($post['title_' . $elementKey]) && !empty($post['title_' . $elementKey])) {
                        $tmpSurveyQuestion->setTitle(trim($post['title_' . $elementKey]));
                    }

                    if (isset($post['description_' . $elementKey]) && !empty($post['description_' . $elementKey])) {
                        $tmpSurveyQuestion->setDescription(trim($post['description_' . $elementKey]));
                    }

                    $this->databaseAccessor->persist($tmpSurveyQuestion);
                    $this->databaseAccessor->flush();
                    $tmpSurveyQuestionId = $tmpSurveyQuestion->getId();
                    //echo '<br>IdentId(): ' . $tmpSurveyQuestionId . "<br><br>";
                }
            }
        }
        return $this->redirectToRoute('survey_edit_helptexts', [
            'type' => $typeIdentifier
        ]);
        //return new JsonResponse($jsonResponse, 200, array('Access-Control-Allow-Origin' => '*', 'Content-Type' => 'application/json'));
    }

    /**
     * @Method({"GET"})
     * @Route("/survey/{type}/edit/helptexts", name="survey_edit_helptexts")
     */
    public function adminSurveyHelptextsAction(String $type,
                                               Request $request,
                                               AuthorizationCheckerInterface $authorizationChecker,
                                               UserRepository $userRepository,
                                               StructureRepository $structureRepository,
                                               TypeRepository $typeRepository,
                                               SurveyQuestionRepository $surveyQuestionRepository,
                                               LoggerInterface $logger
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_CHOOSE_SURVEY', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $this->setType($type, $typeRepository);
        $typeIdentifier = $this->type->getIdentifier();

        $sHelper = new SurveyStructureHelper($userRepository, $structureRepository, $this->getDoctrine()->getManager(), $logger);
        $sHelper->setUser($this->user);
        $sHelper->setRootDir($this->get('kernel')->getRootDir());
        $sHelper->setType($type, $typeRepository);
        $sHelper->loadStructureJsonFileByType();
        $sHelper->setElementList();
        //$sHelper->showElementList();
        $elementList = $sHelper->getElementList();

        foreach ($elementList as $elementKey => $elementValue) {
            $tmpSurveyQuestion = $surveyQuestionRepository->findOneBy(
                [
                    'type' => $this->type,
                    'ident' => $elementKey
                ]
            );
            if (isset($tmpSurveyQuestion) && null != $tmpSurveyQuestion->getId()) {
                $elementList[$elementKey]['title'] = $tmpSurveyQuestion->getTitle();
                $elementList[$elementKey]['description'] = $tmpSurveyQuestion->getDescription();
            }
        }

        return $this->render('@MainInsuranceBundle/Admin/survey/help.edit.html.twig', [
            'user' => $this->user,
            'elementList' => $elementList,
            'type' => $typeIdentifier
        ]);

    }

    public static function buildParamList($collection = null)
    {
        //(isset($entry['undevelopedProperties'][0]['values'])) ?
        $resultList = [];
        foreach ($collection AS $entry) {
            //echo "Start:";print_r($entry);echo "<br>------<br>";
            $result = array();
            $result['id'] = $entry['id'];
            $result['tariffName'] = $entry['name'];
            $result['updatedAt'] = $entry['updatedAt'];
            $result['amountCoveredBodyInjury'] = $entry['amountCoveredBodyInjury'][0]['values'][0]['M'];
            $result['amountCoveredMaterialDamage'] = $entry['amountCoveredMaterialDamage'][0]['values'][0]['M'];
            $result['amountCoveredFinancialDamage'] = $entry['amountCoveredFinancialDamage'][0]['values'][0]['M'];
            $result['amountCoveredJungKids'] = $entry['amountCoveredJungKids'][0]['bool'];
            $result['includeInternship'] = $entry['includeInternship'][0]['bool'];
            $result['badDeptLoss'] = $entry['badDeptLoss'][0]['bool'];
            $result['dataExchange'] = $entry['dataExchange'][0]['bool'];
            $result['undevelopedProperties'] = (isset($entry['undevelopedProperties'][0]['values'][0]['M'])) ?
                $entry['undevelopedProperties'][0]['values'][0]['M'] : '---';
            $result['ownResidentialHomeLivingIn'] = $entry['ownResidentialHomeLivingIn'][0]['bool'];
            $result['ownResidentialHomeRentalOthers'] = $entry['ownResidentialHomeRentalOthers'][0]['bool'];
            $result['company']['publicName'] = $entry['publicName'];
            $result['company']['logo'] = $entry['logo'];
            $result['rate'] = 0;
            $resultList[] = $result;
            //print_r($result);echo "<br>------<br>";
        }
        //print_r($resultList);die;
        return $resultList;
    }


    /**
     * @Method({"GET"})
     * @Route("/survey/edit/overview", name="survey_edit_overview")
     */
    public function chooseSurveyAction(Request $request,
                                       AuthorizationCheckerInterface $authorizationChecker,
                                       UserRepository $userRepository,
                                       StructureRepository $structureRepository,
                                       TypeRepository $typeRepository,
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

        $isAllowed = [
            'basicneeds' => 1,
            'pli' => 1,
            'hci' => 1,
            'lpi' => 1,
            'aci' => 1,
            'rbi' => 1,
            'ali' => 1,
            'ami' => 1
        ];
        return $this->render('@MainInsuranceBundle/Admin/survey/help.survey.overview.html.twig', [
            'user' => $this->user,
            'isAllowed' => $isAllowed,
        ]);
    }

    private function buildTariffParamList($params = null)
    {
        return AdminTariffController::buildParamList($params);
    }

    public function sortBestFit($a, $b)
    {
        return ($a[0] <= $b[0]) ? -1 : 1;
    }

    public function rand_float($st_num = 0, $end_num = 1, $mul = 1000000)
    {
        if ($st_num > $end_num) return false;
        return round(mt_rand($st_num * $mul, $end_num * $mul) / $mul, 2);
    }

    private function setOrderLists($parsedTariffs, $structure)
    {
        //print_r(count($structure));
        //echo "<br><br>";
        foreach ($parsedTariffs AS $tariff) {
            //echo "<br><br>";
            $bestFitCounter = 0;
            $bestPerformanceCounter = 0;
            $attributeFit = [];
            $attributeFit['amountCoveredBodyInjury'] = false;
            $attributeFit['amount_covered_material_damage'] = false;
            $attributeFit['amount_covered_financial_damage'] = false;
            $attributeFit['undevelopedProperties'] = false;
            $attributeFit['badDeptLoss'] = false;
            $attributeFit['amountCoveredJungKids'] = false;
            //print_r($tariff);
            //echo "<br><br>";
            foreach ($structure AS $structureEntryK => $structureEntryV) {
                if ($structureEntryV == 'yes') {
                    $structureEntryV = ($structureEntryV == 'yes') ? 1 : 0;
                }

                //echo "<br><br>";
                if (isset($tariff[$structureEntryK])) {
                    if ($tariff[$structureEntryK] == $structureEntryV) {
                        $bestFitCounter++;
                        $bestPerformanceCounter++;
                        $bestPerformanceCounter++;
                        $attributeFit[$structureEntryK] = true;
                        //echo $bestFitCounter . " StructuresValue: " . $structureEntryV;
                    }
                    //echo "<br>";
                    //echo "isset() => Key: " . $structureEntryK . " / Value: " . $structureEntryV . " / ValueTariff: " . $tariff[$structureEntryK];

                } else {
                    if ($structureEntryK == 'amountCovered') {
                        if ($structureEntryV <= $tariff['amountCoveredBodyInjury']) {
                            $bestFitCounter++;
                            $bestPerformanceCounter++;
                            $bestPerformanceCounter++;
                            $attributeFit['amountCoveredBodyInjury'] = true;
                            $attributeFit['amount_covered_material_damage'] = true;
                            $attributeFit['amount_covered_financial_damage'] = true;
                            //echo $bestFitCounter . " StructuresValue (" . $structureEntryK . "): " . $structureEntryV;
                        }
                    } elseif ($structureEntryK == 'targetGroup') {

                    }
                }
            }

            $bestFitIndex = ($bestFitCounter * 100) / 8;
            $performanceIndex = ($bestPerformanceCounter * 100) / 8;
            //echo $bestFitIndex;
            $tariff['fit'] = ($bestFitIndex > 0) ? $bestFitIndex : 0;
            $tariff['price'] = $this->rand_float(25.5, 120.55);
            $tariff['attributeFit'] = $attributeFit;
            $this->cheapestList[$tariff['id']] = [$tariff['price'], $tariff];
            //if ($bestFitIndex > 25) {
            $this->bestFitList[$tariff['id']] = [$bestFitIndex, $tariff];
            $tariff['fit'] = $performanceIndex;
            $tariff['price'] = $this->rand_float(25.5, 120.55);
            $this->performanceList[$tariff['id']] = [$performanceIndex, $tariff];
            //}
        }
        usort($this->cheapestList, function ($a, $b) {
            return ($a[0] <= $b[0]) ? -1 : 1;
        });
        usort($this->bestFitList, function ($a, $b) {
            return ($a[0] <= $b[0]) ? 1 : -1;
        });
        usort($this->performanceList, function ($a, $b) {
            return ($a[0] <= $b[0]) ? 1 : -1;
        });
        //print_r($this->bestFitList);die;
    }

    /**
     * @Route("/admin/user/{id}/type/{type}/result", name="admin_user_id_type_result", methods="GET", requirements={"id" = "\d+"}, defaults={"id" = 0})
     */
    public function adminTariffDecisionResultAction($id = null,
                                                    $type = null,
                                                    UserRepository $userRepository,
                                                    StructureRepository $structureRepository,
                                                    TariffRepository $tariffRepository,
                                                    TariffTypeRepository $tariffTypeRepository,
                                                    LoggerInterface $logger)
    {
        $type = strtolower($type);
        if (!$this->isValidTariffType($type))
            return $this->getCredentialRedirectUrl();

        $this->setTariffTypeStructure('survey-result');
        $this->parser->setLogger($logger);

        $user = $userRepository->getUser($id);
        if ($user) {
            if ($type == null) {
                $type = 'pli';
            }
            //$user = $userRepository->find($id);
            $structure = $structureRepository->findStructureByUserId($id)[0];

            $tariffs = $tariffRepository->findTariffsWithTargetGroupsByType($type);
            $mapping = $this->parser->findJsonValues($this->tariffMap);
            $parsedTariffs = [];
            foreach ($tariffs AS $tariff) {
                $parsedTariff = $this->tariffToArray($tariff, $mapping, 'survey-result');
                $parsedTariffs[] = $parsedTariff;
            }
            $parsedStructure = $this->tariffToArray($structure, $mapping, 'survey-result');
            //print_r($parsedStructure);die;

            $isEmpty = false;
            $tmpCheapest = [];
            $tmpBestFit = [];
            $tmpPerformance = [];
            if (is_array($parsedStructure['json'])) {
                $this->setOrderLists(
                    $this->buildParamList($parsedTariffs),
                    $parsedStructure['json']
                );

                $tmpCheapest = $this->cheapestList[0][1];
                $tmpBestFit = $this->bestFitList[0][1];
                $tmpPerformance = $this->performanceList[0][1];

                $logger->info('User tariff result page: ', [
                        'type' => $type,
                        'userId' => $id,
                        'structure' => $structure['json']
                    ]
                );
            } else {
                $isEmpty = true;
            }
            $this->tariffCheapest = $tmpCheapest;
            $this->tariffBestFit = $tmpBestFit;
            $this->tariffPerformance = $tmpPerformance;
        }
        return $this->render('@MainInsuranceBundle/Admin/tariff/admin.user.survey.result.html.twig', [
                'userId' => $id,
                'bestFit' => $this->tariffBestFit,
                'cheapest' => $this->tariffCheapest,
                'performance' => $this->tariffPerformance,
                'isEmpty' => $isEmpty
            ]
        );
    }


    /**
     * @Route("/admin/user/{id}/type/{type}/finish", name="admin_user_id_type_finish",
     * methods="PUT", requirements={"id" = "\d+"}, defaults={"id" = 0})
     */
    public function adminUserIdTypeFinishAction($id = null,
                                                $type = null,
                                                UserRepository $userRepository,
                                                Request $request,
                                                LoggerInterface $logger)
    {
        $logger->info('Structure loaded type: ', [
                'type' => $type
            ]
        );

        if (0 === strpos($request->headers->get('Content-Type'), 'application/json')) {
            $data = json_decode($request->getContent(), true);
            $request->request->replace(is_array($data) ? $data : array());
        }
        $requestData = json_encode($data['structure']);
        /*
        $requestData = '{"targetGroup":"family","governmentEmployee":"yes","govenmentEmployeeLiability":"yes","govenmentCommittee":"teacher","governmentAdditionalServices":["none","Vehicles"],"badDeptLoss":"no","dataExchange":"unimportant","numberOfPreviousCases":"no","amountCovered":"1000000","amountCoveredUSA":"yes"}
Weiter zum Ergebnis
';
        */
        $jsonResponse['data'] = [];
        if ($requestData) {
            $user = $userRepository->find($id);
            $logger->info('Structure loaded: ', [
                    'type' => $type,
                    'list' => $requestData,
                    'userId' => $user
                ]
            );
            $jsonResponse['data'] = $requestData;

            if (!$this->isValidTariffType($type))
                return $this->getCredentialRedirectUrl();

            $newStructure = null;
            $newStructure = new Structure();
            $newStructure->setType($type);
            $newStructure->setUser($user);
            $newStructure->setSubType($type);
            $newStructure->setJson($requestData);


            $em = $this->getDoctrine()->getManager();
            $em->persist($newStructure);
            $em->flush();

        }
        /*
        $requestData = '
{"tariffName":"Premium Plus","runTime":"12","retention":"1","targetGroups":["0","single","singleChild","partner","family","familyChild","senior"],"exit1":"Yes","amountCoveredJungKids":"0","includeInternship":"0","badDeptLoss":"0","dataExchange":"0","ownResidentialHomeLivingIn":"0","ownResidentialHomeRentalOthers":"0","rentedPropertiesAbroad":"0","waterDamageLiabilityAboveGround":"0","waterDamageLiabilityUnderground":"0","takeCareOfDogs":"0","ebikes":"0","horsesAndWagons":"0","gradualDamage":"0","actsOfKindness":"0","damageToMovables":"0","lossOfPrivateKeys":"0","lossOfJobKeys":"0","withParentLivingInHouse":"0","childminderNonCommercial":"0","voluntaryWork":"0","discountBalancing":"0","renovations":"0","surfboards":"0","conditionlUpdate":"0","tariffIndividualSpecials":"0","companyId":"97","retentionAttributes":[{"Wert":"10","Attribut":"until125"}],"methodOfPayment":["1","3","6","12"],"methodOfPaymentAttributes":[{"Wert":"5","Attribut":"monthlyInPercent"},{"Wert":"5","Attribut":"quarterlyInPercent"},{"Wert":"3","Attribut":"semiannualInPercent"}],"numberOfPreviousCases":["0","1","2","3"],"numberOfPreviousCasesAttributes":[{"Wert":"1","Attribut":"threeAndMoreWithDecline"}],"targetGroupsAttributes":[{"Wert":"60","Attribut":"ageToBeSenior"},{"Wert":"1","Attribut":"singleChildAsFamily"}]}


            ';
        */
        return new JsonResponse($jsonResponse, 200, array('Access-Control-Allow-Origin' => '*', 'Content-Type' => 'application/json'));
    }


    /**
     * @Route("/admin/tariff/decide/{id}/c", name="admin_tariffs_decide_id_c", requirements={"id" = "\d+"}, defaults={"id" = 0})
     */
    public function adminTariffDecisionCalculatorJsonAction($id = null, Request $request)
    {
        $json = null;
        if ($json) {
            $jsonResponse['data'] = null;
            $jsonResponse['data_count'] = 1;
            $jsonResponse['status'] = 200;
            $jsonResponse['success'] = true;
        } else {
            $jsonResponse['data'] = null;
            $jsonResponse['status'] = 400;
            $jsonResponse['success'] = false;
        }

        return new JsonResponse($jsonResponse, 200, array('Access-Control-Allow-Origin' => '*', 'Content-Type' => 'application/json'));
    }


    /**
     * @Route("/admin/user/{id}/type/{type}", name="admin_user_id_type_survey", requirements={"id" = "\d+"}, defaults={"id" = 0})
     */
    public function adminUserSurveyTypeDecision($id = null,
                                                String $type = null,
                                                LoggerInterface $logger)
    {
        if (!$this->isValidTariffType($type))
            return $this->getCredentialRedirectUrl();
        $this->setTariffTypeStructure('survey-result');

        $this->setTariffTypeStructure();
        $this->parser->setLogger($logger);

        $structure = FileParserHelper::getJsonFromFile($this->get('kernel')->getRootDir() . '/../public/survey_data/pli', 'survey_pli.json');
        $logger->info('Structure loaded: ', ['list' => $structure]);

        return $this->render('@MainInsuranceBundle/admin/tariff/admin.user.type.survey.html.twig', [
                'userId' => $id,
                'type' => $type,
                'structure' => json_encode($structure)
            ]
        );
    }

    /**
     * @Route("/admin/user/{id}/decide", name="admin_user_id_decide_type", requirements={"id" = "\d+"}, defaults={"id" = 0})
     */
    public function adminTariffDecisionAction($id = null, Request $request)
    {
        return $this->render('@MainInsuranceBundle/Admin/tariff/admin.decision.tariff.html.twig', [
                'userId' => $id,
            ]
        );
    }

    /**
     * @Method({"GET"})
     * @Route("/builder/survey/damage/{type}", name="damage_builder")
     */
    public function adminSurveyDamageBuilderAction(String $type = null,
                                                   Request $request,
                                                   AuthorizationCheckerInterface $authorizationChecker,
                                                   UserRepository $userRepository,
                                                   TypeRepository $typeRepository,
                                                   StructureRepository $structureRepository,
                                                   LoggerInterface $logger
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_DO_USE_BUILDER', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $this->setType($type, $typeRepository);
        $typeIdentifier = $this->type->getIdentifier();
        $sHelper = new SurveyStructureHelper($userRepository, $structureRepository, $this->getDoctrine()->getManager(), $logger);
        $sHelper->setUser($this->user);
        $sHelper->setRootDir($this->get('kernel')->getRootDir());
        $sHelper->setFileDirName('../public/damage_report');
        $sHelper->setFileNamePraefix('damage_survey_');
        $sHelper->setType($type, $typeRepository);
        $sHelper->loadLastStructure();

        $structure = $sHelper->loadStructureJsonFileByType();
        //print_r($structure);die;

        return $this->render('@MainInsuranceBundle/Core/builder/builder.html.twig', [
            'structure' => json_encode(strip_tags($structure))
        ]);
    }

    /**
     * @Method({"GET"})
     * @Route("/builder/survey/{type}", name="survey_tariff_builder")
     */
    public function adminSurveyTariffBuilderAction(String $type = null,
                                                   Request $request,
                                                   AuthorizationCheckerInterface $authorizationChecker,
                                                   UserRepository $userRepository,
                                                   TypeRepository $typeRepository,
                                                   StructureRepository $structureRepository,
                                                   LoggerInterface $logger
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_DO_USE_BUILDER', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $this->setType($type, $typeRepository);
        $typeIdentifier = $this->type->getIdentifier();
        $sHelper = new SurveyStructureHelper($userRepository, $structureRepository, $this->getDoctrine()->getManager(), $logger);
        $sHelper->setUser($this->user);
        $sHelper->setFileDirName('../public/survey_data');
        $sHelper->setFileNamePraefix('survey_');
        $sHelper->setRootDir($this->get('kernel')->getRootDir());
        $sHelper->setType($type, $typeRepository);
        //$sHelper->loadLastStructure();
        $structure = $sHelper->loadStructureJsonFileByType();
        //print_r($structure);die;
        return $this->render('@MainInsuranceBundle/Core/builder/builder.html.twig', [
            'structure' => json_encode(strip_tags($structure))
        ]);
    }
}
