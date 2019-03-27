<?php

class SaveSurveyVoter_4e892df extends \Main\UserBundle\Security\Voter\SaveSurveyVoter implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder4e892df = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4e892df = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4e892df = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function vote(\Symfony\Component\Security\Core\Authentication\Token\TokenInterface $token, $subject, array $attributes)
    {
        $this->initializer4e892df && ($this->initializer4e892df->__invoke($valueHolder4e892df, $this, 'vote', array('token' => $token, 'subject' => $subject, 'attributes' => $attributes), $this->initializer4e892df) || 1) && $this->valueHolder4e892df = $valueHolder4e892df;

        return $this->valueHolder4e892df->vote($token, $subject, $attributes);
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

        \Closure::bind(function (\Main\UserBundle\Security\Voter\SaveSurveyVoter $instance) {
            unset($instance->security);
        }, $instance, 'Main\\UserBundle\\Security\\Voter\\SaveSurveyVoter')->__invoke($instance);

        $instance->initializer4e892df = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Symfony\Component\Security\Core\Security $security)
    {
        static $reflection;

        if (! $this->valueHolder4e892df) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Security\\Voter\\SaveSurveyVoter');
            $this->valueHolder4e892df = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Main\UserBundle\Security\Voter\SaveSurveyVoter $instance) {
            unset($instance->security);
        }, $this, 'Main\\UserBundle\\Security\\Voter\\SaveSurveyVoter')->__invoke($this);

        }

        $this->valueHolder4e892df->__construct($security);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer4e892df && ($this->initializer4e892df->__invoke($valueHolder4e892df, $this, '__get', ['name' => $name], $this->initializer4e892df) || 1) && $this->valueHolder4e892df = $valueHolder4e892df;

        if (isset(self::$publicProperties4e892df[$name])) {
            return $this->valueHolder4e892df->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4e892df;

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

        $targetObject = $this->valueHolder4e892df;
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
        $this->initializer4e892df && ($this->initializer4e892df->__invoke($valueHolder4e892df, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4e892df) || 1) && $this->valueHolder4e892df = $valueHolder4e892df;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4e892df;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder4e892df;
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
        $this->initializer4e892df && ($this->initializer4e892df->__invoke($valueHolder4e892df, $this, '__isset', array('name' => $name), $this->initializer4e892df) || 1) && $this->valueHolder4e892df = $valueHolder4e892df;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4e892df;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder4e892df;
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
        $this->initializer4e892df && ($this->initializer4e892df->__invoke($valueHolder4e892df, $this, '__unset', array('name' => $name), $this->initializer4e892df) || 1) && $this->valueHolder4e892df = $valueHolder4e892df;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4e892df;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder4e892df;
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
        $this->initializer4e892df && ($this->initializer4e892df->__invoke($valueHolder4e892df, $this, '__clone', array(), $this->initializer4e892df) || 1) && $this->valueHolder4e892df = $valueHolder4e892df;

        $this->valueHolder4e892df = clone $this->valueHolder4e892df;
    }

    public function __sleep()
    {
        $this->initializer4e892df && ($this->initializer4e892df->__invoke($valueHolder4e892df, $this, '__sleep', array(), $this->initializer4e892df) || 1) && $this->valueHolder4e892df = $valueHolder4e892df;

        return array('valueHolder4e892df');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Main\UserBundle\Security\Voter\SaveSurveyVoter $instance) {
            unset($instance->security);
        }, $this, 'Main\\UserBundle\\Security\\Voter\\SaveSurveyVoter')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer4e892df = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer4e892df;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer4e892df && ($this->initializer4e892df->__invoke($valueHolder4e892df, $this, 'initializeProxy', array(), $this->initializer4e892df) || 1) && $this->valueHolder4e892df = $valueHolder4e892df;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4e892df;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4e892df;
    }


}
