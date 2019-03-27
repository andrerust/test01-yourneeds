<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'monolog.logger.snappy' shared service.

$this->privates['monolog.logger.snappy'] = $instance = new \Symfony\Bridge\Monolog\Logger('snappy');

$instance->pushHandler(($this->privates['monolog.handler.console'] ?? ($this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, []))));
$instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

return $instance;
