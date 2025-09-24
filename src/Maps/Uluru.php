<?php

namespace Mourad\MurderShell\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Uluru extends Blueprint
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

