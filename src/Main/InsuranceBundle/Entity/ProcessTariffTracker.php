<?php

namespace Main\InsuranceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Main\InsuranceBundle\Repository\ProcessTariffTrackerRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="process_tariff_tracker")
 */
class ProcessTariffTracker
{
    /**
     * @var integer $id
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $step;
    
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $specification;
    
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content;
    
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $tmpTariffId;
    
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $tariffId;
    
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $tariffName;
    
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $companyName;
    
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $companyNameShort;
    
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $paymentFlags;
    
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $paymentValues;
    
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isChoosen = false;
    
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $choosenPayment;
    
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $choosenPaymentValue;
    
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $fee;
    
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $userIp;
    
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $allData;
    
    /**
     * @ORM\ManyToOne(targetEntity="Main\InsuranceBundle\Entity\Process", inversedBy="trackedTariffs")
     * @ORM\JoinColumn(name="process_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     */
    private $process;
    
    /**
     * @ORM\ManyToOne(targetEntity="Main\InsuranceBundle\Entity\Type", inversedBy="processTariffTracker", cascade={"persist", "remove"}, fetch="EXTRA_LAZY")
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $type;
    
    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;
    
    /**
     * @return mixed
     */
    public function getUserIp()
    {
        return $this->userIp;
    }
    
    /**
     * @param mixed $userIp
     */
    public function setUserIp($userIp): void
    {
        $this->userIp = $userIp;
    }
    
    /**
     * @return mixed
     */
    public function getCompanyNameShort()
    {
        return $this->companyNameShort;
    }
    
    /**
     * @param mixed $companyNameShort
     */
    public function setCompanyNameShort($companyNameShort)
    {
        $this->companyNameShort = $companyNameShort;
    }
    
    /**
     * @return mixed
     */
    public function getAllData()
    {
        return $this->allData;
    }
    
    /**
     * @param mixed $allData
     */
    public function setAllData($allData)
    {
        $this->allData = $allData;
    }
    
    /**
     * @return mixed
     */
    public function getChoosenPayment()
    {
        return $this->choosenPayment;
    }
    
    /**
     * @param mixed $choosenPayment
     */
    public function setChoosenPayment($choosenPayment)
    {
        $this->choosenPayment = $choosenPayment;
    }
    
    /**
     * @return mixed
     */
    public function getChoosenPaymentValue()
    {
        return $this->choosenPaymentValue;
    }
    
    /**
     * @param mixed $choosenPaymentValue
     */
    public function setChoosenPaymentValue($choosenPaymentValue)
    {
        $this->choosenPaymentValue = $choosenPaymentValue;
    }
    
    /**
     * @return mixed
     */
    public function getIsChoosen()
    {
        return $this->isChoosen;
    }
    
    /**
     * @param mixed $isChoosen
     */
    public function setIsChoosen($isChoosen)
    {
        $this->isChoosen = $isChoosen;
    }
    
    /**
     * @return mixed
     */
    public function getSpecification()
    {
        return $this->specification;
    }
    
    /**
     * @param mixed $specification
     */
    public function setSpecification($specification)
    {
        $this->specification = $specification;
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
    public function getFee()
    {
        return $this->fee;
    }
    
    /**
     * @param mixed $fee
     */
    public function setFee($fee)
    {
        $this->fee = $fee;
    }
    
    /**
     * @return mixed
     */
    public function getTmpTariffId()
    {
        return $this->tmpTariffId;
    }
    
    /**
     * @param mixed $tmpTariffId
     */
    public function setTmpTariffId($tmpTariffId)
    {
        $this->tmpTariffId = $tmpTariffId;
    }
    
    /**
     * @return mixed
     */
    public function getTariffId()
    {
        return $this->tariffId;
    }
    
    /**
     * @param mixed $tariffId
     */
    public function setTariffId($tariffId)
    {
        $this->tariffId = $tariffId;
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
    public function getCompanyName()
    {
        return $this->companyName;
    }
    
    /**
     * @param mixed $companyName
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }
    
    /**
     * @return mixed
     */
    public function getPaymentFlags()
    {
        return $this->paymentFlags;
    }
    
    /**
     * @param mixed $paymentFlags
     */
    public function setPaymentFlags($paymentFlags)
    {
        $this->paymentFlags = $paymentFlags;
    }
    
    /**
     * @return mixed
     */
    public function getPaymentValues()
    {
        return $this->paymentValues;
    }
    
    /**
     * @param mixed $paymentValues
     */
    public function setPaymentValues($paymentValues)
    {
        $this->paymentValues = $paymentValues;
    }
    
    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }
    
    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
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
    public function getProcess()
    {
        return $this->process;
    }
    
    /**
     * @param mixed $process
     */
    public function setProcess($process)
    {
        $this->process = $process;
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
     * Gets triggered only on insert
     * @ORM\PrePersist
     */
    public function onPrePersist()
    {
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
