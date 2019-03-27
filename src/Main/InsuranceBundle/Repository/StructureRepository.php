<?php

namespace Main\InsuranceBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\ResultSetMapping;
use Main\InsuranceBundle\Entity\Structure;

class StructureRepository extends ServiceEntityRepository
{
	public function __construct(ManagerRegistry $registry)
	{
		parent::__construct($registry, Structure::class);
	}

	/*
	 * mt = main table
	 */
	public function findStructureByUserId($userId = null, $type = null)
	{
		$rsm = new ResultSetMapping;
		$rsm->addEntityResult('MainInsuranceBundle:Structure', 'mt');
		$rsm->addScalarResult('id', 'id');
		$rsm->addScalarResult('type', 'type');
		$rsm->addScalarResult('json', 'json');
		$rsm->addScalarResult('user_id', 'userId');

		$sql = "
				SELECT
          mt.id,
          mt.type,
          mt.json,
          mt.user_id
        FROM
          structure mt
         WHERE
          mt.user_id = '$userId'
          AND
          mt.type = '$type'
        ORDER BY mt.updated_at DESC
      ";
		$query = $this->_em->createNativeQuery($sql, $rsm);
		$result = $query->getScalarResult();
		//print_r($result);die;
		return $result;
	}
}
