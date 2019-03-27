<?php
namespace Main\InsuranceBundle\Helper\Parser;

use Psr\Log\LoggerInterface;

class TariffSurveyParser
{
   protected $logger;
   protected $surveyValueList = [];
   protected $parserHelper;

   public function getSurveyValueList($valueName)
   {
      return $this->surveyValueList[$valueName];
   }

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
   /*
    * used by AdminTariffController: adminTariffAction
    * used by AdminTariffController: adminTariffEditAction
    */
   public function setSurveyValueList($valueName, $value)
   {
      $this->surveyValueList[$valueName] = $value;
   }

   public function findJsonValues($map)
   {
      $jsonValues = [];
      if (count($map) > 0) {
         foreach ($map AS $entry) {
            if (isset($entry['json']) && $entry['json'] == true) {
               $jsonValues[] = $entry['name'];
               //echo $entry['name']."<br>";
            }
         }
         return $jsonValues;
      }
      return null;
   }


   protected function logPush($context, $attribute)
   {
      if (is_array($attribute))
         $this->logger->info($context . " ", $attribute);
      else
         $this->logger->info($context . " " . $attribute);
   }

   public function setLogger(LoggerInterface $logger)
   {
      $this->logger = $logger;
      $this->parserHelper->setLogger($logger);
   }

   public function __construct()
   {
      $this->parserHelper = new TariffSurveyParserHelper();
   }

}