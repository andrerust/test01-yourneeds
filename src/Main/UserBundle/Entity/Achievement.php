<?php

namespace Main\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Main\UserBundle\Repository\AchievementRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="achievement")
 */
class Achievement
{
   /**
    * @var int
    *
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
   private $id;

   /**
    * @Assert\Type(type="string")
    * @Assert\NotBlank
    * @ORM\Column(type="string")
    */
   private $title;

   /**
    * @ORM\Column(type="string", length=128)
    */
   protected $achievementType;

   /**
    * @ORM\Column(type="string", length=255)
    * @Assert\File(
    *      mimeTypes={ "image/png", "image/jpeg", "image/jpg", "image/gif" }
    * )
    */
   private $mainImage;

   /**
    * @Assert\Type(type="text")
    * @Assert\NotBlank
    * @ORM\Column(name="main_text", type="text", length=4090)
    */
   protected $mainText;

   /**
    * @ORM\Column(type="boolean")
    */
   private $isActive = true;

   /**
    * @Assert\Date
    * @Assert\NotNull
    * @ORM\Column(type="datetime")
    *
    * @var \DateTime
    */
   private $activeFrom;

   /**
    * @Assert\Date
    * @Assert\NotNull
    * @ORM\Column(type="datetime")
    *
    * @var \DateTime
    */
   private $activeUntil;


   /**
    * @ORM\OneToMany(targetEntity="Main\UserBundle\Entity\UserAchievement", mappedBy="achievement")
    */
   private $users;

   public function __construct()
   {
      $this->users = new ArrayCollection();
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

   public function setId($id)
   {
      $this->id = $id;
   }

   /**
    * @return mixed
    */
   public function getTitle()
   {
      return $this->title;
   }

   /**
    * @param mixed $title
    */
   public function setTitle($title)
   {
      $this->title = $title;
   }

   /**
    * @return mixed
    */
   public function getAchievementType()
   {
      return $this->achievementType;
   }

   /**
    * @param mixed $achievementType
    */
   public function setAchievementType($achievementType)
   {
      $this->achievementType = $achievementType;
   }

   /**
    * @return mixed
    */
   public function getMainImage()
   {
      return $this->mainImage;
   }

   /**
    * @param mixed $mainImage
    */
   public function setMainImage($mainImage)
   {
      $this->mainImage = $mainImage;
   }

   /**
    * @return mixed
    */
   public function getMainText()
   {
      return $this->mainText;
   }

   /**
    * @param mixed $mainText
    */
   public function setMainText($mainText)
   {
      $this->mainText = $mainText;
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
   public function getActiveFrom()
   {
      return $this->activeFrom;
   }

   /**
    * @param \DateTime $activeFrom
    */
   public function setActiveFrom($activeFrom)
   {
      $this->activeFrom = $activeFrom;
   }

   /**
    * @return \DateTime
    */
   public function getActiveUntil()
   {
      return $this->activeUntil;
   }

   /**
    * @param \DateTime $activeUntil
    */
   public function setActiveUntil($activeUntil)
   {
      $this->activeUntil = $activeUntil;
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
