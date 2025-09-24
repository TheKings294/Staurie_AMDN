<?php

namespace App\npcs;

use Jugid\Staurie\Game\Npc;
class TeamCoda extends Npc {
    private string $name;
    private string $description;
    private array|string $speak;
    private string $role;
    private string $location;

    public function __construct(string $name, string $description, string $speak, string $role, string $location)
    {
        $this->name = $name;
        $this->description = $description;
        $this->speak = $speak;
        $this->role = $role;
        $this->location = $location;
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
    public function location(): string {
        return $this->location;
    }
    public function speak() : string|array {
        return $this->speak;
    }
}