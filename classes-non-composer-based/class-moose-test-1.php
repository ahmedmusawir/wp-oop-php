<?php
/**
 * Moose Test 1 Class
 *
 * @package WordPress
 * @subpackage None
 * @since Twenty Twenty-One 1.0
 */

/**
 * This class is a Test by Moose
 */
namespace CyberizeAppDev;

class Moose_Test_1
{
 private $__post_id;
 private $__call_to_action;
 public $a_post;

 public function __construct($new_post_id)
 {
  $this->post_id        = $new_post_id;
  $this->call_to_action = '<h1>the Moose is Loose...</h1>';
  add_filter('the_content', [$this, 'filter_content']);

 }

 public function get_a_post()
 {
  $this->a_post = get_post($this->post_id);
//    $post_display = print_r($the_post);
  //    return $this->post_id;
  return print_r($this->a_post->post_content);

 }

//   public function filter_hook()
 //   {
 //    $content = "abcd";
 //    add_filter('the_content', [$this, 'filter_content']);
 //   }

 public function filter_content($content)
 {
  return $content . $this->call_to_action;
 }

 public function get_my_categories()
 {
  $cats = get_categories();
  //    $all_cats = print_r($cats);
  return print_r($cats);

 }

 public function get_post_titles()
 {
  $posts = get_posts();

//    print_r($posts);

  foreach ($posts as $post) {
   echo '<h5>' . $post->post_title . '</h5>';
  }
 }

}