<?php
namespace Main\UserBundle\Entity\Custom\User;

use Main\UserBundle\Entity\Title;
use Main\UserBundle\Entity\User;
use Symfony\Component\Validator\Constraints as Assert;

class NewUserRequest
{
   /**
    * @var string
    */
   private $gender;
   /**
    * @var string
    */
   private $userTitle;

   /**
    * @var string
    */
   private $birthdate;

   /**
    * @var string
    */
   private $familyStatus;

   /**
    * @var string
    */
   private $jobGroup;
   /**
    * @Assert\NotBlank()
    * @var string
    */
   private $firstName;

   /**
    * @Assert\NotBlank()
    * @var string
    */
   private $lastName;

   /**
    * @Assert\NotBlank()
    */
   private $email;

   /**
    * @Assert\NotBlank()
    * @var string
    */
   private $phoneNumber;

   /**
    * @Assert\NotBlank()
    */
   private $userName;

   /**
    * @var string
    */
   private $job;

   /**
    * @var string
    */
   private $employer;

   /**
    * @var string
    */
   private $password;

   /**
    * @Assert\Length(
    *      min = 3,
    *      minMessage = "Password too short!"
    * )
    * @var string
    */
   private $plainPassword;

   /**
    * @var string
    */
   protected $note;

   /**
    * @Assert\File(
    *      mimeTypes={ "image/png", "image/jpeg", "image/jpg", "image/gif" }, groups={"Media"}
    * )
    */
   private $profilePicture;
   /**
    * @var string
    */
   private $isActive = true;

   /**
    * @var string
    */
   private $isBlocked = false;

   /**
    * @var string
    */
   private $termsAccepted = false;

   /**
    * @var \DateTime
    */
   private $termsAcceptedUpdate;

   /**
    */
   private $receiveNewsletter = true;

   /**
    * @return string
    */
   public function getBirthdate()
   {
      return $this->birthdate;
   }

   /**
    * @param string $birthdate
    */
   public function setBirthdate($birthdate)
   {
      $this->birthdate = $birthdate;
   }

   /**
    * @var \DateTime
    */
   private $receiveNewsletterUpdate;

   public static function factory(User $entity): self
   {
      //print_r($request->userTitle);die;
      $request = new self();
      $request->gender = $entity->getGender();
      $request->firstName = $entity->getFirstName();
      $request->lastName = $entity->getLastName();
      $request->birthdate = $entity->getBirthdate();
      $request->profilePicture = $entity->getProfilePicture();
      $request->email = $entity->getEmail();
      $request->phoneNumber = $entity->getPhoneNumber();
      $request->userName = $entity->getUserName();
      $request->employer = $entity->getEmployer();
      $request->password = $entity->getPassword();
      $request->plainPassword = $entity->getPlainPassword();
      $request->note = $entity->getNote();
      $request->isActive = $entity->getIsActive();
      $request->isBlocked = $entity->getIsBlocked();
      $request->termsAccepted = $entity->getTermsAccepted();
      $request->termsAcceptedUpdate = $entity->getTermsAcceptedUpdate();
      $request->receiveNewsletter = $entity->getReceiveNewsletter();
      $request->receiveNewsletterUpdate = $entity->getReceiveNewsletterUpdate();

      if (!$entity->getUserTitle() == null) {
         $request->userTitle = $entity->getUserTitle()->getId();;
      }

      if (!$entity->getFamilyStatus() == null) {
         $request->familyStatus = $entity->getFamilyStatus()->getId();
      }
      if (!$entity->getJobGroup() == null) {
         $request->jobGroup = $entity->getJobGroup()->getId();
      }

      return $request;
   }

   /**
    * @return mixed
    */
   public function getProfilePicture()
   {
      return $this->profilePicture;
   }

   /**
    * @param mixed $profilePicture
    */
   public function setProfilePicture($profilePicture)
   {
      $this->profilePicture = $profilePicture;
   }

   /**
    * @return string
    */
   public function getFamilyStatus()
   {
      return $this->familyStatus;
   }

   /**
    * @param string $familyStatus
    */
   public function setFamilyStatus($familyStatus)
   {
      $this->familyStatus = $familyStatus;
   }

   /**
    * @return string
    */
   public function getJobGroup()
   {
      return $this->jobGroup;
   }

   /**
    * @param string $jobGroup
    */
   public function setJobGroup($jobGroup)
   {
      $this->jobGroup = $jobGroup;
   }

   /**
    * @return mixed
    */
   public function getReceiveNewsletter()
   {
      return $this->receiveNewsletter;
   }

   /**
    *
    * @param mixed $receiveNewsletter
    */
   public function setReceiveNewsletter($receiveNewsletter)
   {
      $this->receiveNewsletter = $receiveNewsletter;
   }

   /**
    * @return \DateTime
    */
   public function getTermsAcceptedUpdate()
   {
      return $this->termsAcceptedUpdate;
   }

   /**
    * @param \DateTime $termsAcceptedUpdate
    */
   public function setTermsAcceptedUpdate($termsAcceptedUpdate)
   {
      $this->termsAcceptedUpdate = $termsAcceptedUpdate;
   }

   /**
    * @return \DateTime
    */
   public function getReceiveNewsletterUpdate()
   {
      return $this->receiveNewsletterUpdate;
   }

   /**
    * @param \DateTime $receiveNewsletterUpdate
    */
   public function setReceiveNewsletterUpdate($receiveNewsletterUpdate)
   {
      $this->receiveNewsletterUpdate = $receiveNewsletterUpdate;
   }

   /**
    * @return mixed
    */
   public function getGender()
   {
      return $this->gender;
   }

   /**
    * @param mixed $gender
    */
   public function setGender($gender)
   {
      $this->gender = $gender;
   }

   /**
    * @return mixed
    */
   public function getTermsAccepted()
   {
      return $this->termsAccepted;
   }

   /**
    * @param mixed $termsAccepted
    */
   public function setTermsAccepted($termsAccepted)
   {
      $this->termsAccepted = $termsAccepted;
   }

   /**
    * @return mixed
    */
   public function getUserTitle()
   {
      return $this->userTitle;
   }

   /**
    * @param mixed $userTitle
    */
   public function setUserTitle($userTitle)
   {
      $this->userTitle = $userTitle;
   }

   /**
    * @return mixed
    */
   public function getEmail()
   {
      return $this->email;
   }

   /**
    * @param mixed $email
    */
   public function setEmail($email)
   {
      $this->email = $email;
   }

   /**
    * @return mixed
    */
   public function getUserName()
   {
      return $this->userName;
   }

   /**
    * @param mixed $userName
    */
   public function setUserName($userName)
   {
      $this->userName = $userName;
   }

   /**
    * @return mixed
    */
   public function getPhoneNumber()
   {
      return $this->phoneNumber;
   }

   /**
    * @param mixed $phoneNumber
    */
   public function setPhoneNumber($phoneNumber)
   {
      $this->phoneNumber = $phoneNumber;
   }

   /**
    * @return mixed
    */
   public function getFirstName()
   {
      return $this->firstName;
   }

   /**
    * @param mixed $firstName
    */
   public function setFirstName($firstName)
   {
      $this->firstName = $firstName;
   }

   /**
    * @return mixed
    */
   public function getLastName()
   {
      return $this->lastName;
   }

   /**
    * @param mixed $lastName
    */
   public function setLastName($lastName)
   {
      $this->lastName = $lastName;
   }

   /**
    * @return mixed
    */
   public function getJob()
   {
      return $this->job;
   }

   /**
    * @param mixed $job
    */
   public function setJob($job)
   {
      $this->job = $job;
   }

   /**
    * @return mixed
    */
   public function getEmployer()
   {
      return $this->employer;
   }

   /**
    * @param mixed $employer
    */
   public function setEmployer($employer)
   {
      $this->employer = $employer;
   }

   /**
    * @return mixed
    */
   public function getPassword()
   {
      return $this->password;
   }

   /**
    * @param mixed $password
    */
   public function setPassword($password)
   {
      $this->password = $password;
   }

   /**
    * @return mixed
    */
   public function getPlainPassword()
   {
      return $this->plainPassword;
   }

   /**
    * @param mixed $plainPassword
    */
   public function setPlainPassword($plainPassword)
   {
      $this->plainPassword = $plainPassword;
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
    * @return mixed
    */
   public function getIsBlocked()
   {
      return $this->isBlocked;
   }

   /**
    * @param mixed $isBlocked
    */
   public function setIsBlocked($isBlocked)
   {
      $this->isBlocked = $isBlocked;
   }
}