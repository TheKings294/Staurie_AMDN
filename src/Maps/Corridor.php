<?php


namespace App\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Corridor extends Blueprint
{
    public array $npcs = [];
    public array $items = [];

    public function npcs(): array
    {
        return $this->npcs;
    }

    public function items(): array
    {
        return $this->items;
    }

    public function monsters(): array
    {
        return [];
    }

    public function name(): string
    {
        return "Couloir";
    }

    public function description(): string
    {
        return "Le couloir principal du campus, point de départ du joueur.";
    }

    public function position(): Position
    {
        return new Position(0, 0);
    }
}

