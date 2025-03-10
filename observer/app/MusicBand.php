<?php

namespace App;

use SplObjectStorage;
use SplSubject;

class MusicBand implements SplSubject
{
    private $observers;

    // Hors exercice mais notable:
    // Promotion du constructeur: https://www.php.net/manual/fr/language.oop5.decon.php#language.oop5.decon.constructor.promotion
    public function __construct(
        private string $name,
        private array $concerts = []
    ) {
        $this->observers = new SplObjectStorage();
    }


    public function addNewConcertDate(string $date, string $location):void
    {
        $this->concerts = [
            'date' =>  $date,
            'location' => $location
        ];
        $this->notify();
    }

    public function attach(\SplObserver $splObserver): void
    {
        $this->observers->attach($splObserver);
    }

    public function detach(\SplObserver $splObserver): void
    {
        $this->observers->detach($splObserver);
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}