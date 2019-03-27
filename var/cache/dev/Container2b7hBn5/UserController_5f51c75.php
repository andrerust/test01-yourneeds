<?php

class UserController_5f51c75 extends \Main\UserBundle\_bak\UserController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder5f51c75 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5f51c75 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5f51c75 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function showAction($id = null, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\UserBundle\Repository\TitleRepository $titleRepository, \Main\UserBundle\Repository\AchievementRepository $achievementRepository, \Main\UserBundle\Repository\AddressRepository $addressRepository, \Main\UserBundle\Repository\BankAccountRepository $bankAccountRepository, \Main\UserBundle\Repository\JobGroupRepository $jobGroupRepository, \Main\InsuranceBundle\Repository\TariffRepository $tariffRepository)
    {
        $this->initializer5f51c75 && ($this->initializer5f51c75->__invoke($valueHolder5f51c75, $this, 'showAction', array('id' => $id, 'userRepository' => $userRepository, 'titleRepository' => $titleRepository, 'achievementRepository' => $achievementRepository, 'addressRepository' => $addressRepository, 'bankAccountRepository' => $bankAccountRepository, 'jobGroupRepository' => $jobGroupRepository, 'tariffRepository' => $tariffRepository), $this->initializer5f51c75) || 1) && $this->valueHolder5f51c75 = $valueHolder5f51c75;

        return $this->valueHolder5f51c75->showAction($id, $userRepository, $titleRepository, $achievementRepository, $addressRepository, $bankAccountRepository, $jobGroupRepository, $tariffRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function registerAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializer5f51c75 && ($this->initializer5f51c75->__invoke($valueHolder5f51c75, $this, 'registerAction', array('request' => $request), $this->initializer5f51c75) || 1) && $this->valueHolder5f51c75 = $valueHolder5f51c75;

        return $this->valueHolder5f51c75->registerAction($request);
    }

    /**
     * {@inheritDoc}
     */
    public function userRegisterAction(\Symfony\Component\HttpFoundation\Request $request, \Main\UserBundle\Repository\UserRepository $userRepository)
    {
        $this->initializer5f51c75 && ($this->initializer5f51c75->__invoke($valueHolder5f51c75, $this, 'userRegisterAction', array('request' => $request, 'userRepository' => $userRepository), $this->initializer5f51c75) || 1) && $this->valueHolder5f51c75 = $valueHolder5f51c75;

        return $this->valueHolder5f51c75->userRegisterAction($request, $userRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializer5f51c75 && ($this->initializer5f51c75->__invoke($valueHolder5f51c75, $this, 'setContainer', array('container' => $container), $this->initializer5f51c75) || 1) && $this->valueHolder5f51c75 = $valueHolder5f51c75;

        return $this->valueHolder5f51c75->setContainer($container);
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

        unset($instance->errorList, $instance->hasErrors, $instance->test, $instance->parser, $instance->tariffMap, $instance->tariffReadabilityMap, $instance->type, $instance->logger, $instance->databaseAccessor, $instance->environment, $instance->user, $instance->optionalUser, $instance->validTypes, $instance->apiTypeMapping, $instance->errors, $instance->container);

        $instance->initializer5f51c75 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder5f51c75) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\_bak\\UserController');
            $this->valueHolder5f51c75 = $reflection->newInstanceWithoutConstructor();
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer5f51c75 && ($this->initializer5f51c75->__invoke($valueHolder5f51c75, $this, '__get', ['name' => $name], $this->initializer5f51c75) || 1) && $this->valueHolder5f51c75 = $valueHolder5f51c75;

        if (isset(self::$publicProperties5f51c75[$name])) {
            return $this->valueHolder5f51c75->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f51c75;

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

        $targetObject = $this->valueHolder5f51c75;
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
        $this->initializer5f51c75 && ($this->initializer5f51c75->__invoke($valueHolder5f51c75, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5f51c75) || 1) && $this->valueHolder5f51c75 = $valueHolder5f51c75;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f51c75;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder5f51c75;
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
        $this->initializer5f51c75 && ($this->initializer5f51c75->__invoke($valueHolder5f51c75, $this, '__isset', array('name' => $name), $this->initializer5f51c75) || 1) && $this->valueHolder5f51c75 = $valueHolder5f51c75;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f51c75;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5f51c75;
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
        $this->initializer5f51c75 && ($this->initializer5f51c75->__invoke($valueHolder5f51c75, $this, '__unset', array('name' => $name), $this->initializer5f51c75) || 1) && $this->valueHolder5f51c75 = $valueHolder5f51c75;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f51c75;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5f51c75;
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
        $this->initializer5f51c75 && ($this->initializer5f51c75->__invoke($valueHolder5f51c75, $this, '__clone', array(), $this->initializer5f51c75) || 1) && $this->valueHolder5f51c75 = $valueHolder5f51c75;

        $this->valueHolder5f51c75 = clone $this->valueHolder5f51c75;
    }

    public function __sleep()
    {
        $this->initializer5f51c75 && ($this->initializer5f51c75->__invoke($valueHolder5f51c75, $this, '__sleep', array(), $this->initializer5f51c75) || 1) && $this->valueHolder5f51c75 = $valueHolder5f51c75;

        return array('valueHolder5f51c75');
    }

    public function __wakeup()
    {
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5f51c75 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer5f51c75;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer5f51c75 && ($this->initializer5f51c75->__invoke($valueHolder5f51c75, $this, 'initializeProxy', array(), $this->initializer5f51c75) || 1) && $this->valueHolder5f51c75 = $valueHolder5f51c75;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5f51c75;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5f51c75;
    }


}
