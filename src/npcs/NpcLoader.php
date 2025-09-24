<?php

namespace App\Npcs;

class NpcLoader {
    public static function load(): array {
        $file = file_get_contents(SRC_DIR . '/data/npc.json');
        $data = json_decode($file, true);

        $npcs = [];

        foreach ($data['npc'] as $npc) {
            $npcs[] = new TeamCoda($npc);
        }

        return $npcs;
    }
}