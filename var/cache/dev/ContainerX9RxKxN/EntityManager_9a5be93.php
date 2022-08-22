<?php

namespace ContainerX9RxKxN;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder09129 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc2416 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties36b0b = [
        
    ];

    public function getConnection()
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'getConnection', array(), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'getMetadataFactory', array(), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'getExpressionBuilder', array(), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'beginTransaction', array(), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'getCache', array(), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'transactional', array('func' => $func), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'commit', array(), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->commit();
    }

    public function rollback()
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'rollback', array(), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'getClassMetadata', array('className' => $className), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'createQuery', array('dql' => $dql), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'createNamedQuery', array('name' => $name), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'createQueryBuilder', array(), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'flush', array('entity' => $entity), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'clear', array('entityName' => $entityName), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->clear($entityName);
    }

    public function close()
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'close', array(), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->close();
    }

    public function persist($entity)
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'persist', array('entity' => $entity), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'remove', array('entity' => $entity), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'refresh', array('entity' => $entity), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'detach', array('entity' => $entity), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'merge', array('entity' => $entity), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'contains', array('entity' => $entity), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'getEventManager', array(), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'getConfiguration', array(), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'isOpen', array(), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'getUnitOfWork', array(), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'getProxyFactory', array(), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'initializeObject', array('obj' => $obj), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'getFilters', array(), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'isFiltersStateClean', array(), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'hasFilters', array(), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return $this->valueHolder09129->hasFilters();
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

        $instance->initializerc2416 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder09129) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder09129 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder09129->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, '__get', ['name' => $name], $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        if (isset(self::$publicProperties36b0b[$name])) {
            return $this->valueHolder09129->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder09129;

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

        $targetObject = $this->valueHolder09129;
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
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder09129;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder09129;
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
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, '__isset', array('name' => $name), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder09129;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder09129;
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
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, '__unset', array('name' => $name), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder09129;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder09129;
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
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, '__clone', array(), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        $this->valueHolder09129 = clone $this->valueHolder09129;
    }

    public function __sleep()
    {
        $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, '__sleep', array(), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;

        return array('valueHolder09129');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc2416 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc2416;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc2416 && ($this->initializerc2416->__invoke($valueHolder09129, $this, 'initializeProxy', array(), $this->initializerc2416) || 1) && $this->valueHolder09129 = $valueHolder09129;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder09129;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder09129;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
