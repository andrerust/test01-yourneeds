<?php

class CountryRepository_f452275 extends \Main\UserBundle\Repository\CountryRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderf452275 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf452275 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf452275 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function createAlphabeticalQueryBuilder()
    {
        $this->initializerf452275 && ($this->initializerf452275->__invoke($valueHolderf452275, $this, 'createAlphabeticalQueryBuilder', array(), $this->initializerf452275) || 1) && $this->valueHolderf452275 = $valueHolderf452275;

        return $this->valueHolderf452275->createAlphabeticalQueryBuilder();
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializerf452275 && ($this->initializerf452275->__invoke($valueHolderf452275, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializerf452275) || 1) && $this->valueHolderf452275 = $valueHolderf452275;

        return $this->valueHolderf452275->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializerf452275 && ($this->initializerf452275->__invoke($valueHolderf452275, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializerf452275) || 1) && $this->valueHolderf452275 = $valueHolderf452275;

        return $this->valueHolderf452275->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializerf452275 && ($this->initializerf452275->__invoke($valueHolderf452275, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializerf452275) || 1) && $this->valueHolderf452275 = $valueHolderf452275;

        return $this->valueHolderf452275->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializerf452275 && ($this->initializerf452275->__invoke($valueHolderf452275, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializerf452275) || 1) && $this->valueHolderf452275 = $valueHolderf452275;

        return $this->valueHolderf452275->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializerf452275 && ($this->initializerf452275->__invoke($valueHolderf452275, $this, 'clear', array(), $this->initializerf452275) || 1) && $this->valueHolderf452275 = $valueHolderf452275;

        return $this->valueHolderf452275->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf452275 && ($this->initializerf452275->__invoke($valueHolderf452275, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf452275) || 1) && $this->valueHolderf452275 = $valueHolderf452275;

        return $this->valueHolderf452275->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializerf452275 && ($this->initializerf452275->__invoke($valueHolderf452275, $this, 'findAll', array(), $this->initializerf452275) || 1) && $this->valueHolderf452275 = $valueHolderf452275;

        return $this->valueHolderf452275->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializerf452275 && ($this->initializerf452275->__invoke($valueHolderf452275, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializerf452275) || 1) && $this->valueHolderf452275 = $valueHolderf452275;

        return $this->valueHolderf452275->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializerf452275 && ($this->initializerf452275->__invoke($valueHolderf452275, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializerf452275) || 1) && $this->valueHolderf452275 = $valueHolderf452275;

        return $this->valueHolderf452275->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializerf452275 && ($this->initializerf452275->__invoke($valueHolderf452275, $this, 'count', array('criteria' => $criteria), $this->initializerf452275) || 1) && $this->valueHolderf452275 = $valueHolderf452275;

        return $this->valueHolderf452275->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializerf452275 && ($this->initializerf452275->__invoke($valueHolderf452275, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializerf452275) || 1) && $this->valueHolderf452275 = $valueHolderf452275;

        return $this->valueHolderf452275->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializerf452275 && ($this->initializerf452275->__invoke($valueHolderf452275, $this, 'getClassName', array(), $this->initializerf452275) || 1) && $this->valueHolderf452275 = $valueHolderf452275;

        return $this->valueHolderf452275->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializerf452275 && ($this->initializerf452275->__invoke($valueHolderf452275, $this, 'matching', array('criteria' => $criteria), $this->initializerf452275) || 1) && $this->valueHolderf452275 = $valueHolderf452275;

        return $this->valueHolderf452275->matching($criteria);
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

        $instance->initializerf452275 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolderf452275) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Repository\\CountryRepository');
            $this->valueHolderf452275 = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolderf452275->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerf452275 && ($this->initializerf452275->__invoke($valueHolderf452275, $this, '__get', ['name' => $name], $this->initializerf452275) || 1) && $this->valueHolderf452275 = $valueHolderf452275;

        if (isset(self::$publicPropertiesf452275[$name])) {
            return $this->valueHolderf452275->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf452275;

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

        $targetObject = $this->valueHolderf452275;
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
        $this->initializerf452275 && ($this->initializerf452275->__invoke($valueHolderf452275, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf452275) || 1) && $this->valueHolderf452275 = $valueHolderf452275;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf452275;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderf452275;
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
        $this->initializerf452275 && ($this->initializerf452275->__invoke($valueHolderf452275, $this, '__isset', array('name' => $name), $this->initializerf452275) || 1) && $this->valueHolderf452275 = $valueHolderf452275;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf452275;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderf452275;
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
        $this->initializerf452275 && ($this->initializerf452275->__invoke($valueHolderf452275, $this, '__unset', array('name' => $name), $this->initializerf452275) || 1) && $this->valueHolderf452275 = $valueHolderf452275;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf452275;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderf452275;
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
        $this->initializerf452275 && ($this->initializerf452275->__invoke($valueHolderf452275, $this, '__clone', array(), $this->initializerf452275) || 1) && $this->valueHolderf452275 = $valueHolderf452275;

        $this->valueHolderf452275 = clone $this->valueHolderf452275;
    }

    public function __sleep()
    {
        $this->initializerf452275 && ($this->initializerf452275->__invoke($valueHolderf452275, $this, '__sleep', array(), $this->initializerf452275) || 1) && $this->valueHolderf452275 = $valueHolderf452275;

        return array('valueHolderf452275');
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
        $this->initializerf452275 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerf452275;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerf452275 && ($this->initializerf452275->__invoke($valueHolderf452275, $this, 'initializeProxy', array(), $this->initializerf452275) || 1) && $this->valueHolderf452275 = $valueHolderf452275;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf452275;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf452275;
    }


}
