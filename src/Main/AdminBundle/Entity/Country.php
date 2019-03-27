<?php

namespace Main\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Main\AdminBundle\Repository\CountryRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="country")
 */
class Country
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
     * @ORM\OneToMany(targetEntity="Main\UserBundle\Entity\UserAddress", mappedBy="country", cascade={"persist", "remove"}, fetch="EXTRA_LAZY")
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $users;

   /**
    * @return mixed
    */
   public function getIsDefault()
   {
      return $this->isDefault;
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
    public function setUsers($users): void
    {
        $this->users = $users;
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
