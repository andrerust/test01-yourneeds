<?php

class TargetGroupRepository_104c5dd extends \Main\InsuranceBundle\Repository\TargetGroupRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder104c5dd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer104c5dd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties104c5dd = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function getAll()
    {
        $this->initializer104c5dd && ($this->initializer104c5dd->__invoke($valueHolder104c5dd, $this, 'getAll', array(), $this->initializer104c5dd) || 1) && $this->valueHolder104c5dd = $valueHolder104c5dd;

        return $this->valueHolder104c5dd->getAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findTargetGroupsByTariffId($id = null)
    {
        $this->initializer104c5dd && ($this->initializer104c5dd->__invoke($valueHolder104c5dd, $this, 'findTargetGroupsByTariffId', array('id' => $id), $this->initializer104c5dd) || 1) && $this->valueHolder104c5dd = $valueHolder104c5dd;

        return $this->valueHolder104c5dd->findTargetGroupsByTariffId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer104c5dd && ($this->initializer104c5dd->__invoke($valueHolder104c5dd, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer104c5dd) || 1) && $this->valueHolder104c5dd = $valueHolder104c5dd;

        return $this->valueHolder104c5dd->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer104c5dd && ($this->initializer104c5dd->__invoke($valueHolder104c5dd, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer104c5dd) || 1) && $this->valueHolder104c5dd = $valueHolder104c5dd;

        return $this->valueHolder104c5dd->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializer104c5dd && ($this->initializer104c5dd->__invoke($valueHolder104c5dd, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer104c5dd) || 1) && $this->valueHolder104c5dd = $valueHolder104c5dd;

        return $this->valueHolder104c5dd->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializer104c5dd && ($this->initializer104c5dd->__invoke($valueHolder104c5dd, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer104c5dd) || 1) && $this->valueHolder104c5dd = $valueHolder104c5dd;

        return $this->valueHolder104c5dd->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializer104c5dd && ($this->initializer104c5dd->__invoke($valueHolder104c5dd, $this, 'clear', array(), $this->initializer104c5dd) || 1) && $this->valueHolder104c5dd = $valueHolder104c5dd;

        return $this->valueHolder104c5dd->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer104c5dd && ($this->initializer104c5dd->__invoke($valueHolder104c5dd, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer104c5dd) || 1) && $this->valueHolder104c5dd = $valueHolder104c5dd;

        return $this->valueHolder104c5dd->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializer104c5dd && ($this->initializer104c5dd->__invoke($valueHolder104c5dd, $this, 'findAll', array(), $this->initializer104c5dd) || 1) && $this->valueHolder104c5dd = $valueHolder104c5dd;

        return $this->valueHolder104c5dd->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer104c5dd && ($this->initializer104c5dd->__invoke($valueHolder104c5dd, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer104c5dd) || 1) && $this->valueHolder104c5dd = $valueHolder104c5dd;

        return $this->valueHolder104c5dd->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer104c5dd && ($this->initializer104c5dd->__invoke($valueHolder104c5dd, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer104c5dd) || 1) && $this->valueHolder104c5dd = $valueHolder104c5dd;

        return $this->valueHolder104c5dd->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializer104c5dd && ($this->initializer104c5dd->__invoke($valueHolder104c5dd, $this, 'count', array('criteria' => $criteria), $this->initializer104c5dd) || 1) && $this->valueHolder104c5dd = $valueHolder104c5dd;

        return $this->valueHolder104c5dd->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializer104c5dd && ($this->initializer104c5dd->__invoke($valueHolder104c5dd, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer104c5dd) || 1) && $this->valueHolder104c5dd = $valueHolder104c5dd;

        return $this->valueHolder104c5dd->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializer104c5dd && ($this->initializer104c5dd->__invoke($valueHolder104c5dd, $this, 'getClassName', array(), $this->initializer104c5dd) || 1) && $this->valueHolder104c5dd = $valueHolder104c5dd;

        return $this->valueHolder104c5dd->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer104c5dd && ($this->initializer104c5dd->__invoke($valueHolder104c5dd, $this, 'matching', array('criteria' => $criteria), $this->initializer104c5dd) || 1) && $this->valueHolder104c5dd = $valueHolder104c5dd;

        return $this->valueHolder104c5dd->matching($criteria);
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

        $instance->initializer104c5dd = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolder104c5dd) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Repository\\TargetGroupRepository');
            $this->valueHolder104c5dd = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolder104c5dd->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer104c5dd && ($this->initializer104c5dd->__invoke($valueHolder104c5dd, $this, '__get', ['name' => $name], $this->initializer104c5dd) || 1) && $this->valueHolder104c5dd = $valueHolder104c5dd;

        if (isset(self::$publicProperties104c5dd[$name])) {
            return $this->valueHolder104c5dd->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder104c5dd;

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

        $targetObject = $this->valueHolder104c5dd;
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
        $this->initializer104c5dd && ($this->initializer104c5dd->__invoke($valueHolder104c5dd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer104c5dd) || 1) && $this->valueHolder104c5dd = $valueHolder104c5dd;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder104c5dd;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder104c5dd;
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
        $this->initializer104c5dd && ($this->initializer104c5dd->__invoke($valueHolder104c5dd, $this, '__isset', array('name' => $name), $this->initializer104c5dd) || 1) && $this->valueHolder104c5dd = $valueHolder104c5dd;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder104c5dd;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder104c5dd;
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
        $this->initializer104c5dd && ($this->initializer104c5dd->__invoke($valueHolder104c5dd, $this, '__unset', array('name' => $name), $this->initializer104c5dd) || 1) && $this->valueHolder104c5dd = $valueHolder104c5dd;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder104c5dd;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder104c5dd;
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
        $this->initializer104c5dd && ($this->initializer104c5dd->__invoke($valueHolder104c5dd, $this, '__clone', array(), $this->initializer104c5dd) || 1) && $this->valueHolder104c5dd = $valueHolder104c5dd;

        $this->valueHolder104c5dd = clone $this->valueHolder104c5dd;
    }

    public function __sleep()
    {
        $this->initializer104c5dd && ($this->initializer104c5dd->__invoke($valueHolder104c5dd, $this, '__sleep', array(), $this->initializer104c5dd) || 1) && $this->valueHolder104c5dd = $valueHolder104c5dd;

        return array('valueHolder104c5dd');
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
        $this->initializer104c5dd = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer104c5dd;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer104c5dd && ($this->initializer104c5dd->__invoke($valueHolder104c5dd, $this, 'initializeProxy', array(), $this->initializer104c5dd) || 1) && $this->valueHolder104c5dd = $valueHolder104c5dd;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder104c5dd;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder104c5dd;
    }


}
