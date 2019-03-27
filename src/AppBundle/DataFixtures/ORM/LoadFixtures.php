<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;
use Faker\Generator;
use Main\UserBundle\DataFixtures\BasicFixtures;
use Main\UserBundle\Entity\City;

class LoadFixtures extends Fixture
{
   private $faker;

   public function load(ObjectManager $manager)
   {

      $this->faker = Factory::create();
      $manager->flush();

      /*
      //__DIR__ . '/fixtures.yml',
      $objects = Fixtures::load(
         [
            'src/Main/UserBundle/DataFixtures/ORM/base-data.yml',
            'src/Main/UserBundle/DataFixtures/ORM/user.yml',
            'src/Main/UserBundle/DataFixtures/ORM/user-attachment.yml',
            'src/Main/InsuranceBundle/DataFixtures/ORM/company.yml',
            'src/Main/InsuranceBundle/DataFixtures/ORM/tariff.yml',
            'src/Main/InsuranceBundle/DataFixtures/ORM/document.yml'

         ],
         $manager,
         [
            'providers' => [$this]
         ]
      );
*/
      //$this->importSql($manager);
   }

   /*
   public function importSQL(ObjectManager $manager)
   {
      $finder = new Finder();
      $finder->in('/../src/Main/InsuranceBundle/DataFixtures/SQL/structures.sql');
      $finder->name('*.sql');
      $finder->files();
      $finder->sortByName();

      foreach ($finder as $file) {
         print "Importing: {$file->getBasename()} " . PHP_EOL;
         $content = $file->getContents();
         $stmt = $this->container->get('doctrine.orm.entity_manager')->getConnection()->prepare($content);
         $stmt->execute();
      }
   }

   public function setContainer(ContainerInterface $container = null)
   {
      $this->container = $container;
   }
*/
   public function getMillions()
   {
      $contexts = array('10M', '20M', '50M');
      return $contexts;
      $key = array_rand($contexts);
      return $contexts[$key];
   }

   public function getJob()
   {
      $contexts = [
         'Betriebswirt',
         'Maurer',
         'Informatiker',
         'Geschaeftsmann',
         'Haendler',
         'Steuerfachangestelle',
         'Kindergaertnerin'
      ];
      $key = array_rand($contexts);
      return $contexts[$key];
   }

   public function getTransactionStatus()
   {
      //'1:isOrdered',
      $contexts = [
         '2:isPayed',
         '3:isAccepted',
         '4:isDeclined',
         '5:isInTransport',
         '6:isDelivered',
         '7:isDone'
      ];
      $key = array_rand($contexts);
      return $contexts[$key];
   }

   public function randomRole()
   {
      $roles = [
         'ROLE_ADMIN',
         'ROLE_USER_FULL',
         'ROLE_USER'
      ];
      return $roles[array_rand($roles)];
   }


   public function getActivityContext()
   {
      $contexts = [
         'Story',
         'Video',
         'Image',
         'Post',
         'Like',
         'Share',
         'Match',
         'Live',
         'Comment'
      ];

      $key = array_rand($contexts);
      return $contexts[$key];
   }

   public function getActivity()
   {
      $activities = [
         'Adding story',
         'Adding video',
         'Adding image',
         'Adding friend',
         'Adding match',
         'Adding post',
         'Commenting story',
         'Commenting video',
         'Commenting image',
         'Story liked',
         'Video liked',
         'Image liked',
         'Story shared',
         'Video shared',
         'Image shared',
         'Live action a',
         'Live action b',
         'Live action c',
         'Live action x',
         'Live action y',
         'Live action z'
      ];
      $key = array_rand($activities);
      return $activities[$key];
   }

}
