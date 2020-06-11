<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'jms_serializer' shared service.

include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\SerializerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\ArrayTransformerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\Serializer.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\MetadataFactoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\AdvancedMetadataFactoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\MetadataFactory.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\Driver\\DriverInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\Driver\\LazyLoadingDriver.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\Cache\\CacheInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\Cache\\FileCache.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\GraphNavigator\\Factory\\GraphNavigatorFactoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\GraphNavigator\\Factory\\DeserializationGraphNavigatorFactory.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\Accessor\\AccessorStrategyInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\Accessor\\DefaultAccessorStrategy.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\EventDispatcher\\EventDispatcherInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\EventDispatcher\\EventDispatcher.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\EventDispatcher\\LazyEventDispatcher.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\GraphNavigator\\Factory\\SerializationGraphNavigatorFactory.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\Visitor\\Factory\\SerializationVisitorFactory.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\Visitor\\Factory\\JsonSerializationVisitorFactory.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\Visitor\\Factory\\XmlSerializationVisitorFactory.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\Visitor\\Factory\\DeserializationVisitorFactory.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\Visitor\\Factory\\JsonDeserializationVisitorFactory.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\Visitor\\Factory\\XmlDeserializationVisitorFactory.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\Construction\\ObjectConstructorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\Construction\\UnserializeObjectConstructor.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\ContextFactory\\SerializationContextFactoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\ContextFactory\\DeserializationContextFactoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer-bundle\\ContextFactory\\ConfiguredContextFactory.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\Type\\ParserInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\Type\\Parser.php';

$a = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_serializer.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', false);
$a->setCache(new \Metadata\Cache\FileCache(($this->targetDirs[0].'/jms_serializer')));
$b = ${($_ = isset($this->services['jms_serializer.handler_registry']) ? $this->services['jms_serializer.handler_registry'] : $this->load('getJmsSerializer_HandlerRegistryService.php')) && false ?: '_'};
$c = ${($_ = isset($this->services['jms_serializer.expression_evaluator']) ? $this->services['jms_serializer.expression_evaluator'] : $this->load('getJmsSerializer_ExpressionEvaluatorService.php')) && false ?: '_'};

$d = new \JMS\Serializer\Accessor\DefaultAccessorStrategy($c);
$e = new \JMS\Serializer\EventDispatcher\LazyEventDispatcher(new \Symfony\Component\DependencyInjection\ServiceLocator(['jms_serializer.doctrine_proxy_subscriber' => function () {
    return ${($_ = isset($this->services['jms_serializer.doctrine_proxy_subscriber']) ? $this->services['jms_serializer.doctrine_proxy_subscriber'] : ($this->services['jms_serializer.doctrine_proxy_subscriber'] = new \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber(true, false))) && false ?: '_'};
}]));
$e->setListeners(['serializer.pre_serialize' => [0 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerializeTypedProxy'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\Common\\Persistence\\Proxy'], 1 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\ORM\\PersistentCollection'], 2 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\ODM\\MongoDB\\PersistentCollection'], 3 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\ODM\\PHPCR\\PersistentCollection'], 4 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\Common\\Persistence\\Proxy'], 5 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'ProxyManager\\Proxy\\LazyLoadingInterface']]]);
$f = new \JMS\Serializer\Visitor\Factory\JsonSerializationVisitorFactory();
$f->setOptions(1024);
$g = new \JMS\Serializer\Visitor\Factory\JsonDeserializationVisitorFactory();
$g->setOptions(0);

return $this->services['jms_serializer'] = new \JMS\Serializer\Serializer($a, [2 => new \JMS\Serializer\GraphNavigator\Factory\DeserializationGraphNavigatorFactory($a, $b, ${($_ = isset($this->services['jms_serializer.unserialize_object_constructor']) ? $this->services['jms_serializer.unserialize_object_constructor'] : ($this->services['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor())) && false ?: '_'}, $d, $e, $c), 1 => new \JMS\Serializer\GraphNavigator\Factory\SerializationGraphNavigatorFactory($a, $b, $d, $e, $c)], ['json' => $f, 'xml' => new \JMS\Serializer\Visitor\Factory\XmlSerializationVisitorFactory()], ['json' => $g, 'xml' => new \JMS\Serializer\Visitor\Factory\XmlDeserializationVisitorFactory()], ${($_ = isset($this->services['jms_serializer.serialization_context_factory']) ? $this->services['jms_serializer.serialization_context_factory'] : ($this->services['jms_serializer.serialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())) && false ?: '_'}, ${($_ = isset($this->services['jms_serializer.deserialization_context_factory']) ? $this->services['jms_serializer.deserialization_context_factory'] : ($this->services['jms_serializer.deserialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())) && false ?: '_'}, ${($_ = isset($this->services['jms_serializer.type_parser']) ? $this->services['jms_serializer.type_parser'] : ($this->services['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser())) && false ?: '_'});
