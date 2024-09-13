<?php
require 'vendor/autoload.php';

use App\Classes\Animal\Elephant;
use App\Classes\Animal\Fox;
use App\Classes\Animal\Rabbit;
use App\Classes\Animal\Rhino;
use App\Classes\Animal\SnowLeopard;
use App\Classes\Animal\Tiger;
use App\Classes\Food\Meat;
use App\Classes\Food\Plant;
use App\Classes\Zoo;

$tiger = new Tiger('Dickson');
$fox = new Fox('Roxy');
$elephant = new Elephant('php');
$rabbit = new Rabbit('mq');
$rhino = new Rhino('Sasha');
$leopard = new SnowLeopard('Barsik');

$zoo = new Zoo();

$zoo->addAnimal($tiger);
$zoo->addAnimal($fox);
$zoo->addAnimal($elephant);
$zoo->addAnimal($rabbit);
$zoo->addAnimal($rhino);
$zoo->addAnimal($leopard);

$barsik = $zoo->findAnimalByName('Barsik');

$sasha = $zoo->findAnimalByName('Sasha');

echo $sasha;

$barsik->feed(new Plant());
$barsik->groom();
$barsik->feed(new Meat());

$roxy = $zoo->findAnimalByName('Roxy');

echo $roxy;
$roxy->feed(new Plant());
$roxy->feed(new Meat());
$roxy->groom();
