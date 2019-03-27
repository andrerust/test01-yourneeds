<?php

namespace Main\InsuranceBundle\Helper\Url\Application;

use DateTime;
use Main\InsuranceBundle\Helper\Url\AciUrlBuilder;

class AciApplicationUrlBuilder extends AciUrlBuilder
{
    protected $baseUrl = 'https://www.mr-money.de/module/steuerung.php';

    protected function getBaseUrl()
    {
        $typeIdentifier = $this->type->getIdentifier();
        $phpTypeFileName = ($this->typeIsValid($typeIdentifier)) ? $this->apiTypeMapping[$typeIdentifier] : null;
        if (null != $phpTypeFileName) {
            return $this->baseUrl . '/' . $phpTypeFileName . '.php?id=' . $this->brokerId . '&IP_USER=' . $this->userIp;
        }
        return null;
    }

    private function generatePostalCode()
    {
        $key = 'plz';
        $value = '21075';
        $addresses = $this->user->getUserAddresses();
        foreach ($addresses as $address) {
            if (1 == $address->getIsMain()) {
                if ($address->getPostalCode()
                    && null != $address->getPostalCode()->getZip()
                ) {
                    $value = $address->getPostalCode()->getZip();
                }
            }
        }
        $this->updateUrl($key, $value);
    }


    private function generateNumberOfPersons()
    {
        $key = 'anz';
        $value = 1;
        if (isset($this->structureResult['otherPersons'])
            && $this->structureResult['otherPersons'] == 'yes'
        ) {
            if (isset($this->structureResult['howManyPersons'])
                && $this->structureResult['howManyPersons'] > 1
            ) {
                $value = $this->structureResult['howManyPersons'];
                if ($this->structureResult['howManyPersons'] > 8) {
                    $value = 8;
                }
            }
        }
        $this->indexMaximum = $value;
        $this->updateUrl($key, $value);
    }


    private function generateFirstName()
    {
        $key = 'name' . $this->index;
        $value = '';
        $i = $this->index - 1;
        if (isset($this->structureResult['howManyPersonsEntry'])
            && count($this->structureResult['howManyPersonsEntry']) > 1
        ) {
            if (isset($this->structureResult['howManyPersonsEntry'][$i])) {
                if (isset($this->structureResult['howManyPersonsEntry'][$i]['firstName'])
                ) {
                    $value = $this->structureResult['howManyPersonsEntry'][$i]['firstName'];
                }
            }
        }
        $this->updateUrl($key, $value);
    }

    private function getBirthdate()
    {
        $i = $this->index - 1;
        if (isset($this->structureResult['howManyPersonsEntry'])
            && count($this->structureResult['howManyPersonsEntry']) > 1
        ) {
            if (isset($this->structureResult['howManyPersonsEntry'][$i])) {
                if (isset($this->structureResult['howManyPersonsEntry'][$i]['birthday'])
                ) {
                    return $this->structureResult['howManyPersonsEntry'][$i]['birthday'];
                }
            }
        } else {
            return $this->user->getBirthdate();
        }
        return null;
    }

    private function generateBirthdate()
    {
        //$key = 'gebdatum' . $this->index;
        $birthDate = new DateTime($this->getBirthdate());
        $key1 = 'gebdatum' . $this->index;
        $value1 = $birthDate->format('dd.mm.YYYY');
        $this->updateUrl($key1, $value1);

        $key = 'jj' . $this->index;
        $value = $birthDate->format('Y');
        $this->updateUrl($key, $value);

        $key = 'mm' . $this->index;
        $value = $birthDate->format('m');
        $this->updateUrl($key, $value);

        $key = 'tt' . $this->index;
        $value = $birthDate->format('d');
        $this->updateUrl($key, $value);
    }

    private function generateSex()
    {
        $key = 'geschlecht' . $this->index;
        $value = 'M';
        $i = $this->index - 1;
        if (isset($this->structureResult['howManyPersonsEntry'])
            && count($this->structureResult['howManyPersonsEntry']) > 1
        ) {
            if (isset($this->structureResult['howManyPersonsEntry'][$i])) {
                if (isset($this->structureResult['howManyPersonsEntry'][$i]['sex'])
                ) {
                    if ($this->structureResult['howManyPersonsEntry'][$i]['sex'] == 'm') {
                        $value = 'M';
                    } elseif ($this->structureResult['howManyPersonsEntry'][$i]['sex'] == 'f') {
                        $value = 'W';
                    } else {
                        $value = 'M';
                    }
                }
            }
        }
        $this->updateUrl($key, $value);
    }

    /*
     * SET mandatory
     */
    private function generateJob()
    {
        $key = 'beruf_master' . $this->index;
        $value = 'Angestellte/r';
        /*
         if (isset($this->structureResult['job'])) {
            $value = $this->structureResult['job'];
        }
        */
        $this->updateUrl($key, $value);
    }

    protected function init()
    {
        //parent::init();
        $this->updateUrl('tnr', $this->tariffId);
        $this->updateUrl('tarifnrtemp', $this->tmpTariffId);
        $this->updateUrl('act', 'antrag');
        $this->updateUrl('sp_lang', 'unfall');
    }

    private function generateAddress()
    {
        $keyStreet = 'Strasse2';
        $keyStreetNumber = 'hausnr';
        $keyPostalCode = 'PLZ';
        $keyCityName = 'ort';
        $valuePostalCode = '';
        $valueStreet = '';
        $valueStreetNumber = '';
        $valueCityName = '';
        $addresses = $this->user->getUserAddresses();
        foreach ($addresses as $address) {
            if (1 == $address->getIsMain()) {
                if (null != $address->getStreet()
                    && null != $address->getStreet()->getName()
                    && null != $address->getStreetNumber()
                    && null != $address->getPostalCode()
                    && null != $address->getPostalCode()->getZip()
                    && null != $address->getCity()
                    && null != $address->getCity()->getName()
                ) {
                    $valueStreet = $address->getStreet()->getName();
                    $valueStreetNumber = $address->getStreetNumber();
                    $valuePostalCode = $address->getPostalCode()->getZip();
                    $valueCityName = $address->getCity()->getName();
                }
            }
        }
        $this->updateUrlRaw($keyStreet, $valueStreet);
        $this->updateUrlRaw($keyStreetNumber, $valueStreetNumber);
        $this->updateUrl($keyPostalCode, $valuePostalCode);
        $this->updateUrlRaw($keyCityName, $valueCityName);
    }

    public function addApplication()
    {
        $this->init();
        $this->generateNumberOfPersons();
        $this->generateAddress();
        $this->generatePostalCode();
        $this->generateMainUser();
        for ($i = 2; $i <= $this->indexMaximum; $i++) {
            $this->index = $i;
            $this->generateFirstName();
            $this->generateBirthdate();
            $this->generateSex();
            $this->generateJob();
        }

        /*
        print_r($this->get());
        echo "<br><br>";
        print_r($this->structureResult);
        echo "<br><br>";
        die;
        */
    }
}