<?php

namespace Main\UserBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\ResultSetMapping;
use Main\UserBundle\Entity\Achievement;

class AchievementRepository extends ServiceEntityRepository
{

   public function __construct(ManagerRegistry $registry)
   {
      parent::__construct($registry, Achievement::class);
   }

   public function findByUserId($id = null)
   {
      $rsm = new ResultSetMapping;
      $rsm->addEntityResult('MainUserBundle:UserAchievement', 'ua');
      $rsm->addScalarResult('won_at', 'wonAt');
      $rsm->addScalarResult('updated_at', 'updatedAt');

      $rsm->addEntityResult('MainUserBundle:Achievement', 'a');
      $rsm->addScalarResult('achievement_id', 'achievementId');
      $rsm->addScalarResult('title', 'title');
      $rsm->addScalarResult('main_image', 'mainImage');

      $sql = '
        SELECT
          ua.achievement_id AS achievement_id,
          ua.won_at,
          a.title AS title,
          a.id AS achievement_id,
          a.main_image
        FROM
          user_achievement ua
        INNER JOIN
          achievement a ON a.id = ua.achievement_id
        WHERE
          ua.user_id = ' . $id;
      $query = $this->_em->createNativeQuery($sql, $rsm);
      $result = $query->getScalarResult();
      //print_r($result);die;
      return $result;
   }
}