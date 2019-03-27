<?php

namespace Main\InsuranceBundle\Helper\Url;

use DateTime;

class AciUrlBuilder extends AbstractUrlBuilder
{
    protected $index = 0;
    protected $indexMaximum = 0;

    /*
     * SET global
     */
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
                //$value = $this->structureResult['howManyPersons'];
                if ($this->structureResult['howManyPersons'] > 7) {
                    $value = 8;
                } else {
                    $value = $this->structureResult['howManyPersons'];
                }
            }
        }
        $this->indexMaximum = $value;
        $this->updateUrl($key, $value);
    }

    protected function generatePublicService()
    {
        $key = 'beamte';
        $value = 'Normal';
        if (isset($this->structureResult['publicService'])
            && $this->structureResult['publicService'] == 'yes'
        ) {
            $value = 'öffentl. Dienst';
        }
        $this->updateUrl($key, $value);
    }


    private function generatePostalCode()
    {
        $key = 'plz';
        $value = '21075';
        $addresses = $this->user->getUserAddresses();
        foreach ($addresses as $address) {
            if (1 == $address->getIsMain()) {
                if (1 == $address->getIsMain()) {
                    if ($address->getPostalCode()->getZip()) {
                        $value = $address->getPostalCode()->getZip();
                    }
                }
            }
        }
        $this->updateUrl($key, $value);
    }

    private function generateMisc()
    {
        $this->updateUrl('laufzeit', 1);
        $this->updateUrl('kombirabatte', 'nein');
        $this->updateUrl('versbeginn', 'sofort');
        $this->updateUrl('schul_v', 'nein');
        $this->updateUrl('sofo_v', 'nein');
        $this->updateUrl('kap_v', 'nein');
        $this->updateUrl('room_v', 'nein');
        $this->updateUrl('kgif_v', 'nein');
        $this->updateUrl('rett_v', 'nein');
        $this->updateUrl('berg_v', 'nein');
    }

    /*
     * SET main user and other users
     */
    protected function generateMainUser()
    {
        if (null != $this->user->getFirstName()
            && null != $this->user->getBirthdate()
            && $this->user->getGender()
            && $this->user->getEmail()
        ) {
            $key0 = 'Vorname';
            $value0 = $this->user->getFirstName();
            $this->updateUrlRaw($key0, $value0);

            $key0 = 'Name';
            $value0 = $this->user->getLastName();
            $this->updateUrlRaw($key0, $value0);

            $birthDate = new DateTime($this->user->getBirthdate());
            $key1 = 'Geb_datum';
            $value1 = $birthDate->format('d.m.Y');
            $this->updateUrl($key1, $value1);

            $key0 = 'frommail';
            $value0 = $this->user->getEmail();
            $this->updateUrlRaw($key0, $value0);
            /*
                        $key2 = 'jj1';
                        $value2 = $birthDate->format('Y');
                        $this->updateUrl($key2, $value2);
            
                        $key2 = 'mm1';
                        $value2 = $birthDate->format('m');
                        $this->updateUrl($key2, $value2);
            
                        $key2 = 'tt1';
                        $value2 = $birthDate->format('d');
                        $this->updateUrl($key2, $value2);
            */
            $key3 = 'Anrede';
            if ($this->user->getGender() == '1') {
                $value3 = 'M';
            } else if ($this->user->getGender() == '2') {
                $value3 = 'W';
            }
            $this->updateUrl($key3, $value3);

            //print_r($this->user->getJobGroup()->getName());
            $key4 = 'beruf_master1';
            $value4 = $this->user->getJobGroup()->getName();
            $this->updateUrlRaw($key4, $value4);
            if (null != $this->user->getPhoneNumber()) {
                $key0 = 'Telefon';
                $value0 = $this->user->getPhoneNumber();
                $this->updateUrlRaw($key0, $value0);
            }
            if (null != $this->user->getFamilyStatus()
                && null != $this->user->getFamilyStatus()->getName()) {
                $key0 = 'Familienstand';
                $value0 = $this->user->getFamilyStatus()->getName();
                $this->updateUrlRaw($key0, $value0);
            }
        }
    }

    private function generateFirstName()
    {
        $key = 'name' . $this->index;
        $value = '';
        $i = $this->index - 2;
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
        $this->updateUrlRaw($key, $value);
    }

    private function getBirthdate()
    {
        $i = $this->index - 2;
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
        $this->updateUrlRaw($key1, $value1);

        /*
        $key = 'jj' . $this->index;
        $value = $birthDate->format('Y');
        $this->updateUrl($key, $value);

        $key = 'mm' . $this->index;
        $value = $birthDate->format('m');
        $this->updateUrl($key, $value);

        $key = 'tt' . $this->index;
        $value = $birthDate->format('d');
        $this->updateUrl($key, $value);
        */
    }

    private function generateSex()
    {
        $key = 'geschlecht' . $this->index;
        $value = 'M';
        $i = $this->index - 2;
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
        $this->updateUrlRaw($key, $value);
    }

    private function generateBaseAmount()
    {
        $key = 'grund' . $this->index;
        $value = '50000';
        $progression = 350;

        if (isset($this->structureResult['progession'])) {
            $progression = $this->structureResult['progession'];
        }

        if (isset($this->structureResult['amountRecommendation'])) {
            if ($this->structureResult['amountRecommendation'] == 'no') {
                $value = number_format($this->structureResult['amount'], 0, '', '');
            } elseif ($this->structureResult['amountRecommendation'] == 'yes') {
                if (isset($this->structureResult['yearlyIncome']) && $this->structureResult['yearlyIncome'] > 0) {
                    $income = $this->structureResult['yearlyIncome'];
                    $divider = 3.5;
                    $senior = 65;
                    $currentYear = 2019;
                    $birthDate = new DateTime($this->getBirthdate());
                    $yearOfBirth = $birthDate->format('Y');
                    $tmpYearFactor = $senior - ($currentYear - $yearOfBirth);
                    $tmpValue = ($income / $divider);
                    $value = number_format((($tmpYearFactor * $tmpValue) / 3.5), 0, '', '');
                    //echo $income . " / " . ($income / $divider) . " / " . $yearOfBirth . " / " . $tmpYearFactor . " = " . $value . "<br><br>";
                    //echo "GRUND: " . number_format($value, 0, '', '');
                }
            }
        }
        $this->updateUrl($key, $value);
    }

    private function generateProgression()
    {
        $key = 'prog' . $this->index;
        $value = '350';
        if (isset($this->structureResult['progession'])) {
            $value = $this->structureResult['progession'];
        }
        $this->updateUrl($key, $value);
    }

    private function generateFullAmount()
    {
        $key = 'voll' . $this->index;
        $value = '';
        if (isset($this->structureResult['amountRecommendation'])) {
            if ($this->structureResult['amountRecommendation'] == 'no') {
                $value = $this->structureResult['amount'];
            } elseif ($this->structureResult['amountRecommendation'] == 'yes') {
                if (isset($this->structureResult['yearlyIncome']) && $this->structureResult['yearlyIncome'] > 0) {
                    $income = $this->structureResult['yearlyIncome'];
                    $divider = 3.5;
                    $senior = 65;
                    $currentYear = 2019;
                    $birthDate = new DateTime($this->getBirthdate());
                    $yearOfBirth = $birthDate->format('Y');
                    $value = number_format(number_format(($income / $divider), 2, '.', '') * ($senior - ($currentYear - $yearOfBirth)), 0, '', '');
                    //echo "VOLL: " . number_format($value, 0, '', '') . "<br><br>";
                }
            }
        }
        $this->updateUrl($key, $value);
    }

    private function getAdvancedDeathBenefit()
    {
        $key = 'tod' . $this->index;
        $value = '0';
        if (isset($this->structureResult['advancedDeathBenefit'])
            && $this->structureResult['advancedDeathBenefit'] == 'yes'
        ) {
            if (isset($this->structureResult['advancedDeathBenefitAmount'])
                && $this->structureResult['advancedDeathBenefitAmount'] > 0
            ) {
                $value = $this->structureResult['advancedDeathBenefitAmount'];
            }
        }
        $this->updateUrl($key, $value);
    }

    private function generateTransitionPower()
    {
        $key = 'ueber' . $this->index;
        $value = 0;
        $this->updateUrl($key, $value);
    }


    private function getDailyHospitalBenefit()
    {
        $key = 'kh' . $this->index;
        $value = '20';
        if (isset($this->structureResult['dailyAccidentBenefit'])
            && $this->structureResult['dailyAccidentBenefit'] == 'yes'
        ) {
            if (isset($this->structureResult['dailyAccidentBenefitAmount'])
                && $this->structureResult['dailyAccidentBenefitAmount'] > 0
            ) {
                $value = $this->structureResult['dailyAccidentBenefitAmount'];
            }
        }
        $this->updateUrl($key, $value);
    }

    private function getDailyAccidentBenefit()
    {
        $keyDays = 'utg' . $this->index;
        $valueDays = 'nein';
        $keyAmount = 'utgeur' . $this->index;
        $valueAmount = '0';
        $this->updateUrl($keyAmount, $valueAmount);
        if (isset($this->structureResult['dailyAccidentBenefit'])
            && $this->structureResult['dailyAccidentBenefit'] == 'yes'
        ) {
            if (isset($this->structureResult['dailyAccidentBenefifDays'])
                && $this->structureResult['dailyAccidentBenefifDays'] > 0
            ) {
            }
            if ($this->structureResult['dailyAccidentBenefifDays'] == 8
                || $this->structureResult['dailyAccidentBenefifDays'] == 15
                || $this->structureResult['dailyAccidentBenefifDays'] == 29
                || $this->structureResult['dailyAccidentBenefifDays'] == 43
            ) {
                $valueDays = $this->structureResult['dailyAccidentBenefifDays'];
            }

            if (isset($this->structureResult['dailyAccidentBenefitAmount'])
                && $this->structureResult['dailyAccidentBenefitAmount'] > 0
            ) {
                $valueAmount = $this->structureResult['dailyAccidentBenefitAmount'];
            }
        }
        $this->updateUrl($keyAmount, $valueAmount);
        $this->updateUrl($keyDays, $valueDays);
    }

    private function generateImprovedLimbTax()
    {
        $key = 'gliedereur' . $this->index;
        $value = 'nein';
        if (isset($this->structureResult['improvedLimbTax'])
            && $this->structureResult['improvedLimbTax'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateAccidentPension()
    {
        $key = 'rente' . $this->index;
        $value = '0';
        if (isset($this->structureResult['accidentPension'])
            && $this->structureResult['accidentPension'] == 'yes'
            && isset($this->structureResult['accidentPensionAmount'])
            && $this->structureResult['accidentPensionAmount'] > 0
            && $this->structureResult['accidentPensionAmount'] <= 1500
        ) {
            $value = $this->structureResult['accidentPensionAmount'];
        }
        $this->updateUrl($key, $value);
    }

    private function generateBrokenBonesInsured()
    {
        $key = 'knochen' . $this->index;
        $value = 'nein';
        if (isset($this->structureResult['haveBrokenBonesInsured'])
            && $this->structureResult['haveBrokenBonesInsured'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    /*
     * SET optional
     */
    private function generateDamageByEcessiveExertion()
    {
        $keyExertion = 'kraft_v';
        $valueExertion = 'nein';
        $keyOwnMOtion = 'eigen_v';
        $valueOwnMotion = 'nein';
        if (isset($this->structureResult['damageByEcessiveExertion'])
            && $this->structureResult['damageByEcessiveExertion'] == 'yes'
        ) {
            $valueExertion = 'ja';
            $valueOwnMotion = 'ja';
        }
        $this->updateUrl($keyExertion, $valueExertion);
        $this->updateUrl($keyOwnMOtion, $valueOwnMotion);
    }

    private function generateConsciousnessThroughDrunkenness()
    {
        $key = 'alk_v';
        $value = 'nein';
        if (isset($this->structureResult['consciousnessThroughDrunkenness'])
            && $this->structureResult['consciousnessThroughDrunkenness'] == 'yes'
        ) {
            $value = 'ja (EU)';
        }
        $this->updateUrlRaw($key, $value);
    }

    private function generatePoisonGases()
    {
        $key = 'gift_v';
        $value = 'nein';
        if (isset($this->structureResult['poisonGases'])
            && $this->structureResult['poisonGases'] == 'yes'
        ) {
            $value = 'ja (EU)';
        }
        $this->updateUrlRaw($key, $value);
    }

    private function generatePoisonFood()
    {
        $key = 'nahr_v';
        $value = 'nein';
        if (isset($this->structureResult['poisonFood'])
            && $this->structureResult['poisonFood'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateXRayDamage()
    {
        $key = 'stral_v';
        $value = 'nein';
        if (isset($this->structureResult['xRayDamage'])
            && $this->structureResult['xRayDamage'] == 'yes'
        ) {
            $value = 'ja (EU)';
        }
        $this->updateUrlRaw($key, $value);
    }

    private function generateDivingDamages()
    {
        $key = 'tauch_v';
        $value = 'nein';
        if (isset($this->structureResult['divingDamages'])
            && $this->structureResult['divingDamages'] == 'yes'
        ) {
            $value = 'ja (EU)';
        }
        $this->updateUrlRaw($key, $value);
    }

    private function generateDentalProthesis()
    {
        $key = 'zahn_v';
        $value = 'nein';
        if (isset($this->structureResult['dentalProthesis'])
            && $this->structureResult['dentalProthesis'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateInsectBites()
    {
        $key = 'insekt_v';
        $value = 'nein';
        if (isset($this->structureResult['insectBites'])
            && $this->structureResult['insectBites'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateInvolvementOfIllnesses()
    {
        $key = 'mitw_v';
        $value = 'nein';
        if (isset($this->structureResult['involvementOfIllnesses'])
            && $this->structureResult['involvementOfIllnesses'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateDomesticHelp()
    {
        $key = 'haus_v';
        $value = 'nein';
        if (isset($this->structureResult['domesticHelp'])
            && $this->structureResult['domesticHelp'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateAutomaticBenefitImprovements()
    {
        $key = 'leiupd_v';
        $value = 'nein';
        if (isset($this->structureResult['automaticBenefitImprovements'])
            && $this->structureResult['automaticBenefitImprovements'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }


    private function generateAssistance()
    {
        $key = 'assistance' . $this->index;
        $value = 'nein';
        $this->updateUrl($key, $value);
    }

    private function generateDismemberment()
    {
        $key = 'gliedertaxe' . $this->index;
        $value = 'Standardleistung';
        $this->updateUrl($key, $value);
    }

    public function build()
    {
        $this->generateNumberOfPersons();
        $this->generatePublicService();
        $this->generateMisc();
        $this->generatePostalCode();
        $this->generateMainUser();

        for ($i = 2; $i <= $this->indexMaximum; $i++) {
            $this->index = $i;
            $this->generateFirstName();
            $this->generateBirthdate();
            $this->generateSex();
            $this->generateJob();
        }


        for ($j = 1; $j <= $this->indexMaximum; $j++) {
            $this->index = $j;
            $this->generateProgression();
            $this->generateFullAmount();
            $this->generateBaseAmount();
            $this->getAdvancedDeathBenefit();
            $this->generateTransitionPower();
            $this->getDailyHospitalBenefit();
            $this->getDailyAccidentBenefit();
            $this->generateAccidentPension();
            $this->generateAssistance();
            $this->generateBrokenBonesInsured();
            $this->generateDismemberment();
            $this->generatePreviousInsurance();
        }
        $this->generateDamageByEcessiveExertion();
        $this->generateConsciousnessThroughDrunkenness();
        $this->generatePoisonGases();
        $this->generatePoisonFood();
        $this->generateXRayDamage();
        $this->generateDivingDamages();
        $this->generateDentalProthesis();
        $this->generateInsectBites();
        $this->generateInvolvementOfIllnesses();
        $this->generateDomesticHelp();
        $this->generateAutomaticBenefitImprovements();
        /*
        print_r($this->get());
        echo "<br><br>";
        print_r($this->structureResult);
        echo "<br><br>";
        die;
        */
    }

    private function generatePreviousInsurance()
    {
        $this->updateUrl('schaeden5' . $this->index, '0');
        $this->updateUrl('vorvers5' . $this->index, 'nein');
    }

}