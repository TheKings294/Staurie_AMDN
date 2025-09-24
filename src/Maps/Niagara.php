<?php

namespace Mourad\MurderShell\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Niagara extends Blueprint
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
        return "Niagara";
    }

    public function description(): string
    {
        return "Salle Niagara, bruyante comme une cascade d'idées.";
    }

    public function position(): Position
    {
        return new Position(-1, 0);
    }
}

