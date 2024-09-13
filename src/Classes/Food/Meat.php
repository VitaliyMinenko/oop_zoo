<?php

namespace App\Classes\Food;

use App\Interface\IFood;

class Meat implements IFood
{
    public function __toString(): string
    {
        return "Meat";
    }
}