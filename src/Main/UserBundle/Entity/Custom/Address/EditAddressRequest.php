<?php
namespace Main\UserBundle\Entity\Custom\Address;

use Main\UserBundle\Entity\Address;
use Symfony\Component\Validator\Constraints as Assert;

class EditAddressRequest
{
	/**
	 * @var string
	 */
	private $additionalInfo;

	/**
	 * @var string
	 */
	private $type;

	/**
	 * @var string
	 */
	private $street;

	/**
	 * @var string
	 */
	private $streetNumber;

	/**
	 * @var string
	 */
	private $postalCode;

	/**
	 * @var string
	 */
	private $city;

	/**
	 * @var string
	 */
	private $customCity;

    /**
     * @var string
     */
    private $isMain = true;

	/**
	 * @var string
	 */
	private $isActive = true;

	/**
	 * @var string
	 */
	private $isBlocked = false;

	/**
	 * @var string
	 */
	private $country;

	/**
	 * @return mixed
	 */
	public function getIsActive()
	{
		return $this->isActive;
	}

    /**
     * @return string
     */
    public function getIsMain()
    {
        return $this->isMain;
    }

    /**
     * @param string $isMain
     */
    public function setIsMain(string $isMain)
    {
        $this->isMain = $isMain;
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
	 * @return string
	 */
	public function getCustomCity()
	{
		return $this->customCity;
	}

	/**
	 * @param string $customCity
	 */
	public function setCustomCity($customCity)
	{
		$this->customCity = $customCity;
	}

	/**
	 * @param mixed $isBlocked
	 */
	public function setIsBlocked($isBlocked)
	{
		$this->isBlocked = $isBlocked;
	}

	public static function factoryEmpty(): self
	{
		$request = new self();
		return $request;
	}

	public static function factory(Address $entity): self
	{
		$request = new self();
		$type = $entity->getType();
		if ($type != null) {
			$typeId = (isset($type)) ? $type->getId() : null;
			$request->type = $typeId;
			$request->additionalInfo = $entity->getAdditionalInfo();
			$request->street = $entity->getStreet();
			$request->streetNumber = $entity->getStreetNumber();
			$request->postalCode = $entity->getPostalCode();
			$request->isMain = $entity->getIsMain();
			$request->city = $entity->getCity()->getId();
			$request->isActive = $entity->getIsActive();
			$request->isBlocked = $entity->getIsBlocked();
			$request->country = $entity->getCountry()->getId();
			//print_r($request->userTitle);die;
		}
		return $request;
	}

	/**
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * @param string $type
	 */
	public function setType($type)
	{
		$this->type = $type;
	}

	/**
	 * @return string
	 */
	public function getCity()
	{
		return $this->city;
	}

	/**
	 * @param string $city
	 */
	public function setCity($city)
	{
		$this->city = $city;
	}

	/**
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
	}

	/**
	 * @param string $country
	 */
	public function setCountry($country)
	{
		$this->country = $country;
	}

	/**
	 * @return string
	 */
	public function getAdditionalInfo()
	{
		return $this->additionalInfo;
	}

	/**
	 * @param string $additionalInfo
	 */
	public function setAdditionalInfo($additionalInfo)
	{
		$this->additionalInfo = $additionalInfo;
	}

	/**
	 * @return string
	 */
	public function getStreet()
	{
		return $this->street;
	}

	/**
	 * @param string $street
	 */
	public function setStreet($street)
	{
		$this->street = $street;
	}

	/**
	 * @return string
	 */
	public function getStreetNumber()
	{
		return $this->streetNumber;
	}

	/**
	 * @param string $streetNumber
	 */
	public function setStreetNumber($streetNumber)
	{
		$this->streetNumber = $streetNumber;
	}

	/**
	 * @return string
	 */
	public function getPostalCode()
	{
		return $this->postalCode;
	}

	/**
	 * @param string $postalCode
	 */
	public function setPostalCode($postalCode)
	{
		$this->postalCode = $postalCode;
	}


}