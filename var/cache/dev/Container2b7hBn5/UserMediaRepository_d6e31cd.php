<?php

class UserMediaRepository_d6e31cd extends \Main\UserBundle\Repository\UserMediaRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderd6e31cd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd6e31cd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd6e31cd = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializerd6e31cd && ($this->initializerd6e31cd->__invoke($valueHolderd6e31cd, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializerd6e31cd) || 1) && $this->valueHolderd6e31cd = $valueHolderd6e31cd;

        return $this->valueHolderd6e31cd->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializerd6e31cd && ($this->initializerd6e31cd->__invoke($valueHolderd6e31cd, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializerd6e31cd) || 1) && $this->valueHolderd6e31cd = $valueHolderd6e31cd;

        return $this->valueHolderd6e31cd->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializerd6e31cd && ($this->initializerd6e31cd->__invoke($valueHolderd6e31cd, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializerd6e31cd) || 1) && $this->valueHolderd6e31cd = $valueHolderd6e31cd;

        return $this->valueHolderd6e31cd->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializerd6e31cd && ($this->initializerd6e31cd->__invoke($valueHolderd6e31cd, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializerd6e31cd) || 1) && $this->valueHolderd6e31cd = $valueHolderd6e31cd;

        return $this->valueHolderd6e31cd->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializerd6e31cd && ($this->initializerd6e31cd->__invoke($valueHolderd6e31cd, $this, 'clear', array(), $this->initializerd6e31cd) || 1) && $this->valueHolderd6e31cd = $valueHolderd6e31cd;

        return $this->valueHolderd6e31cd->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd6e31cd && ($this->initializerd6e31cd->__invoke($valueHolderd6e31cd, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd6e31cd) || 1) && $this->valueHolderd6e31cd = $valueHolderd6e31cd;

        return $this->valueHolderd6e31cd->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializerd6e31cd && ($this->initializerd6e31cd->__invoke($valueHolderd6e31cd, $this, 'findAll', array(), $this->initializerd6e31cd) || 1) && $this->valueHolderd6e31cd = $valueHolderd6e31cd;

        return $this->valueHolderd6e31cd->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializerd6e31cd && ($this->initializerd6e31cd->__invoke($valueHolderd6e31cd, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializerd6e31cd) || 1) && $this->valueHolderd6e31cd = $valueHolderd6e31cd;

        return $this->valueHolderd6e31cd->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializerd6e31cd && ($this->initializerd6e31cd->__invoke($valueHolderd6e31cd, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializerd6e31cd) || 1) && $this->valueHolderd6e31cd = $valueHolderd6e31cd;

        return $this->valueHolderd6e31cd->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializerd6e31cd && ($this->initializerd6e31cd->__invoke($valueHolderd6e31cd, $this, 'count', array('criteria' => $criteria), $this->initializerd6e31cd) || 1) && $this->valueHolderd6e31cd = $valueHolderd6e31cd;

        return $this->valueHolderd6e31cd->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializerd6e31cd && ($this->initializerd6e31cd->__invoke($valueHolderd6e31cd, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializerd6e31cd) || 1) && $this->valueHolderd6e31cd = $valueHolderd6e31cd;

        return $this->valueHolderd6e31cd->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializerd6e31cd && ($this->initializerd6e31cd->__invoke($valueHolderd6e31cd, $this, 'getClassName', array(), $this->initializerd6e31cd) || 1) && $this->valueHolderd6e31cd = $valueHolderd6e31cd;

        return $this->valueHolderd6e31cd->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializerd6e31cd && ($this->initializerd6e31cd->__invoke($valueHolderd6e31cd, $this, 'matching', array('criteria' => $criteria), $this->initializerd6e31cd) || 1) && $this->valueHolderd6e31cd = $valueHolderd6e31cd;

        return $this->valueHolderd6e31cd->matching($criteria);
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

        $instance->initializerd6e31cd = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolderd6e31cd) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Repository\\UserMediaRepository');
            $this->valueHolderd6e31cd = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolderd6e31cd->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerd6e31cd && ($this->initializerd6e31cd->__invoke($valueHolderd6e31cd, $this, '__get', ['name' => $name], $this->initializerd6e31cd) || 1) && $this->valueHolderd6e31cd = $valueHolderd6e31cd;

        if (isset(self::$publicPropertiesd6e31cd[$name])) {
            return $this->valueHolderd6e31cd->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd6e31cd;

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

        $targetObject = $this->valueHolderd6e31cd;
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
        $this->initializerd6e31cd && ($this->initializerd6e31cd->__invoke($valueHolderd6e31cd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd6e31cd) || 1) && $this->valueHolderd6e31cd = $valueHolderd6e31cd;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd6e31cd;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderd6e31cd;
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
        $this->initializerd6e31cd && ($this->initializerd6e31cd->__invoke($valueHolderd6e31cd, $this, '__isset', array('name' => $name), $this->initializerd6e31cd) || 1) && $this->valueHolderd6e31cd = $valueHolderd6e31cd;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd6e31cd;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderd6e31cd;
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
        $this->initializerd6e31cd && ($this->initializerd6e31cd->__invoke($valueHolderd6e31cd, $this, '__unset', array('name' => $name), $this->initializerd6e31cd) || 1) && $this->valueHolderd6e31cd = $valueHolderd6e31cd;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd6e31cd;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderd6e31cd;
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
        $this->initializerd6e31cd && ($this->initializerd6e31cd->__invoke($valueHolderd6e31cd, $this, '__clone', array(), $this->initializerd6e31cd) || 1) && $this->valueHolderd6e31cd = $valueHolderd6e31cd;

        $this->valueHolderd6e31cd = clone $this->valueHolderd6e31cd;
    }

    public function __sleep()
    {
        $this->initializerd6e31cd && ($this->initializerd6e31cd->__invoke($valueHolderd6e31cd, $this, '__sleep', array(), $this->initializerd6e31cd) || 1) && $this->valueHolderd6e31cd = $valueHolderd6e31cd;

        return array('valueHolderd6e31cd');
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
        $this->initializerd6e31cd = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerd6e31cd;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerd6e31cd && ($this->initializerd6e31cd->__invoke($valueHolderd6e31cd, $this, 'initializeProxy', array(), $this->initializerd6e31cd) || 1) && $this->valueHolderd6e31cd = $valueHolderd6e31cd;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd6e31cd;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd6e31cd;
    }


}
