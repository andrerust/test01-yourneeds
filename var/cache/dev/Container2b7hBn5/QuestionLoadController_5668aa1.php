<?php

class QuestionLoadController_5668aa1 extends \Main\AdminBundle\Controller\Api\QuestionLoadController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder5668aa1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5668aa1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5668aa1 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function loadQuestionsAction($input = 'all', \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\SurveyQuestionRepository $surveyQuestionRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer5668aa1 && ($this->initializer5668aa1->__invoke($valueHolder5668aa1, $this, 'loadQuestionsAction', array('input' => $input, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'surveyQuestionRepository' => $surveyQuestionRepository, 'logger' => $logger), $this->initializer5668aa1) || 1) && $this->valueHolder5668aa1 = $valueHolder5668aa1;

        return $this->valueHolder5668aa1->loadQuestionsAction($input, $request, $authorizationChecker, $userRepository, $surveyQuestionRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializer5668aa1 && ($this->initializer5668aa1->__invoke($valueHolder5668aa1, $this, 'setContainer', array('container' => $container), $this->initializer5668aa1) || 1) && $this->valueHolder5668aa1 = $valueHolder5668aa1;

        return $this->valueHolder5668aa1->setContainer($container);
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

        $instance->initializer5668aa1 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder5668aa1) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\AdminBundle\\Controller\\Api\\QuestionLoadController');
            $this->valueHolder5668aa1 = $reflection->newInstanceWithoutConstructor();
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer5668aa1 && ($this->initializer5668aa1->__invoke($valueHolder5668aa1, $this, '__get', ['name' => $name], $this->initializer5668aa1) || 1) && $this->valueHolder5668aa1 = $valueHolder5668aa1;

        if (isset(self::$publicProperties5668aa1[$name])) {
            return $this->valueHolder5668aa1->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5668aa1;

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

        $targetObject = $this->valueHolder5668aa1;
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
        $this->initializer5668aa1 && ($this->initializer5668aa1->__invoke($valueHolder5668aa1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5668aa1) || 1) && $this->valueHolder5668aa1 = $valueHolder5668aa1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5668aa1;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder5668aa1;
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
        $this->initializer5668aa1 && ($this->initializer5668aa1->__invoke($valueHolder5668aa1, $this, '__isset', array('name' => $name), $this->initializer5668aa1) || 1) && $this->valueHolder5668aa1 = $valueHolder5668aa1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5668aa1;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5668aa1;
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
        $this->initializer5668aa1 && ($this->initializer5668aa1->__invoke($valueHolder5668aa1, $this, '__unset', array('name' => $name), $this->initializer5668aa1) || 1) && $this->valueHolder5668aa1 = $valueHolder5668aa1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5668aa1;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5668aa1;
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
        $this->initializer5668aa1 && ($this->initializer5668aa1->__invoke($valueHolder5668aa1, $this, '__clone', array(), $this->initializer5668aa1) || 1) && $this->valueHolder5668aa1 = $valueHolder5668aa1;

        $this->valueHolder5668aa1 = clone $this->valueHolder5668aa1;
    }

    public function __sleep()
    {
        $this->initializer5668aa1 && ($this->initializer5668aa1->__invoke($valueHolder5668aa1, $this, '__sleep', array(), $this->initializer5668aa1) || 1) && $this->valueHolder5668aa1 = $valueHolder5668aa1;

        return array('valueHolder5668aa1');
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
        $this->initializer5668aa1 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer5668aa1;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer5668aa1 && ($this->initializer5668aa1->__invoke($valueHolder5668aa1, $this, 'initializeProxy', array(), $this->initializer5668aa1) || 1) && $this->valueHolder5668aa1 = $valueHolder5668aa1;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5668aa1;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5668aa1;
    }


}
