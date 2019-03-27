<?php

class LoginFormAuthentificator_32b4416 extends \Main\UserBundle\Security\LoginFormAuthentificator implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder32b4416 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer32b4416 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties32b4416 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function getCredentials(\Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializer32b4416 && ($this->initializer32b4416->__invoke($valueHolder32b4416, $this, 'getCredentials', array('request' => $request), $this->initializer32b4416) || 1) && $this->valueHolder32b4416 = $valueHolder32b4416;

        return $this->valueHolder32b4416->getCredentials($request);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser($credentials, \Symfony\Component\Security\Core\User\UserProviderInterface $userProvider)
    {
        $this->initializer32b4416 && ($this->initializer32b4416->__invoke($valueHolder32b4416, $this, 'getUser', array('credentials' => $credentials, 'userProvider' => $userProvider), $this->initializer32b4416) || 1) && $this->valueHolder32b4416 = $valueHolder32b4416;

        return $this->valueHolder32b4416->getUser($credentials, $userProvider);
    }

    /**
     * {@inheritDoc}
     */
    public function checkCredentials($credentials, \Symfony\Component\Security\Core\User\UserInterface $user)
    {
        $this->initializer32b4416 && ($this->initializer32b4416->__invoke($valueHolder32b4416, $this, 'checkCredentials', array('credentials' => $credentials, 'user' => $user), $this->initializer32b4416) || 1) && $this->valueHolder32b4416 = $valueHolder32b4416;

        return $this->valueHolder32b4416->checkCredentials($credentials, $user);
    }

    /**
     * {@inheritDoc}
     */
    public function supports(\Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializer32b4416 && ($this->initializer32b4416->__invoke($valueHolder32b4416, $this, 'supports', array('request' => $request), $this->initializer32b4416) || 1) && $this->valueHolder32b4416 = $valueHolder32b4416;

        return $this->valueHolder32b4416->supports($request);
    }

    /**
     * {@inheritDoc}
     */
    public function onAuthenticationSuccess(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authentication\Token\TokenInterface $token, $providerKey)
    {
        $this->initializer32b4416 && ($this->initializer32b4416->__invoke($valueHolder32b4416, $this, 'onAuthenticationSuccess', array('request' => $request, 'token' => $token, 'providerKey' => $providerKey), $this->initializer32b4416) || 1) && $this->valueHolder32b4416 = $valueHolder32b4416;

        return $this->valueHolder32b4416->onAuthenticationSuccess($request, $token, $providerKey);
    }

    /**
     * {@inheritDoc}
     */
    public function onAuthenticationFailure(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Exception\AuthenticationException $exception)
    {
        $this->initializer32b4416 && ($this->initializer32b4416->__invoke($valueHolder32b4416, $this, 'onAuthenticationFailure', array('request' => $request, 'exception' => $exception), $this->initializer32b4416) || 1) && $this->valueHolder32b4416 = $valueHolder32b4416;

        return $this->valueHolder32b4416->onAuthenticationFailure($request, $exception);
    }

    /**
     * {@inheritDoc}
     */
    public function supportsRememberMe()
    {
        $this->initializer32b4416 && ($this->initializer32b4416->__invoke($valueHolder32b4416, $this, 'supportsRememberMe', array(), $this->initializer32b4416) || 1) && $this->valueHolder32b4416 = $valueHolder32b4416;

        return $this->valueHolder32b4416->supportsRememberMe();
    }

    /**
     * {@inheritDoc}
     */
    public function start(\Symfony\Component\HttpFoundation\Request $request, ?\Symfony\Component\Security\Core\Exception\AuthenticationException $authException = null)
    {
        $this->initializer32b4416 && ($this->initializer32b4416->__invoke($valueHolder32b4416, $this, 'start', array('request' => $request, 'authException' => $authException), $this->initializer32b4416) || 1) && $this->valueHolder32b4416 = $valueHolder32b4416;

        return $this->valueHolder32b4416->start($request, $authException);
    }

    /**
     * {@inheritDoc}
     */
    public function createAuthenticatedToken(\Symfony\Component\Security\Core\User\UserInterface $user, $providerKey)
    {
        $this->initializer32b4416 && ($this->initializer32b4416->__invoke($valueHolder32b4416, $this, 'createAuthenticatedToken', array('user' => $user, 'providerKey' => $providerKey), $this->initializer32b4416) || 1) && $this->valueHolder32b4416 = $valueHolder32b4416;

        return $this->valueHolder32b4416->createAuthenticatedToken($user, $providerKey);
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

        \Closure::bind(function (\Main\UserBundle\Security\LoginFormAuthentificator $instance) {
            unset($instance->formFactory, $instance->em, $instance->router, $instance->passwordEncoder, $instance->user);
        }, $instance, 'Main\\UserBundle\\Security\\LoginFormAuthentificator')->__invoke($instance);

        $instance->initializer32b4416 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Symfony\Component\Form\FormFactoryInterface $formFactory, \Doctrine\ORM\EntityManagerInterface $em, \Symfony\Component\Routing\RouterInterface $router, \Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface $passwordEncoder)
    {
        static $reflection;

        if (! $this->valueHolder32b4416) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Security\\LoginFormAuthentificator');
            $this->valueHolder32b4416 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Main\UserBundle\Security\LoginFormAuthentificator $instance) {
            unset($instance->formFactory, $instance->em, $instance->router, $instance->passwordEncoder, $instance->user);
        }, $this, 'Main\\UserBundle\\Security\\LoginFormAuthentificator')->__invoke($this);

        }

        $this->valueHolder32b4416->__construct($formFactory, $em, $router, $passwordEncoder);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer32b4416 && ($this->initializer32b4416->__invoke($valueHolder32b4416, $this, '__get', ['name' => $name], $this->initializer32b4416) || 1) && $this->valueHolder32b4416 = $valueHolder32b4416;

        if (isset(self::$publicProperties32b4416[$name])) {
            return $this->valueHolder32b4416->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder32b4416;

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

        $targetObject = $this->valueHolder32b4416;
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
        $this->initializer32b4416 && ($this->initializer32b4416->__invoke($valueHolder32b4416, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer32b4416) || 1) && $this->valueHolder32b4416 = $valueHolder32b4416;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder32b4416;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder32b4416;
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
        $this->initializer32b4416 && ($this->initializer32b4416->__invoke($valueHolder32b4416, $this, '__isset', array('name' => $name), $this->initializer32b4416) || 1) && $this->valueHolder32b4416 = $valueHolder32b4416;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder32b4416;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder32b4416;
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
        $this->initializer32b4416 && ($this->initializer32b4416->__invoke($valueHolder32b4416, $this, '__unset', array('name' => $name), $this->initializer32b4416) || 1) && $this->valueHolder32b4416 = $valueHolder32b4416;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder32b4416;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder32b4416;
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
        $this->initializer32b4416 && ($this->initializer32b4416->__invoke($valueHolder32b4416, $this, '__clone', array(), $this->initializer32b4416) || 1) && $this->valueHolder32b4416 = $valueHolder32b4416;

        $this->valueHolder32b4416 = clone $this->valueHolder32b4416;
    }

    public function __sleep()
    {
        $this->initializer32b4416 && ($this->initializer32b4416->__invoke($valueHolder32b4416, $this, '__sleep', array(), $this->initializer32b4416) || 1) && $this->valueHolder32b4416 = $valueHolder32b4416;

        return array('valueHolder32b4416');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Main\UserBundle\Security\LoginFormAuthentificator $instance) {
            unset($instance->formFactory, $instance->em, $instance->router, $instance->passwordEncoder, $instance->user);
        }, $this, 'Main\\UserBundle\\Security\\LoginFormAuthentificator')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer32b4416 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer32b4416;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer32b4416 && ($this->initializer32b4416->__invoke($valueHolder32b4416, $this, 'initializeProxy', array(), $this->initializer32b4416) || 1) && $this->valueHolder32b4416 = $valueHolder32b4416;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder32b4416;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder32b4416;
    }


}
