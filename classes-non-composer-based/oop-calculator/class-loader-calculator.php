<?php

spl_autoload_register('my_auto_loader');

function my_auto_loader($class_name)
{
 add_filter('theme_file_path', 'wp_normalize_path');

 /**
  * CHECKING FOR My_ PREFIX
  */
 if (0 !== strpos($class_name, 'My_')) {
  return;
 }

//  $path      = dirname(__FILE__) . '\\';
 $path      = get_theme_file_path() . '/_classes/oop-calculator/';
 $extension = '.class.php';
 $full_path = $path . $class_name . $extension;

 require_once $full_path;
}