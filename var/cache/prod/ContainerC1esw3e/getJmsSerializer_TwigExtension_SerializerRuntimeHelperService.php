<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'jms_serializer.twig_extension.serializer_runtime_helper' shared service.

include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\Twig\\SerializerRuntimeHelper.php';

return $this->services['jms_serializer.twig_extension.serializer_runtime_helper'] = new \JMS\Serializer\Twig\SerializerRuntimeHelper(${($_ = isset($this->services['jms_serializer']) ? $this->services['jms_serializer'] : $this->load('getJmsSerializerService.php')) && false ?: '_'});
