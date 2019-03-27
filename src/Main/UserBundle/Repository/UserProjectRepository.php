<?php

namespace Main\UserBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\ResultSetMapping;
use Main\UserBundle\Entity\UserProject;

class UserProjectRepository extends ServiceEntityRepository
{
	public function __construct(ManagerRegistry $registry)
	{
		parent::__construct($registry, UserProject::class);
	}


	public function getUserProjectId($userId = null)
	{
		$rsm = new ResultSetMapping;
		$rsm->addEntityResult('AppBundle:Project', 'p');
		$rsm->addScalarResult('id', 'id');
		$rsm->addScalarResult('project_id', 'projectId');

		$sql = "
        SELECT
          p.id,
          p.project_id
        FROM
          user_project p
        WHERE
          user_id = $userId
        LIMIT 1
      ";
		$query = $this->_em->createNativeQuery($sql, $rsm);
		$result = $query->getOneOrNullResult();
		//print_r($result);die;
		return $result;
	}

}
