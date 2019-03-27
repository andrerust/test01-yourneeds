<?php

namespace Main\UserBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\ResultSetMapping;
use Main\UserBundle\Entity\UserActivity;

class UserActivityRepository extends ServiceEntityRepository
{
	public function __construct(ManagerRegistry $registry)
	{
		parent::__construct($registry, UserActivity::class);
	}

	public function findAllByUserId($id = null)
	{
		$rsm = new ResultSetMapping;
		$rsm->addEntityResult('MainUserBundle:UserActivity', 'ua');
		$rsm->addScalarResult('id', 'id');
		$rsm->addScalarResult('description', 'description');
		$rsm->addScalarResult('json', 'json');
		$rsm->addScalarResult('created_at', 'createdAt');
		$rsm->addScalarResult('updated_at', 'updatedAt');

		$rsm->addEntityResult('MainUserBundle:Activity', 'a');
		$rsm->addScalarResult('short_description', 'shortDescription');

		$sql = '
        SELECT
          ua.id,
          ua.description,
          ua.json,
          ua.created_at,
          ua.updated_at,
          a.short_description,
          a.context
        FROM
          user_activity ua
        INNER JOIN
          activity a ON a.id = ua.activity_id
        WHERE
          ua.user_id = ' . $id . '
				ORDER BY
					updated_at DESC';
		$query = $this->_em->createNativeQuery($sql, $rsm);
		$result = $query->getScalarResult();
		//print_r($result);die;
		return $result;
	}
}
