<?php

class FaqQuestionRepository_e51b058 extends \AppBundle\Repository\FaqQuestionRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHoldere51b058 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere51b058 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese51b058 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializere51b058 && ($this->initializere51b058->__invoke($valueHoldere51b058, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializere51b058) || 1) && $this->valueHoldere51b058 = $valueHoldere51b058;

        return $this->valueHoldere51b058->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializere51b058 && ($this->initializere51b058->__invoke($valueHoldere51b058, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializere51b058) || 1) && $this->valueHoldere51b058 = $valueHoldere51b058;

        return $this->valueHoldere51b058->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializere51b058 && ($this->initializere51b058->__invoke($valueHoldere51b058, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializere51b058) || 1) && $this->valueHoldere51b058 = $valueHoldere51b058;

        return $this->valueHoldere51b058->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializere51b058 && ($this->initializere51b058->__invoke($valueHoldere51b058, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializere51b058) || 1) && $this->valueHoldere51b058 = $valueHoldere51b058;

        return $this->valueHoldere51b058->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializere51b058 && ($this->initializere51b058->__invoke($valueHoldere51b058, $this, 'clear', array(), $this->initializere51b058) || 1) && $this->valueHoldere51b058 = $valueHoldere51b058;

        return $this->valueHoldere51b058->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere51b058 && ($this->initializere51b058->__invoke($valueHoldere51b058, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere51b058) || 1) && $this->valueHoldere51b058 = $valueHoldere51b058;

        return $this->valueHoldere51b058->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializere51b058 && ($this->initializere51b058->__invoke($valueHoldere51b058, $this, 'findAll', array(), $this->initializere51b058) || 1) && $this->valueHoldere51b058 = $valueHoldere51b058;

        return $this->valueHoldere51b058->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializere51b058 && ($this->initializere51b058->__invoke($valueHoldere51b058, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializere51b058) || 1) && $this->valueHoldere51b058 = $valueHoldere51b058;

        return $this->valueHoldere51b058->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializere51b058 && ($this->initializere51b058->__invoke($valueHoldere51b058, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializere51b058) || 1) && $this->valueHoldere51b058 = $valueHoldere51b058;

        return $this->valueHoldere51b058->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializere51b058 && ($this->initializere51b058->__invoke($valueHoldere51b058, $this, 'count', array('criteria' => $criteria), $this->initializere51b058) || 1) && $this->valueHoldere51b058 = $valueHoldere51b058;

        return $this->valueHoldere51b058->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializere51b058 && ($this->initializere51b058->__invoke($valueHoldere51b058, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializere51b058) || 1) && $this->valueHoldere51b058 = $valueHoldere51b058;

        return $this->valueHoldere51b058->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializere51b058 && ($this->initializere51b058->__invoke($valueHoldere51b058, $this, 'getClassName', array(), $this->initializere51b058) || 1) && $this->valueHoldere51b058 = $valueHoldere51b058;

        return $this->valueHoldere51b058->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializere51b058 && ($this->initializere51b058->__invoke($valueHoldere51b058, $this, 'matching', array('criteria' => $criteria), $this->initializere51b058) || 1) && $this->valueHoldere51b058 = $valueHoldere51b058;

        return $this->valueHoldere51b058->matching($criteria);
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

        $instance->initializere51b058 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHoldere51b058) {
            $reflection = $reflection ?? new \ReflectionClass('AppBundle\\Repository\\FaqQuestionRepository');
            $this->valueHoldere51b058 = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHoldere51b058->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializere51b058 && ($this->initializere51b058->__invoke($valueHoldere51b058, $this, '__get', ['name' => $name], $this->initializere51b058) || 1) && $this->valueHoldere51b058 = $valueHoldere51b058;

        if (isset(self::$publicPropertiese51b058[$name])) {
            return $this->valueHoldere51b058->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere51b058;

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

        $targetObject = $this->valueHoldere51b058;
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
        $this->initializere51b058 && ($this->initializere51b058->__invoke($valueHoldere51b058, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere51b058) || 1) && $this->valueHoldere51b058 = $valueHoldere51b058;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere51b058;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHoldere51b058;
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
        $this->initializere51b058 && ($this->initializere51b058->__invoke($valueHoldere51b058, $this, '__isset', array('name' => $name), $this->initializere51b058) || 1) && $this->valueHoldere51b058 = $valueHoldere51b058;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere51b058;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldere51b058;
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
        $this->initializere51b058 && ($this->initializere51b058->__invoke($valueHoldere51b058, $this, '__unset', array('name' => $name), $this->initializere51b058) || 1) && $this->valueHoldere51b058 = $valueHoldere51b058;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere51b058;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldere51b058;
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
        $this->initializere51b058 && ($this->initializere51b058->__invoke($valueHoldere51b058, $this, '__clone', array(), $this->initializere51b058) || 1) && $this->valueHoldere51b058 = $valueHoldere51b058;

        $this->valueHoldere51b058 = clone $this->valueHoldere51b058;
    }

    public function __sleep()
    {
        $this->initializere51b058 && ($this->initializere51b058->__invoke($valueHoldere51b058, $this, '__sleep', array(), $this->initializere51b058) || 1) && $this->valueHoldere51b058 = $valueHoldere51b058;

        return array('valueHoldere51b058');
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
        $this->initializere51b058 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializere51b058;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializere51b058 && ($this->initializere51b058->__invoke($valueHoldere51b058, $this, 'initializeProxy', array(), $this->initializere51b058) || 1) && $this->valueHoldere51b058 = $valueHoldere51b058;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere51b058;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere51b058;
    }


}
