<?php

class NewTariffFormType_997c465 extends \Main\InsuranceBundle\Form\Tariff\Admin\NewTariffFormType implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder997c465 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer997c465 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties997c465 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $this->initializer997c465 && ($this->initializer997c465->__invoke($valueHolder997c465, $this, 'buildForm', array('builder' => $builder, 'options' => $options), $this->initializer997c465) || 1) && $this->valueHolder997c465 = $valueHolder997c465;

        return $this->valueHolder997c465->buildForm($builder, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
        $this->initializer997c465 && ($this->initializer997c465->__invoke($valueHolder997c465, $this, 'configureOptions', array('resolver' => $resolver), $this->initializer997c465) || 1) && $this->valueHolder997c465 = $valueHolder997c465;

        return $this->valueHolder997c465->configureOptions($resolver);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        $this->initializer997c465 && ($this->initializer997c465->__invoke($valueHolder997c465, $this, 'getName', array(), $this->initializer997c465) || 1) && $this->valueHolder997c465 = $valueHolder997c465;

        return $this->valueHolder997c465->getName();
    }

    /**
     * {@inheritDoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializer997c465 && ($this->initializer997c465->__invoke($valueHolder997c465, $this, 'buildView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializer997c465) || 1) && $this->valueHolder997c465 = $valueHolder997c465;

        return $this->valueHolder997c465->buildView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function finishView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializer997c465 && ($this->initializer997c465->__invoke($valueHolder997c465, $this, 'finishView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializer997c465) || 1) && $this->valueHolder997c465 = $valueHolder997c465;

        return $this->valueHolder997c465->finishView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockPrefix()
    {
        $this->initializer997c465 && ($this->initializer997c465->__invoke($valueHolder997c465, $this, 'getBlockPrefix', array(), $this->initializer997c465) || 1) && $this->valueHolder997c465 = $valueHolder997c465;

        return $this->valueHolder997c465->getBlockPrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
        $this->initializer997c465 && ($this->initializer997c465->__invoke($valueHolder997c465, $this, 'getParent', array(), $this->initializer997c465) || 1) && $this->valueHolder997c465 = $valueHolder997c465;

        return $this->valueHolder997c465->getParent();
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

        $instance->initializer997c465 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder997c465) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Form\\Tariff\\Admin\\NewTariffFormType');
            $this->valueHolder997c465 = $reflection->newInstanceWithoutConstructor();
        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer997c465 && ($this->initializer997c465->__invoke($valueHolder997c465, $this, '__get', ['name' => $name], $this->initializer997c465) || 1) && $this->valueHolder997c465 = $valueHolder997c465;

        if (isset(self::$publicProperties997c465[$name])) {
            return $this->valueHolder997c465->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder997c465;

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

        $targetObject = $this->valueHolder997c465;
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
        $this->initializer997c465 && ($this->initializer997c465->__invoke($valueHolder997c465, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer997c465) || 1) && $this->valueHolder997c465 = $valueHolder997c465;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder997c465;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder997c465;
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
        $this->initializer997c465 && ($this->initializer997c465->__invoke($valueHolder997c465, $this, '__isset', array('name' => $name), $this->initializer997c465) || 1) && $this->valueHolder997c465 = $valueHolder997c465;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder997c465;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder997c465;
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
        $this->initializer997c465 && ($this->initializer997c465->__invoke($valueHolder997c465, $this, '__unset', array('name' => $name), $this->initializer997c465) || 1) && $this->valueHolder997c465 = $valueHolder997c465;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder997c465;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder997c465;
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
        $this->initializer997c465 && ($this->initializer997c465->__invoke($valueHolder997c465, $this, '__clone', array(), $this->initializer997c465) || 1) && $this->valueHolder997c465 = $valueHolder997c465;

        $this->valueHolder997c465 = clone $this->valueHolder997c465;
    }

    public function __sleep()
    {
        $this->initializer997c465 && ($this->initializer997c465->__invoke($valueHolder997c465, $this, '__sleep', array(), $this->initializer997c465) || 1) && $this->valueHolder997c465 = $valueHolder997c465;

        return array('valueHolder997c465');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer997c465 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer997c465;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer997c465 && ($this->initializer997c465->__invoke($valueHolder997c465, $this, 'initializeProxy', array(), $this->initializer997c465) || 1) && $this->valueHolder997c465 = $valueHolder997c465;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder997c465;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder997c465;
    }


}
