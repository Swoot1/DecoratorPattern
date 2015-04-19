<?php
require_once 'ToppingDecorator.php';

class Mozzarella extends ToppingDecorator{
   public function __construct(Pizza $newPizza){
      parent::__construct($newPizza);

      echo("Adding Dough\n");

      echo("Adding Moz\n");
   }

   public function getDescription(){
      return $this->tempPizza->getDescription() . ", mozzarella";
   }

   public function getCost(){

      echo("Cost of Moz: 0.50 \n");

      return $this->tempPizza->getCost() + 0.5;
   }
} 