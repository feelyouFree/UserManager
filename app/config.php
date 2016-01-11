<?php
use DI\ContainerBuilder;

$containerBuilder = new ContainerBuilder;
$containerBuilder->addDefinitions(__DIR__ . '/bootstrap.php');
$container = $containerBuilder->build();
return $container;
