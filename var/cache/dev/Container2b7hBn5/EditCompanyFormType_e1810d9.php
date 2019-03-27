<?php

class EditCompanyFormType_e1810d9 extends \Main\InsuranceBundle\Form\Company\Admin\EditCompanyFormType implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHoldere1810d9 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere1810d9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese1810d9 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $this->initializere1810d9 && ($this->initializere1810d9->__invoke($valueHoldere1810d9, $this, 'buildForm', array('builder' => $builder, 'options' => $options), $this->initializere1810d9) || 1) && $this->valueHoldere1810d9 = $valueHoldere1810d9;

        return $this->valueHoldere1810d9->buildForm($builder, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
        $this->initializere1810d9 && ($this->initializere1810d9->__invoke($valueHoldere1810d9, $this, 'configureOptions', array('resolver' => $resolver), $this->initializere1810d9) || 1) && $this->valueHoldere1810d9 = $valueHoldere1810d9;

        return $this->valueHoldere1810d9->configureOptions($resolver);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        $this->initializere1810d9 && ($this->initializere1810d9->__invoke($valueHoldere1810d9, $this, 'getName', array(), $this->initializere1810d9) || 1) && $this->valueHoldere1810d9 = $valueHoldere1810d9;

        return $this->valueHoldere1810d9->getName();
    }

    /**
     * {@inheritDoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializere1810d9 && ($this->initializere1810d9->__invoke($valueHoldere1810d9, $this, 'buildView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializere1810d9) || 1) && $this->valueHoldere1810d9 = $valueHoldere1810d9;

        return $this->valueHoldere1810d9->buildView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function finishView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializere1810d9 && ($this->initializere1810d9->__invoke($valueHoldere1810d9, $this, 'finishView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializere1810d9) || 1) && $this->valueHoldere1810d9 = $valueHoldere1810d9;

        return $this->valueHoldere1810d9->finishView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockPrefix()
    {
        $this->initializere1810d9 && ($this->initializere1810d9->__invoke($valueHoldere1810d9, $this, 'getBlockPrefix', array(), $this->initializere1810d9) || 1) && $this->valueHoldere1810d9 = $valueHoldere1810d9;

        return $this->valueHoldere1810d9->getBlockPrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
        $this->initializere1810d9 && ($this->initializere1810d9->__invoke($valueHoldere1810d9, $this, 'getParent', array(), $this->initializere1810d9) || 1) && $this->valueHoldere1810d9 = $valueHoldere1810d9;

        return $this->valueHoldere1810d9->getParent();
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

        $instance->initializere1810d9 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHoldere1810d9) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Form\\Company\\Admin\\EditCompanyFormType');
            $this->valueHoldere1810d9 = $reflection->newInstanceWithoutConstructor();
        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializere1810d9 && ($this->initializere1810d9->__invoke($valueHoldere1810d9, $this, '__get', ['name' => $name], $this->initializere1810d9) || 1) && $this->valueHoldere1810d9 = $valueHoldere1810d9;

        if (isset(self::$publicPropertiese1810d9[$name])) {
            return $this->valueHoldere1810d9->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1810d9;

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

        $targetObject = $this->valueHoldere1810d9;
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
        $this->initializere1810d9 && ($this->initializere1810d9->__invoke($valueHoldere1810d9, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere1810d9) || 1) && $this->valueHoldere1810d9 = $valueHoldere1810d9;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1810d9;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHoldere1810d9;
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
        $this->initializere1810d9 && ($this->initializere1810d9->__invoke($valueHoldere1810d9, $this, '__isset', array('name' => $name), $this->initializere1810d9) || 1) && $this->valueHoldere1810d9 = $valueHoldere1810d9;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1810d9;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldere1810d9;
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
        $this->initializere1810d9 && ($this->initializere1810d9->__invoke($valueHoldere1810d9, $this, '__unset', array('name' => $name), $this->initializere1810d9) || 1) && $this->valueHoldere1810d9 = $valueHoldere1810d9;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1810d9;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldere1810d9;
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
        $this->initializere1810d9 && ($this->initializere1810d9->__invoke($valueHoldere1810d9, $this, '__clone', array(), $this->initializere1810d9) || 1) && $this->valueHoldere1810d9 = $valueHoldere1810d9;

        $this->valueHoldere1810d9 = clone $this->valueHoldere1810d9;
    }

    public function __sleep()
    {
        $this->initializere1810d9 && ($this->initializere1810d9->__invoke($valueHoldere1810d9, $this, '__sleep', array(), $this->initializere1810d9) || 1) && $this->valueHoldere1810d9 = $valueHoldere1810d9;

        return array('valueHoldere1810d9');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializere1810d9 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializere1810d9;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializere1810d9 && ($this->initializere1810d9->__invoke($valueHoldere1810d9, $this, 'initializeProxy', array(), $this->initializere1810d9) || 1) && $this->valueHoldere1810d9 = $valueHoldere1810d9;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere1810d9;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere1810d9;
    }


}
