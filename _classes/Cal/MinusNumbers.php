<?php
/**
 * CALCULATOR CLASS
 */
namespace CyberizeAppDev\Cal;

require_once 'Calculator.php';

if (!class_exists('MinusNumbers')) {

 class MinusNumbers extends Calculator
 {

  public function get_total()
  {
   $total = $this->digit_one - $this->digit_two;
   return $total;
  }
 }

}