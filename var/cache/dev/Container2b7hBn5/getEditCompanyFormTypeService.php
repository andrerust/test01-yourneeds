<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Main\InsuranceBundle\Form\Company\Admin\EditCompanyFormType' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/src/Main/InsuranceBundle/Form/Company/Admin/EditCompanyFormType.php';

if ($lazyLoad) {
    return $this->privates['Main\InsuranceBundle\Form\Company\Admin\EditCompanyFormType'] = $this->createProxy('EditCompanyFormType_e1810d9', function () {
        return \EditCompanyFormType_e1810d9::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getEditCompanyFormTypeService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

return new \Main\InsuranceBundle\Form\Company\Admin\EditCompanyFormType();
