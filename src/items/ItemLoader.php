<?php
namespace App\Items;

class ItemLoader {
    public static function load(string $scenario) {
        $json = file_get_contents(__DIR__ . "/../../data/items.json");
        $data = json_decode($json, true);

        $items = [];
        if (isset($data[$scenario])) {
            foreach ($data[$scenario] as $item) {
                $items[] = new DynamicItem($item["name"], $item["description"]);
            }
        }
        return $items;
    }
}
