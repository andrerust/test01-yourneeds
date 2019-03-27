<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MessageTypeRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="message_type")
 */
class MessageType
{
	/**
	 * @var integer $id
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
	 * @ORM\OneToMany(targetEntity="AppBundle\Entity\Message", mappedBy="messageType", fetch="EXTRA_LAZY", cascade={"persist"})
	 */
	private $messages;

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
	public function getMessages()
	{
		return $this->messages;
	}

	/**
	 * @param mixed $messages
	 */
	public function setMessages($messages)
	{
		$this->messages = $messages;
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


}
