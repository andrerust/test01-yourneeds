<?php

namespace Main\AdminBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\ResultSetMapping;
use Main\AdminBundle\Entity\AddressZipStreet;

class AddressZipStreetRepository extends ServiceEntityRepository
{
	public function __construct(ManagerRegistry $registry)
	{
		parent::__construct($registry, AddressZipStreet::class);
	}
/*
	public function findAll($id = null)
	{
		$rsm = new ResultSetMapping;
		$rsm->addEntityResult('MainUserBundle:Address', 'ad');
		$rsm->addScalarResult('id', 'id');
		$rsm->addScalarResult('user_id', 'userId');
		$rsm->addScalarResult('company_id', 'companyId');
		$rsm->addScalarResult('street', 'street');
		$rsm->addScalarResult('street_number', 'streetNumber');
		$rsm->addScalarResult('postal_code', 'postalCode');

		$rsm->addEntityResult('MainUserBundle:City', 'ci');
		$rsm->addScalarResult('city_name', 'cityName');

		$rsm->addEntityResult('MainUserBundle:Country', 'co');
		$rsm->addScalarResult('country_name', 'countryName');

		$sql = "
        SELECT
          ad.id,
          ad.user_id,
          ad.company_id,
          ad.street,
          ad.street_number,
          ad.postal_code,
          ci.name AS city_name,
          co.name AS country_name
        FROM
          address ad
        INNER JOIN
          city ci ON ci.id = ad.city_id
        INNER JOIN
          country co ON co.id = ad.country_id
      ";
		$query = $this->_em->createNativeQuery($sql, $rsm);
		$result = $query->getScalarResult();
		//print_r($result);die;
		return $result;
	}

	public function findByUserId($id = null)
	{
		$rsm = new ResultSetMapping;
		$rsm->addEntityResult('MainUserBundle:Address', 'ad');
		$rsm->addScalarResult('id', 'id');
		$rsm->addScalarResult('street', 'street');
		$rsm->addScalarResult('street_number', 'streetNumber');
		$rsm->addScalarResult('postal_code', 'postalCode');
		$rsm->addScalarResult('additional_info', 'additionalInfo');
		$rsm->addScalarResult('is_active', 'isActive');
		$rsm->addScalarResult('is_blocked', 'isBlocked');
		$rsm->addScalarResult('updated_at', 'updatedAt');

		$rsm->addEntityResult('MainUserBundle:City', 'ci');
		$rsm->addScalarResult('city_name', 'cityName');

		$rsm->addEntityResult('MainUserBundle:Country', 'co');
		$rsm->addScalarResult('country_name', 'countryName');

		$sql = "
        SELECT
          ad.id,
          ad.street,
          ad.street_number,
          ad.postal_code,
          ad.additional_info,
          ad.updated_at,
          ad.is_active,
          ad.is_blocked,
          ci.name AS city_name,
          co.name AS country_name
        FROM
          address ad
        INNER JOIN
          city ci ON ci.id = ad.city_id
        INNER JOIN
          country co ON co.id = ad.country_id
        WHERE
          ad.user_id = $id
        LIMIT 1
      ";
		$query = $this->_em->createNativeQuery($sql, $rsm);
		$result = $query->getOneOrNullResult();
		//print_r($result);die;
		return $result;
	}
*/
}
