<?php

namespace Main\InsuranceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="Main\InsuranceBundle\Repository\TargetGroupRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="target_group")
 */
class TargetGroup
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
    * @ORM\Column(type="text", nullable=false)
    */
   private $name;

   /**
    * @ORM\Column(type="text", nullable=false)
    */
   private $identifier;

   /**
    * @ORM\OneToMany(targetEntity="Main\InsuranceBundle\Entity\TariffRate", mappedBy="targetGroup", fetch="EXTRA_LAZY", cascade={"persist"})
    */
   private $tariffRates;

   /**
    * @ORM\OneToMany(targetEntity="Main\InsuranceBundle\Entity\TariffTargetGroup", mappedBy="targetGroup", fetch="EXTRA_LAZY", cascade={"persist"})
    */
   private $tariffs;

   public function addTariffTargetGroup(TariffTargetGroup $tariffTargetGroup)
   {
      $this->tariffs[] = $tariffTargetGroup;
   }

   public function __construct()
   {
   }

   /**
    * @return mixed
    */
   public function getIdentifier()
   {
      return $this->identifier;
   }

   /**
    * @param mixed $identifier
    */
   public function setIdentifier($identifier)
   {
      $this->identifier = $identifier;
   }

   /**
    * @return mixed
    */
   public function getTariffs()
   {
      return $this->tariffs;
   }

   /**
    * @param mixed $tariffs
    */
   public function setTariffs($tariffs)
   {
      $this->tariffs = $tariffs;
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

}
