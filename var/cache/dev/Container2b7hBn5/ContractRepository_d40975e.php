<?php

class ContractRepository_d40975e extends \Main\InsuranceBundle\Repository\ContractRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderd40975e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd40975e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd40975e = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function getAll()
    {
        $this->initializerd40975e && ($this->initializerd40975e->__invoke($valueHolderd40975e, $this, 'getAll', array(), $this->initializerd40975e) || 1) && $this->valueHolderd40975e = $valueHolderd40975e;

        return $this->valueHolderd40975e->getAll();
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializerd40975e && ($this->initializerd40975e->__invoke($valueHolderd40975e, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializerd40975e) || 1) && $this->valueHolderd40975e = $valueHolderd40975e;

        return $this->valueHolderd40975e->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializerd40975e && ($this->initializerd40975e->__invoke($valueHolderd40975e, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializerd40975e) || 1) && $this->valueHolderd40975e = $valueHolderd40975e;

        return $this->valueHolderd40975e->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializerd40975e && ($this->initializerd40975e->__invoke($valueHolderd40975e, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializerd40975e) || 1) && $this->valueHolderd40975e = $valueHolderd40975e;

        return $this->valueHolderd40975e->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializerd40975e && ($this->initializerd40975e->__invoke($valueHolderd40975e, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializerd40975e) || 1) && $this->valueHolderd40975e = $valueHolderd40975e;

        return $this->valueHolderd40975e->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializerd40975e && ($this->initializerd40975e->__invoke($valueHolderd40975e, $this, 'clear', array(), $this->initializerd40975e) || 1) && $this->valueHolderd40975e = $valueHolderd40975e;

        return $this->valueHolderd40975e->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd40975e && ($this->initializerd40975e->__invoke($valueHolderd40975e, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd40975e) || 1) && $this->valueHolderd40975e = $valueHolderd40975e;

        return $this->valueHolderd40975e->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializerd40975e && ($this->initializerd40975e->__invoke($valueHolderd40975e, $this, 'findAll', array(), $this->initializerd40975e) || 1) && $this->valueHolderd40975e = $valueHolderd40975e;

        return $this->valueHolderd40975e->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializerd40975e && ($this->initializerd40975e->__invoke($valueHolderd40975e, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializerd40975e) || 1) && $this->valueHolderd40975e = $valueHolderd40975e;

        return $this->valueHolderd40975e->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializerd40975e && ($this->initializerd40975e->__invoke($valueHolderd40975e, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializerd40975e) || 1) && $this->valueHolderd40975e = $valueHolderd40975e;

        return $this->valueHolderd40975e->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializerd40975e && ($this->initializerd40975e->__invoke($valueHolderd40975e, $this, 'count', array('criteria' => $criteria), $this->initializerd40975e) || 1) && $this->valueHolderd40975e = $valueHolderd40975e;

        return $this->valueHolderd40975e->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializerd40975e && ($this->initializerd40975e->__invoke($valueHolderd40975e, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializerd40975e) || 1) && $this->valueHolderd40975e = $valueHolderd40975e;

        return $this->valueHolderd40975e->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializerd40975e && ($this->initializerd40975e->__invoke($valueHolderd40975e, $this, 'getClassName', array(), $this->initializerd40975e) || 1) && $this->valueHolderd40975e = $valueHolderd40975e;

        return $this->valueHolderd40975e->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializerd40975e && ($this->initializerd40975e->__invoke($valueHolderd40975e, $this, 'matching', array('criteria' => $criteria), $this->initializerd40975e) || 1) && $this->valueHolderd40975e = $valueHolderd40975e;

        return $this->valueHolderd40975e->matching($criteria);
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

        $instance->initializerd40975e = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolderd40975e) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Repository\\ContractRepository');
            $this->valueHolderd40975e = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolderd40975e->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerd40975e && ($this->initializerd40975e->__invoke($valueHolderd40975e, $this, '__get', ['name' => $name], $this->initializerd40975e) || 1) && $this->valueHolderd40975e = $valueHolderd40975e;

        if (isset(self::$publicPropertiesd40975e[$name])) {
            return $this->valueHolderd40975e->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd40975e;

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

        $targetObject = $this->valueHolderd40975e;
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
        $this->initializerd40975e && ($this->initializerd40975e->__invoke($valueHolderd40975e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd40975e) || 1) && $this->valueHolderd40975e = $valueHolderd40975e;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd40975e;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderd40975e;
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
        $this->initializerd40975e && ($this->initializerd40975e->__invoke($valueHolderd40975e, $this, '__isset', array('name' => $name), $this->initializerd40975e) || 1) && $this->valueHolderd40975e = $valueHolderd40975e;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd40975e;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderd40975e;
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
        $this->initializerd40975e && ($this->initializerd40975e->__invoke($valueHolderd40975e, $this, '__unset', array('name' => $name), $this->initializerd40975e) || 1) && $this->valueHolderd40975e = $valueHolderd40975e;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd40975e;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderd40975e;
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
        $this->initializerd40975e && ($this->initializerd40975e->__invoke($valueHolderd40975e, $this, '__clone', array(), $this->initializerd40975e) || 1) && $this->valueHolderd40975e = $valueHolderd40975e;

        $this->valueHolderd40975e = clone $this->valueHolderd40975e;
    }

    public function __sleep()
    {
        $this->initializerd40975e && ($this->initializerd40975e->__invoke($valueHolderd40975e, $this, '__sleep', array(), $this->initializerd40975e) || 1) && $this->valueHolderd40975e = $valueHolderd40975e;

        return array('valueHolderd40975e');
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
        $this->initializerd40975e = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerd40975e;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerd40975e && ($this->initializerd40975e->__invoke($valueHolderd40975e, $this, 'initializeProxy', array(), $this->initializerd40975e) || 1) && $this->valueHolderd40975e = $valueHolderd40975e;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd40975e;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd40975e;
    }


}
