<?php

namespace Main\UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Main\UserBundle\Repository\TitleRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="user_title")
 */
class Title
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
    * @ORM\OneToMany(targetEntity="Main\UserBundle\Entity\User", mappedBy="userTitle")
    */
   private $users;

   /*
 * constructor
 */
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

   public function getId()
   {
      return $this->id;
   }

   /**
    * Gets triggered only on insert
    * @ORM\PrePersist
    */
   public function onPrePersist()
   {
      $this->createdAt = new \DateTime("now");
   }

   /**
    * Gets triggered every time on update
    * @ORM\PreUpdate
    */
   public function onPreUpdate()
   {
      $this->updatedAt = new \DateTime("now");
   }

   public function __toString()
   {
      return $this->getName();
   }
}
