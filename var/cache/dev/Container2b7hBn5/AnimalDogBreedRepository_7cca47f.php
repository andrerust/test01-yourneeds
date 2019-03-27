<?php

class AnimalDogBreedRepository_7cca47f extends \Main\AdminBundle\Repository\AnimalDogBreedRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder7cca47f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7cca47f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7cca47f = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer7cca47f && ($this->initializer7cca47f->__invoke($valueHolder7cca47f, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer7cca47f) || 1) && $this->valueHolder7cca47f = $valueHolder7cca47f;

        return $this->valueHolder7cca47f->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer7cca47f && ($this->initializer7cca47f->__invoke($valueHolder7cca47f, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer7cca47f) || 1) && $this->valueHolder7cca47f = $valueHolder7cca47f;

        return $this->valueHolder7cca47f->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializer7cca47f && ($this->initializer7cca47f->__invoke($valueHolder7cca47f, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer7cca47f) || 1) && $this->valueHolder7cca47f = $valueHolder7cca47f;

        return $this->valueHolder7cca47f->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializer7cca47f && ($this->initializer7cca47f->__invoke($valueHolder7cca47f, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer7cca47f) || 1) && $this->valueHolder7cca47f = $valueHolder7cca47f;

        return $this->valueHolder7cca47f->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializer7cca47f && ($this->initializer7cca47f->__invoke($valueHolder7cca47f, $this, 'clear', array(), $this->initializer7cca47f) || 1) && $this->valueHolder7cca47f = $valueHolder7cca47f;

        return $this->valueHolder7cca47f->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7cca47f && ($this->initializer7cca47f->__invoke($valueHolder7cca47f, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7cca47f) || 1) && $this->valueHolder7cca47f = $valueHolder7cca47f;

        return $this->valueHolder7cca47f->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializer7cca47f && ($this->initializer7cca47f->__invoke($valueHolder7cca47f, $this, 'findAll', array(), $this->initializer7cca47f) || 1) && $this->valueHolder7cca47f = $valueHolder7cca47f;

        return $this->valueHolder7cca47f->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer7cca47f && ($this->initializer7cca47f->__invoke($valueHolder7cca47f, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer7cca47f) || 1) && $this->valueHolder7cca47f = $valueHolder7cca47f;

        return $this->valueHolder7cca47f->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer7cca47f && ($this->initializer7cca47f->__invoke($valueHolder7cca47f, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer7cca47f) || 1) && $this->valueHolder7cca47f = $valueHolder7cca47f;

        return $this->valueHolder7cca47f->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializer7cca47f && ($this->initializer7cca47f->__invoke($valueHolder7cca47f, $this, 'count', array('criteria' => $criteria), $this->initializer7cca47f) || 1) && $this->valueHolder7cca47f = $valueHolder7cca47f;

        return $this->valueHolder7cca47f->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializer7cca47f && ($this->initializer7cca47f->__invoke($valueHolder7cca47f, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer7cca47f) || 1) && $this->valueHolder7cca47f = $valueHolder7cca47f;

        return $this->valueHolder7cca47f->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializer7cca47f && ($this->initializer7cca47f->__invoke($valueHolder7cca47f, $this, 'getClassName', array(), $this->initializer7cca47f) || 1) && $this->valueHolder7cca47f = $valueHolder7cca47f;

        return $this->valueHolder7cca47f->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer7cca47f && ($this->initializer7cca47f->__invoke($valueHolder7cca47f, $this, 'matching', array('criteria' => $criteria), $this->initializer7cca47f) || 1) && $this->valueHolder7cca47f = $valueHolder7cca47f;

        return $this->valueHolder7cca47f->matching($criteria);
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

        $instance->initializer7cca47f = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolder7cca47f) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\AdminBundle\\Repository\\AnimalDogBreedRepository');
            $this->valueHolder7cca47f = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolder7cca47f->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer7cca47f && ($this->initializer7cca47f->__invoke($valueHolder7cca47f, $this, '__get', ['name' => $name], $this->initializer7cca47f) || 1) && $this->valueHolder7cca47f = $valueHolder7cca47f;

        if (isset(self::$publicProperties7cca47f[$name])) {
            return $this->valueHolder7cca47f->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7cca47f;

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

        $targetObject = $this->valueHolder7cca47f;
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
        $this->initializer7cca47f && ($this->initializer7cca47f->__invoke($valueHolder7cca47f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7cca47f) || 1) && $this->valueHolder7cca47f = $valueHolder7cca47f;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7cca47f;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder7cca47f;
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
        $this->initializer7cca47f && ($this->initializer7cca47f->__invoke($valueHolder7cca47f, $this, '__isset', array('name' => $name), $this->initializer7cca47f) || 1) && $this->valueHolder7cca47f = $valueHolder7cca47f;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7cca47f;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder7cca47f;
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
        $this->initializer7cca47f && ($this->initializer7cca47f->__invoke($valueHolder7cca47f, $this, '__unset', array('name' => $name), $this->initializer7cca47f) || 1) && $this->valueHolder7cca47f = $valueHolder7cca47f;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7cca47f;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder7cca47f;
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
        $this->initializer7cca47f && ($this->initializer7cca47f->__invoke($valueHolder7cca47f, $this, '__clone', array(), $this->initializer7cca47f) || 1) && $this->valueHolder7cca47f = $valueHolder7cca47f;

        $this->valueHolder7cca47f = clone $this->valueHolder7cca47f;
    }

    public function __sleep()
    {
        $this->initializer7cca47f && ($this->initializer7cca47f->__invoke($valueHolder7cca47f, $this, '__sleep', array(), $this->initializer7cca47f) || 1) && $this->valueHolder7cca47f = $valueHolder7cca47f;

        return array('valueHolder7cca47f');
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
        $this->initializer7cca47f = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer7cca47f;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer7cca47f && ($this->initializer7cca47f->__invoke($valueHolder7cca47f, $this, 'initializeProxy', array(), $this->initializer7cca47f) || 1) && $this->valueHolder7cca47f = $valueHolder7cca47f;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7cca47f;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7cca47f;
    }


}
