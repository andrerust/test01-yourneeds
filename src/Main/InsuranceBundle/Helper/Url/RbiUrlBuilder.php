<?php

namespace Main\InsuranceBundle\Helper\Url;

class RbiUrlBuilder extends AbstractUrlBuilder
{
    private $amountParameter = [
        'livingHow' => null,
        'roofType' => null,
        'atticFloor' => 0,
        'atticFloorLivingSpace' => 0,
        'upperFloor' => 0,
        'upperFloorLivingSpace' => 0,
        'cellar' => 0,
        'cellarLivingSpace' => 0,
        'garageCount' => 0,
        'carPortCount' => 0,
        'upgrades' => []
    ];

    private function updateAmountParameter($key, $value)
    {
        if (!empty($value) || $value >= 0) {
            $this->amountParameter[$key] = $value;
        }
    }

    private function generateMisc()
    {
        $this->updateUrl('versicherungsschutz', 'wg');
        $this->updateUrl('beginn', '2019');
        $this->updateUrl('Selbstgenutzt', 'ja');
        $this->updateUrl('elementar', 'nein');
        $this->updateUrl('laufzeit', '1');
        $this->updateUrl('kombirabatte', 'nein');
        $this->updateUrl('san_k', '');
    }

    /*
     * SENTINEL @empty
     * Address loader
     */
    private function generateAddress()
    {
        if (isset($this->structureResult['address'])
            && !empty($this->structureResult['address'])
        ) {
            //print_r($this->structureResult['address']);
            $addresses = $this->user->getUserAddresses();
            foreach ($addresses as $address) {
                if ($this->structureResult['address'] == $address->getId()) {
                    if (null != $address->getStreet()
                        && null != $address->getStreet()->getName()
                        && null != $address->getStreetNumber()
                        && null != $address->getPostalCode()
                        && null != $address->getPostalCode()->getZip()
                        && null != $address->getCity()
                        && null != $address->getCity()->getName()
                    ) {
                        $this->updateUrl('plz', $address->getPostalCode()->getZip());
                        $this->updateUrl('plz_show', $address->getPostalCode()->getZip());
                        $this->updateUrlRaw('ort', $address->getCity()->getName());
                        $this->updateUrlRaw('strasse', $address->getStreet()->getName());
                        $this->updateUrl('hnr', $address->getStreetNumber());
                    }
                }
            }
        }
    }

    private function generateLivingHow()
    {
        $key = 'gebaeude';
        $value = 'Einfamilienhaus';
        if (isset($this->structureResult['livingHow'])) {
            $mapping = [
                'apartmentHouse' => 'Mehrfamilienhaus',
                'singleFamilyHouse' => 'Einfamilienhaus',
                'duplexHouse' => 'Zweifamilienhaus',
                'semiDetachedHouse' => 'Doppelhaushälfte',
                'townHouse' => 'Reihenhaus'
            ];
            if (isset($mapping[$this->structureResult['livingHow']])) {
                $value = $mapping[$this->structureResult['livingHow']];
            }
        }
        /*
        echo "<br><br>";
        echo "Value: ";
        print_r($value);
        echo "<br><br>";
        */
        $this->updateAmountParameter('livingHow', array_search($value, $mapping));
        $this->updateUrlRaw($key, $value);
    }

    private function generateLivingHowConstructionClass()
    {
        $key = 'bauart';
        $value = 'BAK 2';
        if (isset($this->structureResult['livingHowConstructionClass'])) {
            $mapping = [
                'BakI' => 'BAK 1',
                'BakII' => 'BAK 2',
                'FghI' => 'FHG 1',
                'FghII' => 'FHG 2',
                'FghIII' => 'FHG 3',
                'BakIII' => 'BAK 3',
                'BakIV_V' => 'BAK 5'
            ];
            if (isset($mapping[$this->structureResult['livingHowConstructionClass']])) {
                $value = $mapping[$this->structureResult['livingHowConstructionClass']];
            }
        }
        $this->updateUrlRaw($key, $value);
    }

    private function generateRoofType()
    {
        $key = 'dachart';
        $value = 'Sonstiges';
        if (isset($this->structureResult['roofType'])) {
            $mapping = [
                'gabledRoof' => 'Giebeldach',
                'flatRoof' => 'Flachdach',
                'other' => 'Sonstiges'
            ];
            if (isset($mapping[$this->structureResult['roofType']])) {
                $value = $mapping[$this->structureResult['roofType']];
                $this->updateAmountParameter('roofType', array_search($value, $mapping));
            }
        }
        $this->updateUrlRaw($key, $value);
    }

    private function generateSelfUsedBuilding()
    {
        $key = 'Selbstgenutzt';
        $value = 'ja';
        if (isset($this->structureResult['selfUsedBuilding'])
            && $this->structureResult['selfUsedBuilding'] == 'no'
        ) {
            $value = 'nein';
        }
        $this->updateUrl($key, $value);
    }

    private function generateYearOfConstruction()
    {
        $key = 'baujahr';
        $value = '2000';
        if (isset($this->structureResult['yearOfConstruction'])
            && $this->structureResult['yearOfConstruction'] > 0
        ) {
            $value = $this->structureResult['yearOfConstruction'];
        }
        $this->updateUrl($key, $value);
    }

    private function generateRenovatedRoof()
    {
        $key = 'san_d';
        $value = '';
        if (isset($this->structureResult['renovatedRoof'])
            && $this->structureResult['renovatedRoof'] == 'yes'
        ) {
            $value = $this->structureResult['renovatedRoofYear'];
        }
        $this->updateUrl($key, $value);
    }

    private function generateRenovatedHeater()
    {
        $key = 'san_h';
        $value = '';
        if (isset($this->structureResult['renovatedHeater'])
            && $this->structureResult['renovatedHeater'] == 'yes'
        ) {
            $value = $this->structureResult['renovatedHeaterYear'];
        }
        $this->updateUrl($key, $value);
    }

    private function generateRenovatedWaterSanitary()
    {
        $key = 'san_w';
        $value = '';
        if (isset($this->structureResult['renovatedWaterSanitary'])
            && $this->structureResult['renovatedWaterSanitary'] == 'yes'
        ) {
            $value = $this->structureResult['renovatedWaterSanitaryYear'];
        }
        $this->updateUrl($key, $value);
    }

    private function generateRenovatedElectronics()
    {
        $key = 'san_e';
        $value = '';
        if (isset($this->structureResult['renovatedElectronics'])
            && $this->structureResult['renovatedElectronics'] == 'yes'
        ) {
            $value = $this->structureResult['renovatedElectronicsYear'];
        }
        $this->updateUrl($key, $value);
    }

    private function generateLevelCount()
    {
        $key = 'geschosse';
        $value = '';
        if (isset($this->structureResult['generatelevelCount'])
            && $this->structureResult['generatelevelCount'] > 0
        ) {
            $value = $this->structureResult['generatelevelCount'];
        }
        $this->updateUrl($key, $value);
    }

    private function generateUnitCount()
    {
        $key = 'wohneh';
        $value = '1';
        if (isset($this->structureResult['unitCount'])
            && $this->structureResult['unitCount'] > 0
            && isset($this->structureResult['livingHow'])
        ) {
            $mapping = [
                'apartmentHouse' => 'Mehrfamilienhaus',
                'singleFamilyHouse' => 'Einfamilienhaus',
                'duplexHouse' => 'Zweifamilienhaus',
                'semiDetachedHouse' => 'Doppelhaushälfte',
                'townHouse' => 'Reihenhaus'
            ];
            if (isset($mapping[$this->structureResult['livingHow']])
                && 'singleFamilyHouse' != $this->structureResult['livingHow']
            ) {
                $value = $this->structureResult['unitCount'];
            }
        }
        $this->updateUrlRaw($key, $value);
    }

    private function generateIsAtticConverted()
    {
        $key = 'dachgeschoss';
        $value = '';
        $keySM = 'wohnfl_dg';
        $valueSM = 0;

        if (isset($this->structureResult['isAtticConverted'])) {

            $mapping = [
                'undeveloped' => 'nicht ausgebaut',
                'expanded' => 'ausgebaut',
                'partlyExpanded' => 'teilweise ausgebaut',
                'noAttic' => 'kein Dachgeschoss'
            ];
            if (isset($mapping[$this->structureResult['isAtticConverted']])) {
                $value = $mapping[$this->structureResult['isAtticConverted']];
            }
            $this->updateAmountParameter('atticFloor', array_search($value, $mapping));

            if (isset($this->structureResult['howManySquareMetersAttic'])
                && $this->structureResult['howManySquareMetersAttic'] > 0
            ) {
                $valueSM = $this->structureResult['howManySquareMetersAttic'];
            }
        }
        $this->updateAmountParameter('atticFloorLivingSpace', $valueSM);

        $this->updateUrlRaw($key, $value);
        $this->updateUrl($keySM, $valueSM);
    }

    private function generateSquareMetersMainFloors()
    {
        $key = 'wohnfl_og';
        $value = '120';
        if (isset($this->structureResult['squareMetersMainFloors'])
            && $this->structureResult['squareMetersMainFloors'] > 0
        ) {
            $value = $this->structureResult['squareMetersMainFloors'];
        }

        $this->updateAmountParameter('upperFloor', 1);
        $this->updateAmountParameter('upperFloorLivingSpace', $value);
        $this->updateUrl($key, $value);
    }

    private function generateHasCellar()
    {
        $key = 'kellerfl';
        $value = '0';
        $keyLivingSpace = 'wohnfl_kg';
        $valueLivingSpace = '0';
        if (isset($this->structureResult['hasCellar'])
            && $this->structureResult['hasCellar'] == 'yes'
        ) {
            $this->updateAmountParameter('cellar', 1);

            if (isset($this->structureResult['hasCellarSquareMeters'])
                && $this->structureResult['hasCellarSquareMeters'] > 0
            ) {
                $value = $this->structureResult['hasCellarSquareMeters'];
            }
            if (isset($this->structureResult['hasCellarSquareMetersLivingSpace'])
                && $this->structureResult['hasCellarSquareMetersLivingSpace'] > 0
            ) {
                $valueLivingSpace = $this->structureResult['hasCellarSquareMetersLivingSpace'];
                $this->updateAmountParameter('cellarLivingSpace', $valueLivingSpace);
            }
        }
        $this->updateUrl($key, $value);
        $this->updateUrl($keyLivingSpace, $valueLivingSpace);
        $this->updateUrl('gewerbefl', 0);
    }

    private function generateHasGarage()
    {
        $key = 'Garagen';
        $value = 0;
        if (isset($this->structureResult['hasGarage'])
            && $this->structureResult['hasGarage'] == 'yes'
        ) {
            if (isset($this->structureResult['garageCount'])
                && $this->structureResult['garageCount'] > 0
            ) {
                if ($this->structureResult['garageCount'] > 9) {
                    $value = 9;
                } else {
                    $value = $this->structureResult['garageCount'];
                }
            }
        }
        $this->updateAmountParameter('garageCount', $value);
        $this->updateUrl($key, $value);
    }

    private function generateHasCarport()
    {
        $key = 'Carports';
        $value = 0;
        if (isset($this->structureResult['hasCarport'])
            && $this->structureResult['hasCarport'] == 'yes'
        ) {
            if (isset($this->structureResult['carportCount'])
                && $this->structureResult['carportCount'] > 0
            ) {
                if ($this->structureResult['carportCount'] > 9) {
                    $value = 9;
                } else {
                    $value = $this->structureResult['carportCount'];
                }
            }
        }
        $this->updateAmountParameter('carPortCount', $value);
        $this->updateUrl($key, $value);
    }

    private function generateHasOutbuildings()
    {
        $key = 'Nebengebaeude';
        $value = 0;
        if (isset($this->structureResult['hasOutbuildings'])
            && $this->structureResult['hasOutbuildings'] == 'yes'
        ) {
            if (isset($this->structureResult['hasOutbuildingsSquareMeters'])
                && $this->structureResult['hasOutbuildingsSquareMeters'] > 0
            ) {
                $value = $this->structureResult['hasOutbuildingsSquareMeters'];
            }
        }
        $this->updateUrl($key, $value);
    }


    private function generateEquipmentUpgrade()
    {
        if (isset($this->structureResult['equipmentUpgrade'])
            && count($this->structureResult['equipmentUpgrade']) > 0
        ) {

            /*
             * ACHTUNG: Versicherungssumme bei Solaranlage!
             */
            $mapping = [
                'naturalStone' => 'Aussenwaende',
                'lightMetal' => 'Fenster',
                'preciousWoodDoors' => 'Tueren',
                'heatPump' => 'Waermepumpe',
                'solarSystem' => 'Solaranlage',
                'copperRoof' => 'Dach',
                'preciousWoodCladding' => 'DeckenWaende',
                'naturalStoneFloor' => 'Fussboeden',
                'highQualitySanitaryFacilities' => 'Sanitaer'
            ];

            foreach ($mapping as $key => $value) {
                if (in_array($key, $this->structureResult['equipmentUpgrade'])) {
                    $this->updateUrl($mapping[$key], 'ja');
                    $this->amountParameter['upgrades'][$key] = 1;
                } else {
                    $this->amountParameter['upgrades'][$key] = 0;
                    $this->updateUrl($value, 'nein');
                }
            }
        }
    }

    private function generateDangers()
    {
        if (isset($this->structureResult['dangers'])
            && count($this->structureResult['dangers']) > 0
        ) {
            $mapping = [
                'fire' => 'Feuerschutz',
                'water' => 'Leitungswasser',
                'stormAndHail' => 'SturmHagel'
            ];
            foreach ($mapping as $key => $value) {
                if (in_array($key, $this->structureResult['dangers'])) {
                    $this->updateUrl($mapping[$key], 'nein');
                } else {
                    $this->updateUrl($value, 'ja');
                }
            }
        }
    }

    private function generateHasPhotovoltaic()
    {
        $key = 'Photovoltaikanlagen';
        $value = 'nein';
        if (isset($this->structureResult['hasPhotovoltaic'])
            && $this->structureResult['hasPhotovoltaic'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateElementary()
    {
        $key = 'elementar';
        $value = 'nein';
        if (isset($this->structureResult['elementary'])
            && $this->structureResult['elementary'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }


    private function generateIncludeGlas()
    {
        $key = 'glas';
        $value = 'nein';
        if (isset($this->structureResult['includeGlas'])
            && $this->structureResult['includeGlas'] == 'yes'
        ) {
            $value = 'ja';
            $this->updateUrl('einliegerwhg', 'nein');
        }
        $this->updateUrl($key, $value);
    }

    private function generateIncludeCarelessness()
    {
        $key = 'grob';
        $value = 'nein';
        if (isset($this->structureResult['includeCarelessness'])
            && $this->structureResult['includeCarelessness'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateRetention()
    {
        /*
         * DROPDOWN Values!
         */
        $key = 'selbst';
        $value = '';
        if (isset($this->structureResult['retention'])) {
            $value = $this->structureResult['retention'];
        }
        $this->updateUrl($key, $value);
    }

    private function generatePreviousInsurance()
    {
        $key = 'vorvers5';
        $value = 'nein';
        if (isset($this->structureResult['hasPreviousCases'])
            && $this->structureResult['hasPreviousCases'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generatePreviousInsuranceDamage()
    {
        $key = 'schaeden5';
        $value = 'nein';
        if (isset($this->structureResult['previousCases'])) {
            $mapping = [
                '0' => '0',
                'waterDamage' => '1 Leitungswasserschaden',
                'stormDamage' => '1 Sturmschaden',
                'otherDamage' => '1 Sonstiger Schaden',
                'twoDamages' => '2 Schaeden',
                'threeOrMoreDamages' => '3 oder mehr'
            ];

            if (isset($mapping[$this->structureResult['previousCases']])) {
                $value = $mapping[$this->structureResult['previousCases']];
            }
        }
        $this->updateUrlRaw($key, $value);
    }

    private function generatePublicService()
    {
        $key = 'beamte';
        $value = 'normal';
        if (isset($this->structureResult['publicService'])
            && $this->structureResult['publicService'] == 'yes'
        ) {
            $value = 'öffentl. Dienst';
        }
        $this->updateUrl($key, $value);
    }

    private function generateIncludeAllDangers()
    {
        $key = 'all_v';
        $value = 'nein';
        if (isset($this->structureResult['includeAllDangers'])
            && $this->structureResult['includeAllDangers'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateIncludeGrafitti()
    {
        $key = 'graf_v';
        $value = 'nein';
        if (isset($this->structureResult['includeGraffiti'])
            && $this->structureResult['includeGraffiti'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateIncludeDamagebyBreakIn()
    {
        $key = 'einb_v';
        $value = 'nein';
        if (isset($this->structureResult['includeDamagebyBreakIn'])
            && $this->structureResult['includeDamagebyBreakIn'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateIncludeOnsideDrainagePipes()
    {
        $key = 'zui_v';
        $value = 'nein';
        if (isset($this->structureResult['includeOnsideDrainagePipes'])
            && $this->structureResult['includeOnsideDrainagePipes'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateIncludeOutsideDrainagePipes()
    {
        $key = 'zua_v';
        $value = 'nein';
        if (isset($this->structureResult['includeOutsideDrainagePipes'])
            && $this->structureResult['includeOutsideDrainagePipes'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateIncludePipeBlockadeRemovement()
    {
        $key = 'rohr_v';
        $value = 'nein';
        if (isset($this->structureResult['includePipeBlockadeRemovement'])
            && $this->structureResult['includePipeBlockadeRemovement'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateAmountResult()
    {

        $amountSquareMeter = 0;
        $roofType = 'other';

        $atticFloor = 'noAttic';
        $upperFloor = $this->amountParameter['upperFloor'];
        $cellar = $this->amountParameter['cellar'];

        if (null != $this->amountParameter['roofType']) {
            // gabledRoof, flatRoof, other
            $roofType = ('other' == $this->amountParameter['roofType']) ? 'gabledRoof' : $this->amountParameter['roofType'];
        }
        if (null != $this->amountParameter['atticFloor']) {
            // undeveloped, expanded, partlyExpanded, noAttic
            $atticFloor = ('partlyExpanded' == $this->amountParameter['atticFloor']) ? 'expanded' : $this->amountParameter['atticFloor'];
        }

        /*
        echo "roofType (Dachtyp): " . $roofType . "<br>";
        echo "atticFloor (Dackgeschoss): " . $atticFloor . "<br>";
        echo "cellar (Keller): " . $cellar . "<br>";
*/
        if (0 == $cellar) {
            if ('flatRoof' == $roofType) {
                // flatRoof & attic = noAttic
                if ('noAttic' == $atticFloor) {
                    if (1 == $upperFloor) {
                        if ('noAttic' == $atticFloor) {
                            $amountSquareMeter = 160;
                        }
                    }
                }
            } elseif ('gabledRoof' == $roofType) {
                if (1 == $upperFloor) {
                    if ('undeveloped' == $atticFloor) {
                        // gabledRoof & attic = undeveloped
                        $amountSquareMeter = 160;
                    } elseif ('expanded' == $atticFloor) {
                        // gabledRoof & attic = expanded
                        $amountSquareMeter = 140;
                    }
                }
            }
        } elseif (1 == $cellar) {
            if ('flatRoof' == $roofType) {
                // flatRoof & attic = noAttic
                if ('noAttic' == $atticFloor) {
                    if (1 == $upperFloor) {
                        if ('noAttic' == $atticFloor) {
                            $ident = 4.1;
                            $amountSquareMeter = 190;
                        }
                    }
                }
            } elseif ('gabledRoof' == $roofType) {
                if (1 == $upperFloor) {
                    if ('undeveloped' == $atticFloor) {
                        // gabledRoof & attic = undeveloped
                        $amountSquareMeter = 190;
                    } elseif ('expanded' == $atticFloor) {
                        // gabledRoof & attic = expanded
                        $amountSquareMeter = 165;
                    }
                }
            }
        }
        //echo "<br>(qm-Preis): " . $amountSquareMeter;

        if (!empty($this->amountParameter['equipmentUpgrade'])) {
            // naturalStone, lightMetal, preciousWoodDoors,
            // heatPump, solarSystem, copperRoof,
            // preciousWoodCladding, naturalStoneFloor, highQualitySanitaryFacilities
            $upgrades = $this->amountParameter['equipmentUpgrade'];


            if (1 == $upgrades['copperRoof']) {
                $amountSquareMeter = $amountSquareMeter + 4;
            }
            if (1 == $upgrades['naturalStone']) {
                $amountSquareMeter = $amountSquareMeter + 5;
            }
            if (1 == $upgrades['preciousWoodCladding']) {
                $amountSquareMeter = $amountSquareMeter + 6;
            }
            if (1 == $upgrades['naturalStoneFloor']) {
                $amountSquareMeter = $amountSquareMeter + 4;
            }
            if (1 == $upgrades['lightMetal']) {
                $amountSquareMeter = $amountSquareMeter + 4;
            }
            if (1 == $upgrades['preciousWoodDoors']) {
                $amountSquareMeter = $amountSquareMeter + 3;
            }
            if (1 == $upgrades['heatPump'] || 1 == $upgrades['solarSystem']) {
                $amountSquareMeter = $amountSquareMeter + 6;
            }
            if (1 == $upgrades['highQualitySanitaryFacilities']) {
                $amountSquareMeter = $amountSquareMeter + 6;
            }
        }

        /*
        echo "<br>";
        echo "<br>Upgrades: ";
        print_r($this->amountParameter['upgrades']);
        echo "<br>Amount: ";
        print_r($amountSquareMeter);
        echo "<br>";
*/

        $atticFloorLivingSpace = $this->amountParameter['atticFloorLivingSpace'];
        $upperFloorLivingSpace = $this->amountParameter['upperFloorLivingSpace'];
        $cellarLivingSpace = $this->amountParameter['cellarLivingSpace'];
        $totalLivingSpace = $atticFloorLivingSpace + $upperFloorLivingSpace;

        $totalFloorsSum = $totalLivingSpace * $amountSquareMeter;
        $totalCellarSum = $cellarLivingSpace * 15;
        $totalSum = $totalFloorsSum + $totalCellarSum;

        //echo "<br>Gesamtsumme Wohnfläche: " . $totalFloorsSum;
        //echo "<br>Gesamtsumme Keller: " . $totalCellarSum;
        //echo "<br>Summe Gesamtfläche: " . $totalSum;


        $garageCount = $this->amountParameter['garageCount'];
        $carPortCount = $this->amountParameter['carPortCount'];
        $totalSum = $totalSum + (($garageCount + $carPortCount) * 700);
        //echo "<br>Summe Gesamtfläche + (Garagen: " . $garageCount . " CarPorts: " . $carPortCount . " x 700) =" . $totalSum;

        $this->updateUrlRaw('grund', 'Wert 1914');
        $this->updateUrl('wert', $totalSum);
    }

    public function build()
    {
        /*
        print_r($this->structureResult);
        echo "<br><br>";
        */
        $this->generateMisc();
        $this->generateAddress();
        $this->generateLivingHow();
        $this->generateLivingHowConstructionClass();
        $this->generateRoofType();
        $this->generateSelfUsedBuilding();
        $this->generateYearOfConstruction();
        $this->generateRenovatedRoof();
        $this->generateRenovatedHeater();
        $this->generateRenovatedWaterSanitary();
        $this->generateRenovatedElectronics();
        $this->generateLevelCount();
        $this->generateUnitCount();
        $this->generateIsAtticConverted();
        $this->generateSquareMetersMainFloors();
        $this->generateHasCellar();
        $this->generateHasGarage();
        $this->generateHasCarport();
        $this->generateHasOutbuildings();
        $this->generateEquipmentUpgrade();
        $this->generateDangers();
        $this->generateIncludeGlas();
        $this->generateHasPhotovoltaic();
        $this->generateElementary();
        $this->generateIncludeCarelessness();
        $this->generateRetention();
        $this->generatePreviousInsurance();
        $this->generatePreviousInsuranceDamage();
        $this->generatePublicService();
        $this->generateIncludeAllDangers();
        $this->generateIncludeGrafitti();
        $this->generateIncludeDamagebyBreakIn();
        $this->generateIncludeOnsideDrainagePipes();
        $this->generateIncludeOutsideDrainagePipes();
        $this->generateIncludePipeBlockadeRemovement();
        $this->generateAmountResult();
        /*
               echo "<br><br>";
               print_r($this->get());
               echo "<br><br>";
               print_r($this->amountParameter);
               echo "<br><br>";

              die;
       */
    }
}