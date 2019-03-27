<?php

class ViewSurveyResultVoter_046adfc extends \Main\UserBundle\Security\Voter\ViewSurveyResultVoter implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder046adfc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer046adfc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties046adfc = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function vote(\Symfony\Component\Security\Core\Authentication\Token\TokenInterface $token, $subject, array $attributes)
    {
        $this->initializer046adfc && ($this->initializer046adfc->__invoke($valueHolder046adfc, $this, 'vote', array('token' => $token, 'subject' => $subject, 'attributes' => $attributes), $this->initializer046adfc) || 1) && $this->valueHolder046adfc = $valueHolder046adfc;

        return $this->valueHolder046adfc->vote($token, $subject, $attributes);
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

        \Closure::bind(function (\Main\UserBundle\Security\Voter\ViewSurveyResultVoter $instance) {
            unset($instance->security);
        }, $instance, 'Main\\UserBundle\\Security\\Voter\\ViewSurveyResultVoter')->__invoke($instance);

        $instance->initializer046adfc = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Symfony\Component\Security\Core\Security $security)
    {
        static $reflection;

        if (! $this->valueHolder046adfc) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Security\\Voter\\ViewSurveyResultVoter');
            $this->valueHolder046adfc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Main\UserBundle\Security\Voter\ViewSurveyResultVoter $instance) {
            unset($instance->security);
        }, $this, 'Main\\UserBundle\\Security\\Voter\\ViewSurveyResultVoter')->__invoke($this);

        }

        $this->valueHolder046adfc->__construct($security);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer046adfc && ($this->initializer046adfc->__invoke($valueHolder046adfc, $this, '__get', ['name' => $name], $this->initializer046adfc) || 1) && $this->valueHolder046adfc = $valueHolder046adfc;

        if (isset(self::$publicProperties046adfc[$name])) {
            return $this->valueHolder046adfc->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder046adfc;

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

        $targetObject = $this->valueHolder046adfc;
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
        $this->initializer046adfc && ($this->initializer046adfc->__invoke($valueHolder046adfc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer046adfc) || 1) && $this->valueHolder046adfc = $valueHolder046adfc;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder046adfc;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder046adfc;
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
        $this->initializer046adfc && ($this->initializer046adfc->__invoke($valueHolder046adfc, $this, '__isset', array('name' => $name), $this->initializer046adfc) || 1) && $this->valueHolder046adfc = $valueHolder046adfc;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder046adfc;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder046adfc;
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
        $this->initializer046adfc && ($this->initializer046adfc->__invoke($valueHolder046adfc, $this, '__unset', array('name' => $name), $this->initializer046adfc) || 1) && $this->valueHolder046adfc = $valueHolder046adfc;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder046adfc;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder046adfc;
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
        $this->initializer046adfc && ($this->initializer046adfc->__invoke($valueHolder046adfc, $this, '__clone', array(), $this->initializer046adfc) || 1) && $this->valueHolder046adfc = $valueHolder046adfc;

        $this->valueHolder046adfc = clone $this->valueHolder046adfc;
    }

    public function __sleep()
    {
        $this->initializer046adfc && ($this->initializer046adfc->__invoke($valueHolder046adfc, $this, '__sleep', array(), $this->initializer046adfc) || 1) && $this->valueHolder046adfc = $valueHolder046adfc;

        return array('valueHolder046adfc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Main\UserBundle\Security\Voter\ViewSurveyResultVoter $instance) {
            unset($instance->security);
        }, $this, 'Main\\UserBundle\\Security\\Voter\\ViewSurveyResultVoter')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer046adfc = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer046adfc;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer046adfc && ($this->initializer046adfc->__invoke($valueHolder046adfc, $this, 'initializeProxy', array(), $this->initializer046adfc) || 1) && $this->valueHolder046adfc = $valueHolder046adfc;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder046adfc;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder046adfc;
    }


}
