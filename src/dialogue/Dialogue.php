<?php

namespace App\Dialogue;

use Jugid\Staurie\Component\AbstractComponent;

class Dialogue extends AbstractComponent {
    final public function name() : string
    {
        return 'dialogue';
    }
    final public function getEventName() : array
    {
        return ['npc.talk'];
    }
    final public function require() : array
    {
        return [];
    }
    final public function action(string $event, array $arguments) : void
    {
    }
    final public function initialize() : void
    {

    }
    final public function defaultConfiguration() : array
    {
        return [];
    }
}
