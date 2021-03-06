<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Main\UserBundle\Security\Voter\ViewSurveyResultVoter' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/Voter/VoterInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/Voter/Voter.php';
include_once $this->targetDirs[3].'/src/Main/UserBundle/Security/Voter/ViewSurveyResultVoter.php';

if ($lazyLoad) {
    return $this->privates['Main\UserBundle\Security\Voter\ViewSurveyResultVoter'] = $this->createProxy('ViewSurveyResultVoter_046adfc', function () {
        return \ViewSurveyResultVoter_046adfc::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getViewSurveyResultVoterService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

return new \Main\UserBundle\Security\Voter\ViewSurveyResultVoter(($this->privates['security.helper'] ?? $this->load('getSecurity_HelperService.php')));
