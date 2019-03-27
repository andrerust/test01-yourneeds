<?php

class DamageMediaRepository_3db334a extends \Main\InsuranceBundle\Repository\DamageMediaRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder3db334a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3db334a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3db334a = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer3db334a && ($this->initializer3db334a->__invoke($valueHolder3db334a, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer3db334a) || 1) && $this->valueHolder3db334a = $valueHolder3db334a;

        return $this->valueHolder3db334a->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer3db334a && ($this->initializer3db334a->__invoke($valueHolder3db334a, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer3db334a) || 1) && $this->valueHolder3db334a = $valueHolder3db334a;

        return $this->valueHolder3db334a->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializer3db334a && ($this->initializer3db334a->__invoke($valueHolder3db334a, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer3db334a) || 1) && $this->valueHolder3db334a = $valueHolder3db334a;

        return $this->valueHolder3db334a->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializer3db334a && ($this->initializer3db334a->__invoke($valueHolder3db334a, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer3db334a) || 1) && $this->valueHolder3db334a = $valueHolder3db334a;

        return $this->valueHolder3db334a->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializer3db334a && ($this->initializer3db334a->__invoke($valueHolder3db334a, $this, 'clear', array(), $this->initializer3db334a) || 1) && $this->valueHolder3db334a = $valueHolder3db334a;

        return $this->valueHolder3db334a->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3db334a && ($this->initializer3db334a->__invoke($valueHolder3db334a, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3db334a) || 1) && $this->valueHolder3db334a = $valueHolder3db334a;

        return $this->valueHolder3db334a->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializer3db334a && ($this->initializer3db334a->__invoke($valueHolder3db334a, $this, 'findAll', array(), $this->initializer3db334a) || 1) && $this->valueHolder3db334a = $valueHolder3db334a;

        return $this->valueHolder3db334a->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer3db334a && ($this->initializer3db334a->__invoke($valueHolder3db334a, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer3db334a) || 1) && $this->valueHolder3db334a = $valueHolder3db334a;

        return $this->valueHolder3db334a->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer3db334a && ($this->initializer3db334a->__invoke($valueHolder3db334a, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer3db334a) || 1) && $this->valueHolder3db334a = $valueHolder3db334a;

        return $this->valueHolder3db334a->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializer3db334a && ($this->initializer3db334a->__invoke($valueHolder3db334a, $this, 'count', array('criteria' => $criteria), $this->initializer3db334a) || 1) && $this->valueHolder3db334a = $valueHolder3db334a;

        return $this->valueHolder3db334a->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializer3db334a && ($this->initializer3db334a->__invoke($valueHolder3db334a, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer3db334a) || 1) && $this->valueHolder3db334a = $valueHolder3db334a;

        return $this->valueHolder3db334a->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializer3db334a && ($this->initializer3db334a->__invoke($valueHolder3db334a, $this, 'getClassName', array(), $this->initializer3db334a) || 1) && $this->valueHolder3db334a = $valueHolder3db334a;

        return $this->valueHolder3db334a->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer3db334a && ($this->initializer3db334a->__invoke($valueHolder3db334a, $this, 'matching', array('criteria' => $criteria), $this->initializer3db334a) || 1) && $this->valueHolder3db334a = $valueHolder3db334a;

        return $this->valueHolder3db334a->matching($criteria);
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

        $instance->initializer3db334a = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolder3db334a) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Repository\\DamageMediaRepository');
            $this->valueHolder3db334a = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolder3db334a->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer3db334a && ($this->initializer3db334a->__invoke($valueHolder3db334a, $this, '__get', ['name' => $name], $this->initializer3db334a) || 1) && $this->valueHolder3db334a = $valueHolder3db334a;

        if (isset(self::$publicProperties3db334a[$name])) {
            return $this->valueHolder3db334a->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3db334a;

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

        $targetObject = $this->valueHolder3db334a;
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
        $this->initializer3db334a && ($this->initializer3db334a->__invoke($valueHolder3db334a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3db334a) || 1) && $this->valueHolder3db334a = $valueHolder3db334a;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3db334a;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder3db334a;
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
        $this->initializer3db334a && ($this->initializer3db334a->__invoke($valueHolder3db334a, $this, '__isset', array('name' => $name), $this->initializer3db334a) || 1) && $this->valueHolder3db334a = $valueHolder3db334a;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3db334a;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder3db334a;
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
        $this->initializer3db334a && ($this->initializer3db334a->__invoke($valueHolder3db334a, $this, '__unset', array('name' => $name), $this->initializer3db334a) || 1) && $this->valueHolder3db334a = $valueHolder3db334a;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3db334a;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder3db334a;
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
        $this->initializer3db334a && ($this->initializer3db334a->__invoke($valueHolder3db334a, $this, '__clone', array(), $this->initializer3db334a) || 1) && $this->valueHolder3db334a = $valueHolder3db334a;

        $this->valueHolder3db334a = clone $this->valueHolder3db334a;
    }

    public function __sleep()
    {
        $this->initializer3db334a && ($this->initializer3db334a->__invoke($valueHolder3db334a, $this, '__sleep', array(), $this->initializer3db334a) || 1) && $this->valueHolder3db334a = $valueHolder3db334a;

        return array('valueHolder3db334a');
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
        $this->initializer3db334a = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer3db334a;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer3db334a && ($this->initializer3db334a->__invoke($valueHolder3db334a, $this, 'initializeProxy', array(), $this->initializer3db334a) || 1) && $this->valueHolder3db334a = $valueHolder3db334a;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3db334a;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3db334a;
    }


}
