<?php

namespace Main\InsuranceBundle\Helper\Structure;

use Doctrine\ORM\EntityManagerInterface;
use Main\AdminBundle\Helper\AbstractARCustomHelper;
use Main\InsuranceBundle\Entity\Structure;
use Main\InsuranceBundle\Entity\Type;
use Main\InsuranceBundle\Helper\FileParserHelper;
use Main\InsuranceBundle\Repository\DamageRepository;
use Main\InsuranceBundle\Repository\StructureRepository;
use Main\UserBundle\Entity\User;
use Main\UserBundle\Repository\UserRepository;
use Psr\Log\LoggerInterface;

/*
	$sHelper = new AbstractARCustomHelper($userRepository, $structureRepository, $logger);
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

class DamageStructureHelper extends AbstractARCustomHelper
{
    private $damageRepository = null;
    private $damageStructure = null;
    private $damageStructureAsArray = [];
    private $fileDirName = '../public/damage_report';
    private $fileNamePraefix = 'damage_survey_';
    
    public function __construct(
        UserRepository $userRepository = null,
        DamageRepository $damageRepository = null,
        EntityManagerInterface $databaseManager = null,
        $logger = null
    )
    {
        parent::initialize($userRepository, $databaseManager, $logger);
        $this->damageRepository = $damageRepository;
    }
    
    public function setFileNamePraefix(String $string)
    {
        return $this->fileNamePraefix = $string;
    }
    
    public function setFileDirName(String $string)
    {
        return $this->fileDirName = $string;
    }
    
    public function loadStructureJsonFileByType()
    {
        return FileParserHelper::getJsonFromFile($this->rootDir . '/' . $this->fileDirName . '/' .
            $this->type->getIdentifier(), $this->fileNamePraefix . $this->type->getIdentifier() . '.json');
    }
    
    public function isDamageStructureValueValid(String $attribute = null)
    {
        return (!empty($this->damageStructureAsArray) && null !== $attribute && isset($this->damageStructureAsArray[$attribute]))
            ? true : false;
    }
    
    public function getStructureValue(String $attribute = null)
    {
        if ($this->isDamageStructureValueValid($attribute)) {
            return $this->damageStructureAsArray[$attribute];
        } else {
            $this->setError('Called attribute not found in structure: ' . $attribute);
            return '';
        }
    }
    
    public function getStructureAsArray()
    {
        return $this->damageStructureAsArray;
    }
    
    public function getStructure()
    {
        return $this->damageStructure;
    }
    
    public function buildStructure(
        User $user = null,
        Type $type = null,
        String $subType = '',
        String $json = '',
        String $context = '',
        Bool $isActive = null
    )
    {
        
        if (null === $user) {
            $user = $this->user;
        }
        if (null === $type) {
            $type = $this->type;
        }
        
        $tmpStructure = new Structure();
        $tmpStructure->setUser($user);
        $tmpStructure->setType($type);
        $tmpStructure->setSubType($subType);
        $tmpStructure->setJson($json);
        $tmpStructure->setContext($context);
        $tmpStructure->setIsActive($isActive);
        $this->databaseAccessor->persist($tmpStructure);
        $this->databaseAccessor->flush();
        $this->damageStructure = $tmpStructure;
        
        return $this->damageStructure;
    }
    
    
    public function loadLastStructure()
    {
        $tmpStructure = $this->damageRepository->findOneBy(
            [
                'user' => $this->user,
                'type' => $this->type
            ],
            [
                'updatedAt' => 'DESC'
            ]
        );
        
        if (null != $tmpStructure && !empty($tmpStructure)) {
            $this->damageStructure = $tmpStructure;
            $this->damageStructureAsArray = $this->parseJsonToArray(json_decode($this->damageStructure->getJson(), true));
        //print_r($this->damageStructureAsArray);
        } else {
            $this->setError('Damage structure as json empty of not found.');
        }
    }
    
    public function parseCustomStructure(Array $tmpStructure = null)
    {
        if (null != $tmpStructure && !empty($tmpStructure)) {
            $this->damageStructure = $tmpStructure;
            $this->damageStructureAsArray = $this->parseJsonToArray($this->damageStructure);
        } else {
            $this->setError('Damage structure as json empty of not found.');
        }
    }
}