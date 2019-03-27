<?php

class AnimalDogBreedImportController_9a6cc6a extends \Main\AdminBundle\Controller\Api\AnimalDogBreedImportController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder9a6cc6a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9a6cc6a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9a6cc6a = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function loadApiJobInputAction($input = 'all', \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\AdminBundle\Repository\AnimalDogBreedRepository $animalDogBreedRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer9a6cc6a && ($this->initializer9a6cc6a->__invoke($valueHolder9a6cc6a, $this, 'loadApiJobInputAction', array('input' => $input, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'animalDogBreedRepository' => $animalDogBreedRepository, 'logger' => $logger), $this->initializer9a6cc6a) || 1) && $this->valueHolder9a6cc6a = $valueHolder9a6cc6a;

        return $this->valueHolder9a6cc6a->loadApiJobInputAction($input, $request, $authorizationChecker, $userRepository, $animalDogBreedRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializer9a6cc6a && ($this->initializer9a6cc6a->__invoke($valueHolder9a6cc6a, $this, 'setContainer', array('container' => $container), $this->initializer9a6cc6a) || 1) && $this->valueHolder9a6cc6a = $valueHolder9a6cc6a;

        return $this->valueHolder9a6cc6a->setContainer($container);
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

        $instance->initializer9a6cc6a = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder9a6cc6a) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\AdminBundle\\Controller\\Api\\AnimalDogBreedImportController');
            $this->valueHolder9a6cc6a = $reflection->newInstanceWithoutConstructor();
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer9a6cc6a && ($this->initializer9a6cc6a->__invoke($valueHolder9a6cc6a, $this, '__get', ['name' => $name], $this->initializer9a6cc6a) || 1) && $this->valueHolder9a6cc6a = $valueHolder9a6cc6a;

        if (isset(self::$publicProperties9a6cc6a[$name])) {
            return $this->valueHolder9a6cc6a->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a6cc6a;

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

        $targetObject = $this->valueHolder9a6cc6a;
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
        $this->initializer9a6cc6a && ($this->initializer9a6cc6a->__invoke($valueHolder9a6cc6a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9a6cc6a) || 1) && $this->valueHolder9a6cc6a = $valueHolder9a6cc6a;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a6cc6a;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder9a6cc6a;
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
        $this->initializer9a6cc6a && ($this->initializer9a6cc6a->__invoke($valueHolder9a6cc6a, $this, '__isset', array('name' => $name), $this->initializer9a6cc6a) || 1) && $this->valueHolder9a6cc6a = $valueHolder9a6cc6a;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a6cc6a;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder9a6cc6a;
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
        $this->initializer9a6cc6a && ($this->initializer9a6cc6a->__invoke($valueHolder9a6cc6a, $this, '__unset', array('name' => $name), $this->initializer9a6cc6a) || 1) && $this->valueHolder9a6cc6a = $valueHolder9a6cc6a;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9a6cc6a;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder9a6cc6a;
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
        $this->initializer9a6cc6a && ($this->initializer9a6cc6a->__invoke($valueHolder9a6cc6a, $this, '__clone', array(), $this->initializer9a6cc6a) || 1) && $this->valueHolder9a6cc6a = $valueHolder9a6cc6a;

        $this->valueHolder9a6cc6a = clone $this->valueHolder9a6cc6a;
    }

    public function __sleep()
    {
        $this->initializer9a6cc6a && ($this->initializer9a6cc6a->__invoke($valueHolder9a6cc6a, $this, '__sleep', array(), $this->initializer9a6cc6a) || 1) && $this->valueHolder9a6cc6a = $valueHolder9a6cc6a;

        return array('valueHolder9a6cc6a');
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
        $this->initializer9a6cc6a = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer9a6cc6a;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer9a6cc6a && ($this->initializer9a6cc6a->__invoke($valueHolder9a6cc6a, $this, 'initializeProxy', array(), $this->initializer9a6cc6a) || 1) && $this->valueHolder9a6cc6a = $valueHolder9a6cc6a;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9a6cc6a;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9a6cc6a;
    }


}
