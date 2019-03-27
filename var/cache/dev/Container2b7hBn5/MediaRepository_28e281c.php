<?php

class MediaRepository_28e281c extends \AppBundle\Repository\MediaRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder28e281c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer28e281c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties28e281c = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer28e281c && ($this->initializer28e281c->__invoke($valueHolder28e281c, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer28e281c) || 1) && $this->valueHolder28e281c = $valueHolder28e281c;

        return $this->valueHolder28e281c->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer28e281c && ($this->initializer28e281c->__invoke($valueHolder28e281c, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer28e281c) || 1) && $this->valueHolder28e281c = $valueHolder28e281c;

        return $this->valueHolder28e281c->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializer28e281c && ($this->initializer28e281c->__invoke($valueHolder28e281c, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer28e281c) || 1) && $this->valueHolder28e281c = $valueHolder28e281c;

        return $this->valueHolder28e281c->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializer28e281c && ($this->initializer28e281c->__invoke($valueHolder28e281c, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer28e281c) || 1) && $this->valueHolder28e281c = $valueHolder28e281c;

        return $this->valueHolder28e281c->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializer28e281c && ($this->initializer28e281c->__invoke($valueHolder28e281c, $this, 'clear', array(), $this->initializer28e281c) || 1) && $this->valueHolder28e281c = $valueHolder28e281c;

        return $this->valueHolder28e281c->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer28e281c && ($this->initializer28e281c->__invoke($valueHolder28e281c, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer28e281c) || 1) && $this->valueHolder28e281c = $valueHolder28e281c;

        return $this->valueHolder28e281c->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializer28e281c && ($this->initializer28e281c->__invoke($valueHolder28e281c, $this, 'findAll', array(), $this->initializer28e281c) || 1) && $this->valueHolder28e281c = $valueHolder28e281c;

        return $this->valueHolder28e281c->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer28e281c && ($this->initializer28e281c->__invoke($valueHolder28e281c, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer28e281c) || 1) && $this->valueHolder28e281c = $valueHolder28e281c;

        return $this->valueHolder28e281c->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer28e281c && ($this->initializer28e281c->__invoke($valueHolder28e281c, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer28e281c) || 1) && $this->valueHolder28e281c = $valueHolder28e281c;

        return $this->valueHolder28e281c->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializer28e281c && ($this->initializer28e281c->__invoke($valueHolder28e281c, $this, 'count', array('criteria' => $criteria), $this->initializer28e281c) || 1) && $this->valueHolder28e281c = $valueHolder28e281c;

        return $this->valueHolder28e281c->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializer28e281c && ($this->initializer28e281c->__invoke($valueHolder28e281c, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer28e281c) || 1) && $this->valueHolder28e281c = $valueHolder28e281c;

        return $this->valueHolder28e281c->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializer28e281c && ($this->initializer28e281c->__invoke($valueHolder28e281c, $this, 'getClassName', array(), $this->initializer28e281c) || 1) && $this->valueHolder28e281c = $valueHolder28e281c;

        return $this->valueHolder28e281c->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer28e281c && ($this->initializer28e281c->__invoke($valueHolder28e281c, $this, 'matching', array('criteria' => $criteria), $this->initializer28e281c) || 1) && $this->valueHolder28e281c = $valueHolder28e281c;

        return $this->valueHolder28e281c->matching($criteria);
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

        $instance->initializer28e281c = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolder28e281c) {
            $reflection = $reflection ?? new \ReflectionClass('AppBundle\\Repository\\MediaRepository');
            $this->valueHolder28e281c = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolder28e281c->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer28e281c && ($this->initializer28e281c->__invoke($valueHolder28e281c, $this, '__get', ['name' => $name], $this->initializer28e281c) || 1) && $this->valueHolder28e281c = $valueHolder28e281c;

        if (isset(self::$publicProperties28e281c[$name])) {
            return $this->valueHolder28e281c->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28e281c;

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

        $targetObject = $this->valueHolder28e281c;
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
        $this->initializer28e281c && ($this->initializer28e281c->__invoke($valueHolder28e281c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer28e281c) || 1) && $this->valueHolder28e281c = $valueHolder28e281c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28e281c;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder28e281c;
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
        $this->initializer28e281c && ($this->initializer28e281c->__invoke($valueHolder28e281c, $this, '__isset', array('name' => $name), $this->initializer28e281c) || 1) && $this->valueHolder28e281c = $valueHolder28e281c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28e281c;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder28e281c;
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
        $this->initializer28e281c && ($this->initializer28e281c->__invoke($valueHolder28e281c, $this, '__unset', array('name' => $name), $this->initializer28e281c) || 1) && $this->valueHolder28e281c = $valueHolder28e281c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28e281c;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder28e281c;
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
        $this->initializer28e281c && ($this->initializer28e281c->__invoke($valueHolder28e281c, $this, '__clone', array(), $this->initializer28e281c) || 1) && $this->valueHolder28e281c = $valueHolder28e281c;

        $this->valueHolder28e281c = clone $this->valueHolder28e281c;
    }

    public function __sleep()
    {
        $this->initializer28e281c && ($this->initializer28e281c->__invoke($valueHolder28e281c, $this, '__sleep', array(), $this->initializer28e281c) || 1) && $this->valueHolder28e281c = $valueHolder28e281c;

        return array('valueHolder28e281c');
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
        $this->initializer28e281c = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer28e281c;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer28e281c && ($this->initializer28e281c->__invoke($valueHolder28e281c, $this, 'initializeProxy', array(), $this->initializer28e281c) || 1) && $this->valueHolder28e281c = $valueHolder28e281c;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder28e281c;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder28e281c;
    }


}
