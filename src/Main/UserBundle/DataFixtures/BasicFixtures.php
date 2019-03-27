<?php
namespace Main\UserBundle\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;
use Faker\Factory;
use Faker\Generator;
use Main\UserBundle\Entity\City;
use Main\UserBundle\Entity\Country;
use Main\UserBundle\Entity\FamilyStatus;
use Main\UserBundle\Entity\JobGroup;
use Main\UserBundle\Entity\Title;

class BasicFixtures extends Fixture
{
   private $faker;

   public function load(ObjectManager $manager)
   {
      $this->faker = Factory::create();
      $this->addTitle($manager);
      $this->addJobGroup($manager);
      $this->addCity($manager);
      $this->addCountry($manager);
      $this->addFamilyStatus($manager);
      $manager->flush();
   }

   private function addFamilyStatus(EntityManager $em)
   {
      $list = [
         [
            'name' => 'Nicht angegeben',
            'isDefault' => 1
         ],
         [
            'name' => 'Single',
            'isDefault' => 0
         ],
         [
            'name' => 'Verheiratet',
            'isDefault' => 0
         ],
         [
            'name' => 'Verwitwet',
            'isDefault' => 0
         ],
         [
            'name' => 'Geschieden',
            'isDefault' => 0
         ]
      ];

      $counter = 0;
      foreach ($list AS $entry) {
         $counter++;
         $familyStatus = new FamilyStatus();
         $familyStatus->setName($entry['name']);
         $familyStatus->setIsdefault($entry['isDefault']);
         $this->addReference('familystatus_' . $counter, $familyStatus);
         $em->persist($familyStatus);
      }
   }

   private function addJobGroup(EntityManager $em)
   {
      $list = [
         [
            'name' => 'Nicht angegeben',
            'isDefault' => 1
         ],
         [
            'name' => 'Angestellte/r',
            'isDefault' => 0
         ],
         [
            'name' => 'Arbeiter/in',
            'isDefault' => 0
         ],
         [
            'name' => 'Facharbeiter/in',
            'isDefault' => 0
         ],
         [
            'name' => 'Beamter/Beamtin',
            'isDefault' => 0
         ],
         [
            'name' => 'Berufssoldat/in',
            'isDefault' => 0
         ],
         [
            'name' => 'Hausfrau/-mann',
            'isDefault' => 0
         ],
         [
            'name' => 'Student/in',
            'isDefault' => 0
         ],
         [
            'name' => 'Ohne Beschäftigung',
            'isDefault' => 0
         ],
         [
            'name' => 'Selbst. Freiberufler',
            'isDefault' => 0
         ],
         [
            'name' => 'Gesellschafter (Geschäftsfuehrer)',
            'isDefault' => 0
         ],
         [
            'name' => 'Rentner/in',
            'isDefault' => 0
         ],
         [
            'name' => 'Auszubildender',
            'isDefault' => 0
         ]
      ];

      $counter = 0;
      foreach ($list AS $entry) {
         $counter++;
         $jobGroup = new JobGroup();
         $jobGroup->setName($entry['name']);
         $jobGroup->setIsdefault($entry['isDefault']);
         $this->addReference('jobgroup_' . $counter, $jobGroup);
         $em->persist($jobGroup);
      }
   }

   private function addCountry(EntityManager $em)
   {
      $list = [
         [
            'name' => 'Deutschland',
            'isActive' => 1,
            'isDefault' => 1
         ],
         [
            'name' => 'Schweiz',
            'isActive' => 1,
            'isDefault' => 0
         ],
         [
            'name' => 'Österreich',
            'isActive' => 1,
            'isDefault' => 0
         ]
      ];

      $counter = 0;
      foreach ($list AS $entry) {
         $counter++;
         $country = new Country();
         $country->setName($entry['name']);
         $country->setIsActive($entry['isActive']);
         $country->setIsdefault($entry['isDefault']);
         $this->addReference('country_' . strtolower($entry['name']), $country);
         $this->addReference('country_' . $counter, $country);
         $em->persist($country);
      }
   }

   private function addCity(EntityManager $em)
   {
      $list = [
         [
            'name' => 'Heidelberg',
            'isActive' => '1',
            'isDefault' => 0
         ],
         [
            'name' => 'Rossdorf',
            'isActive' => 1,
            'isDefault' => 0
         ],
         [
            'name' => 'Kappeln',
            'isActive' => 1,
            'isDefault' => 0
         ],
         [
            'name' => 'Bad Kreuznach',
            'isActive' => 1,
            'isDefault' => 0
         ],
         [
            'name' => 'Frankfurt am Main',
            'isActive' => 1,
            'isDefault' => 0
         ],
         [
            'name' => 'Waldenburg',
            'isActive' => 1,
            'isDefault' => 0
         ],
         [
            'name' => 'Westerstede',
            'isActive' => 1,
            'isDefault' => 0
         ],
         [
            'name' => 'Hamburg',
            'isActive' => 1,
            'isDefault' => 0
         ],
         [
            'name' => 'Berlin',
            'isActive' => 1,
            'isDefault' => 0
         ]
      ];

      $counter = 0;
      foreach ($list AS $entry) {
         $counter++;
         $city = new City();
         $city->setName($entry['name']);
         $city->setIsActive($entry['isActive']);
         $city->setIsdefault($entry['isDefault']);
         $this->addReference('city_' . strtolower($entry['name']), $city);
         $this->addReference('city_' . $counter, $city);
         $em->persist($city);
      }
   }

   private function addTitle(EntityManager $em)
   {
      $list = [
         [
            'name' => 'Keiner',
            'isActive' => 1,
            'isDefault' => 1
         ],
         [
            'name' => 'Dr.',
            'isActive' => 1,
            'isDefault' => 0
         ],
         [
            'name' => 'Prof.',
            'isActive' => 1,
            'isDefault' => 0
         ],
         [
            'name' => 'Prof.Dr.',
            'isActive' => 1,
            'isDefault' => 0
         ]
      ];

      $counter = 0;
      foreach ($list AS $entry) {
         $counter++;
         $title = new Title();
         $title->setName($entry['name']);
         $title->setIsActive($entry['isActive']);
         $title->setIsdefault($entry['isDefault']);
         $this->addReference('title_' . $counter, $title);
         $em->persist($title);
      }
   }
}