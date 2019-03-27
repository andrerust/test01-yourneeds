<?php

namespace Main\InsuranceBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\ResultSetMapping;
use Main\InsuranceBundle\Entity\TargetGroup;

class TargetGroupRepository extends ServiceEntityRepository
{
   public function __construct(ManagerRegistry $registry)
   {
      parent::__construct($registry, TargetGroup::class);
   }

   public function getAll()
   {
      $rsm = new ResultSetMapping;
      $rsm->addEntityResult('MainInsuranceBundle:TargetGroup', 'tg');
      $rsm->addScalarResult('id', 'id');
      $rsm->addScalarResult('name', 'name');
      $rsm->addScalarResult('identifier', 'identifier');

      $sql = '
        SELECT
          tg.id,
          tg.name,
          tg.identifier
        FROM
          target_group tg
      ';
      $query = $this->_em->createNativeQuery($sql, $rsm);
      $result = $query->getScalarResult();
      //print_r($result); die;
      return $result;
   }

   public function findTargetGroupsByTariffId($id = null)
   {
      $rsm = new ResultSetMapping;
      $rsm->addEntityResult('MainInsuranceBundle:TariffTargetGroup', 'ttg');

      $rsm->addEntityResult('MainInsuranceBundle:TargetGroup', 'tg');
      $rsm->addScalarResult('id', 'id');
      $rsm->addScalarResult('name', 'name');
      $rsm->addScalarResult('identifier', 'identifier');

      $sql = "
        SELECT
          tg.id,
          tg.name,
          tg.identifier
        FROM
          tariff_target_group ttg
        INNER JOIN
          target_group tg ON tg.id = ttg.target_group_id
        WHERE
          ttg.tariff_id = $id
      ";
      $query = $this->_em->createNativeQuery($sql, $rsm);
      $result = $query->getResult();
      //print_r($result);die;
      return $result;
   }

}
