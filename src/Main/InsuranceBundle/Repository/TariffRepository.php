<?php

namespace Main\InsuranceBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\ResultSetMapping;
use Main\InsuranceBundle\Entity\Tariff;

class TariffRepository extends ServiceEntityRepository
{
   public function __construct(ManagerRegistry $registry)
   {
      parent::__construct($registry, Tariff::class);
   }

   public function findTariffsByUserId($id = null)
   {
      $rsm = new ResultSetMapping;
      $rsm->addEntityResult('MainInsuranceBundle:UserTariff', 'ut');
      $rsm->addScalarResult('user_id', 'userId');

      $rsm->addEntityResult('MainInsuranceBundle:Tariff', 'tar');
      $rsm->addScalarResult('tariff_id', 'id');
      $rsm->addScalarResult('tariff_name', 'name');
      $rsm->addScalarResult('tariff_type_id', 'typeId');
      $rsm->addScalarResult('method_of_payment', 'methodOfPayment');
      $rsm->addScalarResult('is_active', 'isActive');
      $rsm->addScalarResult('updated_at', 'updatedAt');

      $rsm->addEntityResult('MainInsuranceBundle:TariffRate', 'tr');

      $rsm->addEntityResult('MainInsuranceBundle:TariffType', 'tt');
      $rsm->addScalarResult('short_name', 'shortName');
      $rsm->addScalarResult('identifier', 'identifier');

      $rsm->addEntityResult('MainInsuranceBundle:Company', 'co');
      $rsm->addScalarResult('company_id', 'companyId');
      $rsm->addScalarResult('public_name', 'publicName');
      $rsm->addScalarResult('logo', 'logo');


      $sql = "
        SELECT
          ut.user_id,
          tar.id AS tariff_id,
          tar.name AS tariff_name,
          tar.tariff_type_id,
          tar.method_of_payment,
          tar.is_active,
          tar.updated_at,
          tt.short_name,
          tt.identifier,
          co.id AS company_id,
          co.public_name,
          co.logo
        FROM
          user_tariff ut
        INNER JOIN
          tariff_rate tr ON tr.id = ut.tariff_rate_id
        INNER JOIN
          tariff tar ON tar.id = tr.tariff_id
        INNER JOIN
          tariff_type tt ON tt.id = tar.tariff_type_id
        INNER JOIN
          company co ON co.id = tar.company_id
        WHERE
          ut.user_id = $id
      ";
      $query = $this->_em->createNativeQuery($sql, $rsm);
      $result = $query->getResult();
      //print_r($result);
      return $result;
   }

   public function findTargetGroupsByTariffId($id = null)
   {
      $rsm = new ResultSetMapping;
      $rsm->addEntityResult('MainInsuranceBundle:TargetGroup', 'tg');
      $rsm->addScalarResult('id', 'id');
      $rsm->addScalarResult('name', 'name');

      $sql = "
        SELECT
          tg.id,
          tg.name
        FROM
          tariff_target_group ttg
        INNER JOIN
          target_group tg ON tg.id = ttg.target_group_id
        WHERE
          ttg.tariff_id = $id
      ";
      $query = $this->_em->createNativeQuery($sql, $rsm);
      $result = $query->getResult();
      //print_r($result);
      return $result;
   }

   public function findTariff($id = null)
   {
      $rsm = new ResultSetMapping;
      $rsm->addEntityResult('MainInsuranceBundle:Tariff', 'tar');
      $rsm->addScalarResult('tariff_id', 'id');
      $rsm->addScalarResult('tariff_name', 'tariffName');
      $rsm->addScalarResult('tariff_type_id', 'typeId');
      $rsm->addScalarResult('description', 'description');
      $rsm->addScalarResult('note', 'note');
      $rsm->addScalarResult('method_of_payment', 'methodOfPayment');
      $rsm->addScalarResult('target_groups', 'targetGroups');
      $rsm->addScalarResult('is_active', 'isActive');
      $rsm->addScalarResult('updated_at', 'updatedAt');
      $rsm->addScalarResult('created_at', 'createdAt');

      $rsm->addEntityResult('MainInsuranceBundle:TariffPrivateLiability', 'tpl');
      $rsm->addScalarResult('amount_covered_body_injury', 'amountCoveredBodyInjury');
      $rsm->addScalarResult('amount_covered_material_damage', 'amountCoveredMaterialDamage');
      $rsm->addScalarResult('amount_covered_financial_damage', 'amountCoveredFinancialDamage');
      $rsm->addScalarResult('amount_covered_jung_kids', 'amountCoveredJungKids');
      $rsm->addScalarResult('include_internship', 'includeInternship');
      $rsm->addScalarResult('bad_dept_loss', 'badDeptLoss');
      $rsm->addScalarResult('data_exchange', 'dataExchange');
      $rsm->addScalarResult('include_internship', 'includeInternship');
      $rsm->addScalarResult('own_residential_home_living_in', 'ownResidentialHomeLivingIn');
      $rsm->addScalarResult('own_residential_home_rental_others', 'ownResidentialHomeRentalOthers');
      $rsm->addScalarResult('undeveloped_properties', 'undevelopedProperties');
      $rsm->addScalarResult('rented_properties_abroad', 'rentedPropertiesAbroad');
      $rsm->addScalarResult('water_damage_liability_above_ground', 'waterDamageLiabilityAboveGround');
      $rsm->addScalarResult('water_damage_liability_underground', 'waterDamageLiabilityUnderground');
      $rsm->addScalarResult('take_care_of_dogs', 'takeCareOfDogs');
      $rsm->addScalarResult('ebikes', 'ebikes');
      $rsm->addScalarResult('horses_and_wagons', 'horsesAndWagons');
      $rsm->addScalarResult('gradual_damage', 'gradualDamage');
      $rsm->addScalarResult('acts_of_kindness', 'actsOfKindness');
      $rsm->addScalarResult('damage_to_movables', 'damageToMovables');
      $rsm->addScalarResult('loss_of_private_keys', 'lossOfPrivateKeys');
      $rsm->addScalarResult('loss_of_job_keys', 'lossOfJobKeys');
      $rsm->addScalarResult('with_parent_living_in_house', 'withParentLivingInHouse');
      $rsm->addScalarResult('voluntary_work', 'voluntaryWork');
      $rsm->addScalarResult('childminder_non_commercial', 'childminderNonCommercial');
      $rsm->addScalarResult('discount_balancing', 'discountBalancing');
      $rsm->addScalarResult('renovations', 'renovations');
      $rsm->addScalarResult('surfboards', 'surfboards');
      $rsm->addScalarResult('conditionl_update', 'conditionlUpdate');
      $rsm->addScalarResult('tariff_individual_specials', 'tariffIndividualSpecials');
      $rsm->addScalarResult('run_time', 'runTime');
      $rsm->addScalarResult('retention', 'retention');
      $rsm->addScalarResult('number_of_previous_cases', 'numberOfPreviousCases');

      $rsm->addEntityResult('MainInsuranceBundle:Company', 'co');
      $rsm->addScalarResult('company_id', 'companyId');
      $rsm->addScalarResult('company_name', 'companyName');
      $rsm->addScalarResult('public_name', 'publicName');
      $rsm->addScalarResult('department', 'department');
      $rsm->addScalarResult('contact_person', 'contactPerson');
      $rsm->addScalarResult('email', 'email');
      $rsm->addScalarResult('contact_phone_number', 'contactPhoneNumber');
      $rsm->addScalarResult('logo', 'logo');

      $sql = "
        SELECT
          tar.id AS tariff_id,
          tar.name AS tariff_name,
          tar.tariff_type_id,
          tar.description,
          tar.note,
          tar.is_active,
          tar.updated_at,
          tar.created_at,
          tar.method_of_payment,
          tpl.amount_covered_body_injury,
          tpl.amount_covered_material_damage,
          tpl.amount_covered_financial_damage,
          tpl.amount_covered_jung_kids,
          tpl.include_internship,
          tpl.data_exchange,
          tpl.bad_dept_loss,
          tpl.own_residential_home_living_in,
          tpl.own_residential_home_rental_others,
          tpl.undeveloped_properties,
          tpl.rented_properties_abroad,
          tpl.water_damage_liability_above_ground,
          tpl.water_damage_liability_underground,
          tpl.take_care_of_dogs,
          tpl.ebikes,
          tpl.horses_and_wagons,
          tpl.gradual_damage,
          tpl.acts_of_kindness,
          tpl.damage_to_movables,
          tpl.loss_of_private_keys,
          tpl.loss_of_job_keys,
          tpl.with_parent_living_in_house,
          tpl.voluntary_work,
          tpl.childminder_non_commercial,
          tpl.renovations,
          tpl.discount_balancing,
          tpl.surfboards,
          tpl.conditionl_update,
          tpl.tariff_individual_specials,
          tpl.run_time,
          tpl.retention,
          tpl.number_of_previous_cases,
          co.id AS company_id,
          co.name AS company_name,
          co.public_name,
          co.contact_person,
          co.contact_phone_number,
          co.department,
          co.email,
          co.logo
        FROM
          tariff tar
        INNER JOIN
          tariff_private_liability tpl ON tpl.id = tar.id
        INNER JOIN
          company co ON co.id = tar.company_id
        WHERE
          tar.id = $id
        LIMIT 1
      ";
      $query = $this->_em->createNativeQuery($sql, $rsm);
      $result = $query->getOneOrNullResult();
      //print_r($result);die;
      return $result;
   }


   public function findTariffsWithTargetGroupsByType($typeId = null)
   {
      $rsm = new ResultSetMapping;
      $rsm->addEntityResult('MainInsuranceBundle:Tariff', 'tar');
      $rsm->addScalarResult('tariff_id', 'id');
      $rsm->addScalarResult('tariff_name', 'name');
      $rsm->addScalarResult('tariff_type_id', 'typeId');
      $rsm->addScalarResult('description', 'description');
      $rsm->addScalarResult('is_active', 'isActive');
      $rsm->addScalarResult('updated_at', 'updatedAt');

      $rsm->addEntityResult('MainInsuranceBundle:TariffPrivateLiability', 'tpl');
      $rsm->addScalarResult('amount_covered_body_injury', 'amountCoveredBodyInjury');
      $rsm->addScalarResult('amount_covered_material_damage', 'amountCoveredMaterialDamage');
      $rsm->addScalarResult('amount_covered_financial_damage', 'amountCoveredFinancialDamage');
      $rsm->addScalarResult('amount_covered_jung_kids', 'amountCoveredJungKids');
      $rsm->addScalarResult('data_exchange', 'dataExchange');
      $rsm->addScalarResult('bad_dept_loss', 'badDeptLoss');
      $rsm->addScalarResult('include_internship', 'includeInternship');
      $rsm->addScalarResult('own_residential_home_living_in', 'ownResidentialHomeLivingIn');
      $rsm->addScalarResult('own_residential_home_rental_others', 'ownResidentialHomeRentalOthers');
      $rsm->addScalarResult('undeveloped_properties', 'undevelopedProperties');

      $rsm->addEntityResult('MainInsuranceBundle:Company', 'co');
      $rsm->addScalarResult('company_id', 'companyId');
      $rsm->addScalarResult('company_name', 'companyName');
      $rsm->addScalarResult('public_name', 'publicName');
      $rsm->addScalarResult('contact_person', 'contactPerson');
      $rsm->addScalarResult('contact_phone_number', 'contactPhoneNumber');
      $rsm->addScalarResult('logo', 'logo');

      $rsm->addEntityResult('MainInsuranceBundle:TariffTYpe', 'tt');
      $rsm->addScalarResult('tariff_type_id', 'tariffTypeId');
      $rsm->addScalarResult('identifier', 'identifier');

      $rsm->addEntityResult('MainInsuranceBundle:TariffTargetGroup', 'ttg');

      $rsm->addEntityResult('MainInsuranceBundle:TargetGroup', 'tg');
      $rsm->addScalarResult('tariff_type_id', 'tariffTypeId');
      $rsm->addScalarResult('identifier', 'identifier');

      $sql = "
        SELECT
          tar.id AS tariff_id,
          tar.name AS tariff_name,
          tar.tariff_type_id,
          tar.description,
          tar.note,
          tar.is_active,
          tar.updated_at,
          tar.created_at,
          tpl.amount_covered_body_injury,
          tpl.amount_covered_material_damage,
          tpl.amount_covered_financial_damage,
          tpl.amount_covered_jung_kids,
          tpl.include_internship,
          tpl.data_exchange,
          tpl.bad_dept_loss,
          tpl.own_residential_home_living_in,
          tpl.own_residential_home_rental_others,
          tpl.undeveloped_properties,
          co.id AS company_id,
          co.name AS company_name,
          co.public_name,
          co.contact_person,
          co.contact_phone_number,
          co.department,
          co.email,
          co.logo
        FROM
          tariff tar
        INNER JOIN
          tariff_private_liability tpl ON tpl.id = tar.id
        INNER JOIN
          company co ON co.id = tar.company_id
        INNER JOIN
          tariff_type tt ON tt.id = tar.tariff_type_id
        INNER JOIN
          tariff_target_group ttg ON tar.id = ttg.tariff_id
        INNER JOIN
          target_group tg ON tg.id = ttg.target_group_id
         WHERE
          tt.identifier = '$typeId'
      ";
      $query = $this->_em->createNativeQuery($sql, $rsm);
      $result = $query->getScalarResult();
      //print_r($sql);die;
      return $result;
   }


   public function findTariffsByType($typeId = null)
   {
      $rsm = new ResultSetMapping;
      $rsm->addEntityResult('MainInsuranceBundle:Tariff', 'tar');
      $rsm->addScalarResult('tariff_id', 'id');
      $rsm->addScalarResult('tariff_name', 'name');
      $rsm->addScalarResult('tariff_type_id', 'typeId');
      $rsm->addScalarResult('description', 'description');
      $rsm->addScalarResult('is_active', 'isActive');
      $rsm->addScalarResult('updated_at', 'updatedAt');

      $rsm->addEntityResult('MainInsuranceBundle:TariffPrivateLiability', 'tpl');
      $rsm->addScalarResult('amount_covered_body_injury', 'amountCoveredBodyInjury');
      $rsm->addScalarResult('amount_covered_material_damage', 'amountCoveredMaterialDamage');
      $rsm->addScalarResult('amount_covered_financial_damage', 'amountCoveredFinancialDamage');
      $rsm->addScalarResult('amount_covered_jung_kids', 'amountCoveredJungKids');
      $rsm->addScalarResult('data_exchange', 'dataExchange');
      $rsm->addScalarResult('bad_dept_loss', 'badDeptLoss');
      $rsm->addScalarResult('include_internship', 'includeInternship');
      $rsm->addScalarResult('own_residential_home_living_in', 'ownResidentialHomeLivingIn');
      $rsm->addScalarResult('own_residential_home_rental_others', 'ownResidentialHomeRentalOthers');
      $rsm->addScalarResult('undeveloped_properties', 'undevelopedProperties');

      $rsm->addEntityResult('MainInsuranceBundle:Company', 'co');
      $rsm->addScalarResult('company_id', 'companyId');
      $rsm->addScalarResult('company_name', 'companyName');
      $rsm->addScalarResult('public_name', 'publicName');
      $rsm->addScalarResult('contact_person', 'contactPerson');
      $rsm->addScalarResult('contact_phone_number', 'contactPhoneNumber');
      $rsm->addScalarResult('logo', 'logo');

      $rsm->addEntityResult('MainInsuranceBundle:TariffTYpe', 'tt');
      $rsm->addScalarResult('tariff_type_id', 'tariffTypeId');
      $rsm->addScalarResult('identifier', 'identifier');

      $sql = "
        SELECT
          tar.id AS tariff_id,
          tar.name AS tariff_name,
          tar.tariff_type_id,
          tar.description,
          tar.note,
          tar.is_active,
          tar.updated_at,
          tar.created_at,
          tpl.amount_covered_body_injury,
          tpl.amount_covered_material_damage,
          tpl.amount_covered_financial_damage,
          tpl.amount_covered_jung_kids,
          tpl.include_internship,
          tpl.data_exchange,
          tpl.bad_dept_loss,
          tpl.own_residential_home_living_in,
          tpl.own_residential_home_rental_others,
          tpl.undeveloped_properties,
          co.id AS company_id,
          co.name AS company_name,
          co.public_name,
          co.contact_person,
          co.contact_phone_number,
          co.department,
          co.email,
          co.logo
        FROM
          tariff tar
        INNER JOIN
          tariff_private_liability tpl ON tpl.id = tar.id
        INNER JOIN
          company co ON co.id = tar.company_id
        INNER JOIN
          tariff_type tt ON tt.id = tar.tariff_type_id
         WHERE
          tar.tariff_type_id = '$typeId'
      ";
      $query = $this->_em->createNativeQuery($sql, $rsm);
      $result = $query->getScalarResult();
      //print_r($sql);die;
      return $result;
   }
}
