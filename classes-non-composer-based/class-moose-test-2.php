<?php
/**
 * Moose Test 2 Class
 *
 * @package WordPress
 * @subpackage None
 * @since Twenty Twenty-One 1.0
 */

/**
 * This class is a Test by Moose
 */
namespace CyberizeAppDev;

if (!class_exists('Moose_Test_2')) {
 class Moose_Test_2
 {
  public function __construct()
  {

   $this->call_to_action = '<h1>the Moose is Loose...</h1>';
   add_filter('the_content', [$this, 'filter_content']);

  }

  public function filter_content($content)
  {
   return $content . $this->call_to_action;
  }

 }
}