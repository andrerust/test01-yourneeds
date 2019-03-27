<?php

namespace Main\InsuranceBundle\Helper\Tariff;

use AppBundle\Helper\DateHelper;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Main\AdminBundle\Helper\AbstractARCustomHelper;
use Main\InsuranceBundle\Entity\ProcessTariffTracker;
use Main\InsuranceBundle\Repository\ContractRepository;
use Main\InsuranceBundle\Repository\ProcessTariffTrackerRepository;
use Main\InsuranceBundle\Repository\TariffRepository;
use Main\UserBundle\Repository\UserRepository;
use Psr\Log\LoggerInterface;

/*
	$sHelper = new SurveyStructureHelper($userRepository, $structureRepository, $logger);
	$sHelper->setType($type);
	$sHelper->setUser($user);
	$sHelper->setStructure();
	if (false === $sHelper->hasErrors()) {
		$tmpStruc = $sHelper->getStructureAsArray();
		print_r($tmpStruc);
		echo "<br><br>";
		print_r($sHelper->getStructureValue('type'));
	} else {
		print_r($sHelper->getErrors());
	}
*/

/*
 * called by TarifDeliveryApiController
 */

class TariffHelper extends AbstractARCustomHelper
{
    private $tariffRepository = null;
    private $process = null;
    private $processTariffTrackerRepository = null;
    private $processTrackerEntry = null;
    private $userIp = null;
    
    public function __construct(
        UserRepository $userRepository = null,
        TariffRepository $tariffRepository = null,
        EntityManagerInterface $databaseManager = null,
        $logger = null
    )
    {
        parent::initialize($userRepository, $databaseManager, $logger);
        $this->tariffRepository = $tariffRepository;
    }
    
    public function loadStructureJsonFileByType()
    {
    }
    
    public function saveProcessTrackingEntry($tariff = [],
                                             $step = 0,
                                             $content = '',
                                             $specification = ''
    )
    {
        $tmpProcessTracker = $this->processTariffTrackerRepository->findOneBy(
            [
                'process' => $this->process,
                'type' => $this->type,
                'specification' => $specification
            ],
            [
                'updatedAt' => 'DESC'
            ]
        );
        
        $dateDifference = null;
        if (null !== $tmpProcessTracker && null !== $tmpProcessTracker->getUpdatedAt()) {
            $dateHelper = new DateHelper();
            $dateDifference = $dateHelper->getDateDifferenceInMinutes($tmpProcessTracker->getUpdatedAt(), new DateTime('now'));
        }
        //print_r($tariff);
        $this->processTrackerEntry = new ProcessTariffTracker();
        $this->processTrackerEntry->setProcess($this->process);
        $this->processTrackerEntry->setType($this->type);
        $this->processTrackerEntry->setStep($step);
        $this->processTrackerEntry->setContent($content);
        $this->processTrackerEntry->setSpecification($specification);
        $this->processTrackerEntry->setTmpTariffId($tariff['tariffIdTmp']);
        $this->processTrackerEntry->setTariffId($tariff['tariffId']);
        $this->processTrackerEntry->setTariffName($tariff['tariffName']);
        $this->processTrackerEntry->setCompanyName($tariff['companyName']);
        $this->processTrackerEntry->setCompanyNameShort($tariff['companyNameShort']);
        $this->processTrackerEntry->setPaymentFlags($tariff['paymentInvervalAllowed']);
        $this->processTrackerEntry->setPaymentValues($tariff['paymentInvervalExtraCharge']);
        $this->processTrackerEntry->setFee($tariff['fee']);
        $this->processTrackerEntry->setUserIp($this->userIp);
        //if (null === $dateDifference || $dateDifference > 1) {
            $this->databaseAccessor->persist($this->processTrackerEntry);
            $this->databaseAccessor->flush();
        //}
    }
    
    public function setProcess($process = null)
    {
        if (null != $process) {
            $this->process = $process;
        }
    }
    
    public function getCurrentContractByType(ContractRepository $contractRepository = null)
    {
        $currentTariff = null;
        if (null != $contractRepository) {
            $currentContract = $contractRepository->findOneBy(['user' => $this->user, 'contractType' => $this->type->getIdentifier()]);
            $currentTariff = [];
            if ((isset($currentContract)) && null !== $currentContract->getId() && $currentContract->getId() > 0) {
                $currentTariff['exist'] = 1;
                $currentTariff['tariffIdTmp'] = $currentContract->getId();
                $currentTariff['logo'] = 'none.png';
                //$currentTariff['logo'] = $currentContract->getCompany()->getLogo();
                $currentTariff['tariffName'] = $currentContract->getTariffName();
                $currentTariff['fee'] = $currentContract->getPaymentFee();
            } else {
                $currentTariff['exist'] = 0;
                $currentTariff['tariffIdTmp'] = 0;
                $currentTariff['logo'] = 'none.png';
                $currentTariff['tariffName'] = '---';
                $currentTariff['fee'] = '---';
            }
        }
        return $currentTariff;
    }
    
    
    public function setProcessTariffTrackerRepository(ProcessTariffTrackerRepository $processTariffTrackerRepository = null)
    {
        if (null != $processTariffTrackerRepository) {
            $this->processTariffTrackerRepository = $processTariffTrackerRepository;
        }
    }
    
    public function __toString()
    {
        $response = '';
        if (null != $this->processTrackerEntry) {
            $response .= "Entry : " . $this->processTrackerEntry->getContent();
            $response .= " / ";
            $response .= "Company: " . $this->processTrackerEntry->getCompanyName();
            $response .= " / ";
            $response .= "TariffName : " . $this->processTrackerEntry->getTariffName();
            $response .= "<br>";
            $response .= "TmpTariffId : " . $this->processTrackerEntry->getTmpTariffId();
            $response .= " / ";
            $response .= "TariffId : " . $this->processTrackerEntry->getTariffId();
            $response .= " / ";
            $response .= "ProcessId : " . $this->processTrackerEntry->getProcess()->getId();
        }
        $response .= "<br><br>";
        return $response;
    }
    
    public function setUserIp($string = null)
    {
        $this->userIp = $string;
    }
}