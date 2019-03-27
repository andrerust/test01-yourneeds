<?php
namespace Main\InsuranceBundle\Helper\Parser;

use Psr\Log\LoggerInterface;

class TariffSurveyParserHelper
{
   private $logger;
   /*
   public function showSurveyElementMatrix($structure, $tariff, $map)
   {
      //print_r($structure);
      //echo "<br><br>";
      //print_r($tariff);
      $entryMatrix = [];
      foreach ($map AS $entry) {
         if ($entry['parse'] == true
            && array_key_exists($entry['entityAttributeName'], $tariff)
            && isset($structure['pages'][$entry['page']]['elements'])
         ) {
            $elements = $structure['pages'][$entry['page']]['elements'];
            for ($i = 0; $i < count($elements); $i++) {
               //print_r($structure['pages'][$entry['page']]['elements'][$i]);echo "<br><br>";
               if ($structure['pages'][$entry['page']]['elements'][$i]['name'] == $entry['entityAttributeName']) {
                  $entryMatrix[$entry['entityAttributeName']] = " " . $entry['page'] . " " . $entry['element'] . " / " . $entry['type'] . "/" . $structure['pages'][$entry['page']]['elements'][$i]['name'];
               }
            }
         }
      }
      foreach ($entryMatrix AS $entry) {
         print_r($entry);
         echo "<br><br>";
      }
      //die;
      return $structure;
   }
      */

   /**************************************************
    * DEFAULT VALUES
    */
   protected function constructSurveyBool($source)
   {
      $this->logPush("=> constructSurveyBool() entered", "");
      $bool = $source[0]['bool'];
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


   protected function constructKeyValueSurveyList($sourceList)
   {
      $this->logPush("=> constructKeyValueSurveyList() entered ", "");
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

   protected function constructCheckboxChoicesListLoad($sourceList)
   {
      $this->logPush("=> constructCheckboxChoicesListLoad() entered", "");
      $parsedList = [];
      $countryCode = null;
      $this->logPush("", "");
      $this->logPush("method::choices::sourceList:startParsing:", $sourceList);
      foreach ($sourceList AS $sourceAttribute) {
         $this->logPush("method::choices::sourceAttributes", $sourceAttribute);
         $parsedListValue = [
            'value' => $sourceAttribute['identifier'],
            'text' => ['de' => $sourceAttribute['name']]
         ];
         $parsedList[] = $parsedListValue;
      }
      $this->logPush("method::choices::parsedList completed:", $parsedList);
      //echo "<br>";print_r($parsedList);
      return $parsedList;
   }

   protected function constructCheckboxChoicesList($sourceList, $choices, $unit, $extend)
   {
      $this->logPush("=> constructCheckboxChoicesList() entered", "");
      $parsedList = [];
      $countryCode = "de";
      $valueList = [];

      foreach ($choices AS $attribute) {
         $this->logPush("method::choices", $choices);
         $value = $attribute['value'];
         $valueText = $attribute['text'];
         $this->logPush("method::choices::value ", $value);
         $this->logPush("method::choices::valueText ", $valueText);

         if (is_array($valueText)) {
            foreach ($valueText AS $countryCode => $text) {
               $this->logPush("method::choices::countryCode:", $countryCode);
               //$reducedValue = str_replace($unit, '', $text);
               //echo "<br>";print_r($parsedList);
               if ($unit) {
                  $parsedListEntry = [$countryCode => intval($text) . $unit];
               } else {
                  $parsedListEntry = [$countryCode => $text . $unit];
               }
            }
         } else {
            //$reducedValue = str_replace($unit, '', $language);
            //$parsedListEntry = $valueText;
            $parsedListEntry = [$countryCode => $valueText . $unit];
         }
         $parsedList[] = [
            'value' => $value,
            'text' => $parsedListEntry
         ];
      }
      $this->logPush("method::choices::parsedList:", $parsedList);
      $this->logger->info("");
      if ($extend) {
         $this->logPush("method::choices::sourceList:startParsing:", $sourceList);
         if (count($sourceList) > 0) {
            foreach ($sourceList AS $sourceAttributes) {
               $parsedListEntry = [];
               $this->logPush("method::choices::sourceAttribute", $sourceAttributes);

               foreach ($sourceAttributes['values'] AS $sourceAttribute) {
                  foreach ($sourceAttribute AS $tag => $sourceValue) {
                     $this->logPush("method::choices::tag:", $tag);
                     $this->logPush("method::choices::sourceValue:", $sourceValue);
                     if ($countryCode != null) {
                        $parsedListEntry = [$countryCode => ($sourceValue . $tag)];
                     } else {
                        $parsedListEntry = [$countryCode => ($sourceValue . $tag)];
                     }
                  }
                  $parsedListValue = [
                     'value' => $sourceValue,
                     'text' => $parsedListEntry
                  ];
                  if (!in_array($parsedListValue, $parsedList)) {
                     $this->logPush("method::choices::adding value to parsedList :", $sourceAttribute);
                     $parsedList[] = $parsedListValue;
                  }
               }
            }
         }
      }
      //echo "<br>";print_r($parsedList);
      TariffSurveyParserHelper::logPush("method::choices::parsedList completed (choices):", $parsedList);
      return $parsedList;
   }

   protected function logPush($context, $attribute)
   {
      if (is_array($attribute))
         $this->logger->info($context . " ", $attribute);
      else
         $this->logger->info($context . " " . $attribute);
   }

   protected function constructCheckboxDefaultValuesListLoad($sourceList)
   {
      $this->logPush("=> constructCheckboxDefaultValuesLoad() entered", "");
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

   protected function constructCheckboxDefaultValuesList($sourceList)
   {
      $this->logPush("=>constructCheckboxDefaultValuesList() entered", "");
      $this->logPush("method::sourcelist::entry", $sourceList);
      $result = [];
      if (count($sourceList) > 0) {
         foreach ($sourceList AS $entry) {
            $this->logPush("method::sourcelist::entry", $entry);
            if (isset($entry['values'])) {
               $this->logPush("method:sourceList::values", $entry['values']);
               foreach ($entry['values'] AS $value) {
                  foreach ($value AS $key => $num) {
                     $result[] = $num;
                  }
               }
            }
         }
      }
      //print_r($result);die;
      if (isset($result[0])) {
         return $result[0];
      }
      $this->logPush("method::sourcelist::result", $result);
      return $result;
   }

   protected function constructSurveySelectList($sourceList)
   {
      $parsedList = [];
      //print_r($sourceList);die;
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

   public function setLogger(LoggerInterface $logger)
   {
      $this->logger = $logger;
   }

   public function __construct()
   {
   }

}