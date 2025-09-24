<?php
namespace Jugid\Staurie\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Fuji extends Blueprint {
    public function npcs(): array { return []; }
    public function items(): array { return []; }
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

