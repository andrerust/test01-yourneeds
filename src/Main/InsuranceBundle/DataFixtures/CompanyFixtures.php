<?php
namespace Main\InsuranceBundle\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;
use Faker\Factory;
use Main\InsuranceBundle\Entity\Company;
use Main\UserBundle\Entity\Address;

class CompanyFixtures extends Fixture
{
   private $faker;

   public function load(ObjectManager $manager)
   {
      $this->faker = Factory::create();
      $this->addCompany($manager);
      $this->addCompanyAddress($manager);
      $manager->flush();
   }


   private function addCompanyAddress(EntityManager $em)
   {
      $list = [
         [
            'referenceName' => 'janitos',
         ],
         [
            'referenceName' => 'haftpflichtkasse_darmstadt',
         ],
         [
            'referenceName' => 'ostangler_brandgilde',
         ],
         [
            'referenceName' => 'helvetia',
         ]
      ];
      foreach ($list AS $entry) {
         $address = new Address();
         $address->setCompany($this->getReference('company_' . $entry['referenceName']));
         $address->setAdditionalInfo('');
         $address->setStreet($this->faker->streetName);
         $address->setStreetNumber($this->faker->streetName);
         $address->setPostalCode($this->faker->postcode);
         $address->setCity($this->getReference('city_' . random_int(1, 9)));
         $address->setCountry($this->getReference('country_' . random_int(1, 3)));
         $address->setIsActive(1);
         $address->setIsBlocked(0);
         $this->addReference('address_' . $entry['referenceName'], $address);
         $em->persist($address);
      };
   }


   private function addCompany(EntityManager $em)
   {
      $list = [
         [
            'name' => 'Janitos Versicherung AG',
            'referenceName' => 'janitos',
            'publicName' => 'Janitos',
            'department' => 'Vertriebspartnermanagement',
            'contactPerson' => 'Aurelio Bentivegna',
            'email' => 'aurelio_bentivegna@janitos.de',
            'website' => 'www.janitos.de',
            'logo' => 'janitoslogo.jpg',
            'contactPhoneNumber' => '04642 91 4727',
            'contactFaxNumber' => '04642 91 4755',
            'note' => '---',
            'isActive' => 1
         ],
         [
            'name' => 'Die Haftpflichtkasse VVaG',
            'referenceName' => 'haftpflichtkasse_darmstadt',
            'publicName' => 'Haftpflichtkasse Darmstadt',
            'department' => '---',
            'contactPerson' => '---',
            'email' => '---',
            'website' => '---',
            'logo' => 'Die-Haftpflichtkasse-300x135.jpg',
            'contactPhoneNumber' => '---',
            'contactFaxNumber' => '---',
            'note' => '---',
            'isActive' => 1
         ],
         [
            'name' => 'Ostangler Brandgilde VVaG',
            'referenceName' => 'ostangler_brandgilde',
            'publicName' => 'Ostangler Brandgilde',
            'department' => '---',
            'contactPerson' => '---',
            'email' => '---',
            'website' => '---',
            'logo' => 'ostangler-versicherungen.png',
            'contactPhoneNumber' => '---',
            'contactFaxNumber' => '---',
            'note' => '---',
            'isActive' => 1
         ],
         [
            'name' => 'Helvetia Schweizerische Versicherungsgesellschaft AG',
            'referenceName' => 'helvetia',
            'publicName' => 'Helvetia',
            'department' => 'Direktion für Deutschland',
            'contactPerson' => '---',
            'email' => '---',
            'website' => '---',
            'logo' => 'helvetia-logo.jpg',
            'contactPhoneNumber' => '---',
            'contactFaxNumber' => '---',
            'note' => '---',
            'isActive' => 1
         ],
         [
            'name' => 'asspario Versicherungsdienst AG',
            'referenceName' => 'asspario',
            'publicName' => 'asspario',
            'department' => '---',
            'contactPerson' => '---',
            'email' => '---',
            'website' => '---',
            'logo' => 'asspario-logo.png',
            'contactPhoneNumber' => '---',
            'contactFaxNumber' => '---',
            'note' => '---',
            'isActive' => 1
         ],
         [
            'name' => 'Waldenburger Versicherung AG',
            'referenceName' => 'waldenburger',
            'publicName' => 'Waldenburger',
            'department' => '---',
            'contactPerson' => '---',
            'email' => '---',
            'website' => '---',
            'logo' => 'waldenburger-logo.png',
            'contactPhoneNumber' => '---',
            'contactFaxNumber' => '---',
            'note' => '---',
            'isActive' => 1
         ],
         [
            'name' => 'Ammerländer Versicherung VVaG',
            'referenceName' => 'ammerlaender',
            'publicName' => 'Ammerländer',
            'department' => '---',
            'contactPerson' => '---',
            'email' => '---',
            'website' => '---',
            'logo' => 'ammerlaender-logo.gif',
            'contactPhoneNumber' => '---',
            'contactFaxNumber' => '---',
            'note' => '---',
            'isActive' => 1
         ]
      ];

      $counter = 0;
      foreach ($list AS $entry) {
         $counter++;
         $company = new Company();
         $company->setName($entry['name']);
         $company->setPublicName($entry['publicName']);
         $company->setDepartment($entry['department']);
         $company->setContactPerson($entry['contactPerson']);
         $company->setEmail($entry['email']);
         $company->setWebsite($entry['website']);
         $company->setLogo($entry['logo']);
         $company->setContactPhoneNumber($entry['contactPhoneNumber']);
         $company->setContactFaxNumber($entry['contactFaxNumber']);
         $company->setNote($entry['note']);
         $company->setIsActive($entry['isActive']);
         $company->setUpdatedAt($this->faker->dateTimeBetween("-180 days", "now"));
         $company->setCreatedAt($this->faker->dateTimeBetween("-180 days", "now"));

         $this->addReference('company_' . $entry['referenceName'], $company);
         $em->persist($company);
      }
   }
}