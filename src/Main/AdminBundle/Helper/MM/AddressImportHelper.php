<?php

namespace Main\AdminBundle\Helper\MM;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Query;
use Main\AdminBundle\Entity\AddressStreet;
use Main\AdminBundle\Entity\AddressZip;
use Main\AdminBundle\Entity\AddressZipCity;
use Main\AdminBundle\Entity\AddressZipStreet;
use Main\AdminBundle\Repository\AddressStreetRepository;
use Main\AdminBundle\Repository\AddressZipCityRepository;
use Main\AdminBundle\Repository\AddressZipRepository;
use Main\AdminBundle\Repository\AddressZipStreetRepository;
use Main\AdminBundle\Entity\City;
use Main\UserBundle\Repository\AddressRepository;
use Main\AdminBundle\Repository\CityRepository;
use Main\AdminBundle\Repository\CountryRepository;
use Main\UserBundle\Repository\UserRepository;
use Psr\Log\LoggerInterface;

class AddressImportHelper extends ApiImportHelper
{
    private $addressRepository = null;
    private $addressZipRepository = null;
    private $addressStreetRepository = null;
    private $addressZipStreetRepository = null;
    private $addressZipCityRepository = null;
    private $cityRepository = null;
    private $zipLookupParameter = null;
    private $twoZipDigits = null;
    private $counts = [
        'zipInsert' => 0,
        'zipUpdate' => 0,
        'zipExist' => 0,
        'streetInsert' => 0,
        'streetUpdate' => 0,
        'streetExist' => 0,
        'cityInsert' => 0,
        'cityUpdate' => 0,
        'cityExist' => 0,
        'zipStreetInsert' => 0,
        'zipCityInsert' => 0
    ];
    private $executionTime = 0;
    private $addressList = [];
    /*
    protected $updateParams = [
        "dataUser" => [
            'user' => '00206868',
            'pass' => 'muharuze687',
        ],
        "content" => [
            'plz' => [
                'fetchList' => [
                    [
                        "plz" => "0106",
                        "limit" => "5",
                        "columns" => [
                            "plz",
                            "ort"
                        ]
                    ]
                ]
            ]
        ]
    ];
    /*
    */
    protected $updateParams = [
        "dataUser" => [
            'user' => '00206868',
            'pass' => 'rogemusafunota26',
        ],
        "content" => [
            'plz' => [
                'fetchList' => [
                    [
                        "plz" => "1",
                        "limit" => "",
                        "columns" => [
                            "plz",
                            "ort",
                            "strasse"
                        ]
                    ]
                ]
            ]
        ]
    ];
    private $addressZipList = [];
    private $addressStreetList = [];
    private $cityList = [];
    private $addressZipStreetList = [];
    private $addressZipCityList = [];
    private $connectionInsertList = [];

    public function __construct(
        $twoZipDigits = null,
        UserRepository $userRepository = null,
        AddressRepository $addressRepository = null,
        AddressZipRepository $addressZipRepository = null,
        AddressStreetRepository $addressStreetRepository = null,
        AddressZipStreetRepository $addressZipStreetRepository = null,
        AddressZipCityRepository $addressZipCityRepository = null,
        CountryRepository $countryRepository = null,
        CityRepository $cityRepository = null,
        EntityManagerInterface $databaseManager = null,
        $logger = null
    )
    {
        parent::initialize($userRepository, $databaseManager, $logger);
        $this->twoZipDigits = $twoZipDigits;
        $this->addressRepository = $addressRepository;
        $this->addressZipRepository = $addressZipRepository;
        $this->addressStreetRepository = $addressStreetRepository;
        $this->addressZipStreetRepository = $addressZipStreetRepository;
        $this->addressZipCityRepository = $addressZipCityRepository;
        $this->countryRepository = $countryRepository;
        $this->cityRepository = $cityRepository;
    }


    protected function isResponseValid($response = null)
    {
        return (isset($response['response'])
            && isset($response['response']['plz'])
            && isset($response['response']['plz']['fetchList'])
            && isset($response['response']['plz']['fetchList'][0])
        )
            ? true : false;
    }

    private function verifyZipIfExist($value = null)
    {
        if (null !== $value
            && isset($this->addressZipList[$value])
            && null != $this->addressZipList[$value]
        ) {
            return $this->addressZipList[$value];
        }
        return new AddressZip();
    }

    private function verifyStreetIfExist($value = null)
    {
        if (null !== $value
            && isset($this->addressStreetList[$value])
            && null != $this->addressStreetList[$value]
        ) {
            return $this->addressStreetList[$value];
        }
        return null;
    }

    private function verifyCityIfExist($value = null, $list = [])
    {
        if (null !== $value
            && isset($this->cityList[$value])
            && null != $this->cityList[$value]
        ) {
            return $this->cityList[$value];
        }
        return new City();
    }

    public function importList()
    {
        $firstDigit = substr($this->twoZipDigits, 0, 1);
        $secondDigit = substr($this->twoZipDigits, 1, 1);
        $zipLoops = [$firstDigit];
        $zipSubLoops = [$secondDigit];
        //$zipSubSubLoops = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
        $commands = [
            'doInsert' => 1,
            'doRemove' => 0,
            'doUpdate' => 0

        ];

        $data = null;

        $country = $this->countryRepository->findOneBy(
            [
                'name' => 'Deutschland'
            ]);

        $this->setAddressZipList();
        $this->setAddressStreetList();
        $this->setCityList();
        $this->setAddressZipStreetList();
        $this->setAddressZipCityList();


        //$zipList = $this->addressZipRepository->findAll();
        //$streetList = $this->addressStreetRepository->findAll();
        $cityList = $this->cityRepository->findAll();

        $timeStart = microtime(true);

        foreach ($zipLoops as $zipLoopValue) {
            $this->connectionInsertList = [];
            foreach ($zipSubLoops as $zipSubLoopValue) {
                //$rand = rand(1, 3);
                sleep(1 + $firstDigit * 2 + $secondDigit * 2);
                //foreach ($zipSubSubLoops as $zipSubSubLoopValue) {
                //echo $zipLoopValue . $zipSubLoopValue . "<br>";
                $this->updateParams['content']['plz']['fetchList'][0]['plz'] = $zipLoopValue . $zipSubLoopValue;
                $response = $this->curlSend(json_encode($this->updateParams), $this->apiUrl);
                $data = json_decode(
                    $response, true
                );

                $result = [];
                if ($this->isResponseValid($data)) {
                    $result = $data['response']['plz']['fetchList'][0];

                    //print_r($streetList);
                    if (count($result) > 0) {
                        $count = 0;

                        foreach ($result as $key => $value) {
                            //if (0 === $count % 1000) {
                            if (isset($value['plz'])
                                && isset($value['ort'])
                                && isset($value['strasse'])
                            ) {

                                $zipExistsEntry = $this->verifyZipIfExist($value['plz']);
                                $streetExistsEntry = $this->verifyStreetIfExist($value['strasse']);
                                $cityExistsEntry = $this->verifyCityIfExist($value['ort'], $cityList);
                                //echo " => " . $streetExists . "<br>";

                                $zipEntry = $this->parseZip($zipExistsEntry, $value['plz'], $country, $commands);
                                $streetEntry = $this->parseStreet($streetExistsEntry, $value['strasse'], $commands);
                                $cityEntry = $this->parseCity($cityExistsEntry, $value['ort'], $commands);

                                if (null != $zipEntry || null != $streetEntry) {
                                    $this->parseZipStreet($zipEntry, $streetEntry, $commands);
                                }
                                if (null != $zipEntry || null != $cityEntry) {
                                    $this->parseZipCity($zipEntry, $cityEntry, $commands);
                                }
                            }
                            //}
                            //$count++;
                        }
                    }
                }
                //}
                //$this->databaseAccessor->flush();
                //sleep(10);
                foreach ($this->connectionInsertList as $connectionInsertListEntry) {
                    $this->databaseAccessor->persist($connectionInsertListEntry);
                }
                $this->databaseAccessor->flush();
            }
        }
        $timeEnd = microtime(true);
        $this->executionTime = ($timeEnd - $timeStart) / 3600;

        //print_r($this->addressZipStreetList);
    }

    private function parseZipCity(AddressZip $zipEntry, City $cityEntry,
                                  array $commands)
    {
        if ($zipEntry->getId() > 0 || $cityEntry->getId() > 0
            || !isset($this->addressZipCityList[$zipEntry->getZip() . '-' . $cityEntry->getName()])) {
            if (1 == $commands['doInsert']) {
                $tmpZipCityEntry = new AddressZipCity();
                $tmpZipCityEntry->setAddressZip($zipEntry);
                $tmpZipCityEntry->setAddressCity($cityEntry);
                //$this->databaseAccessor->persist($tmpZipCityEntry);
                $this->connectionInsertList[] = $tmpZipCityEntry;
                //$this->databaseAccessor->flush();
                $this->addressZipCityList[$zipEntry->getZip() . '-' . $cityEntry->getName()] = 1;
                $this->counts['zipCityInsert'] += 1;
            }
        }
    }

    private function parseZipStreet(AddressZip $zipEntry, AddressStreet $streetEntry,
                                    array $commands)
    {
        if ($zipEntry->getId() > 0 || $streetEntry->getId() > 0
            || !isset($this->addressZipStreetList[$zipEntry->getZip() . '-' . $streetEntry->getName()])) {
            if (1 == $commands['doInsert']) {
                $tmpZipStreetEntry = new AddressZipStreet();
                $tmpZipStreetEntry->setAddressZip($zipEntry);
                $tmpZipStreetEntry->setAddressStreet($streetEntry);
                //$this->databaseAccessor->persist($tmpZipStreetEntry);
                //$this->databaseAccessor->flush();
                $this->addressZipStreetList[$zipEntry->getZip() . '-' . $streetEntry->getName()] = 1;
                $this->counts['zipStreetInsert'] += 1;
                $this->connectionInsertList[] = $tmpZipStreetEntry;
            }
        }
    }

    private function parseCity(City $cityExistsEntry, String $cityValue, array $commands)
    {
        $cityEntry = null;
        if (!$cityExistsEntry->getId() > 0) {
            if (1 == $commands['doInsert']) {
                //echo " => I => new<br>";
                $cityEntry = new City();
                $cityEntry->setName($cityValue);
                $this->databaseAccessor->persist($cityEntry);
                $this->databaseAccessor->flush();
                $this->counts['cityInsert'] += 1;
                $this->cityList[$cityEntry->getName()] = $cityEntry;
            }
        } else {
            if (1 == $commands['doRemove']) {
                $tmpCityEntries = $this->cityRepository->findBy(
                    [
                        'name' => $cityValue
                    ]
                );
                if (null != $tmpCityEntries) {
                    if ($tmpCityEntries && !empty($tmpCityEntries)) {
                        foreach ($tmpCityEntries as $cityEntry) {
                            $this->databaseAccessor->remove($cityEntry);
                        }
                    }
                }
            } elseif (1 == $commands['doUpdate']) {
                //echo " => U => " . $cityValue . "<br>";
                $cityEntry = $this->cityRepository->findOneBy(
                    [
                        'name' => $cityValue
                    ]
                );
                if (null != $cityEntry) {
                    $cityEntry->setName($cityValue);
                    $this->databaseAccessor->persist($cityEntry);
                    $this->databaseAccessor->flush();
                    $this->counts['cityUpdate'] += 1;
                    $this->cityList[$cityEntry->getName()] = $cityEntry;
                }
            } else {
                /*
                $cityEntry = $this->cityRepository->findOneBy(
                    [
                        'name' => $cityValue
                    ]
                );
                */
                $cityEntry = $cityExistsEntry;
                $this->counts['cityExist'] += 1;
            }
        }
        return $cityEntry;
    }

    private function parseZip(AddressZip $zipExistsEntry, String $zipValue, $country, array $commands)
    {
        $zipEntry = null;
        if (null != $zipExistsEntry) {
            if (!$zipExistsEntry->getId() > 0) {
                if (1 == $commands['doInsert']) {
                    //echo " => I => new<br>";
                    $zipEntry = new AddressZip();
                    $zipEntry->setZip($zipValue);
                    $zipEntry->setCountry($country);
                    $this->databaseAccessor->persist($zipEntry);
                    $this->databaseAccessor->flush();
                    $this->counts['zipInsert'] += 1;
                    $this->addressZipList[$zipEntry->getZip()] = $zipEntry;
                }
            } else {
                if (1 == $commands['doRemove']) {
                    $tmpZipEntries = $this->addressZipRepository->findBy(
                        [
                            'zip' => $zipValue
                        ]
                    );
                    if (null != $tmpZipEntries) {
                        if ($tmpZipEntries && !empty($tmpZipEntries)) {
                            foreach ($tmpZipEntries as $zipEntry) {
                                $this->databaseAccessor->remove($zipEntry);
                            }
                        }
                    }
                } elseif (1 == $commands['doUpdate']) {
                    echo " => U => " . $zipValue . "<br>";
                    $zipEntry = $this->addressZipRepository->findOneBy(
                        [
                            'zip' => $zipValue
                        ]
                    );
                    if (null != $zipEntry) {
                        $zipEntry->setZip($zipValue);
                        $this->databaseAccessor->persist($zipEntry);
                        $this->databaseAccessor->flush();
                        $this->counts['zipUpdate'] += 1;
                        $this->addressZipList[$zipEntry->getZip()] = $zipEntry;
                    }
                } else {
                    /*
                    $zipEntry = $this->addressZipRepository->findOneBy(
                        [
                            'zip' => $zipValue
                        ]
                    );
                    */
                    $zipEntry = $zipExistsEntry;
                    $this->counts['zipExist'] += 1;
                }
            }
        }
        return $zipEntry;
    }

    private function parseStreet(AddressStreet $streetExistsEntry, String $streetValue, array $commands)
    {
        $streetEntry = null;
        if (null != $streetExistsEntry) {
            if (!$streetExistsEntry > 0) {
                if (1 == $commands['doInsert']) {
                    //echo " => I => new<br>";
                    $streetEntry = new AddressStreet();
                    $streetEntry->setName($streetValue);
                    $this->databaseAccessor->persist($streetEntry);
                    $this->databaseAccessor->flush();
                    $this->counts['streetInsert'] += 1;
                    $this->addressStreetList[$streetEntry->getName()] = $streetEntry;
                }
            } else {
                if (1 == $commands['doRemove']) {
                    $tmpStreetEntries = $this->addressStreetRepository->findBy(
                        [
                            'name' => $streetValue
                        ]
                    );
                    if (null != $tmpStreetEntries) {
                        if ($tmpStreetEntries && !empty($tmpStreetEntries)) {
                            foreach ($tmpStreetEntries as $streetEntry) {
                                $this->databaseAccessor->remove($streetEntry);
                            }
                        }
                    }
                } elseif (1 == $commands['doUpdate']) {
                    //echo " => U => " . $streetValue . "<br>";
                    $streetEntry = $this->addressStreetRepository->findOneBy(
                        [
                            'name' => $streetValue
                        ]
                    );
                    if (null != $streetEntry) {
                        $streetEntry->setName($streetValue);
                        $this->databaseAccessor->persist($streetEntry);
                        $this->databaseAccessor->flush();
                        $this->counts['streetUpdate'] += 1;
                    }
                } else {
                    /*
                    $streetEntry = $this->addressStreetRepository->findOneBy(
                        [
                            'name' => $streetValue
                        ]
                    );
                    */
                    $streetEntry = $streetExistsEntry;
                    $this->counts['streetExist'] += 1;
                }
            }
        }
        return $streetEntry;
    }

    protected function addDefault()
    {
        // TODO: Implement addDefault() method.
    }

    private function setCityList()
    {
        $tmpList = $this->cityRepository->findAll();
        $this->cityList = [];
        foreach ($tmpList as $tmpListEntry) {
            $this->cityList[$tmpListEntry->getName()] = $tmpListEntry;
        }
        //print_r($this->addressZipCityList);
    }

    private function setAddressStreetList()
    {
        $tmpList = $this->addressStreetRepository->findAll();
        $this->addressStreetList = [];
        foreach ($tmpList as $tmpListEntry) {
            if (null != $tmpListEntry)
                $this->addressStreetList[$tmpListEntry->getName()] = $tmpListEntry;
        }
        //print_r($this->addressStreetList);
    }

    private function setAddressZipList()
    {
        $tmpList = $this->addressZipRepository->findAll();
        $this->addressZipList = [];
        foreach ($tmpList as $tmpListEntry) {
            if (null != $tmpListEntry)
                $this->addressZipList[$tmpListEntry->getZip()] = $tmpListEntry;
        }
        //print_r($this->addressZipList);
    }

    private function setAddressZipCityList()
    {
        $tmpAddressZipCityList = $this->addressZipCityRepository->findAll();
        $this->addressZipCityList = [];
        if ($tmpAddressZipCityList) {
            foreach ($tmpAddressZipCityList as $tmpListEntry) {
                if (null != $tmpListEntry)
                    $this->addressZipCityList[$tmpListEntry->getAddressZip()->getZip() . '-' . $tmpListEntry->getAddressCity()->getName()] = 1;
            }
        }
        //print_r($this->addressZipCityList);echo "<br><br>";
    }

    private function setAddressZipStreetList()
    {
        $tmpAddressZipStreetList = $this->addressZipStreetRepository->findAll();
        $this->addressZipStreetList = [];
        if ($tmpAddressZipStreetList) {
            foreach ($tmpAddressZipStreetList as $tmpEntry) {
                $this->addressZipStreetList[$tmpEntry->getAddressZip()->getZip() . '-' . $tmpEntry->getAddressStreet()->getName()] = 1;
            }
        }
        //print_r($this->addressZipStreetList);echo "<br><br>";
    }

    /**
     * @return array
     */
    public function getCounts(): array
    {
        return $this->counts;
    }

    /**
     * @param array $counts
     */
    public function setCounts(array $counts): void
    {
        $this->counts = $counts;
    }

    /**
     * @return array
     */
    public function getExecutionTime(): int
    {
        return $this->executionTime;
    }

    /**
     * @param array $executionTime
     */
    public function setExecutionTime(array $executionTime): void
    {
        $this->executionTime = $executionTime;
    }

}