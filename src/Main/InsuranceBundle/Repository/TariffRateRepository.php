<?php

namespace Main\InsuranceBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\ResultSetMapping;
use Main\InsuranceBundle\Entity\Tariff;

class TariffRateRepository extends ServiceEntityRepository
{
   public function __construct(ManagerRegistry $registry)
   {
      parent::__construct($registry, Tariff::class);
   }

   public function findRatesByTariffId($id = null)
   {
      $rsm = new ResultSetMapping;
      $rsm->addEntityResult('MainInsuranceBundle:TariffRate', 'tr');
      $rsm->addScalarResult('tariff_rate_id', 'id');
      $rsm->addScalarResult('target_group_id', 'targetGroupId');
      $rsm->addScalarResult('amount_of_coverage', 'amountOfCoverage');
      $rsm->addScalarResult('age_from', 'ageFrom');
      $rsm->addScalarResult('age_until', 'ageUntil');
      $rsm->addScalarResult('rate', 'rate');
      $rsm->addScalarResult('rate_interval', 'rateInterval');
      $rsm->addScalarResult('retention_value', 'retentionValue');
      $rsm->addScalarResult('discount_value', 'discountValue');
      $rsm->addScalarResult('discount_name', 'discountName');
      $rsm->addScalarResult('is_active', 'isActive');
      $rsm->addScalarResult('updated_at', 'updatedAt');

      $rsm->addEntityResult('MainInsuranceBundle:TargetGroup', 'tg');
      $rsm->addScalarResult('target_group_id', 'targetGroupId');
      $rsm->addScalarResult('name', 'name');

      $sql = "
        SELECT
          tr.id AS tariff_rate_id,
          tr.target_group_id AS target_group_id,
          tr.amount_of_coverage,
          tr.age_from,
          tr.age_until,
          tr.rate,
          tr.rate_interval,
          tr.retention_value,
          tr.discount_value,
          tr.discount_name,
          tr.is_active,
          tr.updated_at,
          tg.name
        FROM
          tariff_rate tr
        INNER JOIN
          target_group tg ON tg.id = tr.target_group_id
        WHERE
          tr.tariff_id = $id
      ";
      $query = $this->_em->createNativeQuery($sql, $rsm);
      $result = $query->getScalarResult();
      //print_r($result);die;
      return $result;
   }
}
