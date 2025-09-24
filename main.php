<?php

use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Component\Map\Map;
use Jugid\Staurie\Staurie;
use Jugid\Staurie\Container;

require_once __DIR__ . '/vendor/autoload.php';

$staurie = new Staurie('Murder in the Shell');

$staurie->register([
    Console::class,
    PrettyPrinter::class,
    Menu::class,
    Map::class,
]);

$map = $staurie->getContainer()->getMap();
if ($map === null) {
    throw new RuntimeException('Map component not found in container after register().');
}

$map->configuration([
    'directory' => __DIR__ . '/src/Maps',
    'namespace' => 'Mourad\\MurderShell\\Maps',
    'x_start'   => 0,
    'y_start'   => 0,
    'navigation' => true,
    'map_enable' => true,
    'compass_enable' => true
]);

$map->setPriority(0);
$map->setContainer($staurie->getContainer());

$staurie->run();
