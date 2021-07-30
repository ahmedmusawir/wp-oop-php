<?php
/**
 * Filter Content Class
 *
 * @package Moose
 * @subpackage None
 * @since 2021
 */

namespace CyberizeAppDev\Test;

class FilterContent
{
 private $cta_content;

 public function __construct($cta_text, $bg_css_class)
 {

  $this->cta_content = '<h4 class="card p-2 mb-5 ' . $bg_css_class . '">' . $cta_text . '</h4>';
  add_filter('the_content', [$this, 'filter_content']);
  // add_action('loop_start', [$this, 'add_cta_at_loop_start']);
  // add_action('loop_end', [$this, 'add_cta_at_loop_end']);
  // add_action('wp_footer', [$this, 'add_cta_at_footer']);

 }

 public function filter_content($content)
 {
  echo $this->cta_content;
  return $content . $this->cta_content;

 }

 public function add_cta_at_footer()
 {
  echo $this->cta_content;
 }

 public function add_cta_at_loop_start()
 {
  echo $this->cta_content;
 }

 public function add_cta_at_loop_end()
 {
  echo $this->cta_content;
 }

}