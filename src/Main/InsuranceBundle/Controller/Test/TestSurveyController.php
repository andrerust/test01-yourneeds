<?php

namespace Main\InsuranceBundle\Controller\Test;

use AppBundle\Controller\BaseController;
use Main\InsuranceBundle\Entity\Structure;
use Main\InsuranceBundle\Helper\FileParserHelper;
use Main\InsuranceBundle\Helper\Structure\SurveyStructureHelper;
use Main\InsuranceBundle\Repository\StructureRepository;
use Main\InsuranceBundle\Repository\TariffRepository;
use Main\InsuranceBundle\Repository\TariffTypeRepository;
use Main\InsuranceBundle\Repository\TypeRepository;
use Main\UserBundle\Repository\UserRepository;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class TestSurveyController extends BaseController
{
	protected $cheapestList = array();
	protected $bestFitList = array();
	protected $performanceList = array();
	protected $resultParamList = [
		'numberOfPreviousCases',
		'dataExchange'
	];

	public static function buildParamList($collection = null)
	{
		//(isset($entry['undevelopedProperties'][0]['values'])) ?
		$resultList = [];
		foreach ($collection AS $entry) {
			//echo "Start:";print_r($entry);echo "<br>------<br>";
			$result = array();
			$result['id'] = $entry['id'];
			$result['tariffName'] = $entry['name'];
			$result['updatedAt'] = $entry['updatedAt'];
			$result['amountCoveredBodyInjury'] = $entry['amountCoveredBodyInjury'][0]['values'][0]['M'];
			$result['amountCoveredMaterialDamage'] = $entry['amountCoveredMaterialDamage'][0]['values'][0]['M'];
			$result['amountCoveredFinancialDamage'] = $entry['amountCoveredFinancialDamage'][0]['values'][0]['M'];
			$result['amountCoveredJungKids'] = $entry['amountCoveredJungKids'][0]['bool'];
			$result['includeInternship'] = $entry['includeInternship'][0]['bool'];
			$result['badDeptLoss'] = $entry['badDeptLoss'][0]['bool'];
			$result['dataExchange'] = $entry['dataExchange'][0]['bool'];
			$result['undevelopedProperties'] = (isset($entry['undevelopedProperties'][0]['values'][0]['M'])) ?
				$entry['undevelopedProperties'][0]['values'][0]['M'] : '---';
			$result['ownResidentialHomeLivingIn'] = $entry['ownResidentialHomeLivingIn'][0]['bool'];
			$result['ownResidentialHomeRentalOthers'] = $entry['ownResidentialHomeRentalOthers'][0]['bool'];
			$result['company']['publicName'] = $entry['publicName'];
			$result['company']['logo'] = $entry['logo'];
			$result['rate'] = 0;
			$resultList[] = $result;
			//print_r($result);echo "<br>------<br>";
		}
		//print_r($resultList);die;
		return $resultList;
	}


	private function buildTariffParamList($params = null)
	{
		return AdminTariffController::buildParamList($params);
	}

	public function sortBestFit($a, $b)
	{
		return ($a[0] <= $b[0]) ? -1 : 1;
	}

	public function rand_float($st_num = 0, $end_num = 1, $mul = 1000000)
	{
		if ($st_num > $end_num) return false;
		return round(mt_rand($st_num * $mul, $end_num * $mul) / $mul, 2);
	}

	/**
	 * @Method({"GET"})
	 * @Route("/test/builder/survey/damage/{type}", name="test_damage_builder")
	 */
	public function adminSurveyDamageBuilderAction(String $type = null,
																								 Request $request,
																								 AuthorizationCheckerInterface $authorizationChecker,
																								 UserRepository $userRepository,
																								 TypeRepository $typeRepository,
																								 StructureRepository $structureRepository,
																								 LoggerInterface $logger
	)
	{
		$this->initialize();
		if (!$this->allowedToUse('CAN_DO_USE_BUILDER', $request, $userRepository, $authorizationChecker)) {
			return $this->getCredentialRedirectUrl();
		}

		$this->setType($type, $typeRepository);
		$typeIdentifier = $this->type->getIdentifier();
		$sHelper = new SurveyStructureHelper($userRepository, $structureRepository, $this->getDoctrine()->getManager(), $logger);
		$sHelper->setUser($this->user);
		$sHelper->setRootDir($this->get('kernel')->getRootDir());
		$sHelper->setFileDirName('../public/damage_report/test');
		$sHelper->setFileNamePraefix('test_damage_survey_');
		$sHelper->setType($type, $typeRepository);
		$sHelper->loadLastStructure();

		$structure = $sHelper->loadStructureJsonFileByType();
		//print_r($structure);die;

		return $this->render('@MainInsuranceBundle/Admin/builder/builder.html.twig', [
			'structure' => json_encode(strip_tags($structure))
		]);
	}

	/**
	 * @Method({"GET"})
	 * @Route("/test/builder/survey/tariff/{type}", name="test_survey_tariff_builder")
	 */
	public function adminSurveyTariffBuilderAction(String $type = null,
																								 Request $request,
																								 AuthorizationCheckerInterface $authorizationChecker,
																								 UserRepository $userRepository,
																								 TypeRepository $typeRepository,
																								 StructureRepository $structureRepository,
																								 LoggerInterface $logger
	)
	{
		$this->initialize();
		if (!$this->allowedToUse('CAN_DO_USE_BUILDER', $request, $userRepository, $authorizationChecker)) {
			return $this->getCredentialRedirectUrl();
		}

		$this->setType($type, $typeRepository);
		$typeIdentifier = $this->type->getIdentifier();
		$sHelper = new SurveyStructureHelper($userRepository, $structureRepository, $this->getDoctrine()->getManager(), $logger);
		$sHelper->setUser($this->user);
		$sHelper->setFileDirName('../public/survey_data');
		$sHelper->setFileNamePraefix('survey_');
		$sHelper->setRootDir($this->get('kernel')->getRootDir());
		$sHelper->setType($type, $typeRepository);
		$sHelper->loadLastStructure();
		$structure = $sHelper->loadStructureJsonFileByType();
		//print_r($structure);die;
		return $this->render('@MainInsuranceBundle/Admin/builder/builder.html.twig', [
			'structure' => json_encode(strip_tags($structure))
		]);
	}
}
