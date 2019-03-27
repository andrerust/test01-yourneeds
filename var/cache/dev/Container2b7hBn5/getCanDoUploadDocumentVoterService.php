<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Main\UserBundle\Security\Voter\CanDoUploadDocumentVoter' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/Voter/VoterInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/Voter/Voter.php';
include_once $this->targetDirs[3].'/src/Main/UserBundle/Security/Voter/CanDoUploadDocumentVoter.php';

if ($lazyLoad) {
    return $this->privates['Main\UserBundle\Security\Voter\CanDoUploadDocumentVoter'] = $this->createProxy('CanDoUploadDocumentVoter_721bb00', function () {
        return \CanDoUploadDocumentVoter_721bb00::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getCanDoUploadDocumentVoterService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

return new \Main\UserBundle\Security\Voter\CanDoUploadDocumentVoter(($this->privates['security.helper'] ?? $this->load('getSecurity_HelperService.php')));
