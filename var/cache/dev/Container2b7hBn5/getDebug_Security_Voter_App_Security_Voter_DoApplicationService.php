<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.security.voter.app.security.voter.do_application' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/Voter/VoterInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/Voter/TraceableVoter.php';

return $this->privates['debug.security.voter.app.security.voter.do_application'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(($this->privates['app.security.voter.do_application'] ?? $this->load('getApp_Security_Voter_DoApplicationService.php')), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
