<?php

namespace Main\InsuranceBundle\Helper\Filter;

use Main\UserBundle\Entity\User;

class PliResponseFilter
{
    private $user = null;
    private $structure = null;
    private $data = [];
    private $filteredData = [];
    
    // structure => parsed list
    private $filterParameterList = [
        'retention' => ['retention'],
        'amountCovered' => ['amountCoveredBodyInjury']
    ];
    
    private function parseBestPerfomanceGuaranteeFilterValue($filterKey, $filterValue, $dataValue)
    {
        $structureValue = $this->structure[$filterKey];
        $dataValue = $dataValue[$filterValue[0]];
        //echo "<br>" . $structureValue . " / " . $dataValue . "<br>";
        if ('no' == $structureValue) {
            if (strlen($dataValue) > 3) {
                return false;
            }
        }
        return true;
    }
    
    private function parseRetentionFilterValue($filterKey, $filterValue, $dataValue)
    {
        $structureValue = $this->structure[$filterKey];
        $dataValue = $dataValue[$filterValue[0]];
        //echo "<br>" . $structureValue . " / " . $dataValue . "<br>";
        if ('no' == $structureValue) {
            if ($dataValue > 0) {
                return false;
            }
        }
        return true;
    }
    
    private function parseAmountCoveredFilterValue($filterKey, $filterValue, $dataValue)
    {
        $structureValue = $this->structure[$filterKey];
        $dataValue = intval(str_replace('.', '', $dataValue[$filterValue[0]]));
        
        $mapping = [
            'min1mio' => '1000000',
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
    
    
    public function parse()
    {
        //print_r($this->filterParameterList);
        //echo "<br><br>";
        foreach ($this->filterParameterList as $filterKey => $filterValue) {
            foreach ($this->data as $dataKey => $dataValue) {
                $parseResult = true;
                if (isset($dataValue[$filterValue[0]])) {
                    if (isset($this->structure[$filterKey])) {
                        $filterMethod = 'parse' . ucfirst($filterKey . 'FilterValue');
                        if (method_exists($this, $filterMethod)) {
                            $parseResult = $this->$filterMethod($filterKey, $filterValue, $dataValue);
                            if (false == $parseResult) {
                                $this->data[$dataKey]['filtered'] = 1;
                            }
                        }
                        //echo $this->structure[$filterParameter] . "/" . $value[$filterParameter];die;
                        //echo "<br><br>";
                    }
                }
            }
        }
    }
    
    public function getFilteredData()
    {
        foreach ($this->data as $key => $value) {
            if (!isset($value['filtered']) || null === $value['filtered']) {
                $this->filteredData[] = $value;
            }
        }
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
        foreach ($this->data as $key => $value) {
            //print_r($value);
            if (isset($value['companyName'])
                && null !== $value['companyName']
                && null !== $value['tariffName']
                && null !== $value['tariffIdTmp']
                && null !== $value['rankingPerformance']
                && null !== $value['amountCoveredBodyInjury']
                && null !== $value['retention']
            ) {
                echo "companyName: " . $value['companyName'] . "<br>";
                echo "tariffName: " . $value['tariffName'] . "<br>";
                echo "tariffIdTmp: " . $value['tariffIdTmp'] . "<br>";
                echo "fee: " . $value['fee'] . "<br>";
                echo "rankingPerformance: " . $value['rankingPerformance'] . "<br>";
                echo "amountCoveredBodyInjury: " . $value['amountCoveredBodyInjury'] . "<br>";
                echo "retention: " . $value['retention'] . "<br>";
                
                if (isset($value['filtered']) && null !== $value['filtered']) {
                    echo "filtered" . "<br>";
                }
                echo "<br><br>";
            }
        }
    }
}