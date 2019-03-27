<?php

namespace Main\UserBundle\Security\Voter;

use Main\UserBundle\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class ViewDoSurveyVoter extends Voter
{
	protected function supports($attribute, $subject)
	{
		return $attribute === 'CAN_VIEW_DO_SURVEY' && $subject instanceof User;
	}

	protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
	{
		foreach ($token->getRoles() as $role) {
			if (in_array($role->getRole(), ['ROLE_SUPERADMIN', 'ROLE_ADMIN'])) {
				return true;
			}
		}
		return $subject->getId() === $token->getUser()->getId() && !$subject->getIsBlocked();
	}
}
