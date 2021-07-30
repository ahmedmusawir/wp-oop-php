<?php
/**
 * CALCULATOR CLASS
 */
namespace CyberizeAppDev\Cal;

require_once 'Calculator.php';

class AddNumbers extends Calculator
{

 public function get_total()
 {
  $total = $this->digit_one + $this->digit_two;
  return $total;
 }

 public function __destruct()
 {}
}