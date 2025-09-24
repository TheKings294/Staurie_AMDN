<?php

namespace App\Dialogue;

use App\Dialogue\DialogueResponse;

interface DialogueNodeInterface
{
    public function getText(): string;
    /** @return DialogueResponse[] */
    public function getResponses(): array;
    public function addResponse(string $key, DialogueResponse $reponse): void;
}