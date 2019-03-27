<?php

namespace Main\InsuranceBundle\Helper\Url;

class AliUrlBuilder extends AbstractUrlBuilder
{
    protected $index = 0;
    protected $indexMaximum = 0;
    protected $chipNoExist = null;
    private $kindOfAnimal = null;
    
    private function generateMisc()
    {
        $this->updateUrl('laufzeit', '1');
        $this->updateUrl('kombirabatte', 'nein');
        $this->updateUrl('tier_nebenberuf_v', 'nein');
        $this->updateUrl('papierlos', 'ja');
        
        if ('dog' == $this->kindOfAnimal) {
            // Dog
            $this->updateUrl('hund_schule_v', 'nein');
            $this->updateUrl('vsm_v', '0');
            $this->updateUrl('vsv_v', '0');
            $this->updateUrl('vsmbeh_v', '0');
        } elseif ('horse' == $this->kindOfAnimal) {
            // Horse
            $this->updateUrl('vsmp_v', '0');
            $this->updateUrl('pferd_stockmass_v', 'nein');
            $this->updateUrl('pferd_reiten_v', 'ja');
            $this->updateUrl('reitpass_v', 'nein');
            $this->updateUrl('pferd_reitbeteiligung_v', 'nein');
            $this->updateUrl('verein_v', 'nein');
            $this->updateUrl('kutsch_v', 'nein');
        }
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
        if (isset($this->structureResult['previousInsurance'])) {
            if ($this->structureResult['previousInsurance'] > 0
            ) {
                if ($this->structureResult['previousInsurance'] <= 5
                ) {
                    $value = $this->structureResult['previousInsurance'];
                } else {
                    $value = 5;
                }
            }
        }
        $this->updateUrl($key, $value);
    }
    
    private function generateRetention()
    {
        $key = 'sb';
        $value = 'nein';
        if (isset($this->structureResult['retention'])
            && 'yes' == $this->structureResult['retention']
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
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
    
    private function generateKindOfAnimal()
    {
        $key = 'artdestieres';
        $value = 'Hund';
        if (isset($this->structureResult['kindOfAnimal'])) {
            $this->kindOfAnimal = ($this->structureResult['kindOfAnimal'] == 'horse')
                ? 'horse' : 'dog';
            if ($this->structureResult['kindOfAnimal'] == 'horse'
            ) {
                $value = 'Pferd';
            }
        }
        $this->updateUrl($key, $value);
    }
    
    private function generateAnimalCount()
    {
        $key = 'anzahldertiere';
        $value = '1';
        if (isset($this->structureResult['animalCount']) && $this->structureResult['animalCount'] > 1) {
            if ($this->structureResult['animalCount'] > 6
            ) {
                $value = 6;
            } else {
                $value = $this->structureResult['animalCount'];
            }
        }
        $this->indexMaximum = $value;
        $this->updateUrl($key, $value);
    }
    
    private function generateAmount()
    {
        $key = 'vs_v';
        $value = '1000000';
        if (isset($this->structureResult['amountCovered'])) {
            $value = $this->structureResult['amountCovered'];
            
            $mapping = [
                'min1mio' => '1000000',
                'min3mio' => '3000000',
                'min5mio' => '5000000',
                'min10mio' => '10000000',
                'min15mio' => '15000000',
                'min20mio' => '20000000',
                'min50mio' => '50000000'
            ];
            if (isset($mapping[$this->structureResult['amountCovered']])) {
                $value = $mapping[$this->structureResult['amountCovered']];
            }
        }
        $this->updateUrl($key, $value);
    }
    
    /*
     * DOG
     */
    private function generateAnimalBreed()
    {
        $key = 'Rasse_Tier' . $this->index;
        $value = '';
        $i = $this->index - 1;
        if (isset($this->structureResult['animalCountEntry'])
            && isset($this->structureResult['animalCountEntry'][$i])
            && isset($this->structureResult['animalCountEntry'][$i]['breed'])
        ) {
            $value = $this->structureResult['animalCountEntry'][$i]['breed'];
        }
        $this->updateUrl($key, $value);
    }
    
    private function generateIsMixedBreed()
    {
        $key = 'mischling_hund' . $this->index;
        $value = '';
        $i = $this->index - 1;
        if (isset($this->structureResult['animalCountEntry'])
            && isset($this->structureResult['animalCountEntry'][$i])
            && isset($this->structureResult['animalCountEntry'][$i]['isMixedBreed'])
        ) {
            $value = $this->structureResult['animalCountEntry'][$i]['isMixedBreed'];
        }
        $this->updateUrl($key, $value);
    }
    
    private function generateMainMixedBreed()
    {
        $key = 'Rasse_Tier' . $this->index . 'a';
        $value = '';
        $i = $this->index - 1;
        if (isset($this->structureResult['animalCountEntry'])
            && isset($this->structureResult['animalCountEntry'][$i])
            && isset($this->structureResult['animalCountEntry'][$i]['mainMixedBreed'])
        ) {
            $value = $this->structureResult['animalCountEntry'][$i]['mainMixedBreed'];
        }
        $this->updateUrl($key, $value);
    }
    
    
    private function generateHasChipNo()
    {
        $key = 'chipnr';
        $value = 'nein';
        $i = $this->index - 1;
        if (isset($this->structureResult['animalCountEntry'])
            && isset($this->structureResult['animalCountEntry'][$i])
        ) {
            if (isset($this->structureResult['animalCountEntry'][$i]['hasChipNo'])
                && $this->structureResult['animalCountEntry'][$i]['hasChipNo'] == "yes"
            ) {
                if (0 == $this->chipNoExist) {
                    $this->chipNoExist = 1;
                    $value = 'ja';
                    $this->updateUrl($key, $value);
                }
            }
        }
        if ($this->index == $this->indexMaximum && null == $this->chipNoExist) {
            $this->updateUrl($key, $value);
        }
    }
    
    private function generatePuppiesProtection()
    {
        $key = 'vors_v';
        $value = 'nein';
        if (isset($this->structureResult['puppiesProtection'])
            && $this->structureResult['puppiesProtection'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }
    
    /*
     * HORSE
     */
    private function generateAnimalHorseBreed()
    {
        $key = 'rasse_pferd_v' . $this->index;
        $value = 'Sonstige';
        $this->updateUrl($key, $value);
    }
    
    private function generateHasLiveNo()
    {
        $key = 'lebensnr';
        $value = 'nein';
        if (isset($this->structureResult['liveNumberExist'])
            && $this->structureResult['liveNumberExist'] == "yes"
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }
    
    private function generateAuthorizedRiders()
    {
        $key = 'fremd_v';
        $value = 'nein';
        if (isset($this->structureResult['authorizedRiders'])
            && $this->structureResult['authorizedRiders'] == "yes"
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }
    
    private function generateDoHorseTournaments()
    {
        $key1 = 'pferderennen_v';
        $key2 = 'pferderennen_v';
        $value1 = 'nein';
        $value2 = 'nein';
        if (isset($this->structureResult['doHorseTournaments'])
            && $this->structureResult['doHorseTournaments'] == "yes"
        ) {
            $value1 = 'ja';
            $value2 = 'ja';
        }
        $this->updateUrl($key1, $value1);
        $this->updateUrl($key2, $value2);
    }
    
    
    public function build()
    {
        //print_r($this->structureResult);
        //echo "<br><br>";
        
        $this->generateKindOfAnimal();
        $this->generateAnimalCount();
        $this->generateAge();
        $this->generateAmount();
        $this->generateMisc();
        $this->generatePublicService();
        $this->generateRetention();
        $this->generatePreviousInsurance();
        $this->generatePreviousInsuranceDamage();
        
        if ('dog' == $this->kindOfAnimal) {
            $this->generatePuppiesProtection();
            for ($i = 1; $i <= $this->indexMaximum; $i++) {
                $this->index = $i;
                $this->generateAnimalBreed();
                $this->generateIsMixedBreed();
                $this->generateMainMixedBreed();
            }
            $this->generateHasChipNo();
            
        } elseif ('horse' == $this->kindOfAnimal) {
            $this->generatePuppiesProtection();
            for ($i = 1; $i <= $this->indexMaximum; $i++) {
                $this->index = $i;
                $this->generateAnimalHorseBreed();
            }
            $this->generateHasLiveNo();
            $this->generateAuthorizedRiders();
            $this->generateDoHorseTournaments();
        }
        
        /*
        echo "<br><br>";
        print_r($this->url);
        echo "<br><br>";
        print_r($this->structureResult);
        echo "<br><br>";
        print_r($this->get());
        echo "<br><br>";
        die;
*/
    }
    
}