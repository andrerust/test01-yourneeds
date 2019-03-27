<?php

namespace Main\InsuranceBundle\Controller\Admin;

use AppBundle\Controller\BaseController;
use Main\InsuranceBundle\Entity\TariffPrivateLiability;
use Main\InsuranceBundle\Helper\FileParserHelper;
use Main\InsuranceBundle\Helper\TariffHelper;
use Main\InsuranceBundle\Repository\CompanyRepository;
use Main\InsuranceBundle\Repository\TargetGroupRepository;
use Main\InsuranceBundle\Repository\TariffRateRepository;
use Main\InsuranceBundle\Repository\TariffRepository;
use Main\InsuranceBundle\Repository\TariffTargetGroupRepository;
use Main\InsuranceBundle\Repository\TariffTypeRepository;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class AdminTariffController extends BaseController
{

   private function parseAttribute($parsedJson, $attributeName)
   {
      if (isset($parsedJson[$attributeName])) {
         return json_encode($parsedJson[$attributeName]);
      }
      return '';
   }

   /**
    * @Route("/admin/tariff11/new/{type}/finish", name="admin_tariff_new_finish",
    * methods="PUT", requirements={"id" = "\d+"}, defaults={"id" = 0})
    */
   public function adminTariffIdNewFinishAction($type = null,
                                                TariffTypeRepository $tariffTypeRepository,
                                                TargetGroupRepository $targetGroupRepository,
                                                TariffTargetGroupRepository $tariffTargetGroupRepository,
                                                CompanyRepository $companyRepository,
                                                Request $request,
                                                LoggerInterface $logger)
   {

      if (0 === strpos($request->headers->get('Content-Type'), 'application/json')) {
         $data = json_decode($request->getContent(), true);
         $request->request->replace(is_array($data) ? $data : array());
      }
      $requestData = json_encode($data['structure']);
      /*
      $requestData = '
{"tariffName":"Prima 2018","runTime":"12","retention":"1","targetGroups":["0","familyChild","family","partner","singleChild","single"],"exit1":"Yes","amountCoveredJungKids":"0","includeInternship":"0","badDeptLoss":"0","dataExchange":"0","ownResidentialHomeLivingIn":"0","ownResidentialHomeRentalOthers":"0","rentedPropertiesAbroad":"0","waterDamageLiabilityAboveGround":"0","waterDamageLiabilityUnderground":"0","takeCareOfDogs":"0","ebikes":"0","horsesAndWagons":"0","gradualDamage":"0","actsOfKindness":"0","damageToMovables":"0","lossOfPrivateKeys":"0","lossOfJobKeys":"0","withParentLivingInHouse":"0","childminderNonCommercial":"0","voluntaryWork":"0","discountBalancing":"0","renovations":"0","surfboards":"0","conditionlUpdate":"0","tariffIndividualSpecials":"0","companyId":"99","retentionAttributes":[{"Attribut":"until150"}],"methodOfPayment":["1","3","6","12"],"methodOfPaymentAttributes":[{"Wert":"8","Attribut":"monthlyInPercent"},{"Wert":"5"},{"Wert":"3"}],"numberOfPreviousCases":["0","1","2","3"],"numberOfPreviousCasesAttributes":[{"Wert":"25","Attribut":"oneWithAdditionalPercent"},{"Wert":"50","Attribut":"twoWithAdditionalPercent"},{"Attribut":"threeAndMoreWithDecline","Wert":"1"}],"targetGroupsAttributes":[{"Wert":"1","Attribut":"singleChildAsFamily"}]}

           ';
      */
      //$this->OUT($data, true);
      $jsonString = TariffHelper::jsonRequestToArray(
         $requestData
      );

      if (!$jsonString)
         return $this->redirectToRoute('admin_tariffs');

      if (!$this->isValidTariffType($type))
         return $this->getCredentialRedirectUrl();
      $this->setTariffTypeStructure('new-finish');

      $this->parser->setLogger($logger);
      $tariff = (new TariffPrivateLiability())->getSelfEmpty();
      $jsonValues = $this->parser->findJsonValues($this->tariffMap);
      $parsedTariff = $this->tariffToArray($tariff, $jsonValues);
      $parsedJson = $this->parser->parseSubmittedValues($parsedTariff, $this->tariffMap, $jsonString);
      $logger->info('parsed json', array(
         'list' => $parsedJson,
      ));

      //$this->OUT($parsedJson, true);
      $shouldSave = true;
      $jsonResponse = [];
      if ($parsedJson) {
         $newTariff = null;
         if ($this->type == 'pli') {
            $newTariff = new TariffPrivateLiability();
         }

         if ($newTariff) {
            //foreach ($this->tariffMap AS $entry) {
            $newTariff->setName($parsedJson['tariffName']);
            $newTariff->setNote($parsedJson['note']);
            $newTariff->setDescription($parsedJson['note']);
            $newTariff->setAmountCoveredBodyInjury($this->parseAttribute($parsedJson, 'amountCoveredBodyInjury'));
            $newTariff->setAmountCoveredMaterialDamage($this->parseAttribute($parsedJson, 'amountCoveredMaterialDamage'));
            $newTariff->setAmountCoveredFinancialDamage($this->parseAttribute($parsedJson, 'amountCoveredFinancialDamage'));
            $newTariff->setAmountCoveredJungKids($this->parseAttribute($parsedJson, 'amountCoveredJungKids'));
            $newTariff->setIncludeInternship($this->parseAttribute($parsedJson, 'includeInternship'));
            //}
            $newTariff->setIncludeInternship($this->parseAttribute($parsedJson, 'includeInternship'));
            $newTariff->setBadDeptLoss($this->parseAttribute($parsedJson, 'badDeptLoss'));
            $newTariff->setDataExchange($this->parseAttribute($parsedJson, 'dataExchange'));
            $newTariff->setOwnResidentialHomeLivingIn($this->parseAttribute($parsedJson, 'ownResidentialHomeLivingIn'));
            $newTariff->setOwnResidentialHomeRentalOthers($this->parseAttribute($parsedJson, 'ownResidentialHomeRentalOthers'));
            $newTariff->setUndevelopedProperties($this->parseAttribute($parsedJson, 'undevelopedProperties'));
            $newTariff->setRentedPropertiesAbroad($this->parseAttribute($parsedJson, 'rentedPropertiesAbroad'));
            $newTariff->setWaterDamageLiabilityAboveGround($this->parseAttribute($parsedJson, 'waterDamageLiabilityAboveGround'));
            $newTariff->setWaterDamageLiabilityUnderground($this->parseAttribute($parsedJson, 'waterDamageLiabilityUnderground'));
            $newTariff->setTakeCareOfDogs($this->parseAttribute($parsedJson, 'takeCareOfDogs'));
            $newTariff->setEbikes($this->parseAttribute($parsedJson, 'ebikes'));
            $newTariff->setHorsesAndWagons($this->parseAttribute($parsedJson, 'horsesAndWagons'));
            $newTariff->setGradualDamage($this->parseAttribute($parsedJson, 'gradualDamage'));
            $newTariff->setActsOfKindness($this->parseAttribute($parsedJson, 'actsOfKindness'));
            $newTariff->setDamageToMovables($this->parseAttribute($parsedJson, 'damageToMovables'));
            $newTariff->setLossOfPrivateKeys($this->parseAttribute($parsedJson, 'lossOfPrivateKeys'));
            $newTariff->setLossOfJobKeys($this->parseAttribute($parsedJson, 'lossOfJobKeys'));
            $newTariff->setWithParentLivingInHouse($this->parseAttribute($parsedJson, 'withParentLivingInHouse'));
            $newTariff->setVoluntaryWork($this->parseAttribute($parsedJson, 'voluntaryWork'));
            $newTariff->setChildminderNonCommercial($this->parseAttribute($parsedJson, 'childminderNonCommercial'));
            $newTariff->setRenovations($this->parseAttribute($parsedJson, 'renovations'));
            $newTariff->setSurfboards($this->parseAttribute($parsedJson, 'surfboards'));
            $newTariff->setConditionlUpdate($this->parseAttribute($parsedJson, 'conditionlUpdate'));
            $newTariff->setTariffIndividualSpecials($this->parseAttribute($parsedJson, 'tariffIndividualSpecials'));
            $newTariff->setRunTime($this->parseAttribute($parsedJson, 'runTime'));
            $newTariff->setRetention($this->parseAttribute($parsedJson, 'retention'));
            $newTariff->setMethodOfPayment($this->parseAttribute($parsedJson, 'methodOfPayment'));
            $newTariff->setNumberOfPreviousCases($this->parseAttribute($parsedJson, 'numberOfPreviousCases'));
            $newTariff->setIsActive(1);

            $em = $this->getDoctrine()->getManager();
            if (isset($parsedJson['targetGroups'])) {
               foreach ($parsedJson['targetGroups'] AS $targetGroupIdentifier) {
                  $tmpTargetGroup = $targetGroupRepository->findOneByIdentifier($targetGroupIdentifier);
                  if (isset($tmpTargetGroup)) {
                     $newTariff->addTariffTargetGroup($tmpTargetGroup, $em);
                  }
               }
            }
            $logger->info('Tariff', ['list' => $newTariff->getName()]);
            $newTariff->setCompany($companyRepository->find($parsedJson['companyId']));

            if ($shouldSave) {
               $em->persist($newTariff);
               $em->flush();
            }
            $logger->info('Tariff', ['list' => $newTariff->getName()]);
            $newTariff->setCompany($companyRepository->find($parsedJson['companyId']));
            $em = $this->getDoctrine()->getManager();

            $tariffType = $tariffTypeRepository->findIdByIdentifier($type);
            $newTariff->setTariffType($tariffTypeRepository->find($tariffType['id']));


            if ($shouldSave) {
               $em->persist($newTariff);
               $em->flush();
            }
            $logger->info('JSON', ['list' => $parsedJson]);
            $logger->info('newTariff', ['list' => ((array)$newTariff)]);
         }
         $jsonResponse['data'] = $parsedJson;
         $jsonResponse['status'] = 200;
         $jsonResponse['success'] = true;
      } else {
         $jsonResponse['data'] = null;
         $jsonResponse['status'] = 400;
         $jsonResponse['success'] = false;
      }
      return new JsonResponse($jsonResponse, 200, array('Access-Control-Allow-Origin' => '*', 'Content-Type' => 'application/json'));
      /*
      return $this->redirectToRoute('admin_tariff_id', [
         'id' => $id
      ]);
      */
   }

   /**
    * @IsGranted("ROLE_ADMIN")
    * @Route("/admin/tariff11/new/{type}", name="admin_tariff_new", requirements={"id" = "\d+"}, defaults={"id" = 0})
    */
   public function adminTariffNewAction(String $type = null,
                                        CompanyRepository $companyRepository,
                                        TargetGroupRepository $targetGroupRepository,
                                        LoggerInterface $logger)
   {

      $tariff = (new TariffPrivateLiability())->getSelfEmpty();
      $logger->info('Tariff', ['list' => $tariff]);
      if (!$this->isValidTariffType($type))
         return $this->getCredentialRedirectUrl();

      $this->setTariffTypeStructure('new-start');
      $this->parser->setLogger($logger);

      $jsonValues = $this->parser->findJsonValues($this->tariffMap);
      $parsedTariff = $this->tariffToArray($tariff, $jsonValues);
      $parsedTariff['id'] = $tariff['id'];
      $parsedTariff['tariffName'] = $tariff['tariffName'];
      $parsedTariff['note'] = $tariff['note'];

      $companies = $companyRepository->getAll();
      $this->parser->setSurveyValueList('companyId', $companies);
      $this->parser->setSurveyValueList('targetGroups', $targetGroupRepository->getAll());

      $logger->info('Tariff', ['list' => $tariff]);
      $logger->info('TariffType', ['list' => $type]);
      $logger->info('Companies', ['list' => $companies]);
      $logger->info('TargetGroups', ['list' => $parsedTariff['targetGroups']]);

      $structure = FileParserHelper::getJsonFromFile($this->get('kernel')->getRootDir() . '/../public/survey_data/pli');
      $logger->info('Structure loaded: ', ['list' => $structure]);

      //$parsedMatrix = $this->parser->showSurveyElementMatrix($structure, $parsedTariff, $this->tariffMap);
      $structure = $this->parser->setSurveyListValues($structure, $parsedTariff, $this->tariffMap);
      //$structure = $this->parser->fillDefaultValues($structure, $parsedTariff, $this->tariffMap);
      $logger->info('Structure parsed: ', ['list' => $structure]);

      return $this->render('@MainInsuranceBundle/admin/tariff/tariff.new.html.twig', [
         'companies' => $companies,
         'structure' => json_encode($structure)
      ]);
   }

   /**
    * @Route("/admin/tariff11/{id}/edit/finish", name="admin_tariff_id_edit_finish",
    * methods="PUT",
    * requirements={"id" = "\d+"}, defaults={"id" = 0})
    */
   public function adminTariffIdEditFinishAction($id = null,
                                                 TariffRepository $tariffRepository,
                                                 TariffTypeRepository $tariffTypeRepository,
                                                 TargetGroupRepository $targetGroupRepository,
                                                 TariffTargetGroupRepository $tariffTargetGroupRepository,
                                                 CompanyRepository $companyRepository,
                                                 Request $request,
                                                 LoggerInterface $logger)
   {
      $isPut = true;
      if ($isPut == true) {
         if (0 === strpos($request->headers->get('Content-Type'), 'application/json')) {
            $data = json_decode($request->getContent(), true);
            $request->request->replace(is_array($data) ? $data : array());
         }
         $requestData = json_encode($data['structure']);
      } else {
         $requestData = '
            {"tariffName":"Basic","runTime":"60","retention":"1","retentionAttributes":[{"Wert":"1","Attribut":"until150"},{"Wert":"1","Attribut":"until300"}],"methodOfPayment":["12"],"numberOfPreviousCases":["2","0","3","4"],"targetGroups":["single","singleChild","partner","family","familyChild"],"exit1":"No","amountCoveredBodyInjury":["10","20","7.5","5"],"amountCoveredMaterialDamage":["10","20"],"amountCoveredFinancialDamage":["10","20"],"amountCoveredJungKids":"1","amountCoveredJungKidsAttributes":[{"Wert":"25000","Attribut":"maximumDamageN"},{"Wert":200,"Attribut":"retentionCurrency"}],"includeInternship":"1","badDeptLoss":"1","badDeptLossAttributes":[{"Wert":"1500","Attribut":"msh"}],"dataExchange":"1","ownResidentialHomeLivingIn":"1","ownResidentialHomeRentalOthers":"0","undevelopedProperties":["1"],"rentedPropertiesAbroad":"0","waterDamageLiabilityAboveGround":"1","waterDamageLiabilityAboveGroundAttributes":[{"Wert":30000,"Attribut":"maximumDamageN"}],"waterDamageLiabilityUnderground":"0","takeCareOfDogs":"1","ebikes":"1","horsesAndWagons":"1","gradualDamage":"1","actsOfKindness":"1","actsOfKindnessAttributes":[{"Wert":"25000","Attribut":"amount"},{"Wert":200,"Attribut":"retentionCurrency"}],"damageToMovables":"0","lossOfPrivateKeys":"1","lossOfPrivateKeysAttributes":[{"Wert":"2000","Attribut":"maximumDamageN"},{"Wert":"200","Attribut":"retentionCurrency"}],"lossOfJobKeys":"1","lossOfJobKeysAttributes":[{"Wert":"200","Attribut":"retentionCurrency"},{"Wert":25000,"Attribut":"maximumDamageN"}],"withParentLivingInHouse":"0","childminderNonCommercial":"1","voluntaryWork":"0","discountBalancing":"0","renovations":"1","renovationsAttributes":[{"Wert":"150000","Attribut":"maximumDamageN"}],"surfboards":"1","conditionlUpdate":"1","tariffIndividualSpecials":"0"}

        ';
      }

      $jsonString = TariffHelper::jsonRequestToArray($requestData);
      $tariff = $tariffRepository->findTariff($id);
      if (!$tariff || !$jsonString)
         return $this->redirectToRoute('admin_tariffs');

      $tariffType = $tariffTypeRepository->findTypeById($tariff['typeId']);
      if (!$this->isValidTariffType($tariffType['identifier']))
         return $this->redirectToRoute('admin_tariffs');
      //return $this->getCredentialRedirectUrl();
      $this->setTariffTypeStructure('edit-finish');

      $jsonValues = $this->parser->findJsonValues($this->tariffMap);
      $parsedTariff = $this->tariffToArray($tariff, $jsonValues);

      //$this->OUT($parsedJson, true);
      $logger->info('parsed tariff', ['list' => $parsedTariff]);
      $this->parser->setLogger($logger);
      $parsedJson = $this->parser->parseSubmittedValues($parsedTariff, $this->tariffMap, $jsonString);
      $logger->info('parsed json', ['list' => $parsedJson]);

      $shouldSave = true;
      $jsonResponse = [];
      if ($parsedJson) {
         $editTariff = $tariffRepository->find($id);

         /*
          * add to tariff attributes map
          */
         $parsedJson['id'] = $tariff['id'];
         $parsedJson['tariffName'] = $tariff['tariffName'];
         $parsedJson['note'] = $tariff['note'];
         $parsedJson['isActive'] = $tariff['isActive'];
         $parsedJson['companyId'] = $tariff['companyId'];
         $editTariff->setByJson($parsedJson);

         $em = $this->getDoctrine()->getManager();
         /*
          * inside target group
          */
         if (isset($parsedJson['targetGroups'])) {
            $tmpTargetGroups = $tariffTargetGroupRepository->findByTariff($id);
            $logger->info('tmpTargetGroups', ['list' => ((array)$tmpTargetGroups)]);
            $editTariff->deleteTariffTargetGroups($tmpTargetGroups, $em);

            foreach ($parsedJson['targetGroups'] AS $targetGroupIdentifier) {
               $tmpTargetGroup = $targetGroupRepository->findOneByIdentifier($targetGroupIdentifier);
               if (isset($tmpTargetGroup)) {
                  $editTariff->addTariffTargetGroup($tmpTargetGroup, $em);
               }
            }
         }
         $logger->info('Tariff', ['list' => $editTariff->getName()]);
         $editTariff->setCompany($companyRepository->find($parsedJson['companyId']));

         if ($shouldSave) {
            $em->persist($editTariff);
            $em->flush();
         }
         $logger->info('editTariff', ['list' => ((array)$editTariff)]);

         /*
          * response template
          */
         $jsonResponse['data'] = $parsedJson;
         return new JsonResponse($jsonResponse, 200, array('Access-Control-Allow-Origin' => '*', 'Content-Type' => 'application/json'));
         //$jsonResponse['data'] = $data['structure']['Gesellschaft'];
         $jsonResponse['status'] = 200;
         $jsonResponse['success'] = true;
      } else {
         $jsonResponse['data'] = null;
         $jsonResponse['status'] = 400;
         $jsonResponse['success'] = false;
      }
      return $this->redirectToRoute('admin_tariff_id', [
         'id' => $id
      ]);
   }

   /**
    * @IsGranted("ROLE_ADMIN")
    * @Route("/admin/tariff11/{id}/edit", name="admin_tariff_edit", requirements={"id" = "\d+"}, defaults={"id" = 0})
    */
   public function adminTariffEditAction($id = null,
                                         TariffRepository $tariffRepository,
                                         TariffTypeRepository $tariffTypeRepository,
                                         CompanyRepository $companyRepository,
                                         TargetGroupRepository $targetGroupRepository,
                                         LoggerInterface $logger)
   {
      $logger->info('TariffId', ['list' => $id]);
      $tariff = $tariffRepository->findTariff($id);
      if (!$tariff)
         return $this->redirectToRoute('admin_tariffs');

      $tariffType = $tariffTypeRepository->findTypeById($tariff['typeId']);
      if (!$this->isValidTariffType($tariffType['identifier']))
         return $this->getCredentialRedirectUrl();

      $this->setTariffTypeStructure('edit-start');
      $this->parser->setLogger($logger);

      $jsonValues = $this->parser->findJsonValues($this->tariffMap);
      $parsedTariff = $this->tariffToArray($tariff, $jsonValues);
      $parsedTariff['id'] = $tariff['id'];
      $parsedTariff['tariffName'] = $tariff['tariffName'];
      $parsedTariff['note'] = $tariff['note'];

      $companies = $companyRepository->getAll();
      $this->parser->setSurveyValueList('companyId', $companies);
      $this->parser->setSurveyValueList('targetGroups', $targetGroupRepository->getAll());
      $parsedTariff['targetGroups'] = $targetGroupRepository->findTargetGroupsByTariffId($parsedTariff['id']);


      $logger->info('Tariff', ['list' => $tariff]);
      $logger->info('TariffType', ['list' => $tariffType]);
      $logger->info('Companies', ['list' => $companies]);
      $logger->info('TargetGroups', ['list' => $parsedTariff['targetGroups']]);

      $structure = FileParserHelper::getJsonFromFile($this->get('kernel')->getRootDir() . '/../public/survey_data/pli');
      $logger->info('Structure loaded: ', ['list' => $structure]);

      //$parsedMatrix = $this->parser->showSurveyElementMatrix($structure, $parsedTariff, $this->tariffMap);
      $structure = $this->parser->setSurveyListValues($structure, $parsedTariff, $this->tariffMap);
      $structure = $this->parser->fillDefaultValues($structure, $parsedTariff, $this->tariffMap);

      $logger->info('Structure parsed: ', ['list' => $structure]);
      return $this->render('@MainInsuranceBundle/Admin/tariff/tariff.edit.html.twig', [
         'tariff' => $tariff,
         'companies' => $companies,
         'structure' => json_encode($structure)
      ]);
   }

   /**
    * @IsGranted("ROLE_ADMIN")
    * @Route("/admin/tariff11/{id}", name="admin_tariff_id", requirements={"id" = "\d+"}, defaults={"id" = 0})
    */
   public function adminTariffAction($id = null,
                                     TariffRepository $tariffRepository,
                                     TargetGroupRepository $targetGroupRepository,
                                     TariffRateRepository $tariffRateRepository,
                                     TariffTypeRepository $tariffTypeRepository,
                                     LoggerInterface $logger)
   {
      $tariff = $tariffRepository->findTariff($id);
      if (!$tariff)
         return $this->redirectToRoute('admin_tariffs');

      $tariffType = $tariffTypeRepository->findTypeById($tariff['typeId']);
      if (!$this->isValidTariffType($tariffType['identifier']))
         return $this->getCredentialRedirectUrl();
      $this->setTariffTypeStructure('edit-start');
      $this->parser->setLogger($logger);
      $jsonTariffMapAttributes = $this->parser->findJsonValues($this->tariffMap);
      $parsedTariff = $this->tariffToArray($tariff, $jsonTariffMapAttributes);
      $parsedTariffReadable = $this->tariffNormalizeReadability($parsedTariff, $this->tariffReadabilityMap);
      $parsedTariffReadable['id'] = $tariff['id'];
      $parsedTariffReadable['logo'] = $tariff['logo'];
      $parsedTariffReadable['companyName'] = $tariff['companyName'];
      $parsedTariffReadable['publicName'] = $tariff['publicName'];
      $parsedTariffReadable['department'] = $tariff['department'];
      $parsedTariffReadable['contactPerson'] = $tariff['contactPerson'];
      $parsedTariffReadable['contactPhoneNumber'] = $tariff['contactPhoneNumber'];
      $parsedTariffReadable['email'] = $tariff['email'];
      $parsedTariffReadable['tariffName'] = $tariff['tariffName'];
      $parsedTariffReadable['isActive'] = $tariff['isActive'];
      $parsedTariffReadable['updatedAt'] = $tariff['updatedAt'];

      $targetGroups = $targetGroupRepository->findTargetGroupsByTariffId($tariff['id']);
      //$this->OUT($targetGroups, true);

      $tariffRates = $tariffRateRepository->findRatesByTariffId($tariff['id']);
      //$tariffRateMap = TariffRate::getMap();
      //$jsonTariffRateMap = $this->parser->findJsonValues($tariffRateMap);
      //$parsedRates = $this->tariffRatesToArray($tariffRates, $jsonTariffRateMap);

      return $this->render('@MainInsuranceBundle/Admin/tariff/tariff.html.twig', [
         'tariff' => $parsedTariffReadable,
         'tariffType' => $tariffType,
         'tariffRates' => $tariffRates,
         'targetGroups' => $targetGroups
      ]);
   }

   /**
    * @IsGranted("ROLE_ADMIN")
    * @Route("/admin/tariffs11/{type}", name="admin_tariffs_type")
    * @Route("/admin/tariffs11", name="admin_tariffs11")
    * @param String|String $type
    * @param TariffRepository $tariffRepository
    * @param TariffTypeRepository $tariffTypeRepository
    * @return \Symfony\Component\HttpFoundation\Response
    */
   public function adminTariffsAction(String $type = 'pli',
                                      TariffRepository $tariffRepository,
                                      TariffTypeRepository $tariffTypeRepository,
                                      LoggerInterface $logger
   )
   {
      if (!$this->isValidTariffType($type))
         return $this->getCredentialRedirectUrl();

      $this->setTariffTypeStructure('edit-start');
      $this->parser->setLogger($logger);

      $tariffType = $tariffTypeRepository->findIdByIdentifier($type);
      $tariffs = $tariffRepository->findTariffsByType($tariffType['id']);

      $jsonTariffMapAttributes = $this->parser->findJsonValues($this->tariffMap);
      $tariffList = [];
      if (count($tariffs) > 0) {
         foreach ($tariffs as $tariff) {
            $parsedTariff = $this->tariffToArray($tariff, $jsonTariffMapAttributes);
            $parsedTariff['id'] = $tariff['id'];
            $parsedTariff['logo'] = $tariff['logo'];
            $parsedTariff['companyName'] = $tariff['companyName'];
            $parsedTariff['contactPerson'] = $tariff['contactPerson'];
            $parsedTariff['name'] = $tariff['name'];
            $parsedTariff['isActive'] = $tariff['isActive'];
            $parsedTariff['updatedAt'] = $tariff['updatedAt'];
            $tariffList[] = $parsedTariff;
         }
      }

      //$this->out($tariffs, true);
      return $this->render('@MainInsuranceBundle/Admin/tariff/tariffs.html.twig', [
            'tariffs' => $tariffList
         ]
      );
   }

}
