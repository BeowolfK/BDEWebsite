<?php

namespace ContainerPgaal3a;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderaf09d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9a11f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9a82e = [
        
    ];

    public function getConnection()
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'getConnection', array(), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'getMetadataFactory', array(), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'getExpressionBuilder', array(), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'beginTransaction', array(), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'getCache', array(), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'transactional', array('func' => $func), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'commit', array(), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->commit();
    }

    public function rollback()
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'rollback', array(), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'getClassMetadata', array('className' => $className), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'createQuery', array('dql' => $dql), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'createNamedQuery', array('name' => $name), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'createQueryBuilder', array(), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'flush', array('entity' => $entity), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'clear', array('entityName' => $entityName), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->clear($entityName);
    }

    public function close()
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'close', array(), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->close();
    }

    public function persist($entity)
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'persist', array('entity' => $entity), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'remove', array('entity' => $entity), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'refresh', array('entity' => $entity), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'detach', array('entity' => $entity), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'merge', array('entity' => $entity), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'contains', array('entity' => $entity), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'getEventManager', array(), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'getConfiguration', array(), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'isOpen', array(), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'getUnitOfWork', array(), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'getProxyFactory', array(), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'initializeObject', array('obj' => $obj), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'getFilters', array(), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'isFiltersStateClean', array(), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'hasFilters', array(), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return $this->valueHolderaf09d->hasFilters();
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

        $instance->initializer9a11f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderaf09d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderaf09d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderaf09d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, '__get', ['name' => $name], $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        if (isset(self::$publicProperties9a82e[$name])) {
            return $this->valueHolderaf09d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaf09d;

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

        $targetObject = $this->valueHolderaf09d;
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
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaf09d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderaf09d;
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
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, '__isset', array('name' => $name), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaf09d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderaf09d;
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
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, '__unset', array('name' => $name), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaf09d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderaf09d;
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
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, '__clone', array(), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        $this->valueHolderaf09d = clone $this->valueHolderaf09d;
    }

    public function __sleep()
    {
        $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, '__sleep', array(), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;

        return array('valueHolderaf09d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9a11f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9a11f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9a11f && ($this->initializer9a11f->__invoke($valueHolderaf09d, $this, 'initializeProxy', array(), $this->initializer9a11f) || 1) && $this->valueHolderaf09d = $valueHolderaf09d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderaf09d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderaf09d;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
