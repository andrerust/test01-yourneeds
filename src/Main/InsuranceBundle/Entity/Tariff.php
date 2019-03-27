<?php

namespace Main\InsuranceBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\DiscriminatorColumn;
use Doctrine\ORM\Mapping\DiscriminatorMap;
use Doctrine\ORM\Mapping\Index;
use Doctrine\ORM\Mapping\InheritanceType;
use Main\InsuranceBundle\Helper\Parser\Map\TariffMapStructure;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="Main\InsuranceBundle\Repository\TariffRepository")
 * @DiscriminatorColumn(name="type", type="string")
 * @DiscriminatorMap({"pli" = "TariffPrivateLiability"})
 * //DiscriminatorMap({"pli" = "private liability", "hoh" = "household", "res" = "residential", "acc" = "accident", "car" = "car", "pet" = "pet owner liability", "hea" = "health"})
 * @InheritanceType("JOINED") // InheritanceType("SINGLE_TABLE")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="tariff", indexes={@Index(name="search_id_title", columns={"name"})})
 */
abstract class Tariff
{
   /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
   private $id;

   /**
    * @Assert\Type(type="text")
    * @Assert\NotBlank()
    * @ORM\Column(type="string", unique=false, nullable=false)
    */
   private $name;

   /**
    * @Assert\Type(type="text")
    * @Assert\NotBlank
    * @ORM\Column(name="description", type="text", length=4096)
    */
   protected $description;

   /**
    * @ORM\Column(type="string", unique=true)
    * @Gedmo\Slug(fields={"name"})
    */
   private $slug;

   /**
    * @Assert\Type(type="text")
    * @ORM\Column(name="note", type="text", length=4090, nullable=true)
    */
   protected $note;

   /**
    * Zahlungsweise
    * @ORM\Column(type="string", nullable=true)
    */
   private $methodOfPayment;

   /**
    * @ORM\Column(type="boolean")
    */
   private $isActive = true;

   /**
    * @Assert\Date
    * @Assert\NotNull
    * @ORM\Column(name="updated_at", type="datetime")
    *
    * @var \DateTime
    */
   private $updatedAt;

   /**
    * @Assert\Date
    * @Assert\NotNull
    * @ORM\Column(type="datetime")
    *
    * @var \DateTime
    */
   private $createdAt;


   /**
    * @ORM\OneToMany(targetEntity="Main\InsuranceBundle\Entity\TariffRate", mappedBy="tariff", fetch="EXTRA_LAZY", cascade={"persist"})
    */
   private $tariffRates;

   /**
    * @ORM\ManyToOne(targetEntity="Main\InsuranceBundle\Entity\TariffType", inversedBy="tariffs")
    * @ORM\JoinColumn(name="tariff_type_id", referencedColumnName="id")
    */
   private $tariffType;

   /**
    * @ORM\ManyToOne(targetEntity="Main\InsuranceBundle\Entity\Company", inversedBy="tariffs")
    * @ORM\JoinColumn(name="company_id", referencedColumnName="id")
    */
   private $company;

   /**
    * @ORM\OneToMany(targetEntity="Main\InsuranceBundle\Entity\TariffTargetGroup", mappedBy="tariff", fetch="EXTRA_LAZY", cascade={"persist"})
    */
   private $targetGroups;

   public function deleteTariffTargetGroups($targetGroups, $em)
   {
      if (count($targetGroups) > 0) {
         foreach ($this->targetGroups AS $tmpTargetGroup) {
            $em->remove($tmpTargetGroup);
            $em->flush();
         }
      }
   }

   public function addTariffTargetGroup(TargetGroup $targetGroup, $em)
   {
      $list = [];
      if (count($this->targetGroups) > 0) {
         foreach ($this->targetGroups AS $tmpTargetGroup) {
            $list[] = $tmpTargetGroup->getTargetGroup()->getId();
         }
      }
      if (!in_array($targetGroup->getId(), $list)) {
         $tariffTargetGroup = new TariffTargetGroup();
         $tariffTargetGroup->setTariff($this);
         $tariffTargetGroup->setTargetGroup($targetGroup);
         $targetGroup->addTariffTargetGroup($tariffTargetGroup); // synchronously updating inverse side
         $this->targetGroups[] = $tariffTargetGroup;
      }
   }

   /**
    * @return mixed
    */
   public function getMethodOfPayment()
   {
      return $this->methodOfPayment;
   }

   /**
    * @param mixed $methodOfPayment
    */
   public function setMethodOfPayment($methodOfPayment)
   {
      $this->methodOfPayment = $methodOfPayment;
   }

   /**
    * @return mixed
    */
   public function getTargetGroups()
   {
      return $this->targetGroups;
   }

   /**
    * @param mixed $targetGroups
    */
   public function setTargetGroups($targetGroups)
   {
      $this->targetGroups = $targetGroups;
   }

   public static function getReadabilityMap()
   {
      $readabilityMap = new TariffMapStructure();
      return $readabilityMap->getReadability();
   }

   /**
    * @return mixed
    */
   public function getTariffType()
   {
      return $this->tariffType;
   }

   /**
    * @param mixed $tariffType
    */
   public function setTariffType($tariffType)
   {
      $this->tariffType = $tariffType;
   }


   /**
    * @return mixed
    */
   public function getCompany()
   {
      return $this->company;
   }

   /**
    * @param mixed $company
    */
   public function setCompany($company)
   {
      $this->company = $company;
   }

   /**
    * @return mixed
    */
   public function getNote()
   {
      return $this->note;
   }

   /**
    * @param mixed $note
    */
   public function setNote($note)
   {
      $this->note = $note;
   }

   public function __construct()
   {
      $this->insuranceTariffs = new ArrayCollection();
   }

   /**
    * @return mixed
    */
   public function getName()
   {
      return $this->name;
   }

   /**
    * @param mixed $name
    */
   public function setName($name)
   {
      $this->name = $name;
   }

   /**
    * @return mixed
    */
   public function getTariffRates()
   {
      return $this->tariffRates;
   }

   /**
    * @param mixed $tariffRates
    */
   public function setTariffRates($tariffRates)
   {
      $this->tariffRates = $tariffRates;
   }

   /**
    * @return mixed
    */
   public function getInsuranceTariffs()
   {
      return $this->insuranceTariffs;
   }

   /**
    * @param mixed $insuranceTariffs
    */
   public function setInsuranceTariffs($insuranceTariffs)
   {
      $this->insuranceTariffs = $insuranceTariffs;
   }

   /**
    * @return mixed
    */
   public function getDescription()
   {
      return $this->description;
   }

   /**
    * @param mixed $description
    */
   public function setDescription($description)
   {
      $this->description = $description;
   }

   /**
    * @return mixed
    */
   public function getId()
   {
      return $this->id;
   }

   /**
    * @param mixed $id
    */
   public function setId($id)
   {
      $this->id = $id;
   }

   /**
    * @return mixed
    */
   public function getSlug()
   {
      return $this->slug;
   }

   /**
    * @param mixed $slug
    */
   public function setSlug($slug)
   {
      $this->slug = $slug;
   }

   /**
    * @param \DateTime $updatedAt
    */
   public function setUpdatedAt($updatedAt)
   {
      $this->updatedAt = $updatedAt;
   }

   /**
    * @param \DateTime $createdAt
    */
   public function setCreatedAt($createdAt)
   {
      $this->createdAt = $createdAt;
   }

   /**
    * @return \DateTime
    */
   public function getUpdatedAt()
   {
      return $this->updatedAt;
   }

   /**
    * @return \DateTime
    */
   public function getCreatedAt()
   {
      return $this->createdAt;
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
