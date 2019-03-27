<?php

namespace Main\UserBundle\Entity\Custom\Login;

use Symfony\Component\Validator\Constraints as Assert;

class LoginBenefitUserRequest
{
    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", nullable=true)
     */
    private $_userName;
    
    /**
     * @var string
     */
    private $benefitPartner = '';
    
    /**
     * @var string
     */
    private $termsAccepted = false;
    
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $privacyPolicyAccepted = false;
    
    public static function factory(array $array): self
    {
        //print_r($array);die;
        $request = new self();
        $request->email = (isset($array['_username'])) ? $array['_username'] : '';
        $request->termsAccepted = (isset($array['termsAccepted'])) ? $array['termsAccepted'] : '';
        $request->privacyPolicyAccepted = (isset($array['privacyPolicyAccepted'])) ? $array['privacyPolicyAccepted'] : '';
        
        if (isset($array['benefitPartner']) && null !== $array['benefitPartner']) {
            $request->benefitPartner = $array['benefitPartner'];
        }
        return $request;
    }
    
    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->_userName;
    }
    
    /**
     * @param mixed $userName
     */
    public function setUserName($userName): void
    {
        $this->_userName = $userName;
    }
    
    
    /**
     * @return string
     */
    public function getBenefitPartner(): string
    {
        return $this->benefitPartner;
    }
    
    /**
     * @param string $benefitPartner
     */
    public function setBenefitPartner(string $benefitPartner): void
    {
        $this->benefitPartner = $benefitPartner;
    }
    
    /**
     * @return string
     */
    public function getTermsAccepted(): bool
    {
        return $this->termsAccepted;
    }
    
    /**
     * @param string $termsAccepted
     */
    public function setTermsAccepted(string $termsAccepted): void
    {
        $this->termsAccepted = $termsAccepted;
    }
    
    /**
     * @return mixed
     */
    public function getPrivacyPolicyAccepted(): bool
    {
        return $this->privacyPolicyAccepted;
    }
    
    /**
     * @param mixed $privacyPolicyAccepted
     */
    public function setPrivacyPolicyAccepted($privacyPolicyAccepted): void
    {
        $this->privacyPolicyAccepted = $privacyPolicyAccepted;
    }
}