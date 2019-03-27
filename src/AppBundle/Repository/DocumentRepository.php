<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Document;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\ResultSetMapping;

class DocumentRepository extends ServiceEntityRepository
{
	/**
	 * @param ManagerRegistry $registry
	 */
	public function __construct(ManagerRegistry $registry)
	{
		parent::__construct($registry, Document::class);
	}

	public function getManagerMandate($userId, $typeId)
	{
		$rsm = new ResultSetMapping;
		$rsm->addEntityResult('AppBundle:Document', 'd');
		$rsm->addScalarResult('id', 'id');
		$rsm->addScalarResult('name', 'name');

		$sql = '
        SELECT
          d.id,
          d.name,
          d.document_type_id
        FROM
          document d
				WHERE
          user_id = ' . $userId . ' AND document_type_id = ' . $typeId . '
      ';

		$query = $this->_em->createNativeQuery($sql, $rsm);
		$result = $query->getScalarResult();
		//print_r($result);die;
		return $result;
	}


}
