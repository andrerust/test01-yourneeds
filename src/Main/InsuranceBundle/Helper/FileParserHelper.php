<?php
namespace Main\InsuranceBundle\Helper;

use Symfony\Component\Finder\Finder;

class FileParserHelper
{
   public static function getJsonFromFile($location, $fileName = null)
   {
      $finder = new Finder();
      $finder->files()->in($location);
      /*
      foreach ($finder as $file) {
         var_dump($file->getRealPath());
         var_dump($file->getRelativePath());
         var_dump($file->getRelativePathname());
      }
      */
      $structure = array();
      //$structure = $em->getRepository('MainInsuranceBundle:Structure')->find(1);
      if ($fileName != null && $fileName == $finder->name($fileName)) {
         return $finder->name($fileName)->getContents();
         return json_decode($finder->name($fileName)->getContents(), true);
      }
      foreach ($finder as $file) {
         //$structure = mb_convert_encoding($file->getContents(), 'UTF-8');
         $structure = $file->getContents();
      }
      return $structure;
   }
}