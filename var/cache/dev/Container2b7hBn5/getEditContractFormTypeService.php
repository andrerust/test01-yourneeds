<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Main\InsuranceBundle\Form\Contract\EditContractFormType' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/src/Main/InsuranceBundle/Form/Contract/EditContractFormType.php';

if ($lazyLoad) {
    return $this->privates['Main\InsuranceBundle\Form\Contract\EditContractFormType'] = $this->createProxy('EditContractFormType_9f0817d', function () {
        return \EditContractFormType_9f0817d::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getEditContractFormTypeService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

return new \Main\InsuranceBundle\Form\Contract\EditContractFormType();