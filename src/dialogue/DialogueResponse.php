<?php

namespace App\Dialogue;
class DialogueResponse implements DialogueResponseInterface {
    private string $responseText;
    private ?DialogueNode $next;

    public function __construct(string $responseText, ?DialogueNode $next = null) {
        $this->responseText = $responseText;
        $this->next = $next;
    }

    public function getResponseText(): string {
        return $this->responseText;
    }

    public function getNext(): ?DialogueNode {
        return $this->next;
    }
}