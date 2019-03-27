<?php

class CityRepository_446a15c extends \Main\UserBundle\Repository\CityRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder446a15c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer446a15c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties446a15c = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function createAlphabeticalQueryBuilder()
    {
        $this->initializer446a15c && ($this->initializer446a15c->__invoke($valueHolder446a15c, $this, 'createAlphabeticalQueryBuilder', array(), $this->initializer446a15c) || 1) && $this->valueHolder446a15c = $valueHolder446a15c;

        return $this->valueHolder446a15c->createAlphabeticalQueryBuilder();
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer446a15c && ($this->initializer446a15c->__invoke($valueHolder446a15c, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer446a15c) || 1) && $this->valueHolder446a15c = $valueHolder446a15c;

        return $this->valueHolder446a15c->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer446a15c && ($this->initializer446a15c->__invoke($valueHolder446a15c, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer446a15c) || 1) && $this->valueHolder446a15c = $valueHolder446a15c;

        return $this->valueHolder446a15c->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializer446a15c && ($this->initializer446a15c->__invoke($valueHolder446a15c, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer446a15c) || 1) && $this->valueHolder446a15c = $valueHolder446a15c;

        return $this->valueHolder446a15c->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializer446a15c && ($this->initializer446a15c->__invoke($valueHolder446a15c, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer446a15c) || 1) && $this->valueHolder446a15c = $valueHolder446a15c;

        return $this->valueHolder446a15c->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializer446a15c && ($this->initializer446a15c->__invoke($valueHolder446a15c, $this, 'clear', array(), $this->initializer446a15c) || 1) && $this->valueHolder446a15c = $valueHolder446a15c;

        return $this->valueHolder446a15c->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer446a15c && ($this->initializer446a15c->__invoke($valueHolder446a15c, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer446a15c) || 1) && $this->valueHolder446a15c = $valueHolder446a15c;

        return $this->valueHolder446a15c->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializer446a15c && ($this->initializer446a15c->__invoke($valueHolder446a15c, $this, 'findAll', array(), $this->initializer446a15c) || 1) && $this->valueHolder446a15c = $valueHolder446a15c;

        return $this->valueHolder446a15c->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer446a15c && ($this->initializer446a15c->__invoke($valueHolder446a15c, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer446a15c) || 1) && $this->valueHolder446a15c = $valueHolder446a15c;

        return $this->valueHolder446a15c->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer446a15c && ($this->initializer446a15c->__invoke($valueHolder446a15c, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer446a15c) || 1) && $this->valueHolder446a15c = $valueHolder446a15c;

        return $this->valueHolder446a15c->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializer446a15c && ($this->initializer446a15c->__invoke($valueHolder446a15c, $this, 'count', array('criteria' => $criteria), $this->initializer446a15c) || 1) && $this->valueHolder446a15c = $valueHolder446a15c;

        return $this->valueHolder446a15c->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializer446a15c && ($this->initializer446a15c->__invoke($valueHolder446a15c, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer446a15c) || 1) && $this->valueHolder446a15c = $valueHolder446a15c;

        return $this->valueHolder446a15c->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializer446a15c && ($this->initializer446a15c->__invoke($valueHolder446a15c, $this, 'getClassName', array(), $this->initializer446a15c) || 1) && $this->valueHolder446a15c = $valueHolder446a15c;

        return $this->valueHolder446a15c->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer446a15c && ($this->initializer446a15c->__invoke($valueHolder446a15c, $this, 'matching', array('criteria' => $criteria), $this->initializer446a15c) || 1) && $this->valueHolder446a15c = $valueHolder446a15c;

        return $this->valueHolder446a15c->matching($criteria);
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

        $instance->initializer446a15c = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolder446a15c) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Repository\\CityRepository');
            $this->valueHolder446a15c = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolder446a15c->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer446a15c && ($this->initializer446a15c->__invoke($valueHolder446a15c, $this, '__get', ['name' => $name], $this->initializer446a15c) || 1) && $this->valueHolder446a15c = $valueHolder446a15c;

        if (isset(self::$publicProperties446a15c[$name])) {
            return $this->valueHolder446a15c->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder446a15c;

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

        $targetObject = $this->valueHolder446a15c;
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
        $this->initializer446a15c && ($this->initializer446a15c->__invoke($valueHolder446a15c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer446a15c) || 1) && $this->valueHolder446a15c = $valueHolder446a15c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder446a15c;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder446a15c;
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
        $this->initializer446a15c && ($this->initializer446a15c->__invoke($valueHolder446a15c, $this, '__isset', array('name' => $name), $this->initializer446a15c) || 1) && $this->valueHolder446a15c = $valueHolder446a15c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder446a15c;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder446a15c;
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
        $this->initializer446a15c && ($this->initializer446a15c->__invoke($valueHolder446a15c, $this, '__unset', array('name' => $name), $this->initializer446a15c) || 1) && $this->valueHolder446a15c = $valueHolder446a15c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder446a15c;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder446a15c;
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
        $this->initializer446a15c && ($this->initializer446a15c->__invoke($valueHolder446a15c, $this, '__clone', array(), $this->initializer446a15c) || 1) && $this->valueHolder446a15c = $valueHolder446a15c;

        $this->valueHolder446a15c = clone $this->valueHolder446a15c;
    }

    public function __sleep()
    {
        $this->initializer446a15c && ($this->initializer446a15c->__invoke($valueHolder446a15c, $this, '__sleep', array(), $this->initializer446a15c) || 1) && $this->valueHolder446a15c = $valueHolder446a15c;

        return array('valueHolder446a15c');
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
        $this->initializer446a15c = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer446a15c;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer446a15c && ($this->initializer446a15c->__invoke($valueHolder446a15c, $this, 'initializeProxy', array(), $this->initializer446a15c) || 1) && $this->valueHolder446a15c = $valueHolder446a15c;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder446a15c;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder446a15c;
    }


}
