<?php

namespace Main\InsuranceBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\ResultSetMapping;
use Main\InsuranceBundle\Entity\Process;

class ProcessRepository extends ServiceEntityRepository
{
	public function __construct(ManagerRegistry $registry)
	{
		parent::__construct($registry, Process::class);
	}

	public function findProcessByUserId($userId = null, $type = null, $contextType = null)
	{
		$rsm = new ResultSetMapping;
		$rsm->addEntityResult('MainInsuranceBundle:Process', 'process');
		$rsm->addScalarResult('id', 'id');
		$rsm->addScalarResult('type', 'type');
		$rsm->addScalarResult('user_id', 'userId');
		$rsm->addScalarResult('status', 'status');
		$rsm->addScalarResult('step', 'step');
		$rsm->addScalarResult('context_type', 'contextType');
		$rsm->addScalarResult('content_step', 'contentStep');
		$rsm->addScalarResult('id', 'id');
		$rsm->addScalarResult('user_id', 'userId');

		$sql = "
        SELECT
          pro.id,
          pro.type,
          pro.user_id,
          pro.context_type,
          pro.status,
          pro.step,
          pro.content_step,
          pro.json,
          pro.user_id
        FROM
          process pro
        WHERE
          pro.user_id = '$userId'
        AND
          pro.type = '$type'
        AND
          pro.context_type = '$contextType'
        ORDER BY updated_at DESC
        LIMIT 1
      ";
		$query = $this->_em->createNativeQuery($sql, $rsm);
		$result = $query->getOneOrNullResult();
		//print_r($result);die;
		return $result;
	}

	public function findDamageStructureByUserId($userId = null, $type = null)
	{
		$rsm = new ResultSetMapping;
		$rsm->addEntityResult('MainInsuranceBundle:Process', 'dmg');
		$rsm->addScalarResult('id', 'id');
		$rsm->addScalarResult('type', 'type');
		$rsm->addScalarResult('json', 'json');
		$rsm->addScalarResult('user_id', 'userId');

		$sql = "
        SELECT
          dmg.id,
          dmg.type,
          dmg.json,
          dmg.user_id
        FROM
          damage dmg
        WHERE
          dmg.user_id = '$userId'
				AND
          dmg.type = '$type'
        ORDER BY
        	updated_at DESC
      ";
		$query = $this->_em->createNativeQuery($sql, $rsm);
		$result = $query->getScalarResult();
		//print_r($sql);die;
		return $result;
	}
}
