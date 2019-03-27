<?php

class EditTariffFormType_e35265d extends \Main\InsuranceBundle\Form\Tariff\Admin\EditTariffFormType implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHoldere35265d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere35265d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese35265d = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $this->initializere35265d && ($this->initializere35265d->__invoke($valueHoldere35265d, $this, 'buildForm', array('builder' => $builder, 'options' => $options), $this->initializere35265d) || 1) && $this->valueHoldere35265d = $valueHoldere35265d;

        return $this->valueHoldere35265d->buildForm($builder, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
        $this->initializere35265d && ($this->initializere35265d->__invoke($valueHoldere35265d, $this, 'configureOptions', array('resolver' => $resolver), $this->initializere35265d) || 1) && $this->valueHoldere35265d = $valueHoldere35265d;

        return $this->valueHoldere35265d->configureOptions($resolver);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        $this->initializere35265d && ($this->initializere35265d->__invoke($valueHoldere35265d, $this, 'getName', array(), $this->initializere35265d) || 1) && $this->valueHoldere35265d = $valueHoldere35265d;

        return $this->valueHoldere35265d->getName();
    }

    /**
     * {@inheritDoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializere35265d && ($this->initializere35265d->__invoke($valueHoldere35265d, $this, 'buildView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializere35265d) || 1) && $this->valueHoldere35265d = $valueHoldere35265d;

        return $this->valueHoldere35265d->buildView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function finishView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializere35265d && ($this->initializere35265d->__invoke($valueHoldere35265d, $this, 'finishView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializere35265d) || 1) && $this->valueHoldere35265d = $valueHoldere35265d;

        return $this->valueHoldere35265d->finishView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockPrefix()
    {
        $this->initializere35265d && ($this->initializere35265d->__invoke($valueHoldere35265d, $this, 'getBlockPrefix', array(), $this->initializere35265d) || 1) && $this->valueHoldere35265d = $valueHoldere35265d;

        return $this->valueHoldere35265d->getBlockPrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
        $this->initializere35265d && ($this->initializere35265d->__invoke($valueHoldere35265d, $this, 'getParent', array(), $this->initializere35265d) || 1) && $this->valueHoldere35265d = $valueHoldere35265d;

        return $this->valueHoldere35265d->getParent();
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

        $instance->initializere35265d = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHoldere35265d) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Form\\Tariff\\Admin\\EditTariffFormType');
            $this->valueHoldere35265d = $reflection->newInstanceWithoutConstructor();
        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializere35265d && ($this->initializere35265d->__invoke($valueHoldere35265d, $this, '__get', ['name' => $name], $this->initializere35265d) || 1) && $this->valueHoldere35265d = $valueHoldere35265d;

        if (isset(self::$publicPropertiese35265d[$name])) {
            return $this->valueHoldere35265d->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere35265d;

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

        $targetObject = $this->valueHoldere35265d;
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
        $this->initializere35265d && ($this->initializere35265d->__invoke($valueHoldere35265d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere35265d) || 1) && $this->valueHoldere35265d = $valueHoldere35265d;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere35265d;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHoldere35265d;
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
        $this->initializere35265d && ($this->initializere35265d->__invoke($valueHoldere35265d, $this, '__isset', array('name' => $name), $this->initializere35265d) || 1) && $this->valueHoldere35265d = $valueHoldere35265d;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere35265d;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldere35265d;
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
        $this->initializere35265d && ($this->initializere35265d->__invoke($valueHoldere35265d, $this, '__unset', array('name' => $name), $this->initializere35265d) || 1) && $this->valueHoldere35265d = $valueHoldere35265d;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere35265d;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldere35265d;
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
        $this->initializere35265d && ($this->initializere35265d->__invoke($valueHoldere35265d, $this, '__clone', array(), $this->initializere35265d) || 1) && $this->valueHoldere35265d = $valueHoldere35265d;

        $this->valueHoldere35265d = clone $this->valueHoldere35265d;
    }

    public function __sleep()
    {
        $this->initializere35265d && ($this->initializere35265d->__invoke($valueHoldere35265d, $this, '__sleep', array(), $this->initializere35265d) || 1) && $this->valueHoldere35265d = $valueHoldere35265d;

        return array('valueHoldere35265d');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializere35265d = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializere35265d;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializere35265d && ($this->initializere35265d->__invoke($valueHoldere35265d, $this, 'initializeProxy', array(), $this->initializere35265d) || 1) && $this->valueHoldere35265d = $valueHoldere35265d;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere35265d;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere35265d;
    }


}
