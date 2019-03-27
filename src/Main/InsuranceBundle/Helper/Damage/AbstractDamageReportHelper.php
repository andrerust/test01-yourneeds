<?php
namespace Main\InsuranceBundle\Helper\Damage;

use Doctrine\ORM\EntityManagerInterface;
use Main\AdminBundle\Helper\AbstractARCustomHelper;
use Main\UserBundle\Repository\UserRepository;
use Psr\Log\LoggerInterface;

class AbstractDamageReportHelper extends AbstractARCustomHelper
{
    protected $mandatoryParameters = [];
    protected $parsedParameters = [];


    public function __construct(
        UserRepository $userRepository = null,
        EntityManagerInterface $databaseManager = null,
        $logger = null
    )
    {
        parent::initialize($userRepository, $databaseManager, $logger);
    }

    public function getParsedParameters()
    {
        return $this->parsedParameters;
    }

    public function parseParams(Array $requestParams = [])
    {
        foreach ($this->mandatoryParameters as $key => $value) {
            if (isset($requestParams[$key]) && '' != $requestParams[$key]) {
                $this->parsedParameters[$key] = $requestParams[$key];
            } else {
                $this->parsedParameters[$key] = $value;
            }
        }
    }
}