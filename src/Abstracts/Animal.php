<?php

namespace App\Abstracts;

use App\Interface\IFood;

abstract class Animal
{
    protected string $name;
    protected string $species;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->species = $this->getSpecies();
    }

    abstract protected function getSpecies(): string;

    public function __toString(): string
    {
        return "{$this->species} {$this->name}";
    }

    abstract public function feed(IFood $food): void;

    abstract public function getName(): string;
}