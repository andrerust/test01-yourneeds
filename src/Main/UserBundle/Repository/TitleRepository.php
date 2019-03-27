<?php

namespace Main\UserBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\ResultSetMapping;
use Main\UserBundle\Entity\Title;

class TitleRepository extends ServiceEntityRepository
{

   public function __construct(ManagerRegistry $registry)
   {
      parent::__construct($registry, Title::class);
   }


   public function findByIsDefault()
   {
      $rsm = new ResultSetMapping;
      $rsm->addEntityResult('MainUserBundle:Title', 'ti');
      $rsm->addScalarResult('id', 'id');
      $rsm->addScalarResult('name', 'name');

      $sql = "
        SELECT
          ti.id,
          ti.name
        FROM
          user_title ti
        WHERE
          ti.is_default = 1
        LIMIT 1
      ";
      $query = $this->_em->createNativeQuery($sql, $rsm);
      $result = $query->getOneOrNullResult();
      //print_r($result);die;
      return $result;
   }

   public function findById($id = null)
   {
      $rsm = new ResultSetMapping;
      $rsm->addEntityResult('MainUserBundle:Title', 'ti');
      $rsm->addScalarResult('id', 'id');
      $rsm->addScalarResult('name', 'titleName');

      $sql = "
        SELECT
          ti.id,
          ti.name
        FROM
          user_title ti
        WHERE
          ti.id = $id
        LIMIT 1
      ";
      $query = $this->_em->createNativeQuery($sql, $rsm);
      $result = $query->getOneOrNullResult();
      //print_r($result);die;
      return $result;
   }

   public function getAll()
   {
      $rsm = new ResultSetMapping;
      $rsm->addEntityResult('MainUserBundle:Title', 'ti');
      $rsm->addScalarResult('id', 'titleId');
      $rsm->addScalarResult('name', 'name');

      $sql = '
        SELECT
          ba.id,
          ba.name
        FROM
          user_title ti
        ';
      $query = $this->_em->createNativeQuery($sql, $rsm);
      $result = $query->getScalarResult();
      //print_r($result); die;
      return $result;
   }
}
