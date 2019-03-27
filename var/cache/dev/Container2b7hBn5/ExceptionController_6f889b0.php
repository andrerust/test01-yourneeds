<?php

class ExceptionController_6f889b0 extends \AppBundle\Controller\ExceptionController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder6f889b0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6f889b0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6f889b0 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function pageNotFoundAction($id = null, \Symfony\Component\HttpFoundation\Request $request, \Main\UserBundle\Repository\UserRepository $userRepository, \AppBundle\Repository\ProjectRepository $projectRepository, \Main\UserBundle\Repository\UserProjectRepository $userProjectRepository, \AppBundle\Repository\DocumentRepository $documentRepository, \AppBundle\Repository\DocumentTypeRepository $documentTypeRepository)
    {
        $this->initializer6f889b0 && ($this->initializer6f889b0->__invoke($valueHolder6f889b0, $this, 'pageNotFoundAction', array('id' => $id, 'request' => $request, 'userRepository' => $userRepository, 'projectRepository' => $projectRepository, 'userProjectRepository' => $userProjectRepository, 'documentRepository' => $documentRepository, 'documentTypeRepository' => $documentTypeRepository), $this->initializer6f889b0) || 1) && $this->valueHolder6f889b0 = $valueHolder6f889b0;

        return $this->valueHolder6f889b0->pageNotFoundAction($id, $request, $userRepository, $projectRepository, $userProjectRepository, $documentRepository, $documentTypeRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializer6f889b0 && ($this->initializer6f889b0->__invoke($valueHolder6f889b0, $this, 'setContainer', array('container' => $container), $this->initializer6f889b0) || 1) && $this->valueHolder6f889b0 = $valueHolder6f889b0;

        return $this->valueHolder6f889b0->setContainer($container);
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

        $instance->initializer6f889b0 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder6f889b0) {
            $reflection = $reflection ?? new \ReflectionClass('AppBundle\\Controller\\ExceptionController');
            $this->valueHolder6f889b0 = $reflection->newInstanceWithoutConstructor();
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer6f889b0 && ($this->initializer6f889b0->__invoke($valueHolder6f889b0, $this, '__get', ['name' => $name], $this->initializer6f889b0) || 1) && $this->valueHolder6f889b0 = $valueHolder6f889b0;

        if (isset(self::$publicProperties6f889b0[$name])) {
            return $this->valueHolder6f889b0->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6f889b0;

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

        $targetObject = $this->valueHolder6f889b0;
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
        $this->initializer6f889b0 && ($this->initializer6f889b0->__invoke($valueHolder6f889b0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6f889b0) || 1) && $this->valueHolder6f889b0 = $valueHolder6f889b0;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6f889b0;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder6f889b0;
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
        $this->initializer6f889b0 && ($this->initializer6f889b0->__invoke($valueHolder6f889b0, $this, '__isset', array('name' => $name), $this->initializer6f889b0) || 1) && $this->valueHolder6f889b0 = $valueHolder6f889b0;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6f889b0;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder6f889b0;
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
        $this->initializer6f889b0 && ($this->initializer6f889b0->__invoke($valueHolder6f889b0, $this, '__unset', array('name' => $name), $this->initializer6f889b0) || 1) && $this->valueHolder6f889b0 = $valueHolder6f889b0;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6f889b0;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder6f889b0;
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
        $this->initializer6f889b0 && ($this->initializer6f889b0->__invoke($valueHolder6f889b0, $this, '__clone', array(), $this->initializer6f889b0) || 1) && $this->valueHolder6f889b0 = $valueHolder6f889b0;

        $this->valueHolder6f889b0 = clone $this->valueHolder6f889b0;
    }

    public function __sleep()
    {
        $this->initializer6f889b0 && ($this->initializer6f889b0->__invoke($valueHolder6f889b0, $this, '__sleep', array(), $this->initializer6f889b0) || 1) && $this->valueHolder6f889b0 = $valueHolder6f889b0;

        return array('valueHolder6f889b0');
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
        $this->initializer6f889b0 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer6f889b0;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer6f889b0 && ($this->initializer6f889b0->__invoke($valueHolder6f889b0, $this, 'initializeProxy', array(), $this->initializer6f889b0) || 1) && $this->valueHolder6f889b0 = $valueHolder6f889b0;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6f889b0;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6f889b0;
    }


}
