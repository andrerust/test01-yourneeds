<?php

class UploadService_3fdeca0 extends \AppBundle\Service\UploadService implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder3fdeca0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3fdeca0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3fdeca0 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function upload(\Symfony\Component\HttpFoundation\File\UploadedFile $file)
    {
        $this->initializer3fdeca0 && ($this->initializer3fdeca0->__invoke($valueHolder3fdeca0, $this, 'upload', array('file' => $file), $this->initializer3fdeca0) || 1) && $this->valueHolder3fdeca0 = $valueHolder3fdeca0;

        return $this->valueHolder3fdeca0->upload($file);
    }

    /**
     * {@inheritDoc}
     */
    public function setActiveTargetDir($target = 'profiles')
    {
        $this->initializer3fdeca0 && ($this->initializer3fdeca0->__invoke($valueHolder3fdeca0, $this, 'setActiveTargetDir', array('target' => $target), $this->initializer3fdeca0) || 1) && $this->valueHolder3fdeca0 = $valueHolder3fdeca0;

        return $this->valueHolder3fdeca0->setActiveTargetDir($target);
    }

    /**
     * {@inheritDoc}
     */
    public function getActiveTargetDir()
    {
        $this->initializer3fdeca0 && ($this->initializer3fdeca0->__invoke($valueHolder3fdeca0, $this, 'getActiveTargetDir', array(), $this->initializer3fdeca0) || 1) && $this->valueHolder3fdeca0 = $valueHolder3fdeca0;

        return $this->valueHolder3fdeca0->getActiveTargetDir();
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

        \Closure::bind(function (\AppBundle\Service\UploadService $instance) {
            unset($instance->targetProfiles, $instance->targetLogos, $instance->targetImages, $instance->activeTargetDir);
        }, $instance, 'AppBundle\\Service\\UploadService')->__invoke($instance);

        $instance->initializer3fdeca0 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct($targetProfiles = [], $targetLogos = [], $targetImages = [])
    {
        static $reflection;

        if (! $this->valueHolder3fdeca0) {
            $reflection = $reflection ?? new \ReflectionClass('AppBundle\\Service\\UploadService');
            $this->valueHolder3fdeca0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\AppBundle\Service\UploadService $instance) {
            unset($instance->targetProfiles, $instance->targetLogos, $instance->targetImages, $instance->activeTargetDir);
        }, $this, 'AppBundle\\Service\\UploadService')->__invoke($this);

        }

        $this->valueHolder3fdeca0->__construct($targetProfiles, $targetLogos, $targetImages);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer3fdeca0 && ($this->initializer3fdeca0->__invoke($valueHolder3fdeca0, $this, '__get', ['name' => $name], $this->initializer3fdeca0) || 1) && $this->valueHolder3fdeca0 = $valueHolder3fdeca0;

        if (isset(self::$publicProperties3fdeca0[$name])) {
            return $this->valueHolder3fdeca0->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3fdeca0;

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

        $targetObject = $this->valueHolder3fdeca0;
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
        $this->initializer3fdeca0 && ($this->initializer3fdeca0->__invoke($valueHolder3fdeca0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3fdeca0) || 1) && $this->valueHolder3fdeca0 = $valueHolder3fdeca0;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3fdeca0;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder3fdeca0;
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
        $this->initializer3fdeca0 && ($this->initializer3fdeca0->__invoke($valueHolder3fdeca0, $this, '__isset', array('name' => $name), $this->initializer3fdeca0) || 1) && $this->valueHolder3fdeca0 = $valueHolder3fdeca0;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3fdeca0;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder3fdeca0;
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
        $this->initializer3fdeca0 && ($this->initializer3fdeca0->__invoke($valueHolder3fdeca0, $this, '__unset', array('name' => $name), $this->initializer3fdeca0) || 1) && $this->valueHolder3fdeca0 = $valueHolder3fdeca0;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3fdeca0;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder3fdeca0;
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
        $this->initializer3fdeca0 && ($this->initializer3fdeca0->__invoke($valueHolder3fdeca0, $this, '__clone', array(), $this->initializer3fdeca0) || 1) && $this->valueHolder3fdeca0 = $valueHolder3fdeca0;

        $this->valueHolder3fdeca0 = clone $this->valueHolder3fdeca0;
    }

    public function __sleep()
    {
        $this->initializer3fdeca0 && ($this->initializer3fdeca0->__invoke($valueHolder3fdeca0, $this, '__sleep', array(), $this->initializer3fdeca0) || 1) && $this->valueHolder3fdeca0 = $valueHolder3fdeca0;

        return array('valueHolder3fdeca0');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\AppBundle\Service\UploadService $instance) {
            unset($instance->targetProfiles, $instance->targetLogos, $instance->targetImages, $instance->activeTargetDir);
        }, $this, 'AppBundle\\Service\\UploadService')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer3fdeca0 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer3fdeca0;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer3fdeca0 && ($this->initializer3fdeca0->__invoke($valueHolder3fdeca0, $this, 'initializeProxy', array(), $this->initializer3fdeca0) || 1) && $this->valueHolder3fdeca0 = $valueHolder3fdeca0;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3fdeca0;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3fdeca0;
    }


}
