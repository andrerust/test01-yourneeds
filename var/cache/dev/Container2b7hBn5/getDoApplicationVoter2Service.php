<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.security.voter.Main\UserBundle\Security\Voter\DoApplicationVoter' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/Voter/VoterInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/Voter/TraceableVoter.php';

return $this->privates['debug.security.voter.Main\UserBundle\Security\Voter\DoApplicationVoter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(($this->privates['Main\UserBundle\Security\Voter\DoApplicationVoter'] ?? $this->load('getDoApplicationVoterService.php')), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
