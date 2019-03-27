<?php

namespace Main\InsuranceBundle\Helper\Filter;

use Main\UserBundle\Entity\User;

class AliResponseFilter
{
    private $user = null;
    private $structure = null;
    private $data = [];
    private $filteredData = [];
    private $kindOfAnimal = null;
    private $filterParameterList = [
        'retention' => [
            'dog' => 'retentionDog',
            'horse' => 'retentionHorse'
        ],
        'amountCovered' => [
            'dog' => 'amountCoveredDog',
            'horse' => 'amountCoveredHorse'
        ]
    ];
    private $filterAnimalSpecificParameterList = [
        'horse' => [
            'Welpen',
            'Figuranten'
        ]
    ];
    
    
    private function parseAmountCoveredFilterValue($filterKey, $filterValue, $dataValue)
    {
        $structureValue = $this->structure[$filterKey];
        $dataValue = intval(str_replace('.', '', $dataValue[$filterValue]));
        
        $mapping = [
            'max1mio' => '1000000',
            'min3mio' => '3000000',
            'min5mio' => '5000000',
            'min10mio' => '10000000',
            'min15min' => '15000000',
            'min20mio' => '20000000',
            'min50mio' => '50000000'
        ];
        
        if (isset($mapping[$structureValue])
            && null != $mapping[$structureValue]
        ) {
            $mappingValue = $mapping[$structureValue];
            //print_r($mappingValue);echo " / "; print_r($dataValue);
            //echo "<br>" . $structureValue . " / " . $dataValue . "<br>";
            if ($dataValue < $mappingValue) {
                //echo " / ";print_r('is marked');
                return false;
            }
        }
        return true;
    }
    
    private function parseRetentionFilterValue($filterKey, $animalSpecificFilter, $dataValue)
    {
        $structureValue = $this->structure[$filterKey];
        $dataValue = intval($dataValue[$animalSpecificFilter]);
        if ('no' == $structureValue) {
            if ($dataValue > 0) {
                //echo "<br>" . $dataValue . " / " . $structureValue . "<br>";
                return false;
            }
        }
        return true;
    }
    
    public function parseBaseParameters()
    {
        /*
         print_r($this->filterParameterList);
        echo "<br><br>";
        print_r($this->structure);
        echo "<br><br>";
        */
        foreach ($this->filterParameterList as $filterKey => $filterValue) {
            if (isset($filterValue[$this->kindOfAnimal])) {
                $animalSpecificFilter = $filterValue[$this->kindOfAnimal];
                foreach ($this->filteredData as $dataKey => $dataValue) {
                    //echo "<br><br>";
                    //print_r($dataValue);
                    $parseResult = true;
                    if (!is_array($animalSpecificFilter)
                        && isset($dataValue[$animalSpecificFilter])) {
                        /*
                        print_r($filterKey);
                        echo "<br>";
                        echo "<br>";
                        echo " || Animal Specific Filter: " . $animalSpecificFilter . "||<br>";
                        echo "filterKey: " . $filterKey;
                        echo " / ";
                        print_r($animalSpecificFilter);
                        echo " / data: ";
                        print_r($dataValue[$animalSpecificFilter]);
                        echo "<br>";
                        */
                        if (isset($this->structure[$filterKey])) {
                            $filterMethod = 'parse' . ucfirst($filterKey . 'FilterValue');
                            //print_r($filterMethod);
                            if (method_exists($this, $filterMethod)) {
                                $parseResult = $this->$filterMethod($filterKey, $animalSpecificFilter, $dataValue);
                                if (false == $parseResult) {
                                    $this->filteredData[$dataKey]['filtered'] = 1;
                                    //unset($this->filteredData[$dataKey]);
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    
    public function parseOppositeAnimalAttributes()
    {
        if (isset($this->structure['kindOfAnimal'])) {
            $this->kindOfAnimal = $this->structure['kindOfAnimal'];
            $oppositeKindOfAnimal = ('dog' == $this->kindOfAnimal) ? 'pferd' : 'hund';
            $tmpFilterValues = (!isset($this->filterAnimalSpecificParameterList[$this->kindOfAnimal]))
                ? [$oppositeKindOfAnimal] : array_merge($this->filterAnimalSpecificParameterList[$this->kindOfAnimal], [$oppositeKindOfAnimal]);
            //print_r($tmpFilterValues);
            //echo "<br><br>";
            foreach ($this->data as $dataKey => $dataValue) {
                /*
                print_r($this->data);
                echo "<br><br>";
                echo "*****";
                */
                foreach ($dataValue as $key => $value) {
                    $isDismissed = 0;
                    if (isset($value['resultText'])) {
                        /*
                        echo "<br><br>";
                        echo "DataKey: ";
                        print_r($dataKey);
                        echo " / Key: ";
                        print_r($key);
                        echo " / Value: ";
                        print_r($value);
                        echo "<br><br>";
                        */
                        foreach ($tmpFilterValues as $tmpFilterValuesKey => $tmpFilterValuesValue) {
                            if (isset($value['resultText'])) {
                                $kindOfAnimalExist = strpos(strtolower($value['resultText']), strtolower($tmpFilterValuesValue));
                                $isDismissed = (is_numeric($kindOfAnimalExist) && $kindOfAnimalExist >= 0)
                                    ? 1 : 0;
                                /*
                                echo $isDismissed . " => " . strtolower($tmpFilterValuesValue) . " //// " . strtolower($value['resultText']) . "<br>";
                                echo "<br>";
                                */
                            }
                        }
                    }
                    if (isset($value['tmpAnimalType'])
                        && $this->kindOfAnimal != $value['tmpAnimalType']) {
                        $isDismissed = 1;
                    }
                    
                    if (0 === $isDismissed) {
                        //echo strpos(strtolower($value['resultText']), $oppositeKindOfAnimal) . " / " . "ResultText: " . $value['resultText'] . "<br>";
                        $this->filteredData[$dataKey][$key] = $value;
                        /*
                        echo 'NOT ' . $key . " => ";
                        print_r($this->filteredData[$dataKey][$key]);
                        echo " <br> ";
                        */
                    } else {
                        //unset($this->filteredData[$dataKey][$key]);
                        //$tmpEnrichmentKey = str_replace('-enrichment', '', $key);
                        //unset($this->filteredData[$dataKey][$tmpEnrichmentKey]);
                        /*
                        echo 'YES ' . $key . " => ";
                        print_r($this->filteredData[$dataKey][$key]);
                        echo "EK: " . $tmpEnrichmentKey . " <br> ";
                        */
                        //echo $this->filteredData[$dataKey][$tmpEnrichmentKey] . " <br> ";
                    }
                }
            }
            /*
            echo "<br><br><br><br>";
            print_r($this->filteredData);
            echo "<br><br>";
            die;
            */
        }
    }
    
    public function parse()
    {
        $this->parseOppositeAnimalAttributes();
        $this->parseBaseParameters();
    }
    
    
    public function getFilteredData()
    {
        return $this->filteredData;
    }
    
    public function setUser(User $user = null)
    {
        $this->user = $user;
    }
    
    public function setData($data = null)
    {
        $this->data = $data;
    }
    
    public function setStructure($structure = null)
    {
        $this->structure = $structure;
    }
    
    public function _toString(): void
    {
        foreach ($this->filteredData as $key => $value) {
            print_r($value);
            if (isset($value['companyName'])
                && null !== $value['companyName']
                && null !== $value['tariffName']
                && null !== $value['tariffIdTmp']
                && null !== $value['rankingPerformance']
                && (null !== $value['amountCoveredDog']
                    || null !== $value['amountCoveredHorse'])
                && (null !== $value['retentionDog']
                    || null !== $value['retentionHorse'])
            ) {
                echo "companyName: " . $value['companyName'] . "<br>";
                echo "tariffName: " . $value['tariffName'] . "<br>";
                echo "tariffIdTmp: " . $value['tariffIdTmp'] . "<br>";
                echo "fee: " . $value['fee'] . "<br>";
                echo "rankingPerformance: " . $value['rankingPerformance'] . "<br>";
                if (isset($value['amountCoveredDog'])) {
                    echo "amountCoveredDog: " . $value['amountCoveredDog'] . "<br>";
                }
                if (isset($value['amountCoveredHorse'])) {
                    echo "amountCoveredHorse: " . $value['amountCoveredHorse'] . "<br>";
                }
                if (isset($value['retentionDog'])) {
                    echo "retentionDog: " . $value['retentionDog'] . "<br>";
                }
                if (isset($value['retentionHorse'])) {
                    echo "retentionHorse: " . $value['retentionHorse'] . "<br>";
                }
                if (isset($value['filtered']) && null !== $value['filtered']) {
                    echo "filtered" . "<br>";
                }
                echo "<br><br>";
            }
        }
    }
}