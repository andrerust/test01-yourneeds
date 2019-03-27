<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DocumentRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="document")
 */
class Document
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string")
     */
    private $name;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $publicName;
    
    /**
     * @Assert\Type(type="text")
     * @ORM\Column(name="note", type="text", length=4090, nullable=true)
     */
    protected $note;
    
    /**
     * @ORM\Column(type="text", nullable=false)
     */
    private $folder;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $isActive = true;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $isBenefit = false;
    
    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;
    
    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $createdAt;
    
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DocumentType", inversedBy="documents")
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $documentType;
    
    /**
     * @ORM\ManyToOne(targetEntity="Main\UserBundle\Entity\User", inversedBy="documents")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
    
    /**
     * @ORM\OneToMany(targetEntity="Main\InsuranceBundle\Entity\DamageDocument", mappedBy="document")
     */
    private $damages;
    
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
    
    /**
     * @return mixed
     */
    public function getFolder()
    {
        return $this->folder;
    }
    
    /**
     * @return mixed
     */
    public function getDamages()
    {
        return $this->damages;
    }
    
    /**
     * @param mixed $damages
     */
    public function setDamages($damages): void
    {
        $this->damages = $damages;
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
    public function getUser()
    {
        return $this->user;
    }
    
    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }
    
    /*
     * constructor
     */
    public function __construct()
    {
        $this->company = new ArrayCollection();
    }
    
    /**
     * @return mixed
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }
    
    /**
     * @param mixed $documentType
     */
    public function setDocumentType($documentType)
    {
        $this->documentType = $documentType;
    }
    
    /**
     * Gets triggered only on insert
     * @ORM\PrePersist
     */
    public function onPrePersist()
    {
        $this->createdAt = new \DateTime("now");
        $this->updatedAt = new \DateTime("now");
    }
    
    /**
     * Gets triggered every time on update
     * @ORM\PreUpdate
     */
    public function onPreUpdate()
    {
        $this->updatedAt = new \DateTime("now");
    }
    
    /**
     * @return mixed
     */
    public function getPublicName()
    {
        return $this->publicName;
    }
    
    /**
     * @param mixed $publicName
     */
    public function setPublicName($publicName)
    {
        $this->publicName = $publicName;
    }
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @param mixed $id
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
    
    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }
    
    /**
     * @param mixed $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }
    
    /**
     * @return mixed
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
    
    /**
     * @param mixed $isActive
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }
    
    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    
    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }
    
    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    
    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }
}
