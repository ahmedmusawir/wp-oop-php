<?php
/**
 * CALCULATOR CLASS
 */
require 'My_Calculator.class.php';

if (!class_exists('My_Minus_Numbers')) {

 class My_Minus_Numbers extends My_Calculator
 {

  public function get_total()
  {
   $total = $this->digit_one - $this->digit_two;
   return $total;
  }
 }

}