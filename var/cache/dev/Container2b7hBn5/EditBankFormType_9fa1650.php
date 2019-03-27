<?php

class EditBankFormType_9fa1650 extends \Main\UserBundle\Form\Bank\Admin\EditBankFormType implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder9fa1650 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9fa1650 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9fa1650 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $this->initializer9fa1650 && ($this->initializer9fa1650->__invoke($valueHolder9fa1650, $this, 'buildForm', array('builder' => $builder, 'options' => $options), $this->initializer9fa1650) || 1) && $this->valueHolder9fa1650 = $valueHolder9fa1650;

        return $this->valueHolder9fa1650->buildForm($builder, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
        $this->initializer9fa1650 && ($this->initializer9fa1650->__invoke($valueHolder9fa1650, $this, 'configureOptions', array('resolver' => $resolver), $this->initializer9fa1650) || 1) && $this->valueHolder9fa1650 = $valueHolder9fa1650;

        return $this->valueHolder9fa1650->configureOptions($resolver);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        $this->initializer9fa1650 && ($this->initializer9fa1650->__invoke($valueHolder9fa1650, $this, 'getName', array(), $this->initializer9fa1650) || 1) && $this->valueHolder9fa1650 = $valueHolder9fa1650;

        return $this->valueHolder9fa1650->getName();
    }

    /**
     * {@inheritDoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializer9fa1650 && ($this->initializer9fa1650->__invoke($valueHolder9fa1650, $this, 'buildView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializer9fa1650) || 1) && $this->valueHolder9fa1650 = $valueHolder9fa1650;

        return $this->valueHolder9fa1650->buildView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function finishView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializer9fa1650 && ($this->initializer9fa1650->__invoke($valueHolder9fa1650, $this, 'finishView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializer9fa1650) || 1) && $this->valueHolder9fa1650 = $valueHolder9fa1650;

        return $this->valueHolder9fa1650->finishView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockPrefix()
    {
        $this->initializer9fa1650 && ($this->initializer9fa1650->__invoke($valueHolder9fa1650, $this, 'getBlockPrefix', array(), $this->initializer9fa1650) || 1) && $this->valueHolder9fa1650 = $valueHolder9fa1650;

        return $this->valueHolder9fa1650->getBlockPrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
        $this->initializer9fa1650 && ($this->initializer9fa1650->__invoke($valueHolder9fa1650, $this, 'getParent', array(), $this->initializer9fa1650) || 1) && $this->valueHolder9fa1650 = $valueHolder9fa1650;

        return $this->valueHolder9fa1650->getParent();
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

        $instance->initializer9fa1650 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder9fa1650) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Form\\Bank\\Admin\\EditBankFormType');
            $this->valueHolder9fa1650 = $reflection->newInstanceWithoutConstructor();
        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer9fa1650 && ($this->initializer9fa1650->__invoke($valueHolder9fa1650, $this, '__get', ['name' => $name], $this->initializer9fa1650) || 1) && $this->valueHolder9fa1650 = $valueHolder9fa1650;

        if (isset(self::$publicProperties9fa1650[$name])) {
            return $this->valueHolder9fa1650->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9fa1650;

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

        $targetObject = $this->valueHolder9fa1650;
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
        $this->initializer9fa1650 && ($this->initializer9fa1650->__invoke($valueHolder9fa1650, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9fa1650) || 1) && $this->valueHolder9fa1650 = $valueHolder9fa1650;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9fa1650;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder9fa1650;
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
        $this->initializer9fa1650 && ($this->initializer9fa1650->__invoke($valueHolder9fa1650, $this, '__isset', array('name' => $name), $this->initializer9fa1650) || 1) && $this->valueHolder9fa1650 = $valueHolder9fa1650;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9fa1650;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder9fa1650;
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
        $this->initializer9fa1650 && ($this->initializer9fa1650->__invoke($valueHolder9fa1650, $this, '__unset', array('name' => $name), $this->initializer9fa1650) || 1) && $this->valueHolder9fa1650 = $valueHolder9fa1650;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9fa1650;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder9fa1650;
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
        $this->initializer9fa1650 && ($this->initializer9fa1650->__invoke($valueHolder9fa1650, $this, '__clone', array(), $this->initializer9fa1650) || 1) && $this->valueHolder9fa1650 = $valueHolder9fa1650;

        $this->valueHolder9fa1650 = clone $this->valueHolder9fa1650;
    }

    public function __sleep()
    {
        $this->initializer9fa1650 && ($this->initializer9fa1650->__invoke($valueHolder9fa1650, $this, '__sleep', array(), $this->initializer9fa1650) || 1) && $this->valueHolder9fa1650 = $valueHolder9fa1650;

        return array('valueHolder9fa1650');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer9fa1650 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer9fa1650;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer9fa1650 && ($this->initializer9fa1650->__invoke($valueHolder9fa1650, $this, 'initializeProxy', array(), $this->initializer9fa1650) || 1) && $this->valueHolder9fa1650 = $valueHolder9fa1650;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9fa1650;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9fa1650;
    }


}
