<?php

class ActivityRepository_3742e42 extends \Main\UserBundle\Repository\ActivityRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder3742e42 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3742e42 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3742e42 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function findAllByUserId($id = null)
    {
        $this->initializer3742e42 && ($this->initializer3742e42->__invoke($valueHolder3742e42, $this, 'findAllByUserId', array('id' => $id), $this->initializer3742e42) || 1) && $this->valueHolder3742e42 = $valueHolder3742e42;

        return $this->valueHolder3742e42->findAllByUserId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer3742e42 && ($this->initializer3742e42->__invoke($valueHolder3742e42, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer3742e42) || 1) && $this->valueHolder3742e42 = $valueHolder3742e42;

        return $this->valueHolder3742e42->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer3742e42 && ($this->initializer3742e42->__invoke($valueHolder3742e42, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer3742e42) || 1) && $this->valueHolder3742e42 = $valueHolder3742e42;

        return $this->valueHolder3742e42->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializer3742e42 && ($this->initializer3742e42->__invoke($valueHolder3742e42, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer3742e42) || 1) && $this->valueHolder3742e42 = $valueHolder3742e42;

        return $this->valueHolder3742e42->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializer3742e42 && ($this->initializer3742e42->__invoke($valueHolder3742e42, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer3742e42) || 1) && $this->valueHolder3742e42 = $valueHolder3742e42;

        return $this->valueHolder3742e42->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializer3742e42 && ($this->initializer3742e42->__invoke($valueHolder3742e42, $this, 'clear', array(), $this->initializer3742e42) || 1) && $this->valueHolder3742e42 = $valueHolder3742e42;

        return $this->valueHolder3742e42->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3742e42 && ($this->initializer3742e42->__invoke($valueHolder3742e42, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3742e42) || 1) && $this->valueHolder3742e42 = $valueHolder3742e42;

        return $this->valueHolder3742e42->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializer3742e42 && ($this->initializer3742e42->__invoke($valueHolder3742e42, $this, 'findAll', array(), $this->initializer3742e42) || 1) && $this->valueHolder3742e42 = $valueHolder3742e42;

        return $this->valueHolder3742e42->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer3742e42 && ($this->initializer3742e42->__invoke($valueHolder3742e42, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer3742e42) || 1) && $this->valueHolder3742e42 = $valueHolder3742e42;

        return $this->valueHolder3742e42->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer3742e42 && ($this->initializer3742e42->__invoke($valueHolder3742e42, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer3742e42) || 1) && $this->valueHolder3742e42 = $valueHolder3742e42;

        return $this->valueHolder3742e42->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializer3742e42 && ($this->initializer3742e42->__invoke($valueHolder3742e42, $this, 'count', array('criteria' => $criteria), $this->initializer3742e42) || 1) && $this->valueHolder3742e42 = $valueHolder3742e42;

        return $this->valueHolder3742e42->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializer3742e42 && ($this->initializer3742e42->__invoke($valueHolder3742e42, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer3742e42) || 1) && $this->valueHolder3742e42 = $valueHolder3742e42;

        return $this->valueHolder3742e42->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializer3742e42 && ($this->initializer3742e42->__invoke($valueHolder3742e42, $this, 'getClassName', array(), $this->initializer3742e42) || 1) && $this->valueHolder3742e42 = $valueHolder3742e42;

        return $this->valueHolder3742e42->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer3742e42 && ($this->initializer3742e42->__invoke($valueHolder3742e42, $this, 'matching', array('criteria' => $criteria), $this->initializer3742e42) || 1) && $this->valueHolder3742e42 = $valueHolder3742e42;

        return $this->valueHolder3742e42->matching($criteria);
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

        $instance->initializer3742e42 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolder3742e42) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Repository\\ActivityRepository');
            $this->valueHolder3742e42 = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolder3742e42->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer3742e42 && ($this->initializer3742e42->__invoke($valueHolder3742e42, $this, '__get', ['name' => $name], $this->initializer3742e42) || 1) && $this->valueHolder3742e42 = $valueHolder3742e42;

        if (isset(self::$publicProperties3742e42[$name])) {
            return $this->valueHolder3742e42->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3742e42;

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

        $targetObject = $this->valueHolder3742e42;
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
        $this->initializer3742e42 && ($this->initializer3742e42->__invoke($valueHolder3742e42, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3742e42) || 1) && $this->valueHolder3742e42 = $valueHolder3742e42;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3742e42;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder3742e42;
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
        $this->initializer3742e42 && ($this->initializer3742e42->__invoke($valueHolder3742e42, $this, '__isset', array('name' => $name), $this->initializer3742e42) || 1) && $this->valueHolder3742e42 = $valueHolder3742e42;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3742e42;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder3742e42;
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
        $this->initializer3742e42 && ($this->initializer3742e42->__invoke($valueHolder3742e42, $this, '__unset', array('name' => $name), $this->initializer3742e42) || 1) && $this->valueHolder3742e42 = $valueHolder3742e42;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3742e42;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder3742e42;
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
        $this->initializer3742e42 && ($this->initializer3742e42->__invoke($valueHolder3742e42, $this, '__clone', array(), $this->initializer3742e42) || 1) && $this->valueHolder3742e42 = $valueHolder3742e42;

        $this->valueHolder3742e42 = clone $this->valueHolder3742e42;
    }

    public function __sleep()
    {
        $this->initializer3742e42 && ($this->initializer3742e42->__invoke($valueHolder3742e42, $this, '__sleep', array(), $this->initializer3742e42) || 1) && $this->valueHolder3742e42 = $valueHolder3742e42;

        return array('valueHolder3742e42');
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
        $this->initializer3742e42 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer3742e42;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer3742e42 && ($this->initializer3742e42->__invoke($valueHolder3742e42, $this, 'initializeProxy', array(), $this->initializer3742e42) || 1) && $this->valueHolder3742e42 = $valueHolder3742e42;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3742e42;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3742e42;
    }


}
