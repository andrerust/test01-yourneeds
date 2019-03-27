<?php

namespace Main\InsuranceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Main\InsuranceBundle\Repository\ProcessRepository")
 * @ORM\Table(name="process")
 * @ORM\HasLifecycleCallbacks()
 */
class Process
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @ORM\ManyToOne(targetEntity="Main\InsuranceBundle\Entity\ProcessType", inversedBy="processes", cascade={"persist", "remove"}, fetch="EXTRA_LAZY")
	 * @ORM\OrderBy({"id" = "DESC"})
	 */
	private $type;

	/**
	 * @ORM\ManyToOne(targetEntity="Main\InsuranceBundle\Entity\ProcessStatus", inversedBy="processes", cascade={"persist", "remove"}, fetch="EXTRA_LAZY")
	 * @ORM\OrderBy({"id" = "DESC"})
	 */
	private $status;

	/**
	 * @ORM\Column(type="string")
	 */
	private $typeContext;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $step;

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
	 * @ORM\ManyToOne(targetEntity="Main\UserBundle\Entity\User", inversedBy="damages")
	 * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
	 */
	private $user;

	/**
	 * @ORM\OneToMany(targetEntity="Main\InsuranceBundle\Entity\ProcessTariffTracker", mappedBy="process", fetch="EXTRA_LAZY", cascade={"persist"})
	 */
	private $trackedTariffs;

	/**
	 * @ORM\OneToMany(targetEntity="Main\InsuranceBundle\Entity\ProcessActivity", mappedBy="process", fetch="EXTRA_LAZY",
	 * cascade={"persist", "remove"})
	 */
	private $activities;

	/**
	 * @return mixed
	 */
	public function getTrackedTariffs()
	{
		return $this->trackedTariffs;
	}

	/**
	 * @param mixed $trackedTariffs
	 */
	public function setTrackedTariffs($trackedTariffs)
	{
		$this->trackedTariffs = $trackedTariffs;
	}

	/**
	 * @return mixed
	 */
	public function getTypeContext()
	{
		return $this->typeContext;
	}

	/**
	 * @param mixed $typeContext
	 */
	public function setTypeContext($typeContext)
	{
		$this->typeContext = $typeContext;
	}

	/**
	 * @return mixed
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * @param mixed $type
	 */
	public function setType($type)
	{
		$this->type = $type;
	}


	/**
	 * @return mixed
	 */
	public function getActivities()
	{
		return $this->activities;
	}

	/**
	 * @param mixed $activities
	 */
	public function setActivities($activities)
	{
		$this->activities = $activities;
	}

	/**
	 * @return mixed
	 */
	public function getStatus()
	{
		return $this->status2;
	}

	/**
	 * @param mixed $status
	 */
	public function setStatus($status)
	{
		$this->status = $status;
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
	public function getStep()
	{
		return $this->step;
	}

	/**
	 * @param mixed $step
	 */
	public function setStep($step)
	{
		$this->step = $step;
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
	 * @param \DateTime $createdAt
	 */
	public function setCreatedAt($createdAt)
	{
		$this->createdAt = $createdAt;
	}

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
	 * Gets triggered every time on update
	 * @ORM\PreUpdate
	 */
	public function onPreUpdate()
	{
		$this->updatedAt = new \DateTime("now");
	}

}
