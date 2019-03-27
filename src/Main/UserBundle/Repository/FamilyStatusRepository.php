<?php

namespace Main\UserBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\ResultSetMapping;
use Main\UserBundle\Entity\FamilyStatus;

class FamilyStatusRepository extends ServiceEntityRepository
{

   public function __construct(ManagerRegistry $registry)
   {
      parent::__construct($registry, FamilyStatus::class);
   }

   public function findByIsDefault()
   {
      $rsm = new ResultSetMapping;
      $rsm->addEntityResult('MainUserBundle:FamilyStatus', 'fs');
      $rsm->addScalarResult('id', 'id');
      $rsm->addScalarResult('name', 'name');

      $sql = "
        SELECT
          fs.id,
          fs.name
        FROM
          family_status fs
        WHERE
          fs.is_default = 1
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
      $rsm->addEntityResult('MainUserBundle:FamilyStatus', 'fs');
      $rsm->addScalarResult('id', 'familyStatusId');
      $rsm->addScalarResult('name', 'familyStatusName');

      $sql = "
        SELECT
          fs.id,
          fs.name
        FROM
          family_status fs
        WHERE
          fs.id = $id
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
      $rsm->addEntityResult('MainUserBundle:FamilyStatus', 'fs');
      $rsm->addScalarResult('id', 'familyStatusId');
      $rsm->addScalarResult('name', 'familyStatusName');

      $sql = '
        SELECT
          fs.id,
          fs.name
        FROM
          family_status fs
        ';
      $query = $this->_em->createNativeQuery($sql, $rsm);
      $result = $query->getScalarResult();
      //print_r($result); die;
      return $result;
   }
}
