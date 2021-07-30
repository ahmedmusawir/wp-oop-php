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
 }

 public function filter_content()
 {
  add_filter('the_content', [$this, 'filter_now']);
 }

 public function filter_now($content)
 {
  echo $this->cta_content;
  return $content . $this->cta_content;
 }

 public function add_cta_at_footer()
 {
  add_action('wp_footer', [$this, 'cta_at_footer_now']);
 }

 public function cta_at_footer_now()
 {
  echo $this->cta_content;
 }

 public function add_cta_at_loop_start()
 {
  add_action('loop_start', [$this, 'cta_at_loop_start_now']);
 }

 public function cta_at_loop_start_now()
 {
  echo $this->cta_content;
 }

 public function add_cta_at_loop_end()
 {
  add_action('loop_end', [$this, 'cta_at_loop_end_now']);
 }

 public function cta_at_loop_end_now()
 {
  echo $this->cta_content;
 }

}
