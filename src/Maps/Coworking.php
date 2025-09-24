<?php


namespace App\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Coworking extends Blueprint
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
        return "Coworking";
    }

    public function description(): string
    {
        return "Espace Coworking, animé par le bruit des claviers et des discussions.";
    }

    public function position(): Position
    {
        return new Position(1, -1);
    }
}

