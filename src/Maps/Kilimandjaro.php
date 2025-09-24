<?php
namespace App\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Kilimandjaro extends Blueprint {
    public function npcs(): array { return []; }
    public function items(): array { return []; }
    public function monsters(): array { return []; }

    public function name(): string{
        return "Kilimandjaro";
    }

    public function description(): string{
        return "Salle Kilimandjaro, calme et studieuse, vaste comme une montagne.";
    }

    public function position(): Position {
        return new Position(1, 1);
    }
}

