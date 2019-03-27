<?php

namespace Main\UserBundle\Security\Voter;

use Main\UserBundle\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Security;

class UseBenefitVoter extends Voter
{
    
    private $security;
    
    public function __construct(Security $security)
    {
        $this->security = $security;
    }
    
    protected function supports($attribute, $subject)
    {
        return $attribute === 'CAN_USE_BENEFIT' && $subject instanceof User;
    }
    
    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
                return true;
        foreach ($token->getRoles() as $role) {
            //if (in_array($role->getRole(), ['ROLE_SUPERADMIN', 'ROLE_ADMIN'])) {
            //}
        }
        /*
        print_r($subject->getId());
        print_r(" / ");
        print_r($token->getUser()->getId());
        die;
        */
        return $subject->getId() == $token->getUser()->getId() && !$subject->getIsBlocked();
    }
}
