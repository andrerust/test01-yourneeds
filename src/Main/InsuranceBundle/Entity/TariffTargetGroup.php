<?php

namespace Main\InsuranceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="Main\InsuranceBundle\Repository\TariffTargetGroupRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="tariff_target_group")
 */
class TariffTargetGroup
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
    * @ORM\ManyToOne(targetEntity="Main\InsuranceBundle\Entity\Tariff", inversedBy="targetGroups")
    * @ORM\JoinColumn(name="tariff_id", referencedColumnName="id")
    */
   private $tariff;

   /**
    * @ORM\ManyToOne(targetEntity="Main\InsuranceBundle\Entity\TargetGroup", inversedBy="tariffs")
    * @ORM\JoinColumn(name="target_group_id", referencedColumnName="id")
    */
   private $targetGroup;

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
