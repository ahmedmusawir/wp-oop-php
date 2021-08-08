<?php
/**
 * INSERT MULTI LEVEL CATEGORIES WITH AJAX
 */

add_action('wp_ajax_nopriv_admin_users_points_add_ajax', 'admin_users_points_add_ajax');
add_action('wp_ajax_admin_users_points_add_ajax', 'admin_users_points_add_ajax');

function admin_users_points_add_ajax()
{

 $user_id_array   = $_POST['userIdArray'];
 $user_new_points = $_POST['userNewPoints'];

 echo '<pre>';
 print_r($user_id_array);
 echo 'Points: ' . $user_new_points;
 echo '</pre>';

 // $the_post = get_post($post_id);

 // echo '<pre>';
 // echo print_r($the_post);
 // echo '</pre>';

 // FOLLOWING IS A MUST FOR AJAX
 wp_die();

}