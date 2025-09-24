<?php

namespace App\Dialogue;

use Jugid\Staurie\Component\AbstractComponent;

class Dialogue extends AbstractComponent {

    private ?DialogueNode $curentDialogue = null;
    private string $activeScenario =  '';
    final public function name() : string
    {
        return 'dialogue';
    }
    final public function getEventName() : array
    {
        return ['npc.talk', 'scenario.start'];
    }
    final public function require() : array
    {
        return [];
    }
    final public function initialize() : void
    {

    }
    final public function action(string $event, array $arguments) : void
    {
        switch($event) {
            case 'npc.talk':
                if (!$this->curentDialogue) {
                    echo "No dialogue loaded." . PHP_EOL;
                    break;
                }

                $this->runDialogue($this->curentDialogue);
                break;

            case 'scenario.start':
                $this->activeScenario = $arguments['scenario'] ?? '';
                $file = $this->defaultConfiguration()['scenario_dir'] . '/' . $this->activeScenario . '.json';

                if (!file_exists($file)) {
                    echo "Scenario {$this->activeScenario} not found!" . PHP_EOL;
                    break;
                }

                $data = json_decode(file_get_contents($file), true);

                if (isset($data['dialogue1'])) {
                    $this->curentDialogue = $this->buildDialogue($data['dialogue1']);
                }
                break;
        }
    }
    final public function defaultConfiguration() : array
    {
        return [
            'scenario_dir' =>  SRC_DIR . '/data'
        ];
    }

    private function buildDialogue(array $json) : DialogueNode
    {
        $node = new DialogueNode($json['text'] ?? '');

        if (!empty($json['responses'])) {
            foreach ($json['responses'] as $key => $resp) {
                $child = null;

                if (!empty($resp['text']) || !empty($resp['responses'])) {
                    $child = $this->buildDialogue($resp);
                }

                $node->addResponse($key, new DialogueResponse($resp['responseText'] ?? $key, $child));
            }
        }

        return $node;
    }

    private function runDialogue(DialogueNode $node) : void
    {
        echo $node->getText() . PHP_EOL;

        if (empty($node->getResponses())) {
            echo "Dialogue ended." . PHP_EOL;
            return;
        }

        $i = 1;
        $choices = [];
        foreach ($node->getResponses() as $resp) {
            echo "[$i] " . $resp->getResponseText() . PHP_EOL;
            $choices[$i] = $resp;
            $i++;
        }

        $choice = intval(readline("Your choice: "));
        if (isset($choices[$choice]) && $choices[$choice]->getNext()) {
            $this->runDialogue($choices[$choice]->getNext());
        }
    }
}
