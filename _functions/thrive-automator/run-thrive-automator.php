<?php
/**
 * THRIVE AUTOMATOR MAIN
 */

use CyberizeAppDev\ThriveAuto\MakeAction;
use CyberizeAppDev\ThriveAuto\MakeActionField;
use CyberizeAppDev\ThriveAuto\MakeDataObject;
use CyberizeAppDev\ThriveAuto\MakeTrigger;

add_action('thrive_automator_init', function () {

 thrive_automator_register_trigger(MakeTrigger::class);
 thrive_automator_register_data_object(MakeDataObject::class);
 thrive_automator_register_action(MakeAction::class);
 thrive_automator_register_action_field(MakeActionField::class);

});