<?php

class AddressTypeRepository_a04f019 extends \Main\UserBundle\Repository\AddressTypeRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHoldera04f019 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera04f019 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa04f019 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializera04f019 && ($this->initializera04f019->__invoke($valueHoldera04f019, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializera04f019) || 1) && $this->valueHoldera04f019 = $valueHoldera04f019;

        return $this->valueHoldera04f019->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializera04f019 && ($this->initializera04f019->__invoke($valueHoldera04f019, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializera04f019) || 1) && $this->valueHoldera04f019 = $valueHoldera04f019;

        return $this->valueHoldera04f019->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializera04f019 && ($this->initializera04f019->__invoke($valueHoldera04f019, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializera04f019) || 1) && $this->valueHoldera04f019 = $valueHoldera04f019;

        return $this->valueHoldera04f019->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializera04f019 && ($this->initializera04f019->__invoke($valueHoldera04f019, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializera04f019) || 1) && $this->valueHoldera04f019 = $valueHoldera04f019;

        return $this->valueHoldera04f019->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializera04f019 && ($this->initializera04f019->__invoke($valueHoldera04f019, $this, 'clear', array(), $this->initializera04f019) || 1) && $this->valueHoldera04f019 = $valueHoldera04f019;

        return $this->valueHoldera04f019->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera04f019 && ($this->initializera04f019->__invoke($valueHoldera04f019, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera04f019) || 1) && $this->valueHoldera04f019 = $valueHoldera04f019;

        return $this->valueHoldera04f019->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializera04f019 && ($this->initializera04f019->__invoke($valueHoldera04f019, $this, 'findAll', array(), $this->initializera04f019) || 1) && $this->valueHoldera04f019 = $valueHoldera04f019;

        return $this->valueHoldera04f019->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializera04f019 && ($this->initializera04f019->__invoke($valueHoldera04f019, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializera04f019) || 1) && $this->valueHoldera04f019 = $valueHoldera04f019;

        return $this->valueHoldera04f019->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializera04f019 && ($this->initializera04f019->__invoke($valueHoldera04f019, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializera04f019) || 1) && $this->valueHoldera04f019 = $valueHoldera04f019;

        return $this->valueHoldera04f019->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializera04f019 && ($this->initializera04f019->__invoke($valueHoldera04f019, $this, 'count', array('criteria' => $criteria), $this->initializera04f019) || 1) && $this->valueHoldera04f019 = $valueHoldera04f019;

        return $this->valueHoldera04f019->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializera04f019 && ($this->initializera04f019->__invoke($valueHoldera04f019, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializera04f019) || 1) && $this->valueHoldera04f019 = $valueHoldera04f019;

        return $this->valueHoldera04f019->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializera04f019 && ($this->initializera04f019->__invoke($valueHoldera04f019, $this, 'getClassName', array(), $this->initializera04f019) || 1) && $this->valueHoldera04f019 = $valueHoldera04f019;

        return $this->valueHoldera04f019->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializera04f019 && ($this->initializera04f019->__invoke($valueHoldera04f019, $this, 'matching', array('criteria' => $criteria), $this->initializera04f019) || 1) && $this->valueHoldera04f019 = $valueHoldera04f019;

        return $this->valueHoldera04f019->matching($criteria);
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

        $instance->initializera04f019 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHoldera04f019) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Repository\\AddressTypeRepository');
            $this->valueHoldera04f019 = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHoldera04f019->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializera04f019 && ($this->initializera04f019->__invoke($valueHoldera04f019, $this, '__get', ['name' => $name], $this->initializera04f019) || 1) && $this->valueHoldera04f019 = $valueHoldera04f019;

        if (isset(self::$publicPropertiesa04f019[$name])) {
            return $this->valueHoldera04f019->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera04f019;

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

        $targetObject = $this->valueHoldera04f019;
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
        $this->initializera04f019 && ($this->initializera04f019->__invoke($valueHoldera04f019, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera04f019) || 1) && $this->valueHoldera04f019 = $valueHoldera04f019;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera04f019;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHoldera04f019;
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
        $this->initializera04f019 && ($this->initializera04f019->__invoke($valueHoldera04f019, $this, '__isset', array('name' => $name), $this->initializera04f019) || 1) && $this->valueHoldera04f019 = $valueHoldera04f019;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera04f019;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldera04f019;
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
        $this->initializera04f019 && ($this->initializera04f019->__invoke($valueHoldera04f019, $this, '__unset', array('name' => $name), $this->initializera04f019) || 1) && $this->valueHoldera04f019 = $valueHoldera04f019;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera04f019;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldera04f019;
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
        $this->initializera04f019 && ($this->initializera04f019->__invoke($valueHoldera04f019, $this, '__clone', array(), $this->initializera04f019) || 1) && $this->valueHoldera04f019 = $valueHoldera04f019;

        $this->valueHoldera04f019 = clone $this->valueHoldera04f019;
    }

    public function __sleep()
    {
        $this->initializera04f019 && ($this->initializera04f019->__invoke($valueHoldera04f019, $this, '__sleep', array(), $this->initializera04f019) || 1) && $this->valueHoldera04f019 = $valueHoldera04f019;

        return array('valueHoldera04f019');
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
        $this->initializera04f019 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializera04f019;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializera04f019 && ($this->initializera04f019->__invoke($valueHoldera04f019, $this, 'initializeProxy', array(), $this->initializera04f019) || 1) && $this->valueHoldera04f019 = $valueHoldera04f019;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera04f019;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera04f019;
    }


}
