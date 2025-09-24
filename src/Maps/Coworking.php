<?php


namespace Mourad\MurderShell\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Coworking extends Blueprint
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

