<?php
require_once 'ToppingDecorator.php';

class TomatoSauce extends ToppingDecorator{
   public function __construct(Pizza $newPizza){
      parent::__construct($newPizza);
      echo("Adding sauce.\n");
   }

   public function getDescription(){
      return $this->tempPizza->getDescription() . ", tomato sauce";
   }

   public function getCost(){
      echo("Cost of sauce: 0.35\n");

      return $this->tempPizza->getCost() + 0.35;
   }
} 