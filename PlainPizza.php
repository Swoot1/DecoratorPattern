<?php
require_once 'Pizza.php';

class PlainPizza implements Pizza{

   public function getDescription(){
      return "Thin dough";
   }

   public function getCost(){

      echo("Cost of Dough: 4.00 \n");

      return 4.00;

   }
} 