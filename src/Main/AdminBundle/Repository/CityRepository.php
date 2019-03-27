<?php

namespace Main\AdminBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Main\AdminBundle\Entity\City;

class CityRepository extends ServiceEntityRepository
{

   public function __construct(ManagerRegistry $registry)
   {
      parent::__construct($registry, City::class);
   }

   public function createAlphabeticalQueryBuilder()
   {
      return $this->createQueryBuilder('city')
         ->orderBy('city.name', 'ASC');
   }
}
