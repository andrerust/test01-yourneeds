<?php

class EditUserFormType_1222deb extends \Main\UserBundle\Form\User\Admin\EditUserFormType implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder1222deb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1222deb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1222deb = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $this->initializer1222deb && ($this->initializer1222deb->__invoke($valueHolder1222deb, $this, 'buildForm', array('builder' => $builder, 'options' => $options), $this->initializer1222deb) || 1) && $this->valueHolder1222deb = $valueHolder1222deb;

        return $this->valueHolder1222deb->buildForm($builder, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
        $this->initializer1222deb && ($this->initializer1222deb->__invoke($valueHolder1222deb, $this, 'configureOptions', array('resolver' => $resolver), $this->initializer1222deb) || 1) && $this->valueHolder1222deb = $valueHolder1222deb;

        return $this->valueHolder1222deb->configureOptions($resolver);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        $this->initializer1222deb && ($this->initializer1222deb->__invoke($valueHolder1222deb, $this, 'getName', array(), $this->initializer1222deb) || 1) && $this->valueHolder1222deb = $valueHolder1222deb;

        return $this->valueHolder1222deb->getName();
    }

    /**
     * {@inheritDoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializer1222deb && ($this->initializer1222deb->__invoke($valueHolder1222deb, $this, 'buildView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializer1222deb) || 1) && $this->valueHolder1222deb = $valueHolder1222deb;

        return $this->valueHolder1222deb->buildView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function finishView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializer1222deb && ($this->initializer1222deb->__invoke($valueHolder1222deb, $this, 'finishView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializer1222deb) || 1) && $this->valueHolder1222deb = $valueHolder1222deb;

        return $this->valueHolder1222deb->finishView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockPrefix()
    {
        $this->initializer1222deb && ($this->initializer1222deb->__invoke($valueHolder1222deb, $this, 'getBlockPrefix', array(), $this->initializer1222deb) || 1) && $this->valueHolder1222deb = $valueHolder1222deb;

        return $this->valueHolder1222deb->getBlockPrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
        $this->initializer1222deb && ($this->initializer1222deb->__invoke($valueHolder1222deb, $this, 'getParent', array(), $this->initializer1222deb) || 1) && $this->valueHolder1222deb = $valueHolder1222deb;

        return $this->valueHolder1222deb->getParent();
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

        $instance->initializer1222deb = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder1222deb) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Form\\User\\Admin\\EditUserFormType');
            $this->valueHolder1222deb = $reflection->newInstanceWithoutConstructor();
        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer1222deb && ($this->initializer1222deb->__invoke($valueHolder1222deb, $this, '__get', ['name' => $name], $this->initializer1222deb) || 1) && $this->valueHolder1222deb = $valueHolder1222deb;

        if (isset(self::$publicProperties1222deb[$name])) {
            return $this->valueHolder1222deb->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1222deb;

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

        $targetObject = $this->valueHolder1222deb;
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
        $this->initializer1222deb && ($this->initializer1222deb->__invoke($valueHolder1222deb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1222deb) || 1) && $this->valueHolder1222deb = $valueHolder1222deb;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1222deb;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder1222deb;
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
        $this->initializer1222deb && ($this->initializer1222deb->__invoke($valueHolder1222deb, $this, '__isset', array('name' => $name), $this->initializer1222deb) || 1) && $this->valueHolder1222deb = $valueHolder1222deb;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1222deb;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder1222deb;
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
        $this->initializer1222deb && ($this->initializer1222deb->__invoke($valueHolder1222deb, $this, '__unset', array('name' => $name), $this->initializer1222deb) || 1) && $this->valueHolder1222deb = $valueHolder1222deb;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1222deb;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder1222deb;
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
        $this->initializer1222deb && ($this->initializer1222deb->__invoke($valueHolder1222deb, $this, '__clone', array(), $this->initializer1222deb) || 1) && $this->valueHolder1222deb = $valueHolder1222deb;

        $this->valueHolder1222deb = clone $this->valueHolder1222deb;
    }

    public function __sleep()
    {
        $this->initializer1222deb && ($this->initializer1222deb->__invoke($valueHolder1222deb, $this, '__sleep', array(), $this->initializer1222deb) || 1) && $this->valueHolder1222deb = $valueHolder1222deb;

        return array('valueHolder1222deb');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer1222deb = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer1222deb;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer1222deb && ($this->initializer1222deb->__invoke($valueHolder1222deb, $this, 'initializeProxy', array(), $this->initializer1222deb) || 1) && $this->valueHolder1222deb = $valueHolder1222deb;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1222deb;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1222deb;
    }


}
