<?php

namespace AppBundle\Helper;

use AppBundle\Repository\DocumentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Main\AdminBundle\Helper\AbstractARCustomHelper;
use Main\InsuranceBundle\Helper\FileParserHelper;
use Main\UserBundle\Repository\UserRepository;
use Psr\Log\LoggerInterface;

class DocumentStructureHelper extends AbstractARCustomHelper
{
    private $documentRepository = null;
    private $structure = null;
    private $structureAsArray = [];
    private $fileDirName = '../public/damage_report';
    private $fileName = '';
    
    public function __construct(
        UserRepository $userRepository = null,
        DocumentRepository $documentRepository = null,
        EntityManagerInterface $databaseManager = null,
        $logger = null
    )
    {
        parent::initialize($userRepository, $databaseManager, $logger);
        $this->documentRepository = $documentRepository;
    }
    
    /*
     * used by document uploader
     */
    public function setFileName(String $string)
    {
        return $this->fileName = $string;
    }
    
    /*
     * used by document uploader
     */
    public function loadStructureJsonFileByFileName()
    {
        //print_r($this->rootDir . '/' . $this->fileDirName . '/' . $this->fileName . '.json');
        $this->structure = FileParserHelper::getJsonFromFile($this->rootDir . '/' . $this->fileDirName, $this->fileName . '.json');
        $this->structureAsArray = $this->parseJsonToArray(json_decode($this->structure, true));
        return $this->structure;
    }
    
    /*
     * used by document uploader TOO
     */
    public function setFileDirName(String $string)
    {
        return $this->fileDirName = $string;
    }
    
    public function isDamageStructureValueValid(String $attribute = '')
    {
        return (!empty($this->structureAsArray) && null !== $attribute && isset($this->structureAsArray[$attribute]))
            ? true : false;
    }
    
    public function getStructureValue(String $attribute = '')
    {
        if ($this->isDamageStructureValueValid($attribute)) {
            return $this->structureAsArray[$attribute];
        } else {
            $this->setError('Called attribute not found in structure');
            return '';
        }
    }
    
    public function getStructureAsArray()
    {
        return $this->structureAsArray;
    }
    
    public function getStructure()
    {
        return $this->structure;
    }
    
    public function parseCustomStructure(Array $tmpStructure = null)
    {
        if (null != $tmpStructure && !empty($tmpStructure)) {
            $this->structure = $tmpStructure;
            $this->structureAsArray = $this->parseJsonToArray($this->structure);
        } else {
            $this->setError('Damage structure as json empty of not found.');
        }
    }
}