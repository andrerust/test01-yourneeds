<?php
namespace Main\InsuranceBundle\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;
use Faker\Factory;
use Main\InsuranceBundle\Entity\TargetGroup;
use Main\InsuranceBundle\Entity\TariffPrivateLiability;
use Main\InsuranceBundle\Entity\TariffRate;
use Main\InsuranceBundle\Entity\TariffTargetGroup;
use Main\InsuranceBundle\Entity\TariffType;
use Main\InsuranceBundle\Entity\UserTariff;

class TariffFixtures extends Fixture
{
   private $faker;

   public function load(ObjectManager $manager)
   {
      $this->faker = Factory::create();
      $this->addTariffTypes($manager);
      $this->addTargetGroups($manager);
      $this->addTariffs($manager);
      $this->addTariffRates($manager);
      $this->addTargetGroupToTariff($manager);
      $this->addTariffRateToUser($manager);
      $manager->flush();
   }

   private function addTariffRateToUser(EntityManager $em)
   {
      for ($i = 1; $i <= 20; $i++) {
         $userTariff = new UserTariff();
         $userTariff->setUser($this->getReference('user_' . random_int(1, 5)));
         $userTariff->setTariffRate($this->getReference('tariffrate_' . random_int(1, 3)));
         $this->addReference('usertariff_' . $i, $userTariff);
         $em->persist($userTariff);
      };

   }

   private function addTargetGroupToTariff(EntityManager $em)
   {
      for ($i = 1; $i <= 15; $i++) {
         $targetGroupTariff = new TariffTargetGroup();
         $targetGroupTariff->setTargetGroup($this->getReference('targetgroup_' . random_int(1, 6)));
         $targetGroupTariff->setTariff($this->getReference('tariff_' . random_int(1, 4)));
         $this->addReference('targetgrouptariff_' . $i, $targetGroupTariff);
         $em->persist($targetGroupTariff);
      };

   }

   private function addTariffRates(EntityManager $em)
   {
      $list = [
         [
            'tariff' => $this->getReference('tariff_janitos_1'),
            'targetGroup' => $this->getReference('targetgroup_family'),
            'amountOfCoverage' => '10',
            'referenceName' => 'tariffrate_janitos_1',
            'ageFrom' => '0',
            'ageUntil' => '30',
            'rate' => '10',
            'rateInterval' => '12',
            'retentionValue' => '10',
            'discountValue' => '10',
            'discountName' => 'A 10%',
            'isActive' => 1
         ],
         [
            'tariff' => $this->getReference('tariff_janitos_2'),
            'targetGroup' => $this->getReference('targetgroup_singleChild'),
            'amountOfCoverage' => '20',
            'referenceName' => 'tariffrate_janitos_2',
            'ageFrom' => '0',
            'ageUntil' => '30',
            'rate' => '10',
            'rateInterval' => '3',
            'retentionValue' => 0,
            'discountValue' => 20,
            'discountName' => 'B 20%',
            'isActive' => 1
         ],
         [
            'tariff' => $this->getReference('tariff_helvetia_1'),
            'targetGroup' => $this->getReference('targetgroup_single'),
            'amountOfCoverage' => '10',
            'referenceName' => 'tariffrate_helvetia_1',
            'ageFrom' => '0',
            'ageUntil' => '30',
            'rate' => '50',
            'rateInterval' => '6',
            'retentionValue' => 10,
            'discountValue' => 25,
            'discountName' => 'C 25%',
            'isActive' => 1
         ]
      ];

      $counter = 0;
      foreach ($list AS $entry) {
         $counter++;
         $tariffRate = new TariffRate();
         $tariffRate->setTariff($entry['tariff']);
         $tariffRate->setTargetGroup($entry['targetGroup']);
         $tariffRate->setAmountOfCoverage($entry['amountOfCoverage']);
         $tariffRate->setAgeFrom($entry['ageFrom']);
         $tariffRate->setAgeUntil($entry['ageUntil']);
         $tariffRate->setRate($entry['rate']);
         $tariffRate->setRateInterval($entry['rateInterval']);
         $tariffRate->setRetentionValue($entry['retentionValue']);
         $tariffRate->setDiscountValue($entry['discountValue']);
         $tariffRate->setDiscountName($entry['discountName']);
         $tariffRate->setIsActive($entry['isActive']);
         $tariffRate->setUpdatedAt($this->faker->dateTimeBetween("-180 days", "now"));
         $tariffRate->setCreatedAt($this->faker->dateTimeBetween("-180 days", "now"));
         $this->addReference($entry['referenceName'], $tariffRate);
         $this->addReference('tariffrate_' . $counter, $tariffRate);
         $em->persist($tariffRate);
      }
   }

   private function addTariffs(EntityManager $em)
   {
      $list = [
         [
            'name' => 'Janitos Tarif 01 2018999',
            'referenceName' => 'tariff_janitos_1',
            'description' => 'Helvetia Tarif 01, 0-34, Single, 10M, hasNoR',
            'company' => $this->getReference('company_janitos'),
            'tariffType' => $this->getReference('tarifftype_phv'),
            'note' => "",
            'isActive' => 1,
            'amountCoveredBodyInjury' => '[{"values":[{"M":"10"},{"M":"6"},{"M":"20"},{"M":"75"}]}]',
            'amountCoveredMaterialDamage' => '[{"values":[{"M":"10"},{"M":"6"},{"M":"20"},{"M":"75"}]}]',
            'amountCoveredFinancialDamage' => '[{"values":[{"M":"10"},{"M":"6"},{"M":"20"},{"M":"75"}]}]',
            'amountCoveredJungKids' => '[{"bool":1},{"values":[{"amount":50333},{"retentionCurrency":200},{"maximumDamageN":312310}]}]',
            'includeInternship' => '[{"bool":1}, {"values":[{"retentionCurrency": 212}, {"materialDamage": "bool"}, {"maximumDamageN": 30000}]}]',
            'badDeptLoss' => '[{"bool":1},{"values":[{"retentionCurrency":"15011"},{"minimumDamageN":121000},{"maximumDamageN":1122500},{"msh":1500},{"includingSpecialDamageRS":11050}]}]',
            'dataExchange' => '[{"bool":1},{"values":[{"retentionCurrency":"15012"},{"minimumDamageN":121000},{"maximumDamageN":1122500},{"msh":1500},{"includingSpecialDamageRS":11050}]}]',
            'ownResidentialHomeLivingIn' => '[{"bool":1}, {"values": [{"qty": 1},{"excludeAppartmentAnyRooms": "0"},{"excludeAppartment2Rooms": "1"},{"excludeAppartment3Rooms": "1"},{"excludeAppartment4Rooms": "0"}]}]',
            'ownResidentialHomeRentalOthers' => '[{"bool":1}, {"values": [{"qty": 1},{"excludeAppartmentAnyRooms": "no"},{"excludeAppartment2Rooms": "yes"},{"excludeAppartment3Rooms": "yes"},{"excludeAppartment4Rooms": "no"}]}]',
            'undevelopedProperties' => '[{"values":[{"T":"1"},{"T":"5"}]}]',
            'rentedPropertiesAbroad' => '[{"bool":1}]',
            'waterDamageLiabilityAboveGround' => '[{"bool":1}, {"values":[{"maximumDamageN": 30000},{"minimumDamageN": 30000}]}]',
            'waterDamageLiabilityUnderground' => '[{"bool":1}, {"values":[{"maximumDamageN": 50000}]}]',
            'takeCareOfDogs' => '[{"bool":1}]',
            'ebikes' => '[{"bool":1}]',
            'horsesAndWagons' => '[{"bool":1}]',
            'gradualDamage' => '[{"bool":1}]',
            'actsOfKindness' => '[{"bool":1}, {"values":[{"amount": 50000},{"retentionCurrency": 200}]}]',
            'damageToMovables' => '[{"bool":1}, {"values":[{"amount": 50000},{"retentionCurrency": 100},{"maximumDamageN": 200000}]}]',
            'lossOfPrivateKeys' => '[{"bool":1}, {"values":[{"amount": 50000},{"retentionCurrency": 100},{"maximumDamageN": 25000}]}]',
            'lossOfJobKeys' => '[{"bool":1}, {"values":[{"amount": 50000},{"retentionCurrency": 100},{"maximumDamageN": 25000}]}]',
            'withParentLivingInHouse' => '[{"bool":1}, {"values":[{"family":1},{"senior":1},{"partner":1}]}]',
            'voluntaryWork' => '[{"bool": 1}]',
            'childminderNonCommercial' => '[{"bool": 1}]',
            'renovations' => '[{"bool":1}, {"values":[{"amount": 100000}]}]',
            'surfboards' => '[{"bool": 1}]',
            'conditionlUpdate' => '[{"bool": 1}]',
            'tariffIndividualSpecials' => '[{"bool":1}, {"values":[{"amount": 100000}]}]',
            'runTime' => '[{"values":[{"M":"12"}]}]',
            'retention' => '[{"bool":1}, {"values":[{"until175":15}]}]',
            'methodOfPayment' => '[{"values":[{"M":"2"},{"M":"3"}],"checkValues":[{"yearlyInPercent": "5,55"}]}]',
            'numberOfPreviousCases' => '[{"values":[{"M":"2"},{"M":"3"}],"checkValues":[{"twoWithPreDiscount":1},{"oneWithPreDiscount":"1"},{"threeWithQuestion":"2"}]}]'
         ],
         [
            'name' => 'Janitos Tarif 02 2018999',
            'referenceName' => 'tariff_janitos_2',
            'description' => 'Helvetia Tarif 01, 0-34, Single, 10M, hasNoR',
            'company' => $this->getReference('company_janitos'),
            'tariffType' => $this->getReference('tarifftype_phv'),
            'note' => "",
            'isActive' => 0,
            'amountCoveredBodyInjury' => '[{"values":[{"M":"10"},{"M":"6"},{"M":"20"},{"M":"75"}]}]',
            'amountCoveredMaterialDamage' => '[{"values":[{"M":"10"},{"M":"6"},{"M":"20"},{"M":"75"}]}]',
            'amountCoveredFinancialDamage' => '[{"values":[{"M":"10"},{"M":"6"},{"M":"20"},{"M":"75"}]}]',
            'amountCoveredJungKids' => '[{"bool":0},{"values":[{"amount":50333},{"retentionCurrency":200},{"maximumDamageN":312310}]}]',
            'includeInternship' => '[{"bool":0}, {"values":[{"retentionCurrency": 212}, {"materialDamage": "bool"}, {"maximumDamageN": 30000}]}]',
            'badDeptLoss' => '[{"bool":0},{"values":[{"retentionCurrency":"15011"},{"minimumDamageN":121000},{"maximumDamageN":1122500},{"msh":1500},{"includingSpecialDamageRS":11050}]}]',
            'dataExchange' => '[{"bool":0},{"values":[{"retentionCurrency":"15012"},{"minimumDamageN":121000},{"maximumDamageN":1122500},{"msh":1500},{"includingSpecialDamageRS":11050}]}]',
            'ownResidentialHomeLivingIn' => '[{"bool":0}, {"values": [{"qty": 1},{"excludeAppartmentAnyRooms": "0"},{"excludeAppartment2Rooms": "1"},{"excludeAppartment3Rooms": "1"},{"excludeAppartment4Rooms": "0"}]}]',
            'ownResidentialHomeRentalOthers' => '[{"bool":0}, {"values": [{"qty": 1},{"excludeAppartmentAnyRooms": "no"},{"excludeAppartment2Rooms": "yes"},{"excludeAppartment3Rooms": "yes"},{"excludeAppartment4Rooms": "no"}]}]',
            'undevelopedProperties' => '[{"values":[{"T":"1"},{"T":"5"}]}]',
            'rentedPropertiesAbroad' => '[{"bool":0}]',
            'waterDamageLiabilityAboveGround' => '[{"bool":0}, {"values":[{"maximumDamageN": 30000}]}]',
            'waterDamageLiabilityUnderground' => '[{"bool":0}, {"values":[{"maximumDamageN": 50000}]}]',
            'takeCareOfDogs' => '[{"bool":0}]',
            'ebikes' => '[{"bool":0}]',
            'horsesAndWagons' => '[{"bool":0}]',
            'gradualDamage' => '[{"bool":0}]',
            'actsOfKindness' => '[{"bool":0}, {"values":[{"amount": 50000},{"retentionCurrency": 200}]}]',
            'damageToMovables' => '[{"bool":0}, {"values":[{"amount": 50000},{"retentionCurrency": 100},{"maximumDamageN": 200000}]}]',
            'lossOfPrivateKeys' => '[{"bool":0}, {"values":[{"amount": 50000},{"retentionCurrency": 100},{"maximumDamageN": 25000}]}]',
            'lossOfJobKeys' => '[{"bool":0}, {"values":[{"amount": 50000},{"retentionCurrency": 100},{"maximumDamageN": 25000}]}]',
            'withParentLivingInHouse' => '[{"bool":0}, {"values":[{"family":1},{"senior":1},{"partner":1}]}]',
            'voluntaryWork' => '[{"bool": 0}]',
            'childminderNonCommercial' => '[{"bool": 0}]',
            'renovations' => '[{"bool":0}, {"values":[{"amount": 100000}]}]',
            'surfboards' => '[{"bool": 0}]',
            'conditionlUpdate' => '[{"bool": 0}]',
            'tariffIndividualSpecials' => '[{"bool":0}, {"values":[{"amount": 100000}]}]',
            'runTime' => '[{"values":[{"M":"24"}]}]',
            'retention' => '[{"bool":1}, {"values":[{"until175":15}]}]',
            'methodOfPayment' => '[{"values":[{"M":"2"},{"M":"3"}],"checkValues":[{"yearlyInPercent": "5,55"}]}]',
            'numberOfPreviousCases' => '[{"values":[{"M":"2"},{"M":"3"}],"checkValues":[{"twoWithPreDiscount":1},{"oneWithPreDiscount":"1"},{"threeWithQuestion":"2"}]}]'
         ],
         [
            'name' => 'Helvetia Tarif 01 2018999',
            'referenceName' => 'tariff_helvetia_1',
            'description' => 'Helvetia Tarif 01, 0-34, Single, 10M, hasNoR',
            'company' => $this->getReference('company_helvetia'),
            'tariffType' => $this->getReference('tarifftype_phv'),
            'note' => "",
            'isActive' => 1,
            'amountCoveredBodyInjury' => '[{"values":[{"M":"10"},{"M":"6"},{"M":"20"},{"M":"75"}]}]',
            'amountCoveredMaterialDamage' => '[{"values":[{"M":"10"},{"M":"6"},{"M":"20"},{"M":"75"}]}]',
            'amountCoveredFinancialDamage' => '[{"values":[{"M":"10"},{"M":"6"},{"M":"20"},{"M":"75"}]}]',
            'amountCoveredJungKids' => '[{"bool":1},{"values":[{"amount":50333},{"retentionCurrency":200},{"maximumDamageN":312310}]}]',
            'includeInternship' => '[{"bool":1}, {"values":[{"retentionCurrency": 212}, {"materialDamage": "bool"}, {"maximumDamageN": 30000}]}]',
            'badDeptLoss' => '[{"bool":1},{"values":[{"retentionCurrency":"15011"},{"minimumDamageN":121000},{"maximumDamageN":1122500},{"msh":1500},{"includingSpecialDamageRS":11050}]}]',
            'dataExchange' => '[{"bool":1},{"values":[{"retentionCurrency":"15012"},{"minimumDamageN":121000},{"maximumDamageN":1122500},{"msh":1500},{"includingSpecialDamageRS":11050}]}]',
            'ownResidentialHomeLivingIn' => '[{"bool":1}, {"values": [{"qty": 1},{"excludeAppartmentAnyRooms": "0"},{"excludeAppartment2Rooms": "1"},{"excludeAppartment3Rooms": "1"},{"excludeAppartment4Rooms": "0"}]}]',
            'ownResidentialHomeRentalOthers' => '[{"bool":1}, {"values": [{"qty": 1},{"excludeAppartmentAnyRooms": "no"},{"excludeAppartment2Rooms": "yes"},{"excludeAppartment3Rooms": "yes"},{"excludeAppartment4Rooms": "no"}]}]',
            'undevelopedProperties' => '[{"values":[{"T":"1"},{"T":"5"}]}]',
            'rentedPropertiesAbroad' => '[{"bool":1}]',
            'waterDamageLiabilityAboveGround' => '[{"bool":1}, {"values":[{"maximumDamageN": 30000}]}]',
            'waterDamageLiabilityUnderground' => '[{"bool":1}, {"values":[{"maximumDamageN": 50000}]}]',
            'takeCareOfDogs' => '[{"bool":1}]',
            'ebikes' => '[{"bool":1}]',
            'horsesAndWagons' => '[{"bool":1}]',
            'gradualDamage' => '[{"bool":1}]',
            'actsOfKindness' => '[{"bool":1}, {"values":[{"amount": 50000},{"retentionCurrency": 200}]}]',
            'damageToMovables' => '[{"bool":1}, {"values":[{"amount": 50000},{"retentionCurrency": 100},{"maximumDamageN": 200000}]}]',
            'lossOfPrivateKeys' => '[{"bool":1}, {"values":[{"amount": 50000},{"retentionCurrency": 100},{"maximumDamageN": 25000}]}]',
            'lossOfJobKeys' => '[{"bool":1}, {"values":[{"amount": 50000},{"retentionCurrency": 100},{"maximumDamageN": 25000}]}]',
            'withParentLivingInHouse' => '[{"bool":1}, {"values":[{"family":1},{"senior":1},{"partner":1}]}]',
            'voluntaryWork' => '[{"bool": 1}]',
            'childminderNonCommercial' => '[{"bool": 1}]',
            'renovations' => '[{"bool":1}, {"values":[{"amount": 100000}]}]',
            'surfboards' => '[{"bool": 1}]',
            'conditionlUpdate' => '[{"bool": 1}]',
            'tariffIndividualSpecials' => '[{"bool":1}, {"values":[{"amount": 100000}]}]',
            'runTime' => '[{"values":[{"M":"12"}]}]',
            'retention' => '[{"bool":1}, {"values":[{"until175":15}]}]',
            'methodOfPayment' => '[{"values":[{"M":"2"},{"M":"3"}],"checkValues":[{"yearlyInPercent": "5,55"}]}]',
            'numberOfPreviousCases' => '[{"values":[{"M":"2"},{"M":"3"}],"checkValues":[{"twoWithPreDiscount":1},{"oneWithPreDiscount":"1"},{"threeWithQuestion":"2"}]}]'
         ],
         [
            'name' => 'Helvetia Tarif 01 2018',
            'referenceName' => 'tariff_helvetia_2',
            'description' => 'Helvetia Tarif 01, 0-34, Single, 10M, hasNoR',
            'company' => $this->getReference('company_helvetia'),
            'tariffType' => $this->getReference('tarifftype_phv'),
            'note' => "",
            'isActive' => 1,
            'amountCoveredBodyInjury' => '[{"values":[{"M":"10"},{"M":"6"},{"M":"20"},{"M":"75"}]}]',
            'amountCoveredMaterialDamage' => '[{"values":[{"M":"10"},{"M":"6"},{"M":"20"},{"M":"75"}]}]',
            'amountCoveredFinancialDamage' => '[{"values":[{"M":"10"},{"M":"6"},{"M":"20"},{"M":"75"}]}]',
            'amountCoveredJungKids' => '[{"bool":1},{"values":[{"amount":50333},{"retentionCurrency":200},{"maximumDamageN":312310}]}]',
            'includeInternship' => '[{"bool":1}, {"values":[{"retentionCurrency": 212}, {"materialDamage": "bool"}, {"maximumDamageN": 30000}]}]',
            'badDeptLoss' => '[{"bool":1},{"values":[{"retentionCurrency":"15011"},{"minimumDamageN":121000},{"maximumDamageN":1122500},{"msh":1500},{"includingSpecialDamageRS":11050}]}]',
            'dataExchange' => '[{"bool":1},{"values":[{"retentionCurrency":"15012"},{"minimumDamageN":121000},{"maximumDamageN":1122500},{"msh":1500},{"includingSpecialDamageRS":11050}]}]',
            'ownResidentialHomeLivingIn' => '[{"bool":1}, {"values": [{"qty": 1},{"excludeAppartmentAnyRooms": "0"},{"excludeAppartment2Rooms": "1"},{"excludeAppartment3Rooms": "1"},{"excludeAppartment4Rooms": "0"}]}]',
            'ownResidentialHomeRentalOthers' => '[{"bool":1}, {"values": [{"qty": 1},{"excludeAppartmentAnyRooms": "no"},{"excludeAppartment2Rooms": "yes"},{"excludeAppartment3Rooms": "yes"},{"excludeAppartment4Rooms": "no"}]}]',
            'undevelopedProperties' => '[{"values":[{"T":"1"},{"T":"5"}]}]',
            'rentedPropertiesAbroad' => '[{"bool":1}]',
            'waterDamageLiabilityAboveGround' => '[{"bool":1}, {"values":[{"maximumDamageN": 30000}]}]',
            'waterDamageLiabilityUnderground' => '[{"bool":1}, {"values":[{"maximumDamageN": 50000}]}]',
            'takeCareOfDogs' => '[{"bool":1}]',
            'ebikes' => '[{"bool":1}]',
            'horsesAndWagons' => '[{"bool":1}]',
            'gradualDamage' => '[{"bool":1}]',
            'actsOfKindness' => '[{"bool":1}, {"values":[{"amount": 50000},{"retentionCurrency": 200}]}]',
            'damageToMovables' => '[{"bool":1}, {"values":[{"amount": 50000},{"retentionCurrency": 100},{"maximumDamageN": 200000}]}]',
            'lossOfPrivateKeys' => '[{"bool":1}, {"values":[{"amount": 50000},{"retentionCurrency": 100},{"maximumDamageN": 25000}]}]',
            'lossOfJobKeys' => '[{"bool":1}, {"values":[{"amount": 50000},{"retentionCurrency": 100},{"maximumDamageN": 25000}]}]',
            'withParentLivingInHouse' => '[{"bool":1}, {"values":[{"family":1},{"senior":1},{"partner":1}]}]',
            'voluntaryWork' => '[{"bool": 1}]',
            'childminderNonCommercial' => '[{"bool": 1}]',
            'renovations' => '[{"bool":1}, {"values":[{"amount": 100000}]}]',
            'surfboards' => '[{"bool": 1}]',
            'conditionlUpdate' => '[{"bool": 1}]',
            'tariffIndividualSpecials' => '[{"bool":1}, {"values":[{"amount": 100000}]}]',
            'runTime' => '[{"values":[{"M":"12"}]}]',
            'retention' => '[{"bool":1}, {"values":[{"until175":15}]}]',
            'methodOfPayment' => '[{"values":[{"M":"2"},{"M":"3"}],"checkValues":[{"yearlyInPercent": "5,55"}]}]',
            'numberOfPreviousCases' => '[{"values":[{"M":"2"},{"M":"3"}],"checkValues":[{"twoWithPreDiscount":1},{"oneWithPreDiscount":"1"},{"threeWithQuestion":"2"}]}]'
         ]
      ];

      $counter = 0;
      foreach ($list AS $entry) {
         $counter++;
         $tariff = new TariffPrivateLiability();
         $tariff->setName($entry['name']);
         $tariff->setDescription($entry['description']);
         $tariff->setCompany($entry['company']);
         $tariff->setTariffType($entry['tariffType']);
         $tariff->setNote($entry['note']);
         $tariff->setIsActive($entry['isActive']);
         $tariff->setAmountCoveredBodyInjury($entry['amountCoveredBodyInjury']);
         $tariff->setAmountCoveredMaterialDamage($entry['amountCoveredMaterialDamage']);
         $tariff->setAmountCoveredFinancialDamage($entry['amountCoveredFinancialDamage']);
         $tariff->setAmountCoveredJungKids($entry['amountCoveredJungKids']);
         $tariff->setIncludeInternship($entry['includeInternship']);
         $tariff->setBadDeptLoss($entry['badDeptLoss']);
         $tariff->setDataExchange($entry['dataExchange']);
         $tariff->setOwnResidentialHomeLivingIn($entry['ownResidentialHomeLivingIn']);
         $tariff->setOwnResidentialHomeRentalOthers($entry['ownResidentialHomeRentalOthers']);
         $tariff->setUndevelopedProperties($entry['undevelopedProperties']);
         $tariff->setRentedPropertiesAbroad($entry['rentedPropertiesAbroad']);
         $tariff->setWaterDamageLiabilityAboveGround($entry['waterDamageLiabilityAboveGround']);
         $tariff->setWaterDamageLiabilityUnderground($entry['waterDamageLiabilityUnderground']);
         $tariff->setTakeCareOfDogs($entry['takeCareOfDogs']);
         $tariff->setEbikes($entry['ebikes']);
         $tariff->setHorsesAndWagons($entry['horsesAndWagons']);
         $tariff->setGradualDamage($entry['gradualDamage']);
         $tariff->setActsOfKindness($entry['actsOfKindness']);
         $tariff->setDamageToMovables($entry['damageToMovables']);
         $tariff->setLossOfPrivateKeys($entry['lossOfPrivateKeys']);
         $tariff->setLossOfJobKeys($entry['lossOfJobKeys']);
         $tariff->setWithParentLivingInHouse($entry['withParentLivingInHouse']);
         $tariff->setVoluntaryWork($entry['voluntaryWork']);
         $tariff->setChildminderNonCommercial($entry['childminderNonCommercial']);
         $tariff->setRenovations($entry['renovations']);
         $tariff->setSurfboards($entry['surfboards']);
         $tariff->setConditionlUpdate($entry['conditionlUpdate']);
         $tariff->setTariffIndividualSpecials($entry['tariffIndividualSpecials']);
         $tariff->setRunTime($entry['runTime']);
         $tariff->setRetention($entry['retention']);
         $tariff->setMethodOfPayment($entry['methodOfPayment']);
         $tariff->setNumberOfPreviousCases($entry['numberOfPreviousCases']);
         $tariff->setUpdatedAt($this->faker->dateTimeBetween("-180 days", "now"));
         $tariff->setCreatedAt($this->faker->dateTimeBetween("-180 days", "now"));
         $this->addReference($entry['referenceName'], $tariff);
         $this->addReference('tariff_' . $counter, $tariff);
         $em->persist($tariff);
      }
   }

   private function addTargetGroups(EntityManager $em)
   {
      $list = [
         [
            'name' => 'Single',
            'referenceName' => 'single',
         ],
         [
            'name' => 'Single mit Kind',
            'referenceName' => 'singleChild'
         ],
         [
            'name' => 'Partner',
            'referenceName' => 'partner'
         ],
         [
            'name' => 'Familie',
            'referenceName' => 'family'
         ],
         [
            'name' => 'Familie mit Kind',
            'referenceName' => 'familyChild'
         ],
         [
            'name' => 'Senior',
            'referenceName' => 'senior'
         ]
      ];

      $counter = 0;
      foreach ($list AS $entry) {
         $counter++;
         $targetGroup = new TargetGroup();
         $targetGroup->setName($entry['name']);
         $targetGroup->setIdentifier($entry['referenceName']);
         $this->addReference('targetgroup_' . $entry['referenceName'], $targetGroup);
         $this->addReference('targetgroup_' . $counter, $targetGroup);
         $em->persist($targetGroup);
      }
   }

   private function addTariffTypes(EntityManager $em)
   {
      $list = [
         [
            'name' => 'Privathaftpflicht',
            'shortName' => 'PHV',
            'identifier' => 'pli'
         ], [
            'name' => 'Risikoleben',
            'shortName' => 'RLV',
            'identifier' => ''
         ], [
            'name' => 'Hausrat',
            'shortName' => 'HRV',
            'identifier' => ''
         ], [
            'name' => 'Unfall',
            'shortName' => 'UFV',
            'identifier' => ''
         ], [
            'name' => 'KFZ',
            'shortName' => 'KFZ',
            'identifier' => ''
         ], [
            'name' => 'Tierhaftpflicht',
            'shortName' => 'THV',
            'identifier' => ''
         ], [
            'name' => 'Rechtsschutz',
            'shortName' => 'RSV',
            'identifier' => ''
         ], [
            'name' => 'Kranken',
            'shortName' => 'PKV',
            'identifier' => ''
         ], [
            'name' => 'Zahnzusatz',
            'shortName' => 'ZZV',
            'identifier' => ''
         ], [
            'name' => 'Wohngebaeude',
            'shortName' => 'WGV',
            'identifier' => ''
         ]
      ];

      $counter = 0;
      foreach ($list AS $entry) {
         $counter++;
         $tariffType = new TariffType();
         $tariffType->setName($entry['name']);
         $tariffType->setShortName($entry['shortName']);
         $tariffType->setIdentifier($entry['identifier']);
         $this->addReference('tarifftype_' . strtolower($entry['shortName']), $tariffType);
         $this->addReference('tarifftype_' . $counter, $tariffType);
         $em->persist($tariffType);
      }
   }
}
