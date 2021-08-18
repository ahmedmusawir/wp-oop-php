<?php
/**
 * THRIVE AUTOMATOR CUSTOM TRIGGER
 */

namespace CyberizeAppDev\ThriveAuto;

use Thrive\Automator\Items\Trigger;

class MakeTrigger extends Trigger
{
 public $cta_content;

 public function __construct()
 {
  $this->cta_content = "This is Make Trigger Class";
 }

 public static function get_id(): string
 {
  return 'moose/login-trigger';
 }

 public static function get_wp_hook(): string
 {
  return 'wp_login';
 }

 public static function get_hook_params_number(): int
 {
  return 2;
 }

 public static function get_provided_data_objects(): array
 {
  return ['user_data'];
 }

 public static function get_app_name(): string
 {
  return 'Moose Wordpress';
 }

 public static function get_name(): string
 {
  return 'Moose Wordpress Login';
 }

 public static function get_description(): string
 {
  return 'Moose Triggered when a user logs in';
 }

 public static function get_image(): string
 {
  return 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/Wordpress_Blue_logo.png/1200px-Wordpress_Blue_logo.png';
 }

}