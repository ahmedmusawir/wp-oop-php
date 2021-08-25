<?php
/**
 * CALCULATOR CLASS
 */
namespace CyberizeAppDev\Cal;

class DataPrep
{
 private $data;
 private $fields = ['digit_one', 'digit_two', 'math'];

 public function __construct($post_data)
 {
  $this->data = $post_data;
  echo '<pre>';
  echo print_r($this->data);
  echo '</pre>';

 }

 public function getDigitOne()
 {
  $val = trim($this->data['digit_one']);

  if (empty($val) or !is_numeric($val)) {
   $val = 0;
  }

  return $val;
 }

 public function getDigitTwo()
 {
  $val = trim($this->data['digit_two']);

  if (empty($val) or !is_numeric($val)) {
   $val = 0;
  }

  return $val;
 }

 public function getMathOp()
 {
  return $this->data['math'];
 }

}