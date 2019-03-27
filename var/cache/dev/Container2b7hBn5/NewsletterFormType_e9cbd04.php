<?php

class NewsletterFormType_e9cbd04 extends \Main\UserBundle\Form\NewsletterFormType implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHoldere9cbd04 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere9cbd04 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese9cbd04 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $this->initializere9cbd04 && ($this->initializere9cbd04->__invoke($valueHoldere9cbd04, $this, 'buildForm', array('builder' => $builder, 'options' => $options), $this->initializere9cbd04) || 1) && $this->valueHoldere9cbd04 = $valueHoldere9cbd04;

        return $this->valueHoldere9cbd04->buildForm($builder, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
        $this->initializere9cbd04 && ($this->initializere9cbd04->__invoke($valueHoldere9cbd04, $this, 'configureOptions', array('resolver' => $resolver), $this->initializere9cbd04) || 1) && $this->valueHoldere9cbd04 = $valueHoldere9cbd04;

        return $this->valueHoldere9cbd04->configureOptions($resolver);
    }

    /**
     * {@inheritDoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializere9cbd04 && ($this->initializere9cbd04->__invoke($valueHoldere9cbd04, $this, 'buildView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializere9cbd04) || 1) && $this->valueHoldere9cbd04 = $valueHoldere9cbd04;

        return $this->valueHoldere9cbd04->buildView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function finishView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializere9cbd04 && ($this->initializere9cbd04->__invoke($valueHoldere9cbd04, $this, 'finishView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializere9cbd04) || 1) && $this->valueHoldere9cbd04 = $valueHoldere9cbd04;

        return $this->valueHoldere9cbd04->finishView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockPrefix()
    {
        $this->initializere9cbd04 && ($this->initializere9cbd04->__invoke($valueHoldere9cbd04, $this, 'getBlockPrefix', array(), $this->initializere9cbd04) || 1) && $this->valueHoldere9cbd04 = $valueHoldere9cbd04;

        return $this->valueHoldere9cbd04->getBlockPrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
        $this->initializere9cbd04 && ($this->initializere9cbd04->__invoke($valueHoldere9cbd04, $this, 'getParent', array(), $this->initializere9cbd04) || 1) && $this->valueHoldere9cbd04 = $valueHoldere9cbd04;

        return $this->valueHoldere9cbd04->getParent();
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

        $instance->initializere9cbd04 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHoldere9cbd04) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Form\\NewsletterFormType');
            $this->valueHoldere9cbd04 = $reflection->newInstanceWithoutConstructor();
        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializere9cbd04 && ($this->initializere9cbd04->__invoke($valueHoldere9cbd04, $this, '__get', ['name' => $name], $this->initializere9cbd04) || 1) && $this->valueHoldere9cbd04 = $valueHoldere9cbd04;

        if (isset(self::$publicPropertiese9cbd04[$name])) {
            return $this->valueHoldere9cbd04->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere9cbd04;

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

        $targetObject = $this->valueHoldere9cbd04;
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
        $this->initializere9cbd04 && ($this->initializere9cbd04->__invoke($valueHoldere9cbd04, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere9cbd04) || 1) && $this->valueHoldere9cbd04 = $valueHoldere9cbd04;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere9cbd04;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHoldere9cbd04;
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
        $this->initializere9cbd04 && ($this->initializere9cbd04->__invoke($valueHoldere9cbd04, $this, '__isset', array('name' => $name), $this->initializere9cbd04) || 1) && $this->valueHoldere9cbd04 = $valueHoldere9cbd04;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere9cbd04;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldere9cbd04;
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
        $this->initializere9cbd04 && ($this->initializere9cbd04->__invoke($valueHoldere9cbd04, $this, '__unset', array('name' => $name), $this->initializere9cbd04) || 1) && $this->valueHoldere9cbd04 = $valueHoldere9cbd04;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere9cbd04;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldere9cbd04;
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
        $this->initializere9cbd04 && ($this->initializere9cbd04->__invoke($valueHoldere9cbd04, $this, '__clone', array(), $this->initializere9cbd04) || 1) && $this->valueHoldere9cbd04 = $valueHoldere9cbd04;

        $this->valueHoldere9cbd04 = clone $this->valueHoldere9cbd04;
    }

    public function __sleep()
    {
        $this->initializere9cbd04 && ($this->initializere9cbd04->__invoke($valueHoldere9cbd04, $this, '__sleep', array(), $this->initializere9cbd04) || 1) && $this->valueHoldere9cbd04 = $valueHoldere9cbd04;

        return array('valueHoldere9cbd04');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializere9cbd04 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializere9cbd04;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializere9cbd04 && ($this->initializere9cbd04->__invoke($valueHoldere9cbd04, $this, 'initializeProxy', array(), $this->initializere9cbd04) || 1) && $this->valueHoldere9cbd04 = $valueHoldere9cbd04;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere9cbd04;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere9cbd04;
    }


}
