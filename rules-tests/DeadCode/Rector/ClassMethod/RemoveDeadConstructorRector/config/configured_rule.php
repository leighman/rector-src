<?php

declare(strict_types=1);

use Rector\DeadCode\Rector\ClassMethod\RemoveDeadConstructorRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(RemoveDeadConstructorRector::class);
};
