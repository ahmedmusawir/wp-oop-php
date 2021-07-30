<?php
/**
 * Show Posts Class
 */

namespace CyberizeAppDev\DropDown;

use CyberizeAppDev\Show\ShowObjects;

class ShowPosts
{
 private $tax_id;

 public function __construct($taxonomy_id)
 {
  $this->tax_id = $taxonomy_id;
 }

 public function showRandomPosts($show_obj = false)
 {
  $args = [
   'posts_per_page' => 5
  ];

  $posts = get_posts($args);

  if ($show_obj == true) {

   foreach ($posts as $post) {
    echo '<h4><a href="' . $post->guid . '">' . $post->post_title . '</a></h4>';
    echo '<p class="card bg-light p-3">' . $post->post_excerpt . '';

    ShowObjects::showDate($post->post_modified);

   }

  }

  return $posts;

 }

 public function showCountryPosts($show_obj = false, $tax_id)
 {
  $args = [
   'posts_per_page' => 5,
   'tax_query'      => [
    [
     'taxonomy' => 'states',
     'field'    => 'term_id',
     'terms'    => $tax_id
    ]
   ]
  ];

  $posts = get_posts($args);

  if ($show_obj == true) {

   foreach ($posts as $post) {
    echo '<h4><a href="' . $post->guid . '">' . $post->post_title . '</a></h4>';
    echo '<p class="card bg-light p-3">' . $post->post_excerpt . '';

    ShowObjects::showDate($post->post_modified);

   }

  }

  return $posts;

 }

}