<?php

class BankController_41c3ae1 extends \Main\UserBundle\Controller\Admin\BankController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder41c3ae1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer41c3ae1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties41c3ae1 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function bankAccountNewAction($id = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\UserBundle\Repository\CountryRepository $countryRepository)
    {
        $this->initializer41c3ae1 && ($this->initializer41c3ae1->__invoke($valueHolder41c3ae1, $this, 'bankAccountNewAction', array('id' => $id, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'countryRepository' => $countryRepository), $this->initializer41c3ae1) || 1) && $this->valueHolder41c3ae1 = $valueHolder41c3ae1;

        return $this->valueHolder41c3ae1->bankAccountNewAction($id, $request, $authorizationChecker, $userRepository, $countryRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function bankAccountEditAction($id = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\UserBundle\Repository\BankAccountRepository $bankAccountRepository, \Main\UserBundle\Repository\CountryRepository $countryRepository)
    {
        $this->initializer41c3ae1 && ($this->initializer41c3ae1->__invoke($valueHolder41c3ae1, $this, 'bankAccountEditAction', array('id' => $id, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'bankAccountRepository' => $bankAccountRepository, 'countryRepository' => $countryRepository), $this->initializer41c3ae1) || 1) && $this->valueHolder41c3ae1 = $valueHolder41c3ae1;

        return $this->valueHolder41c3ae1->bankAccountEditAction($id, $request, $authorizationChecker, $userRepository, $bankAccountRepository, $countryRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function adminBankNewAction($id = null, \Symfony\Component\HttpFoundation\Request $request, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\UserBundle\Repository\CountryRepository $countryRepository)
    {
        $this->initializer41c3ae1 && ($this->initializer41c3ae1->__invoke($valueHolder41c3ae1, $this, 'adminBankNewAction', array('id' => $id, 'request' => $request, 'userRepository' => $userRepository, 'countryRepository' => $countryRepository), $this->initializer41c3ae1) || 1) && $this->valueHolder41c3ae1 = $valueHolder41c3ae1;

        return $this->valueHolder41c3ae1->adminBankNewAction($id, $request, $userRepository, $countryRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function adminBankEditAction($id = null, $bid = null, \Symfony\Component\HttpFoundation\Request $request, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\UserBundle\Repository\BankAccountRepository $bankAccountRepository, \Main\UserBundle\Repository\CountryRepository $countryRepository)
    {
        $this->initializer41c3ae1 && ($this->initializer41c3ae1->__invoke($valueHolder41c3ae1, $this, 'adminBankEditAction', array('id' => $id, 'bid' => $bid, 'request' => $request, 'userRepository' => $userRepository, 'bankAccountRepository' => $bankAccountRepository, 'countryRepository' => $countryRepository), $this->initializer41c3ae1) || 1) && $this->valueHolder41c3ae1 = $valueHolder41c3ae1;

        return $this->valueHolder41c3ae1->adminBankEditAction($id, $bid, $request, $userRepository, $bankAccountRepository, $countryRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializer41c3ae1 && ($this->initializer41c3ae1->__invoke($valueHolder41c3ae1, $this, 'setContainer', array('container' => $container), $this->initializer41c3ae1) || 1) && $this->valueHolder41c3ae1 = $valueHolder41c3ae1;

        return $this->valueHolder41c3ae1->setContainer($container);
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

        $instance->initializer41c3ae1 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder41c3ae1) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Controller\\Admin\\BankController');
            $this->valueHolder41c3ae1 = $reflection->newInstanceWithoutConstructor();
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer41c3ae1 && ($this->initializer41c3ae1->__invoke($valueHolder41c3ae1, $this, '__get', ['name' => $name], $this->initializer41c3ae1) || 1) && $this->valueHolder41c3ae1 = $valueHolder41c3ae1;

        if (isset(self::$publicProperties41c3ae1[$name])) {
            return $this->valueHolder41c3ae1->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder41c3ae1;

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

        $targetObject = $this->valueHolder41c3ae1;
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
        $this->initializer41c3ae1 && ($this->initializer41c3ae1->__invoke($valueHolder41c3ae1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer41c3ae1) || 1) && $this->valueHolder41c3ae1 = $valueHolder41c3ae1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder41c3ae1;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder41c3ae1;
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
        $this->initializer41c3ae1 && ($this->initializer41c3ae1->__invoke($valueHolder41c3ae1, $this, '__isset', array('name' => $name), $this->initializer41c3ae1) || 1) && $this->valueHolder41c3ae1 = $valueHolder41c3ae1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder41c3ae1;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder41c3ae1;
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
        $this->initializer41c3ae1 && ($this->initializer41c3ae1->__invoke($valueHolder41c3ae1, $this, '__unset', array('name' => $name), $this->initializer41c3ae1) || 1) && $this->valueHolder41c3ae1 = $valueHolder41c3ae1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder41c3ae1;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder41c3ae1;
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
        $this->initializer41c3ae1 && ($this->initializer41c3ae1->__invoke($valueHolder41c3ae1, $this, '__clone', array(), $this->initializer41c3ae1) || 1) && $this->valueHolder41c3ae1 = $valueHolder41c3ae1;

        $this->valueHolder41c3ae1 = clone $this->valueHolder41c3ae1;
    }

    public function __sleep()
    {
        $this->initializer41c3ae1 && ($this->initializer41c3ae1->__invoke($valueHolder41c3ae1, $this, '__sleep', array(), $this->initializer41c3ae1) || 1) && $this->valueHolder41c3ae1 = $valueHolder41c3ae1;

        return array('valueHolder41c3ae1');
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
        $this->initializer41c3ae1 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer41c3ae1;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer41c3ae1 && ($this->initializer41c3ae1->__invoke($valueHolder41c3ae1, $this, 'initializeProxy', array(), $this->initializer41c3ae1) || 1) && $this->valueHolder41c3ae1 = $valueHolder41c3ae1;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder41c3ae1;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder41c3ae1;
    }


}
