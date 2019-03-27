<?php

namespace Main\InsuranceBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\ResultSetMapping;
use Main\InsuranceBundle\Entity\TariffType;

class TariffTypeRepository extends ServiceEntityRepository
{
   public function __construct(ManagerRegistry $registry)
   {
      parent::__construct($registry, TariffType::class);
   }

   public function findTypeById($id = null)
   {
      $rsm = new ResultSetMapping;
      $rsm->addEntityResult('MainInsuranceBundle:TariffType', 'tt');
      $rsm->addScalarResult('id', 'id');
      $rsm->addScalarResult('name', 'name');
      $rsm->addScalarResult('short_name', 'shortName');
      $rsm->addScalarResult('identifier', 'identifier');

      $sql = '
        SELECT
          tt.id,
          tt.name,
          tt.short_name,
          tt.identifier
        FROM
          tariff_type tt
       WHERE
          tt.id = "' . $id . '"
      ';
      $query = $this->_em->createNativeQuery($sql, $rsm);
      $result = $query->getOneOrNullResult();
      //print_r($result);die;
      return $result;
   }

   public function findIdByShortName($type = null)
   {
      $rsm = new ResultSetMapping;
      $rsm->addEntityResult('MainInsuranceBundle:TariffType', 'tt');
      $rsm->addScalarResult('id', 'id');

      $sql = '
        SELECT
          tt.id
        FROM
          tariff_type tt
       WHERE
          tt.short_name = "' . $type . '"
      ';
      $query = $this->_em->createNativeQuery($sql, $rsm);
      $result = $query->getOneOrNullResult();
      //print_r($result);die;
      return $result;
   }

   public function findIdByIdentifier($identifier = null)
   {
      $rsm = new ResultSetMapping;
      $rsm->addEntityResult('MainInsuranceBundle:TariffType', 'tt');
      $rsm->addScalarResult('id', 'id');

      $sql = '
        SELECT
          tt.id
        FROM
          tariff_type tt
       WHERE
          tt.identifier = "' . $identifier . '"
      ';
      $query = $this->_em->createNativeQuery($sql, $rsm);
      $result = $query->getOneOrNullResult();
      //print_r($result);die;
      return $result;
   }


}
