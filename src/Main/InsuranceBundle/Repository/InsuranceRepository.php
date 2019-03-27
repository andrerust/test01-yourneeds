<?php

namespace Main\InsuranceBundle\Repository;

use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\EntityRepository;

class InsuranceRepository extends EntityRepository
{

   public function findInsuranceById($id = null)
   {
      $rsm = new ResultSetMapping;
      $rsm->addEntityResult('MainInsuranceBundle:Insurance', 'i');
      $rsm->addScalarResult('title', 'title');
      $rsm->addScalarResult('runtime', 'runtime');
      $rsm->addScalarResult('updated_at', 'updatedAt');
      $rsm->addScalarResult('is_active', 'isActive');

      $rsm->addEntityResult('MainInsuranceBundle:InsurancePrivateLiability', 'ipl');
      $rsm->addScalarResult('id', 'id');
      $rsm->addScalarResult('amount_covered_body_injury', 'amountCoveredBodyInjury');
      $rsm->addScalarResult('amount_covered_material_damage', 'amountCoveredMaterialDamage');
      $rsm->addScalarResult('amount_covered_financial_damage', 'amountCoveredFinancialDamage');
      $rsm->addScalarResult('amount_covered_jung_kids', 'amountCoveredJungKids');
      $rsm->addScalarResult('include_internship', 'includeInternship');
      $rsm->addScalarResult('bad_dept_loss', 'badDeptLoss');
      $rsm->addScalarResult('data_exchange', 'dataExchange');
      $rsm->addScalarResult('own_residential_home_living_in', 'ownResidentialHomeLivingIn');
      $rsm->addScalarResult('own_residential_home_rental_others', 'ownResidentialHomeRentalOthers');
      $rsm->addScalarResult('undeveloped_properties', 'undevelopedProperties');

      $sql = "
        SELECT
          i.title,
          i.runtime,
          i.updated_at,
          i.is_active,
          ipl.id,
          ipl.amount_covered_body_injury,
          ipl.amount_covered_material_damage,
          ipl.amount_covered_financial_damage,
          ipl.amount_covered_jung_kids,
          ipl.include_internship,
          ipl.data_exchange,
          ipl.bad_dept_loss,
          ipl.own_residential_home_living_in,
          ipl.own_residential_home_rental_others,
          ipl.undeveloped_properties
        FROM
          insurance i
        INNER JOIN
          insurance_private_liability ipl ON ipl.id = i.id
        WHERE
          ipl.id = $id
        LIMIT 1
      ";
      $query = $this->_em->createNativeQuery($sql, $rsm);
      $result = $query->getOneOrNullResult();
      //print_r($result);die;
      return $result;
   }
}