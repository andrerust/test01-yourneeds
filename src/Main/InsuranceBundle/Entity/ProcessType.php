<?php

namespace Main\InsuranceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Main\InsuranceBundle\Repository\ProcessTypeRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="process_type")
 */
class ProcessType
{
	/**
	 * @var integer $id
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @ORM\Column(type="string")
	 */
	private $name;

	/**
	 * @ORM\Column(type="string")
	 */
	private $identifier;

	/**
	 * @ORM\OneToMany(targetEntity="Main\InsuranceBundle\Entity\Process", mappedBy="status", cascade={"persist", "remove"}, fetch="EXTRA_LAZY")
	 */
	private $processes;

	/**
	 * @return mixed
	 */
	public function getIdentifier()
	{
		return $this->identifier;
	}

	/**
	 * @param mixed $identifier
	 */
	public function setIdentifier($identifier)
	{
		$this->identifier = $identifier;
	}

	/**
	 * @return mixed
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param mixed $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getProcesses()
	{
		return $this->processes;
	}

	/**
	 * @param mixed $processes
	 */
	public function setProcesses($processes)
	{
		$this->processes = $processes;
	}


}
