<?php
namespace Main\InsuranceBundle\Helper\Parser;

class SurveyToTariffParser extends TariffSurveyParser
{
    public function __construct()
    {
        parent::__construct();
    }

    public function parseSubmittedValues($tariff, $map, $data)
    {
        $this->logPush("=> SurveyToTariffParser:parseSubmittedValues() entered ", " ");
        $this->logPush("Tariff values: ", $tariff);
        $this->logPush("Data values: ", $data);

        foreach ($map AS $entry) {
            $this->logPush("", "");
            $this->logPush("*********************************", "");
            $this->logPush("EntityAttributesName: " . $entry['entityAttributeName'] . " (Type: " . $entry['type'] . ")", "");
            //echo "hey: " . $entry['entityAttributeName'] . " => ";
            if ($entry['parse'] == true && array_key_exists($entry['entityAttributeName'], $data)) {

                if (isset($tariff[$entry['entityAttributeName']])) {

                    $newValue = null;
                    $boolList = [];
                    $this->logPush("Tariff value: ", $tariff[$entry['entityAttributeName']]);
                    $this->logPush("Survey value: ", $data[$entry['entityAttributeName']]);

                    if (($entry['type'] == 'checkbox' || $entry['type'] == 'radiogroup')) {

                        if (isset($data[$entry['entityAttributeName'] . '-Comment'])) {
                            $commentValue = $data[$entry['entityAttributeName'] . '-Comment'];
                            $data[$entry['entityAttributeName']][] = $commentValue;
                        }
                        $newValue = $this->buildCheckboxStructureEntry($data[$entry['entityAttributeName']]);;

                    } elseif ($entry['type'] == 'checkboxList') {
                        $boolList = $this->buildCheckboxStructureEntry($data[$entry['entityAttributeName']]);;

                        if (isset($entry['reference']) && $entry['reference']['parse'] == true && isset($data[$entry['reference']['name']])) {
                            $referenceAttributes = $this->buildReferenceListStructureEntry($data[$entry['reference']['name']]);

                            if (isset($tariff[$entry['entityAttributeName']][0]['checkValues'])) {
                                $boolList[0]['checkValues'] = $referenceAttributes;
                                $this->logPush("BoolList checkValues", $boolList);
                            }
                        }
                        $newValue = $boolList;
                    } elseif ($entry['type'] == 'select') {

                        $newValue = $data[$entry['entityAttributeName']];
                    } elseif ($entry['type'] == 'text') {

                        $newValue = $data[$entry['entityAttributeName']];
                    } elseif ($entry['type'] == 'bool') {

                        $boolList[0] = $this->buildBoolEntry($data[$entry['entityAttributeName']]);

                        if (isset($entry['reference']) && $entry['reference']['parse'] == true && isset($data[$entry['reference']['name']])) {
                            $referenceAttributes = $this->buildReferenceListStructureEntry($data[$entry['reference']['name']]);

                            $boolList[1]['values'] = $referenceAttributes;
                            $this->logPush("BoolList values", $boolList);
                            if (isset($tariff[$entry['entityAttributeName']][0]['values'])) {
                            } elseif (isset($tariff[$entry['entityAttributeName']][0]['checkValues'])) {
                                $boolList[0]['checkValues'] = $referenceAttributes;
                                $this->logPush("BoolList checkValues", $boolList);
                            }
                        }
                        $newValue = $boolList;

                    } else {
                        $this->logPush("NOT FOUND: ", $entry['entityAttributeName']);
                        $this->logPush("     value ---->: ", $tariff[$entry['entityAttributeName']]);
                        $this->logPush("     type ---->: ", $entry['type']);
                    }
                    $tariff[$entry['entityAttributeName']] = $newValue;
                    $this->logPush("Tariff new value: ", $tariff[$entry['entityAttributeName']]);
                } else {
                    $tariff[$entry['entityAttributeName']] = $data[$entry['entityAttributeName']];
                    $this->logPush("NOT found in tariff: ", $entry['entityAttributeName']);
                    $this->logPush("Tariff added value: ", $tariff[$entry['entityAttributeName']]);
                }

            }
        }
        //echo "<br><br>";print_r($tariff);die;
        return $tariff;
    }


    /**************************************************
     * PARSED VALUES
     */
    public function buildCheckboxStructureEntry($dataSource)
    {
        $this->logPush("=> buildCheckboxStructureEntry entered", "");
        $this->logPush("method::current value: ", $dataSource);
        $parsedValue = [];
        if (is_array($dataSource)) {
            foreach ($dataSource AS $value) {
                if ($value != 'other')
                    $parsedValue['values'][] = ['M' => $value];
            }
        } else {
            $parsedValue['values'][] = ['M' => $dataSource];
        }
        $this->logPush("method::parsedValue", $parsedValue);
        return [$parsedValue];
    }

    public function buildBoolEntry($entry)
    {
        $this->logPush("=> buildBoolEntry entered", "");
        return ['bool' => ($entry == 1) ? 1 : 0];
    }

    public function buildReferenceListStructureEntry($sourceList)
    {
        $this->logPush("=> buildReferenceListStructureEntry entered", "");
        $this->logPush("method::sourceList", $sourceList);
        $parsedList = [];
        foreach ($sourceList AS $attribute) {
            $this->logPush("method::attribute", $attribute);
            if (isset($attribute['Attribut']) && isset($attribute['Wert']) && !is_array($attribute['Attribut']))
                $parsedList[] = [$attribute['Attribut'] => $attribute['Wert']];
            //$this->logPush("method::parsedList::step", $parsedList);
        }
        $this->logPush("method::parsedList::result", $parsedList);
        return $parsedList;
    }

}

