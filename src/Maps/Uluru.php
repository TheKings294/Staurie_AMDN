<?php

namespace App\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Uluru extends Blueprint
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
        return "Uluru";
    }

    public function description(): string
    {
        return "Salle Uluru, idéale pour travailler en groupe.";
    }

    public function position(): Position
    {
        return new Position(1, 0);
    }
}

