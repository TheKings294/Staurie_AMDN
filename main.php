<?php

use App\Dialogue\Dialogue;
use App\Items\ItemLoader;
use App\Npcs\NpcLoader;
use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Component\Map\Map;
use \Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Staurie;
use App\Maps;

require_once __DIR__ . '/vendor/autoload.php';
define("SRC_DIR", __DIR__);

$staurie = new Staurie('Murder in the Shell');

$staurie->register([
    Console::class,
    PrettyPrinter::class,
    Menu::class,
    Map::class,
]);

$scenario = 'scenario' . random_int(1, 3);

$itemLoader = new ItemLoader();
$itemListNode = $itemLoader->load($scenario);

$npcLoader = new NpcLoader();
$npcListNode = $npcLoader->load();

$mapsClass = [
  Maps\Coworking::class,
  Maps\Fuji::class,
  Maps\Kilimandjaro::class,
  Maps\Meteores::class,
  Maps\Niagara::class,
  Maps\Offices::class,
  Maps\Uluru::class,
];

$container = $staurie->getContainer();

$mapObject = $container->getMap();
$npcsPlaced = [];
$itemsPlaced= [];

/*oreach ($mapsClass as $class) {
    $key = array_rand($npcListNode);
    $npc = $npcListNode[$key];

    $name = $npc->name();

    $mapClass = new $class();

    var_dump($mapObject->getBlueprint($mapClass->position()));

    if (empty($npcsPlaced[$name])) {
        $mapObject->getBlueprint($mapClass->position())->npcs[] = $npc;
        $npcsPlaced[$name] = true;
    }
}*/

//$mapObject->getBlueprint(Maps\Corridor::class->position())->npcs[] = 'Hello';

$map = $container->registerComponent(Map::class);
$map->configuration([
    'directory' => __DIR__ . '/src/maps',
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
