<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MediaTypeRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="media_type")
 */
class MediaType
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
	 * @ORM\OneToMany(targetEntity="AppBundle\Entity\Media", mappedBy="mediaType", fetch="EXTRA_LAZY", cascade={"persist"})
	 */
	private $medias;

	/**
	 * @return mixed
	 */
	public function getMedias()
	{
		return $this->medias;
	}

	/**
	 * @param mixed $medias
	 */
	public function setMedias($medias)
	{
		$this->medias = $medias;
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
