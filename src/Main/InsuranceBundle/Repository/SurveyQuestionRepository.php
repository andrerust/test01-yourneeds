<?php

namespace Main\InsuranceBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Main\InsuranceBundle\Entity\SurveyQuestion;

class SurveyQuestionRepository extends ServiceEntityRepository
{
	public function __construct(ManagerRegistry $registry)
	{
		parent::__construct($registry, SurveyQuestion::class);
	}
}
