<?php
 /**
  * THIS IS THE APP MANAGER MENU PAGE
  */

 function selflist_app_manager_settings_page()
 {

  add_menu_page(
   'Plugin Name',
   'Plugin Menu',
   'manage_options',
   'wpplugin',
   'wpplugin_settings_page_markup',
   'dashicons-wordpress-alt',
   2000
  );

 }

 add_action('admin_menu', 'selflist_app_manager_settings_page');

 function wpplugin_settings_page_markup()
 {
  // Double check user capabilities
  if (!current_user_can('manager_options')) {
   return;
  }

 ?>
<!-- VIEW HTML STARTS HERE  -->
<div class="wrap">
  <h1>moose is loose</h1>
  <?php echo get_admin_page_title(); ?>
</div>

<!-- VIEW HTML ENDS HERE  -->
<?php
}