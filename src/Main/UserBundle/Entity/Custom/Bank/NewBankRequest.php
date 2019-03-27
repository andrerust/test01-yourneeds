<?php
namespace Main\UserBundle\Entity\Custom\Bank;

use Main\UserBundle\Entity\BankAccount;
use Symfony\Component\Validator\Constraints as Assert;

class NewBankRequest
{
   /**
    * @Assert\NotBlank()
    * @var string
    */
   private $iban;

   /**
    * @Assert\NotBlank()
    * @var string
    */
   private $bic;

   /**
    * @Assert\NotBlank()
    * @var string
    */
   private $bank;

   /**
    * @Assert\NotBlank()
    * @var string
    */
   private $city;

   /**
    * @Assert\NotBlank()
    * @var string
    */
   private $country;

   public static function factory(BankAccount $entity): self
   {
      $request = new self();
      $request->iban = $entity->getIban();
      $request->bic = $entity->getBic();
      $request->bank = $entity->getBank();
      return $request;
   }

   /**
    * @return string
    */
   public function getCity()
   {
      return $this->city;
   }

   /**
    * @param string $city
    */
   public function setCity($city)
   {
      $this->city = $city;
   }

   /**
    * @return string
    */
   public function getCountry()
   {
      return $this->country;
   }

   /**
    * @param string $country
    */
   public function setCountry($country)
   {
      $this->country = $country;
   }

   /**
    * @return string
    */
   public function getIban()
   {
      return $this->iban;
   }

   /**
    * @param string $iban
    */
   public function setIban($iban)
   {
      $this->iban = $iban;
   }

   /**
    * @return string
    */
   public function getBic()
   {
      return $this->bic;
   }

   /**
    * @param string $bic
    */
   public function setBic($bic)
   {
      $this->bic = $bic;
   }

   /**
    * @return string
    */
   public function getBank()
   {
      return $this->bank;
   }

   /**
    * @param string $bank
    */
   public function setBank($bank)
   {
      $this->bank = $bank;
   }

}