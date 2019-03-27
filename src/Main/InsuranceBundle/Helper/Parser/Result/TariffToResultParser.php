<?php
namespace Main\InsuranceBundle\Helper\Parser\Result;

use Main\InsuranceBundle\Helper\Parser\TariffSurveyParser;
use Psr\Log\LoggerInterface;

class TariffToResultParser extends TariffSurveyParser
{

   /****************************************************************
    * SET DEFAULT VALUES
    */
   public function fillDefaultValues($structure, $tariff, $map)
   {
      $this->logPush("=> fillDefaultValues entered", "");
      //print_r($map);
      //echo "<br><br>";
      //print_r($tariff);
      foreach ($map AS $entry) {
         if ($entry['parse'] == true
            && array_key_exists($entry['entityAttributeName'], $tariff)
         ) {
            //&& isset($structure['pages'][$entry['page']]['elements'][$entry['element']])
            $this->logPush("", "");
            $this->logPush("*********************************", "");
            $this->logPush("Page: " . $entry['page'] . " Element: " . $entry['element'], "");
            $this->logPush("EntityAttributesName: " . $entry['entityAttributeName'] . " (Type: " . $entry['type'] . ")", "");

            $element = &$structure['pages'][$entry['page']]['elements'][$entry['element']];
            if (isset($element['type']) && $element['type'] == 'panel')
               $element = &$structure['pages'][$entry['page']]['elements'][$entry['element']]['elements'][0];
            $defaultValue = &$element['defaultValue'];
            $this->logPush("Structure default value: ", $defaultValue);
            $this->logPush("Tariff default value: ", $tariff[$entry['entityAttributeName']]);

            // CHECKBOX
            if ($entry['type'] == 'checkbox') {
               if (isset($entry['load']) && $entry['load'] == true) {
                  $defaultValue = $this->insertDefaultValuesCheckboxListLoad($tariff[$entry['entityAttributeName']]);
               } else {
                  $defaultValue = $this->insertDefaultValuesCheckboxList($tariff[$entry['entityAttributeName']]);
               }

               if (isset($entry['reference']) && $entry['reference']['parse'] == true) {

                  $referenceElement = &$structure['pages'][$entry['page']]['elements'][$entry['element']]['elements'][1];
                  $this->logPush("ReferenceElement: ", $entry['reference']);
                  $defaultReferenceValue = &$referenceElement['defaultValue'];

                  $referenceList = [];
                  if (isset($tariff[$entry['entityAttributeName']][1]['values'])) {
                     $referenceList = $tariff[$entry['entityAttributeName']][1]['values'];
                  } elseif (isset($tariff[$entry['entityAttributeName']][1]['checkValues'])) {
                     $referenceList = $tariff[$entry['entityAttributeName']][1]['checkValues'];
                  }
                  $defaultReferenceValue = $this->buildDefaultValueSurveyList($referenceList);
                  $this->logPush("ReferenceList: ", $referenceList);

                  $referenceElement['rowCount'] = count($referenceList);
                  $referenceElement['columns'][0]['choices'][0]['value'] = $referenceList;
               }

            } elseif ($entry['type'] == 'checkboxList') {
               $this->logPush("Tariff target defaults => structure: ", $tariff[$entry['entityAttributeName']]);

               $defaultValue = $this->insertDefaultValuesCheckboxList($tariff[$entry['entityAttributeName']]);

               if (isset($entry['reference'])
                  && isset($tariff[$entry['entityAttributeName']][0]['checkValues'])
                  && $entry['reference']['parse'] == true
               ) {
                  $referenceElement = &$structure['pages'][$entry['page']]['elements'][$entry['element']]['elements'][1];
                  $defaultReferenceValue = &$referenceElement['defaultValue'];
                  $this->logPush("StructureChoices::entryReferenceDefaultValue", $defaultReferenceValue);

                  $referenceList = [];
                  if (isset($tariff[$entry['entityAttributeName']][0]['checkValues'])) {
                     $referenceList = $tariff[$entry['entityAttributeName']][0]['checkValues'];
                     $this->logPush("StructureChoices::referenceList", $referenceList);
                  }
                  $defaultReferenceValue = $this->constructKeyCheckValueSurveyList($referenceList);
                  $this->logPush("ReferenceList: ", $referenceList);

                  $referenceElement['rowCount'] = count($referenceList);
                  $referenceElement['columns'][0]['choices'][0]['value'] = $referenceList;
               }


            } elseif ($entry['type'] == 'radiogroup') {

               $defaultValue = $this->insertDefaultValuesRadiogroupList($tariff[$entry['entityAttributeName']]);
               if (isset($entry['reference']) && $entry['reference']['parse'] == true) {

                  $referenceElement = &$structure['pages'][$entry['page']]['elements'][$entry['element']]['elements'][1];
                  $this->logPush("ReferenceElement: ", $entry['reference']);
                  $defaultReferenceValue = &$referenceElement['defaultValue'];

                  $referenceList = [];
                  if (isset($tariff[$entry['entityAttributeName']][1]['values'])) {
                     $referenceList = $tariff[$entry['entityAttributeName']][1]['values'];
                  } elseif (isset($tariff[$entry['entityAttributeName']][1]['checkValues'])) {
                     $referenceList = $tariff[$entry['entityAttributeName']][1]['checkValues'];
                  }
                  $defaultReferenceValue = $this->buildDefaultValueSurveyList($referenceList);
                  $this->logPush("ReferenceList: ", $referenceList);

                  $referenceElement['rowCount'] = count($referenceList);
                  $referenceElement['columns'][0]['choices'][0]['value'] = $referenceList;
               }

            } elseif ($entry['type'] == 'select') {

               $defaultValue = $tariff[$entry['entityAttributeName']];
            } elseif ($entry['type'] == 'text') {

               $defaultValue = $tariff[$entry['entityAttributeName']];
            } elseif ($entry['type'] == 'bool') {

               $this->logPush("Tariff target defaults => structure: ", $tariff[$entry['entityAttributeName']]);
               $defaultValue = $this->buildSurveyBool($tariff[$entry['entityAttributeName']]);

               if (isset($entry['reference'])
                  && (isset($tariff[$entry['entityAttributeName']][1]['values'])
                     || isset($tariff[$entry['entityAttributeName']][1]['checkValues']))
                  && $entry['reference']['parse'] == true
               ) {
                  $this->logPush("StructureChoices: ", $entry['reference']);

                  $referenceElement = &$structure['pages'][$entry['page']]['elements'][$entry['element']]['elements'][1];
                  $defaultReferenceValue = &$referenceElement['defaultValue'];

                  $referenceList = [];
                  if (isset($tariff[$entry['entityAttributeName']][1]['values'])) {
                     $referenceList = $tariff[$entry['entityAttributeName']][1]['values'];
                  } elseif (isset($tariff[$entry['entityAttributeName']][1]['checkValues'])) {
                     $referenceList = $tariff[$entry['entityAttributeName']][1]['checkValues'];
                  }
                  $defaultReferenceValue = $this->buildDefaultValueSurveyList($referenceList);

                  $this->logPush("ReferenceList new: ", $defaultReferenceValue);
                  $referenceElement['rowCount'] = count($referenceList);
                  $referenceElement['columns'][0]['choices'][0]['value'] = $referenceList;
               }
            } elseif ($entry['type'] == 'array' && isset($entry['referenceName'])) {
            } else {
               $this->logPush("NOT FOUND: ", $entry['entityAttributeName']);
               $this->logPush("     value ---->: ", $tariff[$entry['entityAttributeName']]);
               $this->logPush("     type ---->: ", $entry['type']);
               $this->logPush("     element ---->: ", $element);
            }
            $this->logPush("Structure NEW defaultValue ---->: ", $defaultValue);
         }

      }
      return $structure;
   }


   protected function insertDefaultValuesRadiogroupList($sourceList)
   {
      $this->logPush("=> insertDefaultValuesRadiogroupList entered", "");
      $this->logPush("method::sourcelist::entry", $sourceList);
      $result = null;
      if (count($sourceList) > 0 && isset($sourceList[0]['values'])) {
         foreach ($sourceList[0]['values'] AS $entry) {
            $this->logPush("method::sourcelist::entry", $entry);
            foreach ($entry AS $key => $num) {
               $result = $num;
            }
         }
      }
      $this->logPush("method::sourcelist::result", $result);
      return $result;
   }

   protected function insertDefaultValuesCheckboxListLoad($sourceList)
   {
      $this->logPush("=> constructCheckboxDefaultValuesLoad entered", "");
      $this->logPush("method::sourcelist", $sourceList);
      $result = [];
      if (count($sourceList) > 0) {
         foreach ($sourceList AS $entry) {
            $this->logPush("method::sourcelist::entry", $entry);
            if (isset($entry['identifier'])) {
               $this->logPush("method:sourceList::identifier", $entry['identifier']);
               $result[] = $entry['identifier'];

               /*
               foreach ($entry AS $key => $value) {
                  foreach ($value AS $key => $num) {
                     $result[] = $num;
                  }
               }*/
            }
         }
      }
      $this->logPush("method::sourcelist::result", $result);
      return $result;
   }

   protected function insertDefaultValuesCheckboxList($sourceList)
   {
      $this->logPush("=> insertDefaultValuesCheckboxList entered", "");
      $this->logPush("method::sourcelist::entry", $sourceList);
      $result = [];
      if (count($sourceList) > 0 && isset($sourceList[0]['values'])) {
         foreach ($sourceList[0]['values'] AS $entry) {
            $this->logPush("method::sourcelist::entry", $entry);
            foreach ($entry AS $key => $num) {
               $result[] = $num;
            }
         }
      }
      $this->logPush("method::sourcelist::result", $result);
      return $result;
   }


   protected function buildSurveyBool($source)
   {
      $this->logPush("=> buildSurveyBool entered", "");
      $bool = (isset($source[0]['bool'])) ? $source[0]['bool'] : 0;
      $this->logPush("method::bool", $bool);
      return ($bool == 1) ? "1" : "0";
   }

   protected function constructKeyCheckValueSurveyList($sourceList)
   {
      $this->logPush("=> constructKeyCheckValueSurveyList() entered ", "");
      $parsedList = [];
      $this->logPush("method::sourceList ", $sourceList);
      foreach ($sourceList AS $attribute) {
         foreach ($attribute AS $key => $value) {
            $parsedList[] = [
               "Wert" => $value,
               "Attribut" => $key
            ];
         }
      }
      $this->logPush("method::parsedList ", $parsedList);
      //print_r($parsedList);
      return $parsedList;
   }


   protected function buildDefaultValueSurveyList($sourceList)
   {
      $this->logPush("=> buildDefaultValueSurveyList entered ", "");
      $parsedList = [];
      $this->logPush("method::sourceList ", $sourceList);
      foreach ($sourceList AS $attribute) {
         foreach ($attribute AS $key => $value) {
            $parsedList[] = [
               "Wert" => $value,
               "Attribut" => $key
            ];
         }
      }
      $this->logPush("method::parsedList ", $parsedList);
      //print_r($parsedList);
      return $parsedList;
   }

   /****************************************************************
    * SET LIST VALUES
    */
   public function setSurveyListValues($structure, $tariff, $map)
   {
      $this->logPush("=> setSurveyListValues entered", "");
      foreach ($map AS $entry) {
         if ($entry['parse'] == true) {
            $this->logPush("", "");
            $this->logPush("*********************************", "");
            $this->logPush("Page: " . $entry['page'] . " Element: " . $entry['element'], "");
            $this->logPush("EntityAttributesName: " . $entry['entityAttributeName'] . " (Type: " . $entry['type'] . ")", "");

            $element = &$structure['pages'][$entry['page']]['elements'][$entry['element']];
            if (isset($element['type']) && $element['type'] == 'panel')
               $element = &$structure['pages'][$entry['page']]['elements'][$entry['element']]['elements'][0];

            if ($entry['type'] == 'checkbox' || $entry['type'] == 'radiogroup') {
               $this->logPush("Structure checkboxes/radiogroup: ", $element['choices']);

               if (isset($entry['load']) && $entry['load'] == true) {
                  $list = [];
                  if ($entry['load'] == 'checklist')
                     $list = $this->surveyValueList[$entry['entityAttributeName']];
                  $element['choices'] = $this->buildCheckboxListLoad($list);
               } else {
                  $element['choices'] = $this->buildCheckboxList($tariff[$entry['entityAttributeName']], $element['choices'], $entry['unit'], $entry['extend']);
               }

               $this->logPush("new StructureChoices: ", $element['choices']);

            } elseif ($entry['type'] == 'checkboxList' && $entry['json']) {
               $this->logPush("StructureChoices: ", $element['choices']);
               $this->logPush("Tariff target defaults => structure: ", $tariff[$entry['entityAttributeName']]);

               $element['choices'] = $this->buildCheckboxList($tariff[$entry['entityAttributeName']], $element['choices'], $entry['unit'], $entry['extend']);
               $this->logPush("new StructureChoices: ", $element['choices']);

            } elseif ($entry['type'] == 'radiogroup') {

            } elseif ($entry['type'] == 'select') {

               $selectList = [];
               if (isset($entry['load']) && isset($this->surveyValueList[$entry['entityAttributeName']])) {
                  if ($entry['load'] == 'selectList') {
                     $selectList = $this->surveyValueList[$entry['entityAttributeName']];
                  }
                  $element['choices'] = $this->buildSurveySelectListValues($selectList);

                  $this->logPush("new SelectList: ", $element['choices']);
               }
            } else {
               $this->logPush("NOT FOUND: ", $entry['entityAttributeName']);
               $this->logPush("     value ---->: ", $tariff[$entry['entityAttributeName']]);
               $this->logPush("     type ---->: ", $entry['type']);
               $this->logPush("     element ---->: ", $element);
            }
         }

      }
      return $structure;
   }

   protected function buildCheckboxListLoad($sourceList)
   {
      $this->logPush("=> buildCheckboxListLoad entered", "");
      $checkboxList = [];
      $countryCode = null;
      $this->logPush("", "");
      $this->logPush("method::choices::sourceList:startParsing:", $sourceList);
      foreach ($sourceList AS $sourceAttribute) {
         $this->logPush("method::choices::sourceAttributes", $sourceAttribute);
         $parsedListValue = [
            'value' => $sourceAttribute['identifier'],
            'text' => ['de' => $sourceAttribute['name']]
         ];
         $checkboxList[] = $parsedListValue;
      }
      $this->logPush("method::choices::parsedList completed:", $checkboxList);
      return $checkboxList;
   }

   protected function buildCheckboxList($sourceList, $choices, $unit, $extend)
   {
      $this->logPush("=> buildCheckboxList entered", "");
      $checkboxList = [];
      $countryCode = "de";
      $validityList = [];

      foreach ($choices AS $attribute) {
         $this->logPush("method::choices", $choices);
         $value = $attribute['value'];
         $valueText = $attribute['text'];
         $this->logPush("method::choices::value ", $value);
         $this->logPush("method::choices::valueText ", $valueText);

         $checkboxListEntry = null;
         if (is_array($valueText)) {
            foreach ($valueText AS $countryCode => $text) {
               $this->logPush("method::choices::countryCode:", $countryCode);
               $checkboxListEntry = (isset($unit) && $unit != null) ? [$countryCode => intval($text) . $unit] : [$countryCode => $text . $unit];
               $validityList[] = $checkboxListEntry;
            }
         } else {
            $checkboxListEntry = [$countryCode => intval($valueText) . $unit];
            $validityList[] = $checkboxListEntry;
         }
         $checkboxList[] = [
            'value' => $value,
            'text' => $checkboxListEntry
         ];
      }
      $this->logPush("method::choices::checkboxList:", $checkboxList);

      if ($extend) {
         $this->logPush("method::choices::sourceList:startParsing:", $sourceList);
         if (count($sourceList) > 0) {
            foreach ($sourceList AS $sourceAttributes) {
               $checkboxListEntry = [];
               $this->logPush("method::choices::sourceAttribute", $sourceAttributes);

               if (isset($sourceAttributes['values'])) {
                  foreach ($sourceAttributes['values'] AS $sourceAttribute) {
                     foreach ($sourceAttribute AS $tag => $sourceValue) {
                        $this->logPush("method::choices::tag:", $tag);
                        $this->logPush("method::choices::sourceValue:", $sourceValue);
                        if ($countryCode != null) {
                           $checkboxListEntry = [$countryCode => ($sourceValue . $tag)];
                        } else {
                           $checkboxListEntry = [$countryCode => ($sourceValue . $tag)];
                        }
                     }
                     $tmpCheckboxListEntry = [
                        'value' => $sourceValue,
                        'text' => $checkboxListEntry
                     ];
                     $this->logPush("method::checking !in_array: " . $checkboxListEntry[$countryCode], $validityList);
                     if (!in_array($checkboxListEntry, $validityList)) {
                        $this->logPush("method::choices::adding value to parsedList: ", $sourceAttribute);
                        $checkboxList[] = $tmpCheckboxListEntry;
                     }
                  }
               } else {
                  $this->logPush("method::choices::sourceAttribute[values] not set", $sourceAttributes);
               }
            }
         }
      }
      $this->logPush("method::choices::checkboxList completed (choices):", $checkboxList);
      return $checkboxList;
   }

   protected function buildSurveySelectListValues($sourceList)
   {
      $parsedList = [];
      foreach ($sourceList AS $entry) {
         $choiceEntry = [];
         foreach ($entry AS $key => $value) {
            if ($key == 'id')
               $choiceEntry['value'] = $value;
            if ($key == 'name')
               $choiceEntry['text'] = $value;
         }
         $parsedList[] = $choiceEntry;
      }
      return $parsedList;
   }

   protected function logPush($context, $attribute)
   {
      if (is_array($attribute))
         $this->logger->info($context . " ", $attribute);
      else
         $this->logger->info($context . " " . $attribute);
   }

}