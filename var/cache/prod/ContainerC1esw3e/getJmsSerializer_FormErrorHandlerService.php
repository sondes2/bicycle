<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'jms_serializer.form_error_handler' shared service.

include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\Handler\\SubscribingHandlerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\Handler\\FormErrorHandler.php';

return $this->services['jms_serializer.form_error_handler'] = new \JMS\Serializer\Handler\FormErrorHandler(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, 'validators');
