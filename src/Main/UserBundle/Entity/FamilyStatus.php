<?php

namespace Main\UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Main\UserBundle\Repository\FamilyStatusRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="family_status")
 */
class FamilyStatus
{
   /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
   private $id;

   /**
    * @ORM\Column(type="string")
    */
   private $name;

   /**
    * @ORM\Column(type="boolean")
    */
   private $isActive = true;

   /**
    * @ORM\Column(type="boolean")
    */
   private $isDefault = false;

   /**
    * @ORM\OneToMany(targetEntity="Main\UserBundle\Entity\User", mappedBy="familyStatus")
    */
   private $users;


   public function __construct()
   {
      $this->users = new ArrayCollection();
   }

   /**
    * @return mixed
    */
   public function getIsDefault()
   {
      return $this->isDefault;
   }

   /**
    * @param mixed $isDefault
    */
   public function setIsDefault($isDefault)
   {
      $this->isDefault = $isDefault;
   }

   public function getId()
   {
      return $this->id;
   }

   public function getName()
   {
      return $this->name;
   }

   public function setName($name)
   {
      $this->name = $name;
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
   }

   /**
    * Gets triggered every time on update
    * @ORM\PreUpdate
    */
   public function onPreUpdate()
   {
   }


   public function __toString()
   {
      return $this->getName();
   }
}
