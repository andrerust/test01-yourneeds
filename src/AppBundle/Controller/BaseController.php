<?php

namespace AppBundle\Controller;

use AppBundle\Helper\ConstantHelper;
use AppBundle\Helper\StringHelper;
use DateTime;
use InvalidArgumentException;
use Main\InsuranceBundle\Entity\Tariff;
use Main\InsuranceBundle\Entity\TariffPrivateLiability;
use Main\InsuranceBundle\Helper\Parser\Result\TariffToResultParser;
use Main\InsuranceBundle\Helper\Parser\SurveyToTariffNewParser;
use Main\InsuranceBundle\Helper\Parser\SurveyToTariffParser;
use Main\InsuranceBundle\Helper\Parser\TariffToSurveyParser;
use Main\InsuranceBundle\Helper\TariffHelper;
use Monolog\Logger;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;

class BaseController extends AbstractARCustomController
{
	protected $errorList = array();
	protected $hasErrors = false;
	protected $test = false;
	protected $parser = null;
	protected $tariffMap = [];
	protected $tariffReadabilityMap = [];
	protected $type = null;
	//protected $validTypes = ['pli', 'hci', 'lpi', 'rbi', 'aci', 'ami', 'rli', 'basicneeds'];

	protected $logger = null;

	public static function convertStringToDate($string)
	{
		if ($string) {
			return StringHelper::convertStringToDate($string);
		}
	}

	public static function convertDateToString($date)
	{
		if ($date) {
			return StringHelper::convertDateToString($date);
		}
	}

	protected function buildDocumentManagerId($userId)
	{
		return str_pad($userId, 10, '0', STR_PAD_LEFT);
	}

	protected function buildDocumentMandateLink($userId, $fileName)
	{
		return $this->getProjectDir()
		. ConstantHelper::getDocumentPath()['manager']
		. $this->buildDocumentManagerId($userId)
		. ConstantHelper::getDocumentPath()['mandate']['pathToDocument']
		. $fileName;
	}

	protected function getProjectDir()
	{
		return $this->get('kernel')->getProjectDir();
	}

	/*
	protected function getStaticApiResult($type = null)
	{
		$helper = new ApiResultHelper;
		return $helper->getApiResult($type);
	}
*/

	protected function setTariffTypeStructure($context = null)
	{
		$this->logger = new Logger('my_logger');
		file_put_contents($this->get('kernel')->getRootDir() . '/../var/log/parser.log', '');
		if ($this->type == 'pli'
			|| $this->type == 'hci'
			|| $this->type == 'lpi'
			|| $this->type == 'rbi'
			|| $this->type == 'aci'
			|| $this->type == 'ami'
			|| $this->type == 'basicneeds'
		) {
			if ($context == 'edit-finish') {
				$this->parser = new SurveyToTariffParser();
			} elseif ($context == 'edit-start') {
				$this->parser = new TariffToSurveyParser();
			} else if ($context == 'new-finish') {
				$this->parser = new SurveyToTariffNewParser();
			} elseif ($context == 'new-start') {
				$this->parser = new TariffToSurveyParser();
			} elseif ($context == 'survey-result') {
				$this->parser = new TariffToResultParser();
			}
			$this->tariffMap = TariffPrivateLiability::getMap();
		}
		$this->parser->setLogger($this->logger);
		$this->tariffReadabilityMap = Tariff::getReadabilityMap();
	}

	/*
	protected function isValidTariffType($type)
	{
		$type = trim(strtolower($type));
		if (isset($type) && $type != null && in_array($type, $this->validTypes)) {
			$this->setType($type);
			return true;
		}
		return false;
	}
*/
	protected function tariffToArray($tariff, $paramsList, $process = null)
	{
		return TariffHelper::tariffToArray($tariff, $paramsList, $process);
	}

	protected function tariffNormalizeReadability($tariff, $paramsList)
	{
		return TariffHelper::tariffNormalizeReadability($tariff, $paramsList);
	}

	protected function tariffRatesToArray($tariffRates, $paramsList)
	{
		return TariffHelper::tariffRatesToArray($tariffRates, $paramsList);
	}

	protected function OUT($params, $die = false)
	{
		print_r($params);
		echo "<br><br>";
		if ($die == true) {
			die;
		}
	}

	protected function addErrors($errors)
	{
		if (is_array($errors)) {
			foreach ($errors as $error) {
				$entry = array();
				$entry['property'] = $error['property'];
				$entry['message'] = $error['message'];
				$this->errorList[] = $entry;
			}
		} else {
			foreach ($errors as $error) {
				$entry = array();
				$entry['property'] = $error->getPropertyPath();
				$entry['message'] = $error->getMessage();
				$this->errorList[] = $entry;
			}
		}
		$this->hasErrors = true;
	}

	protected function validatePhoneNumber($em = null, $attribute)
	{
		if ($em->getRepository('MainUserBundle:User')
			->findOneBy(['phoneNumber' => $attribute])
		) {
			$errors[] = [
				'property' => 'Mobilnummer',
				'message' => 'Diese Mobilnummer ist bereits vergeben'
			];
			$this->addErrors($errors);
			return false;
		}
		return true;
	}

	protected function validateEmail($em = null, $attribute)
	{
		if ($em->getRepository('MainUserBundle:User')
			->findOneBy(['email' => $attribute])
		) {
			$errors[] = [
				'property' => 'E-Mail',
				'message' => 'Diese E-Mail ist bereits vergeben'
			];
			$this->addErrors($errors);
			return false;
		}
		return true;
	}

	protected function getErrorMessages(\Symfony\Component\Form\Form $form)
	{
		$errors = array();

		foreach ($form->getErrors() as $key => $error) {
			if ($form->isRoot()) {
				$errors['#'][] = $error->getMessage();
			} else {
				$errors[] = $error->getMessage();
			}
		}
		foreach ($form->all() as $child) {
			if ($child->isSubmitted()) {
				if (!$child->isValid()) {
					$errors[$child->getName()] = $this->getErrorMessages($child);
				}
			}
		}
		return $errors;
	}

	/**
	 * @return bool
	 */
	protected function isAllowedToUse()
	{
		return (!$this->getCurrentUser()) ? false : true;
	}

	protected function getSearchDate($date)
	{
		if ($date != null) {
			$tmpDate = DateTime::createFromFormat('m/Y', $date);
			$result = array();
			//print_r($result); die;
		} else {
			$tmpDate = new \DateTime('now');
		}
		$result['year'] = $tmpDate->format('Y');
		$result['month'] = $tmpDate->format('m');
		return $result;
	}

	protected function splitDate(DateTime $date)
	{
		//print_r($date); die;
		$result = array();
		$result['date'] = $date->format('d-M-Y');
		$result['time'] = $date->format('H:i:s');
		$result['timezone'] = $date->getTimeZone()->getName();
		$result['splitted']['y'] = $date->format('Y');
		$result['splitted']['m'] = $date->format('F');
		$result['splitted']['d'] = $date->format('d');
		return $result;
	}

	protected function getCurrentRoute(Request $request)
	{
		return $request->attributes->get('_route');
	}

	protected function getLimit(Request $request)
	{
		return (((int)$request->query->get('limit') > 0) && ((int)$request->query->get('limit') != null)) ? (int)$request->query->get('limit') : 10;
	}

	protected function getOffset(Request $request)
	{
		return (((int)$request->query->get('offset') >= 0) && ((int)$request->query->get('offset') != null)) ? (int)$request->query->get('offset') : 0;
	}

	protected function getRequestedTypeId($requestedType)
	{
		$types = [1 => 'all', 2 => 'story', 3 => 'video', 4 => 'image', 10 => 'post', 20 => 'ad'];
		return array_search($requestedType, $types);
	}

	protected function isAcceptedType($requestedType)
	{
		$types = [1 => 'all', 2 => 'story', 3 => 'video', 4 => 'image', 10 => 'post', 20 => 'ad'];
		return (in_array($requestedType, $types)) ? true : false;
	}

	protected function getRequestedType(Request $request)
	{
		return ($request->query->get('requested_type')) ? $request->query->get('requested_type') : 'all';
	}

	protected function getDateSearch(Request $request)
	{
		return ($request->query->get('date_search')) ? $request->query->get('date_search') : null;;
	}

	protected function getSearchTerm(Request $request)
	{
		return ($request->query->get('search_term')) ? $request->query->get('search_term') : null;
	}

	/**
	 * Return the last day of the Week/Month/Quarter/Year that the
	 * current/provided date falls within
	 *
	 * @param string $period The period to find the last day of. ('year', 'quarter', 'month', 'week')
	 * @param DateTime $date The date to use instead of the current date
	 *
	 * @return DateTime
	 * @throws InvalidArgumentException
	 */
	protected function lastDayOf($period, DateTime $date = null)
	{
		$period = strtolower($period);
		$validPeriods = array('year', 'quarter', 'month', 'week');

		if (!in_array($period, $validPeriods))
			throw new InvalidArgumentException('Period must be one of: ' . implode(', ', $validPeriods));

		$newDate = ($date === null) ? new DateTime() : clone $date;

		switch ($period) {
			case 'year':
				$newDate->modify('last day of december ' . $newDate->format('Y'));
				break;
			case 'quarter':
				$month = $newDate->format('n');

				if ($month < 4) {
					$newDate->modify('last day of march ' . $newDate->format('Y'));
				} elseif ($month > 3 && $month < 7) {
					$newDate->modify('last day of june ' . $newDate->format('Y'));
				} elseif ($month > 6 && $month < 10) {
					$newDate->modify('last day of september ' . $newDate->format('Y'));
				} elseif ($month > 9) {
					$newDate->modify('last day of december ' . $newDate->format('Y'));
				}
				break;
			case 'month':
				$newDate->modify('last day of this month');
				break;
			case 'week':
				$newDate->modify(($newDate->format('w') === '0') ? 'now' : 'sunday this week');
				break;
		}

		return $newDate;
	}


	private function getFormErrorMessages(\Symfony\Component\Form\Form $form)
	{
		$errors = array();

		foreach ($form->getErrors() as $key => $error) {
			$errors[] = $error->getMessage();
		}

		return $errors;
	}

	/*
	protected function setCurrentSession(Request $request)
	{
		 $currentUser = $this->get('security.token_storage')->getToken()->getUser();
		 $session = $request->getSession();
		 $pets = $currentUser->getPets();

		 $currentPetId = null;
		 $currentPet = null;
		 foreach ($pets as $pet) {
				if ($pet->getIsCurrent()) {
					 $currentPetId = $pet->getId();
					 $currentPet = $pet;
				}
		 }
		 if ($currentPet) {
				$session->set('currentPetId', $currentPetId);
				$session->set('currentPet', $currentPet);
		 }
		 return null;
	}
*/


	/*
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
	*/

	/*
	private function parseArray($param)
	{
		 if (is_array($param)) {
				$tmpArray = [];
				foreach ($param as $key => $value) {
					 if (is_array($value)) {
							$tmpArray[$key] = $this->parseArray($value);
					 } else {
							$tmpArray[$key] = json_decode($value, true);
					 }
				}
				return $tmpArray;
		 }
		 return $param;
	}

	private function parseJsonToArray($param)
	{
		 if (is_array($param)) {
				$tmpArray = [];
				foreach ($param as $key => $value) {
					 if (is_array($value)) {
							$tmpArray[$key] = $this->parseArray($value);
					 } else {
							$tmpArray[$key] = json_decode($value, true);
					 }
				}
				return $tmpArray;
		 }
		 return $param;
	}
	protected function JsonToArray($sourceList)
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

*/
}
