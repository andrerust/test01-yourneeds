<?php
namespace Main\AdminBundle\Helper\MM;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Query;
use Main\AdminBundle\Entity\AnimalDogBreed;
use Main\AdminBundle\Repository\AnimalDogBreedRepository;
use Main\UserBundle\Repository\UserRepository;
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

class AnimalDogBreedImportHelper extends ApiImportHelper
{

	private $animalDogBreedRepository = null;
	private $dogBreedList = [];
	protected $updateParams = [
		"dataUser" => [
			'user' => '00206868',
			'pass' => 'muharuze687',
		],
		"content" => [
			'hunderassen' => [
				'fetchList' => [""]
			]
		]
	];

	public function __construct(
		UserRepository $userRepository = null,
		AnimalDogBreedRepository $animalDogBreedRepository = null,
		EntityManagerInterface $databaseManager = null,
		$logger = null
	)
	{
		parent::initialize($userRepository, $databaseManager, $logger);
		$this->animalDogBreedRepository = $animalDogBreedRepository;
	}


	protected function isResponseValid($response = null)
	{
		return (isset($response['response'])
			&& isset($response['response']['hunderassen'])
			&& isset($response['response']['hunderassen']['fetchList'])
			&& isset($response['response']['hunderassen']['fetchList'][0])
		)
			? true : false;
	}

	private function verifyIfExist($value = null)
	{
		if (null !== $value) {
			foreach ($this->dogBreedList as $entry) {
				/*
					print_r($value);
					print_r('/');
					print_r($entry['name']);
					print_r('<br><br>');
				*/
				if (isset($entry['name']) && $value == $entry['name']) {
					return $entry['id'];
				}
			}
		}
		return 0;
	}

	public function importList()
	{
		$response = $this->curlSend(json_encode($this->updateParams), $this->apiUrl);
		$data = json_decode($response, true);
		$doInsert = 1;
		$doRemove = 0;
		$doUpdate = 1;
		if ($this->isResponseValid($data)) {
			$this->addDefault();
			//print_r($data['response']);
			$tmpJobQuery = $this->animalDogBreedRepository->createQueryBuilder('j')->getQuery();
			$this->dogBreedList = $tmpJobQuery->getResult(Query::HYDRATE_ARRAY);
			$downbreakData = $data['response']['hunderassen']['fetchList'][0];
			if (count($downbreakData) > 0) {

				//print_r($downbreakData);
				foreach ($downbreakData as $key => $value) {
					if (isset($value) && !empty($value)) {
						$tmpDogId = $this->verifyIfExist($value);
						if ($tmpDogId == 0) {
							if (1 == $doInsert) {
								$tmpEntry = new AnimalDogBreed();
								$tmpEntry->setName($value);
								$tmpEntry->setIsDefault(0);
								$tmpEntry->setMrMoneyId($key);
								$tmpEntry->setIsObsolete(null);
								$this->databaseAccessor->persist($tmpEntry);
							}
						} elseif ($tmpDogId > 0) {
							if (1 == $doRemove) {
								$tmpEntry = $this->animalDogBreedRepository->find($tmpDogId);
								$this->databaseAccessor->remove($tmpEntry);
							} elseif (1 == $doUpdate) {
								$tmpEntry = $this->animalDogBreedRepository->find($tmpDogId);
								$tmpEntry->setMrMoneyId($key);
								$this->databaseAccessor->persist($tmpEntry);
							}
						}
						$this->databaseAccessor->flush();
					}
				}
			}
		}
	}

	protected function addDefault()
	{
	}
}