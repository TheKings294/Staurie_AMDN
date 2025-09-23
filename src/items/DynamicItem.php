<?php

namespace StaurieAMDN\Items;

use Jugid\Staurie\Game\Item;

class DynamicItem extends Item {
    private $name;
    private $description;

    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function name(): string {
        return $this->name;
    }

    public function description(): string {
        return $this->description;
    }

    public function statistics(): array {
        return [];
    }
}