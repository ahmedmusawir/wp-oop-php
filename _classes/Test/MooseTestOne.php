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
namespace CyberizeAppDev\Test;

class MooseTestOne
{
 private $__post_id;
 private $__call_to_action;
 public $a_post;

 public function __construct($new_post_id)
 {
  $this->post_id = $new_post_id;
 }

 public function getAPost()
 {
  $this->a_post = get_post($this->post_id);
  return print_r($this->a_post->post_content);

 }

 public function getMyCategories()
 {
  $cats = get_categories();
  return print_r($cats);

 }

 public function getPostTitles()
 {
  $posts = get_posts();

  foreach ($posts as $post) {
   echo '<h5>' . $post->post_title . '</h5>';
  }
 }

}