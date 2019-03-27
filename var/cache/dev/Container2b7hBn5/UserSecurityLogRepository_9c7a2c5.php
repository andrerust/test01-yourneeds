<?php

class UserSecurityLogRepository_9c7a2c5 extends \Main\UserBundle\Repository\UserSecurityLogRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder9c7a2c5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9c7a2c5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9c7a2c5 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function findLastByUserId($id = null)
    {
        $this->initializer9c7a2c5 && ($this->initializer9c7a2c5->__invoke($valueHolder9c7a2c5, $this, 'findLastByUserId', array('id' => $id), $this->initializer9c7a2c5) || 1) && $this->valueHolder9c7a2c5 = $valueHolder9c7a2c5;

        return $this->valueHolder9c7a2c5->findLastByUserId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer9c7a2c5 && ($this->initializer9c7a2c5->__invoke($valueHolder9c7a2c5, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer9c7a2c5) || 1) && $this->valueHolder9c7a2c5 = $valueHolder9c7a2c5;

        return $this->valueHolder9c7a2c5->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer9c7a2c5 && ($this->initializer9c7a2c5->__invoke($valueHolder9c7a2c5, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer9c7a2c5) || 1) && $this->valueHolder9c7a2c5 = $valueHolder9c7a2c5;

        return $this->valueHolder9c7a2c5->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializer9c7a2c5 && ($this->initializer9c7a2c5->__invoke($valueHolder9c7a2c5, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer9c7a2c5) || 1) && $this->valueHolder9c7a2c5 = $valueHolder9c7a2c5;

        return $this->valueHolder9c7a2c5->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializer9c7a2c5 && ($this->initializer9c7a2c5->__invoke($valueHolder9c7a2c5, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer9c7a2c5) || 1) && $this->valueHolder9c7a2c5 = $valueHolder9c7a2c5;

        return $this->valueHolder9c7a2c5->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializer9c7a2c5 && ($this->initializer9c7a2c5->__invoke($valueHolder9c7a2c5, $this, 'clear', array(), $this->initializer9c7a2c5) || 1) && $this->valueHolder9c7a2c5 = $valueHolder9c7a2c5;

        return $this->valueHolder9c7a2c5->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9c7a2c5 && ($this->initializer9c7a2c5->__invoke($valueHolder9c7a2c5, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9c7a2c5) || 1) && $this->valueHolder9c7a2c5 = $valueHolder9c7a2c5;

        return $this->valueHolder9c7a2c5->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializer9c7a2c5 && ($this->initializer9c7a2c5->__invoke($valueHolder9c7a2c5, $this, 'findAll', array(), $this->initializer9c7a2c5) || 1) && $this->valueHolder9c7a2c5 = $valueHolder9c7a2c5;

        return $this->valueHolder9c7a2c5->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer9c7a2c5 && ($this->initializer9c7a2c5->__invoke($valueHolder9c7a2c5, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer9c7a2c5) || 1) && $this->valueHolder9c7a2c5 = $valueHolder9c7a2c5;

        return $this->valueHolder9c7a2c5->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer9c7a2c5 && ($this->initializer9c7a2c5->__invoke($valueHolder9c7a2c5, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer9c7a2c5) || 1) && $this->valueHolder9c7a2c5 = $valueHolder9c7a2c5;

        return $this->valueHolder9c7a2c5->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializer9c7a2c5 && ($this->initializer9c7a2c5->__invoke($valueHolder9c7a2c5, $this, 'count', array('criteria' => $criteria), $this->initializer9c7a2c5) || 1) && $this->valueHolder9c7a2c5 = $valueHolder9c7a2c5;

        return $this->valueHolder9c7a2c5->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializer9c7a2c5 && ($this->initializer9c7a2c5->__invoke($valueHolder9c7a2c5, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer9c7a2c5) || 1) && $this->valueHolder9c7a2c5 = $valueHolder9c7a2c5;

        return $this->valueHolder9c7a2c5->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializer9c7a2c5 && ($this->initializer9c7a2c5->__invoke($valueHolder9c7a2c5, $this, 'getClassName', array(), $this->initializer9c7a2c5) || 1) && $this->valueHolder9c7a2c5 = $valueHolder9c7a2c5;

        return $this->valueHolder9c7a2c5->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer9c7a2c5 && ($this->initializer9c7a2c5->__invoke($valueHolder9c7a2c5, $this, 'matching', array('criteria' => $criteria), $this->initializer9c7a2c5) || 1) && $this->valueHolder9c7a2c5 = $valueHolder9c7a2c5;

        return $this->valueHolder9c7a2c5->matching($criteria);
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

        $instance->initializer9c7a2c5 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolder9c7a2c5) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Repository\\UserSecurityLogRepository');
            $this->valueHolder9c7a2c5 = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolder9c7a2c5->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer9c7a2c5 && ($this->initializer9c7a2c5->__invoke($valueHolder9c7a2c5, $this, '__get', ['name' => $name], $this->initializer9c7a2c5) || 1) && $this->valueHolder9c7a2c5 = $valueHolder9c7a2c5;

        if (isset(self::$publicProperties9c7a2c5[$name])) {
            return $this->valueHolder9c7a2c5->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c7a2c5;

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

        $targetObject = $this->valueHolder9c7a2c5;
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
        $this->initializer9c7a2c5 && ($this->initializer9c7a2c5->__invoke($valueHolder9c7a2c5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9c7a2c5) || 1) && $this->valueHolder9c7a2c5 = $valueHolder9c7a2c5;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c7a2c5;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder9c7a2c5;
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
        $this->initializer9c7a2c5 && ($this->initializer9c7a2c5->__invoke($valueHolder9c7a2c5, $this, '__isset', array('name' => $name), $this->initializer9c7a2c5) || 1) && $this->valueHolder9c7a2c5 = $valueHolder9c7a2c5;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c7a2c5;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder9c7a2c5;
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
        $this->initializer9c7a2c5 && ($this->initializer9c7a2c5->__invoke($valueHolder9c7a2c5, $this, '__unset', array('name' => $name), $this->initializer9c7a2c5) || 1) && $this->valueHolder9c7a2c5 = $valueHolder9c7a2c5;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c7a2c5;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder9c7a2c5;
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
        $this->initializer9c7a2c5 && ($this->initializer9c7a2c5->__invoke($valueHolder9c7a2c5, $this, '__clone', array(), $this->initializer9c7a2c5) || 1) && $this->valueHolder9c7a2c5 = $valueHolder9c7a2c5;

        $this->valueHolder9c7a2c5 = clone $this->valueHolder9c7a2c5;
    }

    public function __sleep()
    {
        $this->initializer9c7a2c5 && ($this->initializer9c7a2c5->__invoke($valueHolder9c7a2c5, $this, '__sleep', array(), $this->initializer9c7a2c5) || 1) && $this->valueHolder9c7a2c5 = $valueHolder9c7a2c5;

        return array('valueHolder9c7a2c5');
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
        $this->initializer9c7a2c5 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer9c7a2c5;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer9c7a2c5 && ($this->initializer9c7a2c5->__invoke($valueHolder9c7a2c5, $this, 'initializeProxy', array(), $this->initializer9c7a2c5) || 1) && $this->valueHolder9c7a2c5 = $valueHolder9c7a2c5;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9c7a2c5;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9c7a2c5;
    }


}
