<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'knp_paginator.templating.helper.pagination' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Templating\\Helper\\HelperInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Templating\\Helper\\Helper.php';
include_once $this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle\\Templating\\PaginationHelper.php';

return $this->services['knp_paginator.templating.helper.pagination'] = new \Knp\Bundle\PaginatorBundle\Templating\PaginationHelper(${($_ = isset($this->services['knp_paginator.helper.processor']) ? $this->services['knp_paginator.helper.processor'] : $this->getKnpPaginator_Helper_ProcessorService()) && false ?: '_'}, ${($_ = isset($this->services['templating.engine.php']) ? $this->services['templating.engine.php'] : $this->load('getTemplating_Engine_PhpService.php')) && false ?: '_'});
