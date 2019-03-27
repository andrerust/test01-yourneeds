<?php

namespace Main\AdminBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Main\AdminBundle\Repository\AddressZipRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="address_zip")
 */
class AddressZip
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
     * @ORM\Column(type="string", nullable=false)
     */
    private $zip;
    
    /**
     * @ORM\OneToMany(targetEntity="Main\AdminBundle\Entity\AddressZipStreet", mappedBy="addressZip", cascade={"persist", "remove"})
     */
    private $streets;
    
    /**
     * @ORM\ManyToOne(targetEntity="Main\AdminBundle\Entity\Country")
     * @ORM\JoinColumn(nullable=false)
     */
    private $country;

    /**
     * @ORM\OneToMany(targetEntity="Main\UserBundle\Entity\UserAddress", mappedBy="postalCode", cascade={"persist", "remove"}, fetch="EXTRA_LAZY")
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $users;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @ORM\OneToMany(targetEntity="Main\UserBundle\Entity\UserAddress", mappedBy="postalCode", cascade={"persist", "remove"}, fetch="EXTRA_LAZY")
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $userAddresses;

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
    public function getUserAddresses()
    {
        return $this->userAddresses;
    }

    /**
     * @param mixed $userAddresses
     */
    public function setUserAddresses($userAddresses): void
    {
        $this->userAddresses = $userAddresses;
    }

    /**
     * @return mixed
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param mixed $users
     */
    public function setUsers($users): void
    {
        $this->users = $users;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    
    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }
    
    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    
    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
    
    /**
     * @return mixed
     */
    public function getStreets()
    {
        return $this->streets;
    }
    
    /**
     * @param mixed $streets
     */
    public function setStreets($streets): void
    {
        $this->streets = $streets;
    }
    
    /**
     * @return mixed
     */
    public function getZip()
    {
        return $this->zip;
    }
    
    /**
     * @param mixed $zip
     */
    public function setZip($zip): void
    {
        $this->zip = $zip;
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
    public function setCountry($country): void
    {
        $this->country = $country;
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
}
