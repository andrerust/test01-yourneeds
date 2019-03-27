<?php

class MessageRepository_e3233d1 extends \AppBundle\Repository\MessageRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHoldere3233d1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere3233d1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese3233d1 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializere3233d1 && ($this->initializere3233d1->__invoke($valueHoldere3233d1, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializere3233d1) || 1) && $this->valueHoldere3233d1 = $valueHoldere3233d1;

        return $this->valueHoldere3233d1->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializere3233d1 && ($this->initializere3233d1->__invoke($valueHoldere3233d1, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializere3233d1) || 1) && $this->valueHoldere3233d1 = $valueHoldere3233d1;

        return $this->valueHoldere3233d1->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializere3233d1 && ($this->initializere3233d1->__invoke($valueHoldere3233d1, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializere3233d1) || 1) && $this->valueHoldere3233d1 = $valueHoldere3233d1;

        return $this->valueHoldere3233d1->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializere3233d1 && ($this->initializere3233d1->__invoke($valueHoldere3233d1, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializere3233d1) || 1) && $this->valueHoldere3233d1 = $valueHoldere3233d1;

        return $this->valueHoldere3233d1->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializere3233d1 && ($this->initializere3233d1->__invoke($valueHoldere3233d1, $this, 'clear', array(), $this->initializere3233d1) || 1) && $this->valueHoldere3233d1 = $valueHoldere3233d1;

        return $this->valueHoldere3233d1->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere3233d1 && ($this->initializere3233d1->__invoke($valueHoldere3233d1, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere3233d1) || 1) && $this->valueHoldere3233d1 = $valueHoldere3233d1;

        return $this->valueHoldere3233d1->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializere3233d1 && ($this->initializere3233d1->__invoke($valueHoldere3233d1, $this, 'findAll', array(), $this->initializere3233d1) || 1) && $this->valueHoldere3233d1 = $valueHoldere3233d1;

        return $this->valueHoldere3233d1->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializere3233d1 && ($this->initializere3233d1->__invoke($valueHoldere3233d1, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializere3233d1) || 1) && $this->valueHoldere3233d1 = $valueHoldere3233d1;

        return $this->valueHoldere3233d1->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializere3233d1 && ($this->initializere3233d1->__invoke($valueHoldere3233d1, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializere3233d1) || 1) && $this->valueHoldere3233d1 = $valueHoldere3233d1;

        return $this->valueHoldere3233d1->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializere3233d1 && ($this->initializere3233d1->__invoke($valueHoldere3233d1, $this, 'count', array('criteria' => $criteria), $this->initializere3233d1) || 1) && $this->valueHoldere3233d1 = $valueHoldere3233d1;

        return $this->valueHoldere3233d1->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializere3233d1 && ($this->initializere3233d1->__invoke($valueHoldere3233d1, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializere3233d1) || 1) && $this->valueHoldere3233d1 = $valueHoldere3233d1;

        return $this->valueHoldere3233d1->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializere3233d1 && ($this->initializere3233d1->__invoke($valueHoldere3233d1, $this, 'getClassName', array(), $this->initializere3233d1) || 1) && $this->valueHoldere3233d1 = $valueHoldere3233d1;

        return $this->valueHoldere3233d1->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializere3233d1 && ($this->initializere3233d1->__invoke($valueHoldere3233d1, $this, 'matching', array('criteria' => $criteria), $this->initializere3233d1) || 1) && $this->valueHoldere3233d1 = $valueHoldere3233d1;

        return $this->valueHoldere3233d1->matching($criteria);
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

        $instance->initializere3233d1 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHoldere3233d1) {
            $reflection = $reflection ?? new \ReflectionClass('AppBundle\\Repository\\MessageRepository');
            $this->valueHoldere3233d1 = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHoldere3233d1->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializere3233d1 && ($this->initializere3233d1->__invoke($valueHoldere3233d1, $this, '__get', ['name' => $name], $this->initializere3233d1) || 1) && $this->valueHoldere3233d1 = $valueHoldere3233d1;

        if (isset(self::$publicPropertiese3233d1[$name])) {
            return $this->valueHoldere3233d1->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3233d1;

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

        $targetObject = $this->valueHoldere3233d1;
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
        $this->initializere3233d1 && ($this->initializere3233d1->__invoke($valueHoldere3233d1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere3233d1) || 1) && $this->valueHoldere3233d1 = $valueHoldere3233d1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3233d1;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHoldere3233d1;
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
        $this->initializere3233d1 && ($this->initializere3233d1->__invoke($valueHoldere3233d1, $this, '__isset', array('name' => $name), $this->initializere3233d1) || 1) && $this->valueHoldere3233d1 = $valueHoldere3233d1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3233d1;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldere3233d1;
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
        $this->initializere3233d1 && ($this->initializere3233d1->__invoke($valueHoldere3233d1, $this, '__unset', array('name' => $name), $this->initializere3233d1) || 1) && $this->valueHoldere3233d1 = $valueHoldere3233d1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3233d1;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldere3233d1;
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
        $this->initializere3233d1 && ($this->initializere3233d1->__invoke($valueHoldere3233d1, $this, '__clone', array(), $this->initializere3233d1) || 1) && $this->valueHoldere3233d1 = $valueHoldere3233d1;

        $this->valueHoldere3233d1 = clone $this->valueHoldere3233d1;
    }

    public function __sleep()
    {
        $this->initializere3233d1 && ($this->initializere3233d1->__invoke($valueHoldere3233d1, $this, '__sleep', array(), $this->initializere3233d1) || 1) && $this->valueHoldere3233d1 = $valueHoldere3233d1;

        return array('valueHoldere3233d1');
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
        $this->initializere3233d1 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializere3233d1;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializere3233d1 && ($this->initializere3233d1->__invoke($valueHoldere3233d1, $this, 'initializeProxy', array(), $this->initializere3233d1) || 1) && $this->valueHoldere3233d1 = $valueHoldere3233d1;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere3233d1;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere3233d1;
    }


}
