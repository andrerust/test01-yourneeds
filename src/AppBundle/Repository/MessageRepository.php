<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Message;
use AppBundle\Entity\Project;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class MessageRepository extends ServiceEntityRepository
{
	/**
	 * @param ManagerRegistry $registry
	 */
	public function __construct(ManagerRegistry $registry)
	{
		parent::__construct($registry, Message::class);
	}

}
