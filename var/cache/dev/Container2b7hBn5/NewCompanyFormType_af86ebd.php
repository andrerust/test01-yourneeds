<?php

class NewCompanyFormType_af86ebd extends \Main\InsuranceBundle\Form\Company\Admin\NewCompanyFormType implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderaf86ebd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeraf86ebd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesaf86ebd = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $this->initializeraf86ebd && ($this->initializeraf86ebd->__invoke($valueHolderaf86ebd, $this, 'buildForm', array('builder' => $builder, 'options' => $options), $this->initializeraf86ebd) || 1) && $this->valueHolderaf86ebd = $valueHolderaf86ebd;

        return $this->valueHolderaf86ebd->buildForm($builder, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
        $this->initializeraf86ebd && ($this->initializeraf86ebd->__invoke($valueHolderaf86ebd, $this, 'configureOptions', array('resolver' => $resolver), $this->initializeraf86ebd) || 1) && $this->valueHolderaf86ebd = $valueHolderaf86ebd;

        return $this->valueHolderaf86ebd->configureOptions($resolver);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        $this->initializeraf86ebd && ($this->initializeraf86ebd->__invoke($valueHolderaf86ebd, $this, 'getName', array(), $this->initializeraf86ebd) || 1) && $this->valueHolderaf86ebd = $valueHolderaf86ebd;

        return $this->valueHolderaf86ebd->getName();
    }

    /**
     * {@inheritDoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializeraf86ebd && ($this->initializeraf86ebd->__invoke($valueHolderaf86ebd, $this, 'buildView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializeraf86ebd) || 1) && $this->valueHolderaf86ebd = $valueHolderaf86ebd;

        return $this->valueHolderaf86ebd->buildView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function finishView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializeraf86ebd && ($this->initializeraf86ebd->__invoke($valueHolderaf86ebd, $this, 'finishView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializeraf86ebd) || 1) && $this->valueHolderaf86ebd = $valueHolderaf86ebd;

        return $this->valueHolderaf86ebd->finishView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockPrefix()
    {
        $this->initializeraf86ebd && ($this->initializeraf86ebd->__invoke($valueHolderaf86ebd, $this, 'getBlockPrefix', array(), $this->initializeraf86ebd) || 1) && $this->valueHolderaf86ebd = $valueHolderaf86ebd;

        return $this->valueHolderaf86ebd->getBlockPrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
        $this->initializeraf86ebd && ($this->initializeraf86ebd->__invoke($valueHolderaf86ebd, $this, 'getParent', array(), $this->initializeraf86ebd) || 1) && $this->valueHolderaf86ebd = $valueHolderaf86ebd;

        return $this->valueHolderaf86ebd->getParent();
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

        $instance->initializeraf86ebd = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderaf86ebd) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Form\\Company\\Admin\\NewCompanyFormType');
            $this->valueHolderaf86ebd = $reflection->newInstanceWithoutConstructor();
        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializeraf86ebd && ($this->initializeraf86ebd->__invoke($valueHolderaf86ebd, $this, '__get', ['name' => $name], $this->initializeraf86ebd) || 1) && $this->valueHolderaf86ebd = $valueHolderaf86ebd;

        if (isset(self::$publicPropertiesaf86ebd[$name])) {
            return $this->valueHolderaf86ebd->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaf86ebd;

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

        $targetObject = $this->valueHolderaf86ebd;
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
        $this->initializeraf86ebd && ($this->initializeraf86ebd->__invoke($valueHolderaf86ebd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeraf86ebd) || 1) && $this->valueHolderaf86ebd = $valueHolderaf86ebd;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaf86ebd;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderaf86ebd;
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
        $this->initializeraf86ebd && ($this->initializeraf86ebd->__invoke($valueHolderaf86ebd, $this, '__isset', array('name' => $name), $this->initializeraf86ebd) || 1) && $this->valueHolderaf86ebd = $valueHolderaf86ebd;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaf86ebd;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderaf86ebd;
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
        $this->initializeraf86ebd && ($this->initializeraf86ebd->__invoke($valueHolderaf86ebd, $this, '__unset', array('name' => $name), $this->initializeraf86ebd) || 1) && $this->valueHolderaf86ebd = $valueHolderaf86ebd;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaf86ebd;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderaf86ebd;
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
        $this->initializeraf86ebd && ($this->initializeraf86ebd->__invoke($valueHolderaf86ebd, $this, '__clone', array(), $this->initializeraf86ebd) || 1) && $this->valueHolderaf86ebd = $valueHolderaf86ebd;

        $this->valueHolderaf86ebd = clone $this->valueHolderaf86ebd;
    }

    public function __sleep()
    {
        $this->initializeraf86ebd && ($this->initializeraf86ebd->__invoke($valueHolderaf86ebd, $this, '__sleep', array(), $this->initializeraf86ebd) || 1) && $this->valueHolderaf86ebd = $valueHolderaf86ebd;

        return array('valueHolderaf86ebd');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializeraf86ebd = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializeraf86ebd;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializeraf86ebd && ($this->initializeraf86ebd->__invoke($valueHolderaf86ebd, $this, 'initializeProxy', array(), $this->initializeraf86ebd) || 1) && $this->valueHolderaf86ebd = $valueHolderaf86ebd;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderaf86ebd;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderaf86ebd;
    }


}
