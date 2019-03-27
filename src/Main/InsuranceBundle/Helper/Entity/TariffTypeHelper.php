<?php
namespace Main\InsuranceBundle\Helper\Entity;

class TariffTypeHelper
{
	private $logger = null;


	// in controller with leading $this->get('kernel')->getProjectDir();
	private static $documentPath = [
		'manager' => '/_uploads/manager/',
		'mandate' => [
			'projectDir' => true,
			'manager' => true,
			'userId' => true,
			'pathToDocument' => '/documents/',
			'fileName' => true
		]
	];

	private static $mailGeneral = [
		'sendMail' => true,
		'env' => [
			'prod' => [
				'loginLink' => 'http://yneeds.de/login/'
			],
			'dev' => [
				'loginLink' => 'http://localhost:82/login/'
			]
		]

	];


	private static $mail = [

	];

	private static $mailCustomerGeneral = [
		'mail' => 'info@yourneeds.de',
		'sender' => 'Dein YOURneeds-Team',
		'host' => 'smtp.udag.de',
		'port' => '587',
		'security' => null,
		'user' => 'info@yourneeds.de',
		'pass' => 'Smilla2005'
	];

	private static $mailCompanyGeneral = [
		'mail' => 'geschaeftsvorgaenge@yourneeds.de',
		'sender' => 'YOURneeds GmbH',
		'host' => 'smtp.udag.de',
		'port' => '587',
		'security' => null,
		'user' => 'geschaeftsvorfaelle@yourneeds.de',
		'pass' => 'Smilla2005'
	];

	/**
	 * @return array
	 */
	public static function getDocumentPath()
	{
		return self::$documentPath;
	}

	/**
	 * @param array $documentPath
	 */
	public static function setDocumentPath($documentPath)
	{
		self::$documentPath = $documentPath;
	}

	/**
	 * @return array
	 */
	public static function getMailGeneral()
	{
		return self::$mailGeneral;
	}

	/**
	 * @param array $mailGeneral
	 */
	public static function setMailGeneral($mailGeneral)
	{
		self::$mailGeneral = $mailGeneral;
	}

	/**
	 * @return array
	 */
	public static function getMailCustomerGeneral()
	{
		return self::$mailCustomerGeneral;
	}

	/**
	 * @param array $mailCustomerGeneral
	 */
	public static function setMailCustomerGeneral($mailCustomerGeneral)
	{
		self::$mailCustomerGeneral = $mailCustomerGeneral;
	}

	/**
	 * @return array
	 */
	public static function getMailCompanyGeneral()
	{
		return self::$mailCompanyGeneral;
	}

	/**
	 * @param array $mailCompanyGeneral
	 */
	public static function setMailCompanyGeneral($mailCompanyGeneral)
	{
		self::$mailCompanyGeneral = $mailCompanyGeneral;
	}

}