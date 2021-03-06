<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'app.security.voter.choose_payment' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/Voter/VoterInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/Voter/Voter.php';
include_once $this->targetDirs[3].'/src/Main/UserBundle/Security/Voter/ChoosePaymentVoter.php';

if ($lazyLoad) {
    return $this->privates['app.security.voter.choose_payment'] = $this->createProxy('ChoosePaymentVoter_a1e1bdf', function () {
        return \ChoosePaymentVoter_a1e1bdf::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getApp_Security_Voter_ChoosePaymentService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

return new \Main\UserBundle\Security\Voter\ChoosePaymentVoter(($this->privates['security.helper'] ?? $this->load('getSecurity_HelperService.php')));
