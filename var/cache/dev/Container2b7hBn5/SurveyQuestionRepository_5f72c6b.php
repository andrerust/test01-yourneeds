<?php

class SurveyQuestionRepository_5f72c6b extends \Main\InsuranceBundle\Repository\SurveyQuestionRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder5f72c6b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5f72c6b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5f72c6b = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer5f72c6b && ($this->initializer5f72c6b->__invoke($valueHolder5f72c6b, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer5f72c6b) || 1) && $this->valueHolder5f72c6b = $valueHolder5f72c6b;

        return $this->valueHolder5f72c6b->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer5f72c6b && ($this->initializer5f72c6b->__invoke($valueHolder5f72c6b, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer5f72c6b) || 1) && $this->valueHolder5f72c6b = $valueHolder5f72c6b;

        return $this->valueHolder5f72c6b->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializer5f72c6b && ($this->initializer5f72c6b->__invoke($valueHolder5f72c6b, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer5f72c6b) || 1) && $this->valueHolder5f72c6b = $valueHolder5f72c6b;

        return $this->valueHolder5f72c6b->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializer5f72c6b && ($this->initializer5f72c6b->__invoke($valueHolder5f72c6b, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer5f72c6b) || 1) && $this->valueHolder5f72c6b = $valueHolder5f72c6b;

        return $this->valueHolder5f72c6b->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializer5f72c6b && ($this->initializer5f72c6b->__invoke($valueHolder5f72c6b, $this, 'clear', array(), $this->initializer5f72c6b) || 1) && $this->valueHolder5f72c6b = $valueHolder5f72c6b;

        return $this->valueHolder5f72c6b->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5f72c6b && ($this->initializer5f72c6b->__invoke($valueHolder5f72c6b, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5f72c6b) || 1) && $this->valueHolder5f72c6b = $valueHolder5f72c6b;

        return $this->valueHolder5f72c6b->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializer5f72c6b && ($this->initializer5f72c6b->__invoke($valueHolder5f72c6b, $this, 'findAll', array(), $this->initializer5f72c6b) || 1) && $this->valueHolder5f72c6b = $valueHolder5f72c6b;

        return $this->valueHolder5f72c6b->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer5f72c6b && ($this->initializer5f72c6b->__invoke($valueHolder5f72c6b, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer5f72c6b) || 1) && $this->valueHolder5f72c6b = $valueHolder5f72c6b;

        return $this->valueHolder5f72c6b->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer5f72c6b && ($this->initializer5f72c6b->__invoke($valueHolder5f72c6b, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer5f72c6b) || 1) && $this->valueHolder5f72c6b = $valueHolder5f72c6b;

        return $this->valueHolder5f72c6b->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializer5f72c6b && ($this->initializer5f72c6b->__invoke($valueHolder5f72c6b, $this, 'count', array('criteria' => $criteria), $this->initializer5f72c6b) || 1) && $this->valueHolder5f72c6b = $valueHolder5f72c6b;

        return $this->valueHolder5f72c6b->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializer5f72c6b && ($this->initializer5f72c6b->__invoke($valueHolder5f72c6b, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer5f72c6b) || 1) && $this->valueHolder5f72c6b = $valueHolder5f72c6b;

        return $this->valueHolder5f72c6b->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializer5f72c6b && ($this->initializer5f72c6b->__invoke($valueHolder5f72c6b, $this, 'getClassName', array(), $this->initializer5f72c6b) || 1) && $this->valueHolder5f72c6b = $valueHolder5f72c6b;

        return $this->valueHolder5f72c6b->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer5f72c6b && ($this->initializer5f72c6b->__invoke($valueHolder5f72c6b, $this, 'matching', array('criteria' => $criteria), $this->initializer5f72c6b) || 1) && $this->valueHolder5f72c6b = $valueHolder5f72c6b;

        return $this->valueHolder5f72c6b->matching($criteria);
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

        $instance->initializer5f72c6b = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolder5f72c6b) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Repository\\SurveyQuestionRepository');
            $this->valueHolder5f72c6b = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolder5f72c6b->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer5f72c6b && ($this->initializer5f72c6b->__invoke($valueHolder5f72c6b, $this, '__get', ['name' => $name], $this->initializer5f72c6b) || 1) && $this->valueHolder5f72c6b = $valueHolder5f72c6b;

        if (isset(self::$publicProperties5f72c6b[$name])) {
            return $this->valueHolder5f72c6b->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f72c6b;

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

        $targetObject = $this->valueHolder5f72c6b;
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
        $this->initializer5f72c6b && ($this->initializer5f72c6b->__invoke($valueHolder5f72c6b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5f72c6b) || 1) && $this->valueHolder5f72c6b = $valueHolder5f72c6b;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f72c6b;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder5f72c6b;
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
        $this->initializer5f72c6b && ($this->initializer5f72c6b->__invoke($valueHolder5f72c6b, $this, '__isset', array('name' => $name), $this->initializer5f72c6b) || 1) && $this->valueHolder5f72c6b = $valueHolder5f72c6b;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f72c6b;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5f72c6b;
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
        $this->initializer5f72c6b && ($this->initializer5f72c6b->__invoke($valueHolder5f72c6b, $this, '__unset', array('name' => $name), $this->initializer5f72c6b) || 1) && $this->valueHolder5f72c6b = $valueHolder5f72c6b;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f72c6b;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5f72c6b;
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
        $this->initializer5f72c6b && ($this->initializer5f72c6b->__invoke($valueHolder5f72c6b, $this, '__clone', array(), $this->initializer5f72c6b) || 1) && $this->valueHolder5f72c6b = $valueHolder5f72c6b;

        $this->valueHolder5f72c6b = clone $this->valueHolder5f72c6b;
    }

    public function __sleep()
    {
        $this->initializer5f72c6b && ($this->initializer5f72c6b->__invoke($valueHolder5f72c6b, $this, '__sleep', array(), $this->initializer5f72c6b) || 1) && $this->valueHolder5f72c6b = $valueHolder5f72c6b;

        return array('valueHolder5f72c6b');
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
        $this->initializer5f72c6b = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer5f72c6b;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer5f72c6b && ($this->initializer5f72c6b->__invoke($valueHolder5f72c6b, $this, 'initializeProxy', array(), $this->initializer5f72c6b) || 1) && $this->valueHolder5f72c6b = $valueHolder5f72c6b;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5f72c6b;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5f72c6b;
    }


}
