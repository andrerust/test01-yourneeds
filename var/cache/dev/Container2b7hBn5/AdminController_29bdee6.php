<?php

class AdminController_29bdee6 extends \Main\AdminBundle\Controller\AdminController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder29bdee6 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer29bdee6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties29bdee6 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function adminImportAddressesAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\UserBundle\Repository\AddressRepository $addressRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer29bdee6 && ($this->initializer29bdee6->__invoke($valueHolder29bdee6, $this, 'adminImportAddressesAction', array('request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'addressRepository' => $addressRepository, 'logger' => $logger), $this->initializer29bdee6) || 1) && $this->valueHolder29bdee6 = $valueHolder29bdee6;

        return $this->valueHolder29bdee6->adminImportAddressesAction($request, $authorizationChecker, $userRepository, $addressRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function adminImportMMDogBreedsAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\AdminBundle\Repository\AnimalDogBreedRepository $animalDogBreedRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer29bdee6 && ($this->initializer29bdee6->__invoke($valueHolder29bdee6, $this, 'adminImportMMDogBreedsAction', array('request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'animalDogBreedRepository' => $animalDogBreedRepository, 'logger' => $logger), $this->initializer29bdee6) || 1) && $this->valueHolder29bdee6 = $valueHolder29bdee6;

        return $this->valueHolder29bdee6->adminImportMMDogBreedsAction($request, $authorizationChecker, $userRepository, $animalDogBreedRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function adminImportMMJobsAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\UserBundle\Repository\JobGroupRepository $jobGroupRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer29bdee6 && ($this->initializer29bdee6->__invoke($valueHolder29bdee6, $this, 'adminImportMMJobsAction', array('request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'jobGroupRepository' => $jobGroupRepository, 'logger' => $logger), $this->initializer29bdee6) || 1) && $this->valueHolder29bdee6 = $valueHolder29bdee6;

        return $this->valueHolder29bdee6->adminImportMMJobsAction($request, $authorizationChecker, $userRepository, $jobGroupRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function adminHomeAction()
    {
        $this->initializer29bdee6 && ($this->initializer29bdee6->__invoke($valueHolder29bdee6, $this, 'adminHomeAction', array(), $this->initializer29bdee6) || 1) && $this->valueHolder29bdee6 = $valueHolder29bdee6;

        return $this->valueHolder29bdee6->adminHomeAction();
    }

    /**
     * {@inheritDoc}
     */
    public function adminDashboardAction(\Symfony\Component\HttpFoundation\Request $request, ?\Symfony\Component\Security\Core\User\UserInterface $user = null)
    {
        $this->initializer29bdee6 && ($this->initializer29bdee6->__invoke($valueHolder29bdee6, $this, 'adminDashboardAction', array('request' => $request, 'user' => $user), $this->initializer29bdee6) || 1) && $this->valueHolder29bdee6 = $valueHolder29bdee6;

        return $this->valueHolder29bdee6->adminDashboardAction($request, $user);
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializer29bdee6 && ($this->initializer29bdee6->__invoke($valueHolder29bdee6, $this, 'setContainer', array('container' => $container), $this->initializer29bdee6) || 1) && $this->valueHolder29bdee6 = $valueHolder29bdee6;

        return $this->valueHolder29bdee6->setContainer($container);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();

        unset($instance->errorList, $instance->hasErrors, $instance->test, $instance->parser, $instance->tariffMap, $instance->tariffReadabilityMap, $instance->type, $instance->logger, $instance->databaseAccessor, $instance->environment, $instance->user, $instance->optionalUser, $instance->validTypes, $instance->apiTypeMapping, $instance->errors, $instance->container);

        $instance->initializer29bdee6 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder29bdee6) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\AdminBundle\\Controller\\AdminController');
            $this->valueHolder29bdee6 = $reflection->newInstanceWithoutConstructor();
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer29bdee6 && ($this->initializer29bdee6->__invoke($valueHolder29bdee6, $this, '__get', ['name' => $name], $this->initializer29bdee6) || 1) && $this->valueHolder29bdee6 = $valueHolder29bdee6;

        if (isset(self::$publicProperties29bdee6[$name])) {
            return $this->valueHolder29bdee6->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder29bdee6;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder29bdee6;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer29bdee6 && ($this->initializer29bdee6->__invoke($valueHolder29bdee6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer29bdee6) || 1) && $this->valueHolder29bdee6 = $valueHolder29bdee6;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder29bdee6;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder29bdee6;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer29bdee6 && ($this->initializer29bdee6->__invoke($valueHolder29bdee6, $this, '__isset', array('name' => $name), $this->initializer29bdee6) || 1) && $this->valueHolder29bdee6 = $valueHolder29bdee6;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder29bdee6;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder29bdee6;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer29bdee6 && ($this->initializer29bdee6->__invoke($valueHolder29bdee6, $this, '__unset', array('name' => $name), $this->initializer29bdee6) || 1) && $this->valueHolder29bdee6 = $valueHolder29bdee6;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder29bdee6;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder29bdee6;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer29bdee6 && ($this->initializer29bdee6->__invoke($valueHolder29bdee6, $this, '__clone', array(), $this->initializer29bdee6) || 1) && $this->valueHolder29bdee6 = $valueHolder29bdee6;

        $this->valueHolder29bdee6 = clone $this->valueHolder29bdee6;
    }

    public function __sleep()
    {
        $this->initializer29bdee6 && ($this->initializer29bdee6->__invoke($valueHolder29bdee6, $this, '__sleep', array(), $this->initializer29bdee6) || 1) && $this->valueHolder29bdee6 = $valueHolder29bdee6;

        return array('valueHolder29bdee6');
    }

    public function __wakeup()
    {
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer29bdee6 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer29bdee6;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer29bdee6 && ($this->initializer29bdee6->__invoke($valueHolder29bdee6, $this, 'initializeProxy', array(), $this->initializer29bdee6) || 1) && $this->valueHolder29bdee6 = $valueHolder29bdee6;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder29bdee6;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder29bdee6;
    }


}
