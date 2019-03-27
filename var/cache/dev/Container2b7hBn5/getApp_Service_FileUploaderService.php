<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'app.service.file_uploader' shared autowired service.

include_once $this->targetDirs[3].'/src/AppBundle/Service/UploadService.php';

if ($lazyLoad) {
    return $this->services['app.service.file_uploader'] = $this->createProxy('UploadService_3fdeca0', function () {
        return \UploadService_3fdeca0::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getApp_Service_FileUploaderService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

return new \AppBundle\Service\UploadService(($this->targetDirs[3].'/src/../public/uploads/profiles'), ($this->targetDirs[3].'/src/../public/uploads/logos'));
