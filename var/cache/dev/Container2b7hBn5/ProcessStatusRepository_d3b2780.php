<?php

class ProcessStatusRepository_d3b2780 extends \Main\InsuranceBundle\Repository\ProcessStatusRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderd3b2780 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd3b2780 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd3b2780 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializerd3b2780 && ($this->initializerd3b2780->__invoke($valueHolderd3b2780, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializerd3b2780) || 1) && $this->valueHolderd3b2780 = $valueHolderd3b2780;

        return $this->valueHolderd3b2780->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializerd3b2780 && ($this->initializerd3b2780->__invoke($valueHolderd3b2780, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializerd3b2780) || 1) && $this->valueHolderd3b2780 = $valueHolderd3b2780;

        return $this->valueHolderd3b2780->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializerd3b2780 && ($this->initializerd3b2780->__invoke($valueHolderd3b2780, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializerd3b2780) || 1) && $this->valueHolderd3b2780 = $valueHolderd3b2780;

        return $this->valueHolderd3b2780->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializerd3b2780 && ($this->initializerd3b2780->__invoke($valueHolderd3b2780, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializerd3b2780) || 1) && $this->valueHolderd3b2780 = $valueHolderd3b2780;

        return $this->valueHolderd3b2780->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializerd3b2780 && ($this->initializerd3b2780->__invoke($valueHolderd3b2780, $this, 'clear', array(), $this->initializerd3b2780) || 1) && $this->valueHolderd3b2780 = $valueHolderd3b2780;

        return $this->valueHolderd3b2780->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd3b2780 && ($this->initializerd3b2780->__invoke($valueHolderd3b2780, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd3b2780) || 1) && $this->valueHolderd3b2780 = $valueHolderd3b2780;

        return $this->valueHolderd3b2780->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializerd3b2780 && ($this->initializerd3b2780->__invoke($valueHolderd3b2780, $this, 'findAll', array(), $this->initializerd3b2780) || 1) && $this->valueHolderd3b2780 = $valueHolderd3b2780;

        return $this->valueHolderd3b2780->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializerd3b2780 && ($this->initializerd3b2780->__invoke($valueHolderd3b2780, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializerd3b2780) || 1) && $this->valueHolderd3b2780 = $valueHolderd3b2780;

        return $this->valueHolderd3b2780->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializerd3b2780 && ($this->initializerd3b2780->__invoke($valueHolderd3b2780, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializerd3b2780) || 1) && $this->valueHolderd3b2780 = $valueHolderd3b2780;

        return $this->valueHolderd3b2780->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializerd3b2780 && ($this->initializerd3b2780->__invoke($valueHolderd3b2780, $this, 'count', array('criteria' => $criteria), $this->initializerd3b2780) || 1) && $this->valueHolderd3b2780 = $valueHolderd3b2780;

        return $this->valueHolderd3b2780->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializerd3b2780 && ($this->initializerd3b2780->__invoke($valueHolderd3b2780, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializerd3b2780) || 1) && $this->valueHolderd3b2780 = $valueHolderd3b2780;

        return $this->valueHolderd3b2780->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializerd3b2780 && ($this->initializerd3b2780->__invoke($valueHolderd3b2780, $this, 'getClassName', array(), $this->initializerd3b2780) || 1) && $this->valueHolderd3b2780 = $valueHolderd3b2780;

        return $this->valueHolderd3b2780->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializerd3b2780 && ($this->initializerd3b2780->__invoke($valueHolderd3b2780, $this, 'matching', array('criteria' => $criteria), $this->initializerd3b2780) || 1) && $this->valueHolderd3b2780 = $valueHolderd3b2780;

        return $this->valueHolderd3b2780->matching($criteria);
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

        $instance->initializerd3b2780 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolderd3b2780) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Repository\\ProcessStatusRepository');
            $this->valueHolderd3b2780 = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolderd3b2780->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerd3b2780 && ($this->initializerd3b2780->__invoke($valueHolderd3b2780, $this, '__get', ['name' => $name], $this->initializerd3b2780) || 1) && $this->valueHolderd3b2780 = $valueHolderd3b2780;

        if (isset(self::$publicPropertiesd3b2780[$name])) {
            return $this->valueHolderd3b2780->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd3b2780;

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

        $targetObject = $this->valueHolderd3b2780;
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
        $this->initializerd3b2780 && ($this->initializerd3b2780->__invoke($valueHolderd3b2780, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd3b2780) || 1) && $this->valueHolderd3b2780 = $valueHolderd3b2780;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd3b2780;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderd3b2780;
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
        $this->initializerd3b2780 && ($this->initializerd3b2780->__invoke($valueHolderd3b2780, $this, '__isset', array('name' => $name), $this->initializerd3b2780) || 1) && $this->valueHolderd3b2780 = $valueHolderd3b2780;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd3b2780;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderd3b2780;
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
        $this->initializerd3b2780 && ($this->initializerd3b2780->__invoke($valueHolderd3b2780, $this, '__unset', array('name' => $name), $this->initializerd3b2780) || 1) && $this->valueHolderd3b2780 = $valueHolderd3b2780;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd3b2780;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderd3b2780;
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
        $this->initializerd3b2780 && ($this->initializerd3b2780->__invoke($valueHolderd3b2780, $this, '__clone', array(), $this->initializerd3b2780) || 1) && $this->valueHolderd3b2780 = $valueHolderd3b2780;

        $this->valueHolderd3b2780 = clone $this->valueHolderd3b2780;
    }

    public function __sleep()
    {
        $this->initializerd3b2780 && ($this->initializerd3b2780->__invoke($valueHolderd3b2780, $this, '__sleep', array(), $this->initializerd3b2780) || 1) && $this->valueHolderd3b2780 = $valueHolderd3b2780;

        return array('valueHolderd3b2780');
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
        $this->initializerd3b2780 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerd3b2780;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerd3b2780 && ($this->initializerd3b2780->__invoke($valueHolderd3b2780, $this, 'initializeProxy', array(), $this->initializerd3b2780) || 1) && $this->valueHolderd3b2780 = $valueHolderd3b2780;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd3b2780;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd3b2780;
    }


}
