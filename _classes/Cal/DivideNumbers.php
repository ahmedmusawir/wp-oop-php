<?php
/**
 * CALCULATOR CLASS
 */
namespace CyberizeAppDev\Cal;

require_once 'Calculator.php';

if (!class_exists('DivideNumbers')) {

 class DivideNumbers extends Calculator
 {

  public function get_total()
  {
   if ($this->digit_two != 0) {
    $total = $this->digit_one / $this->digit_two;
   } else {
    $total = "Cannot divide by Zero!";
   }
   return $total;
  }
 }

}