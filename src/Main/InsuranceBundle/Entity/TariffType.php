<?php

namespace Main\InsuranceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="Main\InsuranceBundle\Repository\TariffTypeRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="tariff_type")
 */
class TariffType
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
	 * @ORM\Column(type="text", nullable=false)
	 */
	private $name;

	/**
	 * @ORM\Column(type="text", nullable=false)
	 */
	private $shortName;

	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $identifier;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isActive = true;

	/**
	 * @ORM\OneToMany(targetEntity="Main\InsuranceBundle\Entity\Structure", mappedBy="type", fetch="EXTRA_LAZY", cascade={"persist"})
	 */
	private $structures;

	/**
	 * @ORM\OneToMany(targetEntity="Main\InsuranceBundle\Entity\Tariff", mappedBy="tariffType", fetch="EXTRA_LAZY", cascade={"persist"})
	 */
	private $tariffs;

	/**
	 * @ORM\OneToMany(targetEntity="Main\InsuranceBundle\Entity\Contract", mappedBy="type", fetch="EXTRA_LAZY", cascade={"persist"})
	 */
	private $contracts;

	public function __construct()
	{
	}

    /**
     * @return mixed
     */
    public function getisActive()
    {
        return $this->isActive;
    }

    /**
     * @param mixed $isActive
     */
    public function setIsActive($isActive): void
    {
        $this->isActive = $isActive;
    }

	/**
	 * @return mixed
	 */
	public function getStructures()
	{
		return $this->structures;
	}

	/**
	 * @param mixed $structures
	 */
	public function setStructures($structures)
	{
		$this->structures = $structures;
	}

	/**
	 * @return mixed
	 */
	public function getContracts()
	{
		return $this->contracts;
	}

	/**
	 * @param mixed $contracts
	 */
	public function setContracts($contracts)
	{
		$this->contracts = $contracts;
	}

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
	public function getShortName()
	{
		return $this->shortName;
	}

	/**
	 * @param mixed $shortName
	 */
	public function setShortName($shortName)
	{
		$this->shortName = $shortName;
	}

	/**
	 * @return mixed
	 */
	public function getTariffs()
	{
		return $this->tariffs;
	}

	/**
	 * @param mixed $tariffs
	 */
	public function setTariffs($tariffs)
	{
		$this->tariffs = $tariffs;
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

}
