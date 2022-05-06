<?php

namespace ContainerBtQgKVE;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc9b42 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2571e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc300c = [
        
    ];

    public function getConnection()
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'getConnection', array(), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'getMetadataFactory', array(), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'getExpressionBuilder', array(), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'beginTransaction', array(), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'getCache', array(), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'transactional', array('func' => $func), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'commit', array(), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->commit();
    }

    public function rollback()
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'rollback', array(), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'getClassMetadata', array('className' => $className), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'createQuery', array('dql' => $dql), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'createNamedQuery', array('name' => $name), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'createQueryBuilder', array(), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'flush', array('entity' => $entity), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'clear', array('entityName' => $entityName), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->clear($entityName);
    }

    public function close()
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'close', array(), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->close();
    }

    public function persist($entity)
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'persist', array('entity' => $entity), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'remove', array('entity' => $entity), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'refresh', array('entity' => $entity), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'detach', array('entity' => $entity), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'merge', array('entity' => $entity), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'contains', array('entity' => $entity), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'getEventManager', array(), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'getConfiguration', array(), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'isOpen', array(), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'getUnitOfWork', array(), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'getProxyFactory', array(), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'initializeObject', array('obj' => $obj), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'getFilters', array(), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'isFiltersStateClean', array(), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'hasFilters', array(), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return $this->valueHolderc9b42->hasFilters();
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
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer2571e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc9b42) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc9b42 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc9b42->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, '__get', ['name' => $name], $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        if (isset(self::$publicPropertiesc300c[$name])) {
            return $this->valueHolderc9b42->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc9b42;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc9b42;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc9b42;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc9b42;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, '__isset', array('name' => $name), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc9b42;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc9b42;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, '__unset', array('name' => $name), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc9b42;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc9b42;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, '__clone', array(), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        $this->valueHolderc9b42 = clone $this->valueHolderc9b42;
    }

    public function __sleep()
    {
        $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, '__sleep', array(), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;

        return array('valueHolderc9b42');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2571e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2571e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2571e && ($this->initializer2571e->__invoke($valueHolderc9b42, $this, 'initializeProxy', array(), $this->initializer2571e) || 1) && $this->valueHolderc9b42 = $valueHolderc9b42;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc9b42;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc9b42;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
