<?php
/**
 * THE THRIVE AUTOMATOR DATA OBJECT
 */
namespace CyberizeAppDev\ThriveAuto;

use Thrive\Automator\Items\Data_Object;

class MakeDataObject extends Data_Object
{

 public static function get_id(): string
 {
  return 'user-data';
 }

 public static function get_fields(): array
 {
  return ['wp/username', 'wp/email'];
 }

 public static function create_object($user_id): array
 {
  $user = get_userdata($user_id);

  if ($user === null) {
   $user_data = [];
  } else {
   $user_data = [
    'wp/username' => $user->user_login,
    'wp/email'    => $user->user_email
   ];
  }

  return $user_data;
 }

}