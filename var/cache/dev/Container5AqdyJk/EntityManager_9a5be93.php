<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder4c5a2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer693dd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc7b7a = [
        
    ];

    public function getConnection()
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'getConnection', array(), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'getMetadataFactory', array(), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'getExpressionBuilder', array(), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'beginTransaction', array(), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'getCache', array(), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->getCache();
    }

    public function transactional($func)
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'transactional', array('func' => $func), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->transactional($func);
    }

    public function commit()
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'commit', array(), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->commit();
    }

    public function rollback()
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'rollback', array(), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'getClassMetadata', array('className' => $className), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'createQuery', array('dql' => $dql), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'createNamedQuery', array('name' => $name), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'createQueryBuilder', array(), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'flush', array('entity' => $entity), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'clear', array('entityName' => $entityName), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->clear($entityName);
    }

    public function close()
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'close', array(), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->close();
    }

    public function persist($entity)
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'persist', array('entity' => $entity), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'remove', array('entity' => $entity), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'refresh', array('entity' => $entity), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'detach', array('entity' => $entity), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'merge', array('entity' => $entity), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'getRepository', array('entityName' => $entityName), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'contains', array('entity' => $entity), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'getEventManager', array(), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'getConfiguration', array(), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'isOpen', array(), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'getUnitOfWork', array(), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'getProxyFactory', array(), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'initializeObject', array('obj' => $obj), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'getFilters', array(), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'isFiltersStateClean', array(), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'hasFilters', array(), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return $this->valueHolder4c5a2->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer693dd = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4c5a2) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4c5a2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4c5a2->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, '__get', ['name' => $name], $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        if (isset(self::$publicPropertiesc7b7a[$name])) {
            return $this->valueHolder4c5a2->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4c5a2;

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

        $targetObject = $this->valueHolder4c5a2;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4c5a2;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder4c5a2;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, '__isset', array('name' => $name), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4c5a2;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder4c5a2;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, '__unset', array('name' => $name), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4c5a2;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder4c5a2;
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
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, '__clone', array(), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        $this->valueHolder4c5a2 = clone $this->valueHolder4c5a2;
    }

    public function __sleep()
    {
        $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, '__sleep', array(), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;

        return array('valueHolder4c5a2');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer693dd = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializer693dd;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer693dd && ($this->initializer693dd->__invoke($valueHolder4c5a2, $this, 'initializeProxy', array(), $this->initializer693dd) || 1) && $this->valueHolder4c5a2 = $valueHolder4c5a2;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4c5a2;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder4c5a2;
    }


}
