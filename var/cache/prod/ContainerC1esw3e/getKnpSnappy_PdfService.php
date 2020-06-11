<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'knp_snappy.pdf' shared service.

include_once $this->targetDirs[3].'\\vendor\\knplabs\\knp-snappy\\src\\Knp\\Snappy\\GeneratorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\psr\\log\\Psr\\Log\\LoggerAwareInterface.php';
include_once $this->targetDirs[3].'\\vendor\\knplabs\\knp-snappy\\src\\Knp\\Snappy\\AbstractGenerator.php';
include_once $this->targetDirs[3].'\\vendor\\knplabs\\knp-snappy\\src\\Knp\\Snappy\\Pdf.php';

$this->services['knp_snappy.pdf'] = $instance = new \Knp\Snappy\Pdf('"C:\\Program Files\\wkhtmltopdf\\bin\\wkhtmltopdf.exe"', [], []);

$instance->setLogger(${($_ = isset($this->services['monolog.logger.snappy']) ? $this->services['monolog.logger.snappy'] : $this->load('getMonolog_Logger_SnappyService.php')) && false ?: '_'});

return $instance;
