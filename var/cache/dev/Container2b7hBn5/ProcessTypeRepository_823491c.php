<?php

class ProcessTypeRepository_823491c extends \Main\InsuranceBundle\Repository\ProcessTypeRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder823491c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer823491c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties823491c = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer823491c && ($this->initializer823491c->__invoke($valueHolder823491c, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer823491c) || 1) && $this->valueHolder823491c = $valueHolder823491c;

        return $this->valueHolder823491c->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer823491c && ($this->initializer823491c->__invoke($valueHolder823491c, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer823491c) || 1) && $this->valueHolder823491c = $valueHolder823491c;

        return $this->valueHolder823491c->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializer823491c && ($this->initializer823491c->__invoke($valueHolder823491c, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer823491c) || 1) && $this->valueHolder823491c = $valueHolder823491c;

        return $this->valueHolder823491c->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializer823491c && ($this->initializer823491c->__invoke($valueHolder823491c, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer823491c) || 1) && $this->valueHolder823491c = $valueHolder823491c;

        return $this->valueHolder823491c->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializer823491c && ($this->initializer823491c->__invoke($valueHolder823491c, $this, 'clear', array(), $this->initializer823491c) || 1) && $this->valueHolder823491c = $valueHolder823491c;

        return $this->valueHolder823491c->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer823491c && ($this->initializer823491c->__invoke($valueHolder823491c, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer823491c) || 1) && $this->valueHolder823491c = $valueHolder823491c;

        return $this->valueHolder823491c->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializer823491c && ($this->initializer823491c->__invoke($valueHolder823491c, $this, 'findAll', array(), $this->initializer823491c) || 1) && $this->valueHolder823491c = $valueHolder823491c;

        return $this->valueHolder823491c->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer823491c && ($this->initializer823491c->__invoke($valueHolder823491c, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer823491c) || 1) && $this->valueHolder823491c = $valueHolder823491c;

        return $this->valueHolder823491c->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer823491c && ($this->initializer823491c->__invoke($valueHolder823491c, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer823491c) || 1) && $this->valueHolder823491c = $valueHolder823491c;

        return $this->valueHolder823491c->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializer823491c && ($this->initializer823491c->__invoke($valueHolder823491c, $this, 'count', array('criteria' => $criteria), $this->initializer823491c) || 1) && $this->valueHolder823491c = $valueHolder823491c;

        return $this->valueHolder823491c->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializer823491c && ($this->initializer823491c->__invoke($valueHolder823491c, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer823491c) || 1) && $this->valueHolder823491c = $valueHolder823491c;

        return $this->valueHolder823491c->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializer823491c && ($this->initializer823491c->__invoke($valueHolder823491c, $this, 'getClassName', array(), $this->initializer823491c) || 1) && $this->valueHolder823491c = $valueHolder823491c;

        return $this->valueHolder823491c->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer823491c && ($this->initializer823491c->__invoke($valueHolder823491c, $this, 'matching', array('criteria' => $criteria), $this->initializer823491c) || 1) && $this->valueHolder823491c = $valueHolder823491c;

        return $this->valueHolder823491c->matching($criteria);
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

        $instance->initializer823491c = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolder823491c) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Repository\\ProcessTypeRepository');
            $this->valueHolder823491c = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolder823491c->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer823491c && ($this->initializer823491c->__invoke($valueHolder823491c, $this, '__get', ['name' => $name], $this->initializer823491c) || 1) && $this->valueHolder823491c = $valueHolder823491c;

        if (isset(self::$publicProperties823491c[$name])) {
            return $this->valueHolder823491c->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder823491c;

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

        $targetObject = $this->valueHolder823491c;
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
        $this->initializer823491c && ($this->initializer823491c->__invoke($valueHolder823491c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer823491c) || 1) && $this->valueHolder823491c = $valueHolder823491c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder823491c;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder823491c;
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
        $this->initializer823491c && ($this->initializer823491c->__invoke($valueHolder823491c, $this, '__isset', array('name' => $name), $this->initializer823491c) || 1) && $this->valueHolder823491c = $valueHolder823491c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder823491c;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder823491c;
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
        $this->initializer823491c && ($this->initializer823491c->__invoke($valueHolder823491c, $this, '__unset', array('name' => $name), $this->initializer823491c) || 1) && $this->valueHolder823491c = $valueHolder823491c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder823491c;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder823491c;
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
        $this->initializer823491c && ($this->initializer823491c->__invoke($valueHolder823491c, $this, '__clone', array(), $this->initializer823491c) || 1) && $this->valueHolder823491c = $valueHolder823491c;

        $this->valueHolder823491c = clone $this->valueHolder823491c;
    }

    public function __sleep()
    {
        $this->initializer823491c && ($this->initializer823491c->__invoke($valueHolder823491c, $this, '__sleep', array(), $this->initializer823491c) || 1) && $this->valueHolder823491c = $valueHolder823491c;

        return array('valueHolder823491c');
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
        $this->initializer823491c = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer823491c;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer823491c && ($this->initializer823491c->__invoke($valueHolder823491c, $this, 'initializeProxy', array(), $this->initializer823491c) || 1) && $this->valueHolder823491c = $valueHolder823491c;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder823491c;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder823491c;
    }


}
