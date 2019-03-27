<?php

class RegistrationForm_2b2afea extends \Main\UserBundle\Form\RegistrationForm implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder2b2afea = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2b2afea = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2b2afea = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $this->initializer2b2afea && ($this->initializer2b2afea->__invoke($valueHolder2b2afea, $this, 'buildForm', array('builder' => $builder, 'options' => $options), $this->initializer2b2afea) || 1) && $this->valueHolder2b2afea = $valueHolder2b2afea;

        return $this->valueHolder2b2afea->buildForm($builder, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
        $this->initializer2b2afea && ($this->initializer2b2afea->__invoke($valueHolder2b2afea, $this, 'configureOptions', array('resolver' => $resolver), $this->initializer2b2afea) || 1) && $this->valueHolder2b2afea = $valueHolder2b2afea;

        return $this->valueHolder2b2afea->configureOptions($resolver);
    }

    /**
     * {@inheritDoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializer2b2afea && ($this->initializer2b2afea->__invoke($valueHolder2b2afea, $this, 'buildView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializer2b2afea) || 1) && $this->valueHolder2b2afea = $valueHolder2b2afea;

        return $this->valueHolder2b2afea->buildView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function finishView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializer2b2afea && ($this->initializer2b2afea->__invoke($valueHolder2b2afea, $this, 'finishView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializer2b2afea) || 1) && $this->valueHolder2b2afea = $valueHolder2b2afea;

        return $this->valueHolder2b2afea->finishView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockPrefix()
    {
        $this->initializer2b2afea && ($this->initializer2b2afea->__invoke($valueHolder2b2afea, $this, 'getBlockPrefix', array(), $this->initializer2b2afea) || 1) && $this->valueHolder2b2afea = $valueHolder2b2afea;

        return $this->valueHolder2b2afea->getBlockPrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
        $this->initializer2b2afea && ($this->initializer2b2afea->__invoke($valueHolder2b2afea, $this, 'getParent', array(), $this->initializer2b2afea) || 1) && $this->valueHolder2b2afea = $valueHolder2b2afea;

        return $this->valueHolder2b2afea->getParent();
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

        $instance->initializer2b2afea = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder2b2afea) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Form\\RegistrationForm');
            $this->valueHolder2b2afea = $reflection->newInstanceWithoutConstructor();
        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer2b2afea && ($this->initializer2b2afea->__invoke($valueHolder2b2afea, $this, '__get', ['name' => $name], $this->initializer2b2afea) || 1) && $this->valueHolder2b2afea = $valueHolder2b2afea;

        if (isset(self::$publicProperties2b2afea[$name])) {
            return $this->valueHolder2b2afea->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2b2afea;

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

        $targetObject = $this->valueHolder2b2afea;
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
        $this->initializer2b2afea && ($this->initializer2b2afea->__invoke($valueHolder2b2afea, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2b2afea) || 1) && $this->valueHolder2b2afea = $valueHolder2b2afea;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2b2afea;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder2b2afea;
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
        $this->initializer2b2afea && ($this->initializer2b2afea->__invoke($valueHolder2b2afea, $this, '__isset', array('name' => $name), $this->initializer2b2afea) || 1) && $this->valueHolder2b2afea = $valueHolder2b2afea;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2b2afea;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder2b2afea;
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
        $this->initializer2b2afea && ($this->initializer2b2afea->__invoke($valueHolder2b2afea, $this, '__unset', array('name' => $name), $this->initializer2b2afea) || 1) && $this->valueHolder2b2afea = $valueHolder2b2afea;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2b2afea;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder2b2afea;
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
        $this->initializer2b2afea && ($this->initializer2b2afea->__invoke($valueHolder2b2afea, $this, '__clone', array(), $this->initializer2b2afea) || 1) && $this->valueHolder2b2afea = $valueHolder2b2afea;

        $this->valueHolder2b2afea = clone $this->valueHolder2b2afea;
    }

    public function __sleep()
    {
        $this->initializer2b2afea && ($this->initializer2b2afea->__invoke($valueHolder2b2afea, $this, '__sleep', array(), $this->initializer2b2afea) || 1) && $this->valueHolder2b2afea = $valueHolder2b2afea;

        return array('valueHolder2b2afea');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer2b2afea = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer2b2afea;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer2b2afea && ($this->initializer2b2afea->__invoke($valueHolder2b2afea, $this, 'initializeProxy', array(), $this->initializer2b2afea) || 1) && $this->valueHolder2b2afea = $valueHolder2b2afea;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2b2afea;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2b2afea;
    }


}
