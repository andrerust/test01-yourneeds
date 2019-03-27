<?php
namespace Main\UserBundle\Helper;

class ManagerHelper
{

   /*
    * change tariff from json to array
    */
   public static function parseStructureToArray($structure, $process = null)
   {
      $result = [];
      if (count($structure) > 0) {
         foreach ($structure as $key => $value) {

            if ($process == 'survey-result') {
               //print_r($value);echo "<br><br>";
               $tmpAmount = json_decode($value, true);
               if (empty($tmpAmount)) {
                  $tmpAmount = $value;
               }
               //$tmpAmount = TariffHelper::jsonRequestToArray($value);
               $result[$key] = $tmpAmount;
            }
         }
      }
      return $result;
   }


   /*
    * "leistungen":{"1":{"ident":"Tipp","aussage":""},"2":{"ident":"VInfo","aussage":[]},"3":{"ident":"VBed","aussage":[{"Dok_nr":"5724","Dokumentenart":"Komplettes Bedingungswerk","Dok_Art":"","Dok_Produkt":"","Dok_kb":"1837.4"}]},"4":{"ident":"SBed","aussage":[{"Dok_nr":"5725","Dokumentenart":"Leistungsvergleich","Dok_Art":"","Dok_Produkt":"","Dok_kb":"1493.5"}]},"5":{"ident":"U","aussage":"T"},"6":{"ident":"vs_v","aussage":"15.000.000 EUR"},"7":{"ident":"vsv_v","aussage":"15.000.000 EUR"},"8":{"ident":"vsm_v","aussage":"15.000.000 EUR"},"9":{"ident":"SB","aussage":"125 EUR"},"10":{"ident":"leiupd_v","aussage":"mitversichert"},"11":{"ident":"arbfrei_v","aussage":"nicht versichert"},"12":{"ident":"U","aussage":"T"},"13":{"ident":"lebensp_v","aussage":"mitversichert"},"14":{"ident":"kizmin_v","aussage":"mitversichert"},"15":{"ident":"kizvoll_v","aussage":"mitversichert"},"16":{"ident":"elt_v","aussage":"mitversichert"},"17":{"ident":"hausang_v","aussage":"mitversichert"},"18":{"ident":"regr_v","aussage":"mitversichert"},"19":{"ident":"U","aussage":"T"},"20":{"ident":"tagmu_v","aussage":"mitversichert"},"21":{"ident":"tagme_v","aussage":"mitversichert"},"22":{"ident":"gef_v","aussage":"mitversichert bis 100.000 EUR"},"23":{"ident":"fach_v","aussage":"mitversichert bis zur Vers.-summe, max. 10.000.000 EUR"},"24":{"ident":"prak_v","aussage":"mitversichert"},"25":{"ident":"ehr_v","aussage":"mitversichert"},"26":{"ident":"U","aussage":"T"},"27":{"ident":"delikt_v","aussage":"*mitversichert sind Personensch�den bis zur Vers.-summe, Sach- und Verm�genssch�den bis 10.000 EUR"},"28":{"ident":"ausfall_v","aussage":"mitversichert ohne Mindestschadenh�he"},"29":{"ident":"rsaus_v","aussage":"nicht versichert"},"30":{"ident":"geli_v","aussage":"nicht versichert"},"31":{"ident":"U","aussage":"T"},"32":{"ident":"sve_v","aussage":"generell nicht versicherbar"},"33":{"ident":"sv_v","aussage":"mitversichert bis 100.000 EUR"},"34":{"ident":"sva_v","aussage":"mitversichert bis 100.000 EUR"},"35":{"ident":"svd_v","aussage":"*mitversichert bis 2.500 EUR"},"36":{"ident":"U","aussage":"T"},"37":{"ident":"welt_v","aussage":"mitversichert europaweit unbegrenzt, weltweit bis 5 Jahre"},"38":{"ident":"U","aussage":"T"},"39":{"ident":"abwa_v","aussage":"mitversichert"},"40":{"ident":"allm_v","aussage":"mitversichert"},"41":{"ident":"bau_v","aussage":"*mitversichert bis 200.000 EUR"},"42":{"ident":"ew_v","aussage":"mitversichert"},"43":{"ident":"einlw_v","aussage":"mitversichert"},"44":{"ident":"efh_v","aussage":"mitversichert"},"45":{"ident":"zfh_v","aussage":"mitversichert bis 2 Wohneinheiten bzw. 30.000 EUR JBM"},"46":{"ident":"sgwe_v","aussage":"*mitversichert bis 2 WE oder max. 30.000 EUR BJMW"},"47":{"ident":"fewoi_v","aussage":"mitversichert"},"48":{"ident":"fehau_v","aussage":"nicht versichert"},"49":{"ident":"fewoa_v","aussage":"mitversichert"},"50":{"ident":"fezi_v","aussage":"*mitversichert bis 8 Betten"},"51":{"ident":"unbgru_v","aussage":"mitversichert bis 10.000 QM"},"52":{"ident":"gew_v","aussage":"mitversichert"},"53":{"ident":"oel_v","aussage":"mitversichert unbegrenztes Volumen, Deckungssumme 3.000.000 EUR"},"54":{"ident":"oelu_v","aussage":"nicht versichert, da kein Tank vorhanden"},"55":{"ident":"oele_v","aussage":"mitversichert"},"56":{"ident":"gewsa_v","aussage":"mitversichert bis 100 Liter/kg Einzelgebinde; bis 1.000 Liter/kg Gesamtfassungsverm�gen"},"57":{"ident":"foto_v","aussage":"mitversichert"},"58":{"ident":"waffen_v","aussage":"mitversichert"},"59":{"ident":"inet_v","aussage":"mitversichert"},"60":{"ident":"U","aussage":"T"},"61":{"ident":"arbmas_v","aussage":"mitversichert"},"62":{"ident":"rad_v","aussage":"mitversichert"},"63":{"ident":"boot_v","aussage":"*mitversichert wenn keine beh�rdliche Erlaubnis erforderlich ist bei gelegentlicher Nutzung"},"64":{"ident":"modell_v","aussage":"mitversichert ohne Begrenzung der St�ckzahl und H�chstgeschwindigkeit"},"65":{"ident":"flug_v","aussage":"mitversichert sind nicht versicherungspflichtige Flugmodelle, Ballonen und Drachen sowie versicherungspflichtige Flugmodelle, Ballonen und Drachen, deren Fluggewicht 5 kg nicht �bersteigt"},"66":{"ident":"drohne_v","aussage":"*mitversichert sind Drohnen bis 5 kg bei ausschlie�lich privater Nutzung"},"67":{"ident":"ruderboot_v","aussage":"mitversichert sind Ruderboote, Segelboote siehe Bedingungswerk"},"68":{"ident":"surf_v","aussage":"mitversichert"},"69":{"ident":"surff_v","aussage":"mitversichert"},"70":{"ident":"kfz_v","aussage":"nicht versichert"},"71":{"ident":"U","aussage":"T"},"72":{"ident":"hund_v","aussage":"mitversichert"},"73":{"ident":"tier_v","aussage":"mitversichert"},"74":{"ident":"pferd_v","aussage":"mitversichert"},"75":{"ident":"U","aussage":"T"},"76":{"ident":"gargdv_v","aussage":"mitversichert"},"77":{"ident":"garak_v","aussage":"mitversichert"},"78":{"ident":"erwei_v","aussage":"nicht versichert"},"79":{"ident":"beson1_v","aussage":"mitversichert: sind Haftpflichtanspr�che von Arbeitgebern, Dienstherren oder Arbeitskollegen f�r Sachsch�den - bis 2.500 EUR, SB 150 EUR"}}}]
    *
    */
   private function parseApiResult($data = [], $apiMap = [], $apiToTariffMap = [], $tariffMap = [])
   {
      if (isset($data)) {
         $entries = [];
         foreach ($data as $dataEntry) {
            foreach ($dataEntry['leistungen'] as $key => $value) {
               $dataEntry[$value['ident']] = $value['aussage'];
            }
            unset($dataEntry['leistungen']);
            $tmpEntry = [];
            foreach ($apiMap as $mapEntry) {
               if (isset($dataEntry[$mapEntry['name']])) { // if api sends correct parameter
                  $entryResult = $this->getMappedEntry($apiToTariffMap, $mapEntry['name'], $dataEntry);
                  if ($entryResult != null) {
                     $tariffAttributeName = $entryResult[0];
                     $apiAttributeName = $entryResult[1];

                     $tariffEnrichment = $this->getTariffEnrichment($tariffMap, $entryResult[0]);
                     $tmpEntry[$tariffAttributeName] = $apiAttributeName;
                     $tmpEntry[$tariffAttributeName . '-enrichment'] = $tariffEnrichment;
                  }
               }
            }
            /*
             Array ( [companyName] => Haftpflichtkasse-Darmstadt [companyName-enrichment] => Array ( [0] => companyName [1] => Array ( [visibleInResult] => [resultText] => Sample Text ) ) [tariffName] => Haftpflichtkasse-Einfach_Gut-SB [tariffName-enrichment] => Array ( [0] => tariffName [1] => Array ( [visibleInResult] => [resultText] => not set ) ) [tariffIDtmp] => 1169 [tariffIDtmp-enrichment] => [id] => 1044 [id-enrichment] => [runTime] => 1 [runTime-enrichment] => Array ( [0] => runTime [1] => Array ( [visibleInResult] => 1 [resultText] => not set ) ) [fee] => 37,49 [fee-enrichment] => Array ( [0] => fee [1] => Array ( [visibleInResult] => [resultText] => not set ) ) [retention] => 125 [retention-enrichment] => Array ( [0] => retention [1] => Array ( [visibleInResult] => 1 [resultText] => not set ) ) [badDeptLoss] => ja [badDeptLoss-enrichment] => Array ( [0] => badDeptLoss [1] => Array ( [visibleInResult] => 1 [resultText] => not set ) ) [amountCoveredJungKids] => ja [amountCoveredJungKids-enrichment] => Array ( [0] => amountCoveredJungKids [1] => Array ( [visibleInResult] => 1 [resultText] => not set ) ) [bewertung] => 99 [bewertung-enrichment] => [amountCoveredBodyInjury] => 15.000.000 EUR [amountCoveredBodyInjury-enrichment] => Array ( [0] => amountCoveredBodyInjury [1] => Array ( [visibleInResult] => 1 [resultText] => not set ) ) [amountCoveredFinancialDamage] => 15.000.000 EUR [amountCoveredFinancialDamage-enrichment] => Array ( [0] => amountCoveredFinancialDamage [1] => Array ( [visibleInResult] => 1 [resultText] => not set ) ) [document] => tarifnr=1169~tarifnrtemp=1044~sp_lang=haftpflicht~id=00206868~subid=~IP_USER=127.0.0.1-12345 [document-enrichment] => )
             */
            $entries[] = $tmpEntry;
            //print_r($tmpEntry);
            //echo "<br><br>";
         }
         return $entries;
      }
      return [];
   }

}