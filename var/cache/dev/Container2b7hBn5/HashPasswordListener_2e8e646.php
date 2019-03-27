<?php

class HashPasswordListener_2e8e646 extends \Main\UserBundle\Doctrine\HashPasswordListener implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder2e8e646 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2e8e646 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2e8e646 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function prePersist(\Doctrine\ORM\Event\LifecycleEventArgs $args)
    {
        $this->initializer2e8e646 && ($this->initializer2e8e646->__invoke($valueHolder2e8e646, $this, 'prePersist', array('args' => $args), $this->initializer2e8e646) || 1) && $this->valueHolder2e8e646 = $valueHolder2e8e646;

        return $this->valueHolder2e8e646->prePersist($args);
    }

    /**
     * {@inheritDoc}
     */
    public function preUpdate(\Doctrine\ORM\Event\LifecycleEventArgs $args)
    {
        $this->initializer2e8e646 && ($this->initializer2e8e646->__invoke($valueHolder2e8e646, $this, 'preUpdate', array('args' => $args), $this->initializer2e8e646) || 1) && $this->valueHolder2e8e646 = $valueHolder2e8e646;

        return $this->valueHolder2e8e646->preUpdate($args);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubscribedEvents()
    {
        $this->initializer2e8e646 && ($this->initializer2e8e646->__invoke($valueHolder2e8e646, $this, 'getSubscribedEvents', array(), $this->initializer2e8e646) || 1) && $this->valueHolder2e8e646 = $valueHolder2e8e646;

        return $this->valueHolder2e8e646->getSubscribedEvents();
    }

    /**
     * {@inheritDoc}
     */
    public function encodePassword(\Main\UserBundle\Entity\User $entity)
    {
        $this->initializer2e8e646 && ($this->initializer2e8e646->__invoke($valueHolder2e8e646, $this, 'encodePassword', array('entity' => $entity), $this->initializer2e8e646) || 1) && $this->valueHolder2e8e646 = $valueHolder2e8e646;

        return $this->valueHolder2e8e646->encodePassword($entity);
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

        \Closure::bind(function (\Main\UserBundle\Doctrine\HashPasswordListener $instance) {
            unset($instance->passwordEncoder);
        }, $instance, 'Main\\UserBundle\\Doctrine\\HashPasswordListener')->__invoke($instance);

        $instance->initializer2e8e646 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface $passwordEncoder)
    {
        static $reflection;

        if (! $this->valueHolder2e8e646) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Doctrine\\HashPasswordListener');
            $this->valueHolder2e8e646 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Main\UserBundle\Doctrine\HashPasswordListener $instance) {
            unset($instance->passwordEncoder);
        }, $this, 'Main\\UserBundle\\Doctrine\\HashPasswordListener')->__invoke($this);

        }

        $this->valueHolder2e8e646->__construct($passwordEncoder);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer2e8e646 && ($this->initializer2e8e646->__invoke($valueHolder2e8e646, $this, '__get', ['name' => $name], $this->initializer2e8e646) || 1) && $this->valueHolder2e8e646 = $valueHolder2e8e646;

        if (isset(self::$publicProperties2e8e646[$name])) {
            return $this->valueHolder2e8e646->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e8e646;

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

        $targetObject = $this->valueHolder2e8e646;
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
        $this->initializer2e8e646 && ($this->initializer2e8e646->__invoke($valueHolder2e8e646, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2e8e646) || 1) && $this->valueHolder2e8e646 = $valueHolder2e8e646;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e8e646;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder2e8e646;
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
        $this->initializer2e8e646 && ($this->initializer2e8e646->__invoke($valueHolder2e8e646, $this, '__isset', array('name' => $name), $this->initializer2e8e646) || 1) && $this->valueHolder2e8e646 = $valueHolder2e8e646;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e8e646;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder2e8e646;
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
        $this->initializer2e8e646 && ($this->initializer2e8e646->__invoke($valueHolder2e8e646, $this, '__unset', array('name' => $name), $this->initializer2e8e646) || 1) && $this->valueHolder2e8e646 = $valueHolder2e8e646;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e8e646;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder2e8e646;
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
        $this->initializer2e8e646 && ($this->initializer2e8e646->__invoke($valueHolder2e8e646, $this, '__clone', array(), $this->initializer2e8e646) || 1) && $this->valueHolder2e8e646 = $valueHolder2e8e646;

        $this->valueHolder2e8e646 = clone $this->valueHolder2e8e646;
    }

    public function __sleep()
    {
        $this->initializer2e8e646 && ($this->initializer2e8e646->__invoke($valueHolder2e8e646, $this, '__sleep', array(), $this->initializer2e8e646) || 1) && $this->valueHolder2e8e646 = $valueHolder2e8e646;

        return array('valueHolder2e8e646');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Main\UserBundle\Doctrine\HashPasswordListener $instance) {
            unset($instance->passwordEncoder);
        }, $this, 'Main\\UserBundle\\Doctrine\\HashPasswordListener')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer2e8e646 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer2e8e646;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer2e8e646 && ($this->initializer2e8e646->__invoke($valueHolder2e8e646, $this, 'initializeProxy', array(), $this->initializer2e8e646) || 1) && $this->valueHolder2e8e646 = $valueHolder2e8e646;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2e8e646;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2e8e646;
    }


}
