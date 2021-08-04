<?php
/**
 * WooCom Hook Test Class
 *
 * @package Moose
 * @subpackage None
 * @since 2021
 */

namespace CyberizeAppDev\WooCom;

class HookTest
{
 private $cta_content;
 private $product_id;
 private $product;

 public function __construct($cta_text, $bg_css_class, $product_id)
 {

  $this->cta_content = '<h4 class="card p-2 mb-5 ' . $bg_css_class . '">' . $cta_text . '</h4>';
  $this->product_id  = $product_id;
  // add_filter('the_content', [$this, 'filter_content']);

 }

 public function checkWooHookOne()
 {
  add_action('woocommerce_checkout_billing', [$this, 'addWooComCTA']);
 }

 public function checkWooHookTwo()
 {
  add_action('woocommerce_before_checkout_form', [$this, 'addWooComCTA']);
 }

 public function addWooComCTA()
 {
  echo $this->cta_content;
  $this->showProductObj();
  $this->displayProductInfo();

 }

 private function showProductObj()
 {
  $this->product = wc_get_product($this->product_id);
  // ShowObjects::show($this->product);
 }

 private function displayProductInfo()
 {
  echo '<div class="card p-2 bg-light">';
  echo '<h3><span class="badge badge-info">Product Name:</span> ' . $this->product->get_name() . '</h3>';
  echo '<h4><span class="badge badge-info">Product ID:</span> ' . $this->product->get_id() . '</h4>';
  echo '<h4><span class="badge badge-info">Product SKU:</span> ' . $this->product->get_sku() . '</h4>';
  echo '<h4><span class="badge badge-info">Product Price:</span> ' . '$' . $this->product->get_price() . '</h4>';
  echo '<h4><span class="badge badge-info">Product Description:</span> ' . $this->product->get_description() . '</h4>';
  echo '<h4><span class="badge badge-info">Product Image:</span> ' . $this->product->get_image() . '</h4>';

  // echo '<h4><span class="badge badge-info">Product Attributes:</span> ' . ShowObjects::show($this->product->get_attributes()) . '</h4>';

  echo '</div>';
 }

}