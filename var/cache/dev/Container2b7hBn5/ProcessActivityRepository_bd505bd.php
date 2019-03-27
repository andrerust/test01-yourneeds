<?php

class ProcessActivityRepository_bd505bd extends \Main\InsuranceBundle\Repository\ProcessActivityRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderbd505bd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbd505bd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbd505bd = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function findDamageStructureByUserId($userId = null, $type = null)
    {
        $this->initializerbd505bd && ($this->initializerbd505bd->__invoke($valueHolderbd505bd, $this, 'findDamageStructureByUserId', array('userId' => $userId, 'type' => $type), $this->initializerbd505bd) || 1) && $this->valueHolderbd505bd = $valueHolderbd505bd;

        return $this->valueHolderbd505bd->findDamageStructureByUserId($userId, $type);
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializerbd505bd && ($this->initializerbd505bd->__invoke($valueHolderbd505bd, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializerbd505bd) || 1) && $this->valueHolderbd505bd = $valueHolderbd505bd;

        return $this->valueHolderbd505bd->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializerbd505bd && ($this->initializerbd505bd->__invoke($valueHolderbd505bd, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializerbd505bd) || 1) && $this->valueHolderbd505bd = $valueHolderbd505bd;

        return $this->valueHolderbd505bd->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializerbd505bd && ($this->initializerbd505bd->__invoke($valueHolderbd505bd, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializerbd505bd) || 1) && $this->valueHolderbd505bd = $valueHolderbd505bd;

        return $this->valueHolderbd505bd->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializerbd505bd && ($this->initializerbd505bd->__invoke($valueHolderbd505bd, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializerbd505bd) || 1) && $this->valueHolderbd505bd = $valueHolderbd505bd;

        return $this->valueHolderbd505bd->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializerbd505bd && ($this->initializerbd505bd->__invoke($valueHolderbd505bd, $this, 'clear', array(), $this->initializerbd505bd) || 1) && $this->valueHolderbd505bd = $valueHolderbd505bd;

        return $this->valueHolderbd505bd->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbd505bd && ($this->initializerbd505bd->__invoke($valueHolderbd505bd, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbd505bd) || 1) && $this->valueHolderbd505bd = $valueHolderbd505bd;

        return $this->valueHolderbd505bd->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializerbd505bd && ($this->initializerbd505bd->__invoke($valueHolderbd505bd, $this, 'findAll', array(), $this->initializerbd505bd) || 1) && $this->valueHolderbd505bd = $valueHolderbd505bd;

        return $this->valueHolderbd505bd->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializerbd505bd && ($this->initializerbd505bd->__invoke($valueHolderbd505bd, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializerbd505bd) || 1) && $this->valueHolderbd505bd = $valueHolderbd505bd;

        return $this->valueHolderbd505bd->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializerbd505bd && ($this->initializerbd505bd->__invoke($valueHolderbd505bd, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializerbd505bd) || 1) && $this->valueHolderbd505bd = $valueHolderbd505bd;

        return $this->valueHolderbd505bd->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializerbd505bd && ($this->initializerbd505bd->__invoke($valueHolderbd505bd, $this, 'count', array('criteria' => $criteria), $this->initializerbd505bd) || 1) && $this->valueHolderbd505bd = $valueHolderbd505bd;

        return $this->valueHolderbd505bd->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializerbd505bd && ($this->initializerbd505bd->__invoke($valueHolderbd505bd, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializerbd505bd) || 1) && $this->valueHolderbd505bd = $valueHolderbd505bd;

        return $this->valueHolderbd505bd->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializerbd505bd && ($this->initializerbd505bd->__invoke($valueHolderbd505bd, $this, 'getClassName', array(), $this->initializerbd505bd) || 1) && $this->valueHolderbd505bd = $valueHolderbd505bd;

        return $this->valueHolderbd505bd->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializerbd505bd && ($this->initializerbd505bd->__invoke($valueHolderbd505bd, $this, 'matching', array('criteria' => $criteria), $this->initializerbd505bd) || 1) && $this->valueHolderbd505bd = $valueHolderbd505bd;

        return $this->valueHolderbd505bd->matching($criteria);
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

        $instance->initializerbd505bd = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolderbd505bd) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Repository\\ProcessActivityRepository');
            $this->valueHolderbd505bd = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolderbd505bd->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerbd505bd && ($this->initializerbd505bd->__invoke($valueHolderbd505bd, $this, '__get', ['name' => $name], $this->initializerbd505bd) || 1) && $this->valueHolderbd505bd = $valueHolderbd505bd;

        if (isset(self::$publicPropertiesbd505bd[$name])) {
            return $this->valueHolderbd505bd->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbd505bd;

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

        $targetObject = $this->valueHolderbd505bd;
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
        $this->initializerbd505bd && ($this->initializerbd505bd->__invoke($valueHolderbd505bd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbd505bd) || 1) && $this->valueHolderbd505bd = $valueHolderbd505bd;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbd505bd;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderbd505bd;
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
        $this->initializerbd505bd && ($this->initializerbd505bd->__invoke($valueHolderbd505bd, $this, '__isset', array('name' => $name), $this->initializerbd505bd) || 1) && $this->valueHolderbd505bd = $valueHolderbd505bd;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbd505bd;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderbd505bd;
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
        $this->initializerbd505bd && ($this->initializerbd505bd->__invoke($valueHolderbd505bd, $this, '__unset', array('name' => $name), $this->initializerbd505bd) || 1) && $this->valueHolderbd505bd = $valueHolderbd505bd;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbd505bd;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderbd505bd;
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
        $this->initializerbd505bd && ($this->initializerbd505bd->__invoke($valueHolderbd505bd, $this, '__clone', array(), $this->initializerbd505bd) || 1) && $this->valueHolderbd505bd = $valueHolderbd505bd;

        $this->valueHolderbd505bd = clone $this->valueHolderbd505bd;
    }

    public function __sleep()
    {
        $this->initializerbd505bd && ($this->initializerbd505bd->__invoke($valueHolderbd505bd, $this, '__sleep', array(), $this->initializerbd505bd) || 1) && $this->valueHolderbd505bd = $valueHolderbd505bd;

        return array('valueHolderbd505bd');
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
        $this->initializerbd505bd = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerbd505bd;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerbd505bd && ($this->initializerbd505bd->__invoke($valueHolderbd505bd, $this, 'initializeProxy', array(), $this->initializerbd505bd) || 1) && $this->valueHolderbd505bd = $valueHolderbd505bd;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbd505bd;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbd505bd;
    }


}
