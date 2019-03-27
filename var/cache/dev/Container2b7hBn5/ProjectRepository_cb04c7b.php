<?php

class ProjectRepository_cb04c7b extends \AppBundle\Repository\ProjectRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHoldercb04c7b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercb04c7b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescb04c7b = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializercb04c7b && ($this->initializercb04c7b->__invoke($valueHoldercb04c7b, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializercb04c7b) || 1) && $this->valueHoldercb04c7b = $valueHoldercb04c7b;

        return $this->valueHoldercb04c7b->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializercb04c7b && ($this->initializercb04c7b->__invoke($valueHoldercb04c7b, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializercb04c7b) || 1) && $this->valueHoldercb04c7b = $valueHoldercb04c7b;

        return $this->valueHoldercb04c7b->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializercb04c7b && ($this->initializercb04c7b->__invoke($valueHoldercb04c7b, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializercb04c7b) || 1) && $this->valueHoldercb04c7b = $valueHoldercb04c7b;

        return $this->valueHoldercb04c7b->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializercb04c7b && ($this->initializercb04c7b->__invoke($valueHoldercb04c7b, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializercb04c7b) || 1) && $this->valueHoldercb04c7b = $valueHoldercb04c7b;

        return $this->valueHoldercb04c7b->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializercb04c7b && ($this->initializercb04c7b->__invoke($valueHoldercb04c7b, $this, 'clear', array(), $this->initializercb04c7b) || 1) && $this->valueHoldercb04c7b = $valueHoldercb04c7b;

        return $this->valueHoldercb04c7b->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercb04c7b && ($this->initializercb04c7b->__invoke($valueHoldercb04c7b, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercb04c7b) || 1) && $this->valueHoldercb04c7b = $valueHoldercb04c7b;

        return $this->valueHoldercb04c7b->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializercb04c7b && ($this->initializercb04c7b->__invoke($valueHoldercb04c7b, $this, 'findAll', array(), $this->initializercb04c7b) || 1) && $this->valueHoldercb04c7b = $valueHoldercb04c7b;

        return $this->valueHoldercb04c7b->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializercb04c7b && ($this->initializercb04c7b->__invoke($valueHoldercb04c7b, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializercb04c7b) || 1) && $this->valueHoldercb04c7b = $valueHoldercb04c7b;

        return $this->valueHoldercb04c7b->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializercb04c7b && ($this->initializercb04c7b->__invoke($valueHoldercb04c7b, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializercb04c7b) || 1) && $this->valueHoldercb04c7b = $valueHoldercb04c7b;

        return $this->valueHoldercb04c7b->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializercb04c7b && ($this->initializercb04c7b->__invoke($valueHoldercb04c7b, $this, 'count', array('criteria' => $criteria), $this->initializercb04c7b) || 1) && $this->valueHoldercb04c7b = $valueHoldercb04c7b;

        return $this->valueHoldercb04c7b->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializercb04c7b && ($this->initializercb04c7b->__invoke($valueHoldercb04c7b, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializercb04c7b) || 1) && $this->valueHoldercb04c7b = $valueHoldercb04c7b;

        return $this->valueHoldercb04c7b->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializercb04c7b && ($this->initializercb04c7b->__invoke($valueHoldercb04c7b, $this, 'getClassName', array(), $this->initializercb04c7b) || 1) && $this->valueHoldercb04c7b = $valueHoldercb04c7b;

        return $this->valueHoldercb04c7b->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializercb04c7b && ($this->initializercb04c7b->__invoke($valueHoldercb04c7b, $this, 'matching', array('criteria' => $criteria), $this->initializercb04c7b) || 1) && $this->valueHoldercb04c7b = $valueHoldercb04c7b;

        return $this->valueHoldercb04c7b->matching($criteria);
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

        unset($instance->_entityName, $instance->_em, $instance->_class);

        $instance->initializercb04c7b = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHoldercb04c7b) {
            $reflection = $reflection ?? new \ReflectionClass('AppBundle\\Repository\\ProjectRepository');
            $this->valueHoldercb04c7b = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHoldercb04c7b->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializercb04c7b && ($this->initializercb04c7b->__invoke($valueHoldercb04c7b, $this, '__get', ['name' => $name], $this->initializercb04c7b) || 1) && $this->valueHoldercb04c7b = $valueHoldercb04c7b;

        if (isset(self::$publicPropertiescb04c7b[$name])) {
            return $this->valueHoldercb04c7b->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb04c7b;

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

        $targetObject = $this->valueHoldercb04c7b;
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
        $this->initializercb04c7b && ($this->initializercb04c7b->__invoke($valueHoldercb04c7b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercb04c7b) || 1) && $this->valueHoldercb04c7b = $valueHoldercb04c7b;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb04c7b;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHoldercb04c7b;
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
        $this->initializercb04c7b && ($this->initializercb04c7b->__invoke($valueHoldercb04c7b, $this, '__isset', array('name' => $name), $this->initializercb04c7b) || 1) && $this->valueHoldercb04c7b = $valueHoldercb04c7b;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb04c7b;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldercb04c7b;
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
        $this->initializercb04c7b && ($this->initializercb04c7b->__invoke($valueHoldercb04c7b, $this, '__unset', array('name' => $name), $this->initializercb04c7b) || 1) && $this->valueHoldercb04c7b = $valueHoldercb04c7b;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb04c7b;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldercb04c7b;
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
        $this->initializercb04c7b && ($this->initializercb04c7b->__invoke($valueHoldercb04c7b, $this, '__clone', array(), $this->initializercb04c7b) || 1) && $this->valueHoldercb04c7b = $valueHoldercb04c7b;

        $this->valueHoldercb04c7b = clone $this->valueHoldercb04c7b;
    }

    public function __sleep()
    {
        $this->initializercb04c7b && ($this->initializercb04c7b->__invoke($valueHoldercb04c7b, $this, '__sleep', array(), $this->initializercb04c7b) || 1) && $this->valueHoldercb04c7b = $valueHoldercb04c7b;

        return array('valueHoldercb04c7b');
    }

    public function __wakeup()
    {
        unset($this->_entityName, $this->_em, $this->_class);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializercb04c7b = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializercb04c7b;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializercb04c7b && ($this->initializercb04c7b->__invoke($valueHoldercb04c7b, $this, 'initializeProxy', array(), $this->initializercb04c7b) || 1) && $this->valueHoldercb04c7b = $valueHoldercb04c7b;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercb04c7b;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercb04c7b;
    }


}
