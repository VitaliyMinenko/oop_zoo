<?php

namespace App\Classes\Animal;

use App\Abstracts\Animal;
use App\Classes\Food\Meat;
use Exception;
use App\Interface\IFur;
use App\Interface\IFood;

class SnowLeopard extends Animal implements IFur
{
    protected function getSpecies(): string
    {
        return 'Snow Leopard';
    }

    /**
     * @throws Exception
     */
    public function feed(IFood $food): void
    {
        if (!$food instanceof Meat) {
            echo $this->getSpecies() . " only eats meat!";
        } else {
            echo "{$this->name} the " . $this->getSpecies() . " is eating {$food}.<br>";
        }
    }

    public function groom(): void
    {
        echo "{$this->name} the snow " . $this->getSpecies() . " is being groomed.<br>";
    }

    public function getName(): string
    {
        return $this->name;
    }
}