<?php

namespace Main\InsuranceBundle\Helper\Url\Application;

use DateTime;
use Main\InsuranceBundle\Helper\Url\RbiUrlBuilder;

class RbiApplicationUrlBuilder extends RbiUrlBuilder
{
    protected function getBaseUrl()
    {
        $typeIdentifier = $this->type->getIdentifier();
        $phpTypeFileName = ($this->typeIsValid($typeIdentifier)) ? $this->apiTypeMapping[$typeIdentifier] : null;
        if (null != $phpTypeFileName) {
            return $this->baseUrl . '/' . $phpTypeFileName . '.php?id=' . $this->brokerId . $this->brokerSubId . '&IP_USER=' . $this->userIp;
        }
        return null;
    }

    private function generatePhoneNumber()
    {
        $key = 'Telefon';
        $value = '';
        if (null != $this->user->getPhoneNumber()) {
            $value = $this->user->getPhoneNumber();
        }
        $this->updateUrl($key, $value);
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
        if (isset($this->structureResult['address'])
            && !empty($this->structureResult['address'])
        ) {
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
        }
        $this->updateUrlRaw($keyStreet, $valueStreet);
        $this->updateUrlRaw($keyStreetNumber, $valueStreetNumber);
        $this->updateUrlRaw($keyPostalCode, $valuePostalCode);
        $this->updateUrlRaw($keyCityName, $valueCityName);


        $keyRiskStreet = 'Risiko_Strasse2';
        $keyRiskStreetNumber = 'Risiko_Hausnr';
        $keyRiskPostalCode = 'Risiko_PLZ';
        $keyRiskCityName = 'Risiko_Ort';
        $valueRiskStreet = '';
        $valueRiskStreetNumber = '';
        $valueRiskPostalCode = '';
        $valueRiskCityName = '';
        $addresses = $this->user->getUserAddresses();
        foreach ($addresses as $address) {
            if (null != $address->getStreet()
                && null != $address->getStreet()->getName()
                && null != $address->getStreetNumber()
                && null != $address->getPostalCode()
                && null != $address->getPostalCode()->getZip()
                && null != $address->getCity()
                && null != $address->getCity()->getName()
            ) {
                $valueRiskStreet = $address->getStreet()->getName();
                $valueRiskStreetNumber = $address->getStreetNumber();
                $valueRiskPostalCode = $address->getPostalCode()->getZip();
                $valueRiskCityName = $address->getCity()->getName();
            }
        }

        $this->updateUrlRaw($keyRiskStreet, $valueRiskStreet);
        $this->updateUrlRaw($keyRiskStreetNumber, $valueRiskStreetNumber);
        $this->updateUrlRaw($keyRiskPostalCode, $valueRiskPostalCode);
        $this->updateUrlRaw($keyRiskCityName, $valueRiskCityName);
    }


    private function generateBankAccount()
    {
        $keyIban = 'sepa_iban';
        $keyBic = 'sepa_bic';
        $keyBank = 'sepa_bankname';
        $valueIban = 'ort';
        $valueBic = '';
        $valueBank = '';
        if (null != $this->user->getBankAccounts()
            && count($this->user->getBankAccounts()) > 0
            && isset($this->user->getBankAccounts()[0])
        ) {
            $bankAccount = $this->user->getBankAccounts()[0];
            if (null != $bankAccount) {
                $valueIban = $bankAccount->getIban();
                $valueBic = $bankAccount->getBic();
                $valueBank = $bankAccount->getBank();
            }
        }
        $this->updateUrl($keyIban, $valueIban);
        $this->updateUrl($keyBic, $valueBic);
        $this->updateUrl($keyBank, $valueBank);
    }

    /*
 * SET main user and other users
 */
    private function generateMainUser()
    {
        if (null != $this->user->getFirstName()
            && null != $this->user->getLastName()
            && null != $this->user->getBirthdate()
            && $this->user->getGender()
            && $this->user->getEmail()
        ) {
            $key = 'Vorname';
            $value = $this->user->getFirstName();
            $this->updateUrl($key, $value);

            $key = 'Name';
            $value = $this->user->getLastName();
            $this->updateUrl($key, $value);

            $birthDate = new DateTime($this->user->getBirthdate());
            $key1 = 'Geb_datum';
            $value1 = $birthDate->format('d.m.Y');
            $this->updateUrl($key1, $value1);

            $key = 'Anrede';
            if ($this->user->getGender() == '1') {
                $value = 'Herr';
            } else if ($this->user->getGender() == '2') {
                $value = 'Frau';
            }
            $this->updateUrl($key, $value);

            $key = 'frommail';
            $value = $this->user->getEmail();
            $this->updateUrl($key, $value);

            /*
            if (null != $this->user->getJobGroup()->getName()) {
                $key = 'Beruf';
                $value = $this->user->getJobGroup()->getName();
                $this->updateUrl($key, $value);
            }
*/
            if (null != $this->user->getFamilyStatus()
                && null != $this->user->getFamilyStatus()->getName()
            ) {
                $key = 'Familienstand';
                $value = 'Single';
                $mapping = [
                    'Verheiratet' => 'verheiratet',
                    'Geschieden' => 'geschieden',
                    'Verwitwet' => 'verwitwet'
                ];
                if (isset($mapping[$this->user->getFamilyStatus()->getName()])) {
                    $value = $mapping[$this->user->getFamilyStatus()->getName()];
                }
                $this->updateUrl($key, $value);
            }
        }
    }


    private function generatePayment()
    {
        $this->updateUrl('Zahlungsweise', $this->payment);
    }

    protected function encode($string)
    {
        return rawurlencode($string);
        return $string;
    }

    protected function init()
    {
        parent::init();
        //$this->updateUrl('tnr', $this->tariffId);
        $this->updateUrl('tnr', $this->tmpTariffId);
        $this->updateUrl('tarifnrtemp', $this->tmpTariffId);
    }

    public function addApplication()
    {
        $this->init();
        $this->generateMainUser();
        $this->generatePhoneNumber();
        $this->generateAddress();
        $this->generateBankAccount();
        $this->generatePayment();
        $this->generateAge();
        /*
        print_r($this->get());
        echo "<br><br>";
        print_r($this->structureResult);
        echo "<br><br>";
        die;
        */

    }

}