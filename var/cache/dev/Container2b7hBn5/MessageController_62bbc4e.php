<?php

class MessageController_62bbc4e extends \AppBundle\Controller\MessageController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder62bbc4e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer62bbc4e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties62bbc4e = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function messageAction(string $id, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \AppBundle\Repository\MessageRepository $messageRepository)
    {
        $this->initializer62bbc4e && ($this->initializer62bbc4e->__invoke($valueHolder62bbc4e, $this, 'messageAction', array('id' => $id, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'messageRepository' => $messageRepository), $this->initializer62bbc4e) || 1) && $this->valueHolder62bbc4e = $valueHolder62bbc4e;

        return $this->valueHolder62bbc4e->messageAction($id, $request, $authorizationChecker, $userRepository, $messageRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function messagesAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \AppBundle\Repository\MessageRepository $messageRepository, \AppBundle\Repository\MessageTypeRepository $messageTypeRepository)
    {
        $this->initializer62bbc4e && ($this->initializer62bbc4e->__invoke($valueHolder62bbc4e, $this, 'messagesAction', array('request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'messageRepository' => $messageRepository, 'messageTypeRepository' => $messageTypeRepository), $this->initializer62bbc4e) || 1) && $this->valueHolder62bbc4e = $valueHolder62bbc4e;

        return $this->valueHolder62bbc4e->messagesAction($request, $authorizationChecker, $userRepository, $messageRepository, $messageTypeRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializer62bbc4e && ($this->initializer62bbc4e->__invoke($valueHolder62bbc4e, $this, 'setContainer', array('container' => $container), $this->initializer62bbc4e) || 1) && $this->valueHolder62bbc4e = $valueHolder62bbc4e;

        return $this->valueHolder62bbc4e->setContainer($container);
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

        $instance->initializer62bbc4e = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder62bbc4e) {
            $reflection = $reflection ?? new \ReflectionClass('AppBundle\\Controller\\MessageController');
            $this->valueHolder62bbc4e = $reflection->newInstanceWithoutConstructor();
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer62bbc4e && ($this->initializer62bbc4e->__invoke($valueHolder62bbc4e, $this, '__get', ['name' => $name], $this->initializer62bbc4e) || 1) && $this->valueHolder62bbc4e = $valueHolder62bbc4e;

        if (isset(self::$publicProperties62bbc4e[$name])) {
            return $this->valueHolder62bbc4e->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62bbc4e;

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

        $targetObject = $this->valueHolder62bbc4e;
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
        $this->initializer62bbc4e && ($this->initializer62bbc4e->__invoke($valueHolder62bbc4e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer62bbc4e) || 1) && $this->valueHolder62bbc4e = $valueHolder62bbc4e;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62bbc4e;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder62bbc4e;
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
        $this->initializer62bbc4e && ($this->initializer62bbc4e->__invoke($valueHolder62bbc4e, $this, '__isset', array('name' => $name), $this->initializer62bbc4e) || 1) && $this->valueHolder62bbc4e = $valueHolder62bbc4e;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62bbc4e;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder62bbc4e;
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
        $this->initializer62bbc4e && ($this->initializer62bbc4e->__invoke($valueHolder62bbc4e, $this, '__unset', array('name' => $name), $this->initializer62bbc4e) || 1) && $this->valueHolder62bbc4e = $valueHolder62bbc4e;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62bbc4e;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder62bbc4e;
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
        $this->initializer62bbc4e && ($this->initializer62bbc4e->__invoke($valueHolder62bbc4e, $this, '__clone', array(), $this->initializer62bbc4e) || 1) && $this->valueHolder62bbc4e = $valueHolder62bbc4e;

        $this->valueHolder62bbc4e = clone $this->valueHolder62bbc4e;
    }

    public function __sleep()
    {
        $this->initializer62bbc4e && ($this->initializer62bbc4e->__invoke($valueHolder62bbc4e, $this, '__sleep', array(), $this->initializer62bbc4e) || 1) && $this->valueHolder62bbc4e = $valueHolder62bbc4e;

        return array('valueHolder62bbc4e');
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
        $this->initializer62bbc4e = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer62bbc4e;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer62bbc4e && ($this->initializer62bbc4e->__invoke($valueHolder62bbc4e, $this, 'initializeProxy', array(), $this->initializer62bbc4e) || 1) && $this->valueHolder62bbc4e = $valueHolder62bbc4e;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder62bbc4e;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder62bbc4e;
    }


}
