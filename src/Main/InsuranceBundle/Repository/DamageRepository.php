<?php

namespace Main\InsuranceBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\ResultSetMapping;
use Main\InsuranceBundle\Entity\Damage;

class DamageRepository extends ServiceEntityRepository
{
	public function __construct(ManagerRegistry $registry)
	{
		parent::__construct($registry, Damage::class);
	}

	public function findDamageStructureByUserId($userId = null, $type = null)
	{
		$rsm = new ResultSetMapping;
		$rsm->addEntityResult('MainInsuranceBundle:Damage', 'dmg');
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
