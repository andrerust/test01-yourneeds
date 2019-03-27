<?php

namespace Main\InsuranceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="Main\InsuranceBundle\Repository\TariffRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="user_tariff")
 */
class UserTariff
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
    * @ORM\ManyToOne(targetEntity="Main\UserBundle\Entity\User", inversedBy="structures")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
    */
   private $user;

   /**
    * @ORM\ManyToOne(targetEntity="Main\InsuranceBundle\Entity\TariffRate", inversedBy="users")
    * @ORM\JoinColumn(name="tariff_rate_id", referencedColumnName="id")
    */
   private $tariffRate;

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
    * @return mixed
    */
   public function getTariffRate()
   {
      return $this->tariffRate;
   }

   /**
    * @param mixed $tariffRates
    */
   public function setTariffRate($tariffRate)
   {
      $this->tariffRate = $tariffRate;
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
   public function getUser()
   {
      return $this->user;
   }

   /**
    * @param mixed $user
    */
   public function setUser($user)
   {
      $this->user = $user;
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
