<?php

class DoNewContractVoter_88e9470 extends \Main\UserBundle\Security\Voter\DoNewContractVoter implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder88e9470 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer88e9470 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties88e9470 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function vote(\Symfony\Component\Security\Core\Authentication\Token\TokenInterface $token, $subject, array $attributes)
    {
        $this->initializer88e9470 && ($this->initializer88e9470->__invoke($valueHolder88e9470, $this, 'vote', array('token' => $token, 'subject' => $subject, 'attributes' => $attributes), $this->initializer88e9470) || 1) && $this->valueHolder88e9470 = $valueHolder88e9470;

        return $this->valueHolder88e9470->vote($token, $subject, $attributes);
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

        \Closure::bind(function (\Main\UserBundle\Security\Voter\DoNewContractVoter $instance) {
            unset($instance->security);
        }, $instance, 'Main\\UserBundle\\Security\\Voter\\DoNewContractVoter')->__invoke($instance);

        $instance->initializer88e9470 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Symfony\Component\Security\Core\Security $security)
    {
        static $reflection;

        if (! $this->valueHolder88e9470) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Security\\Voter\\DoNewContractVoter');
            $this->valueHolder88e9470 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Main\UserBundle\Security\Voter\DoNewContractVoter $instance) {
            unset($instance->security);
        }, $this, 'Main\\UserBundle\\Security\\Voter\\DoNewContractVoter')->__invoke($this);

        }

        $this->valueHolder88e9470->__construct($security);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer88e9470 && ($this->initializer88e9470->__invoke($valueHolder88e9470, $this, '__get', ['name' => $name], $this->initializer88e9470) || 1) && $this->valueHolder88e9470 = $valueHolder88e9470;

        if (isset(self::$publicProperties88e9470[$name])) {
            return $this->valueHolder88e9470->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder88e9470;

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

        $targetObject = $this->valueHolder88e9470;
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
        $this->initializer88e9470 && ($this->initializer88e9470->__invoke($valueHolder88e9470, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer88e9470) || 1) && $this->valueHolder88e9470 = $valueHolder88e9470;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder88e9470;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder88e9470;
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
        $this->initializer88e9470 && ($this->initializer88e9470->__invoke($valueHolder88e9470, $this, '__isset', array('name' => $name), $this->initializer88e9470) || 1) && $this->valueHolder88e9470 = $valueHolder88e9470;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder88e9470;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder88e9470;
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
        $this->initializer88e9470 && ($this->initializer88e9470->__invoke($valueHolder88e9470, $this, '__unset', array('name' => $name), $this->initializer88e9470) || 1) && $this->valueHolder88e9470 = $valueHolder88e9470;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder88e9470;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder88e9470;
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
        $this->initializer88e9470 && ($this->initializer88e9470->__invoke($valueHolder88e9470, $this, '__clone', array(), $this->initializer88e9470) || 1) && $this->valueHolder88e9470 = $valueHolder88e9470;

        $this->valueHolder88e9470 = clone $this->valueHolder88e9470;
    }

    public function __sleep()
    {
        $this->initializer88e9470 && ($this->initializer88e9470->__invoke($valueHolder88e9470, $this, '__sleep', array(), $this->initializer88e9470) || 1) && $this->valueHolder88e9470 = $valueHolder88e9470;

        return array('valueHolder88e9470');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Main\UserBundle\Security\Voter\DoNewContractVoter $instance) {
            unset($instance->security);
        }, $this, 'Main\\UserBundle\\Security\\Voter\\DoNewContractVoter')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer88e9470 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer88e9470;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer88e9470 && ($this->initializer88e9470->__invoke($valueHolder88e9470, $this, 'initializeProxy', array(), $this->initializer88e9470) || 1) && $this->valueHolder88e9470 = $valueHolder88e9470;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder88e9470;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder88e9470;
    }


}
