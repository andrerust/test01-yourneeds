<?php

namespace Main\UserBundle\Security\Voter;

use Main\UserBundle\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Security;

class CanSendMessageVoter extends Voter
{

	private $security;

	public function __construct(Security $security)
	{
		$this->security = $security;
	}

	protected function supports($attribute, $subject)
	{
		return $attribute === 'CAN_SEND_MESSAGE' && $subject instanceof User;
	}

	protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
	{
		foreach ($token->getRoles() as $role) {
			if (in_array($role->getRole(), ['ROLE_SUPERADMIN', 'ROLE_ADMIN'])) {
				return true;
			}
		}
		return $subject->getId() == $token->getUser()->getId() && !$subject->getIsBlocked();
	}
}
