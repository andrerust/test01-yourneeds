<?php

namespace Main\UserBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\ResultSetMapping;
use Main\UserBundle\Entity\UserStats;

class UserStatsRepository extends ServiceEntityRepository
{
   public function __construct(ManagerRegistry $registry)
   {
      parent::__construct($registry, UserStats::class);
   }


   public function findLastByUserId($id = null)
   {
      $rsm = new ResultSetMapping;
      $rsm->addEntityResult('MainUserBundle:UserSecurityLog', 'usl');
      $rsm->addScalarResult('created_at', 'createdAt');

      $sql = "
        SELECT
          created_at
        FROM
          user_security_log usl
        WHERE
          usl.user_id = $id
        ORDER BY
         created_at DESC
         LIMIT 1
      ";
      $query = $this->_em->createNativeQuery($sql, $rsm);
      $result = $query->getSingleScalarResult();
      //print_r($result);die;
      return $result;
   }
}
