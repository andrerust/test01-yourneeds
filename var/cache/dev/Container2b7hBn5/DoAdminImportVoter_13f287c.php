<?php

class DoAdminImportVoter_13f287c extends \Main\UserBundle\Security\Voter\DoAdminImportVoter implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder13f287c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer13f287c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties13f287c = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function vote(\Symfony\Component\Security\Core\Authentication\Token\TokenInterface $token, $subject, array $attributes)
    {
        $this->initializer13f287c && ($this->initializer13f287c->__invoke($valueHolder13f287c, $this, 'vote', array('token' => $token, 'subject' => $subject, 'attributes' => $attributes), $this->initializer13f287c) || 1) && $this->valueHolder13f287c = $valueHolder13f287c;

        return $this->valueHolder13f287c->vote($token, $subject, $attributes);
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

        \Closure::bind(function (\Main\UserBundle\Security\Voter\DoAdminImportVoter $instance) {
            unset($instance->security);
        }, $instance, 'Main\\UserBundle\\Security\\Voter\\DoAdminImportVoter')->__invoke($instance);

        $instance->initializer13f287c = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Symfony\Component\Security\Core\Security $security)
    {
        static $reflection;

        if (! $this->valueHolder13f287c) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Security\\Voter\\DoAdminImportVoter');
            $this->valueHolder13f287c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Main\UserBundle\Security\Voter\DoAdminImportVoter $instance) {
            unset($instance->security);
        }, $this, 'Main\\UserBundle\\Security\\Voter\\DoAdminImportVoter')->__invoke($this);

        }

        $this->valueHolder13f287c->__construct($security);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer13f287c && ($this->initializer13f287c->__invoke($valueHolder13f287c, $this, '__get', ['name' => $name], $this->initializer13f287c) || 1) && $this->valueHolder13f287c = $valueHolder13f287c;

        if (isset(self::$publicProperties13f287c[$name])) {
            return $this->valueHolder13f287c->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder13f287c;

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

        $targetObject = $this->valueHolder13f287c;
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
        $this->initializer13f287c && ($this->initializer13f287c->__invoke($valueHolder13f287c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer13f287c) || 1) && $this->valueHolder13f287c = $valueHolder13f287c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder13f287c;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder13f287c;
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
        $this->initializer13f287c && ($this->initializer13f287c->__invoke($valueHolder13f287c, $this, '__isset', array('name' => $name), $this->initializer13f287c) || 1) && $this->valueHolder13f287c = $valueHolder13f287c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder13f287c;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder13f287c;
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
        $this->initializer13f287c && ($this->initializer13f287c->__invoke($valueHolder13f287c, $this, '__unset', array('name' => $name), $this->initializer13f287c) || 1) && $this->valueHolder13f287c = $valueHolder13f287c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder13f287c;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder13f287c;
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
        $this->initializer13f287c && ($this->initializer13f287c->__invoke($valueHolder13f287c, $this, '__clone', array(), $this->initializer13f287c) || 1) && $this->valueHolder13f287c = $valueHolder13f287c;

        $this->valueHolder13f287c = clone $this->valueHolder13f287c;
    }

    public function __sleep()
    {
        $this->initializer13f287c && ($this->initializer13f287c->__invoke($valueHolder13f287c, $this, '__sleep', array(), $this->initializer13f287c) || 1) && $this->valueHolder13f287c = $valueHolder13f287c;

        return array('valueHolder13f287c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Main\UserBundle\Security\Voter\DoAdminImportVoter $instance) {
            unset($instance->security);
        }, $this, 'Main\\UserBundle\\Security\\Voter\\DoAdminImportVoter')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer13f287c = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer13f287c;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer13f287c && ($this->initializer13f287c->__invoke($valueHolder13f287c, $this, 'initializeProxy', array(), $this->initializer13f287c) || 1) && $this->valueHolder13f287c = $valueHolder13f287c;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder13f287c;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder13f287c;
    }


}
