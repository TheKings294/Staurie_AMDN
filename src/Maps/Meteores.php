<?php

namespace Jugid\Staurie\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Meteores extends Blueprint
{
    public function npcs(): array
    {
        return [];
    }

    public function items(): array
    {
        return [];
    }

    public function monsters(): array
    {
        return [];
    }

    public function name(): string
    {
        return "Meteores";
    }

    public function description(): string
    {
        return "Salle Météores, mystérieuse, décorée d'affiches d'espace.";
    }

    public function position(): Position
    {
        return new Position(0, -1);
    }
}

