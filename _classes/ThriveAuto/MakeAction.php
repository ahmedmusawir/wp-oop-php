<?php
/**
 * THRIVE AUTOMATOR CUSTOM ACTION
 */

namespace CyberizeAppDev\ThriveAuto;

use Thrive\Automator\Items\Action;

class MakeAction extends Action
{

 public static function get_id(): string
 {
  return 'wp/create-post';
 }

 public static function get_name(): string
 {
  return 'Create Post';
 }

 public static function get_description(): string
 {
  return 'Create a new wordpress Post';
 }

 public static function get_image(): string
 {
  return 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/Wordpress_Blue_logo.png/1200px-Wordpress_Blue_logo.png';
 }

 public static function get_app_name(): string
 {
  return 'WordPress';
 }

 public static function get_required_action_fields(): array
 {
  return ['moose/user-role'];

 }

 public static function get_required_data_objects(): array
 {
  return ['user-data'];
 }

 public function do_action($data)
 {
  /** @var User_Data $user_data */
  $user_data = $data['user_data'] ?? null;

  echo '<pre>';
  print_r($user_data);
  echo '</pre>';
  die();
 }

}