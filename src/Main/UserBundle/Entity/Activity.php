<?php

namespace Main\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Main\UserBundle\Repository\ActivityRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="activity")
 */
class Activity
{
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @ORM\Column(type="integer")
	 */
	private $id;

	/**
	 * @var string title of the story
	 *
	 * @Assert\Type(type="string")
	 * @ORM\Column(name="ident", type="string", length=512, nullable=false, unique=true)
	 */
	private $ident;

	/**
	 * @var string description of the story
	 *
	 * @Assert\Type(type="string")
	 * @ORM\Column(name="context", type="string", length=256, nullable=true)
	 */
	protected $context;

	/**
	 * @var string title of the story
	 *
	 * @Assert\Type(type="string")
	 * @ORM\Column(name="short_description", type="string", length=512, nullable=true)
	 */
	private $publicDescription;

	/**
	 * @ORM\Column(name="description", type="string", length=512, nullable=true)
	 */
	private $description;

	/**
	 * @ORM\OneToMany(targetEntity="Activity", mappedBy="parent")
	 */
	private $children;

	/**
	 * @ORM\ManyToOne(targetEntity="Activity", inversedBy="children")
	 * @ORM\Column(name="parent", type="simple_array", length=512, nullable=true)
	 */
	private $parent;

	/**
	 * @ORM\OneToMany(targetEntity="Main\InsuranceBundle\Entity\ProcessActivity", mappedBy="activity", fetch="EXTRA_LAZY",
	 * cascade={"persist", "remove"})
	 */
	private $processes;

	/**
	 * @return mixed
	 */
	public function getChildren()
	{
		return $this->children;
	}

	/**
	 * @param mixed $children
	 */
	public function setChildren($children)
	{
		$this->children = $children;
	}

	/**
	 * @return mixed
	 */
	public function getParent()
	{
		return $this->parent;
	}

	/**
	 * @param mixed $parent
	 */
	public function setParent($parent)
	{
		$this->parent = $parent;
	}

	/**
	 * @ORM\Column(type="datetime")
	 *
	 * @var \DateTime
	 */
	private $createdAt;

	/**
	 * @return string
	 */
	public function getIdent()
	{
		return $this->ident;
	}

	/**
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * @param string $description
	 */
	public function setDescription($description)
	{
		$this->description = $description;
	}

	/**
	 * @param string $ident
	 */
	public function setIdent($ident)
	{
		$this->ident = $ident;
	}

	public function __construct()
	{
		$this->users = new ArrayCollection();
	}

	/**
	 * @return string
	 */
	public function getPublicDescription()
	{
		return $this->publicDescription;
	}

	/**
	 * @param string $publicDescription
	 */
	public function setPublicDescription($publicDescription)
	{
		$this->publicDescription = $publicDescription;
	}


	/**
	 * @return string
	 */
	public function getContext()
	{
		return $this->context;
	}

	/**
	 * @param string $contexts
	 */
	public function setContext($context)
	{
		$this->context = $context;
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
	 * @return ArrayCollection
	 */
	public function getUsers()
	{
		return $this->users;
	}

	/**
	 * @param ArrayCollection $users
	 */
	public function setUsers($users)
	{
		$this->users = $users;
	}

	/**
	 * @return mixed
	 */
	public function getProcesses()
	{
		return $this->processes;
	}

	/**
	 * @param mixed $processes
	 */
	public function setProcesses($processes)
	{
		$this->processes = $processes;
	}


	public function getId()
	{
		return $this->id;
	}

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
		$this->createdAt = new \DateTime("now");
	}

	/**
	 * Gets triggered every time on update
	 * @ORM\PreUpdate
	 */
	public function onPreUpdate()
	{
	}
}
