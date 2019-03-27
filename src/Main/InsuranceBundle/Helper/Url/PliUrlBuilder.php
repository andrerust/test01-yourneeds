<?php

namespace Main\InsuranceBundle\Helper\Url;

class PliUrlBuilder extends AbstractUrlBuilder
{
    private function generateTargetGroup()
    {
        $key = 'single';
        $value = 'Familie/Lebensgemeinschaft mit Kinder';
        if (isset($this->structureResult['targetGroup'])) {
            $mapping = [
                'single' => 'Single ohne Kinder',
                'singleChild' => 'Single mit Kinder',
                'family' => 'Familie/Lebensgemeinschaft ohne Kinder',
                'familyChild' => 'Familie/Lebensgemeinschaft mit Kinder'
            ];
            if (isset($mapping[$this->structureResult['targetGroup']])) {
                $value = $mapping[$this->structureResult['targetGroup']];
            }
        }
        $this->updateUrlRaw($key, $value);
    }

    private function generatePostalCode()
    {
        $key = 'plz';
        $value = '00000';
        $addresses = $this->user->getUserAddresses();
        foreach ($addresses as $address) {
            if (1 == $address->getIsMain()) {
                if (null != $address
                    && null != $address->getPostalCode()
                    && null != $address->getPostalCode()->getZip()
                ) {
                    $value = $address->getPostalCode()->getZip();
                }
            }
        }
        $this->updateUrl($key, $value);
    }

    private function generateGovernmentEmployee()
    {
        $key = 'beamte';
        $value = 'Normal';
        if (isset($this->structureResult['governmentEmployee'])
            && $this->structureResult['governmentEmployee'] == 'yes'
        ) {
            $value = 'öffentl. Dienst';
        }
        $this->updateUrl($key, $value);
    }

    private function generateBadDeptLoss()
    {
        $key = 'ausfall';
        $value = 'nein';
        if (isset($this->structureResult['badDeptLoss'])
            && $this->structureResult['badDeptLoss'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateAmountCoveredJungKids()
    {
        $key = 'delikt';
        $value = 'nein';
        if (isset($this->structureResult['amountCoveredJungKids'])
            && $this->structureResult['amountCoveredJungKids'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }


    private function generatePreviousInsurance()
    {
        $key = 'vorvers5';
        $value = 'nein';
        if (isset($this->structureResult['numberOfPreviousCases'])
            && $this->structureResult['numberOfPreviousCases'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generatePreviousInsuranceDamage()
    {
        $key = 'schaeden5';
        $value = '0';
        if (isset($this->structureResult['previousInsuranceDamage'])
            && $this->structureResult['previousInsuranceDamage'] == 'yes'
        ) {
            if (isset($this->structureResult['previousInsuranceDamageCount'])
                && $this->structureResult['previousInsuranceDamageCount'] > 0
            ) {
                if ($this->structureResult['previousInsuranceDamageCount'] <= 5
                ) {
                    $value = $this->structureResult['previousInsuranceDamageCount'];
                } else {
                    $value = 5;
                }
            }
        }
        $this->updateUrl($key, $value);
    }

    private function generateAmountCovered()
    {
        $key1 = 'vs_v';
        $value1 = '3000000';
        $key2 = 'vsv_v';
        $value2 = '3000000';
        if (isset($this->structureResult['amountCovered'])) {
            $mapping = [
                'max3mio' => '1000000',
                'min3mio' => '3000000',
                'min5mio' => '5000000',
                'min10mio' => '10000000',
                'min15min' => '15000000',
                'min20mio' => '20000000',
                'min50mio' => '50000000'
            ];
            if (isset($mapping[$this->structureResult['amountCovered']])
                && null != $mapping[$this->structureResult['amountCovered']]
            ) {
                $value1 = $mapping[$this->structureResult['amountCovered']];
                $value2 = $mapping[$this->structureResult['amountCovered']];
            }
        }
        $this->updateUrl($key1, $value1);
        $this->updateUrl($key2, $value2);
    }

    private function generateAmountCoveredRentalDamage()
    {
        $key = 'vsm_v';
        $value = '3000000';
        $this->updateUrl($key, $value);
    }

    private function generateAmountCoveredFinancialDamage()
    {
        $key = 'vsv_v';
        $value = '50000';
        $this->updateUrl($key, $value);
    }

    private function generateBestPerfomanceGuarantee()
    {
        $key = 'best_v';
        $value = 'nein';
        if (isset($this->structureResult['bestPerfomanceGuarantee'])
            && $this->structureResult['bestPerfomanceGuarantee'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateOwnResidentialHomeLivingIn()
    {
        $key = 'sgwe_v';
        $value = '0 kein Wohneigentum';
        if (isset($this->structureResult['rentals'])
            && $this->structureResult['rentals'] == 'yes'
        ) {
            if (isset($this->structureResult['ownResidentialHomeLivingIn'])) {
                $mapping = [
                    'flat' => '1 Wohnung',
                    'houseOnParty' => '1 EFH',
                    'houseTwoParties' => '2 ZFH',
                    'appartmentUpToFour' => '4',
                    'appartmentMoteFour' => '100'
                ];
                if (isset($mapping[$this->structureResult['ownResidentialHomeLivingIn']])) {
                    $value = $mapping[$this->structureResult['ownResidentialHomeLivingIn']];
                }
            }
        }
        $this->updateUrl($key, $value);
    }

    private function generateOwnResidentialHomeRentalOthers()
    {
        $key = 'ew_v';
        $value = 'nein';
        if (isset($this->structureResult['ownResidentialHomeRentalOthers'])
            && $this->structureResult['ownResidentialHomeRentalOthers'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateUndevelopedProperties()
    {
        $key = 'unbgru_v';
        $value = 'nein';
        if (isset($this->structureResult['undevelopedProperties'])
            && $this->structureResult['undevelopedProperties'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateRentedPropertiesNational()
    {
        $key = 'fewoi_v';
        $value = 'nein';
        if (isset($this->structureResult['rentedPropertiesNational'])
            && $this->structureResult['rentedPropertiesNational'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }


    private function generateRentedPropertiesEurope()
    {
        $key = 'fewoa_v';
        $value = 'nein';
        if (isset($this->structureResult['rentedPropertiesEurope'])
            && $this->structureResult['rentedPropertiesEurope'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateIncludeInternship()
    {
        $key = 'fach_v';
        $value = 'nein';
        if (isset($this->structureResult['includeInternship'])
            && $this->structureResult['includeInternship'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }


    private function generateRetention()
    {
        $key = 'sb';
        $value = 'nein';
        if (isset($this->structureResult['retention'])
            && $this->structureResult['retention'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
        $this->updateUrl('SB', $value);
    }

    private function generateHorsesAndDogs()
    {
        $key = 'tier_v';
        $value = 'nein';
        if (isset($this->structureResult['horsesAndDogs'])
            && $this->structureResult['horsesAndDogs'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateGradualDamage()
    {
        $key = 'allm_v';
        $value = 'nein';
        if (isset($this->structureResult['gradualDamage'])
            && $this->structureResult['gradualDamage'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }


    private function generateDataExchange()
    {
        $key = 'inet_v';
        $value = 'nein';
        if (isset($this->structureResult['dataExchange'])
            && $this->structureResult['dataExchange'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateActsOfKindness()
    {
        $key = 'gef_v';
        $value = 'nein';
        if (isset($this->structureResult['actsOfKindness'])
            && $this->structureResult['actsOfKindness'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateDamageToMovables()
    {
        $key = 'geli_v';
        $value = 'nein';
        if (isset($this->structureResult['damageToMovables'])
            && $this->structureResult['damageToMovables'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateLossOfPrivateKeys()
    {
        $key = 'sv_v';
        $value = 'nein';
        if (isset($this->structureResult['damageToMovables'])
            && $this->structureResult['damageToMovables'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateLossOfJobKeys()
    {
        $key = 'svd_v';
        $value = 'nein';
        if (isset($this->structureResult['lossOfJobKeys'])
            && $this->structureResult['lossOfJobKeys'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateWithParentLivingInHouse()
    {
        $key = 'elt_v';
        $value = 'nein';
        if (isset($this->structureResult['withParentLivingInHouse'])
            && $this->structureResult['withParentLivingInHouse'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }


    private function generateVoluntaryWork()
    {
        $key = 'ehr_v';
        $value = 'nein';
        if (isset($this->structureResult['voluntaryWork'])
            && $this->structureResult['voluntaryWork'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateChildminderNonCommercial()
    {
        $key = 'tagmu_v';
        $value = 'nein';
        if (isset($this->structureResult['childminderNonCommercial'])
            && $this->structureResult['childminderNonCommercial'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateRenovations()
    {
        $key = 'bau_v';
        $value = '0';
        if (isset($this->structureResult['renovations'])
            && $this->structureResult['renovations'] == 'yes'
        ) {
            if (isset($this->structureResult['renovationsAmount'])
                && $this->structureResult['renovationsAmount'] != ''
            ) {
                $mapping = [
                    'max50000' => '50000',
                    'max100000' => '100000',
                    'max200000' => '200000',
                    'max1000000' => '1000000'
                ];
                if (isset($mapping[$this->structureResult['renovationsAmount']])) {
                    $value = $mapping[$this->structureResult['renovationsAmount']];
                }
            }
        }
        $this->updateUrl($key, $value);
    }


    private function generateSurfboards()
    {
        $key = 'surf_v';
        $value = 'nein';
        if (isset($this->structureResult['surfboards'])
            && $this->structureResult['surfboards'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateWaterDamageLiability()
    {
        $key = 'oel_v';
        $value = 'kein Tank vorhanden';
        if (isset($this->structureResult['hasOilTank'])
            && $this->structureResult['hasOilTank'] == 'yes'
        ) {
            if (isset($this->structureResult['hasOilTankLiter'])
                && $this->structureResult['hasOilTankLiter'] > 0
            ) {
                $mapping = [
                    '3000' => '3000',
                    '5000' => '5000',
                    '10000' => '10000',
                    '20000' => '20000',
                    '50000' => '50000',
                    '100000' => '100000'
                ];
                if (isset($mapping[$this->structureResult['hasOilTankLiter']])) {
                    $value = $mapping[$this->structureResult['hasOilTankLiter']];

                    $key2 = 'oelwo_v';
                    $value2 = 'kein Tank vorhanden';
                    $mapping2 = [
                        'aboveGround' => 'oberirdisch',
                        'underGround' => 'unterirdisch'
                    ];
                    if (isset($mapping2[$this->structureResult['hasOilTankLiterLocation']])) {
                        $value = $mapping2[$this->structureResult['hasOilTankLiterLocation']];
                    }
                    $this->updateUrl($key2, $value2);
                }
            }
        }
        $this->updateUrl($key, $value);
    }


    private function generateMisc()
    {
        $this->updateUrl('laufzeit', '1');
        $this->updateUrl('kombirabatte', 'nein');
        $this->updateUrl('Hundn', '0');
    }

    public function build()
    {
        $this->generateAge();
        $this->generateTargetGroup();
        $this->generatePostalCode();
        $this->generateGovernmentEmployee();
        $this->generateBadDeptLoss();
        $this->generateAmountCoveredJungKids();
        $this->generateMisc();
        $this->generatePreviousInsurance();
        $this->generatePreviousInsuranceDamage();
        $this->generateAmountCovered();
        $this->generateAmountCoveredRentalDamage();
        $this->generateAmountCoveredFinancialDamage();
        $this->generateBestPerfomanceGuarantee();
        $this->generateOwnResidentialHomeLivingIn();
        $this->generateOwnResidentialHomeRentalOthers();
        $this->generateUndevelopedProperties();
        $this->generateRentedPropertiesNational();
        $this->generateRentedPropertiesEurope();
        $this->generateIncludeInternship();
        $this->generateRetention();
        $this->generateHorsesAndDogs();
        $this->generateWaterDamageLiability();
        $this->generateGradualDamage();
        $this->generateDataExchange();
        $this->generateActsOfKindness();
        $this->generateDamageToMovables();
        $this->generateLossOfPrivateKeys();
        $this->generateLossOfJobKeys();
        $this->generateWithParentLivingInHouse();
        $this->generateVoluntaryWork();
        $this->generateChildminderNonCommercial();
        $this->generateRenovations();
        $this->generateSurfboards();

        /*
        print_r($this->get());
        echo "<br><br>";
        print_r($this->structureResult);
        echo "<br><br>";
            die;
        */
    }

}