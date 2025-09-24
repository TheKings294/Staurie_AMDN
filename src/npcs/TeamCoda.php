<?php

namespace App\npcs;

use Jugid\Staurie\Game\Npc;
class TeamCoda extends Npc {
    private string $name;
    private string $description;
    private array|string $speak;
    private string $role;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function name(): string {
        return $this->name;
    }
    public function description(): string {
        return $this->description;
    }

    public function role(): string {
        return $this->role;
    }
    public function speak() : string|array {
        return $this->speak;
    }
}