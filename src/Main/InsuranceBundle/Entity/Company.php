<?php

namespace Main\InsuranceBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="Main\InsuranceBundle\Repository\CompanyRepository")
 * @ORM\Table(name="company")
 * @ORM\HasLifecycleCallbacks()
 */
class Company
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @ORM\Column(type="string")
	 */
	private $name;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $publicName;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $department;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $contactPerson;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $phoneNumberGeneral;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $phoneDamageReportGeneral;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $phoneDamageReportCar;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $phoneDamageReportLaw;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $phoneDamageReportHealth;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $faxNumber;
	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $emailGeneral;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $emailBrokerService;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $emailTransfer;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $emailDamageReport;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $emailProvisions;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $brokerCourtagePin;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $linkBrokerPortal;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $brokerPortalUsername;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $brokerPortalPassword;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $brokerNumberGeneral;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $brokerNumberLife;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $brokerNumberHealth;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $website;
	/**
	 * /**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 * @Assert\File(
	 *      mimeTypes={ "image/png", "image/jpeg", "image/jpg", "image/gif" }
	 * )
	 */
	private $logo;

	/**
	 * @ORM\Column(name="note", type="text", length=4090, nullable=true)
	 */
	protected $note;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $mbpBrokerNo;

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
	 * @ORM\OneToMany(targetEntity="Main\InsuranceBundle\Entity\Tariff", mappedBy="company", fetch="EXTRA_LAZY", cascade={"persist"})
	 * @ORM\OrderBy({"name" = "DESC"})
	 */
	private $tariffs;

	/**
	 * @ORM\OneToMany(targetEntity="Main\UserBundle\Entity\Address", mappedBy="company", fetch="EXTRA_LAZY", cascade={"persist"})
	 * @ORM\OrderBy({"id" = "DESC"})
	 */
	private $addresses;

	/**
	 * @ORM\OneToMany(targetEntity="Main\InsuranceBundle\Entity\Contract", mappedBy="company", fetch="EXTRA_LAZY", cascade={"persist", "remove"})
	 */
	private $contracts;

	/**
	 * @return mixed
	 */
	public function getMbpBrokerNo()
	{
		return $this->mbpBrokerNo;
	}

	/**
	 * @param mixed $mbpBrokerNo
	 */
	public function setMbpBrokerNo($mbpBrokerNo)
	{
		$this->mbpBrokerNo = $mbpBrokerNo;
	}

	/**
	 * @return mixed
	 */
	public function getTariffs()
	{
		return $this->tariffs;
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
	 * @param mixed $tariffs
	 */
	public function setTariffs($tariffs)
	{
		$this->tariffs = $tariffs;
	}

	/**
	 * @return ArrayCollection
	 */
	public function getInsuranceTariffs()
	{
		return $this->insuranceTariffs;
	}

	/**
	 * @param ArrayCollection $insuranceTariffs
	 */
	public function setInsuranceTariffs($insuranceTariffs)
	{
		$this->insuranceTariffs = $insuranceTariffs;
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
	 * @return mixed
	 */
	public function getPublicName()
	{
		return $this->publicName;
	}

	/**
	 * @param mixed $publicName
	 */
	public function setPublicName($publicName)
	{
		$this->publicName = $publicName;
	}

	/**
	 * @return mixed
	 */
	public function getDepartment()
	{
		return $this->department;
	}

	/**
	 * @param mixed $department
	 */
	public function setDepartment($department)
	{
		$this->department = $department;
	}

	/**
	 * @return mixed
	 */
	public function getContactPerson()
	{
		return $this->contactPerson;
	}

	/**
	 * @param mixed $contactPerson
	 */
	public function setContactPerson($contactPerson)
	{
		$this->contactPerson = $contactPerson;
	}

	/**
	 * @return mixed
	 */
	public function getPhoneNumberGeneral()
	{
		return $this->phoneNumberGeneral;
	}

	/**
	 * @param mixed $phoneNumberGeneral
	 */
	public function setPhoneNumberGeneral($phoneNumberGeneral)
	{
		$this->phoneNumberGeneral = $phoneNumberGeneral;
	}

	/**
	 * @return mixed
	 */
	public function getPhoneDamageReportGeneral()
	{
		return $this->phoneDamageReportGeneral;
	}

	/**
	 * @param mixed $phoneDamageReportGeneral
	 */
	public function setPhoneDamageReportGeneral($phoneDamageReportGeneral)
	{
		$this->phoneDamageReportGeneral = $phoneDamageReportGeneral;
	}

	/**
	 * @return mixed
	 */
	public function getPhoneDamageReportCar()
	{
		return $this->phoneDamageReportCar;
	}

	/**
	 * @param mixed $phoneDamageReportCar
	 */
	public function setPhoneDamageReportCar($phoneDamageReportCar)
	{
		$this->phoneDamageReportCar = $phoneDamageReportCar;
	}

	/**
	 * @return mixed
	 */
	public function getPhoneDamageReportLaw()
	{
		return $this->phoneDamageReportLaw;
	}

	/**
	 * @param mixed $phoneDamageReportLaw
	 */
	public function setPhoneDamageReportLaw($phoneDamageReportLaw)
	{
		$this->phoneDamageReportLaw = $phoneDamageReportLaw;
	}

	/**
	 * @return mixed
	 */
	public function getPhoneDamageReportHealth()
	{
		return $this->phoneDamageReportHealth;
	}

	/**
	 * @param mixed $phoneDamageReportHealth
	 */
	public function setPhoneDamageReportHealth($phoneDamageReportHealth)
	{
		$this->phoneDamageReportHealth = $phoneDamageReportHealth;
	}

	/**
	 * @return mixed
	 */
	public function getFaxNumber()
	{
		return $this->faxNumber;
	}

	/**
	 * @param mixed $faxNumber
	 */
	public function setFaxNumber($faxNumber)
	{
		$this->faxNumber = $faxNumber;
	}

	/**
	 * @return mixed
	 */
	public function getEmailGeneral()
	{
		return $this->emailGeneral;
	}

	/**
	 * @param mixed $emailGeneral
	 */
	public function setEmailGeneral($emailGeneral)
	{
		$this->emailGeneral = $emailGeneral;
	}

	/**
	 * @return mixed
	 */
	public function getEmailBrokerService()
	{
		return $this->emailBrokerService;
	}

	/**
	 * @param mixed $emailBrokerService
	 */
	public function setEmailBrokerService($emailBrokerService)
	{
		$this->emailBrokerService = $emailBrokerService;
	}

	/**
	 * @return mixed
	 */
	public function getEmailTransfer()
	{
		return $this->emailTransfer;
	}

	/**
	 * @param mixed $emailTransfer
	 */
	public function setEmailTransfer($emailTransfer)
	{
		$this->emailTransfer = $emailTransfer;
	}

	/**
	 * @return mixed
	 */
	public function getEmailDamageReport()
	{
		return $this->emailDamageReport;
	}

	/**
	 * @param mixed $emailDamageReport
	 */
	public function setEmailDamageReport($emailDamageReport)
	{
		$this->emailDamageReport = $emailDamageReport;
	}

	/**
	 * @return mixed
	 */
	public function getEmailProvisions()
	{
		return $this->emailProvisions;
	}

	/**
	 * @param mixed $emailProvisions
	 */
	public function setEmailProvisions($emailProvisions)
	{
		$this->emailProvisions = $emailProvisions;
	}

	/**
	 * @return mixed
	 */
	public function getBrokerCourtagePin()
	{
		return $this->brokerCourtagePin;
	}

	/**
	 * @param mixed $brokerCourtagePin
	 */
	public function setBrokerCourtagePin($brokerCourtagePin)
	{
		$this->brokerCourtagePin = $brokerCourtagePin;
	}

	/**
	 * @return mixed
	 */
	public function getLinkBrokerPortal()
	{
		return $this->linkBrokerPortal;
	}

	/**
	 * @param mixed $linkBrokerPortal
	 */
	public function setLinkBrokerPortal($linkBrokerPortal)
	{
		$this->linkBrokerPortal = $linkBrokerPortal;
	}

	/**
	 * @return mixed
	 */
	public function getBrokerPortalUsername()
	{
		return $this->brokerPortalUsername;
	}

	/**
	 * @param mixed $brokerPortalUsername
	 */
	public function setBrokerPortalUsername($brokerPortalUsername)
	{
		$this->brokerPortalUsername = $brokerPortalUsername;
	}

	/**
	 * @return mixed
	 */
	public function getBrokerPortalPassword()
	{
		return $this->brokerPortalPassword;
	}

	/**
	 * @param mixed $brokerPortalPassword
	 */
	public function setBrokerPortalPassword($brokerPortalPassword)
	{
		$this->brokerPortalPassword = $brokerPortalPassword;
	}

	/**
	 * @return mixed
	 */
	public function getBrokerNumberGeneral()
	{
		return $this->brokerNumberGeneral;
	}

	/**
	 * @param mixed $brokerNumberGeneral
	 */
	public function setBrokerNumberGeneral($brokerNumberGeneral)
	{
		$this->brokerNumberGeneral = $brokerNumberGeneral;
	}

	/**
	 * @return mixed
	 */
	public function getBrokerNumberLife()
	{
		return $this->brokerNumberLife;
	}

	/**
	 * @param mixed $brokerNumberLife
	 */
	public function setBrokerNumberLife($brokerNumberLife)
	{
		$this->brokerNumberLife = $brokerNumberLife;
	}

	/**
	 * @return mixed
	 */
	public function getBrokerNumberHealth()
	{
		return $this->brokerNumberHealth;
	}

	/**
	 * @param mixed $brokerNumberHealth
	 */
	public function setBrokerNumberHealth($brokerNumberHealth)
	{
		$this->brokerNumberHealth = $brokerNumberHealth;
	}

	/**
	 * @return mixed
	 */
	public function getWebsite()
	{
		return $this->website;
	}

	/**
	 * @param mixed $website
	 */
	public function setWebsite($website)
	{
		$this->website = $website;
	}

	/**
	 * @return mixed
	 */
	public function getLogo()
	{
		return $this->logo;
	}

	/**
	 * @param mixed $logo
	 */
	public function setLogo($logo)
	{
		$this->logo = $logo;
	}

	/**
	 * @return mixed
	 */
	public function getNote()
	{
		return $this->note;
	}

	/**
	 * @param mixed $note
	 */
	public function setNote($note)
	{
		$this->note = $note;
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

	/**
	 * @return mixed
	 */
	public function getAddresses()
	{
		return $this->addresses;
	}

	/**
	 * @param mixed $addresses
	 */
	public function setAddresses($addresses)
	{
		$this->addresses = $addresses;
	}

	/*
	 * constructor
	 */
	public function __construct()
	{
		$this->insuranceTariffs = new ArrayCollection();
		$this->addresses = new ArrayCollection();
		//$this->publishedAt = new \DateTime();
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
}
