<?php

class TariffRepository_b4e0c9c extends \Main\InsuranceBundle\Repository\TariffRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderb4e0c9c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb4e0c9c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb4e0c9c = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function findTariffsByUserId($id = null)
    {
        $this->initializerb4e0c9c && ($this->initializerb4e0c9c->__invoke($valueHolderb4e0c9c, $this, 'findTariffsByUserId', array('id' => $id), $this->initializerb4e0c9c) || 1) && $this->valueHolderb4e0c9c = $valueHolderb4e0c9c;

        return $this->valueHolderb4e0c9c->findTariffsByUserId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function findTargetGroupsByTariffId($id = null)
    {
        $this->initializerb4e0c9c && ($this->initializerb4e0c9c->__invoke($valueHolderb4e0c9c, $this, 'findTargetGroupsByTariffId', array('id' => $id), $this->initializerb4e0c9c) || 1) && $this->valueHolderb4e0c9c = $valueHolderb4e0c9c;

        return $this->valueHolderb4e0c9c->findTargetGroupsByTariffId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function findTariff($id = null)
    {
        $this->initializerb4e0c9c && ($this->initializerb4e0c9c->__invoke($valueHolderb4e0c9c, $this, 'findTariff', array('id' => $id), $this->initializerb4e0c9c) || 1) && $this->valueHolderb4e0c9c = $valueHolderb4e0c9c;

        return $this->valueHolderb4e0c9c->findTariff($id);
    }

    /**
     * {@inheritDoc}
     */
    public function findTariffsWithTargetGroupsByType($typeId = null)
    {
        $this->initializerb4e0c9c && ($this->initializerb4e0c9c->__invoke($valueHolderb4e0c9c, $this, 'findTariffsWithTargetGroupsByType', array('typeId' => $typeId), $this->initializerb4e0c9c) || 1) && $this->valueHolderb4e0c9c = $valueHolderb4e0c9c;

        return $this->valueHolderb4e0c9c->findTariffsWithTargetGroupsByType($typeId);
    }

    /**
     * {@inheritDoc}
     */
    public function findTariffsByType($typeId = null)
    {
        $this->initializerb4e0c9c && ($this->initializerb4e0c9c->__invoke($valueHolderb4e0c9c, $this, 'findTariffsByType', array('typeId' => $typeId), $this->initializerb4e0c9c) || 1) && $this->valueHolderb4e0c9c = $valueHolderb4e0c9c;

        return $this->valueHolderb4e0c9c->findTariffsByType($typeId);
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializerb4e0c9c && ($this->initializerb4e0c9c->__invoke($valueHolderb4e0c9c, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializerb4e0c9c) || 1) && $this->valueHolderb4e0c9c = $valueHolderb4e0c9c;

        return $this->valueHolderb4e0c9c->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializerb4e0c9c && ($this->initializerb4e0c9c->__invoke($valueHolderb4e0c9c, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializerb4e0c9c) || 1) && $this->valueHolderb4e0c9c = $valueHolderb4e0c9c;

        return $this->valueHolderb4e0c9c->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializerb4e0c9c && ($this->initializerb4e0c9c->__invoke($valueHolderb4e0c9c, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializerb4e0c9c) || 1) && $this->valueHolderb4e0c9c = $valueHolderb4e0c9c;

        return $this->valueHolderb4e0c9c->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializerb4e0c9c && ($this->initializerb4e0c9c->__invoke($valueHolderb4e0c9c, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializerb4e0c9c) || 1) && $this->valueHolderb4e0c9c = $valueHolderb4e0c9c;

        return $this->valueHolderb4e0c9c->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializerb4e0c9c && ($this->initializerb4e0c9c->__invoke($valueHolderb4e0c9c, $this, 'clear', array(), $this->initializerb4e0c9c) || 1) && $this->valueHolderb4e0c9c = $valueHolderb4e0c9c;

        return $this->valueHolderb4e0c9c->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb4e0c9c && ($this->initializerb4e0c9c->__invoke($valueHolderb4e0c9c, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb4e0c9c) || 1) && $this->valueHolderb4e0c9c = $valueHolderb4e0c9c;

        return $this->valueHolderb4e0c9c->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializerb4e0c9c && ($this->initializerb4e0c9c->__invoke($valueHolderb4e0c9c, $this, 'findAll', array(), $this->initializerb4e0c9c) || 1) && $this->valueHolderb4e0c9c = $valueHolderb4e0c9c;

        return $this->valueHolderb4e0c9c->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializerb4e0c9c && ($this->initializerb4e0c9c->__invoke($valueHolderb4e0c9c, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializerb4e0c9c) || 1) && $this->valueHolderb4e0c9c = $valueHolderb4e0c9c;

        return $this->valueHolderb4e0c9c->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializerb4e0c9c && ($this->initializerb4e0c9c->__invoke($valueHolderb4e0c9c, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializerb4e0c9c) || 1) && $this->valueHolderb4e0c9c = $valueHolderb4e0c9c;

        return $this->valueHolderb4e0c9c->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializerb4e0c9c && ($this->initializerb4e0c9c->__invoke($valueHolderb4e0c9c, $this, 'count', array('criteria' => $criteria), $this->initializerb4e0c9c) || 1) && $this->valueHolderb4e0c9c = $valueHolderb4e0c9c;

        return $this->valueHolderb4e0c9c->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializerb4e0c9c && ($this->initializerb4e0c9c->__invoke($valueHolderb4e0c9c, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializerb4e0c9c) || 1) && $this->valueHolderb4e0c9c = $valueHolderb4e0c9c;

        return $this->valueHolderb4e0c9c->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializerb4e0c9c && ($this->initializerb4e0c9c->__invoke($valueHolderb4e0c9c, $this, 'getClassName', array(), $this->initializerb4e0c9c) || 1) && $this->valueHolderb4e0c9c = $valueHolderb4e0c9c;

        return $this->valueHolderb4e0c9c->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializerb4e0c9c && ($this->initializerb4e0c9c->__invoke($valueHolderb4e0c9c, $this, 'matching', array('criteria' => $criteria), $this->initializerb4e0c9c) || 1) && $this->valueHolderb4e0c9c = $valueHolderb4e0c9c;

        return $this->valueHolderb4e0c9c->matching($criteria);
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

        $instance->initializerb4e0c9c = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolderb4e0c9c) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Repository\\TariffRepository');
            $this->valueHolderb4e0c9c = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolderb4e0c9c->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerb4e0c9c && ($this->initializerb4e0c9c->__invoke($valueHolderb4e0c9c, $this, '__get', ['name' => $name], $this->initializerb4e0c9c) || 1) && $this->valueHolderb4e0c9c = $valueHolderb4e0c9c;

        if (isset(self::$publicPropertiesb4e0c9c[$name])) {
            return $this->valueHolderb4e0c9c->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb4e0c9c;

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

        $targetObject = $this->valueHolderb4e0c9c;
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
        $this->initializerb4e0c9c && ($this->initializerb4e0c9c->__invoke($valueHolderb4e0c9c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb4e0c9c) || 1) && $this->valueHolderb4e0c9c = $valueHolderb4e0c9c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb4e0c9c;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderb4e0c9c;
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
        $this->initializerb4e0c9c && ($this->initializerb4e0c9c->__invoke($valueHolderb4e0c9c, $this, '__isset', array('name' => $name), $this->initializerb4e0c9c) || 1) && $this->valueHolderb4e0c9c = $valueHolderb4e0c9c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb4e0c9c;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderb4e0c9c;
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
        $this->initializerb4e0c9c && ($this->initializerb4e0c9c->__invoke($valueHolderb4e0c9c, $this, '__unset', array('name' => $name), $this->initializerb4e0c9c) || 1) && $this->valueHolderb4e0c9c = $valueHolderb4e0c9c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb4e0c9c;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderb4e0c9c;
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
        $this->initializerb4e0c9c && ($this->initializerb4e0c9c->__invoke($valueHolderb4e0c9c, $this, '__clone', array(), $this->initializerb4e0c9c) || 1) && $this->valueHolderb4e0c9c = $valueHolderb4e0c9c;

        $this->valueHolderb4e0c9c = clone $this->valueHolderb4e0c9c;
    }

    public function __sleep()
    {
        $this->initializerb4e0c9c && ($this->initializerb4e0c9c->__invoke($valueHolderb4e0c9c, $this, '__sleep', array(), $this->initializerb4e0c9c) || 1) && $this->valueHolderb4e0c9c = $valueHolderb4e0c9c;

        return array('valueHolderb4e0c9c');
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
        $this->initializerb4e0c9c = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerb4e0c9c;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerb4e0c9c && ($this->initializerb4e0c9c->__invoke($valueHolderb4e0c9c, $this, 'initializeProxy', array(), $this->initializerb4e0c9c) || 1) && $this->valueHolderb4e0c9c = $valueHolderb4e0c9c;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb4e0c9c;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb4e0c9c;
    }


}
