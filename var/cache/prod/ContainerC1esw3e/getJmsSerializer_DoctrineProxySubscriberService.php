<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'jms_serializer.doctrine_proxy_subscriber' shared service.

include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\EventDispatcher\\EventSubscriberInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\EventDispatcher\\Subscriber\\DoctrineProxySubscriber.php';

return $this->services['jms_serializer.doctrine_proxy_subscriber'] = new \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber(true, false);
