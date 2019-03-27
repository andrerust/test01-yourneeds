<?php

class AddressRepository_a90034b extends \Main\UserBundle\Repository\AddressRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHoldera90034b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera90034b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa90034b = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function findAll($id = null)
    {
        $this->initializera90034b && ($this->initializera90034b->__invoke($valueHoldera90034b, $this, 'findAll', array('id' => $id), $this->initializera90034b) || 1) && $this->valueHoldera90034b = $valueHoldera90034b;

        return $this->valueHoldera90034b->findAll($id);
    }

    /**
     * {@inheritDoc}
     */
    public function findByUserId($id = null)
    {
        $this->initializera90034b && ($this->initializera90034b->__invoke($valueHoldera90034b, $this, 'findByUserId', array('id' => $id), $this->initializera90034b) || 1) && $this->valueHoldera90034b = $valueHoldera90034b;

        return $this->valueHoldera90034b->findByUserId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializera90034b && ($this->initializera90034b->__invoke($valueHoldera90034b, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializera90034b) || 1) && $this->valueHoldera90034b = $valueHoldera90034b;

        return $this->valueHoldera90034b->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializera90034b && ($this->initializera90034b->__invoke($valueHoldera90034b, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializera90034b) || 1) && $this->valueHoldera90034b = $valueHoldera90034b;

        return $this->valueHoldera90034b->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializera90034b && ($this->initializera90034b->__invoke($valueHoldera90034b, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializera90034b) || 1) && $this->valueHoldera90034b = $valueHoldera90034b;

        return $this->valueHoldera90034b->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializera90034b && ($this->initializera90034b->__invoke($valueHoldera90034b, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializera90034b) || 1) && $this->valueHoldera90034b = $valueHoldera90034b;

        return $this->valueHoldera90034b->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializera90034b && ($this->initializera90034b->__invoke($valueHoldera90034b, $this, 'clear', array(), $this->initializera90034b) || 1) && $this->valueHoldera90034b = $valueHoldera90034b;

        return $this->valueHoldera90034b->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera90034b && ($this->initializera90034b->__invoke($valueHoldera90034b, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera90034b) || 1) && $this->valueHoldera90034b = $valueHoldera90034b;

        return $this->valueHoldera90034b->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializera90034b && ($this->initializera90034b->__invoke($valueHoldera90034b, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializera90034b) || 1) && $this->valueHoldera90034b = $valueHoldera90034b;

        return $this->valueHoldera90034b->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializera90034b && ($this->initializera90034b->__invoke($valueHoldera90034b, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializera90034b) || 1) && $this->valueHoldera90034b = $valueHoldera90034b;

        return $this->valueHoldera90034b->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializera90034b && ($this->initializera90034b->__invoke($valueHoldera90034b, $this, 'count', array('criteria' => $criteria), $this->initializera90034b) || 1) && $this->valueHoldera90034b = $valueHoldera90034b;

        return $this->valueHoldera90034b->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializera90034b && ($this->initializera90034b->__invoke($valueHoldera90034b, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializera90034b) || 1) && $this->valueHoldera90034b = $valueHoldera90034b;

        return $this->valueHoldera90034b->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializera90034b && ($this->initializera90034b->__invoke($valueHoldera90034b, $this, 'getClassName', array(), $this->initializera90034b) || 1) && $this->valueHoldera90034b = $valueHoldera90034b;

        return $this->valueHoldera90034b->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializera90034b && ($this->initializera90034b->__invoke($valueHoldera90034b, $this, 'matching', array('criteria' => $criteria), $this->initializera90034b) || 1) && $this->valueHoldera90034b = $valueHoldera90034b;

        return $this->valueHoldera90034b->matching($criteria);
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

        $instance->initializera90034b = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHoldera90034b) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Repository\\AddressRepository');
            $this->valueHoldera90034b = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHoldera90034b->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializera90034b && ($this->initializera90034b->__invoke($valueHoldera90034b, $this, '__get', ['name' => $name], $this->initializera90034b) || 1) && $this->valueHoldera90034b = $valueHoldera90034b;

        if (isset(self::$publicPropertiesa90034b[$name])) {
            return $this->valueHoldera90034b->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera90034b;

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

        $targetObject = $this->valueHoldera90034b;
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
        $this->initializera90034b && ($this->initializera90034b->__invoke($valueHoldera90034b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera90034b) || 1) && $this->valueHoldera90034b = $valueHoldera90034b;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera90034b;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHoldera90034b;
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
        $this->initializera90034b && ($this->initializera90034b->__invoke($valueHoldera90034b, $this, '__isset', array('name' => $name), $this->initializera90034b) || 1) && $this->valueHoldera90034b = $valueHoldera90034b;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera90034b;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldera90034b;
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
        $this->initializera90034b && ($this->initializera90034b->__invoke($valueHoldera90034b, $this, '__unset', array('name' => $name), $this->initializera90034b) || 1) && $this->valueHoldera90034b = $valueHoldera90034b;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera90034b;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldera90034b;
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
        $this->initializera90034b && ($this->initializera90034b->__invoke($valueHoldera90034b, $this, '__clone', array(), $this->initializera90034b) || 1) && $this->valueHoldera90034b = $valueHoldera90034b;

        $this->valueHoldera90034b = clone $this->valueHoldera90034b;
    }

    public function __sleep()
    {
        $this->initializera90034b && ($this->initializera90034b->__invoke($valueHoldera90034b, $this, '__sleep', array(), $this->initializera90034b) || 1) && $this->valueHoldera90034b = $valueHoldera90034b;

        return array('valueHoldera90034b');
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
        $this->initializera90034b = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializera90034b;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializera90034b && ($this->initializera90034b->__invoke($valueHoldera90034b, $this, 'initializeProxy', array(), $this->initializera90034b) || 1) && $this->valueHoldera90034b = $valueHoldera90034b;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera90034b;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera90034b;
    }


}
