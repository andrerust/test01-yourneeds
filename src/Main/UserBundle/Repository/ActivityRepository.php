<?php

namespace Main\UserBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\ResultSetMapping;
use Main\UserBundle\Entity\Activity;

class ActivityRepository extends ServiceEntityRepository
{
   public function __construct(ManagerRegistry $registry)
   {
      parent::__construct($registry, Activity::class);
   }
   public function findAllByUserId($id = null)
   {
      $rsm = new ResultSetMapping;
      $rsm->addEntityResult('MainUserBundle:UserActivity', 'ua');
      $rsm->addScalarResult('context_id', 'context');
      $rsm->addScalarResult('created_at', 'createdAt');

      $rsm->addEntityResult('MainUserBundle:Activity', 'a');
      $rsm->addScalarResult('short_description', 'shortDescription');

      $sql = '
        SELECT
          ua.context AS context_id,
          ua.created_at,
          a.short_description
        FROM
          user_activity ua
        INNER JOIN
          activity a ON a.id = ua.activity_id
        WHERE
          ua.user_id = ' . $id;
      $query = $this->_em->createNativeQuery($sql, $rsm);
      $result = $query->getScalarResult();
      //print_r($result);die;
      return $result;
   }
}
