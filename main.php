<?php

use App\Dialogue\Dialogue;
use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Component\Map\Map;
use Jugid\Staurie\Staurie;
use Jugid\Staurie\Container;

require_once __DIR__ . '/vendor/autoload.php';
define("SRC_DIR", __DIR__);

$staurie = new Staurie('Murder in the Shell');

$staurie->register([
    Console::class,
    PrettyPrinter::class,
    Menu::class,
    Map::class,
]);

$container = $staurie->getContainer();

$map = $container->registerComponent(Map::class);
$map->configuration([
    'directory' => __DIR__ . '/src/Maps',
    'namespace' => 'App\Maps',
    'x_start'   => 0,
    'y_start'   => 0,
    'navigation' => true,
    'map_enable' => true,
    'compass_enable' => true
]);

$map->setPriority(0);
$map->setContainer($staurie->getContainer());

$dialogue = $container->registerComponent(Dialogue::class);
$dialogue->configuration([
    'scenario_dir' => __DIR__ . '/scenarios'
]);

$dispatcher = $container->dispatcher();
/*$result = $dispatcher->dispatch('scenario.start', ['scenario' => 'scenario1']);
$result = $dispatcher->dispatch('npc.talk', ['npc' => 'Professor Plum', 'dialogue' => 'dialogue1']);*/

$staurie->run();
