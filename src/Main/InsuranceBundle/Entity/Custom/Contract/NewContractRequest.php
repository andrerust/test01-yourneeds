<?php
namespace Main\InsuranceBundle\Entity\Custom\Company;

use Main\InsuranceBundle\Entity\Contract;
use Symfony\Component\Validator\Constraints as Assert;

class NewContractRequest
{
   /**
    * @var string
    */
   private $name;

   /**
    * @var string
    */
   private $publicName;

   /**
    * @var string
    */
   protected $department;

   /**
    * @var string
    */
   protected $contactPerson;

   /**
    * @var string
    */
   protected $email;

   /**
    * @var string
    */
   private $website;

   /**
    * @var string
    */
   protected $contactPhoneNumber;

   /**
    * @var string
    */
   private $contactFaxNumber;

   /**
    * @Assert\File(
    *      mimeTypes={ "image/png", "image/jpeg", "image/jpg", "image/gif" }, groups={"Media"}
    * )
    */
   protected $logo;

   /**
    * @var string
    */
   protected $note;

   /**
    * @var string
    */
   private $isActive;

   public static function factory(Contract $entity): self
   {
      //print_r($request->userTitle);die;
      $request = new self();
      $request->externalId = $entity->getExternalId();
      $request->status = $entity->getStatus();
      $request->dateRuntimeBegin = self::convertDateToString($entity->getDateRuntimeBegin());
      $request->dateRuntimeEnd = self::convertDateToString($entity->getDateRuntimeEnd());
      $request->dateProtectionBegin = self::convertDateToString($entity->getDateProtectionBegin());
      $request->dateProtectionEnd = self::convertDateToString($entity->getDateProtectionEnd());
      $request->tariffName = $entity->getTariffName();
      $request->paymentInterval = $entity->getPaymentInterval();
      $request->paymentFee = $entity->getPaymentFee();
      $request->runtime = $entity->getRuntime();
      $request->retention = $entity->getRetention();
      $request->insuranceNumber = $entity->getInsuranceNumber();
      $request->isActive = $entity->getIsActive();
      return $request;
   }

   /**
    * @return string
    */
   public function getName()
   {
      return $this->name;
   }

   /**
    * @param string $name
    */
   public function setName($name)
   {
      $this->name = $name;
   }

   /**
    * @return string
    */
   public function getPublicName()
   {
      return $this->publicName;
   }

   /**
    * @param string $publicName
    */
   public function setPublicName($publicName)
   {
      $this->publicName = $publicName;
   }

   /**
    * @return string
    */
   public function getDepartment()
   {
      return $this->department;
   }

   /**
    * @param string $department
    */
   public function setDepartment($department)
   {
      $this->department = $department;
   }

   /**
    * @return string
    */
   public function getContactPerson()
   {
      return $this->contactPerson;
   }

   /**
    * @param string $contactPerson
    */
   public function setContactPerson($contactPerson)
   {
      $this->contactPerson = $contactPerson;
   }

   /**
    * @return string
    */
   public function getEmail()
   {
      return $this->email;
   }

   /**
    * @param string $email
    */
   public function setEmail($email)
   {
      $this->email = $email;
   }

   /**
    * @return string
    */
   public function getWebsite()
   {
      return $this->website;
   }

   /**
    * @param string $website
    */
   public function setWebsite($website)
   {
      $this->website = $website;
   }

   /**
    * @return string
    */
   public function getContactPhoneNumber()
   {
      return $this->contactPhoneNumber;
   }

   /**
    * @param string $contactPhoneNumber
    */
   public function setContactPhoneNumber($contactPhoneNumber)
   {
      $this->contactPhoneNumber = $contactPhoneNumber;
   }

   /**
    * @return string
    */
   public function getContactFaxNumber()
   {
      return $this->contactFaxNumber;
   }

   /**
    * @param string $contactFaxNumber
    */
   public function setContactFaxNumber($contactFaxNumber)
   {
      $this->contactFaxNumber = $contactFaxNumber;
   }

   /**
    * @return string
    */
   public function getLogo()
   {
      return $this->logo;
   }

   /**
    * @param string $logo
    */
   public function setLogo($logo)
   {
      $this->logo = $logo;
   }

   /**
    * @return string
    */
   public function getNote()
   {
      return $this->note;
   }

   /**
    * @param string $note
    */
   public function setNote($note)
   {
      $this->note = $note;
   }

   /**
    * @return string
    */
   public function getIsActive()
   {
      return $this->isActive;
   }

   /**
    * @param string $isActive
    */
   public function setIsActive($isActive)
   {
      $this->isActive = $isActive;
   }

}