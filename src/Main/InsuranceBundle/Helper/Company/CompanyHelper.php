<?php
namespace Main\InsuranceBundle\Helper\Company;

use Doctrine\ORM\EntityManagerInterface;
use Main\AdminBundle\Helper\AbstractARCustomHelper;
use Main\InsuranceBundle\Repository\CompanyRepository;
use Main\UserBundle\Repository\UserRepository;
use Psr\Log\LoggerInterface;


class CompanyHelper extends AbstractARCustomHelper
{
	private $companyRepository = null;

	public function __construct(
		UserRepository $userRepository = null,
		CompanyRepository $companyRepository = null,
		EntityManagerInterface $databaseManager = null,
		$logger = null
	)
	{
		parent::initialize($userRepository, $databaseManager, $logger);
		$this->companyRepository = $companyRepository;
	}

	public function parseCompanyLogo($tariffName = null)
	{
		$logoMapping = [
			"lv" => "lv1871",
			"max" => "maxpool",
			"Inter" => "inter",
			"medien" => "medienversicherung",
			"sy24" => "syncro24",
			"syncro" => "syncro24",
			"muenchener" => "muenchner",
			"hanse" => "hansemerkur",
			"slp_ag" => "slp",
			"garanta" => "nuernberger",
			"cif" => "conceptif",
			"r" => "rv",
			"volkswohl" => "volkswohlbund",
			"schleswiger_vvag" => "schleswiger",
			"germanbroker.net" => "germanbrokernet",
			"geld.de_hauskasko" => "geldde_hauskasko",
			"geld.de_exklusiv" => "geldde_exklusiv",
			"unfalltarif24.de" => "unfalltarif24de",
			"hausrattarif24" => "unfalltarif24de",
			"geld.de" => "geldde",
			"degenia_easy_premium" => "degenia_easy"
		];
		$tmp = explode('-', $tariffName);
		$logoName = mb_strtolower($tmp[0]);
		$logoName = str_replace("ü", "ue", $logoName);
		$logoName = str_replace("ä", "ae", $logoName);
		$logoName = str_replace("ö", "oe", $logoName);
		$logoName = str_replace("ß", "ss", $logoName);
		if (isset($logoMapping[$logoName]))
			$logoName = $logoMapping[$logoName];
		/*
				echo $tariffName . " / " . $logoName;
				echo "<br><br>";
		*/
		return $logoName;
	}
}