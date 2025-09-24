<?php

namespace App\Dialogue;
interface DialogueResponseInterface
{
    public function getResponseText(): string;
    public function getNext(): ?DialogueNode;
}