<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DocumentTypeRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="document_type")
 */
class DocumentType
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="text", nullable=false)
     */
    private $name;
    
    /**
     * @ORM\Column(type="text", nullable=false)
     */
    private $ident;
    
    /**
     * @ORM\Column(type="text", nullable=false)
     */
    private $folder;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $visibleUser = false;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $isBenefit = false;
    
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Document", mappedBy="documentType", fetch="EXTRA_LAZY", cascade={"persist"})
     */
    private $documents;
    
    /**
     * @return mixed
     */
    public function getisBenefit()
    {
        return $this->isBenefit;
    }
    
    /**
     * @param mixed $isBenefit
     */
    public function setIsBenefit($isBenefit): void
    {
        $this->isBenefit = $isBenefit;
    }
    
    public function __construct()
    {
        $this->documents = new ArrayCollection();
    }
    
    /**
     * @return mixed
     */
    public function getFolder()
    {
        return $this->folder;
    }
    
    /**
     * @param mixed $folder
     */
    public function setFolder($folder): void
    {
        $this->folder = $folder;
    }
    
    /**
     * @return mixed
     */
    public function getVisibleUser()
    {
        return $this->visibleUser;
    }
    
    /**
     * @param mixed $visibleUser
     */
    public function setVisibleUser($visibleUser)
    {
        $this->visibleUser = $visibleUser;
    }
    
    /**
     * @return mixed
     */
    public function getIdent()
    {
        return $this->ident;
    }
    
    /**
     * @param mixed $ident
     */
    public function setIdent($ident)
    {
        $this->ident = $ident;
    }
    
    /**
     * @return mixed
     */
    public function getDocuments()
    {
        return $this->documents;
    }
    
    /**
     * @param mixed $documents
     */
    public function setDocuments($documents)
    {
        $this->documents = $documents;
    }
    
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
}
