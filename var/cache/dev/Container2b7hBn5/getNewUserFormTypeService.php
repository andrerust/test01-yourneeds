<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Main\UserBundle\Form\User\Admin\NewUserFormType' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/src/Main/UserBundle/Form/User/Admin/NewUserFormType.php';

if ($lazyLoad) {
    return $this->privates['Main\UserBundle\Form\User\Admin\NewUserFormType'] = $this->createProxy('NewUserFormType_077b162', function () {
        return \NewUserFormType_077b162::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getNewUserFormTypeService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

return new \Main\UserBundle\Form\User\Admin\NewUserFormType();
