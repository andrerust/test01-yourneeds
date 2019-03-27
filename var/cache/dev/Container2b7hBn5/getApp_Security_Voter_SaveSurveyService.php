<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'app.security.voter.save_survey' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/Voter/VoterInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/Voter/Voter.php';
include_once $this->targetDirs[3].'/src/Main/UserBundle/Security/Voter/SaveSurveyVoter.php';

if ($lazyLoad) {
    return $this->privates['app.security.voter.save_survey'] = $this->createProxy('SaveSurveyVoter_4e892df', function () {
        return \SaveSurveyVoter_4e892df::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getApp_Security_Voter_SaveSurveyService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

return new \Main\UserBundle\Security\Voter\SaveSurveyVoter(($this->privates['security.helper'] ?? $this->load('getSecurity_HelperService.php')));
