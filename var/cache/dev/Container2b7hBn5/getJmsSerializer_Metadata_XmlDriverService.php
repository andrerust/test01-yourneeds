<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'jms_serializer.metadata.xml_driver' shared service.

include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Driver/DriverInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Driver/AdvancedDriverInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Driver/AbstractFileDriver.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/Metadata/Driver/XmlDriver.php';
include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Driver/FileLocatorInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Driver/AdvancedFileLocatorInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Metadata/Driver/FileLocator.php';

return $this->privates['jms_serializer.metadata.xml_driver'] = new \JMS\Serializer\Metadata\Driver\XmlDriver(($this->privates['jms_serializer.metadata.file_locator'] ?? ($this->privates['jms_serializer.metadata.file_locator'] = new \Metadata\Driver\FileLocator([]))));
