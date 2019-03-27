<?php

namespace Main\UserBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

class SecurityUser implements UserInterface, \Serializable
{
   private $username;

   private $password;

   private $email;

   public function __construct(User $user)
   {
      $this->username = $user->getId();
      $this->password = $user->getPassword();
      $this->email = $user->getEmail();
   }

   public function getEmail()
   {
      return $this->email;
   }

   public function setEmail($email)
   {
      $this->email = $email;
   }

   public function getUsername()
   {
      return $this->username;
   }

   public function getSalt()
   {
      return null;
   }

   public function getPassword()
   {
      return $this->password;
   }

   public function getRoles()
   {
      return array('ROLE_USER');
   }

   public function eraseCredentials()
   {
   }

   /** @see \Serializable::serialize() */
   public function serialize()
   {
      return serialize(array(
         $this->id,
         $this->username,
         $this->password,
         // see section on salt below
         // $this->salt,
      ));
   }

   /** @see \Serializable::unserialize() */
   public function unserialize($serialized)
   {
      list (
         $this->id,
         $this->username,
         $this->password,
         // see section on salt below
         // $this->salt
         ) = unserialize($serialized);
   }
}