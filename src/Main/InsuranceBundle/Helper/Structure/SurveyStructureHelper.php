<?php

namespace Main\InsuranceBundle\Helper\Structure;

use Doctrine\ORM\EntityManagerInterface;
use Main\AdminBundle\Helper\AbstractARCustomHelper;
use Main\InsuranceBundle\Entity\Structure;
use Main\InsuranceBundle\Entity\Type;
use Main\InsuranceBundle\Helper\FileParserHelper;
use Main\InsuranceBundle\Repository\StructureRepository;
use Main\UserBundle\Entity\User;
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

class SurveyStructureHelper extends AbstractARCustomHelper
{
    private $structureRepository = null;
    private $structure = null;
    private $structureAsArray = [];
    private $fileDirName = '../public/survey_data';
    private $fileNamePraefix = 'survey_';
    private $elementList = [];
    
    public function __construct(
        UserRepository $userRepository = null,
        StructureRepository $structureRepository = null,
        EntityManagerInterface $databaseManager = null,
        $logger = null
    )
    {
        parent::initialize($userRepository, $databaseManager, $logger);
        $this->structureRepository = $structureRepository;
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
        $this->structure = FileParserHelper::getJsonFromFile($this->rootDir . '/' . $this->fileDirName . '/' .
            $this->type->getIdentifier(), $this->fileNamePraefix . $this->type->getIdentifier() . '.json');
        $this->structureAsArray = $this->parseJsonToArray(json_decode($this->structure, true));
        return $this->structure;
    }
    
    public function isStructureValueValid(String $attribute = '')
    {
        return (!empty($this->structureAsArray) && null !== $attribute && isset($this->structureAsArray[$attribute]))
            ? true : false;
    }
    
    public function getStructureValue(String $attribute = '')
    {
        if ($this->isStructureValueValid($attribute)) {
            //echo $attribute . "/" . $this->structureAsArray[$attribute] . "<br>";
            return $this->structureAsArray[$attribute];
        } else {
            $this->setError('Called attribute not found in structure');
            return '';
        }
    }
    
    /**
     * @return mixed
     */
    public function getStructureAsArray()
    {
        return $this->structureAsArray;
    }
    
    /**
     * @return mixed
     */
    public function getStructure()
    {
        return $this->structure;
    }
    
    public function buildStructure(
        User $user = null,
        Type $type = null,
        String $subType = '',
        String $json = '',
        String $context = '',
        Bool $isActive = false
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
        $this->structure = $tmpStructure;
        
        return $this->structure;
    }
    
    public function getElementList()
    {
        return $this->elementList;
    }
    
    public function showElementList()
    {
        if (null != $this->elementList && !empty($this->elementList)) {
            foreach ($this->elementList as $pageName => $element) {
                echo "<b>" . $pageName . ":</b> " . $element['name'] . ' => ' . $element['title'] . "<br>";
            }
            echo "<br><br>";
        }
    }
    
    public function setElementList()
    {
        $structure = $this->structureAsArray;
        //print_r($structure);
        if (null != $structure['pages']) {
            foreach ($structure['pages'] as $page) {
                if (null != $page
                    && isset($page['name'])
                    && isset($page['elements'])
                ) {
                    foreach ($page['elements'] as $element) {
                        if (isset($element)
                            && isset($element['name'])
                            && isset($element['title'])
                        ) {
                            $elementTitle = (isset($element['title']['de']))
                                ? $element['title']['de'] : '';
                            $elementDescription = (isset($element['description']['de']))
                                ? $element['description']['de'] : '';
                            
                            $this->elementList[$element['name']] = [
                                'pageName' => $page['name'],
                                'name' => $element['name'],
                                'title' => trim($elementTitle),
                                'description' => trim($elementDescription)
                            ];
                        }
                    }
                }
            }
        }
    }
    
    public function loadLastStructure()
    {
        $tmpStructure = $this->structureRepository->findOneBy(
            [
                'user' => $this->user,
                'type' => $this->type
            ],
            [
                'updatedAt' => 'DESC'
            ]
        );
        if (null != $tmpStructure && !empty($tmpStructure)) {
            $this->structure = $tmpStructure;
            $this->structureAsArray = $this->parseJsonToArray(json_decode($this->structure->getJson(), true));
        } else {
            $this->setError('Structure as json empty of not found.');
        }
    }
    
    public function parseCustomStructure(String $tmpStructure = null)
    {
        if (null != $tmpStructure && !empty($tmpStructure)) {
            $this->structure = $tmpStructure;
            //print_r(json_decode($this->structure, true));
            $this->structureAsArray = $this->parseJsonToArray($this->structure);
        } else {
            $this->setError('Structure as json empty of not found.');
        }
    }
}