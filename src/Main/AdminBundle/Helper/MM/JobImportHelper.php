<?php
namespace Main\AdminBundle\Helper\MM;

use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Query;
use Main\AdminBundle\Entity\JobGroup;
use Main\AdminBundle\Repository\JobGroupRepository;
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

class JobImportHelper extends ApiImportHelper
{
    private $jobGroupRepository = null;
    private $jobList = [];
    protected $updateParams = [
        'dataUser' => [
            'user' => '00206868',
            'pass' => 'rogemusafunota26',
        ],
        'content' => [
            'berufe' => [
                'fetchList' => [""]
            ]
        ]
    ];

    public function __construct(
        UserRepository $userRepository = null,
        JobGroupRepository $jobGroupRepository = null,
        EntityManagerInterface $databaseManager = null,
        $logger = null
    )
    {
        parent::initialize($userRepository, $databaseManager, $logger);
        $this->jobGroupRepository = $jobGroupRepository;
    }


    protected function isResponseValid($response = null)
    {
        return (isset($response['response'])
            && isset($response['response']['berufe'])
            && isset($response['response']['berufe']['fetchList'])
            && isset($response['response']['berufe']['fetchList'][0])
        )
            ? true : false;
    }

    private function verifyIfExist($value = null)
    {
        if (null !== $value) {
            foreach ($this->jobList as $jobKey => $jobValue) {
                /*
                    print_r($value['bezeichnung']);
                    print_r('/');
                    print_r($jobValue['name']);
                    print_r('<br><br>');
                */
                if (isset($jobValue['name']) && $value['bezeichnung'] == $jobValue['name']) {
                    return $jobValue['id'];
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
            $this->logger->info('STEP 2a-error :', [
                'response' => $data
            ]);
        if ($this->isResponseValid($data)) {
            
            $this->addDefault();
            $tmpJobQuery = $this->jobGroupRepository->createQueryBuilder('j')->getQuery();
            $this->jobList = $tmpJobQuery->getResult(Query::HYDRATE_ARRAY);
            $downbreakData = $data['response']['berufe']['fetchList'][0];
            if (count($downbreakData) > 0) {

                //print_r($downbreakData);
                foreach ($downbreakData as $key => $value) {
                    if (isset($value['id']) && isset($value['bezeichnung'])) {
                        $tmpJobId = $this->verifyIfExist($value);
                        if ($tmpJobId == 0) {
                            if (1 == $doInsert) {
                                $tmpEntry = new JobGroup();
                                $tmpEntry->setName($value['bezeichnung']);
                                $tmpEntry->setIsDefault(0);
                                $tmpEntry->setMrMoneyId($value['id']);
                                $tmpEntry->setIsObsolete(null);
                                $this->databaseAccessor->persist($tmpEntry);
                            }
                        } elseif ($tmpJobId > 0) {
                            if (1 == $doRemove) {
                                $tmpEntry = $this->jobGroupRepository->find($tmpJobId);
                                $this->databaseAccessor->remove($tmpEntry);
                            } elseif (1 == $doUpdate) {
                                $tmpEntry = $this->jobGroupRepository->find($tmpJobId);
                                $tmpEntry->setMrMoneyId($value['id']);
                                $date = new DateTime('now');
                                $tmpEntry->setUpdatedAt($date->format('d.m.Y'));
                                $this->databaseAccessor->persist($tmpEntry);
                            }
                        }
                        $this->databaseAccessor->flush();
                    }
                }
            }
        }
        return $data;
    }

    protected function addDefault()
    {
        $notSetEntry = $this->jobGroupRepository->findBy(['name' => 'Nicht angegeben']);
        if (empty($notSetEntry)) {
            $tmpEntry = new JobGroup();
            $tmpEntry->setName('Nicht angegeben');
            $tmpEntry->setIsDefault(1);
            $tmpEntry->setMrMoneyId(null);
            $tmpEntry->setIsObsolete(null);
            $this->databaseAccessor->persist($tmpEntry);
            $this->databaseAccessor->flush();
            //print_r("Default added");echo "<br><br>";
        }
    }
}