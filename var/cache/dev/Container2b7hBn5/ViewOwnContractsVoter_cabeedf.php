<?php

class ViewOwnContractsVoter_cabeedf extends \Main\UserBundle\Security\Voter\ViewOwnContractsVoter implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHoldercabeedf = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercabeedf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescabeedf = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function vote(\Symfony\Component\Security\Core\Authentication\Token\TokenInterface $token, $subject, array $attributes)
    {
        $this->initializercabeedf && ($this->initializercabeedf->__invoke($valueHoldercabeedf, $this, 'vote', array('token' => $token, 'subject' => $subject, 'attributes' => $attributes), $this->initializercabeedf) || 1) && $this->valueHoldercabeedf = $valueHoldercabeedf;

        return $this->valueHoldercabeedf->vote($token, $subject, $attributes);
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

        \Closure::bind(function (\Main\UserBundle\Security\Voter\ViewOwnContractsVoter $instance) {
            unset($instance->security);
        }, $instance, 'Main\\UserBundle\\Security\\Voter\\ViewOwnContractsVoter')->__invoke($instance);

        $instance->initializercabeedf = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Symfony\Component\Security\Core\Security $security)
    {
        static $reflection;

        if (! $this->valueHoldercabeedf) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Security\\Voter\\ViewOwnContractsVoter');
            $this->valueHoldercabeedf = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Main\UserBundle\Security\Voter\ViewOwnContractsVoter $instance) {
            unset($instance->security);
        }, $this, 'Main\\UserBundle\\Security\\Voter\\ViewOwnContractsVoter')->__invoke($this);

        }

        $this->valueHoldercabeedf->__construct($security);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializercabeedf && ($this->initializercabeedf->__invoke($valueHoldercabeedf, $this, '__get', ['name' => $name], $this->initializercabeedf) || 1) && $this->valueHoldercabeedf = $valueHoldercabeedf;

        if (isset(self::$publicPropertiescabeedf[$name])) {
            return $this->valueHoldercabeedf->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercabeedf;

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

        $targetObject = $this->valueHoldercabeedf;
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
        $this->initializercabeedf && ($this->initializercabeedf->__invoke($valueHoldercabeedf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercabeedf) || 1) && $this->valueHoldercabeedf = $valueHoldercabeedf;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercabeedf;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHoldercabeedf;
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
        $this->initializercabeedf && ($this->initializercabeedf->__invoke($valueHoldercabeedf, $this, '__isset', array('name' => $name), $this->initializercabeedf) || 1) && $this->valueHoldercabeedf = $valueHoldercabeedf;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercabeedf;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldercabeedf;
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
        $this->initializercabeedf && ($this->initializercabeedf->__invoke($valueHoldercabeedf, $this, '__unset', array('name' => $name), $this->initializercabeedf) || 1) && $this->valueHoldercabeedf = $valueHoldercabeedf;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercabeedf;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldercabeedf;
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
        $this->initializercabeedf && ($this->initializercabeedf->__invoke($valueHoldercabeedf, $this, '__clone', array(), $this->initializercabeedf) || 1) && $this->valueHoldercabeedf = $valueHoldercabeedf;

        $this->valueHoldercabeedf = clone $this->valueHoldercabeedf;
    }

    public function __sleep()
    {
        $this->initializercabeedf && ($this->initializercabeedf->__invoke($valueHoldercabeedf, $this, '__sleep', array(), $this->initializercabeedf) || 1) && $this->valueHoldercabeedf = $valueHoldercabeedf;

        return array('valueHoldercabeedf');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Main\UserBundle\Security\Voter\ViewOwnContractsVoter $instance) {
            unset($instance->security);
        }, $this, 'Main\\UserBundle\\Security\\Voter\\ViewOwnContractsVoter')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializercabeedf = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializercabeedf;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializercabeedf && ($this->initializercabeedf->__invoke($valueHoldercabeedf, $this, 'initializeProxy', array(), $this->initializercabeedf) || 1) && $this->valueHoldercabeedf = $valueHoldercabeedf;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercabeedf;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercabeedf;
    }


}
