<?php
require_once 'Pizza.php';


class ThreeCheesePizza implements Pizza {
private $description = "Mozzarella, Fontina, Parmesan Cheese Pizza";
private $cost = 10.50;

   /**
    * @return string
    */
   public function getDescription(){
      return $this->description;
   }

   /**
    * @param string $description
    */
   public function setDescription($description){
      $this->description = $description;
   }

   /**
    * @return float
    */
   public function getCost(){
      return $this->cost;
   }

   /**
    * @param float $cost
    */
   public function setCost($cost){
      $this->cost = $cost;
   }

} 