<?php

namespace App\Classes\Animal;

use App\Abstracts\Animal;
use Exception;
use App\Interface\IFood;

class Rhino extends Animal
{
    protected function getSpecies(): string
    {
        return 'Rhino';
    }

    /**
     * @throws Exception
     */
    public function feed(IFood $food): void
    {
        if (!$food instanceof Plant) {
            throw new Exception($this->getSpecies() . " only eats plants!");
        } else {
            echo "{$this->name} the " . $this->getSpecies() . " is eating {$food}.<br>";
        }
    }

    public function getName(): string
    {
        return $this->name;
    }
}