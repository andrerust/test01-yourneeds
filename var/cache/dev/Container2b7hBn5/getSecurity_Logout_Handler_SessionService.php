<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.logout.handler.session' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Logout/LogoutHandlerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Logout/SessionLogoutHandler.php';

return $this->privates['security.logout.handler.session'] = new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler();
