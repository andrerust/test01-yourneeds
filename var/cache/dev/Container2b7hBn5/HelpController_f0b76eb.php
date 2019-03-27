<?php

class HelpController_f0b76eb extends \AppBundle\Controller\HelpController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderf0b76eb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf0b76eb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf0b76eb = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function faqSaveNewAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \AppBundle\Repository\FaqQuestionRepository $faqQuestionRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializerf0b76eb && ($this->initializerf0b76eb->__invoke($valueHolderf0b76eb, $this, 'faqSaveNewAction', array('request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'faqQuestionRepository' => $faqQuestionRepository, 'logger' => $logger), $this->initializerf0b76eb) || 1) && $this->valueHolderf0b76eb = $valueHolderf0b76eb;

        return $this->valueHolderf0b76eb->faqSaveNewAction($request, $authorizationChecker, $userRepository, $faqQuestionRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function faqSaveEditAction(string $id, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \AppBundle\Repository\FaqQuestionRepository $faqQuestionRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializerf0b76eb && ($this->initializerf0b76eb->__invoke($valueHolderf0b76eb, $this, 'faqSaveEditAction', array('id' => $id, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'faqQuestionRepository' => $faqQuestionRepository, 'logger' => $logger), $this->initializerf0b76eb) || 1) && $this->valueHolderf0b76eb = $valueHolderf0b76eb;

        return $this->valueHolderf0b76eb->faqSaveEditAction($id, $request, $authorizationChecker, $userRepository, $faqQuestionRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function faqHelpAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\TypeRepository $typeRepository, \AppBundle\Repository\FaqQuestionRepository $faqQuestionRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializerf0b76eb && ($this->initializerf0b76eb->__invoke($valueHolderf0b76eb, $this, 'faqHelpAction', array('request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'typeRepository' => $typeRepository, 'faqQuestionRepository' => $faqQuestionRepository, 'logger' => $logger), $this->initializerf0b76eb) || 1) && $this->valueHolderf0b76eb = $valueHolderf0b76eb;

        return $this->valueHolderf0b76eb->faqHelpAction($request, $authorizationChecker, $userRepository, $typeRepository, $faqQuestionRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function faqsShowAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\TypeRepository $typeRepository, \AppBundle\Repository\FaqQuestionRepository $faqQuestionRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializerf0b76eb && ($this->initializerf0b76eb->__invoke($valueHolderf0b76eb, $this, 'faqsShowAction', array('request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'typeRepository' => $typeRepository, 'faqQuestionRepository' => $faqQuestionRepository, 'logger' => $logger), $this->initializerf0b76eb) || 1) && $this->valueHolderf0b76eb = $valueHolderf0b76eb;

        return $this->valueHolderf0b76eb->faqsShowAction($request, $authorizationChecker, $userRepository, $typeRepository, $faqQuestionRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializerf0b76eb && ($this->initializerf0b76eb->__invoke($valueHolderf0b76eb, $this, 'setContainer', array('container' => $container), $this->initializerf0b76eb) || 1) && $this->valueHolderf0b76eb = $valueHolderf0b76eb;

        return $this->valueHolderf0b76eb->setContainer($container);
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

        $instance->initializerf0b76eb = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderf0b76eb) {
            $reflection = $reflection ?? new \ReflectionClass('AppBundle\\Controller\\HelpController');
            $this->valueHolderf0b76eb = $reflection->newInstanceWithoutConstructor();
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerf0b76eb && ($this->initializerf0b76eb->__invoke($valueHolderf0b76eb, $this, '__get', ['name' => $name], $this->initializerf0b76eb) || 1) && $this->valueHolderf0b76eb = $valueHolderf0b76eb;

        if (isset(self::$publicPropertiesf0b76eb[$name])) {
            return $this->valueHolderf0b76eb->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0b76eb;

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

        $targetObject = $this->valueHolderf0b76eb;
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
        $this->initializerf0b76eb && ($this->initializerf0b76eb->__invoke($valueHolderf0b76eb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf0b76eb) || 1) && $this->valueHolderf0b76eb = $valueHolderf0b76eb;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0b76eb;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderf0b76eb;
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
        $this->initializerf0b76eb && ($this->initializerf0b76eb->__invoke($valueHolderf0b76eb, $this, '__isset', array('name' => $name), $this->initializerf0b76eb) || 1) && $this->valueHolderf0b76eb = $valueHolderf0b76eb;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0b76eb;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderf0b76eb;
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
        $this->initializerf0b76eb && ($this->initializerf0b76eb->__invoke($valueHolderf0b76eb, $this, '__unset', array('name' => $name), $this->initializerf0b76eb) || 1) && $this->valueHolderf0b76eb = $valueHolderf0b76eb;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0b76eb;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderf0b76eb;
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
        $this->initializerf0b76eb && ($this->initializerf0b76eb->__invoke($valueHolderf0b76eb, $this, '__clone', array(), $this->initializerf0b76eb) || 1) && $this->valueHolderf0b76eb = $valueHolderf0b76eb;

        $this->valueHolderf0b76eb = clone $this->valueHolderf0b76eb;
    }

    public function __sleep()
    {
        $this->initializerf0b76eb && ($this->initializerf0b76eb->__invoke($valueHolderf0b76eb, $this, '__sleep', array(), $this->initializerf0b76eb) || 1) && $this->valueHolderf0b76eb = $valueHolderf0b76eb;

        return array('valueHolderf0b76eb');
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
        $this->initializerf0b76eb = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerf0b76eb;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerf0b76eb && ($this->initializerf0b76eb->__invoke($valueHolderf0b76eb, $this, 'initializeProxy', array(), $this->initializerf0b76eb) || 1) && $this->valueHolderf0b76eb = $valueHolderf0b76eb;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf0b76eb;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf0b76eb;
    }


}
