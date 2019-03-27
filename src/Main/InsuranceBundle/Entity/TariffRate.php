<?php

namespace Main\InsuranceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Main\InsuranceBundle\Helper\Parser\Map\TariffMapStructureRate;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="Main\InsuranceBundle\Repository\TariffRateRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="tariff_rate")
 */
class TariffRate
{
   /**
    * @var integer $id
    *
    * @ORM\Column(name="id", type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
   private $id;

   /**
    * // million
    * @ORM\Column(type="string", length=8, nullable=true)
    */
   protected $amountOfCoverage;

   /**
    * @ORM\Column(type="integer", nullable=true)
    */
   private $ageFrom = 0;

   /**
    * @ORM\Column(type="integer", nullable=true)
    */
   private $ageUntil = 200;

   /**
    * @ORM\ManyToOne(targetEntity="Main\InsuranceBundle\Entity\TargetGroup", inversedBy="tariffRates", cascade={"persist"}, fetch="EXTRA_LAZY")
    * @ORM\OrderBy({"id" = "DESC"})
    */
   private $targetGroup;

   /**
    * @Assert\Type(type="string")
    * @ORM\Column(name="rate", type="decimal", length=8, nullable=true)
    */
   protected $rate = 0;

   /**
    * @Assert\Type(type="string")
    * @ORM\Column(name="rate_interval", type="string", length=2, nullable=true)
    */
   protected $rateInterval = 12;

   /**
    * @ORM\Column(type="integer", nullable=true)
    */
   protected $retentionValue = 0;

   /**
    * @ORM\Column(type="integer", nullable=true)
    */
   protected $discountValue = 0;

   /**
    * @ORM\Column(type="text", nullable=true)
    */
   protected $discountName;

   /**
    * @ORM\Column(type="boolean")
    */
   private $isActive = true;

   /**
    * @ORM\OneToMany(targetEntity="Main\InsuranceBundle\Entity\UserTariff", mappedBy="tariffRate", fetch="EXTRA_LAZY", cascade={"persist"})
    */
   private $users;

   /**
    * @ORM\Column(type="datetime")
    *
    * @var \DateTime
    */
   private $updatedAt;

   /**
    * @ORM\Column(type="datetime")
    *
    * @var \DateTime
    */
   private $createdAt;

   /**
    * @ORM\ManyToOne(targetEntity="Main\InsuranceBundle\Entity\Tariff", inversedBy="tariffRates", fetch="EXTRA_LAZY")
    * @ORM\JoinColumn(name="tariff_id", referencedColumnName="id")
    */
   private $tariff;


   public function __construct()
   {
   }

   public static function getMap()
   {
      $map = new TariffMapStructureRate();
      $structure = $map->get();
      //print_r($map);die;
      return $structure;
   }

   public static function getSpecialParamsList()
   {
      $amountParamNameList = [
         'amountOfCoverage'
      ];
      return $amountParamNameList;
   }

   /**
    * @return mixed
    */
   public function getRetentionValue()
   {
      return $this->retentionValue;
   }

   /**
    * @param mixed $retentionValue
    */
   public function setRetentionValue($retentionValue)
   {
      $this->retentionValue = $retentionValue;
   }

   /**
    * @return mixed
    */
   public function getDiscountValue()
   {
      return $this->discountValue;
   }

   /**
    * @param mixed $discountValue
    */
   public function setDiscountValue($discountValue)
   {
      $this->discountValue = $discountValue;
   }

   /**
    * @return mixed
    */
   public function getTariff()
   {
      return $this->tariff;
   }

   /**
    * @param mixed $tariff
    */
   public function setTariff($tariff)
   {
      $this->tariff = $tariff;
   }


   /**
    * @return mixed
    */
   public function getTargetGroup()
   {
      return $this->targetGroup;
   }

   /**
    * @param mixed $targetGroup
    */
   public function setTargetGroup($targetGroup)
   {
      $this->targetGroup = $targetGroup;
   }

   /**
    * @return mixed
    */
   public function getRate()
   {
      return $this->rate;
   }

   /**
    * @param mixed $rate
    */
   public function setRate($rate)
   {
      $this->rate = $rate;
   }

   /**
    * @return mixed
    */
   public function getRateInterval()
   {
      return $this->rateInterval;
   }

   /**
    * @return mixed
    */
   public function getAgeFrom()
   {
      return $this->ageFrom;
   }

   /**
    * @param mixed $ageFrom
    */
   public function setAgeFrom($ageFrom)
   {
      $this->ageFrom = $ageFrom;
   }

   /**
    * @return mixed
    */
   public function getAgeUntil()
   {
      return $this->ageUntil;
   }

   /**
    * @param mixed $ageUntil
    */
   public function setAgeUntil($ageUntil)
   {
      $this->ageUntil = $ageUntil;
   }

   /**
    * @param mixed $rateInterval
    */
   public function setRateInterval($rateInterval)
   {
      $this->rateInterval = $rateInterval;
   }

   /**
    * @return mixed
    */
   public function getDiscountName()
   {
      return $this->discountName;
   }

   /**
    * @param mixed $discountName
    */
   public function setDiscountName($discountName)
   {
      $this->discountName = $discountName;
   }

   /**
    * @return mixed
    */
   public function getAmountOfCoverage()
   {
      return $this->amountOfCoverage;
   }

   /**
    * @param mixed $amountOfCoverage
    */
   public function setAmountOfCoverage($amountOfCoverage)
   {
      $this->amountOfCoverage = $amountOfCoverage;
   }


   /**
    * @return mixed
    */
   public function getUsers()
   {
      return $this->users;
   }

   /**
    * @param mixed $users
    */
   public function setUsers($users)
   {
      $this->users = $users;
   }

   /**
    * @return int
    */
   public function getId()
   {
      return $this->id;
   }

   /**
    * @param int $id
    */
   public function setId($id)
   {
      $this->id = $id;
   }

   /**
    * @return mixed
    */
   public function getIsActive()
   {
      return $this->isActive;
   }

   /**
    * @param mixed $isActive
    */
   public function setIsActive($isActive)
   {
      $this->isActive = $isActive;
   }

   /**
    * @return \DateTime
    */
   public function getUpdatedAt()
   {
      return $this->updatedAt;
   }

   /**
    * @param \DateTime $updatedAt
    */
   public function setUpdatedAt($updatedAt)
   {
      $this->updatedAt = $updatedAt;
   }

   /**
    * @return \DateTime
    */
   public function getCreatedAt()
   {
      return $this->createdAt;
   }

   /**
    * @param \DateTime $createdAt
    */
   public function setCreatedAt($createdAt)
   {
      $this->createdAt = $createdAt;
   }

   /**
    * Gets triggered only on insert
    * @ORM\PrePersist
    */
   public function onPrePersist()
   {
      $this->createdAt = new \DateTime("now");
      $this->updatedAt = new \DateTime("now");
   }

   /**
    * Gets triggered every time on update
    * @ORM\PreUpdate
    */
   public function onPreUpdate()
   {
      $this->updatedAt = new \DateTime("now");
   }

}
