<?php

declare(strict_types=1);

use Rector\CodingStyle\Rector\FuncCall\CallUserFuncArrayToVariadicRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(CallUserFuncArrayToVariadicRector::class);
};
