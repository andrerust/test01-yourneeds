<?php

namespace Main\AdminBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Main\AdminBundle\Entity\Country;

class CountryRepository extends ServiceEntityRepository
{

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Country::class);
    }
    public function createAlphabeticalQueryBuilder()
    {
        return $this->createQueryBuilder('country')
            ->orderBy('country.name', 'ASC');
    }
}
