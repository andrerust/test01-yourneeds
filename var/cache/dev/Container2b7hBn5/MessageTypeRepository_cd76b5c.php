<?php

class MessageTypeRepository_cd76b5c extends \AppBundle\Repository\MessageTypeRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHoldercd76b5c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercd76b5c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescd76b5c = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializercd76b5c && ($this->initializercd76b5c->__invoke($valueHoldercd76b5c, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializercd76b5c) || 1) && $this->valueHoldercd76b5c = $valueHoldercd76b5c;

        return $this->valueHoldercd76b5c->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializercd76b5c && ($this->initializercd76b5c->__invoke($valueHoldercd76b5c, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializercd76b5c) || 1) && $this->valueHoldercd76b5c = $valueHoldercd76b5c;

        return $this->valueHoldercd76b5c->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializercd76b5c && ($this->initializercd76b5c->__invoke($valueHoldercd76b5c, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializercd76b5c) || 1) && $this->valueHoldercd76b5c = $valueHoldercd76b5c;

        return $this->valueHoldercd76b5c->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializercd76b5c && ($this->initializercd76b5c->__invoke($valueHoldercd76b5c, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializercd76b5c) || 1) && $this->valueHoldercd76b5c = $valueHoldercd76b5c;

        return $this->valueHoldercd76b5c->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializercd76b5c && ($this->initializercd76b5c->__invoke($valueHoldercd76b5c, $this, 'clear', array(), $this->initializercd76b5c) || 1) && $this->valueHoldercd76b5c = $valueHoldercd76b5c;

        return $this->valueHoldercd76b5c->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercd76b5c && ($this->initializercd76b5c->__invoke($valueHoldercd76b5c, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercd76b5c) || 1) && $this->valueHoldercd76b5c = $valueHoldercd76b5c;

        return $this->valueHoldercd76b5c->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializercd76b5c && ($this->initializercd76b5c->__invoke($valueHoldercd76b5c, $this, 'findAll', array(), $this->initializercd76b5c) || 1) && $this->valueHoldercd76b5c = $valueHoldercd76b5c;

        return $this->valueHoldercd76b5c->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializercd76b5c && ($this->initializercd76b5c->__invoke($valueHoldercd76b5c, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializercd76b5c) || 1) && $this->valueHoldercd76b5c = $valueHoldercd76b5c;

        return $this->valueHoldercd76b5c->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializercd76b5c && ($this->initializercd76b5c->__invoke($valueHoldercd76b5c, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializercd76b5c) || 1) && $this->valueHoldercd76b5c = $valueHoldercd76b5c;

        return $this->valueHoldercd76b5c->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializercd76b5c && ($this->initializercd76b5c->__invoke($valueHoldercd76b5c, $this, 'count', array('criteria' => $criteria), $this->initializercd76b5c) || 1) && $this->valueHoldercd76b5c = $valueHoldercd76b5c;

        return $this->valueHoldercd76b5c->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializercd76b5c && ($this->initializercd76b5c->__invoke($valueHoldercd76b5c, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializercd76b5c) || 1) && $this->valueHoldercd76b5c = $valueHoldercd76b5c;

        return $this->valueHoldercd76b5c->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializercd76b5c && ($this->initializercd76b5c->__invoke($valueHoldercd76b5c, $this, 'getClassName', array(), $this->initializercd76b5c) || 1) && $this->valueHoldercd76b5c = $valueHoldercd76b5c;

        return $this->valueHoldercd76b5c->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializercd76b5c && ($this->initializercd76b5c->__invoke($valueHoldercd76b5c, $this, 'matching', array('criteria' => $criteria), $this->initializercd76b5c) || 1) && $this->valueHoldercd76b5c = $valueHoldercd76b5c;

        return $this->valueHoldercd76b5c->matching($criteria);
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

        $instance->initializercd76b5c = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHoldercd76b5c) {
            $reflection = $reflection ?? new \ReflectionClass('AppBundle\\Repository\\MessageTypeRepository');
            $this->valueHoldercd76b5c = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHoldercd76b5c->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializercd76b5c && ($this->initializercd76b5c->__invoke($valueHoldercd76b5c, $this, '__get', ['name' => $name], $this->initializercd76b5c) || 1) && $this->valueHoldercd76b5c = $valueHoldercd76b5c;

        if (isset(self::$publicPropertiescd76b5c[$name])) {
            return $this->valueHoldercd76b5c->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercd76b5c;

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

        $targetObject = $this->valueHoldercd76b5c;
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
        $this->initializercd76b5c && ($this->initializercd76b5c->__invoke($valueHoldercd76b5c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercd76b5c) || 1) && $this->valueHoldercd76b5c = $valueHoldercd76b5c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercd76b5c;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHoldercd76b5c;
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
        $this->initializercd76b5c && ($this->initializercd76b5c->__invoke($valueHoldercd76b5c, $this, '__isset', array('name' => $name), $this->initializercd76b5c) || 1) && $this->valueHoldercd76b5c = $valueHoldercd76b5c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercd76b5c;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldercd76b5c;
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
        $this->initializercd76b5c && ($this->initializercd76b5c->__invoke($valueHoldercd76b5c, $this, '__unset', array('name' => $name), $this->initializercd76b5c) || 1) && $this->valueHoldercd76b5c = $valueHoldercd76b5c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercd76b5c;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldercd76b5c;
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
        $this->initializercd76b5c && ($this->initializercd76b5c->__invoke($valueHoldercd76b5c, $this, '__clone', array(), $this->initializercd76b5c) || 1) && $this->valueHoldercd76b5c = $valueHoldercd76b5c;

        $this->valueHoldercd76b5c = clone $this->valueHoldercd76b5c;
    }

    public function __sleep()
    {
        $this->initializercd76b5c && ($this->initializercd76b5c->__invoke($valueHoldercd76b5c, $this, '__sleep', array(), $this->initializercd76b5c) || 1) && $this->valueHoldercd76b5c = $valueHoldercd76b5c;

        return array('valueHoldercd76b5c');
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
        $this->initializercd76b5c = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializercd76b5c;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializercd76b5c && ($this->initializercd76b5c->__invoke($valueHoldercd76b5c, $this, 'initializeProxy', array(), $this->initializercd76b5c) || 1) && $this->valueHoldercd76b5c = $valueHoldercd76b5c;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercd76b5c;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercd76b5c;
    }


}
