<?php

namespace Main\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="Main\AdminBundle\Repository\JobGroupRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="job_group")
 */
class JobGroup
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
     * @ORM\Column(type="boolean")
     */
    private $isDefault = false;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isObsolete = false;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $mrMoneyId;

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
     * @ORM\OneToMany(targetEntity="Main\UserBundle\Entity\User", mappedBy="jobGroup", cascade={"persist"})
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $users;

    public function __construct()
    {
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
     * @return mixed
     */
    public function getMrMoneyId()
    {
        return $this->mrMoneyId;
    }

    /**
     * @param mixed $mrMoneyId
     */
    public function setMrMoneyId($mrMoneyId)
    {
        $this->mrMoneyId = $mrMoneyId;
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
    public function setUsers($users)
    {
        $this->users = $users;
    }

    /**
     * @return mixed
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * @param mixed $isDefault
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
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
        $this->updatedAt = new \DateTime("now");
    }

}
