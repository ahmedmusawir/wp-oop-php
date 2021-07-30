<?php
/**
 * POST INSERT CLASS
 */
namespace CyberizeAppDev\SupportDesk;

if (!class_exists('PostInsert')) {

 class PostInsert
 {
  public $post_title;
  public $post_cat;
  public $post_content;

  public function __construct($topic, $platform, $details)
  {
   $this->post_title   = $topic;
   $this->post_cat     = $platform;
   $this->post_content = $details;
  }

  public function insertToDb()
  {

   $args = [
    'post_title'    => $this->post_title,
    'post_category' => [$this->post_cat],
    'post_content'  => $this->post_content,
    'post_status'   => 'publish'
   ];

   if (!$this->post_title || $this->post_cat == 1 || !$this->post_content) {

    $post_insert_notice = 'Topic, OS Info or Details missing ...';
    $post_insert_notice = wp_insert_post($args, true);

   } else {

    $post_insert_notice = wp_insert_post($args, true);
    // IF YOU LEAVE TITLE AND CONTENT EMPTY TOGETHER
    // THAT WILL LAUNCH A WP_ERROR

   }

   return $post_insert_notice;

  }

  public function showMessage($notice)
  {

   if (is_wp_error($notice)) {

    echo '<div class="card bg-danger p-2 text-light">There is a WP Error!</div>';

   } else {

    echo '<div class="card bg-success p-2 text-light">OOP Ticket Create!</div>';

   }

  }

 }

}