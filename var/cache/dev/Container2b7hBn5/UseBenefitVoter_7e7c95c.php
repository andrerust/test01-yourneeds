<?php

class UseBenefitVoter_7e7c95c extends \Main\UserBundle\Security\Voter\UseBenefitVoter implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder7e7c95c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7e7c95c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7e7c95c = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function vote(\Symfony\Component\Security\Core\Authentication\Token\TokenInterface $token, $subject, array $attributes)
    {
        $this->initializer7e7c95c && ($this->initializer7e7c95c->__invoke($valueHolder7e7c95c, $this, 'vote', array('token' => $token, 'subject' => $subject, 'attributes' => $attributes), $this->initializer7e7c95c) || 1) && $this->valueHolder7e7c95c = $valueHolder7e7c95c;

        return $this->valueHolder7e7c95c->vote($token, $subject, $attributes);
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

        \Closure::bind(function (\Main\UserBundle\Security\Voter\UseBenefitVoter $instance) {
            unset($instance->security);
        }, $instance, 'Main\\UserBundle\\Security\\Voter\\UseBenefitVoter')->__invoke($instance);

        $instance->initializer7e7c95c = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Symfony\Component\Security\Core\Security $security)
    {
        static $reflection;

        if (! $this->valueHolder7e7c95c) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Security\\Voter\\UseBenefitVoter');
            $this->valueHolder7e7c95c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Main\UserBundle\Security\Voter\UseBenefitVoter $instance) {
            unset($instance->security);
        }, $this, 'Main\\UserBundle\\Security\\Voter\\UseBenefitVoter')->__invoke($this);

        }

        $this->valueHolder7e7c95c->__construct($security);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer7e7c95c && ($this->initializer7e7c95c->__invoke($valueHolder7e7c95c, $this, '__get', ['name' => $name], $this->initializer7e7c95c) || 1) && $this->valueHolder7e7c95c = $valueHolder7e7c95c;

        if (isset(self::$publicProperties7e7c95c[$name])) {
            return $this->valueHolder7e7c95c->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e7c95c;

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

        $targetObject = $this->valueHolder7e7c95c;
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
        $this->initializer7e7c95c && ($this->initializer7e7c95c->__invoke($valueHolder7e7c95c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7e7c95c) || 1) && $this->valueHolder7e7c95c = $valueHolder7e7c95c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e7c95c;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder7e7c95c;
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
        $this->initializer7e7c95c && ($this->initializer7e7c95c->__invoke($valueHolder7e7c95c, $this, '__isset', array('name' => $name), $this->initializer7e7c95c) || 1) && $this->valueHolder7e7c95c = $valueHolder7e7c95c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e7c95c;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder7e7c95c;
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
        $this->initializer7e7c95c && ($this->initializer7e7c95c->__invoke($valueHolder7e7c95c, $this, '__unset', array('name' => $name), $this->initializer7e7c95c) || 1) && $this->valueHolder7e7c95c = $valueHolder7e7c95c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e7c95c;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder7e7c95c;
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
        $this->initializer7e7c95c && ($this->initializer7e7c95c->__invoke($valueHolder7e7c95c, $this, '__clone', array(), $this->initializer7e7c95c) || 1) && $this->valueHolder7e7c95c = $valueHolder7e7c95c;

        $this->valueHolder7e7c95c = clone $this->valueHolder7e7c95c;
    }

    public function __sleep()
    {
        $this->initializer7e7c95c && ($this->initializer7e7c95c->__invoke($valueHolder7e7c95c, $this, '__sleep', array(), $this->initializer7e7c95c) || 1) && $this->valueHolder7e7c95c = $valueHolder7e7c95c;

        return array('valueHolder7e7c95c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Main\UserBundle\Security\Voter\UseBenefitVoter $instance) {
            unset($instance->security);
        }, $this, 'Main\\UserBundle\\Security\\Voter\\UseBenefitVoter')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer7e7c95c = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer7e7c95c;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer7e7c95c && ($this->initializer7e7c95c->__invoke($valueHolder7e7c95c, $this, 'initializeProxy', array(), $this->initializer7e7c95c) || 1) && $this->valueHolder7e7c95c = $valueHolder7e7c95c;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7e7c95c;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7e7c95c;
    }


}
