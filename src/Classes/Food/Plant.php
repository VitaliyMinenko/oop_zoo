<?php

namespace App\Classes\Food;

use App\Interface\IFood;

class Plant implements IFood
{
    public function __toString(): string
    {
        return "Plant";
    }
}