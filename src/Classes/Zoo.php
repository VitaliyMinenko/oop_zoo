<?php

namespace App\Classes;

use App\Abstracts\Animal;
use Tightenco\Collect\Support\Collection;

class Zoo
{
    private Collection $animals;

    public function __construct()
    {
        $this->animals = new Collection();
    }

    public function addAnimal(Animal $animal): void
    {
        $this->animals->push($animal);
    }

    public function getAnimals(): Collection
    {
        return $this->animals;
    }

    /**
     * @param string $name
     * @return Animal|null
     */
    public function findAnimalByName(string $name): ?Animal
    {
        return $this->animals->first(function (Animal $animal) use ($name) {
            return $animal->getName() === $name;
        });
    }
}
