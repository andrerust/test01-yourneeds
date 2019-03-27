<?php

namespace Main\InsuranceBundle\Helper\Url;

use Main\AdminBundle\Helper\AbstractARCustomHelper;

abstract class AbstractUrlBuilder extends AbstractARCustomHelper
{
    protected $url = "";
    protected $structureResult = null;
    protected $brokerId = null;
    protected $brokerSubId = '';
    protected $userIp = null;
    protected $tmpTariffId = false;
    protected $tariffId = false;
    protected $payment = 1;
    protected $showMissing = false;
    protected $baseUrl = 'https://www.mr-money.de/module/kern';
    protected $ipAddOn;
    
    protected function init()
    {
        $this->updateUrl('antrag_direkt', '2');
        //$this->updateUrl('tnr', $this->tariffId);
    }
    
    protected function getBaseUrl()
    {
        $typeIdentifier = $this->type->getIdentifier();
        $phpTypeFileName = ($this->typeIsValid($typeIdentifier)) ? $this->apiTypeMapping[$typeIdentifier] : null;
        if (null != $phpTypeFileName) {
            return $this->baseUrl . '/' . $phpTypeFileName . '.php?id=' . $this->brokerId . $this->brokerSubId . '&IP_USER=' . $this->userIp . '&lvgon=1&lvgfragenoff=1' . $this->getMissingPart();
        }
        return null;
    }
    
    protected function updateUrl($key, $value)
    {
        if (!empty($value) || $value >= 0) {
            $this->url .= '&' . $key . "=" . $value;
            //$this->url .= '&' . $key . "=" . $this->encode($value);
        }
    }

    protected function updateUrlWithSympleEncode($key, $value)
    {
        if (!empty($value) || $value >= 0) {
            $this->url .= '&' . $key . "=" . html_entity_decode($value);
            //$this->url .= '&' . $key . "=" . $this->encode($value);
        }
    }

    protected function updateUrlRaw($key, $value)
    {
        if (!empty($value)) {
            $this->url .= '&' . $key . "=" . rawurlencode($value);
        }
    }
    
    protected function encode($string)
    {
        return rawurlencode(trim($string));
        //return trim($string);
    }
    
    protected function generateAge()
    {
        $key = 'alter';
        $value = '0';
        $dateOfBirth = $this->user->getBirthdate();
        if ($dateOfBirth) {
            $today = date("d-m-Y");
            $diff = date_diff(date_create($dateOfBirth), date_create($today));
            $value = $diff->format('%Y');
        }
        $this->updateUrl($key, $value);
    }
    
    public function getMissingPart()
    {
        if (true == $this->showMissing) {
            return '&fehlende_tarife=1';
        }
        return '';
    }
    
    public function get()
    {
        return $this->getBaseUrl() . $this->url;
    }
    
    public function setShowMissing($bool = false)
    {
        $this->showMissing = $bool;
    }
    
    public function getIpAddOn()
    {
        return $this->ipAddOn;
    }
    
    public function setIpAddOn($string = null)
    {
        if (null != $string) {
            $this->ipAddOn = $string;
        } else {
            $this->ipAddOn = rand(10000, 99999);
        }
    }
    
    public function getUserIp()
    {
        return $this->userIp;
    }
    
    public function setUserIp($userIp = null)
    {
        if (null != $userIp) {
            $this->userIp = $userIp;
        } else {
            //$this->userIp = (null != $ip) ? $ip : $_SERVER['SERVER_ADDR'] . '-12345';
            $this->userIp = $_SERVER['SERVER_ADDR'] . '-' . $this->ipAddOn;
        }
    }
    
    public function setBrokerId($id = null)
    {
        $this->brokerId = $id;
    }
    
    public function setBrokerSubId($id = null)
    {
        $this->brokerSubId = '&subid=' . $id;
    }
    
    public function setStructure($structure = null)
    {
        $this->structureResult = $structure;
    }
    
    public function setTariffIdTmp($tmpTariffId = null)
    {
        $this->tmpTariffId = $tmpTariffId;
    }
    
    public function setTariffId($tariffId = null)
    {
        $this->tariffId = $tariffId;
    }
    
    public function setPayment($payment = null)
    {
        $this->payment = $payment;
    }
}