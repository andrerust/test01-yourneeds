<?php

namespace Main\InsuranceBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\ResultSetMapping;
use Main\InsuranceBundle\Entity\Contract;

class ContractRepository extends ServiceEntityRepository
{

	public function __construct(ManagerRegistry $registry)
	{
		parent::__construct($registry, Contract::class);
	}

	public function getAll()
	{
		$rsm = new ResultSetMapping;
		$rsm->addEntityResult('MainInsuranceBundle:Company', 'c');
		$rsm->addScalarResult('id', 'id');
		$rsm->addScalarResult('name', 'name');
		$rsm->addScalarResult('department', 'department');
		$rsm->addScalarResult('contact_person', 'contactPerson');
		$rsm->addScalarResult('contact_phone_number', 'contactPhoneNumber');
		$rsm->addScalarResult('email', 'email');
		$rsm->addScalarResult('logo', 'logo');
		$rsm->addScalarResult('is_active', 'isActive');
		$rsm->addScalarResult('updated_at', 'updatedAt');

		$sql = '
        SELECT
          c.id,
          c.name,
          c.department,
          c.contact_person,
          c.contact_phone_number,
          c.email,
          c.logo,
          c.is_active,
          c.updated_at
        FROM
          company c
      ';
		$query = $this->_em->createNativeQuery($sql, $rsm);
		$result = $query->getScalarResult();
		//print_r($result); die;
		return $result;
	}

}