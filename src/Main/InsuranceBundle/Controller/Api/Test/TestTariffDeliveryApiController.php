<?php

namespace Main\InsuranceBundle\Controller\Api\Test;

use AppBundle\Controller\BaseController;
use DateTime;
use Main\AdminBundle\Helper\MM\TariffImportHelper;
use Main\InsuranceBundle\Helper\Company\CompanyHelper;
use Main\InsuranceBundle\Helper\Structure\SurveyStructureHelper;
use Main\InsuranceBundle\Helper\Tariff\TariffHelper;
use Main\InsuranceBundle\Repository\CompanyRepository;
use Main\InsuranceBundle\Repository\ContractRepository;
use Main\InsuranceBundle\Repository\ProcessActivityRepository;
use Main\InsuranceBundle\Repository\ProcessRepository;
use Main\InsuranceBundle\Repository\ProcessStatusRepository;
use Main\InsuranceBundle\Repository\ProcessTariffTrackerRepository;
use Main\InsuranceBundle\Repository\ProcessTypeRepository;
use Main\InsuranceBundle\Repository\StructureRepository;
use Main\InsuranceBundle\Repository\TariffRepository;
use Main\InsuranceBundle\Repository\TypeRepository;
use Main\UserBundle\Repository\ActivityRepository;
use Main\UserBundle\Repository\BenefitPartnerRepository;
use Main\UserBundle\Repository\BenefitPartnerUserRepository;
use Main\UserBundle\Repository\UserRepository;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class TestTariffDeliveryApiController extends BaseController
{
    protected $apiAttributes = [];
    protected $apiLeistungen = [];
    protected $level = 0;
    protected $companies = [];
    protected $cheapestList = [];
    protected $bestFitList = [];
    protected $performanceList = [];
    
    public function rand_float($st_num = 0, $end_num = 1, $mul = 1000000)
    {
        if ($st_num > $end_num) return false;
        return round(mt_rand($st_num * $mul, $end_num * $mul) / $mul, 2);
    }
    
    private function getMappedEntry($apiToTariffMap = [], $entryName = '', $entry = null)
    {
        if (isset($apiToTariffMap)) {
            foreach ($apiToTariffMap as $mapper) {
                //echo $mapper['api'] . " / " . $entryName;
                if ($mapper['api'] == $entryName) { // insert api parameter => tariff field
                    //echo " => k:" . $mapper['tariff'] . " v:" . $entry[$entryName] . "<br>";
                    $tmpEntry = [$mapper['tariff'], $entry[$entryName], $mapper['api']];
                    /*
                    if ($entryName == 'ges') {
                         $this->companies[$entryName] = 1;
                    }
                    */
                    return $tmpEntry;
                }
            }
        }
        return null;
    }
    
    private function getTariffEnrichment($tariffMap = [], $entryName = '')
    {
        if (count($tariffMap) > 0) {
            /*
            print_r($tariffMap);
            echo "<br>";
            echo $entryName;
            echo "<br><br>";
            */
            foreach ($tariffMap as $mapper) {
                if (isset($mapper['mapName']) && $mapper['mapName'] == $entryName) {
                    $tmpMapName = (isset($mapper['mapName']) && $mapper['mapName'] == true) ? $mapper['mapName'] : false;
                    $tmpDoMap = (isset($mapper['doMap']) && $mapper['doMap'] == true) ? $mapper['doMap'] : false;
                    $tmpVisibility = (isset($mapper['visibleInResult'])) ? $mapper['visibleInResult'] : 0;
                    $tmpText = (isset($mapper['resultText'])) ? $mapper['resultText'] : '---';
                    $tmpAnimalType = (isset($mapper['animalType'])) ? $mapper['animalType'] : '---';
                    $tmpEntry = [
                        'name' => $mapper['mapName'],
                        'mapName' => $tmpMapName,
                        'doMap' => $tmpDoMap,
                        'visibleInResult' => $tmpVisibility,
                        'resultText' => $tmpText,
                        'tmpAnimalType' => $tmpAnimalType
                    ];
                    return $tmpEntry;
                }
            }
        }
        return null;
    }
    
    /*
     * "leistungen":{"1":{"ident":"Tipp","aussage":""},"2":{"ident":"VInfo","aussage":[]},"3":{"ident":"VBed","aussage":[{"Dok_nr":"5724","Dokumentenart":"Komplettes Bedingungswerk","Dok_Art":"","Dok_Produkt":"","Dok_kb":"1837.4"}]},"4":{"ident":"SBed","aussage":[{"Dok_nr":"5725","Dokumentenart":"Leistungsvergleich","Dok_Art":"","Dok_Produkt":"","Dok_kb":"1493.5"}]},"5":{"ident":"U","aussage":"T"},"6":{"ident":"vs_v","aussage":"15.000.000 EUR"},"7":{"ident":"vsv_v","aussage":"15.000.000 EUR"},"8":{"ident":"vsm_v","aussage":"15.000.000 EUR"},"9":{"ident":"SB","aussage":"125 EUR"},"10":{"ident":"leiupd_v","aussage":"mitversichert"},"11":{"ident":"arbfrei_v","aussage":"nicht versichert"},"12":{"ident":"U","aussage":"T"},"13":{"ident":"lebensp_v","aussage":"mitversichert"},"14":{"ident":"kizmin_v","aussage":"mitversichert"},"15":{"ident":"kizvoll_v","aussage":"mitversichert"},"16":{"ident":"elt_v","aussage":"mitversichert"},"17":{"ident":"hausang_v","aussage":"mitversichert"},"18":{"ident":"regr_v","aussage":"mitversichert"},"19":{"ident":"U","aussage":"T"},"20":{"ident":"tagmu_v","aussage":"mitversichert"},"21":{"ident":"tagme_v","aussage":"mitversichert"},"22":{"ident":"gef_v","aussage":"mitversichert bis 100.000 EUR"},"23":{"ident":"fach_v","aussage":"mitversichert bis zur Vers.-summe, max. 10.000.000 EUR"},"24":{"ident":"prak_v","aussage":"mitversichert"},"25":{"ident":"ehr_v","aussage":"mitversichert"},"26":{"ident":"U","aussage":"T"},"27":{"ident":"delikt_v","aussage":"*mitversichert sind Personensch�den bis zur Vers.-summe, Sach- und Verm�genssch�den bis 10.000 EUR"},"28":{"ident":"ausfall_v","aussage":"mitversichert ohne Mindestschadenh�he"},"29":{"ident":"rsaus_v","aussage":"nicht versichert"},"30":{"ident":"geli_v","aussage":"nicht versichert"},"31":{"ident":"U","aussage":"T"},"32":{"ident":"sve_v","aussage":"generell nicht versicherbar"},"33":{"ident":"sv_v","aussage":"mitversichert bis 100.000 EUR"},"34":{"ident":"sva_v","aussage":"mitversichert bis 100.000 EUR"},"35":{"ident":"svd_v","aussage":"*mitversichert bis 2.500 EUR"},"36":{"ident":"U","aussage":"T"},"37":{"ident":"welt_v","aussage":"mitversichert europaweit unbegrenzt, weltweit bis 5 Jahre"},"38":{"ident":"U","aussage":"T"},"39":{"ident":"abwa_v","aussage":"mitversichert"},"40":{"ident":"allm_v","aussage":"mitversichert"},"41":{"ident":"bau_v","aussage":"*mitversichert bis 200.000 EUR"},"42":{"ident":"ew_v","aussage":"mitversichert"},"43":{"ident":"einlw_v","aussage":"mitversichert"},"44":{"ident":"efh_v","aussage":"mitversichert"},"45":{"ident":"zfh_v","aussage":"mitversichert bis 2 Wohneinheiten bzw. 30.000 EUR JBM"},"46":{"ident":"sgwe_v","aussage":"*mitversichert bis 2 WE oder max. 30.000 EUR BJMW"},"47":{"ident":"fewoi_v","aussage":"mitversichert"},"48":{"ident":"fehau_v","aussage":"nicht versichert"},"49":{"ident":"fewoa_v","aussage":"mitversichert"},"50":{"ident":"fezi_v","aussage":"*mitversichert bis 8 Betten"},"51":{"ident":"unbgru_v","aussage":"mitversichert bis 10.000 QM"},"52":{"ident":"gew_v","aussage":"mitversichert"},"53":{"ident":"oel_v","aussage":"mitversichert unbegrenztes Volumen, Deckungssumme 3.000.000 EUR"},"54":{"ident":"oelu_v","aussage":"nicht versichert, da kein Tank vorhanden"},"55":{"ident":"oele_v","aussage":"mitversichert"},"56":{"ident":"gewsa_v","aussage":"mitversichert bis 100 Liter/kg Einzelgebinde; bis 1.000 Liter/kg Gesamtfassungsverm�gen"},"57":{"ident":"foto_v","aussage":"mitversichert"},"58":{"ident":"waffen_v","aussage":"mitversichert"},"59":{"ident":"inet_v","aussage":"mitversichert"},"60":{"ident":"U","aussage":"T"},"61":{"ident":"arbmas_v","aussage":"mitversichert"},"62":{"ident":"rad_v","aussage":"mitversichert"},"63":{"ident":"boot_v","aussage":"*mitversichert wenn keine beh�rdliche Erlaubnis erforderlich ist bei gelegentlicher Nutzung"},"64":{"ident":"modell_v","aussage":"mitversichert ohne Begrenzung der St�ckzahl und H�chstgeschwindigkeit"},"65":{"ident":"flug_v","aussage":"mitversichert sind nicht versicherungspflichtige Flugmodelle, Ballonen und Drachen sowie versicherungspflichtige Flugmodelle, Ballonen und Drachen, deren Fluggewicht 5 kg nicht �bersteigt"},"66":{"ident":"drohne_v","aussage":"*mitversichert sind Drohnen bis 5 kg bei ausschlie�lich privater Nutzung"},"67":{"ident":"ruderboot_v","aussage":"mitversichert sind Ruderboote, Segelboote siehe Bedingungswerk"},"68":{"ident":"surf_v","aussage":"mitversichert"},"69":{"ident":"surff_v","aussage":"mitversichert"},"70":{"ident":"kfz_v","aussage":"nicht versichert"},"71":{"ident":"U","aussage":"T"},"72":{"ident":"hund_v","aussage":"mitversichert"},"73":{"ident":"tier_v","aussage":"mitversichert"},"74":{"ident":"pferd_v","aussage":"mitversichert"},"75":{"ident":"U","aussage":"T"},"76":{"ident":"gargdv_v","aussage":"mitversichert"},"77":{"ident":"garak_v","aussage":"mitversichert"},"78":{"ident":"erwei_v","aussage":"nicht versichert"},"79":{"ident":"beson1_v","aussage":"mitversichert: sind Haftpflichtanspr�che von Arbeitgebern, Dienstherren oder Arbeitskollegen f�r Sachsch�den - bis 2.500 EUR, SB 150 EUR"}}}]
     */
    private function parseApiResult($data = [], $apiMap = [], $apiToTariffMap = [], $tariffMap = [])
    {
        if (isset($data)) {
            $entries = [];
            foreach ($data as $dataEntry) {
                if (isset($dataEntry['leistungen'])) {
                    foreach ($dataEntry['leistungen'] as $key => $value) {
                        $dataEntry[$value['ident']] = $value['aussage'];
                        unset($dataEntry['leistungen']);
                    }
                }
                if (isset($dataEntry['address'])) {
                    foreach ($dataEntry['address'] as $key => $value) {
                        $dataEntry[$key] = $value;
                        unset($dataEntry['address']);
                    }
                }
                if (isset($dataEntry['leistungsfragen'])) {
                    foreach ($dataEntry['leistungsfragen'] as $key => $value) {
                        $dataEntry[$value['ident']] = $value['aussage'];
                        unset($dataEntry['leistungsfragen']);
                    }
                }
                /*
                print_r($dataEntry);
                echo "<br><br>";
                echo "<br><br>";
                echo "<br><br>";
                die;
                */
                $tmpEntry = [];
                foreach ($apiMap as $mapEntry) {
                    if (isset($dataEntry[$mapEntry['name']])) { // if api sends correct parameter
                        $entryResult = $this->getMappedEntry($apiToTariffMap, $mapEntry['name'], $dataEntry);
                        if ($entryResult != null) {
                            $tariffAttributeName = $entryResult[0];
                            $apiAttributeName = $entryResult[1];
                            $tariffEnrichment = $this->getTariffEnrichment($tariffMap, $entryResult[0]);
                            $tmpEntry[$tariffAttributeName] = $apiAttributeName;
                            $tmpEntry[$tariffAttributeName . '-enrichment'] = $tariffEnrichment;
                        }
                    }
                }
                if (isset($dataEntry['tarifnrtemp'])) {
                    $tmpEntry['tarifnrtemp'] = $dataEntry['tarifnrtemp'];
                }
                if (isset($dataEntry['zw_erlaubt'])) {
                    $tmpEntry['payment']['zw_erlaubt'] = $dataEntry['zw_erlaubt'];
                }
                if (isset($dataEntry['zw_aufschlag'])) {
                    $tmpEntry['payment']['zw_aufschlag'] = $dataEntry['zw_aufschlag'];
                }
                if (!empty($tmpEntry)) {
                    $entries[] = $tmpEntry;
                }
            }
            return $entries;
        }
        return [];
    }
    
    /*
* change tariff from json to array
*/
    public static function parseStructureToArray($structure, $process = null)
    {
        $result = [];
        if (count($structure) > 0) {
            foreach ($structure as $key => $value) {
                if ($process == 'survey-result') {
                    $tmpAmount = json_decode($value, true);
                    if (empty($tmpAmount)) {
                        $tmpAmount = $value;
                    }
                    $result[$key] = $tmpAmount;
                }
            }
        }
        return $result;
    }
    
    /**
     * @Method({"GET"})
     * @Route("/test/manager/survey/{type}/result", name="test_manager_survey_type_result")
     */
    public function managerSurveyTypeResultAction($type = null,
                                                  Request $request,
                                                  AuthorizationCheckerInterface $authorizationChecker,
                                                  UserRepository $userRepository,
                                                  StructureRepository $structureRepository,
                                                  ContractRepository $contractRepository,
                                                  TariffRepository $tariffRepository,
                                                  TypeRepository $typeRepository,
                                                  ProcessRepository $processRepository,
                                                  ProcessStatusRepository $processStatusRepository,
                                                  ProcessTypeRepository $processTypeRepository,
                                                  ProcessActivityRepository $processActivityRepository,
                                                  ActivityRepository $activityRepository,
                                                  ProcessTariffTrackerRepository $processTariffTrackerRepository,
                                                  CompanyRepository $companyRepository,
                                                  BenefitPartnerRepository $benefitPartnerRepository,
                                                  BenefitPartnerUserRepository $benefitPartnerUserRepository,
                                                  LoggerInterface $logger
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_SURVEY_RESULT', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        $this->setType($type, $typeRepository);
        $typeIdentifier = $this->type->getIdentifier();
        
        /*
         * SET structure
         */
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
        
        $cheapestTariff = [];
        $bestFitTariff = [];
        $bestPerformanceTariff = [];
        
        /*
         * GET url
         */
        $urlBuilderClassName = 'Main\\InsuranceBundle\\Helper\\Url\\' . ucfirst($typeIdentifier . 'UrlBuilder');
        $urlBuilder = (new $urlBuilderClassName());
        $urlBuilder->setUserRepository($userRepository);
        $urlBuilder->setUser($this->user);
        $urlBuilder->setIpAddOn();
        $urlBuilder->setUserIp();
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
        $urlBuilder->setShowMissing(true);
        $urlBuilder->build();
        $url = $urlBuilder->get();
        
        $isEmpty = false;
        $data = null;
        $entries = [];
        $importHelper = new TariffImportHelper($userRepository, $url, $this->getDoctrine()->getManager(), $logger);
        $importHelper->init();
        $data = $importHelper->importList();
        
        $getIt = 0;
            print_r($url);
            echo "<br><br>";
        if (1 == $getIt) {
            print_r($structure);
            //echo "<br><br>";
            //print_r($this->user->getId());
            echo "<br><br>";
            //print_r($data['daten'][33]['nichtanzeige']);
            //echo "<br><br>";
            echo 'DataCount: ' . count($data['daten']) . '<br>';
            //print_r($data);
            foreach ($data['daten'] as $key => $value) {
                echo "<br><br>";
                //print_r($value);
                echo "<br><br>";
                foreach ($value as $key2 => $value2) {
                    echo "<b>" . $key2 . '</b>';
                    if (!empty($value2)) {
                        if (is_array($value2)) {
                            if ('leistungen' == $key2) {
                                foreach ($value2 as $key3 => $value3) {
                                    if (isset($value3['ident'])
                                        && isset($value3['aussage'])) {
                                        echo "<b>Pair Leistungen: " . $value3['ident'] . '</b>: ';
                                        print_r($value3['aussage']);
                                        echo "<br>";
                                    }
                                }
                                echo "********************************************************<br>";
                            }
                        } else {
                            echo " => " . $value2 . "<br>";
                        }
                    }
                }
                echo "<br><br>";
            }
        }
        
        /*
        die;
        $importHelper->showMissing();
        foreach ($importHelper->showMissing() as $key => $value) {
            echo "<br><br>";
            print_r($value);
        }
        */
        /*
        */
        /*
         * SET mappings
         */
        $apiMapStructureName = 'Main\\InsuranceBundle\\Helper\\Api\\MM\\Structure\\' . ucfirst($typeIdentifier . 'ApiStructure');
        $apiToTariffMapName = 'Main\\InsuranceBundle\\Helper\\Api\\MM\\Map\\' . ucfirst($typeIdentifier . 'ApiToTariffMap');
        $tariffMapName = 'Main\\InsuranceBundle\\Helper\\Mapping\\Tariff\\' . ucfirst($typeIdentifier . 'TariffStructure');
        $apiMapStructure = (new $apiMapStructureName())->get();
        $apiToTariffMap = (new $apiToTariffMapName())->get();
        $tariffMap = (new $tariffMapName())->get();
        
        /*
        * BUILD ENTRIES LIST
        */
        $entries = $this->parseApiResult($data['daten'], $apiMapStructure, $apiToTariffMap, $tariffMap);
        //$entriesCounter = count($entries);
        
        /*
         * USE FILTER
         */
        $responseFilterClassName = 'Main\\InsuranceBundle\\Helper\\Filter\\' . ucfirst($typeIdentifier . 'ResponseFilter');
        $projectDir = $this->get('kernel')->getProjectDir();
        $filteredEntries = 0;
        //if (null !== $responseFilterClassName) {
        if ('pli' == $typeIdentifier
            || 'ali' == $typeIdentifier) {
            //if (file_exists($projectDir . '/src/' . $responseFilterClassName . '.php')) {
            $responseFilter = (new $responseFilterClassName());
            $responseFilter->setUser($this->user);
            $responseFilter->setData($entries);
            $responseFilter->setStructure($structure);
            $responseFilter->parse();
            $filteredEntries = $responseFilter->getFilteredData();
            //$responseFilter->_toString();
            $filteredResponseEntriesCounter = count($filteredEntries);
            //}
            //echo "<br>FilteredEntries:" . $filteredResponseEntriesCounter . "<br><br>";
        }
        
        if ($structure) {
            if (!empty($data)) {
                /*
                echo "base: " . $entriesCounter . " / filtered: " . $filteredResponseEntriesCounter . "<br>";
                */
                $companyHelper = new CompanyHelper($userRepository, $companyRepository, $this->getDoctrine()->getManager(), $logger);
                if ($filteredEntries > 0) {
                    $this->setLists($filteredEntries, $structure, $companyHelper);
                } else {
                    $this->setLists($entries, $structure, $companyHelper);
                }
                //if (isset(array_slice($this->cheapestList, 0, 1)[0])) {
                $cheapestTariff = array_slice($this->cheapestList, 0, 1)[0];
                //}
                
                $bestFitTariff = array_slice($this->bestFitList, 0, 1)[0];
                $bestPerformanceTariff = array_slice($this->performanceList, 0, 1)[0];
                //$bestPerformanceTariff = array_shift($this->performanceList);
                
                //echo "<br>Prämie durch Ranking: Prämie: " . $aValue[1][0] . " durch Bewertung: " . $aValue[1][1]['rankingPerformance'] . " = " . $aValue[0];
                
                $bestFitListSize = count($this->bestFitList);
                $sliceOffset = 1;
                if ($bestFitTariff['fee'] >= $bestPerformanceTariff['fee']) {
                    if ($bestFitListSize >= 2) {
                        //echo " - 1 - ";
                        $bestFitTariff = array_slice($this->bestFitList, $sliceOffset, 1)[0];
                        $sliceOffset = 2;
                    }
                }
                if ($bestFitTariff['fee'] >= $bestPerformanceTariff['fee']) {
                    if ($bestFitListSize >= 3) {
                        //echo " - 2 - ";
                        $sliceOffset = 3;
                        //$bestFitTariff = array_slice($this->bestFitList, $sliceOffset, 1)[0];
                    }
                }
                if ($bestFitTariff['fee'] >= $bestPerformanceTariff['fee'] || $cheapestTariff['fee'] >= $bestFitTariff['fee']) {
                    if ($bestFitListSize >= 4) {
                        //echo " - 3 - ";
                        //$bestFitTariff = array_slice($this->bestFitList, $sliceOffset, 1)[0];
                    }
                }
            } else {
                $isEmpty = true;
            }
            
            $process = $this->saveProcess('survey', 'incomplete', 'show result', 5,
                $processRepository, $processStatusRepository, $processTypeRepository);
            $processActivity = $this->saveActivity('result_is_open', $activityRepository,
                $process, '', 'Ergebnis zu ' . $this->apiTypeMapping[$typeIdentifier] . ' aufgerufen', '', $processActivityRepository);
            
            $tariffHelper = new TariffHelper($userRepository, $tariffRepository, $this->getDoctrine()->getManager(), $logger);
            $tariffHelper->setUser($this->user);
            $tariffHelper->setProcess($process);
            $tariffHelper->setUserIp($urlBuilder->getUserIp());
            $tariffHelper->setProcessTariffTrackerRepository($processTariffTrackerRepository);
            $tariffHelper->setRootDir($this->get('kernel')->getRootDir());
            $tariffHelper->setType($type, $typeRepository);
            
            $tariffHelper->saveProcessTrackingEntry($cheapestTariff, 5, 'Cheapest', 'cheapest');
            $tariffHelper->saveProcessTrackingEntry($bestFitTariff, 5, 'Best Fit', 'best_fit');
            $tariffHelper->saveProcessTrackingEntry($bestPerformanceTariff, 5, 'Best Performance', 'best_performance');
        } else {
            $isEmpty = true;
        }
        
        /*
         * GET current contract
         */
        $currentContract = [
            'exist' => 0,
            'logo' => '',
            'tariffName' => '',
            'fee' => ''
        ];
        
        $tmpCurrentContract = $contractRepository->findOneBy(
            [
                'user' => $this->user,
                'contractType' => $this->type
            ]
        );
        if ($tmpCurrentContract) {
            $currentContract = [
                'exist' => 1,
                'logo' => $tmpCurrentContract->getCompany()->getLogo(),
                'tariffName' => $tmpCurrentContract->getTariffName(),
                'fee' => $tmpCurrentContract->getPaymentFee(),
            ];
        }
        return $this->render('@MainUserBundle/Manager/test/survey.api.result.html.twig', [
                'user' => $this->user,
                'type' => $typeIdentifier,
                'cheapest' => $cheapestTariff,
                'bestFit' => $bestFitTariff,
                'performance' => $bestPerformanceTariff,
                'current' => $currentContract,
                'isEmpty' => $isEmpty
            ]
        );
    }
    
    public function parseLanguageValue($value = null)
    {
        return ($value == 'yes') ? 'ja' : 'nein';
    }
    
    private function parseNumericValue($value = null)
    {
        return (intval(str_replace('.', '', $value)));
    }
    
    private function setLists($entries = [], $structure = [], CompanyHelper $companyHelper = null)
    {
        foreach ($entries AS $entry) {
            if (isset($entry['tariffName'])) {
                /*
                print_r($entry);
                echo "<br><br>";
                die;
                */
                $attributeFit = [];
                foreach ($entry AS $entryKey => $entryValue) {
                    $turn = false;
                    if (!strpos($entryKey, "-enrichment")) {
                        $enrichmentParameter = $entryKey . "-enrichment";
                        $enrichment = (isset($entry[$enrichmentParameter])) ? $entry[$enrichmentParameter] : null;
                        if (isset($enrichment['doMap']) && $enrichment['doMap'] == true) {
                            $structureValue = 'no';
                            $parsedName = null;
                            //print_r($structure);
                            if (isset($structure['json'][$enrichment['mapName']])) {
                                $structureValue = $structure['json'][$enrichment['mapName']];
                            }
                            if (isset($enrichment['visibleInResult']) && $enrichment['visibleInResult'] == 1) {
                                $performanceValue = $this->getPerformance($entryValue, $structureValue, $turn, $entryKey);
                                $attributeFit[$entryKey] = [$entryKey, $entryValue, $performanceValue, $enrichment];
                                
                                $entry['logo'] = $companyHelper->parseCompanyLogo($entry['tariffName']);
                                //$paymentValues = explode(';', $entry['paymentInvervalExtraCharge']);
                                //$entry['tmpFee'] = $this->formatCurrency($tmpFee + (($tmpFee / 100) * $paymentValues[0]));
                                $tmpFee = floatval(str_replace(',', '.', $entry['fee']));
                                $entry['tmpFee'] = $this->formatCurrency($tmpFee);
                                $entry['attributeFit'] = $attributeFit;
                                //$entry['tmpRankingPerformance'] = ($entry['rankingPerformance'] > 0) ? number_format((floatval($entry['fee']) / $entry['rankingPerformance']), 2) : 0;
                                $entry['tmpRankingPerformance'] = ($entry['rankingPerformance'] > 0) ? number_format((floatval($entry['fee']) / $entry['rankingPerformance']), 2) : 0;
                                $entry['rankingPerformance90Factor'] = 0;
                                
                                //if (false === strpos($entry['companyName'], 'ASC')
                                //    && false === strpos($entry['companyName'], 'Bavaria')
                                //) {
                                //if ($entry['tariffIdTmp'] != '941'
                                //   && $entry['tariffIdTmp'] != '940'
                                //) {
                                $this->cheapestList[$entry['tariffIdTmp']] = [$entry['fee'], $entry];
                                $this->performanceList[$entry['tariffIdTmp']] = [$entry['rankingPerformance'], [$entry['fee'], $entry]];
                                
                                $factor = $entry['rankingPerformance'] * 100 / $this->getDivider();
                                if ($factor <= 100) {
                                    $entry['rankingPerformance90Factor'] = $factor;
                                    $this->bestFitList[$entry['tariffIdTmp']] = [$entry['tmpRankingPerformance'], [$entry['fee'], $entry]];
                                    //   }
                                    //   }
                                }
                            }
                        }
                    }
                }
            }
        }
        
        /*
     * start cheapestList
     */
        $temp = [];
        $cheapestTariff[0] = "1111";
        foreach ($this->cheapestList as $aKey => $aValue) {
            if (isset($aKey) && isset($aValue) && isset($aValue[0]) && isset($aValue[1])) {
                $first = str_pad((str_replace(",", "", $aValue[0])), 10, '0', STR_PAD_LEFT);
                $temp[$first] = $aValue[1];
                /*
                if (floatval($aValue[0]) <= floatval($cheapestTariff[0]))
                    $cheapestTariff[0] = $aValue[1];
                
                echo "<br>Key: " . $aKey . " / " . "Fee: " . $aValue[0] . "<br>";
                print_r($aValue[1]);
                echo "<br><br>";
                */
            }
        }
        ksort($temp);
        $this->cheapestList = array_values($temp);
        unset($temp);
        
        $outputStartCheapest = 0;
        if ($outputStartCheapest == 1) {
            echo " < br><br > ";
            print_r(count($this->cheapestList));
            echo "<br > ";
            foreach ($this->cheapestList as $key => $value) {
                echo "Key: " . $key . " < br>";
                echo "companyName: " . print_r($value['companyName']) . " < br>";
                echo "tariffName: " . print_r($value['tariffName']) . " < br>";
                echo "tariffIdTmp: " . print_r($value['tariffIdTmp']) . " < br>";
                echo "fee: " . print_r($value['fee']) . " < br>";
                echo " < br><br > ";
            }
        }
        
        /*
         * start bestFitList
         */
        $temp = [];
        foreach ($this->bestFitList as $aKey => $aValue) {
            if (isset($aKey) && isset($aValue) && isset($aValue[0]) && isset($aValue[1][0])) {
                //echo "<br ><br > TarifName: " . $aValue[1][1]['tariffName'] . " / (" . $aValue[1][1]['companyName'] . ")";
                //echo " < br>Prämie durch Ranking: Prämie: " . $aValue[1][0] . " durch Bewertung: " . $aValue[1][1]['rankingPerformance'] . " = " . $aValue[0];
                $first = str_pad(($aValue[0]), 10, '0', STR_PAD_LEFT);
                $second = str_pad(str_replace(",", "", $aValue[1][0]), 10, '0', STR_PAD_LEFT);
                $temp[$first . "oldkey" . $second] = [$aKey, [$aValue[0], [$aValue[1][0], $aValue[1][1]]]];
            }
        }
        ksort($temp);
        $tempRe = [];
        foreach ($temp as $aKey => $aValue) {
            if (isset($aKey) && isset($aValue) && isset($aValue[0]) && isset($aValue[1][0])) {
                //$tempRe[$aValue[0]] = [$aValue[1][0], [$aValue[1][1][0], $aValue[1][1][1]]];
                $tempRe[$aValue[0]] = $aValue[1][1][1];
                //echo " < br><br > Key: " . $aKey . " / RankingPerformance: " . $aValue[1][0] . " / Fee: " . $aValue[1][1][0];
            }
        }
        $this->bestFitList = $tempRe;
        unset($tempRe);
        unset($temp);
        
        /*
     * start performanceList
     */
        $temp = [];
        foreach ($this->performanceList as $aKey => $aValue) {
            if (isset($aKey) && isset($aValue) && isset($aValue[0]) && isset($aValue[1][0])) {
                //echo " < br><br > Key: " . $aKey . " / FullMatch: " . $aValue[0] . " / Fee: " . $aValue[1][0];
                $first = str_pad(($aValue[0]), 10, '0', STR_PAD_LEFT);
                $second = str_pad(str_replace(",", "", $aValue[1][0]), 10, '0', STR_PAD_LEFT);
                $aValue[1][1]['key'] = $first . "oldkey" . $second;
                $temp[$first . "oldkey" . $second] = [$aKey, [$aValue[0], [$aValue[1][0], $aValue[1][1]]]];
                //echo " < br><br > Key: " . $first . "oldkey" . $second . " / FullMatch: " . $first . " / Fee: " . $second;
            }
        }
        krsort($temp);
        $tempRe = [];
        foreach ($temp as $aKey => $aValue) {
            if (isset($aKey) && isset($aValue) && isset($aValue[0]) && isset($aValue[1][0])) {
                //$tempRe[$aValue[0]] = [$aValue[1][0], [$aValue[1][1][0], $aValue[1][1][1]]];
                $tempRe[$aValue[1][0]] = $aValue[1][1][1];
                //echo " < br><br > Key: " . $aKey . " / FullMatch: " . $aValue[1][0] . " / Fee: " . $aValue[1][1][0];die;
            }
        }
        $this->performanceList = $tempRe;
        unset($tempRe);
        unset($temp);
        
        /*
        $outputRanking = 0;
        if ($outputRanking == 1) {
            foreach ($this->bestFitList as $aKey => $aValue) {
                echo " < br><br > Key: " . $aKey . " < br>";
                echo "fee: " . $aValue['fee'] . " < br>";
                echo "rankingPerformance: " . $aValue['rankingPerformance'] . " < br>";
                echo "tmpRankingPerformance: " . $aValue['tmpRankingPerformance'] . " < br>";
                echo "rankingPerformance90Factor: " . $aValue['rankingPerformance90Factor'] . " < br>";
                echo "companyName: " . $aValue['companyName'] . " < br>";
                echo "tariffName: " . $aValue['tariffName'] . " < br><br > ";
                //print_r($aValue);
            }
        }
        */
    }
    
    private function getPerformance($entryValue = null, $structureValue = null, $turn = false, $name = null)
    {
        $response = 0;
        $entryValue = str_replace('.', '', $entryValue);
        if ($turn == false) {
            //echo intval(str_replace('.', '', $entryValue)) . " //// " . intval($structureValue);
            $response = 0;
            if ($entryValue == $structureValue) {
                $response = 1.11;
                $response = 1;
            } elseif (is_numeric($entryValue) && $this->parseNumericValue($entryValue) == $this->parseNumericValue($structureValue)
            ) {
                $response = 1.22;
                $response = 2;
            } elseif ((is_numeric($entryValue) && $this->parseNumericValue($entryValue) > 0) && $this->parseLanguageValue($structureValue) == 'ja') {
                $response = 1.32;
                $response = 2;
            } elseif (stripos(strtolower($entryValue), 'mitversichert') > -1 && $structureValue == 'yes') {
                $response = 1.42;
                $response = 2;
            } elseif (stripos(strtolower($entryValue), 'mitversichert') > -1 && $structureValue == 'no') {
                $response = 1.54;
                $response = 4;
            } elseif (stripos(strtolower($entryValue), 'nicht versichert') > -1 && $structureValue == 'yes') {
                $response = 1.61;
                $response = 1;
            } elseif (stripos(strtolower($entryValue), 'nicht versichert') > -1 && $structureValue == 'no') {
                $response = 1.72;
                $response = 2;
            } else if ((is_numeric($entryValue) && $this->parseNumericValue($entryValue) > 0) && $structureValue == 'no') {
                $response = 1.84;
                $response = 4;
            } else if ((is_numeric($entryValue) && $this->parseNumericValue($entryValue) > 0) && $structureValue == 'yes') {
                $response = 1.92;
                $response = 2;
            } elseif ($this->parseNumericValue($entryValue) == $this->parseNumericValue($structureValue)) {
                $response = 2.02;
                $response = 2;
            } elseif ($this->parseNumericValue($entryValue) > $this->parseNumericValue($structureValue)) {
                $response = 2.13;
                $response = 3;
                $response = 2;
            } elseif ($this->parseNumericValue($entryValue) < $this->parseNumericValue($structureValue)) {
                $response = 2.21;
                $response = 1;
            }
        } else {
            if (stripos(strtolower($entryValue), 'keine') > -1 && $structureValue == 'no') {
                $response = 3.12;
                $response = 2;
            } elseif (stripos(strtolower($entryValue), 'keine') > -1 && $structureValue == 'yes') {
                $response = 3.24;
                $response = 4;
            } elseif ((is_numeric($entryValue) && $this->parseNumericValue($entryValue) > -1) && $structureValue == 'no') {
                $response = 3.34;
                $response = 4;
            } elseif ((is_numeric($entryValue) && $this->parseNumericValue($entryValue) > -1) && $structureValue == 'yes') {
                $response = 3.42;
                $response = 2;
            } elseif ((is_numeric($entryValue) && $this->parseNumericValue($entryValue) <= 0) && $structureValue == 'no') {
                $response = 3.52;
                $response = 2;
            } elseif ((is_numeric($entryValue) && $this->parseNumericValue($entryValue) <= 0) && $structureValue == 'yes') {
                $response = 3.61;
                $response = 1;
            }
        }
        //echo "R: " . $response . " => " . $name . " / / " . $entryValue . " / " . $structureValue . " Turn: (" . $turn . ")" . "<br><br>";
        return $response;
    }
    
    private
    function getDivider()
    {
        $divider = 1;
        if ('pli' == $this->type->getIdentifier()) {
            $divider = 118;
        } elseif ('hci' == $this->type->getIdentifier()) {
            $divider = 141;
        } elseif ('lpi' == $this->type->getIdentifier()) {
            $divider = 178;
        } elseif ('aci' == $this->type->getIdentifier()) {
            $divider = 89;
        } elseif ('rbi' == $this->type->getIdentifier()) {
            $divider = 83;
        } elseif ('ali' == $this->type->getIdentifier()) {
            $divider = 45;
        }
        return $divider;
    }
    
    private
    function getTurn($entryName)
    {
        if ($entryName == 'retention')
            return true;
        return false;
    }
    
    private
    function formatCurrency($value = null)
    {
        return number_format((float)$value, 2, '.', '');
    }
}


/*
	private function getMatch($entryValue = null, $structureValue = null, $turn = false, $name = null)
	{
		$response = 0;
		$entryValue = str_replace('.', '', $entryValue);
		if ($turn == false) {
			//echo intval(str_replace('.', '', $entryValue)) . " //// " . intval($structureValue);
			$response = 0;
			if ($entryValue == $structureValue) {
				$response = 1.11;
				$response = 1;
			} elseif (is_numeric($entryValue) && $this->parseNumericValue($entryValue) == $this->parseNumericValue($structureValue)
			) {
				$response = 1.21;
				$response = 1;
			} elseif ((is_numeric($entryValue) && $this->parseNumericValue($entryValue) > 0) && $this->parseLanguageValue($structureValue) == 'ja') {
				$response = 1.31;
				$response = 1;
			} elseif (stripos(strtolower($entryValue), 'mitversichert') > -1 && $structureValue == 'yes') {
				$response = 1.41;
				$response = 1;
			} elseif (stripos(strtolower($entryValue), 'mitversichert') > -1 && $structureValue == 'no') {
				$response = 1.50;
				$response = 0;
				$response = 1;
			} elseif (stripos(strtolower($entryValue), 'nicht versichert') > -1 && $structureValue == 'yes') {
				$response = 1.60;
				$response = 0;
			} elseif (stripos(strtolower($entryValue), 'nicht versichert') > -1 && $structureValue == 'no') {
				$response = 1.71;
				$response = 1;
			} else if ((is_numeric($entryValue) && $this->parseNumericValue($entryValue) > 0) && $structureValue == 'no') {
				$response = 1.80;
				$response = 0;
				$response = 1;
			} else if ((is_numeric($entryValue) && $this->parseNumericValue($entryValue) > 0) && $structureValue == 'yes') {
				$response = 1.91;
				$response = 1;
			} else if ((is_numeric($entryValue) && $this->parseNumericValue($entryValue) <= -1) && $structureValue == 'no') {
				$response = 1.80;
				$response = 0;
				$response = 1;
			} else if ((is_numeric($entryValue) && $this->parseNumericValue($entryValue) <= -1) && $structureValue == 'yes') {
				$response = 1.91;
				$response = 0;
			} elseif ($this->parseNumericValue($entryValue) == $this->parseNumericValue($structureValue)) {
				$response = 2.01;
				$response = 1;
			} elseif ($this->parseNumericValue($entryValue >= 0) && $structureValue == 'yes') {
				$response = 1;
				$response = 1;
			} elseif ($this->parseNumericValue($entryValue >= 0) && $structureValue == 'no') {
				$response = 2.20;
				$response = 0;
				$response = 1;
			}
		} else {
			if (stripos(strtolower($entryValue), 'keine') > -1 && $structureValue == 'no') {
				$response = 3.01;
				$response = 1;
			} elseif (stripos(strtolower($entryValue), 'keine') > -1 && $structureValue == 'yes') {
				$response = 3.10;
				$response = 0;
			} elseif ((is_numeric($entryValue) && $this->parseNumericValue($entryValue) <= 0) && $structureValue == 'yes') {
				$response = 3.20;
				$response = 0;
			} elseif ((is_numeric($entryValue) && $this->parseNumericValue($entryValue) > 0) && $structureValue == 'yes') {
				$response = 3.31;
				$response = 1;
			} elseif ($this->parseNumericValue($entryValue) == $this->parseNumericValue($structureValue)) {
				$response = 3.41;
				$response = 1;
			} elseif ($this->parseNumericValue($entryValue >= 0) && $structureValue == 'yes') {
				$response = 3.51;
				$response = 1;
			} elseif ($this->parseNumericValue($entryValue >= 0) && $structureValue == 'no') {
				$response = 3.60;
				$response = 0;
			}
		}
		//echo "R:" . $response . " => " . $name . " / / " . $entryValue . " / " . $structureValue . " Turn: (" . $turn . ")" . "<br><br>";
		return $response;
	}
*/
/*
	private function mapMultipleAttributes($entryName = null, $structureValueName = null)
	{
		//echo "<br>mapMultipleAttributes: " . $entryName . " / " . $structureValueName . "<br>";
		if ($entryName == 'amountCoveredBodyInjury' && $structureValueName == 'amountCovered') {
			return $structureValueName;
		} elseif ($entryName == 'amountCoveredFinancialDamage' && $structureValueName == 'amountCovered') {
			return $structureValueName;
		} elseif ($entryName == 'amountCoveredMaterialDamage' && $structureValueName == 'amountCovered') {
			return $structureValueName;
		}
		return null;
	}
*/