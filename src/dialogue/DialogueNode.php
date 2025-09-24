<?php

namespace App\Dialogue;

class DialogueNode implements DialogueNodeInterface {
    private string $text;
    /** @var DialogueNode[] */
    private array $responses = [];

    public function __construct(string $text) {
        $this->text = $text;
    }
    public function getText(): string {
        return $this->text;
    }
    public function getResponses(): array {
        return $this->responses;
    }
    public function addResponse(string $key, DialogueResponse $reponse): void {
        $this->responses[$key] = $reponse;
    }
}