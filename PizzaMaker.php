<?php
require_once 'TomatoSauce.php';
require_once 'Mozzarella.php';
require_once 'PlainPizza.php';

$basicPizza = new TomatoSauce(new Mozzarella(new PlainPizza()));

echo("Ingredients: " . $basicPizza->getDescription() . "\n");
echo("Cost: " . $basicPizza->getCost() . "\n");
