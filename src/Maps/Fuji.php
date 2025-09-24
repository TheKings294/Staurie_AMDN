<?php
namespace App\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Fuji extends Blueprint {
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
    public function monsters(): array { return []; }

    public function name(): string{
        return "Fuji";
    }

    public function description(): string{
        return "Salle Fuji, calme et studieuse, parfaite pour la concentration.";
    }

    public function position(): Position {
        return new Position(0, 1);
    }
}

