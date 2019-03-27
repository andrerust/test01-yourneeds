<?php

class NewsController_1122105 extends \AppBundle\Controller\NewsController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder1122105 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1122105 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1122105 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function helpFaqAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \AppBundle\Repository\MessageRepository $messageRepository)
    {
        $this->initializer1122105 && ($this->initializer1122105->__invoke($valueHolder1122105, $this, 'helpFaqAction', array('request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'messageRepository' => $messageRepository), $this->initializer1122105) || 1) && $this->valueHolder1122105 = $valueHolder1122105;

        return $this->valueHolder1122105->helpFaqAction($request, $authorizationChecker, $userRepository, $messageRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializer1122105 && ($this->initializer1122105->__invoke($valueHolder1122105, $this, 'setContainer', array('container' => $container), $this->initializer1122105) || 1) && $this->valueHolder1122105 = $valueHolder1122105;

        return $this->valueHolder1122105->setContainer($container);
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

        $instance->initializer1122105 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder1122105) {
            $reflection = $reflection ?? new \ReflectionClass('AppBundle\\Controller\\NewsController');
            $this->valueHolder1122105 = $reflection->newInstanceWithoutConstructor();
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer1122105 && ($this->initializer1122105->__invoke($valueHolder1122105, $this, '__get', ['name' => $name], $this->initializer1122105) || 1) && $this->valueHolder1122105 = $valueHolder1122105;

        if (isset(self::$publicProperties1122105[$name])) {
            return $this->valueHolder1122105->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1122105;

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

        $targetObject = $this->valueHolder1122105;
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
        $this->initializer1122105 && ($this->initializer1122105->__invoke($valueHolder1122105, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1122105) || 1) && $this->valueHolder1122105 = $valueHolder1122105;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1122105;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder1122105;
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
        $this->initializer1122105 && ($this->initializer1122105->__invoke($valueHolder1122105, $this, '__isset', array('name' => $name), $this->initializer1122105) || 1) && $this->valueHolder1122105 = $valueHolder1122105;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1122105;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder1122105;
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
        $this->initializer1122105 && ($this->initializer1122105->__invoke($valueHolder1122105, $this, '__unset', array('name' => $name), $this->initializer1122105) || 1) && $this->valueHolder1122105 = $valueHolder1122105;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1122105;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder1122105;
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
        $this->initializer1122105 && ($this->initializer1122105->__invoke($valueHolder1122105, $this, '__clone', array(), $this->initializer1122105) || 1) && $this->valueHolder1122105 = $valueHolder1122105;

        $this->valueHolder1122105 = clone $this->valueHolder1122105;
    }

    public function __sleep()
    {
        $this->initializer1122105 && ($this->initializer1122105->__invoke($valueHolder1122105, $this, '__sleep', array(), $this->initializer1122105) || 1) && $this->valueHolder1122105 = $valueHolder1122105;

        return array('valueHolder1122105');
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
        $this->initializer1122105 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer1122105;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer1122105 && ($this->initializer1122105->__invoke($valueHolder1122105, $this, 'initializeProxy', array(), $this->initializer1122105) || 1) && $this->valueHolder1122105 = $valueHolder1122105;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1122105;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1122105;
    }


}
