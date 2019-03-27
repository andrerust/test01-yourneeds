<?php

class SecurityController_eb293b8 extends \Main\UserBundle\Controller\Web\SecurityController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHoldereb293b8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializereb293b8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertieseb293b8 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function loginNewMailAction($id = null, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\UserBundle\Entity\UserSecurityLog $securityLog, $em = null, $uniqueId = null)
    {
        $this->initializereb293b8 && ($this->initializereb293b8->__invoke($valueHoldereb293b8, $this, 'loginNewMailAction', array('id' => $id, 'userRepository' => $userRepository, 'securityLog' => $securityLog, 'em' => $em, 'uniqueId' => $uniqueId), $this->initializereb293b8) || 1) && $this->valueHoldereb293b8 = $valueHoldereb293b8;

        return $this->valueHoldereb293b8->loginNewMailAction($id, $userRepository, $securityLog, $em, $uniqueId);
    }

    /**
     * {@inheritDoc}
     */
    public function loginCheckAction()
    {
        $this->initializereb293b8 && ($this->initializereb293b8->__invoke($valueHoldereb293b8, $this, 'loginCheckAction', array(), $this->initializereb293b8) || 1) && $this->valueHoldereb293b8 = $valueHoldereb293b8;

        return $this->valueHoldereb293b8->loginCheckAction();
    }

    /**
     * {@inheritDoc}
     */
    public function forgotPasswordAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializereb293b8 && ($this->initializereb293b8->__invoke($valueHoldereb293b8, $this, 'forgotPasswordAction', array('request' => $request), $this->initializereb293b8) || 1) && $this->valueHoldereb293b8 = $valueHoldereb293b8;

        return $this->valueHoldereb293b8->forgotPasswordAction($request);
    }

    /**
     * {@inheritDoc}
     */
    public function loginVerificationAction($code = null, \Symfony\Component\HttpFoundation\Request $request, \Main\UserBundle\Repository\UserSecurityLogRepository $securityLogRepository, \Main\UserBundle\Repository\UserRepository $userRepository)
    {
        $this->initializereb293b8 && ($this->initializereb293b8->__invoke($valueHoldereb293b8, $this, 'loginVerificationAction', array('code' => $code, 'request' => $request, 'securityLogRepository' => $securityLogRepository, 'userRepository' => $userRepository), $this->initializereb293b8) || 1) && $this->valueHoldereb293b8 = $valueHoldereb293b8;

        return $this->valueHoldereb293b8->loginVerificationAction($code, $request, $securityLogRepository, $userRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function loginWaitingAction($id, \Symfony\Component\HttpFoundation\Request $request, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\UserBundle\Repository\UserSecurityLogRepository $securityLogRepository, \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface $tokenStorage, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializereb293b8 && ($this->initializereb293b8->__invoke($valueHoldereb293b8, $this, 'loginWaitingAction', array('id' => $id, 'request' => $request, 'userRepository' => $userRepository, 'securityLogRepository' => $securityLogRepository, 'tokenStorage' => $tokenStorage, 'logger' => $logger), $this->initializereb293b8) || 1) && $this->valueHoldereb293b8 = $valueHoldereb293b8;

        return $this->valueHoldereb293b8->loginWaitingAction($id, $request, $userRepository, $securityLogRepository, $tokenStorage, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function loginAction(\Symfony\Component\HttpFoundation\Request $request, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\UserBundle\Repository\UserSecurityLogRepository $securityLogRepository, \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface $tokenStorage, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializereb293b8 && ($this->initializereb293b8->__invoke($valueHoldereb293b8, $this, 'loginAction', array('request' => $request, 'userRepository' => $userRepository, 'securityLogRepository' => $securityLogRepository, 'tokenStorage' => $tokenStorage, 'logger' => $logger), $this->initializereb293b8) || 1) && $this->valueHoldereb293b8 = $valueHoldereb293b8;

        return $this->valueHoldereb293b8->loginAction($request, $userRepository, $securityLogRepository, $tokenStorage, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function relogoutAction()
    {
        $this->initializereb293b8 && ($this->initializereb293b8->__invoke($valueHoldereb293b8, $this, 'relogoutAction', array(), $this->initializereb293b8) || 1) && $this->valueHoldereb293b8 = $valueHoldereb293b8;

        return $this->valueHoldereb293b8->relogoutAction();
    }

    /**
     * {@inheritDoc}
     */
    public function logoutAction()
    {
        $this->initializereb293b8 && ($this->initializereb293b8->__invoke($valueHoldereb293b8, $this, 'logoutAction', array(), $this->initializereb293b8) || 1) && $this->valueHoldereb293b8 = $valueHoldereb293b8;

        return $this->valueHoldereb293b8->logoutAction();
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializereb293b8 && ($this->initializereb293b8->__invoke($valueHoldereb293b8, $this, 'setContainer', array('container' => $container), $this->initializereb293b8) || 1) && $this->valueHoldereb293b8 = $valueHoldereb293b8;

        return $this->valueHoldereb293b8->setContainer($container);
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

        $instance->initializereb293b8 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHoldereb293b8) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Controller\\Web\\SecurityController');
            $this->valueHoldereb293b8 = $reflection->newInstanceWithoutConstructor();
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializereb293b8 && ($this->initializereb293b8->__invoke($valueHoldereb293b8, $this, '__get', ['name' => $name], $this->initializereb293b8) || 1) && $this->valueHoldereb293b8 = $valueHoldereb293b8;

        if (isset(self::$publicPropertieseb293b8[$name])) {
            return $this->valueHoldereb293b8->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb293b8;

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

        $targetObject = $this->valueHoldereb293b8;
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
        $this->initializereb293b8 && ($this->initializereb293b8->__invoke($valueHoldereb293b8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializereb293b8) || 1) && $this->valueHoldereb293b8 = $valueHoldereb293b8;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb293b8;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHoldereb293b8;
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
        $this->initializereb293b8 && ($this->initializereb293b8->__invoke($valueHoldereb293b8, $this, '__isset', array('name' => $name), $this->initializereb293b8) || 1) && $this->valueHoldereb293b8 = $valueHoldereb293b8;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb293b8;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldereb293b8;
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
        $this->initializereb293b8 && ($this->initializereb293b8->__invoke($valueHoldereb293b8, $this, '__unset', array('name' => $name), $this->initializereb293b8) || 1) && $this->valueHoldereb293b8 = $valueHoldereb293b8;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb293b8;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldereb293b8;
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
        $this->initializereb293b8 && ($this->initializereb293b8->__invoke($valueHoldereb293b8, $this, '__clone', array(), $this->initializereb293b8) || 1) && $this->valueHoldereb293b8 = $valueHoldereb293b8;

        $this->valueHoldereb293b8 = clone $this->valueHoldereb293b8;
    }

    public function __sleep()
    {
        $this->initializereb293b8 && ($this->initializereb293b8->__invoke($valueHoldereb293b8, $this, '__sleep', array(), $this->initializereb293b8) || 1) && $this->valueHoldereb293b8 = $valueHoldereb293b8;

        return array('valueHoldereb293b8');
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
        $this->initializereb293b8 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializereb293b8;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializereb293b8 && ($this->initializereb293b8->__invoke($valueHoldereb293b8, $this, 'initializeProxy', array(), $this->initializereb293b8) || 1) && $this->valueHoldereb293b8 = $valueHoldereb293b8;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldereb293b8;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldereb293b8;
    }


}
