<?php
/**
 * CALCULATOR CLASS
 */
namespace CyberizeAppDev\Cal;

if (!class_exists('Calculator')) {

 class Calculator
 {
  public $digit_one;
  public $digit_two;
  public $math_op;

  public function __construct($d_one, $d_two, $m_op)
  {
   $this->digit_one = $d_one;
   $this->digit_two = $d_two;
   $this->math_op   = $m_op;

  }

  public function display_number()
  {
   echo "<h4>DIGIT ONE IS: $this->digit_one <br> DIGIT TWO IS: $this->digit_two</h4>";
   // echo "<h3>DIGIT ONE IS: $this->digit_one</h3>
   // <h3>DIGIT TWO IS: $this->digit_two</h3>
   // <h3>PERFORMING: $this->math_op OPERATION</h3>";

  }

  public function show_operation()
  {
   $class_name_w_namespace = static::class;
   $class_name             = str_replace(__NAMESPACE__ . '\\', '', $class_name_w_namespace);
   echo $class_name;

   //  echo '<h4>PERFORMING  <span class="text-dark">' . static::class . '</span> OPERATION</h4>';
   echo '<h4>PERFORMING  <span class="text-dark">' . $class_name . '</span> OPERATION</h4>';

  }

 }
}