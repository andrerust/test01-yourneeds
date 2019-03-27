<?php

namespace Main\AdminBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Main\AdminBundle\Entity\AnimalDogBreed;

class AnimalDogBreedRepository extends ServiceEntityRepository
{
	public function __construct(ManagerRegistry $registry)
	{
		parent::__construct($registry, AnimalDogBreed::class);
	}
}
