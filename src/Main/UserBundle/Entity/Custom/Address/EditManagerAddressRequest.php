<?php

namespace Main\UserBundle\Entity\Custom\Address;

use Main\UserBundle\Entity\UserAddress;

class EditManagerAddressRequest
{
    /**
     * @var string
     */
    private $additionalInfo;

    /**
     * @var string
     */
    private $postalCode;

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
    private $city;

    /**
     * @var string
     */
    private $isMain = true;

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

    public static function factoryEmpty(): self
    {
        $request = new self();
        return $request;
    }

    public static function factory(UserAddress $entity): self
    {
        $request = new self();
        $request->postalCode = $entity->getPostalCode()->getZip();
        $request->street = $entity->getStreet()->getId();
        $request->streetNumber = $entity->getStreetNumber();
        $request->city = $entity->getCity()->getId();
        $request->isMain = $entity->getIsMain();
        $request->additionalInfo = $entity->getAdditionalInfo();
        //print_r($request->userTitle);die;
        return $request;
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