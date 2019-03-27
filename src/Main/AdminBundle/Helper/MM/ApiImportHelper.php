<?php
namespace Main\AdminBundle\Helper\MM;

use Main\AdminBundle\Helper\AbstractARCustomHelper;
use Main\AdminBundle\Helper\CurlConnector;
use Psr\Log\LoggerInterface;

/*
	$sHelper = new SurveyStructureHelper($userRepository, $structureRepository, $logger);
	$sHelper->setType($type);
	$sHelper->setUser($user);
	$sHelper->setStructure();
	if (false === $sHelper->hasErrors()) {
		$tmpStruc = $sHelper->getStructureAsArray();
		print_r($tmpStruc);
		echo "<br><br>";
		print_r($sHelper->getStructureValue('type'));
	} else {
		print_r($sHelper->getErrors());
	}
*/

abstract class ApiImportHelper extends AbstractARCustomHelper
{
	protected $updateParams = [];
	protected $apiUrl = 'https://api.versicherungsmaklersoftware.de/';

	abstract protected function isResponseValid();

	abstract public function importList();

	abstract protected function addDefault();

	public function init()
	{
	}

	protected function curlSend($content, $url)
	{
		return CurlConnector::curlSend($content, $url);
	}
}