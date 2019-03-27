<?php

namespace Main\InsuranceBundle\Helper\Url;

class LpiUrlBuilder extends AbstractUrlBuilder
{

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

    protected function generateAge()
    {
        $key = 'alter';
        $value = '18';
        if (null != $this->user->getBirthdate()) {
            $dateOfBirth = $this->user->getBirthdate();
            if ($dateOfBirth) {
                $today = date("d-m-Y");
                $diff = date_diff(date_create($dateOfBirth), date_create($today));
                $value = $diff->format('%Y');
            }
        }
        $this->updateUrl($key, $value);
        $this->updateUrl('alter2', $value);
    }

    private function generateJob()
    {
        $key = 'anag';
        $value = 'Arbeitnehmer';
        if (isset($this->structureResult['job'])
            && $this->structureResult['job'] != ''
        ) {
            $mapping = [
                'employee' => 'Arbeitnehmer',
                'withoutProfessionalActivity' => 'ohne berufliche Tätigkeit',
                'publicService' => 'öffentl. Dienst',
                'selfEmployed' => 'Selbständig',
                'permanentlyNoLongerEmployed' => 'auf Dauer nicht mehr erwerbstätig',
                'student' => 'Azubi/Student'
            ];
            if (isset($mapping[$this->structureResult['job']])) {
                $value = $mapping[$this->structureResult['job']];
            }
        }
        $this->updateUrlRaw($key, $value);
    }


    private function generatePrivateSector()
    {
        $key = 'tarif_privat';
        $value = '0';
        if (isset($this->structureResult['privateSector'])
            && $this->structureResult['privateSector'] == 'yes'
        ) {
            $value = '1';
        }
        $this->updateUrl($key, $value);
    }

    private function generateWorkAndJob()
    {
        $key = 'tarif_beruf';
        $value = '0';
        if (isset($this->structureResult['workAndJob'])
            && $this->structureResult['workAndJob'] == 'yes'
        ) {
            $value = '1';
        }
        $this->updateUrl($key, $value);
    }

    private function generateTrafficLawProtectionWithFamily()
    {
        $key = 'tarif_verkehr_familie';
        $value = '1';
        /*
        if (isset($this->structureResult['trafficLawProtectionWithFamily'])
            && $this->structureResult['trafficLawProtectionWithFamily'] == 'yes'
        ) {
            $value = '1';
        }
        */
        $this->updateUrl($key, $value);
    }

    private function generateTrafficLawProtection()
    {
        $key = 'tarif_verkehr';
        $value = '0';
        /*
         * if (isset($this->structureResult['trafficLawProtection'])
            && $this->structureResult['trafficLawProtection'] == 'yes'
        ) {
            $value = '1';
        }
        */
        $this->updateUrl($key, $value);
    }

    private function generateRentedFlats()
    {
        $key = 'vermiet';
        $value = '0';
        if (isset($this->structureResult['rentedFlats'])
            && $this->structureResult['rentedFlats'] == 'yes'
        ) {
            if (isset($this->structureResult['rentedFlatsCount'])
                && $this->structureResult['rentedFlatsCount'] > 0
            ) {
                if ($this->structureResult['rentedFlatsCount'] > 6) {
                    $value = 6;
                } else {
                    $value = $this->structureResult['rentedFlatsCount'];
                }
                for ($i = 1; $i <= $value; $i++) {
                    if (isset($this->structureResult['rentedFlatsEntry']['unit' . $i])) {
                        if (isset($this->structureResult['rentedFlatsEntry']['unit' . $i]['yearlyGrossRent'])) {
                            $keyEntry = 'OB' . $i;
                            $valueEntry = $this->structureResult['rentedFlatsEntry']['unit' . $i]['yearlyGrossRent'];
                            $this->updateUrl($keyEntry, $valueEntry);
                            //$keyEntry2 = 'vermiet' . $i;
                            //$valueEntry2 = $this->structureResult['rentedFlatsEntry']['unit' . $i]['yearlyGrossRent'];
                            //$this->updateUrl($keyEntry2, $valueEntry2);
                        }
                    }
                }
            }
        }
        $this->updateUrl($key, $value);
    }

    private function generateRentedFlatsSelf()
    {
        $key = 'tarif_miete';
        $value = '1';
        if (isset($this->structureResult['rentedFlatsSelf'])
            && $this->structureResult['rentedFlatsSelf'] == 'no'
        ) {
            $value = '0';
        }
        $this->updateUrl($key, $value);
    }

    private function generateMaritalStatus()
    {
        $key = 'famstand';
        $value = 'Familie';
        $key2 = 'singrab';
        $value2 = 'nein';
        if (isset($this->structureResult['single'])
            && $this->structureResult['single'] == 'yes'
        ) {
            $value = 'Single';
            $value2 = 'ja';
        }
        $this->updateUrl($key, $value);
        $this->updateUrl($key2, $value2);
    }

    private function generateAgeOfPartner()
    {
        $key = 'alterpartner';
        $value = '18';
        $value2 = '18';
        if (isset($this->structureResult['single'])
            && $this->structureResult['single'] == 'no'
        ) {
            if (isset($this->structureResult['ageOfPartner'])
                && $this->structureResult['ageOfPartner'] > 0
            ) {
                $value = $this->structureResult['ageOfPartner'];
                $value2 = $this->structureResult['ageOfPartner'];
            } else {
                $value = 30;
                $value2 = 30;
            }
        }
        $this->updateUrl($key, $value);
        $this->updateUrl('alterpartner2', $value2);
    }

    private function generateMisc()
    {
        $this->updateUrl('laufzeit', 1);
        $this->updateUrl('kombirabatte', 'nein');
        $this->updateUrl('folge_v', 'nein');
    }

    private function generateAmount()
    {
        $key = 'vs_v';
        $value = '300000';
        if (isset($this->structureResult['amount'])
            && $this->structureResult['amount'] > 0
        ) {
            $mapping = [
                '300T' => '300000',
                '500T' => '500000',
                '750T' => '500000',
                'unlimited' => 'unbegrenzt'
            ];
            if (isset($mapping[$this->structureResult['amount']])) {
                if ($this->structureResult['amount'] == '300T') {
                    $value = '300000';
                } elseif ($this->structureResult['amount'] == '500T') {
                    $value = '500000';
                } elseif ($this->structureResult['amount'] == '750T'
                    || $this->structureResult['amount'] == '1000T'
                    || $this->structureResult['amount'] == 'unlimited'
                ) {
                    $value = $mapping[$this->structureResult['amount']];
                }
            }
        }
        $this->updateUrl($key, $value);
    }


    private function generateBail()
    {
        $key = 'kaution_v';
        $value = '50000';
        /*
        if (isset($this->structureResult['almostAllProducts'])
            && $this->structureResult['almostAllProducts'] == 'yes'
        ) {
            $value = '500000';
        }
        */
        $this->updateUrl($key, $value);
    }


    private function generateMatrimonialMatters()
    {
        $key = 'ehestreit_v';
        $value = 'nein';
        if (isset($this->structureResult['matrimonialMatters'])
            && $this->structureResult['matrimonialMatters'] == 'yes'
        ) {
            $value = 'beratung';
        }
        $this->updateUrl($key, $value);
    }


    private function generateAlimonyMatters()
    {
        $key = 'unterhalt_v';
        $value = 'nein';
        if (isset($this->structureResult['alimonyMatters'])
            && $this->structureResult['alimonyMatters'] == 'yes'
        ) {
            $value = 'beratung';
        }
        $this->updateUrl($key, $value);
    }

    private function generateExtendedCriminalLegalProtection()
    {
        $key = 'spezialstraf_v';
        $value = 'nein';
        if (isset($this->structureResult['extendedCriminalLegalProtection'])
            && $this->structureResult['extendedCriminalLegalProtection'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateWorldwide()
    {
        $key = 'ausland_v';
        $value = 'nein';
        if (isset($this->structureResult['worldwide'])
            && $this->structureResult['worldwide'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generatePreviousInsurance()
    {
        $key = 'vorvers5';
        $value = 'keine Vorversicherung';
        if (isset($this->structureResult['existHowLong'])) {
            $mapping = [
                'noPreInsurance' => 'keine Vorversicherung',
                'lessThan2years' => 'weniger als 2 Jahre',
                'min2years' => 'mind. 2 Jahre',
                'min3years' => 'mind. 3 Jahre',
                'min4years' => 'mind. 4 Jahre',
                'min5years' => 'mind. 5 Jahre'
            ];
            if (isset($mapping[$this->structureResult['existHowLong']])) {
                $value = $mapping[$this->structureResult['existHowLong']];
            }
        }
        $this->updateUrlRaw($key, $value);
    }

    private function generateLastCase()
    {
        $key = 'wannschaden';
        $value = 'vor mehr als 5 Jahren oder schadenfrei';
        if (isset($this->structureResult['lastLawCase'])) {
            $mapping = [
                'morethan5years' => 'vor mehr als 5 Jahren oder schadenfrei',
                'lessThan2years' => 'innerhalb der letzten 2 Jahre',
                'min2years' => 'vor mehr als 2 Jahren',
                'min3years' => 'vor mehr als 3 Jahren',
                'min4years' => 'vor mehr als 4 Jahren'
            ];
            if (isset($mapping[$this->structureResult['lastLawCase']])) {
                $value = $mapping[$this->structureResult['lastLawCase']];
            }
        }
        $this->updateUrlRaw($key, $value);
    }

    private function generateContractProtection()
    {
        $key = 'vertragsrs_v';
        $value = 'nein';
        if (isset($this->structureResult['contractProtection'])
            && $this->structureResult['contractProtection'] == 'yes'
        ) {
            $value = 'ja';
        }
        $this->updateUrl($key, $value);
    }

    private function generateRetention()
    {
        $key = 'selbst';
        $value = '250';

        if (isset($this->structureResult['retention'])) {
            $mapping = [
                'until250' => '0-250',
                'above250' => '250'
            ];
            if (isset($mapping[$this->structureResult['retention']])) {
                $value = $mapping[$this->structureResult['retention']];
            }
        }
        $this->updateUrlRaw($key, $value);

    }

    protected function updateUrl($key, $value)
    {
        if (!empty($value) || $value >= 0) {
            $this->url .= '&' . $key . "=" . $value;
            //$this->url .= '&' . $key . "=" . $this->encode($value);
        }
    }

    public function build()
    {
        $this->generatePostalCode();
        $this->generateJob();
        $this->generateAge();
        $this->generatePrivateSector();
        $this->generateWorkAndJob();
        $this->generateTrafficLawProtectionWithFamily();
        $this->generateTrafficLawProtection();
        $this->generateRentedFlats();
        $this->generateRentedFlatsSelf();
        $this->generateMaritalStatus();
        $this->generateAgeOfPartner();
        $this->generateMisc();
        $this->generatePreviousInsurance();
        $this->generateLastCase();
        $this->generateBail();
        $this->generateAmount();
        $this->generateMatrimonialMatters();
        $this->generateAlimonyMatters();
        $this->generateExtendedCriminalLegalProtection();
        $this->generateWorldwide();
        $this->generateContractProtection();
        $this->generateRetention();
        /*
        print_r($this->get());
        echo "<br><br>";
        print_r($this->structureResult);
        echo "<br><br>";
        die;
        */
    }
}