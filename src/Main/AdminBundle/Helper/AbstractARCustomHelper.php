<?php

namespace Main\AdminBundle\Helper;

use Doctrine\ORM\EntityManagerInterface;
use Main\InsuranceBundle\Repository\TypeRepository;
use Main\UserBundle\Entity\User;
use Main\UserBundle\Repository\UserRepository;
use Monolog\Logger;
use Psr\Log\LoggerInterface;

abstract class AbstractARCustomHelper
{
    protected $databaseAccessor = null;
    protected $user = null;
    protected $userRepository = null;
    protected $environment = null;
    protected $rootDir = null;
    protected $logger = null;
    protected $type = null;
    protected $validTypes = ['basicneeds', 'pli', 'hci', 'lpi', 'aci', 'rbi', 'ami', 'ali'];
    protected $apiTypeMapping = [
        'pli' => 'phv',
        'hci' => 'hr',
        'lpi' => 'rs',
        'rbi' => 'wg',
        'aci' => 'unf',
        'ali' => 'tie',
        'basicneeds' => 'basicneeds',
        'ami' => 'ami'
    ];
    protected $errors = null;
    
    public function setEnvironment($environment)
    {
        $this->environment = $environment;
    }
    
    public function initialize(
        UserRepository $userRepository,
        EntityManagerInterface $databaseManager,
        LoggerInterface $logger)
    {
        $this->setDatabaseManager($databaseManager);
        $this->userRepository = $userRepository;
        $this->logger = $logger;
    }
    
    /*
        public function parseJsonToArray($json)
        {
            print_r($json);
            echo "<br><br>";
            print_r(' / Key: ');
            $result = [];
            foreach ($json as $key => $value) {
                print_r($key);
                print_r(' / Value: ');
                print_r($value);
                print_r(' / tmpValue: ');
                $tmpValue = $value;
                if (is_array($value)) {
                    $tmpValue = $this->parseJsonToArray($value);
                }
                $result[$key] = $tmpValue;
                print_r($tmpValue);
                echo "<br><br>";
            }
            unset($tmpValue);
            return $result;
        }
        */
    public function parseJsonToArray($json)
    {
        $result = [];
        foreach ((array)$json as $key => $value) {
            $tmpValue = $value;
            if (is_array($value)) {
                $tmpValue = $this->parseJsonToArray($value);
            }
            $result[$key] = $tmpValue;
        }
        unset($tmpValue);
        return $result;
    }
    
    public function getUser()
    {
        return $this->user;
    }
    
    public function setUserRepository(UserRepository $userRepository = null)
    {
        if (null !== $userRepository) {
            $this->userRepository = $userRepository;
        }
    }
    
    
    public function setUser(User $user = null)
    {
        $this->user = $user;
        /*
        $tmpUser = $this->userRepository->find($user->getId());
        if (null !== $tmpUser) {
            $this->user = $tmpUser;
            return true;
        }
        $this->setError('User is not valid or was not found.');
        return false;
        */
    }
    
    public function setRootDir($rootDir = null)
    {
        $this->rootDir = $rootDir;
    }
    
    public function getType()
    {
        return $this->type;
    }
    
    public function setType(String $type = null, TypeRepository $typeRepository = null)
    {
        $type = trim(strtolower($type));
        if (true == $this->typeIsValid($type)) {
            $tmpType = $typeRepository->findOneBy(['identifier' => $type]);
            if (null != $tmpType) {
                $this->type = $tmpType;
            }
        } else {
            $this->setError('Type is not valid. Asked type was ' . $type);
        }
    }
    
    protected function typeIsValid(String $type = '')
    {
        return (isset($type) && null !== $type && in_array($type, $this->validTypes)) ? true : false;
    }
    
    protected function getDatabaseManager()
    {
        return $this->databaseAccessor;
    }
    
    private function setDatabaseManager(EntityManagerInterface $databaseManager = null)
    {
        $this->databaseAccessor = $databaseManager;
    }
    
    public function hasErrors()
    {
        return (null !== $this->errors && count($this->errors) > 0) ? true : false;
    }
    
    public function getErrors()
    {
        return $this->errors;
    }
    
    public function setError(String $error = '')
    {
        $this->errors[] = $error;
    }
    
    public function getLogger()
    {
        return $this->logger;
    }
    
    public function setLogger(LoggerInterface $logger = null)
    {
        $this->logger = new Logger('helper_logger');
        file_put_contents($this->rootDir . '/../var/log/helper.log', '');
    }
    
    
}