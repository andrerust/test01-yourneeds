<?php

namespace Main\UserBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="Main\UserBundle\Repository\BenefitPartnerUserRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="benefit_partner_user")
 */
class BenefitPartnerUser
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
     * @ORM\Column(type="boolean")
     */
    private $isActive = true;
    
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isObsolete = false;
    
    
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isResponsible = false;
    
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
    
    /**
     * @ORM\ManyToOne(targetEntity="Main\UserBundle\Entity\BenefitPartner", inversedBy="contactPersons")
     * @ORM\JoinColumn(name="benefit_partner_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $benefitPartner;
    
    /**
     * @ORM\ManyToOne(targetEntity="Main\UserBundle\Entity\User", inversedBy="benefitPartners")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $user;
    
    public function __construct()
    {
    }
    
    /**
     * @return mixed
     */
    public function getisResponsible()
    {
        return $this->isResponsible;
    }
    
    /**
     * @param mixed $isResponsible
     */
    public function setIsResponsible($isResponsible): void
    {
        $this->isResponsible = $isResponsible;
    }
    
    /**
     * @return mixed
     */
    public function getisActive()
    {
        return $this->isActive;
    }
    
    /**
     * @param mixed $isActive
     */
    public function setIsActive($isActive): void
    {
        $this->isActive = $isActive;
    }
    
    /**
     * @return mixed
     */
    public function getBenefitPartner()
    {
        return $this->benefitPartner;
    }
    
    /**
     * @param mixed $benefitPartner
     */
    public function setBenefitPartner($benefitPartner): void
    {
        $this->benefitPartner = $benefitPartner;
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
    public function setUser($user): void
    {
        $this->user = $user;
    }
    
    /**
     * @return mixed
     */
    public function getIsObsolete()
    {
        return $this->isObsolete;
    }
    
    /**
     * @param mixed $isObsolete
     */
    public function setIsObsolete($isObsolete)
    {
        $this->isObsolete = $isObsolete;
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
    
    /**
     * Gets triggered every time on update
     * @ORM\PreUpdate
     */
    public function onPreUpdate()
    {
        $this->updatedAt = new DateTime("now");
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
    
}
