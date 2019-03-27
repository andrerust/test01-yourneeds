<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'app.security.voter.use_benefit' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/Voter/VoterInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/Voter/Voter.php';
include_once $this->targetDirs[3].'/src/Main/UserBundle/Security/Voter/UseBenefitVoter.php';

if ($lazyLoad) {
    return $this->privates['app.security.voter.use_benefit'] = $this->createProxy('UseBenefitVoter_7e7c95c', function () {
        return \UseBenefitVoter_7e7c95c::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getApp_Security_Voter_UseBenefitService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

return new \Main\UserBundle\Security\Voter\UseBenefitVoter(($this->privates['security.helper'] ?? $this->load('getSecurity_HelperService.php')));