<?php

class AdminUserController_0015187 extends \Main\UserBundle\Controller\Admin\AdminUserController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder0015187 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0015187 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0015187 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function adminUserNewAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository)
    {
        $this->initializer0015187 && ($this->initializer0015187->__invoke($valueHolder0015187, $this, 'adminUserNewAction', array('request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository), $this->initializer0015187) || 1) && $this->valueHolder0015187 = $valueHolder0015187;

        return $this->valueHolder0015187->adminUserNewAction($request, $authorizationChecker, $userRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function adminUserEditAction($id = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository)
    {
        $this->initializer0015187 && ($this->initializer0015187->__invoke($valueHolder0015187, $this, 'adminUserEditAction', array('id' => $id, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository), $this->initializer0015187) || 1) && $this->valueHolder0015187 = $valueHolder0015187;

        return $this->valueHolder0015187->adminUserEditAction($id, $request, $authorizationChecker, $userRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function adminManagerDecideTypeAction($id = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\UserBundle\Repository\TitleRepository $titleRepository, \Main\UserBundle\Repository\AchievementRepository $achievementRepository, \Main\UserBundle\Repository\AddressRepository $addressRepository, \Main\UserBundle\Repository\BankAccountRepository $bankAccountRepository, \Main\UserBundle\Repository\JobGroupRepository $jobGroupRepository, \Main\InsuranceBundle\Repository\TariffRepository $tariffRepository)
    {
        $this->initializer0015187 && ($this->initializer0015187->__invoke($valueHolder0015187, $this, 'adminManagerDecideTypeAction', array('id' => $id, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'titleRepository' => $titleRepository, 'achievementRepository' => $achievementRepository, 'addressRepository' => $addressRepository, 'bankAccountRepository' => $bankAccountRepository, 'jobGroupRepository' => $jobGroupRepository, 'tariffRepository' => $tariffRepository), $this->initializer0015187) || 1) && $this->valueHolder0015187 = $valueHolder0015187;

        return $this->valueHolder0015187->adminManagerDecideTypeAction($id, $request, $authorizationChecker, $userRepository, $titleRepository, $achievementRepository, $addressRepository, $bankAccountRepository, $jobGroupRepository, $tariffRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function adminUserActivitiesAction($id = null, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\UserBundle\Repository\TitleRepository $titleRepository, \Main\UserBundle\Repository\UserActivityRepository $userActivityRepository)
    {
        $this->initializer0015187 && ($this->initializer0015187->__invoke($valueHolder0015187, $this, 'adminUserActivitiesAction', array('id' => $id, 'userRepository' => $userRepository, 'titleRepository' => $titleRepository, 'userActivityRepository' => $userActivityRepository), $this->initializer0015187) || 1) && $this->valueHolder0015187 = $valueHolder0015187;

        return $this->valueHolder0015187->adminUserActivitiesAction($id, $userRepository, $titleRepository, $userActivityRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function adminUserAction($id = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\UserBundle\Repository\AchievementRepository $achievementRepository, \Main\UserBundle\Repository\AddressRepository $addressRepository, \Main\UserBundle\Repository\BankAccountRepository $bankAccountRepository, \Main\InsuranceBundle\Repository\TariffRepository $tariffRepository)
    {
        $this->initializer0015187 && ($this->initializer0015187->__invoke($valueHolder0015187, $this, 'adminUserAction', array('id' => $id, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'achievementRepository' => $achievementRepository, 'addressRepository' => $addressRepository, 'bankAccountRepository' => $bankAccountRepository, 'tariffRepository' => $tariffRepository), $this->initializer0015187) || 1) && $this->valueHolder0015187 = $valueHolder0015187;

        return $this->valueHolder0015187->adminUserAction($id, $request, $authorizationChecker, $userRepository, $achievementRepository, $addressRepository, $bankAccountRepository, $tariffRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function adminUsersAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\UserBundle\Repository\AddressRepository $addressRepository, \Main\InsuranceBundle\Repository\TariffRepository $tariffRepository)
    {
        $this->initializer0015187 && ($this->initializer0015187->__invoke($valueHolder0015187, $this, 'adminUsersAction', array('request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'addressRepository' => $addressRepository, 'tariffRepository' => $tariffRepository), $this->initializer0015187) || 1) && $this->valueHolder0015187 = $valueHolder0015187;

        return $this->valueHolder0015187->adminUsersAction($request, $authorizationChecker, $userRepository, $addressRepository, $tariffRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializer0015187 && ($this->initializer0015187->__invoke($valueHolder0015187, $this, 'setContainer', array('container' => $container), $this->initializer0015187) || 1) && $this->valueHolder0015187 = $valueHolder0015187;

        return $this->valueHolder0015187->setContainer($container);
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

        $instance->initializer0015187 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder0015187) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Controller\\Admin\\AdminUserController');
            $this->valueHolder0015187 = $reflection->newInstanceWithoutConstructor();
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer0015187 && ($this->initializer0015187->__invoke($valueHolder0015187, $this, '__get', ['name' => $name], $this->initializer0015187) || 1) && $this->valueHolder0015187 = $valueHolder0015187;

        if (isset(self::$publicProperties0015187[$name])) {
            return $this->valueHolder0015187->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0015187;

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

        $targetObject = $this->valueHolder0015187;
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
        $this->initializer0015187 && ($this->initializer0015187->__invoke($valueHolder0015187, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0015187) || 1) && $this->valueHolder0015187 = $valueHolder0015187;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0015187;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder0015187;
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
        $this->initializer0015187 && ($this->initializer0015187->__invoke($valueHolder0015187, $this, '__isset', array('name' => $name), $this->initializer0015187) || 1) && $this->valueHolder0015187 = $valueHolder0015187;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0015187;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder0015187;
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
        $this->initializer0015187 && ($this->initializer0015187->__invoke($valueHolder0015187, $this, '__unset', array('name' => $name), $this->initializer0015187) || 1) && $this->valueHolder0015187 = $valueHolder0015187;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0015187;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder0015187;
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
        $this->initializer0015187 && ($this->initializer0015187->__invoke($valueHolder0015187, $this, '__clone', array(), $this->initializer0015187) || 1) && $this->valueHolder0015187 = $valueHolder0015187;

        $this->valueHolder0015187 = clone $this->valueHolder0015187;
    }

    public function __sleep()
    {
        $this->initializer0015187 && ($this->initializer0015187->__invoke($valueHolder0015187, $this, '__sleep', array(), $this->initializer0015187) || 1) && $this->valueHolder0015187 = $valueHolder0015187;

        return array('valueHolder0015187');
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
        $this->initializer0015187 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer0015187;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer0015187 && ($this->initializer0015187->__invoke($valueHolder0015187, $this, 'initializeProxy', array(), $this->initializer0015187) || 1) && $this->valueHolder0015187 = $valueHolder0015187;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0015187;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0015187;
    }


}
