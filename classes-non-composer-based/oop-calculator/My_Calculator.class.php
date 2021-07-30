<?php
/**
 * CALCULATOR CLASS
 */

if (!class_exists('My_Calculator')) {

 class My_Calculator
 {
  public $digit_one;
  public $digit_two;
  protected $_math_op;

  public function __construct($d_one = 0, $d_two = 0, $m_op = 'plus')
  {
   $this->digit_one = $d_one;
   $this->digit_two = $d_two;
   $this->math_op   = $m_op;

  }

  public function display_number()
  {
   echo "<h3>DIGIT ONE IS: $this->digit_one</h3>
            <h3>DIGIT TWO IS: $this->digit_two</h3>
            <h3>PERFORMING: $this->math_op OPERATION</h3>";
  }

 }
}