<?php

class BankAccountRepository_6da4f7e extends \Main\UserBundle\Repository\BankAccountRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder6da4f7e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6da4f7e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6da4f7e = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function findByUserId($id = null)
    {
        $this->initializer6da4f7e && ($this->initializer6da4f7e->__invoke($valueHolder6da4f7e, $this, 'findByUserId', array('id' => $id), $this->initializer6da4f7e) || 1) && $this->valueHolder6da4f7e = $valueHolder6da4f7e;

        return $this->valueHolder6da4f7e->findByUserId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer6da4f7e && ($this->initializer6da4f7e->__invoke($valueHolder6da4f7e, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer6da4f7e) || 1) && $this->valueHolder6da4f7e = $valueHolder6da4f7e;

        return $this->valueHolder6da4f7e->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer6da4f7e && ($this->initializer6da4f7e->__invoke($valueHolder6da4f7e, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer6da4f7e) || 1) && $this->valueHolder6da4f7e = $valueHolder6da4f7e;

        return $this->valueHolder6da4f7e->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializer6da4f7e && ($this->initializer6da4f7e->__invoke($valueHolder6da4f7e, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer6da4f7e) || 1) && $this->valueHolder6da4f7e = $valueHolder6da4f7e;

        return $this->valueHolder6da4f7e->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializer6da4f7e && ($this->initializer6da4f7e->__invoke($valueHolder6da4f7e, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer6da4f7e) || 1) && $this->valueHolder6da4f7e = $valueHolder6da4f7e;

        return $this->valueHolder6da4f7e->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializer6da4f7e && ($this->initializer6da4f7e->__invoke($valueHolder6da4f7e, $this, 'clear', array(), $this->initializer6da4f7e) || 1) && $this->valueHolder6da4f7e = $valueHolder6da4f7e;

        return $this->valueHolder6da4f7e->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6da4f7e && ($this->initializer6da4f7e->__invoke($valueHolder6da4f7e, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6da4f7e) || 1) && $this->valueHolder6da4f7e = $valueHolder6da4f7e;

        return $this->valueHolder6da4f7e->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializer6da4f7e && ($this->initializer6da4f7e->__invoke($valueHolder6da4f7e, $this, 'findAll', array(), $this->initializer6da4f7e) || 1) && $this->valueHolder6da4f7e = $valueHolder6da4f7e;

        return $this->valueHolder6da4f7e->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer6da4f7e && ($this->initializer6da4f7e->__invoke($valueHolder6da4f7e, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer6da4f7e) || 1) && $this->valueHolder6da4f7e = $valueHolder6da4f7e;

        return $this->valueHolder6da4f7e->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer6da4f7e && ($this->initializer6da4f7e->__invoke($valueHolder6da4f7e, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer6da4f7e) || 1) && $this->valueHolder6da4f7e = $valueHolder6da4f7e;

        return $this->valueHolder6da4f7e->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializer6da4f7e && ($this->initializer6da4f7e->__invoke($valueHolder6da4f7e, $this, 'count', array('criteria' => $criteria), $this->initializer6da4f7e) || 1) && $this->valueHolder6da4f7e = $valueHolder6da4f7e;

        return $this->valueHolder6da4f7e->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializer6da4f7e && ($this->initializer6da4f7e->__invoke($valueHolder6da4f7e, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer6da4f7e) || 1) && $this->valueHolder6da4f7e = $valueHolder6da4f7e;

        return $this->valueHolder6da4f7e->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializer6da4f7e && ($this->initializer6da4f7e->__invoke($valueHolder6da4f7e, $this, 'getClassName', array(), $this->initializer6da4f7e) || 1) && $this->valueHolder6da4f7e = $valueHolder6da4f7e;

        return $this->valueHolder6da4f7e->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer6da4f7e && ($this->initializer6da4f7e->__invoke($valueHolder6da4f7e, $this, 'matching', array('criteria' => $criteria), $this->initializer6da4f7e) || 1) && $this->valueHolder6da4f7e = $valueHolder6da4f7e;

        return $this->valueHolder6da4f7e->matching($criteria);
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

        $instance->initializer6da4f7e = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolder6da4f7e) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Repository\\BankAccountRepository');
            $this->valueHolder6da4f7e = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolder6da4f7e->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer6da4f7e && ($this->initializer6da4f7e->__invoke($valueHolder6da4f7e, $this, '__get', ['name' => $name], $this->initializer6da4f7e) || 1) && $this->valueHolder6da4f7e = $valueHolder6da4f7e;

        if (isset(self::$publicProperties6da4f7e[$name])) {
            return $this->valueHolder6da4f7e->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6da4f7e;

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

        $targetObject = $this->valueHolder6da4f7e;
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
        $this->initializer6da4f7e && ($this->initializer6da4f7e->__invoke($valueHolder6da4f7e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6da4f7e) || 1) && $this->valueHolder6da4f7e = $valueHolder6da4f7e;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6da4f7e;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder6da4f7e;
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
        $this->initializer6da4f7e && ($this->initializer6da4f7e->__invoke($valueHolder6da4f7e, $this, '__isset', array('name' => $name), $this->initializer6da4f7e) || 1) && $this->valueHolder6da4f7e = $valueHolder6da4f7e;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6da4f7e;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder6da4f7e;
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
        $this->initializer6da4f7e && ($this->initializer6da4f7e->__invoke($valueHolder6da4f7e, $this, '__unset', array('name' => $name), $this->initializer6da4f7e) || 1) && $this->valueHolder6da4f7e = $valueHolder6da4f7e;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6da4f7e;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder6da4f7e;
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
        $this->initializer6da4f7e && ($this->initializer6da4f7e->__invoke($valueHolder6da4f7e, $this, '__clone', array(), $this->initializer6da4f7e) || 1) && $this->valueHolder6da4f7e = $valueHolder6da4f7e;

        $this->valueHolder6da4f7e = clone $this->valueHolder6da4f7e;
    }

    public function __sleep()
    {
        $this->initializer6da4f7e && ($this->initializer6da4f7e->__invoke($valueHolder6da4f7e, $this, '__sleep', array(), $this->initializer6da4f7e) || 1) && $this->valueHolder6da4f7e = $valueHolder6da4f7e;

        return array('valueHolder6da4f7e');
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
        $this->initializer6da4f7e = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer6da4f7e;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer6da4f7e && ($this->initializer6da4f7e->__invoke($valueHolder6da4f7e, $this, 'initializeProxy', array(), $this->initializer6da4f7e) || 1) && $this->valueHolder6da4f7e = $valueHolder6da4f7e;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6da4f7e;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6da4f7e;
    }


}
