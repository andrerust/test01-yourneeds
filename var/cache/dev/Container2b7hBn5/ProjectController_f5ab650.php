<?php

class ProjectController_f5ab650 extends \AppBundle\Controller\ProjectController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderf5ab650 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf5ab650 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf5ab650 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function projectsAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \AppBundle\Repository\ProjectRepository $projectRepository, \Main\UserBundle\Repository\UserProjectRepository $userProjectRepository, \AppBundle\Repository\DocumentRepository $documentRepository, \AppBundle\Repository\DocumentTypeRepository $documentTypeRepository)
    {
        $this->initializerf5ab650 && ($this->initializerf5ab650->__invoke($valueHolderf5ab650, $this, 'projectsAction', array('request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'projectRepository' => $projectRepository, 'userProjectRepository' => $userProjectRepository, 'documentRepository' => $documentRepository, 'documentTypeRepository' => $documentTypeRepository), $this->initializerf5ab650) || 1) && $this->valueHolderf5ab650 = $valueHolderf5ab650;

        return $this->valueHolderf5ab650->projectsAction($request, $authorizationChecker, $userRepository, $projectRepository, $userProjectRepository, $documentRepository, $documentTypeRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializerf5ab650 && ($this->initializerf5ab650->__invoke($valueHolderf5ab650, $this, 'setContainer', array('container' => $container), $this->initializerf5ab650) || 1) && $this->valueHolderf5ab650 = $valueHolderf5ab650;

        return $this->valueHolderf5ab650->setContainer($container);
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

        $instance->initializerf5ab650 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderf5ab650) {
            $reflection = $reflection ?? new \ReflectionClass('AppBundle\\Controller\\ProjectController');
            $this->valueHolderf5ab650 = $reflection->newInstanceWithoutConstructor();
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerf5ab650 && ($this->initializerf5ab650->__invoke($valueHolderf5ab650, $this, '__get', ['name' => $name], $this->initializerf5ab650) || 1) && $this->valueHolderf5ab650 = $valueHolderf5ab650;

        if (isset(self::$publicPropertiesf5ab650[$name])) {
            return $this->valueHolderf5ab650->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf5ab650;

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

        $targetObject = $this->valueHolderf5ab650;
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
        $this->initializerf5ab650 && ($this->initializerf5ab650->__invoke($valueHolderf5ab650, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf5ab650) || 1) && $this->valueHolderf5ab650 = $valueHolderf5ab650;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf5ab650;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderf5ab650;
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
        $this->initializerf5ab650 && ($this->initializerf5ab650->__invoke($valueHolderf5ab650, $this, '__isset', array('name' => $name), $this->initializerf5ab650) || 1) && $this->valueHolderf5ab650 = $valueHolderf5ab650;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf5ab650;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderf5ab650;
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
        $this->initializerf5ab650 && ($this->initializerf5ab650->__invoke($valueHolderf5ab650, $this, '__unset', array('name' => $name), $this->initializerf5ab650) || 1) && $this->valueHolderf5ab650 = $valueHolderf5ab650;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf5ab650;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderf5ab650;
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
        $this->initializerf5ab650 && ($this->initializerf5ab650->__invoke($valueHolderf5ab650, $this, '__clone', array(), $this->initializerf5ab650) || 1) && $this->valueHolderf5ab650 = $valueHolderf5ab650;

        $this->valueHolderf5ab650 = clone $this->valueHolderf5ab650;
    }

    public function __sleep()
    {
        $this->initializerf5ab650 && ($this->initializerf5ab650->__invoke($valueHolderf5ab650, $this, '__sleep', array(), $this->initializerf5ab650) || 1) && $this->valueHolderf5ab650 = $valueHolderf5ab650;

        return array('valueHolderf5ab650');
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
        $this->initializerf5ab650 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerf5ab650;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerf5ab650 && ($this->initializerf5ab650->__invoke($valueHolderf5ab650, $this, 'initializeProxy', array(), $this->initializerf5ab650) || 1) && $this->valueHolderf5ab650 = $valueHolderf5ab650;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf5ab650;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf5ab650;
    }


}
