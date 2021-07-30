<?php
/**
 * SHOW OBJECT CLASS
 */

namespace CyberizeAppDev\Show;

class ShowObjects
{
 public static function show($the_obj)
 {

  echo '<pre>';
  print_r($the_obj);
  echo '</pre>';

 }

 public static function showDate($date_string)
 {

  printf('<div class="alert alert-warning">Published in %s</div>', date("M d, Y", strtotime($date_string)));

 }
}