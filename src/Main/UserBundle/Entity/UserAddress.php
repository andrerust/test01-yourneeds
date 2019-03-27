<?php

namespace Main\UserBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Main\UserBundle\Repository\UserAddressRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="user_address")
 */
class UserAddress
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
    private $additionalInfo;
    
    /**
     * @Assert\NotBlank
     * @ORM\ManyToOne(targetEntity="Main\AdminBundle\Entity\AddressStreet")
     * @ORM\JoinColumn(nullable=false)
     */
    private $street;
    
    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", unique=false)
     */
    private $streetNumber;
    
    /**
     * @Assert\NotBlank
     * @ORM\ManyToOne(targetEntity="Main\AdminBundle\Entity\AddressZip")
     * @ORM\JoinColumn(nullable=false)
     */
    private $postalCode;
    
    /**
     * @Assert\NotBlank
     * @ORM\ManyToOne(targetEntity="Main\AdminBundle\Entity\City")
     * @ORM\JoinColumn(nullable=false)
     */
    private $city;
    
    /**
     * @Assert\NotBlank
     * @ORM\ManyToOne(targetEntity="Main\AdminBundle\Entity\Country")
     * @ORM\JoinColumn(nullable=false)
     */
    private $country;

    /**
     * @Assert\NotBlank
     * @ORM\ManyToOne(targetEntity="Main\UserBundle\Entity\User", inversedBy="userAddresses")
     */
    private $user;
    
    /**
     * @Assert\NotBlank
     * @ORM\ManyToOne(targetEntity="Main\AdminBundle\Entity\AddressType", inversedBy="addresses", cascade={"persist"}, fetch="EXTRA_LAZY")
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $type;

    /**
     * @Assert\NotBlank
     * @ORM\Column(type="boolean", options={"default" : 0})
     */
    private $isMain = true;

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
        //$this->users = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getisMain()
    {
        return $this->isMain;
    }

    /**
     * @param mixed $isMain
     */
    public function setIsMain($isMain): void
    {
        $this->isMain = $isMain;
    }
    
    
    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    
    /**
     * @return mixed
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }
    
    /**
     * @param mixed $additionalInfo
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;
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
     * @return mixed
     */
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }
    
    /**
     * @param mixed $streetNumber
     */
    public function setStreetNumber($streetNumber)
    {
        $this->streetNumber = $streetNumber;
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
    
    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }
    
    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }
    
    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }
    
    /**
     * @param mixed $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }
    
    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }
    
    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }
    
    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }
    
    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
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