<?php

namespace App;

use SplObserver;

class User implements SplObserver
{
    // Hors exercice mais notable:
    // Promotion du constructeur: https://www.php.net/manual/fr/language.oop5.decon.php#language.oop5.decon.constructor.promotion
    public function __construct(
        private string $name,
        private bool $notified = false
    ) {}


    public function isNotified(): bool
    {
        return $this->notified;
    }

    public function update(\SplSubject $splSubject): void
    {
        $this->notified = true;
    }
}