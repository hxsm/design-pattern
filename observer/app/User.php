<?php

namespace App;

use SplObserver;
use SplSubject;

class User implements SplObserver
{
    private string $name;
    private bool $notified = false;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function isNotified(): bool
    {
        return $this->notified;
    }

    public function update(SplSubject $subject): void
    {
        $this->notified = true;
    }
}
