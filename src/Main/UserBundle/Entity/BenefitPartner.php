<?php

namespace Main\UserBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Main\UserBundle\Repository\BenefitPartnerRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="benefit_partner")
 */
class BenefitPartner
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", unique=false, nullable=true)
     */
    private $partnerType;
    
    /**
     * @ORM\Column(type="string", unique=false, nullable=true)
     */
    private $name;
    
    /**
     * @ORM\Column(type="string", unique=false, nullable=true)
     */
    private $department;
    
    /**
     * @Assert\NotBlank
     * @ORM\OneToMany(targetEntity="Main\UserBundle\Entity\BenefitPartnerUser", mappedBy="benefitPartner")
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $contactPersons;
    
    /**
     * @ORM\OneToMany(targetEntity="Main\UserBundle\Entity\Address", mappedBy="user", cascade={"persist", "remove"}, fetch="EXTRA_LAZY")
     * @ORM\OrderBy({"id" = "DESC"})
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $addresses;
    
    /**
     * @Assert\NotBlank
     * @ORM\Column(type="boolean")
     */
    private $isActive = true;
    
    
    /**
     * @Assert\NotBlank
     * @ORM\Column(type="boolean")
     */
    private $isBlocked = false;
    
    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;
    
    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $createdAt;
    
    
    public function __construct()
    {
    }
    
    /**
     * @return mixed
     */
    public function getAddresses()
    {
        return $this->addresses;
    }
    
    /**
     * @param mixed $addresses
     */
    public function setAddresses($addresses): void
    {
        $this->addresses = $addresses;
    }
    
    /**
     * @return mixed
     */
    public function getPartnerType()
    {
        return $this->partnerType;
    }
    
    /**
     * @param mixed $partnerType
     */
    public function setPartnerType($partnerType): void
    {
        $this->partnerType = $partnerType;
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
    public function setName($name): void
    {
        $this->name = $name;
    }
    
    /**
     * @return mixed
     */
    public function getDepartment()
    {
        return $this->department;
    }
    
    /**
     * @param mixed $department
     */
    public function setDepartment($department): void
    {
        $this->department = $department;
    }
    
    /**
     * @return mixed
     */
    public function getContactPersons()
    {
        return $this->contactPersons;
    }
    
    /**
     * @param mixed $contactPersons
     */
    public function setContactPerson($contactPersons): void
    {
        $this->contactPersons = $contactPersons;
    }
    
    /**
     * Gets triggered only on insert
     * @ORM\PrePersist
     */
    public function onPrePersist()
    {
        $this->createdAt = new DateTime("now");
        $this->updatedAt = new DateTime("now");
    }
    
    /**
     * Gets triggered every time on update
     * @ORM\PreUpdate
     */
    public function onPreUpdate()
    {
        $this->updatedAt = new DateTime("now");
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
     * @return mixed
     */
    public function getIsBlocked()
    {
        return $this->isBlocked;
    }
    
    /**
     * @param mixed $isBlocked
     */
    public function setIsBlocked($isBlocked)
    {
        $this->isBlocked = $isBlocked;
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