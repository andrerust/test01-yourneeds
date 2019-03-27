<?php

namespace Main\InsuranceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="Main\InsuranceBundle\Repository\MMContractRepository")
 * @ORM\Table(name="mm_contract")
 * @ORM\HasLifecycleCallbacks()
 */
class MMContract
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $pkV;

	/**
	 * @ORM\Column(type="string")
	 * Status
	 */
	private $statusV;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 * Abschlussdatum
	 */
	private $datAbsV;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $idKundeV;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $hstnV;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $tsnV;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $fgstV;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */

	private $sparteV;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $tarifnameV;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $tarnameShortV;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $risikoV;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */

	private $gesellV;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $eurNettoV;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $zahlungsartV;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $zahlwV;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $laufzeitV;


	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $vsnrV;

	/**
	 * @ORM\Column(type="boolean")
	 */
	private $isActive = true;
	/**
	 * @ORM\Column(type="datetime")
	 *
	 * @var \DateTime
	 */
	private $updatedAt;

	/**
	 * @ORM\Column(type="datetime")
	 *
	 * @var \DateTime
	 */
	private $createdAt;

	/**
	 * @ORM\ManyToOne(targetEntity="Main\UserBundle\Entity\User", inversedBy="contracts", cascade={"persist"}, fetch="EXTRA_LAZY")
	 * @ORM\OrderBy({"id" = "DESC"})
	 */
	private $user;

	/**
	 * Gets triggered only on insert
	 * @ORM\PrePersist
	 */
	public function onPrePersist()
	{
		$this->createdAt = new \DateTime("now");
		$this->updatedAt = new \DateTime("now");
	}

	/**
	 * @return mixed
	 */
	public function getVsnrV()
	{
		return $this->vsnrV;
	}

	/**
	 * @param mixed $vsnrV
	 */
	public function setVsnrV($vsnrV)
	{
		$this->vsnrV = $vsnrV;
	}

	/**
	 * @return mixed
	 */
	public function getLaufzeitV()
	{
		return $this->laufzeitV;
	}

	/**
	 * @param mixed $laufzeitV
	 */
	public function setLaufzeitV($laufzeitV)
	{
		$this->laufzeitV = $laufzeitV;
	}

	/**
	 * @return mixed
	 */
	public function getUser()
	{
		return $this->user;
	}

	/**
	 * @param mixed $user
	 */
	public function setUser($user)
	{
		$this->user = $user;
	}

	/**
	 * @return mixed
	 */
	public function getUsers()
	{
		return $this->user;
	}

	/**
	 * @param mixed $user
	 */
	public function setUsers($user)
	{
		$this->user = $user;
	}

	/**
	 * @return mixed
	 */
	public function getStatusV()
	{
		return $this->statusV;
	}

	/**
	 * @param mixed $statusV
	 */
	public function setStatusV($statusV)
	{
		$this->statusV = $statusV;
	}


	/**
	 * @return mixed
	 */
	public function getPkV()
	{
		return $this->pkV;
	}

	/**
	 * @param mixed $pkV
	 */
	public function setPkV($pkV)
	{
		$this->pkV = $pkV;
	}

	/**
	 * @return mixed
	 */
	public function getDatAbsV()
	{
		return $this->datAbsV;
	}

	/**
	 * @param mixed $datAbsV
	 */
	public function setDatAbsV($datAbsV)
	{
		$this->datAbsV = $datAbsV;
	}

	/**
	 * @return mixed
	 */
	public function getIdKundeV()
	{
		return $this->idKundeV;
	}

	/**
	 * @param mixed $idKundeV
	 */
	public function setIdKundeV($idKundeV)
	{
		$this->idKundeV = $idKundeV;
	}

	/**
	 * @return mixed
	 */
	public function getHstnV()
	{
		return $this->hstnV;
	}

	/**
	 * @param mixed $hstnV
	 */
	public function setHstnV($hstnV)
	{
		$this->hstnV = $hstnV;
	}

	/**
	 * @return mixed
	 */
	public function getTsnV()
	{
		return $this->tsnV;
	}

	/**
	 * @param mixed $tsnV
	 */
	public function setTsnV($tsnV)
	{
		$this->tsnV = $tsnV;
	}

	/**
	 * @return mixed
	 */
	public function getFgstV()
	{
		return $this->fgstV;
	}

	/**
	 * @param mixed $fgstV
	 */
	public function setFgstV($fgstV)
	{
		$this->fgstV = $fgstV;
	}

	/**
	 * @return mixed
	 */
	public function getSparteV()
	{
		return $this->sparteV;
	}

	/**
	 * @param mixed $sparteV
	 */
	public function setSparteV($sparteV)
	{
		$this->sparteV = $sparteV;
	}

	/**
	 * @return mixed
	 */
	public function getTarifnameV()
	{
		return $this->tarifnameV;
	}

	/**
	 * @param mixed $tarifnameV
	 */
	public function setTarifnameV($tarifnameV)
	{
		$this->tarifnameV = $tarifnameV;
	}

	/**
	 * @return mixed
	 */
	public function getTarnameShortV()
	{
		return $this->tarnameShortV;
	}

	/**
	 * @param mixed $tarnameShortV
	 */
	public function setTarnameShortV($tarnameShortV)
	{
		$this->tarnameShortV = $tarnameShortV;
	}

	/**
	 * @return mixed
	 */
	public function getRisikoV()
	{
		return $this->risikoV;
	}

	/**
	 * @param mixed $risikoV
	 */
	public function setRisikoV($risikoV)
	{
		$this->risikoV = $risikoV;
	}

	/**
	 * @return mixed
	 */
	public function getGesellV()
	{
		return $this->gesellV;
	}

	/**
	 * @param mixed $gesellV
	 */
	public function setGesellV($gesellV)
	{
		$this->gesellV = $gesellV;
	}

	/**
	 * @return mixed
	 */
	public function getEurNettoV()
	{
		return $this->eurNettoV;
	}

	/**
	 * @param mixed $eurNettoV
	 */
	public function setEurNettoV($eurNettoV)
	{
		$this->eurNettoV = $eurNettoV;
	}

	/**
	 * @return mixed
	 */
	public function getZahlungsartV()
	{
		return $this->zahlungsartV;
	}

	/**
	 * @param mixed $zahlungsartV
	 */
	public function setZahlungsartV($zahlungsartV)
	{
		$this->zahlungsartV = $zahlungsartV;
	}

	/**
	 * @return mixed
	 */
	public function getZahlwV()
	{
		return $this->zahlwV;
	}

	/**
	 * @param mixed $zahlwV
	 */
	public function setZahlwV($zahlwV)
	{
		$this->zahlwV = $zahlwV;
	}

	/**
	 * Gets triggered every time on update
	 * @ORM\PreUpdate
	 */
	public function onPreUpdate()
	{
		$this->updatedAt = new \DateTime("now");
	}

	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param mixed $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getIsActive()
	{
		return $this->isActive;
	}

	/**
	 * @param mixed $isActive
	 */
	public function setIsActive($isActive)
	{
		$this->isActive = $isActive;
	}

	/**
	 * @return \DateTime
	 */
	public function getUpdatedAt()
	{
		return $this->updatedAt;
	}

	/**
	 * @param \DateTime $updatedAt
	 */
	public function setUpdatedAt($updatedAt)
	{
		$this->updatedAt = $updatedAt;
	}

	/**
	 * @return \DateTime
	 */
	public function getCreatedAt()
	{
		return $this->createdAt;
	}

	/**
	 * @param \DateTime $createdAt
	 */
	public function setCreatedAt($createdAt)
	{
		$this->createdAt = $createdAt;
	}

}
