<?php
/**
 * CLASS AUTO LOADER
 */

spl_autoload_register('my_auto_loader');

function my_auto_loader($class_name)
{
//  add_filter('theme_file_path', 'wp_normalize_path');
 //  var_dump($class_name);

 /*
  * CHECKING FOR My_ PREFIX
  */
 if (0 !== strpos($class_name, 'My_')) {
  return;
 }

//  var_dump($class_name);

 $base_path = get_theme_file_path() . '/_classes/';
 $ext       = '.php';
//  var_dump($base_path);

 $paths = ['oop-cal/', 'test/', 'utils/'];

 foreach ($paths as $path) {

  $current_path = $base_path . $path . $class_name . $ext;
  // var_dump($current_path);

  if (file_exists($current_path)) {
   //  echo 'file found: ' . $current_path;
   require_once $current_path;
   break;
  }
 }

}
