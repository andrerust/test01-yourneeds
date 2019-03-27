<?php

namespace Main\InsuranceBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Main\UserBundle\Entity\User;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="Main\InsuranceBundle\Repository\ContractRepository")
 * @ORM\Table(name="contract")
 * @ORM\HasLifecycleCallbacks()
 */
class Contract
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @ORM\ManyToOne(targetEntity="Main\InsuranceBundle\Entity\Type", inversedBy="contracts")
	 * @ORM\JoinColumn(name="tariff_type_id", referencedColumnName="id")
	 */
	private $contractType;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $externalId;

	/**
	 * @ORM\Column(type="string")
	 */
	private $status;

	/**
	 * @ORM\Column(type="datetime", nullable=true)
	 * @var \DateTime
	 */
	private $dateRuntimeBegin;

	/**
	 * @ORM\Column(type="datetime", nullable=true)
	 * @var \DateTime
	 */
	private $dateRuntimeEnd;

	/**
	 * @ORM\Column(type="datetime", nullable=true)
	 * @var \DateTime
	 */
	private $dateProtectionBegin;

	/**
	 * @ORM\Column(type="datetime", nullable=true)
	 * @var \DateTime
	 */
	private $dateProtectionEnd;

	/**
	 * @ORM\Column(type="datetime", nullable=true)
	 * @var \DateTime
	 */
	private $dateCanceled;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $tariffName;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $paymentInterval;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $paymentFee;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $runtime;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $retention;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $insuranceNumber;

	/**
	 * @ORM\Column(type="boolean")
	 */
	private $isActive = true;

	/**
	 * @ORM\Column(type="datetime")
	 * @var \DateTime
	 */
	private $updatedAt;

	/**
	 * @ORM\Column(type="datetime")
	 * @var \DateTime
	 */
	private $createdAt;

	/**
	 * @ORM\ManyToOne(targetEntity="Main\InsuranceBundle\Entity\Company", inversedBy="contracts", cascade={"persist"}, fetch="EXTRA_LAZY")
	 * @ORM\OrderBy({"id" = "DESC"})
	 */
	private $company;

	/**
	 * @ORM\ManyToOne(targetEntity="Main\UserBundle\Entity\User", inversedBy="contracts", cascade={"persist"}, fetch="EXTRA_LAZY")
	 * @ORM\OrderBy({"id" = "DESC"})
	 */
	private $user;

    /**
     * @ORM\OneToMany(targetEntity="Main\InsuranceBundle\Entity\Damage", mappedBy="contract", cascade={"persist", "remove"}, fetch="EXTRA_LAZY")
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $damages;

	/**
	 * Is the given User the author of this Post?
	 *
	 * @return bool
	 */
	public function isOwner(User $user = null)
	{
		return $user && $user->getId() === $this->getUser()->getId();
	}

    /**
     * @return mixed
     */
    public function getDamages()
    {
        return $this->damages;
    }

    /**
     * @param mixed $damages
     */
    public function setDamages($damages): void
    {
        $this->damages = $damages;
    }

	/**
	 * Gets triggered only on insert
	 * @ORM\PrePersist
	 */
	public function onPrePersist()
	{
		$this->createdAt = new DateTime("now");
		$this->updatedAt = new DateTime("now");
	}

	/**
	 * @return mixed
	 */
	public function getDateRuntimeBegin()
	{
		return $this->dateRuntimeBegin;
	}

	/**
	 * @param mixed $dateRuntimeBegin
	 */
	public function setDateRuntimeBegin($dateRuntimeBegin)
	{
		$this->dateRuntimeBegin = $dateRuntimeBegin;
	}

	/**
	 * @return \DateTime
	 */
	public function getDateCanceled()
	{
		return $this->dateCanceled;
	}

	/**
	 * @param \DateTime $dateCanceled
	 */
	public function setDateCanceled($dateCanceled)
	{
		$this->dateCanceled = $dateCanceled;
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
	public function getId()
	{
		return $this->id;
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
	 * @return mixed
	 */
	public function getExternalId()
	{
		return $this->externalId;
	}

	/**
	 * @param mixed $externalId
	 */
	public function setExternalId($externalId)
	{
		$this->externalId = $externalId;
	}

	/**
	 * @return mixed
	 */
	public function getStatus()
	{
		return $this->status;
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
	public function getDateRuntimeEnd()
	{
		return $this->dateRuntimeEnd;
	}

	/**
	 * @param mixed $dateRuntimeEnd
	 */
	public function setDateRuntimeEnd($dateRuntimeEnd)
	{
		$this->dateRuntimeEnd = $dateRuntimeEnd;
	}

	/**
	 * @return mixed
	 */
	public function getDateProtectionBegin()
	{
		return $this->dateProtectionBegin;
	}

	/**
	 * @param mixed $dateProtectionBegin
	 */
	public function setDateProtectionBegin($dateProtectionBegin)
	{
		$this->dateProtectionBegin = $dateProtectionBegin;
	}

	/**
	 * @return mixed
	 */
	public function getDateProtectionEnd()
	{
		return $this->dateProtectionEnd;
	}

	/**
	 * @param mixed $dateProtectionEnd
	 */
	public function setDateProtectionEnd($dateProtectionEnd)
	{
		$this->dateProtectionEnd = $dateProtectionEnd;
	}

	/**
	 * @return mixed
	 */
	public function getContractType()
	{
		return $this->contractType;
	}

	/**
	 * @param mixed $contractType
	 */
	public function setContractType($contractType)
	{
		$this->contractType = $contractType;
	}


	/**
	 * @return mixed
	 */
	public function getTariffName()
	{
		return $this->tariffName;
	}

	/**
	 * @param mixed $tariffName
	 */
	public function setTariffName($tariffName)
	{
		$this->tariffName = $tariffName;
	}

	/**
	 * @return mixed
	 */
	public function getCompany()
	{
		return $this->company;
	}

	/**
	 * @param mixed $company
	 */
	public function setCompany($company)
	{
		$this->company = $company;
	}

	/**
	 * @return mixed
	 */
	public function getPaymentInterval()
	{
		return $this->paymentInterval;
	}

	/**
	 * @param mixed $paymentInterval
	 */
	public function setPaymentInterval($paymentInterval)
	{
		$this->paymentInterval = $paymentInterval;
	}

	/**
	 * @return mixed
	 */
	public function getPaymentFee()
	{
		return $this->paymentFee;
	}

	/**
	 * @param mixed $paymentFee
	 */
	public function setPaymentFee($paymentFee)
	{
		$this->paymentFee = $paymentFee;
	}

	/**
	 * @return mixed
	 */
	public function getRuntime()
	{
		return $this->runtime;
	}

	/**
	 * @param mixed $runtime
	 */
	public function setRuntime($runtime)
	{
		$this->runtime = $runtime;
	}

	/**
	 * @return mixed
	 */
	public function getRetention()
	{
		return $this->retention;
	}

	/**
	 * @param mixed $retention
	 */
	public function setRetention($retention)
	{
		$this->retention = $retention;
	}

	/**
	 * @return mixed
	 */
	public function getInsuranceNumber()
	{
		return $this->insuranceNumber;
	}

	/**
	 * @param mixed $insuranceNumber
	 */
	public function setInsuranceNumber($insuranceNumber)
	{
		$this->insuranceNumber = $insuranceNumber;
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

	/**
	 * Gets triggered every time on update
	 * @ORM\PreUpdate
	 */
	public function onPreUpdate()
	{
		$this->updatedAt = new DateTime("now");
	}

}
