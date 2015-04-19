<?php
require_once 'Pizza.php';

abstract class ToppingDecorator implements Pizza{
   protected $tempPizza;

   public function __construct(Pizza $newPizza){
      $this->tempPizza = $newPizza;
   }

   public function getDescription(){
      return $this->tempPizza->getDescription();
   }

   public function getCost(){
      return $this->tempPizza->getCost();
   }
} 