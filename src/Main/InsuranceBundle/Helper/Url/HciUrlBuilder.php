<?php

namespace Main\InsuranceBundle\Helper\Url;

class HciUrlBuilder extends AbstractUrlBuilder
{

    private function generateLivingHowSquareMeter()
    {
        $key = 'wohnfl';
        $value = '70';
        if (isset($this->structureResult['livingHowSquareMeter'])
            && $this->structureResult['livingHowSquareMeter'] > 0
        ) {
            $value = $this->structureResult['livingHowSquareMeter'];

            if (isset($this->structureResult['livingHow'])
                && $this->structureResult['livingHow'] != 'Mehrfamilienhaus'
            ) {
                $key2 = 'wohnfl_kg';
                $value2 = '';
                $key3 = 'kellerfl';
                $value3 = '';
                if (isset($this->structureResult['livingHowSquareMeterCellar'])
                    && $this->structureResult['livingHowSquareMeterCellar'] > 0
                ) {
                    $value2 = $this->structureResult['livingHowSquareMeterCellar'];
                }
                if (isset($this->structureResult['livingHowSquareMeterCellarSize'])
                    && $this->structureResult['livingHowSquareMeterCellarSize'] > 0
                ) {
                    $value3 = $this->structureResult['livingHowSquareMeterCellarSize'];
                }
                $this->updateUrl($key2, $value2);
                $this->updateUrl($key3, $value3);
            }
        }
        $this->updateUrl($key, $value);
    }

    private function generateAddress()
    {
        if (isset($this->structureResult['address'])
            && !empty($this->structureResult['address'])
        ) {
            $addresses = $this->user->getUserAddresses();
            foreach ($addresses as $address) {
                if (1 == $address->getIsMain()) {
                    if (null != $address
                        && $this->structureResult['address'] == $address->getId()
                        && null != $address->getStreet()
                        && null != $address->getStreetNumber()
                        && null != $address->getPostalCode()
                        && null != $address->getCity()->getName()
                    ) {
                        $this->updateUrl('plz', $address->getPostalCode()->getZip());
                        $this->updateUrl('PLZ_show', $address->getPostalCode()->getZip());
                        $this->updateUrl('ort', $address->getCity()->getName());
                        $this->updateUrl('strasse', $address->getStreet()->getName());
                        $this->updateUrl('hnr', $address->getStreetNumber());
                    }
                }
            }
        }
    }

    private function generateBirthdate()
    {
        $key = 'geburtsdatum';
        $value = '';
        $dateOfBirth = $this->user->getBirthdate();
        if ($dateOfBirth) {
            $currentDate = date_create($dateOfBirth);
            $value = date_format($currentDate, 'd.m.Y');
        }
        $this->updateUrl($key, $value);
    }

    private function generateLivingHow()
    {
        $key = 'whg';
        $value = 'Mehrfamilienhaus';
        if (isset($this->structureResult['livingHow'])) {
            $mapping = [
                'Mehrfamilienhaus' => 'Mehrfamilienhaus',
                'Einfamilienhaus' => 'Einfamilienhaus',
                'Zweifamilienhaus' => 'Zweifamilienhaus',
                'Doppelhaushälfte' => 'Doppelhaushälfte',
                'Reihenhaus' => 'Reihenhaus'
            ];
            if (isset($mapping[$this->structureResult['livingHow']])) {
                $value = $mapping[$this->structureResult['livingHow']];
            }
        }
        $this->updateUrl($key, $value);
    }

    private function generatePublicService()
    {
        $key = 'beamte';
        $value = 'Normal';
        if (isset($this->structureResult['publicService'])
            && $this->structureResult['publicService'] == 'yes'
        ) {
            $value = 'öffentl . Dienst';
        }
        $this->updateUrl($key, $value);
    }


    private function generateCalculateSum()
    {
        $key = 'verssummeauto';
        $value = 'auto'; // normally 'auto' but
        if (isset($this->structureResult['calculateSum'])
            && $this->structureResult['calculateSum'] == 'no'
        ) {
            $value = 'manuell';
        }
        $this->updateUrl($key, $value);
    }

    private function generateCalculateSumCustom()
    {
        $key = 'verssumme';
        $value = '';
        if (isset($this->structureResult['calculateSum'])
            && $this->structureResult['calculateSum'] == 'no'
        ) {
            if (isset($this->structureResult['calculateSumCustom'])
                && $this->structureResult['calculateSumCustom'] > 0
            ) {
                $value = $this->structureResult['calculateSumCustom'];
            } elseif (isset($this->structureResult['livingHowSquareMeter'])
                && $this->structureResult['livingHowSquareMeter'] > 0
            ) {
                $factor = 750;
                $value = intval($this->structureResult['livingHowSquareMeter']) * $factor;
            }
        }
        $this->updateUrl($key, $value);
    }

    private function generateBicycleTheft()
    {
        $key = 'fahrrad';
        $value = '0';
        if (isset($this->structureResult['bicycleTheft'])
            && $this->structureResult['bicycleTheft'] == 'yes'
        ) {
            if (isset($this->structureResult['bicycleTheftSum'])
                && $this->structureResult['bicycleTheftSum'] > 0
            ) {
                if ($this->structureResult['bicycleTheftSum'] > 5000) {
                    $value = 5000;
                } else {
                    $value = $this->structureResult['bicycleTheftSum'];
                }
            }
        }
        $this->updateUrl($key, $value);
    }

    private function generateCeramicHob()
    {
        $key = 'glas';
        $value = 'nein';
        if (isset($this->structureResult['ceramicHob'])
            && $this->structureResult['ceramicHob'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateFloodingAndEarthquakes()
    {
        $key = 'elem';
        $value = 'nein';
        if (isset($this->structureResult['floodingAndEarthquakes'])
            && $this->structureResult['floodingAndEarthquakes'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateDamagesCausedByGrossNegligence()
    {
        $key = 'grob';
        $value = 'nein';
        if (isset($this->structureResult['damagesCausedByGrossNegligence'])
            && $this->structureResult['damagesCausedByGrossNegligence'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }


    private function generateLivingHowConstructionClass()
    {
        $key = 'bauart';
        $value = 'massive Bauweise mit harter Dachung (BAK I)';
        if (isset($this->structureResult['livingHowConstructionClass'])
            && $this->structureResult['livingHowConstructionClass'] != ''
        ) {

            $mapping = [
                'BakI' => 'massive Bauweise mit harter Dachung (BAK I)',
                'BakII' => 'Stahl/Glas Bauweise mit harter Dachung (BAK II)',
                'FghI_FghII' => 'Fertighaus, massiv mit harter Dachung (FHG I, FHG II)',
                'FghIII' => 'Fertighaus mit harter Dachung (FHG III)',
                'BakIII' => 'Holzhaus oder Lehmfachwerk mit harter Dachung (BAK III)',
                'BakIV_V' => 'weiche Dachung (BAK IV oder V)'
            ];
            if (isset($mapping[$this->structureResult['livingHowConstructionClass']])) {
                $value = $mapping[$this->structureResult['livingHowConstructionClass']];
            }
        }
        $this->updateUrl($key, $value);
    }


    private function generateRetention()
    {
        $key = 'selbst';
        $value = 'nein';
        if (isset($this->structureResult['retention'])
            && $this->structureResult['retention'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }


    private function generateMisc()
    {
        $this->updateUrl('laufzeit', '1');
        $this->updateUrl('kombirabatte', 'nein');
    }

    private function generatePreviousInsurance()
    {
        $key = 'vorvers5';
        $value = 'nein';
        if (isset($this->structureResult['previousInsurance'])
            && $this->structureResult['previousInsurance'] == 'yes'
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

    private function generateSurgeDamage()
    {
        $key = 'ues_v';
        $value = 'nein';
        if (isset($this->structureResult['surgeDamage'])
            && $this->structureResult['surgeDamage'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateInsuredValuables()
    {
        $key = 'werts_v';
        $value = '20';
        if (isset($this->structureResult['insuredValuables'])
            && $this->structureResult['insuredValuables'] == 'yes'
        ) {
            if (isset($this->structureResult['insuredValuablesSum'])
                && $this->structureResult['insuredValuablesSum'] > 0
            ) {
                $value = $this->structureResult['insuredValuablesSum'];
            }
        }
        $this->updateUrl($key, $value);
    }


    private function generateCarTheft()
    {
        $key = 'dkfz_v';
        $value = 'nein';
        if (isset($this->structureResult['carTheft'])
            && $this->structureResult['carTheft'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateTheftOfGardenFurniture()
    {
        $key = 'dgar_v';
        $value = 'nein';
        if (isset($this->structureResult['theftOfGardenFurniture'])
            && $this->structureResult['theftOfGardenFurniture'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateSingeingDamage()
    {
        $key = 'seng_v';
        $value = 'nein';
        if (isset($this->structureResult['singeingDamage'])
            && $this->structureResult['singeingDamage'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateWaterLossDueBurstPipes()
    {
        $key = 'waver_v';
        $value = 'nein';
        if (isset($this->structureResult['waterLossDueBurstPipes'])
            && $this->structureResult['waterLossDueBurstPipes'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateHotelCosts()
    {
        $key = 'hot_v';
        $value = 'nein';
        if (isset($this->structureResult['hotelCosts'])
            && $this->structureResult['hotelCosts'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateReturnTravelCosts()
    {
        $key = 'reis_v';
        $value = 'nein';
        if (isset($this->structureResult['returnTravelCosts'])
            && $this->structureResult['returnTravelCosts'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateHomeOfficeDamage()
    {
        $key = 'arb_v';
        $value = 'nein';
        if (isset($this->structureResult['returnTravelCosts'])
            && $this->structureResult['returnTravelCosts'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    public function build()
    {
        $this->generateLivingHowSquareMeter();
        $this->generateAddress();
        $this->generateAge();
        $this->generateBirthdate();
        $this->generateLivingHow();
        $this->generatePublicService();
        $this->generateCalculateSum();
        $this->generateCalculateSumCustom();
        $this->generateBicycleTheft();
        $this->generateCeramicHob();
        $this->generateFloodingAndEarthquakes();
        $this->generateDamagesCausedByGrossNegligence();
        $this->generateLivingHowConstructionClass();
        $this->generateRetention();
        $this->generatePreviousInsurance();
        $this->generatePreviousInsuranceDamage();
        $this->generateMisc();
        $this->generateSurgeDamage();
        $this->generateInsuredValuables();
        $this->generateCarTheft();
        $this->generateTheftOfGardenFurniture();
        $this->generateSingeingDamage();
        $this->generateWaterLossDueBurstPipes();
        $this->generateHotelCosts();
        $this->generateReturnTravelCosts();
        $this->generateHomeOfficeDamage();
        /*

        print_r($this->get());
        echo "<br><br>";
        print_r($this->structureResult);
        echo "<br><br>";
          die;
        */
    }

}