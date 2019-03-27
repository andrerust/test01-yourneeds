<?php

namespace Main\InsuranceBundle\Helper\Mapping\Companies;

class LogoNameMapping
{
   private static $mapping = ["lv" => "lv1871", "max" => "maxpool", "Inter" => "inter", "medien" => "medienversicherung", "sy24" => "syncro24", "syncro" => "syncro24", "muenchener" => "muenchner", "hanse" => "hansemerkur", "slp_ag" => "slp", "garanta" => "nuernberger", "cif" => "conceptif", "r" => "rv", "volkswohl" => "volkswohlbund", "schleswiger_vvag" => "schleswiger", "germanbroker.net" => "germanbrokernet", "geld.de_hauskasko" => "geldde_hauskasko", "geld.de_exklusiv" => "geldde_exklusiv", "unfalltarif24.de" => "unfalltarif24de", "hausrattarif24" => "unfalltarif24de", "geld.de" => "geldde", "degenia_easy_premium" => "degenia_easy"];

   /**
    * @return mixed
    */
   public function get()
   {
      return LogoNameMapping::$mapping;
   }
}