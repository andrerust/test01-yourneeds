<?php

namespace Main\InsuranceBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="Main\InsuranceBundle\Repository\StructureRepository")
 * @ORM\Table(name="structure")
 * @ORM\HasLifecycleCallbacks()
 */
class Structure
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $subType;

	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $context;

	/**
	 * @Assert\NotBlank()
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $json;

	/**
	 * @ORM\ManyToOne(targetEntity="Main\UserBundle\Entity\User", inversedBy="structures")
	 * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
	 */
	private $user;

	/**
	 * @ORM\ManyToOne(targetEntity="Main\InsuranceBundle\Entity\Type", inversedBy="structures")
	 * @ORM\JoinColumn(name="type_id", referencedColumnName="id", nullable=true, onDelete="CASCADE")
	 */
	private $type;

	/**
	 * @ORM\Column(type="boolean")
	 */
	private $isActive = true;
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
	public function getSubType()
	{
		return $this->subType;
	}

	/**
	 * @param mixed $subType
	 */
	public function setSubType($subType)
	{
		$this->subType = $subType;
	}

	/**
	 * @return mixed
	 */
	public function getContext()
	{
		return $this->context;
	}

	/**
	 * @param mixed $context
	 */
	public function setContext($context)
	{
		$this->context = $context;
	}

	/**
	 * @return mixed
	 */
	public function getJson()
	{
		return $this->json;
	}

	/**
	 * @param mixed $json
	 */
	public function setJson($json)
	{
		$this->json = $json;
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

}
