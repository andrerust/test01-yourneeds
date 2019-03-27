<?php

namespace Main\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="Main\UserBundle\Repository\UserAchievementRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="user_achievement")
 */
class UserAchievement
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
    * @ORM\ManyToOne(targetEntity="Main\UserBundle\Entity\User", inversedBy="achievements")
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    */
   private $user;

   /**
    * @ORM\ManyToOne(targetEntity="Main\UserBundle\Entity\Achievement", inversedBy="users")
    * @ORM\JoinColumn(name="achievement_id", referencedColumnName="id")
    */
   private $achievement;

   /**
    * @ORM\Column(type="datetime")
    *
    * @var \DateTime
    */
   private $wonAt;

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
    * @return mixed
    */
   public function getAchievement()
   {
      return $this->achievement;
   }

   /**
    * @param mixed $achievement
    */
   public function setAchievement($achievement)
   {
      $this->achievement = $achievement;
   }


   /**
    * @return \DateTime
    */
   public function getWonAt()
   {
      return $this->wonAt;
   }

   /**
    * @param \DateTime $wonAt
    */
   public function setWonAt($wonAt)
   {
      $this->wonAt = $wonAt;
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
