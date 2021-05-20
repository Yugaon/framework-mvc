<?php

namespace ContainerI46IYYQ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8511c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4061a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties53c81 = [
        
    ];

    public function getConnection()
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'getConnection', array(), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'getMetadataFactory', array(), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'getExpressionBuilder', array(), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'beginTransaction', array(), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'getCache', array(), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'transactional', array('func' => $func), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->transactional($func);
    }

    public function commit()
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'commit', array(), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->commit();
    }

    public function rollback()
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'rollback', array(), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'getClassMetadata', array('className' => $className), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'createQuery', array('dql' => $dql), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'createNamedQuery', array('name' => $name), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'createQueryBuilder', array(), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'flush', array('entity' => $entity), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'clear', array('entityName' => $entityName), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->clear($entityName);
    }

    public function close()
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'close', array(), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->close();
    }

    public function persist($entity)
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'persist', array('entity' => $entity), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'remove', array('entity' => $entity), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'refresh', array('entity' => $entity), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'detach', array('entity' => $entity), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'merge', array('entity' => $entity), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'contains', array('entity' => $entity), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'getEventManager', array(), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'getConfiguration', array(), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'isOpen', array(), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'getUnitOfWork', array(), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'getProxyFactory', array(), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'initializeObject', array('obj' => $obj), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'getFilters', array(), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'isFiltersStateClean', array(), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'hasFilters', array(), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return $this->valueHolder8511c->hasFilters();
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

        $instance->initializer4061a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8511c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8511c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8511c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, '__get', ['name' => $name], $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        if (isset(self::$publicProperties53c81[$name])) {
            return $this->valueHolder8511c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8511c;

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

        $targetObject = $this->valueHolder8511c;
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
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8511c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8511c;
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
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, '__isset', array('name' => $name), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8511c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8511c;
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
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, '__unset', array('name' => $name), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8511c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8511c;
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
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, '__clone', array(), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        $this->valueHolder8511c = clone $this->valueHolder8511c;
    }

    public function __sleep()
    {
        $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, '__sleep', array(), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;

        return array('valueHolder8511c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4061a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4061a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4061a && ($this->initializer4061a->__invoke($valueHolder8511c, $this, 'initializeProxy', array(), $this->initializer4061a) || 1) && $this->valueHolder8511c = $valueHolder8511c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8511c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8511c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
