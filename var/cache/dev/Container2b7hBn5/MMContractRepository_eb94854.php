<?php

class MMContractRepository_eb94854 extends \Main\InsuranceBundle\Repository\MMContractRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHoldereb94854 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializereb94854 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertieseb94854 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function getAll()
    {
        $this->initializereb94854 && ($this->initializereb94854->__invoke($valueHoldereb94854, $this, 'getAll', array(), $this->initializereb94854) || 1) && $this->valueHoldereb94854 = $valueHoldereb94854;

        return $this->valueHoldereb94854->getAll();
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializereb94854 && ($this->initializereb94854->__invoke($valueHoldereb94854, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializereb94854) || 1) && $this->valueHoldereb94854 = $valueHoldereb94854;

        return $this->valueHoldereb94854->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializereb94854 && ($this->initializereb94854->__invoke($valueHoldereb94854, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializereb94854) || 1) && $this->valueHoldereb94854 = $valueHoldereb94854;

        return $this->valueHoldereb94854->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializereb94854 && ($this->initializereb94854->__invoke($valueHoldereb94854, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializereb94854) || 1) && $this->valueHoldereb94854 = $valueHoldereb94854;

        return $this->valueHoldereb94854->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializereb94854 && ($this->initializereb94854->__invoke($valueHoldereb94854, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializereb94854) || 1) && $this->valueHoldereb94854 = $valueHoldereb94854;

        return $this->valueHoldereb94854->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializereb94854 && ($this->initializereb94854->__invoke($valueHoldereb94854, $this, 'clear', array(), $this->initializereb94854) || 1) && $this->valueHoldereb94854 = $valueHoldereb94854;

        return $this->valueHoldereb94854->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializereb94854 && ($this->initializereb94854->__invoke($valueHoldereb94854, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereb94854) || 1) && $this->valueHoldereb94854 = $valueHoldereb94854;

        return $this->valueHoldereb94854->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializereb94854 && ($this->initializereb94854->__invoke($valueHoldereb94854, $this, 'findAll', array(), $this->initializereb94854) || 1) && $this->valueHoldereb94854 = $valueHoldereb94854;

        return $this->valueHoldereb94854->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializereb94854 && ($this->initializereb94854->__invoke($valueHoldereb94854, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializereb94854) || 1) && $this->valueHoldereb94854 = $valueHoldereb94854;

        return $this->valueHoldereb94854->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializereb94854 && ($this->initializereb94854->__invoke($valueHoldereb94854, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializereb94854) || 1) && $this->valueHoldereb94854 = $valueHoldereb94854;

        return $this->valueHoldereb94854->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializereb94854 && ($this->initializereb94854->__invoke($valueHoldereb94854, $this, 'count', array('criteria' => $criteria), $this->initializereb94854) || 1) && $this->valueHoldereb94854 = $valueHoldereb94854;

        return $this->valueHoldereb94854->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializereb94854 && ($this->initializereb94854->__invoke($valueHoldereb94854, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializereb94854) || 1) && $this->valueHoldereb94854 = $valueHoldereb94854;

        return $this->valueHoldereb94854->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializereb94854 && ($this->initializereb94854->__invoke($valueHoldereb94854, $this, 'getClassName', array(), $this->initializereb94854) || 1) && $this->valueHoldereb94854 = $valueHoldereb94854;

        return $this->valueHoldereb94854->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializereb94854 && ($this->initializereb94854->__invoke($valueHoldereb94854, $this, 'matching', array('criteria' => $criteria), $this->initializereb94854) || 1) && $this->valueHoldereb94854 = $valueHoldereb94854;

        return $this->valueHoldereb94854->matching($criteria);
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

        $instance->initializereb94854 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHoldereb94854) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Repository\\MMContractRepository');
            $this->valueHoldereb94854 = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHoldereb94854->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializereb94854 && ($this->initializereb94854->__invoke($valueHoldereb94854, $this, '__get', ['name' => $name], $this->initializereb94854) || 1) && $this->valueHoldereb94854 = $valueHoldereb94854;

        if (isset(self::$publicPropertieseb94854[$name])) {
            return $this->valueHoldereb94854->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb94854;

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

        $targetObject = $this->valueHoldereb94854;
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
        $this->initializereb94854 && ($this->initializereb94854->__invoke($valueHoldereb94854, $this, '__set', array('name' => $name, 'value' => $value), $this->initializereb94854) || 1) && $this->valueHoldereb94854 = $valueHoldereb94854;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb94854;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHoldereb94854;
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
        $this->initializereb94854 && ($this->initializereb94854->__invoke($valueHoldereb94854, $this, '__isset', array('name' => $name), $this->initializereb94854) || 1) && $this->valueHoldereb94854 = $valueHoldereb94854;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb94854;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldereb94854;
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
        $this->initializereb94854 && ($this->initializereb94854->__invoke($valueHoldereb94854, $this, '__unset', array('name' => $name), $this->initializereb94854) || 1) && $this->valueHoldereb94854 = $valueHoldereb94854;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb94854;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldereb94854;
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
        $this->initializereb94854 && ($this->initializereb94854->__invoke($valueHoldereb94854, $this, '__clone', array(), $this->initializereb94854) || 1) && $this->valueHoldereb94854 = $valueHoldereb94854;

        $this->valueHoldereb94854 = clone $this->valueHoldereb94854;
    }

    public function __sleep()
    {
        $this->initializereb94854 && ($this->initializereb94854->__invoke($valueHoldereb94854, $this, '__sleep', array(), $this->initializereb94854) || 1) && $this->valueHoldereb94854 = $valueHoldereb94854;

        return array('valueHoldereb94854');
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
        $this->initializereb94854 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializereb94854;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializereb94854 && ($this->initializereb94854->__invoke($valueHoldereb94854, $this, 'initializeProxy', array(), $this->initializereb94854) || 1) && $this->valueHoldereb94854 = $valueHoldereb94854;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldereb94854;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldereb94854;
    }


}
