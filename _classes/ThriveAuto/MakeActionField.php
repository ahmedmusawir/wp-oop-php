<?php
/**
 * THRIVE AUTOMATOR CUSTOM ACTION FIELD
 */

namespace CyberizeAppDev\ThriveAuto;

use Thrive\Automator\Items\Action_Field;
use Thrive\Automator\Utils;

class MakeActionField extends Action_Field
{
 public static function get_id(): string
 {
  return 'moose/user-role';
 }

 public static function get_name(): string
 {
  return 'User role';
 }

 public static function get_description(): string
 {
  return 'Create a new wordpress user';
 }

 public static function get_placeholder(): string
 {
  return 'user role';
 }

 /**
  * @see Action_Field::FIELD_TYPE_TEXT
  * @see Action_Field::FIELD_TYPE_TAGS
  * @see Action_Field::FIELD_TYPE_SELECT
  * @see Action_Field::FIELD_TYPE_CHECKBOX
  * @see Action_Field::FIELD_TYPE_AUTOCOMPLETE
  * @see Action_Field::FIELD_TYPE_DOUBLE_DROPDOWN
  */
 public static function get_type(): string
 {
  return Utils::FIELD_TYPE_SELECT;
 }

 public static function get_options_callback(): array
 {
  return [
   [
    'id'    => 'subscriber',
    'label' => 'Subscriber'
   ],
   [
    'id'    => 'author',
    'label' => 'Author'
   ]
  ];
 }

}