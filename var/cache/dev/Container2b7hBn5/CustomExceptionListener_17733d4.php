<?php

class CustomExceptionListener_17733d4 extends \AppBundle\Listener\CustomExceptionListener implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder17733d4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer17733d4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties17733d4 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function onKernelException(\Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent $event)
    {
        $this->initializer17733d4 && ($this->initializer17733d4->__invoke($valueHolder17733d4, $this, 'onKernelException', array('event' => $event), $this->initializer17733d4) || 1) && $this->valueHolder17733d4 = $valueHolder17733d4;

        return $this->valueHolder17733d4->onKernelException($event);
    }

    /**
     * {@inheritDoc}
     */
    public function setToken(\Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage $token)
    {
        $this->initializer17733d4 && ($this->initializer17733d4->__invoke($valueHolder17733d4, $this, 'setToken', array('token' => $token), $this->initializer17733d4) || 1) && $this->valueHolder17733d4 = $valueHolder17733d4;

        return $this->valueHolder17733d4->setToken($token);
    }

    /**
     * {@inheritDoc}
     */
    public function setKernel($kernel)
    {
        $this->initializer17733d4 && ($this->initializer17733d4->__invoke($valueHolder17733d4, $this, 'setKernel', array('kernel' => $kernel), $this->initializer17733d4) || 1) && $this->valueHolder17733d4 = $valueHolder17733d4;

        return $this->valueHolder17733d4->setKernel($kernel);
    }

    /**
     * {@inheritDoc}
     */
    public function setTemplating($templating)
    {
        $this->initializer17733d4 && ($this->initializer17733d4->__invoke($valueHolder17733d4, $this, 'setTemplating', array('templating' => $templating), $this->initializer17733d4) || 1) && $this->valueHolder17733d4 = $valueHolder17733d4;

        return $this->valueHolder17733d4->setTemplating($templating);
    }

    /**
     * {@inheritDoc}
     */
    public function setRequest($request = null)
    {
        $this->initializer17733d4 && ($this->initializer17733d4->__invoke($valueHolder17733d4, $this, 'setRequest', array('request' => $request), $this->initializer17733d4) || 1) && $this->valueHolder17733d4 = $valueHolder17733d4;

        return $this->valueHolder17733d4->setRequest($request);
    }

    /**
     * {@inheritDoc}
     */
    public function setTranslator($translator)
    {
        $this->initializer17733d4 && ($this->initializer17733d4->__invoke($valueHolder17733d4, $this, 'setTranslator', array('translator' => $translator), $this->initializer17733d4) || 1) && $this->valueHolder17733d4 = $valueHolder17733d4;

        return $this->valueHolder17733d4->setTranslator($translator);
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultLocale($defaultLocale)
    {
        $this->initializer17733d4 && ($this->initializer17733d4->__invoke($valueHolder17733d4, $this, 'setDefaultLocale', array('defaultLocale' => $defaultLocale), $this->initializer17733d4) || 1) && $this->valueHolder17733d4 = $valueHolder17733d4;

        return $this->valueHolder17733d4->setDefaultLocale($defaultLocale);
    }

    /**
     * {@inheritDoc}
     */
    public function setEntityManager($entityManager)
    {
        $this->initializer17733d4 && ($this->initializer17733d4->__invoke($valueHolder17733d4, $this, 'setEntityManager', array('entityManager' => $entityManager), $this->initializer17733d4) || 1) && $this->valueHolder17733d4 = $valueHolder17733d4;

        return $this->valueHolder17733d4->setEntityManager($entityManager);
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializer17733d4 && ($this->initializer17733d4->__invoke($valueHolder17733d4, $this, 'setContainer', array('container' => $container), $this->initializer17733d4) || 1) && $this->valueHolder17733d4 = $valueHolder17733d4;

        return $this->valueHolder17733d4->setContainer($container);
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

        unset($instance->token, $instance->kernel, $instance->templating, $instance->translator, $instance->request, $instance->entityManager, $instance->defaultLocale, $instance->user, $instance->errorList, $instance->hasErrors, $instance->test, $instance->parser, $instance->tariffMap, $instance->tariffReadabilityMap, $instance->type, $instance->logger, $instance->databaseAccessor, $instance->environment, $instance->optionalUser, $instance->validTypes, $instance->apiTypeMapping, $instance->errors, $instance->container);

        $instance->initializer17733d4 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder17733d4) {
            $reflection = $reflection ?? new \ReflectionClass('AppBundle\\Listener\\CustomExceptionListener');
            $this->valueHolder17733d4 = $reflection->newInstanceWithoutConstructor();
        unset($this->token, $this->kernel, $this->templating, $this->translator, $this->request, $this->entityManager, $this->defaultLocale, $this->user, $this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer17733d4 && ($this->initializer17733d4->__invoke($valueHolder17733d4, $this, '__get', ['name' => $name], $this->initializer17733d4) || 1) && $this->valueHolder17733d4 = $valueHolder17733d4;

        if (isset(self::$publicProperties17733d4[$name])) {
            return $this->valueHolder17733d4->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder17733d4;

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

        $targetObject = $this->valueHolder17733d4;
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
        $this->initializer17733d4 && ($this->initializer17733d4->__invoke($valueHolder17733d4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer17733d4) || 1) && $this->valueHolder17733d4 = $valueHolder17733d4;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder17733d4;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder17733d4;
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
        $this->initializer17733d4 && ($this->initializer17733d4->__invoke($valueHolder17733d4, $this, '__isset', array('name' => $name), $this->initializer17733d4) || 1) && $this->valueHolder17733d4 = $valueHolder17733d4;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder17733d4;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder17733d4;
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
        $this->initializer17733d4 && ($this->initializer17733d4->__invoke($valueHolder17733d4, $this, '__unset', array('name' => $name), $this->initializer17733d4) || 1) && $this->valueHolder17733d4 = $valueHolder17733d4;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder17733d4;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder17733d4;
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
        $this->initializer17733d4 && ($this->initializer17733d4->__invoke($valueHolder17733d4, $this, '__clone', array(), $this->initializer17733d4) || 1) && $this->valueHolder17733d4 = $valueHolder17733d4;

        $this->valueHolder17733d4 = clone $this->valueHolder17733d4;
    }

    public function __sleep()
    {
        $this->initializer17733d4 && ($this->initializer17733d4->__invoke($valueHolder17733d4, $this, '__sleep', array(), $this->initializer17733d4) || 1) && $this->valueHolder17733d4 = $valueHolder17733d4;

        return array('valueHolder17733d4');
    }

    public function __wakeup()
    {
        unset($this->token, $this->kernel, $this->templating, $this->translator, $this->request, $this->entityManager, $this->defaultLocale, $this->user, $this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer17733d4 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer17733d4;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer17733d4 && ($this->initializer17733d4->__invoke($valueHolder17733d4, $this, 'initializeProxy', array(), $this->initializer17733d4) || 1) && $this->valueHolder17733d4 = $valueHolder17733d4;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder17733d4;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder17733d4;
    }


}
