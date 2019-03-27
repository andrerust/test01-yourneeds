<?php
namespace Main\InsuranceBundle\Entity\Custom\Contract;

use AppBundle\AppInterface\iStringHelper;
use AppBundle\Helper\StringHelper;
use DateTime;
use Main\InsuranceBundle\Entity\Contract;
use Symfony\Component\Validator\Constraints as Assert;

class EditContractRequest implements iStringHelper
{
	private $externalId;

	private $status;

	private $dateRuntimeBegin;

	private $dateRuntimeEnd;

	private $dateProtectionBegin;

	private $dateProtectionEnd;

	private $dateCanceled;

	private $contractType;

	private $tariffName;

	private $paymentInterval;

	private $paymentFee;

	private $runtime;

	private $retention;

	private $insuranceNumber;

	private $isActive = true;

	private $updatedAt;

	private $createdAt;

	private $company;

	private $user;

	public static function convertStringToDate($string)
	{
		return StringHelper::convertStringToDate($string);
	}

	public static function convertDateToString($date)
	{
		return StringHelper::convertDateToString($date);
	}


	public static function factory(Contract $entity): self
	{
		//print_r($request->userTitle);die;
		$request = new self();
		$request->externalId = $entity->getExternalId();
		$request->status = $entity->getStatus();
		$request->dateRuntimeBegin = self::convertDateToString($entity->getDateRuntimeBegin());
		$request->dateRuntimeEnd = self::convertDateToString($entity->getDateRuntimeEnd());
		$request->dateProtectionBegin = self::convertDateToString($entity->getDateProtectionBegin());
		$request->dateProtectionEnd = self::convertDateToString($entity->getDateProtectionEnd());
		$request->tariffName = $entity->getTariffName();
		$request->paymentInterval = $entity->getPaymentInterval();
		$request->paymentFee = $entity->getPaymentFee();
		$request->runtime = $entity->getRuntime();
		$request->retention = $entity->getRetention();
		$request->insuranceNumber = $entity->getInsuranceNumber();
		$request->isActive = $entity->getIsActive();
		return $request;
	}

	/**
	 * @return mixed
	 */
	public function getDateCanceled()
	{
		return $this->dateCanceled;
	}

	/**
	 * @param mixed $dateCanceled
	 */
	public function setDateCanceled($dateCanceled)
	{
		$this->dateCanceled = $dateCanceled;
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
	 * @return boolean
	 */
	public function getIsActive()
	{
		return $this->isActive;
	}

	/**
	 * @param boolean $isActive
	 */
	public function setIsActive($isActive)
	{
		$this->isActive = $isActive;
	}

	/**
	 * @return mixed
	 */
	public function getUpdatedAt()
	{
		return $this->updatedAt;
	}

	/**
	 * @param mixed $updatedAt
	 */
	public function setUpdatedAt($updatedAt)
	{
		$this->updatedAt = $updatedAt;
	}

	/**
	 * @return mixed
	 */
	public function getCreatedAt()
	{
		return $this->createdAt;
	}

	/**
	 * @param mixed $createdAt
	 */
	public function setCreatedAt($createdAt)
	{
		$this->createdAt = $createdAt;
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

}