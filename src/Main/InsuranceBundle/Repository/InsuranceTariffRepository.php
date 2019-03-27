<?php

namespace Main\InsuranceBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;

class InsuranceTariffRepository extends EntityRepository
{
   /*
   used by AdminUserController->adminUsersAction (list of users)
   */
   public function findIdentifierByUserId($id = null)
   {
      $rsm = new ResultSetMapping;
      $rsm->addEntityResult('MainInsuranceBundle:UserInsuranceTariff', 'ut');

      $rsm->addEntityResult('MainInsuranceBundle:InsuranceTariff', 'ita');
      $rsm->addScalarResult('id', 'id');
      $rsm->addScalarResult('short_name', 'shortName');
      $rsm->addScalarResult('name', 'name');
      $rsm->addScalarResult('amount_of_coverage', 'amountOfCoverage');
      $rsm->addScalarResult('rate', 'rate');
      $rsm->addScalarResult('rate_interval', 'rateInterval');
      $rsm->addScalarResult('retention', 'retention');
      $rsm->addScalarResult('updated_at', 'updatedAt');

      $rsm->addEntityResult('MainInsuranceBundle:TariffType', 'tt');
      $rsm->addScalarResult('identifier', 'identifier');

      $sql = "
        SELECT
          tt.identifier,
          tt.short_name,
          ita.id,
          ita.name,
          ita.amount_of_coverage,
          ita.rate,
          ita.rate_interval,
          ita.retention,
          ita.updated_at
        FROM
          user_insurance_tariff ut
        INNER JOIN
          insurance_tariff ita ON ut.insurance_tariff_id = ita.id
        INNER JOIN
          tariff_type tt ON ita.type_id = tt.id
        WHERE
          ut.user_id = $id
      ";
      $query = $this->_em->createNativeQuery($sql, $rsm);
      $result = $query->getResult();
      //print_r($result);die;
      return $result;
   }

   /*
   used by AdminUserController->adminUserAction
   */
   public function findByUserId($id = null)
   {
      $rsm = new ResultSetMapping;
      $rsm->addEntityResult('MainInsuranceBundle:InsuranceTariff', 'ita');
      $rsm->addScalarResult('tariff_id', 'tariffId');
      $rsm->addScalarResult('type_id', 'typeId');
      $rsm->addScalarResult('tariff_name', 'tariffName');
      $rsm->addScalarResult('amount_of_coverage', 'amountOfCoverage');
      $rsm->addScalarResult('rate', 'rate');
      $rsm->addScalarResult('rate_interval', 'rateInterval');
      $rsm->addScalarResult('retention', 'retention');
      $rsm->addScalarResult('updated_at', 'updatedAt');

      $rsm->addEntityResult('MainInsuranceBundle:Company', 'co');
      $rsm->addScalarResult('public_name', 'publicName');
      $rsm->addScalarResult('logo', 'logo');

      $rsm->addEntityResult('MainInsuranceBundle:UserInsuranceTariff', 'ut');
      $rsm->addScalarResult('user_id', 'userId');
      $sql = "
        SELECT
          ita.id AS tariff_id,
          ita.insurance_id,
          ita.name AS tariff_name,
          ita.type_id,
          ita.amount_of_coverage,
          ita.rate,
          ita.rate_interval,
          ita.retention,
          ita.updated_at,
          co.public_name,
          co.logo,
          ut.user_id
        FROM
          insurance_tariff ita
        INNER JOIN
          company co ON co.id = ita.company_id
        INNER JOIN
          user_insurance_tariff ut ON ut.insurance_tariff_id = ita.id
        WHERE
          ut.user_id = $id
      ";
      $query = $this->_em->createNativeQuery($sql, $rsm);
      $result = $query->getResult();
      //print_r($result);die;
      return $result;
   }

   public function findTariff($id = null)
   {
      $rsm = new ResultSetMapping;
      $rsm->addEntityResult('MainInsuranceBundle:InsuranceTariff', 'ita');
      $rsm->addScalarResult('tariff_id', 'tariffId');
      $rsm->addScalarResult('insurance_id', 'insuranceId');
      $rsm->addScalarResult('type_id', 'typeId');
      $rsm->addScalarResult('tariff_name', 'tariffName');
      $rsm->addScalarResult('description', 'description');
      $rsm->addScalarResult('amount_of_coverage', 'amountOfCoverage');
      $rsm->addScalarResult('rate', 'rate');
      $rsm->addScalarResult('rate_interval', 'rateInterval');
      $rsm->addScalarResult('has_retention', 'hasRetention');
      $rsm->addScalarResult('retention', 'retention');
      $rsm->addScalarResult('has_discount', 'hasDiscount');
      $rsm->addScalarResult('discount_name', 'discountName');
      $rsm->addScalarResult('discount_percentage', 'discountPercentage');
      $rsm->addScalarResult('age_from', 'ageFrom');
      $rsm->addScalarResult('age_until', 'ageUntil');
      $rsm->addScalarResult('note', 'note');
      $rsm->addScalarResult('is_active', 'isActive');
      $rsm->addScalarResult('updated_at', 'updatedAt');
      $rsm->addScalarResult('created_at', 'createdAt');

      $rsm->addEntityResult('MainInsuranceBundle:Company', 'co');
      $rsm->addScalarResult('company_name', 'companyName');
      $rsm->addScalarResult('public_name', 'publicName');
      $rsm->addScalarResult('department', 'department');
      $rsm->addScalarResult('contact_person', 'contactPerson');
      $rsm->addScalarResult('email', 'email');
      $rsm->addScalarResult('contact_phone_number', 'contactPhoneNumber');
      $rsm->addScalarResult('logo', 'logo');

      $sql = "
        SELECT
          ita.id AS tariff_id,
          ita.insurance_id,
          ita.name AS tariff_name,
          ita.type_id,
          ita.description,
          ita.amount_of_coverage,
          ita.rate,
          ita.rate_interval,
          ita.has_discount,
          ita.discount_name,
          ita.discount_percentage,
          ita.age_from,
          ita.age_until,
          ita.retention,
          ita.note,
          ita.is_active,
          ita.updated_at,
          ita.created_at,
          co.name AS company_name,
          co.public_name,
          co.contact_person,
          co.contact_phone_number,
          co.department,
          co.email,
          co.logo
        FROM
          insurance_tariff ita
        INNER JOIN
          company co ON co.id = ita.company_id
        WHERE
          ita.id = $id
        LIMIT 1
      ";
      $query = $this->_em->createNativeQuery($sql, $rsm);
      $result = $query->getOneOrNullResult();
      //print_r($result);die;
      return $result;
   }

}