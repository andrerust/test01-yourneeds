<?php
namespace Main\UserBundle\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;
use Faker\Factory;
use Main\UserBundle\Entity\Achievement;
use Main\UserBundle\Entity\Activity;
use Main\UserBundle\Entity\Address;
use Main\UserBundle\Entity\BankAccount;
use Main\UserBundle\Entity\User;
use Main\UserBundle\Entity\UserAchievement;
use Main\UserBundle\Entity\UserActivity;

class UserFixtures extends Fixture
{
   private $faker;

   public function load(ObjectManager $manager)
   {
      $this->faker = Factory::create();
      $this->addUser($manager);
      $this->addAddress($manager);
      $this->addBankAccount($manager);
      $this->addAchievement($manager);
      $this->addAchievementToUser($manager);
      $this->addActivity($manager);
      $this->addActivityToUser($manager);
      $manager->flush();
   }


   private function addActivityToUser(EntityManager $em)
   {
      for ($i = 1; $i <= 200; $i++) {
         $userActivity = new UserActivity();
         $userActivity->setUser($this->getReference('user_' . random_int(1, 5)));
         $userActivity->setContext(random_int(1, 3));
         $userActivity->setActivity($this->getReference('activity_' . random_int(1, 10)));
         $this->addReference('useractivity_' . $i, $userActivity);
         $em->persist($userActivity);
      };

   }

   private function addActivity(EntityManager $em)
   {
      for ($i = 1; $i <= 10; $i++) {
         $activity = new Activity();
         $activity->setShortDescription('activity_' . $i);
         $activity->setContext('context activity_' . $i);
         $activity->setCreatedAt($this->faker->dateTimeBetween("-180 days", "now"));
         $this->addReference('activity_' . $i, $activity);
         $em->persist($activity);
      };
   }

   private function addAchievementToUser(EntityManager $em)
   {
      for ($i = 1; $i <= 30; $i++) {
         $userAchievement = new UserAchievement();
         $userAchievement->setUser($this->getReference('user_' . random_int(1, 5)));
         $userAchievement->setAchievement($this->getReference('achievement_' . random_int(1, 10)));
         $userAchievement->setWonAt($this->faker->dateTimeBetween("-180 days", "now"));
         $this->addReference('userachievement_' . $i, $userAchievement);
         $em->persist($userAchievement);
      };
   }

   private function addAchievement(EntityManager $em)
   {
      for ($i = 1; $i <= 10; $i++) {
         $achievement = new Achievement();
         $achievement->setTitle($this->faker->word);
         $achievement->setAchievementType($this->faker->word);
         $achievement->setMainImage('element' . $this->faker->numberBetween(1, 10) . '.png');
         $achievement->setMainText($this->faker->paragraph);
         $achievement->setIsActive(1);
         $achievement->setActiveFrom($this->faker->dateTimeBetween("-180 days", "now"));
         $achievement->setActiveUntil($this->faker->dateTimeBetween("-30 days", "now"));
         $this->addReference('achievement_' . $i, $achievement);
         $em->persist($achievement);
      };
   }

   private function addBankAccount(EntityManager $em)
   {
      for ($i = 1; $i <= 10; $i++) {
         $bankAccount = new BankAccount();
         $bankAccount->setUser($this->getReference('user_' . random_int(1, 5)));
         $bankAccount->setIban($this->faker->iban('de'));
         $bankAccount->setBic($this->faker->bankAccountNumber);
         $bankAccount->setBank($this->faker->word);
         $bankAccount->setCountry($this->getReference('country_' . random_int(1, 2)));
         $bankAccount->setIsActive(1);
         $bankAccount->setIsBlocked(0);
         $this->addReference('bankaccount_' . $i, $bankAccount);
         $em->persist($bankAccount);
      };

   }

   private function addAddress(EntityManager $em)
   {
      for ($i = 1; $i <= 10; $i++) {
         $address = new Address();
         $address->setUser($this->getReference('user_' . random_int(1, 5)));
         $address->setAdditionalInfo("Nix");
         $address->setStreet($this->faker->streetName);
         $address->setStreetNumber($this->faker->streetName);
         $address->setPostalCode($this->faker->postcode);
         $address->setCity($this->getReference('city_' . random_int(1, 9)));
         $address->setCountry($this->getReference('country_' . random_int(1, 3)));
         $address->setIsActive(1);
         $address->setIsBlocked(0);
         $this->addReference('address_' . $i, $address);
         $em->persist($address);
      };
   }

   public function getTitle()
   {
      $title = $this->getReference('title_' . random_int(1, 3));
      print_r($title);
   }

   private function addUser(EntityManager $em)
   {
      $list = [
         [
            'email' => 'sven.schreiber@yourneeds.de',
            'userName' => 'sven_schreiber',
            'phoneNumber' => $this->faker->phoneNumber,
            'firstName' => 'Sven',
            'lastName' => 'Schreiber',
            'gender' => $this->faker->numberBetween(1, 3),
            'birthdate' => '',
            'userTitle' => $this->getReference('title_' . random_int(1, 4)),
            'jobGroup' => $this->getReference('jobgroup_' . random_int(1, 12)),
            'employer' => 'YOURneeds GmbH',
            'familyStatus' => $this->getReference('familystatus_' . random_int(1, 5)),
            'plainPassword' => 'illgo',
            'profilePicture' => $this->findUserProfilePicture(),
            'coins' => $this->faker->numberBetween(0, 3000),
            'note' => 'Keine Notiz hinterlegt - "üäö[{}',
            'roles' => array("ROLE_ADMIN"),
            'isActive' => 1,
            'isBlocked' => 0,
            'termsAccepted' => 1,
            'termsAcceptedUpdate' => $this->faker->dateTimeBetween("-180 days", "now"),
            'receiveNewsletter' => $this->faker->boolean(75),
            'receiveNewsletterUpdate' => $this->faker->dateTimeBetween("-180 days", "now"),
            'updatedAt' => $this->faker->dateTimeBetween("-180 days", "now"),
            'createdAt' => $this->faker->dateTimeBetween("-180 days", "now")
         ],
         [
            'email' => 'andre.rust@yourneeds.de',
            'userName' => 'andre_rust',
            'phoneNumber' => $this->faker->phoneNumber,
            'firstName' => 'Andre',
            'lastName' => 'Rust',
            'gender' => $this->faker->numberBetween(1, 3),
            'birthdate' => '',
            'userTitle' => $this->getReference('title_' . random_int(1, 4)),
            'jobGroup' => $this->getReference('jobgroup_' . random_int(1, 12)),
            'employer' => 'YOURneeds GmbH',
            'familyStatus' => $this->getReference('familystatus_' . random_int(1, 5)),
            'plainPassword' => 'illgo',
            'profilePicture' => $this->findUserProfilePicture(),
            'coins' => $this->faker->numberBetween(0, 3000),
            'note' => 'Keine Notiz hinterlegt - "üäö[{}',
            'roles' => array("ROLE_ADMIN"),
            'isActive' => 1,
            'isBlocked' => 0,
            'termsAccepted' => 1,
            'termsAcceptedUpdate' => $this->faker->dateTimeBetween("-180 days", "now"),
            'receiveNewsletter' => $this->faker->boolean(75),
            'receiveNewsletterUpdate' => $this->faker->dateTimeBetween("-180 days", "now"),
            'updatedAt' => $this->faker->dateTimeBetween("-180 days", "now"),
            'createdAt' => $this->faker->dateTimeBetween("-180 days", "now")
         ],
         [
            'email' => 'bjarke.pahrmann@yourneeds.de',
            'userName' => 'bjarke_pahrman',
            'phoneNumber' => $this->faker->phoneNumber,
            'firstName' => 'Bjarke',
            'lastName' => 'Pahrmann',
            'gender' => $this->faker->numberBetween(1, 3),
            'birthdate' => '',
            'userTitle' => $this->getReference('title_' . random_int(1, 4)),
            'jobGroup' => $this->getReference('jobgroup_' . random_int(1, 12)),
            'employer' => 'YOURneeds GmbH',
            'familyStatus' => $this->getReference('familystatus_' . random_int(1, 5)),
            'plainPassword' => 'illgo',
            'profilePicture' => $this->findUserProfilePicture(),
            'coins' => $this->faker->numberBetween(0, 3000),
            'note' => 'Keine Notiz hinterlegt - "üäö[{}',
            'roles' => array("ROLE_ADMIN"),
            'isActive' => 1,
            'isBlocked' => 0,
            'termsAccepted' => 1,
            'termsAcceptedUpdate' => $this->faker->dateTimeBetween("-180 days", "now"),
            'receiveNewsletter' => $this->faker->boolean(75),
            'receiveNewsletterUpdate' => $this->faker->dateTimeBetween("-180 days", "now"),
            'updatedAt' => $this->faker->dateTimeBetween("-180 days", "now"),
            'createdAt' => $this->faker->dateTimeBetween("-180 days", "now")
         ],
         [
            'email' => 'marion.pahrmann@yourneeds.de',
            'userName' => 'marion_pahrmann',
            'phoneNumber' => $this->faker->phoneNumber,
            'firstName' => 'Marion',
            'lastName' => 'Pahrmann',
            'gender' => $this->faker->numberBetween(1, 3),
            'birthdate' => '',
            'userTitle' => $this->getReference('title_' . random_int(1, 4)),
            'jobGroup' => $this->getReference('jobgroup_' . random_int(1, 12)),
            'employer' => 'YOURneeds GmbH',
            'familyStatus' => $this->getReference('familystatus_' . random_int(1, 5)),
            'plainPassword' => 'illgo',
            'profilePicture' => $this->findUserProfilePicture(),
            'coins' => $this->faker->numberBetween(0, 3000),
            'note' => 'Keine Notiz hinterlegt - "üäö[{}',
            'roles' => array("ROLE_ADMIN"),
            'isActive' => 1,
            'isBlocked' => 0,
            'termsAccepted' => 1,
            'termsAcceptedUpdate' => $this->faker->dateTimeBetween("-180 days", "now"),
            'receiveNewsletter' => $this->faker->boolean(75),
            'receiveNewsletterUpdate' => $this->faker->dateTimeBetween("-180 days", "now"),
            'updatedAt' => $this->faker->dateTimeBetween("-180 days", "now"),
            'createdAt' => $this->faker->dateTimeBetween("-180 days", "now")
         ],
         [
            'email' => 'fabian.gall@yourneeds.de',
            'userName' => 'fabian_gall',
            'phoneNumber' => $this->faker->phoneNumber,
            'firstName' => 'Fabian',
            'lastName' => 'Gall',
            'gender' => $this->faker->numberBetween(1, 3),
            'birthdate' => '',
            'userTitle' => $this->getReference('title_' . random_int(1, 4)),
            'jobGroup' => $this->getReference('jobgroup_' . random_int(1, 12)),
            'employer' => 'YOURneeds GmbH',
            'familyStatus' => $this->getReference('familystatus_' . random_int(1, 5)),
            'plainPassword' => 'illgo',
            'profilePicture' => $this->findUserProfilePicture(),
            'coins' => $this->faker->numberBetween(0, 3000),
            'note' => 'Keine Notiz hinterlegt - "üäö[{}',
            'roles' => array("ROLE_SUPERADMIN"),
            'isActive' => 1,
            'isBlocked' => 0,
            'termsAccepted' => 1,
            'termsAcceptedUpdate' => $this->faker->dateTimeBetween("-180 days", "now"),
            'receiveNewsletter' => $this->faker->boolean(75),
            'receiveNewsletterUpdate' => $this->faker->dateTimeBetween("-180 days", "now"),
            'updatedAt' => $this->faker->dateTimeBetween("-180 days", "now"),
            'createdAt' => $this->faker->dateTimeBetween("-180 days", "now")
         ]
      ];

      $counter = 0;
      foreach ($list AS $entry) {
         $counter++;
         $user = new User();
         $user->setEmail($entry['email']);
         $user->setUserName($entry['userName']);
         $user->setPhoneNumber($entry['phoneNumber']);
         $user->setFirstName($entry['firstName']);
         $user->setLastName($entry['lastName']);
         $user->setGender($entry['gender']);
         $user->setBirthdate($entry['birthdate']);
         $user->setUserTitle($entry['userTitle']);
         $user->setJobGroup($entry['jobGroup']);
         $user->setEmployer($entry['employer']);
         $user->setFamilyStatus($entry['familyStatus']);
         $user->setPlainPassword($entry['plainPassword']);
         $user->setProfilePicture($entry['profilePicture']);
         $user->setCoins($entry['coins']);
         $user->setNote($entry['note']);
         $user->setRoles($entry['roles']);
         $user->setIsActive($entry['isActive']);
         $user->setIsBlocked($entry['isBlocked']);
         $user->setTermsAccepted($entry['termsAccepted']);
         $user->setTermsAcceptedUpdate($entry['termsAcceptedUpdate']);
         $user->setReceiveNewsletter($entry['receiveNewsletter']);
         $user->setReceiveNewsletterUpdate($entry['receiveNewsletterUpdate']);
         $this->addReference('user_' . $counter, $user);
         $em->persist($user);
      }
   }

   public function findUserProfilePicture()
   {
      $list = [
         'avatar_blue_1.jpg',
         'avatar_blue_2.jpg',
         'avatar_blue_3.jpg',
         'avatar_blue_4.jpg',
         'avatar_blue_5.jpg',
         'avatar_blue_6.jpg'
      ];

      $key = array_rand($list);
      return $list[$key];
   }
}