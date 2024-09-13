<?php

namespace App\Classes\Animal;

use App\Abstracts\Animal;
use App\Classes\Food\Plant;
use Exception;
use App\Interface\IFood;
use App\Interface\IFur;

class Rabbit extends Animal implements IFur
{
    protected function getSpecies(): string
    {
        return 'Rabbit';
    }

    /**
     * @throws Exception
     */
    public function feed(IFood $food): void
    {
        if (!$food instanceof Plant) {
            echo $this->getSpecies() . " only eats plants!";
        } else {
            echo "{$this->name} the " . $this->getSpecies() . " is eating {$food}.<br>";
        }
    }

    public function groom(): void
    {
        echo "{$this->name} the rabbit is being groomed.<br>";
    }

    public function getName(): string
    {
        return $this->name;
    }
}