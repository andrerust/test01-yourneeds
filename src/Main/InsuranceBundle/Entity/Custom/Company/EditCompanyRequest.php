<?php
namespace Main\InsuranceBundle\Entity\Custom\Company;

use Main\InsuranceBundle\Entity\Company;
use Symfony\Component\Validator\Constraints as Assert;

class EditCompanyRequest
{
	/**
	 * @var string
	 */
	private $name;

	/**
	 * @var string
	 */
	private $publicName;

	/**
	 * @var string
	 */
	protected $department;

	/**
	 * @var string
	 */
	protected $contactPerson;

	/**
	 * @var string
	 */
	private $website;

	/**
	 * @Assert\File(
	 *      mimeTypes={ "image/png", "image/jpeg", "image/jpg", "image/gif" }, groups={"Media"}
	 * )
	 */
	protected $logo;

	/**
	 * @var string
	 */
	protected $note;

	/**
	 * @var string
	 */
	private $faxNumber;

	/**
	 * @var string
	 */
	private $phoneNumberGeneral;

	/**
	 * @var string
	 */
	private $phoneDamageReportGeneral;

	/**
	 * @var string
	 */
	private $phoneDamageReportCar;

	/**
	 * @var string
	 */
	private $phoneDamageReportLaw;

	/**
	 * @var string
	 */
	private $phoneDamageReportHealth;

	/**
	 * @var string
	 */
	private $emailGeneral;

	/**
	 * @var string
	 */
	private $emailBrokerService;

	/**
	 * @var string
	 */
	private $emailTransfer;

	/**
	 * @var string
	 */
	private $emailDamageReport;

	/**
	 * @var string
	 */
	private $emailProvisions;

	/**
	 * @var string
	 */
	private $brokerCourtagePin;

	/**
	 * @var string
	 */
	private $linkBrokerPortal;

	/**
	 * @var string
	 */
	private $brokerPortalUsername;

	/**
	 * @var string
	 */
	private $brokerPortalPassword;

	/**
	 * @var string
	 */
	private $brokerNumberGeneral;

	/**
	 * @var string
	 */
	private $brokerNumberLife;

	/**
	 * @var string
	 */
	private $brokerNumberHealth;

	/**
	 * @var string
	 */
	private $mbpBrokerNo;

	/**
	 * @var string
	 */
	private $isActive;

	public static function factory(Company $entity): self
	{
		//print_r($request->userTitle);die;
		$request = new self();
		$request->name = $entity->getName();
		$request->publicName = $entity->getPublicName();
		$request->department = $entity->getDepartment();
		$request->contactPerson = $entity->getContactPerson();
		$request->website = $entity->getWebsite();
		$request->faxNumber = $entity->getFaxNumber();
		$request->logo = $entity->getLogo();
		$request->note = $entity->getNote();
		$request->isActive = $entity->getIsActive();
		$request->phoneNumberGeneral = $entity->getPhoneNumberGeneral();
		$request->phoneDamageReportGeneral = $entity->getPhoneDamageReportGeneral();
		$request->phoneDamageReportCar = $entity->getPhoneDamageReportCar();
		$request->phoneDamageReportLaw = $entity->getPhoneDamageReportLaw();
		$request->phoneDamageReportHealth = $entity->getPhoneDamageReportHealth();
		$request->emailGeneral = $entity->getEmailGeneral();
		$request->emailBrokerService = $entity->getEmailBrokerService();
		$request->emailTransfer = $entity->getEmailTransfer();
		$request->emailDamageReport = $entity->getEmailDamageReport();
		$request->brokerNumberGeneral = $entity->getBrokerNumberGeneral();
		$request->brokerNumberLife = $entity->getBrokerNumberLife();
		$request->brokerNumberHealth = $entity->getBrokerNumberHealth();
		$request->emailProvisions = $entity->getEmailProvisions();
		$request->brokerCourtagePin = $entity->getBrokerCourtagePin();
		$request->linkBrokerPortal = $entity->getLinkBrokerPortal();
		$request->brokerPortalUsername = $entity->getBrokerPortalUsername();
		$request->brokerPortalPassword = $entity->getBrokerPortalPassword();
		$request->mbpBrokerNo = $entity->getMbpBrokerNo();
		return $request;
	}

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
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getPublicName()
	{
		return $this->publicName;
	}

	/**
	 * @param string $publicName
	 */
	public function setPublicName($publicName)
	{
		$this->publicName = $publicName;
	}

	/**
	 * @return string
	 */
	public function getDepartment()
	{
		return $this->department;
	}

	/**
	 * @param string $department
	 */
	public function setDepartment($department)
	{
		$this->department = $department;
	}

	/**
	 * @return string
	 */
	public function getContactPerson()
	{
		return $this->contactPerson;
	}

	/**
	 * @param string $contactPerson
	 */
	public function setContactPerson($contactPerson)
	{
		$this->contactPerson = $contactPerson;
	}

	/**
	 * @return string
	 */
	public function getPhoneNumberGeneral()
	{
		return $this->phoneNumberGeneral;
	}

	/**
	 * @param string $phoneNumberGeneral
	 */
	public function setPhoneNumberGeneral($phoneNumberGeneral)
	{
		$this->phoneNumberGeneral = $phoneNumberGeneral;
	}

	/**
	 * @return string
	 */
	public function getPhoneDamageReportGeneral()
	{
		return $this->phoneDamageReportGeneral;
	}

	/**
	 * @param string $phoneDamageReportGeneral
	 */
	public function setPhoneDamageReportGeneral($phoneDamageReportGeneral)
	{
		$this->phoneDamageReportGeneral = $phoneDamageReportGeneral;
	}

	/**
	 * @return string
	 */
	public function getPhoneDamageReportCar()
	{
		return $this->phoneDamageReportCar;
	}

	/**
	 * @param string $phoneDamageReportCar
	 */
	public function setPhoneDamageReportCar($phoneDamageReportCar)
	{
		$this->phoneDamageReportCar = $phoneDamageReportCar;
	}

	/**
	 * @return string
	 */
	public function getPhoneDamageReportLaw()
	{
		return $this->phoneDamageReportLaw;
	}

	/**
	 * @param string $phoneDamageReportLaw
	 */
	public function setPhoneDamageReportLaw($phoneDamageReportLaw)
	{
		$this->phoneDamageReportLaw = $phoneDamageReportLaw;
	}

	/**
	 * @return string
	 */
	public function getPhoneDamageReportHealth()
	{
		return $this->phoneDamageReportHealth;
	}

	/**
	 * @param string $phoneDamageReportHealth
	 */
	public function setPhoneDamageReportHealth($phoneDamageReportHealth)
	{
		$this->phoneDamageReportHealth = $phoneDamageReportHealth;
	}

	/**
	 * @return string
	 */
	public function getFaxNumber()
	{
		return $this->faxNumber;
	}

	/**
	 * @param string $faxNumber
	 */
	public function setFaxNumber($faxNumber)
	{
		$this->faxNumber = $faxNumber;
	}

	/**
	 * @return string
	 */
	public function getEmailGeneral()
	{
		return $this->emailGeneral;
	}

	/**
	 * @param string $emailGeneral
	 */
	public function setEmailGeneral($emailGeneral)
	{
		$this->emailGeneral = $emailGeneral;
	}

	/**
	 * @return string
	 */
	public function getEmailBrokerService()
	{
		return $this->emailBrokerService;
	}

	/**
	 * @param string $emailBrokerService
	 */
	public function setEmailBrokerService($emailBrokerService)
	{
		$this->emailBrokerService = $emailBrokerService;
	}

	/**
	 * @return string
	 */
	public function getEmailTransfer()
	{
		return $this->emailTransfer;
	}

	/**
	 * @param string $emailTransfer
	 */
	public function setEmailTransfer($emailTransfer)
	{
		$this->emailTransfer = $emailTransfer;
	}

	/**
	 * @return string
	 */
	public function getEmailDamageReport()
	{
		return $this->emailDamageReport;
	}

	/**
	 * @param string $emailDamageReport
	 */
	public function setEmailDamageReport($emailDamageReport)
	{
		$this->emailDamageReport = $emailDamageReport;
	}

	/**
	 * @return string
	 */
	public function getEmailProvisions()
	{
		return $this->emailProvisions;
	}

	/**
	 * @param string $emailProvisions
	 */
	public function setEmailProvisions($emailProvisions)
	{
		$this->emailProvisions = $emailProvisions;
	}

	/**
	 * @return string
	 */
	public function getBrokerCourtagePin()
	{
		return $this->brokerCourtagePin;
	}

	/**
	 * @param string $brokerCourtagePin
	 */
	public function setBrokerCourtagePin($brokerCourtagePin)
	{
		$this->brokerCourtagePin = $brokerCourtagePin;
	}

	/**
	 * @return string
	 */
	public function getLinkBrokerPortal()
	{
		return $this->linkBrokerPortal;
	}

	/**
	 * @param string $linkBrokerPortal
	 */
	public function setLinkBrokerPortal($linkBrokerPortal)
	{
		$this->linkBrokerPortal = $linkBrokerPortal;
	}

	/**
	 * @return string
	 */
	public function getBrokerPortalUsername()
	{
		return $this->brokerPortalUsername;
	}

	/**
	 * @param string $brokerPortalUsername
	 */
	public function setBrokerPortalUsername($brokerPortalUsername)
	{
		$this->brokerPortalUsername = $brokerPortalUsername;
	}

	/**
	 * @return string
	 */
	public function getBrokerPortalPassword()
	{
		return $this->brokerPortalPassword;
	}

	/**
	 * @param string $brokerPortalPassword
	 */
	public function setBrokerPortalPassword($brokerPortalPassword)
	{
		$this->brokerPortalPassword = $brokerPortalPassword;
	}

	/**
	 * @return string
	 */
	public function getBrokerNumberGeneral()
	{
		return $this->brokerNumberGeneral;
	}

	/**
	 * @param string $brokerNumberGeneral
	 */
	public function setBrokerNumberGeneral($brokerNumberGeneral)
	{
		$this->brokerNumberGeneral = $brokerNumberGeneral;
	}

	/**
	 * @return string
	 */
	public function getBrokerNumberLife()
	{
		return $this->brokerNumberLife;
	}

	/**
	 * @param string $brokerNumberLife
	 */
	public function setBrokerNumberLife($brokerNumberLife)
	{
		$this->brokerNumberLife = $brokerNumberLife;
	}

	/**
	 * @return string
	 */
	public function getBrokerNumberHealth()
	{
		return $this->brokerNumberHealth;
	}

	/**
	 * @param string $brokerNumberHealth
	 */
	public function setBrokerNumberHealth($brokerNumberHealth)
	{
		$this->brokerNumberHealth = $brokerNumberHealth;
	}

	/**
	 * @return string
	 */
	public function getWebsite()
	{
		return $this->website;
	}

	/**
	 * @param string $website
	 */
	public function setWebsite($website)
	{
		$this->website = $website;
	}


	/**
	 * @return string
	 */
	public function getLogo()
	{
		return $this->logo;
	}

	/**
	 * @param string $logo
	 */
	public function setLogo($logo)
	{
		$this->logo = $logo;
	}

	/**
	 * @return string
	 */
	public function getNote()
	{
		return $this->note;
	}

	/**
	 * @param string $note
	 */
	public function setNote($note)
	{
		$this->note = $note;
	}

	/**
	 * @return string
	 */
	public function getIsActive()
	{
		return $this->isActive;
	}

	/**
	 * @param string $isActive
	 */
	public function setIsActive($isActive)
	{
		$this->isActive = $isActive;
	}

}