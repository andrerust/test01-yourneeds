<?php

namespace Main\InsuranceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Main\InsuranceBundle\Helper\Parser\Map\TariffMapStructurePli;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="Main\InsuranceBundle\Repository\TariffRepository")
 * @ORM\Table(name="tariff_private_liability")
 */
class TariffPrivateLiability extends Tariff
{
   /**
    * Deckungssumme Personenschaeden mind.
    * @ORM\Column(type="string", nullable=true)
    */
   private $amountCoveredBodyInjury;

   /**
    * //Sachschaeden
    * @ORM\Column(type="string", nullable=true)
    */
   private $amountCoveredMaterialDamage;

   /**
    * Deckungssummen Sachschaeden mind.
    * @Assert\Type(type="json_array")
    * @ORM\Column(type="string", nullable=true)
    */
   private $amountCoveredFinancialDamage;

   /**
    * Deckungssummen Vermoegenschaeden mind.
    * @ORM\Column(type="string", nullable=true)
    */
   private $amountCoveredJungKids;

   /**
    * Nicht deliktfaehige Kinder mind.
    * @Assert\Type(type="boolean")
    * @ORM\Column(type="string", nullable=true)
    */
   protected $includeInternship;

   /**
    * Forderungsausfalldeckung
    * @ORM\Column(type="string")
    */
   private $badDeptLoss;

   /**
    * Elektronischer Datenaustausch/Internetnutzung
    * @ORM\Column(type="string")
    */
   private $dataExchange;

   /**
    * Selbstbewohnte eigene oder gemietete Immobilien im Inland
    * @ORM\Column(type="string", nullable=true)
    */
   private $ownResidentialHomeLivingIn;

   /**
    * Vermietete Immobilien Inland (Einliegerwohnung, Ferienwohnung, einzelne Zimmer)
    * @ORM\Column(type="string", nullable=true)
    */
   private $ownResidentialHomeRentalOthers;

   /**
    * unbebaute Grundstuecke
    * @ORM\Column(type="string", nullable=true)
    */
   private $undevelopedProperties;

   /**
    * Vermietete Immobilien Ausland (Einliegerwohnung, Ferienwohnung, einzelne Zimmer)
    * @ORM\Column(type="string", nullable=true)
    */
   private $rentedPropertiesAbroad;

   /**
    * Vermietete Immobilien Ausland (Einliegerwohnung, Ferienwohnung, einzelne Zimmer)
    * @ORM\Column(type="string", nullable=true)
    */
   private $waterDamageLiabilityAboveGround;

   /**
    * Gewässerschadenhaftspflicht (Heizöltank Unterirdisch)
    * @ORM\Column(type="string", nullable=true)
    */
   private $waterDamageLiabilityUnderground;

   /**
    * Gelegentliches Hüten fremder Hunde
    * @ORM\Column(type="string", nullable=true)
    */
   private $takeCareOfDogs;

   /**
    * Fremde Pferde/Fuhrwerke
    * @ORM\Column(type="string", nullable=true)
    */
   private $ebikes;

   /**
    * Fremde Pferde/Fuhrwerke
    * @ORM\Column(type="string", nullable=true)
    */
   private $horsesAndWagons;

   /**
    * Allmählichkeitsschäden
    * @ORM\Column(type="string", nullable=true)
    */
   private $gradualDamage;

   /**
    * Gefälligkeitshandlungen
    * @ORM\Column(type="string", nullable=true)
    */
   private $actsOfKindness;

   /**
    * Beschädigung fremder beweglicher Sachen (gemietet/gepachtet/geliehen)
    * @ORM\Column(type="string", nullable=true)
    */
   private $damageToMovables;

   /**
    * Verlust privater fremder Schlüssel
    * @ORM\Column(type="string", nullable=true)
    */
   private $lossOfPrivateKeys;

   /**
    * Verlust beruflicher Schlüssel
    * @ORM\Column(type="string", nullable=true)
    */
   private $lossOfJobKeys;

   /**
    * Mit im Haus lebendes Elternteil
    * @ORM\Column(type="string", nullable=true)
    */
   private $withParentLivingInHouse;

   /**
    * Ehrenamtliche Tätigkeit
    * @ORM\Column(type="string", nullable=true)
    */
   private $voluntaryWork;

   /**
    * Tagesmutter/Betreuer (nicht gewerblich)
    * @ORM\Column(type="string", nullable=true)
    */
   private $childminderNonCommercial;

   /**
    * Rabattausgleich
    * @ORM\Column(type="string", nullable=true)
    */
   private $discountBalancing;

   /**
    * Umbaumaßnahmen
    * @ORM\Column(type="string", nullable=true)
    */
   private $renovations;

   /**
    * Surfbretter
    * @ORM\Column(type="string", nullable=true)
    */
   private $surfboards;

   /**
    * Bedingungsupdate
    * @ORM\Column(type="string", nullable=true)
    */
   private $conditionlUpdate;

   /**
    * Besonderheiten des Tarifes
    * @ORM\Column(type="string", nullable=true)
    */
   private $tariffIndividualSpecials;

   /**
    * Laufzeit
    * @ORM\Column(type="string", nullable=true)
    */
   private $runTime;

   /**
    * Selbstbeteiligung
    * @ORM\Column(type="string", nullable=true)
    */
   private $retention;

   /**
    * Anzahl der Vorschäden in den letzten 5 Jahren
    * @ORM\Column(type="string", nullable=true)
    */
   private $numberOfPreviousCases;


   public function getSelfEmpty()
   {
      $result = [];
      $result['id'] = 0;
      $result['companyId'] = 0;
      $result['tariffName'] = 'Beispielname';
      $result['runTime'] = '[{"values":[]}]';
      $result['retention'] = '[{"bool":0},{"values":[]}]';
      $result['methodOfPayment'] = '[{"values":[]},{"checkValues":[]}]';
      $result['numberOfPreviousCases'] = '[{"values":[]},{"checkValues":[]}]';
      $result['targetGroups'] = '';
      $result['note'] = 'Beispielnotiz';
      $result['amountCoveredBodyInjury'] = '[{"values":[]}]';
      $result['amountCoveredMaterialDamage'] = '[{"values":[]}]';
      $result['amountCoveredFinancialDamage'] = '[{"values":[]}]';
      $result['amountCoveredJungKids'] = '[{"values":[]}]';
      $result['includeInternship'] = '[{"bool":0},{"values":[]}]';
      $result['badDeptLoss'] = '[{"bool":0},{"values":[]}]';
      $result['dataExchange'] = '[{"bool":0},{"values":[]}]';
      $result['ownResidentialHomeLivingIn'] = '[{"bool":0},{"values":[]}]';
      $result['ownResidentialHomeRentalOthers'] = '[{"bool":0},{"values":[]}]';
      $result['undevelopedProperties'] = '[{"values":[]}]';
      $result['rentedPropertiesAbroad'] = '[{"bool":0},{"values":[]}]';
      $result['waterDamageLiabilityAboveGround'] = '[{"bool":0},{"values":[]}]';
      $result['waterDamageLiabilityUnderground'] = '[{"bool":0},{"values":[]}]';
      $result['takeCareOfDogs'] = '[{"bool":0}]';
      $result['ebikes'] = '[{"bool":1}]';
      $result['horsesAndWagons'] = '[{"bool":0}]';
      $result['gradualDamage'] = '[{"bool":0}]';
      $result['actsOfKindness'] = '[{"bool":0},{"values":[]}]';
      $result['damageToMovables'] = '[{"bool":0},{"values":[]}]';
      $result['lossOfPrivateKeys'] = '[{"bool":0},{"values":[]}]';
      $result['lossOfJobKeys'] = '[{"bool":0},{"values":[]}]';
      $result['withParentLivingInHouse'] = '[{"bool":0},{"values":[]}]';
      $result['voluntaryWork'] = '[{"bool":0},{"values":[]}]';
      $result['childminderNonCommercial'] = '[{"bool":0},{"values":[]}]';
      $result['discountBalancing'] = '[{"bool":0},{"values":[]}]';
      $result['renovations'] = '[{"bool":0},{"values":[]}]';
      $result['surfboards'] = '[{"bool":0}]';
      $result['conditionlUpdate'] = '[{"bool":0}]';
      $result['tariffIndividualSpecials'] = '[{"bool":0},{"values":[]}]';
      return $result;
   }

   public static function getMap()
   {
      $map = new TariffMapStructurePli();
      return $map->get();
   }

   /**
    * @return mixed
    */
   public function getDiscountBalancing()
   {
      return $this->discountBalancing;
   }

   /**
    * @param mixed $discountBalancing
    */
   public function setDiscountBalancing($discountBalancing)
   {
      $this->discountBalancing = $discountBalancing;
   }

   /**
    * @return mixed
    */
   public function getEbikes()
   {
      return $this->ebikes;
   }

   /**
    * @param mixed $ebikes
    */
   public function setEbikes($ebikes)
   {
      $this->ebikes = $ebikes;
   }

   /**
    * @return mixed
    */
   public function getRenovations()
   {
      return $this->renovations;
   }

   /**
    * @param mixed $renovations
    */
   public function setRenovations($renovations)
   {
      $this->renovations = $renovations;
   }

   /**
    * @return mixed
    */
   public function getRentedPropertiesAbroad()
   {
      return $this->rentedPropertiesAbroad;
   }

   /**
    * @param mixed $rentedPropertiesAbroad
    */
   public function setRentedPropertiesAbroad($rentedPropertiesAbroad)
   {
      $this->rentedPropertiesAbroad = $rentedPropertiesAbroad;
   }

   /**
    * @return mixed
    */
   public function getWaterDamageLiabilityAboveGround()
   {
      return $this->waterDamageLiabilityAboveGround;
   }

   /**
    * @param mixed $waterDamageLiabilityAboveGround
    */
   public function setWaterDamageLiabilityAboveGround($waterDamageLiabilityAboveGround)
   {
      $this->waterDamageLiabilityAboveGround = $waterDamageLiabilityAboveGround;
   }

   /**
    * @return mixed
    */
   public function getWaterDamageLiabilityUnderground()
   {
      return $this->waterDamageLiabilityUnderground;
   }

   /**
    * @param mixed $waterDamageLiabilityUnderground
    */
   public function setWaterDamageLiabilityUnderground($waterDamageLiabilityUnderground)
   {
      $this->waterDamageLiabilityUnderground = $waterDamageLiabilityUnderground;
   }

   /**
    * @return mixed
    */
   public function getTakeCareOfDogs()
   {
      return $this->takeCareOfDogs;
   }

   /**
    * @param mixed $takeCareOfDogs
    */
   public function setTakeCareOfDogs($takeCareOfDogs)
   {
      $this->takeCareOfDogs = $takeCareOfDogs;
   }

   /**
    * @return mixed
    */
   public function getHorsesAndWagons()
   {
      return $this->horsesAndWagons;
   }

   /**
    * @param mixed $horsesAndWagons
    */
   public function setHorsesAndWagons($horsesAndWagons)
   {
      $this->horsesAndWagons = $horsesAndWagons;
   }

   /**
    * @return mixed
    */
   public function getGradualDamage()
   {
      return $this->gradualDamage;
   }

   /**
    * @param mixed $gradualDamage
    */
   public function setGradualDamage($gradualDamage)
   {
      $this->gradualDamage = $gradualDamage;
   }

   /**
    * @return mixed
    */
   public function getActsOfKindness()
   {
      return $this->actsOfKindness;
   }

   /**
    * @param mixed $actsOfKindness
    */
   public function setActsOfKindness($actsOfKindness)
   {
      $this->actsOfKindness = $actsOfKindness;
   }

   /**
    * @return mixed
    */
   public function getDamageToMovables()
   {
      return $this->damageToMovables;
   }

   /**
    * @param mixed $damageToMovables
    */
   public function setDamageToMovables($damageToMovables)
   {
      $this->damageToMovables = $damageToMovables;
   }

   /**
    * @return mixed
    */
   public function getLossOfPrivateKeys()
   {
      return $this->lossOfPrivateKeys;
   }

   /**
    * @param mixed $lossOfPrivateKeys
    */
   public function setLossOfPrivateKeys($lossOfPrivateKeys)
   {
      $this->lossOfPrivateKeys = $lossOfPrivateKeys;
   }

   /**
    * @return mixed
    */
   public function getLossOfJobKeys()
   {
      return $this->lossOfJobKeys;
   }

   /**
    * @param mixed $lossOfJobKeys
    */
   public function setLossOfJobKeys($lossOfJobKeys)
   {
      $this->lossOfJobKeys = $lossOfJobKeys;
   }

   /**
    * @return mixed
    */
   public function getWithParentLivingInHouse()
   {
      return $this->withParentLivingInHouse;
   }

   /**
    * @param mixed $withParentLivingInHouse
    */
   public function setWithParentLivingInHouse($withParentLivingInHouse)
   {
      $this->withParentLivingInHouse = $withParentLivingInHouse;
   }

   /**
    * @return mixed
    */
   public function getVoluntaryWork()
   {
      return $this->voluntaryWork;
   }

   /**
    * @param mixed $voluntaryWork
    */
   public function setVoluntaryWork($voluntaryWork)
   {
      $this->voluntaryWork = $voluntaryWork;
   }

   /**
    * @return mixed
    */
   public function getChildminderNonCommercial()
   {
      return $this->childminderNonCommercial;
   }

   /**
    * @param mixed $childminderNonCommercial
    */
   public function setChildminderNonCommercial($childminderNonCommercial)
   {
      $this->childminderNonCommercial = $childminderNonCommercial;
   }

   /**
    * @return mixed
    */
   public function getSurfboards()
   {
      return $this->surfboards;
   }

   /**
    * @param mixed $surfboards
    */
   public function setSurfboards($surfboards)
   {
      $this->surfboards = $surfboards;
   }

   /**
    * @return mixed
    */
   public function getConditionlUpdate()
   {
      return $this->conditionlUpdate;
   }

   /**
    * @param mixed $conditionlUpdate
    */
   public function setConditionlUpdate($conditionlUpdate)
   {
      $this->conditionlUpdate = $conditionlUpdate;
   }

   /**
    * @return mixed
    */
   public function getTariffIndividualSpecials()
   {
      return $this->tariffIndividualSpecials;
   }

   /**
    * @param mixed $tariffIndividualSpecials
    */
   public function setTariffIndividualSpecials($tariffIndividualSpecials)
   {
      $this->tariffIndividualSpecials = $tariffIndividualSpecials;
   }

   /**
    * @return mixed
    */
   public function getRunTime()
   {
      return $this->runTime;
   }

   /**
    * @param mixed $runTime
    */
   public function setRunTime($runTime)
   {
      $this->runTime = $runTime;
   }

   /**
    * @return mixed
    */
   public function getRetention()
   {
      return $this->retention;
   }

   /**
    * @param mixed $retention
    */
   public function setRetention($retention)
   {
      $this->retention = $retention;
   }

   /**
    * @return mixed
    */
   public function getNumberOfPreviousCases()
   {
      return $this->numberOfPreviousCases;
   }

   /**
    * @param mixed $numberOfPreviousCases
    */
   public function setNumberOfPreviousCases($numberOfPreviousCases)
   {
      $this->numberOfPreviousCases = $numberOfPreviousCases;
   }

   /**
    * @return mixed
    */
   public function getBadDeptLoss()
   {
      return $this->badDeptLoss;
   }

   /**
    * @param mixed $badDeptLoss
    */
   public function setBadDeptLoss($badDeptLoss)
   {
      $this->badDeptLoss = $badDeptLoss;
   }

   /**
    * @return mixed
    */
   public function getOwnResidentialHomeLivingIn()
   {
      return $this->ownResidentialHomeLivingIn;
   }

   /**
    * @param mixed $ownResidentialHomeLivingIn
    */
   public function setOwnResidentialHomeLivingIn($ownResidentialHomeLivingIn)
   {
      $this->ownResidentialHomeLivingIn = $ownResidentialHomeLivingIn;
   }

   /**
    * @return mixed
    */
   public function getOwnResidentialHomeRentalOthers()
   {
      return $this->ownResidentialHomeRentalOthers;
   }

   /**
    * @param mixed $ownResidentialHomeRentalOthers
    */
   public function setOwnResidentialHomeRentalOthers($ownResidentialHomeRentalOthers)
   {
      $this->ownResidentialHomeRentalOthers = $ownResidentialHomeRentalOthers;
   }

   /**
    * @return mixed
    */
   public function getUndevelopedProperties()
   {
      return $this->undevelopedProperties;
   }

   /**
    * @param mixed $undevelopedProperties
    */
   public function setUndevelopedProperties($undevelopedProperties)
   {
      $this->undevelopedProperties = $undevelopedProperties;
   }

   /**
    * @return mixed
    */
   public function getDataExchange()
   {
      return $this->dataExchange;
   }

   /**
    * @param mixed $dataExchange
    */
   public function setDataExchange($dataExchange)
   {
      $this->dataExchange = $dataExchange;
   }


   /**
    * @return mixed
    */
   public function getAmountCoveredBodyInjury()
   {
      return $this->amountCoveredBodyInjury;
   }

   /**
    * @param mixed $amountCoveredBodyInjury
    */
   public function setAmountCoveredBodyInjury($amountCoveredBodyInjury)
   {
      $this->amountCoveredBodyInjury = $amountCoveredBodyInjury;
   }

   /**
    * @return mixed
    */
   public function getAmountCoveredMaterialDamage()
   {
      return $this->amountCoveredMaterialDamage;
   }

   /**
    * @param mixed $amountCoveredMaterialDamage
    */
   public function setAmountCoveredMaterialDamage($amountCoveredMaterialDamage)
   {
      $this->amountCoveredMaterialDamage = $amountCoveredMaterialDamage;
   }

   /**
    * @return mixed
    */
   public function getAmountCoveredFinancialDamage()
   {
      return $this->amountCoveredFinancialDamage;
   }

   /**
    * @param mixed $amountCoveredFinancialDamage
    */
   public function setAmountCoveredFinancialDamage($amountCoveredFinancialDamage)
   {
      $this->amountCoveredFinancialDamage = $amountCoveredFinancialDamage;
   }

   /**
    * @return mixed
    */
   public function getAmountCoveredJungKids()
   {
      return $this->amountCoveredJungKids;
   }

   /**
    * @param mixed $amountCoveredJungKids
    */
   public function setAmountCoveredJungKids($amountCoveredJungKids)
   {
      $this->amountCoveredJungKids = $amountCoveredJungKids;
   }

   /**
    * @return mixed
    */
   public function getIncludeInternship()
   {
      return $this->includeInternship;
   }

   /**
    * @param mixed $includeInternship
    */
   public function setIncludeInternship($includeInternship)
   {
      $this->includeInternship = $includeInternship;
   }

   public function getClassIdentity()
   {
      return 'insurance_private_liability';
   }


   public function setByJson($parsedJson = [])
   {
      $this->setName($parsedJson['tariffName']);
      $this->setDescription("later :)");
      $this->setNote($parsedJson['note']);
      $this->setAmountCoveredBodyInjury(json_encode($parsedJson['amountCoveredBodyInjury']));
      $this->setAmountCoveredMaterialDamage(json_encode($parsedJson['amountCoveredMaterialDamage']));
      $this->setAmountCoveredFinancialDamage(json_encode($parsedJson['amountCoveredFinancialDamage']));
      $this->setAmountCoveredJungKids(json_encode($parsedJson['amountCoveredJungKids']));
      $this->setIncludeInternship(json_encode($parsedJson['includeInternship']));
      $this->setBadDeptLoss(json_encode($parsedJson['badDeptLoss']));
      $this->setDataExchange(json_encode($parsedJson['dataExchange']));
      $this->setOwnResidentialHomeLivingIn(json_encode($parsedJson['ownResidentialHomeLivingIn']));
      $this->setOwnResidentialHomeRentalOthers(json_encode($parsedJson['ownResidentialHomeRentalOthers']));
      $this->setUndevelopedProperties(json_encode($parsedJson['undevelopedProperties']));
      $this->setRentedPropertiesAbroad(json_encode($parsedJson['rentedPropertiesAbroad']));
      $this->setWaterDamageLiabilityAboveGround(json_encode($parsedJson['waterDamageLiabilityAboveGround']));
      $this->setWaterDamageLiabilityUnderground(json_encode($parsedJson['waterDamageLiabilityUnderground']));
      $this->setTakeCareOfDogs(json_encode($parsedJson['takeCareOfDogs']));
      $this->setEbikes(json_encode($parsedJson['ebikes']));
      $this->setHorsesAndWagons(json_encode($parsedJson['horsesAndWagons']));
      $this->setGradualDamage(json_encode($parsedJson['gradualDamage']));
      $this->setActsOfKindness(json_encode($parsedJson['actsOfKindness']));
      $this->setDamageToMovables(json_encode($parsedJson['damageToMovables']));
      $this->setLossOfPrivateKeys(json_encode($parsedJson['lossOfPrivateKeys']));
      $this->setLossOfJobKeys(json_encode($parsedJson['lossOfJobKeys']));
      $this->setWithParentLivingInHouse(json_encode($parsedJson['withParentLivingInHouse']));
      $this->setVoluntaryWork(json_encode($parsedJson['voluntaryWork']));
      $this->setChildminderNonCommercial(json_encode($parsedJson['childminderNonCommercial']));
      $this->setDiscountBalancing(json_encode($parsedJson['discountBalancing']));
      $this->setRenovations(json_encode($parsedJson['renovations']));
      $this->setSurfboards(json_encode($parsedJson['surfboards']));
      $this->setConditionlUpdate(json_encode($parsedJson['conditionlUpdate']));
      $this->setTariffIndividualSpecials(json_encode($parsedJson['tariffIndividualSpecials']));
      $this->setRunTime(json_encode($parsedJson['runTime']));
      $this->setRetention(json_encode($parsedJson['retention']));
      $this->setMethodOfPayment(json_encode($parsedJson['methodOfPayment']));
      $this->setNumberOfPreviousCases(json_encode($parsedJson['numberOfPreviousCases']));
      $this->setIsActive($parsedJson['isActive']);
   }
}
