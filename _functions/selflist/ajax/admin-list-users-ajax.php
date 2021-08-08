<?php
/**
 * INSERT MULTI LEVEL CATEGORIES WITH AJAX
 */

add_action('wp_ajax_nopriv_admin_list_users_ajax', 'admin_list_users_ajax');
add_action('wp_ajax_admin_list_users_ajax', 'admin_list_users_ajax');

function admin_list_users_ajax()
{

 $search_text = $_POST['searchText'];

//  echo "Search Text From AJAX: " . $search_text;

 $args = array(
  'number'         => -1,
  'search'         => '*' . $search_text . '*',
  'search_columns' => ['display_name', 'user_email', 'user_nicename', 'user_login', 'ID']
 );

// The Query
 $user_query = new WP_User_Query($args);

//  echo '<pre>';
 //  print_r($user_query);
 //  echo '</pre>';

// User Loop
 if (!empty($user_query->get_results())) {
  foreach ($user_query->get_results() as $user) {

   echo '<div class="border" data-userID="' . $user->ID . '" >';
   echo 'User found: ' . $user->display_name . '<br>';
   echo 'User ID: ' . $user->ID . '<br>';
   echo '<input class="user-checkbox" data-userID="' . $user->ID . '" type="checkbox">';
   echo '</div>';

  }
 } else {

  echo 'No users found.';

 }

 // FOLLOWING IS A MUST FOR AJAX
 wp_die();

}