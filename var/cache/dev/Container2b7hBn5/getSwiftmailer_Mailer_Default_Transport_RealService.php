<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'swiftmailer.mailer.default.transport.real' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/DependencyInjection/SwiftmailerTransportFactory.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventDispatcher.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SimpleEventDispatcher.php';

return $this->services['swiftmailer.mailer.default.transport.real'] = \Symfony\Bundle\SwiftmailerBundle\DependencyInjection\SwiftmailerTransportFactory::createTransport(['transport' => 'smtp.gmail.com', 'url' => $this->getEnv('MAILER_URL'), 'username' => 'andre.rust@intertects.com', 'password' => 'Jari.1010', 'host' => 'localhost', 'port' => 465, 'timeout' => 30, 'source_ip' => NULL, 'local_domain' => NULL, 'encryption' => NULL, 'auth_mode' => 'login', 'command' => '/usr/sbin/sendmail -bs'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] ?? ($this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher())));
