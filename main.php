<?php

use App\Dialogue\Dialogue;
use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Staurie;

require_once __DIR__ . '/vendor/autoload.php';
define("SRC_DIR", __DIR__);

$staurie = new Staurie('Murder in the shell');
$staurie->register([
    Console::class,
    PrettyPrinter::class,
    Menu::class
]);

$container = $staurie->getContainer();

$dialogue = $container->registerComponent(Dialogue::class);
$dialogue->configuration([
    'scenario_dir' => __DIR__ . '/scenarios'
]);

$dispatcher = $container->dispatcher();

$staurie->run();

$result = $dispatcher->dispatch('scenario.start', ['scenario' => 'scenario1']);
$result = $dispatcher->dispatch('npc.talk', ['npc' => 'Professor Plum', 'dialogue' => 'dialogue1']);