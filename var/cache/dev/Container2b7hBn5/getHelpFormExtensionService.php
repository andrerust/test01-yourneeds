<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'AppBundle\Form\TypeExtension\HelpFormExtension' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeExtensionInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractTypeExtension.php';
include_once $this->targetDirs[3].'/src/AppBundle/Form/TypeExtension/HelpFormExtension.php';

if ($lazyLoad) {
    return $this->privates['AppBundle\Form\TypeExtension\HelpFormExtension'] = $this->createProxy('HelpFormExtension_63775b4', function () {
        return \HelpFormExtension_63775b4::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getHelpFormExtensionService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

return new \AppBundle\Form\TypeExtension\HelpFormExtension();