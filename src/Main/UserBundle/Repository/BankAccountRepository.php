<?php

namespace Main\UserBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\ResultSetMapping;
use Main\UserBundle\Entity\BankAccount;

class BankAccountRepository extends ServiceEntityRepository
{
	public function __construct(ManagerRegistry $registry)
	{
		parent::__construct($registry, BankAccount::class);
	}

	public function findByUserId($id = null)
	{
		$rsm = new ResultSetMapping;
		$rsm->addEntityResult('MainUserBundle:BankAccount', 'ba');
		$rsm->addScalarResult('id', 'id');
		$rsm->addScalarResult('iban', 'iban');
		$rsm->addScalarResult('bic', 'bic');
		$rsm->addScalarResult('bank', 'bank');
		$rsm->addScalarResult('is_active', 'isActive');
		$rsm->addScalarResult('is_blocked', 'isBlocked');
		$rsm->addScalarResult('updated_at', 'updatedAt');

		$rsm->addEntityResult('MainUserBundle:Country', 'co');
		$rsm->addScalarResult('country_name', 'countryName');

		$sql = "
        SELECT
          ba.id,
          ba.iban,
          ba.bic,
          ba.bank,
          ba.is_active,
          ba.is_blocked,
          ba.updated_at,
          co.name AS country_name
        FROM
          bank_account ba
        INNER JOIN
          country co ON co.id = ba.country_id
        WHERE
          ba.user_id = $id
        LIMIT 1
      ";
		$query = $this->_em->createNativeQuery($sql, $rsm);
		$result = $query->getOneOrNullResult();
		//print_r($result);die;
		return $result;
	}

}
