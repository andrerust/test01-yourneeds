<?php

class TagFormType_12fd9ca extends \AppBundle\Form\Type\TagFormType implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder12fd9ca = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer12fd9ca = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties12fd9ca = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $this->initializer12fd9ca && ($this->initializer12fd9ca->__invoke($valueHolder12fd9ca, $this, 'buildForm', array('builder' => $builder, 'options' => $options), $this->initializer12fd9ca) || 1) && $this->valueHolder12fd9ca = $valueHolder12fd9ca;

        return $this->valueHolder12fd9ca->buildForm($builder, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
        $this->initializer12fd9ca && ($this->initializer12fd9ca->__invoke($valueHolder12fd9ca, $this, 'configureOptions', array('resolver' => $resolver), $this->initializer12fd9ca) || 1) && $this->valueHolder12fd9ca = $valueHolder12fd9ca;

        return $this->valueHolder12fd9ca->configureOptions($resolver);
    }

    /**
     * {@inheritDoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializer12fd9ca && ($this->initializer12fd9ca->__invoke($valueHolder12fd9ca, $this, 'buildView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializer12fd9ca) || 1) && $this->valueHolder12fd9ca = $valueHolder12fd9ca;

        return $this->valueHolder12fd9ca->buildView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function finishView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializer12fd9ca && ($this->initializer12fd9ca->__invoke($valueHolder12fd9ca, $this, 'finishView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializer12fd9ca) || 1) && $this->valueHolder12fd9ca = $valueHolder12fd9ca;

        return $this->valueHolder12fd9ca->finishView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockPrefix()
    {
        $this->initializer12fd9ca && ($this->initializer12fd9ca->__invoke($valueHolder12fd9ca, $this, 'getBlockPrefix', array(), $this->initializer12fd9ca) || 1) && $this->valueHolder12fd9ca = $valueHolder12fd9ca;

        return $this->valueHolder12fd9ca->getBlockPrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
        $this->initializer12fd9ca && ($this->initializer12fd9ca->__invoke($valueHolder12fd9ca, $this, 'getParent', array(), $this->initializer12fd9ca) || 1) && $this->valueHolder12fd9ca = $valueHolder12fd9ca;

        return $this->valueHolder12fd9ca->getParent();
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

        $instance->initializer12fd9ca = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder12fd9ca) {
            $reflection = $reflection ?? new \ReflectionClass('AppBundle\\Form\\Type\\TagFormType');
            $this->valueHolder12fd9ca = $reflection->newInstanceWithoutConstructor();
        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer12fd9ca && ($this->initializer12fd9ca->__invoke($valueHolder12fd9ca, $this, '__get', ['name' => $name], $this->initializer12fd9ca) || 1) && $this->valueHolder12fd9ca = $valueHolder12fd9ca;

        if (isset(self::$publicProperties12fd9ca[$name])) {
            return $this->valueHolder12fd9ca->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12fd9ca;

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

        $targetObject = $this->valueHolder12fd9ca;
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
        $this->initializer12fd9ca && ($this->initializer12fd9ca->__invoke($valueHolder12fd9ca, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer12fd9ca) || 1) && $this->valueHolder12fd9ca = $valueHolder12fd9ca;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12fd9ca;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder12fd9ca;
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
        $this->initializer12fd9ca && ($this->initializer12fd9ca->__invoke($valueHolder12fd9ca, $this, '__isset', array('name' => $name), $this->initializer12fd9ca) || 1) && $this->valueHolder12fd9ca = $valueHolder12fd9ca;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12fd9ca;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder12fd9ca;
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
        $this->initializer12fd9ca && ($this->initializer12fd9ca->__invoke($valueHolder12fd9ca, $this, '__unset', array('name' => $name), $this->initializer12fd9ca) || 1) && $this->valueHolder12fd9ca = $valueHolder12fd9ca;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12fd9ca;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder12fd9ca;
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
        $this->initializer12fd9ca && ($this->initializer12fd9ca->__invoke($valueHolder12fd9ca, $this, '__clone', array(), $this->initializer12fd9ca) || 1) && $this->valueHolder12fd9ca = $valueHolder12fd9ca;

        $this->valueHolder12fd9ca = clone $this->valueHolder12fd9ca;
    }

    public function __sleep()
    {
        $this->initializer12fd9ca && ($this->initializer12fd9ca->__invoke($valueHolder12fd9ca, $this, '__sleep', array(), $this->initializer12fd9ca) || 1) && $this->valueHolder12fd9ca = $valueHolder12fd9ca;

        return array('valueHolder12fd9ca');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer12fd9ca = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer12fd9ca;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer12fd9ca && ($this->initializer12fd9ca->__invoke($valueHolder12fd9ca, $this, 'initializeProxy', array(), $this->initializer12fd9ca) || 1) && $this->valueHolder12fd9ca = $valueHolder12fd9ca;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder12fd9ca;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder12fd9ca;
    }


}
