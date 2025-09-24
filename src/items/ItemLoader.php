<?php
namespace App\Items;
class ItemLoader {
    public static function load(string $scenario) {
        $json = file_get_contents(SRC_DIR . '/data/'. $scenario.'.json');
        $data = json_decode($json, true);

        $items = [];
        if (isset($data['objects'])) {
            foreach ($data['objects'] as $item) {
                $items[] = new DynamicItem($item);
            }
        }
        return $items;
    }
}
