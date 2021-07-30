<?php
/**
 * Make Dropdown Class
 */

namespace CyberizeAppDev\DropDown;

class MakeDropdown
{
 public $taxonomy_name;
 public $taxonomy_obj;
 public $taxonomies;
 public $data;

 public function __construct($tax)
 {

  $this->taxonomy_name = $tax;
  $this->taxonomy_obj  = [];
  $this->taxonomies    = [];

  echo "This is the Taxonomy: " . $this->taxonomy_name . "<br>";

 }

 public function getTaxonomyObject()
 {

  $this->taxonomy_obj = get_taxonomy($this->taxonomy_name);

  return $this->taxonomy_obj;

 }

 public function getTaxonomies()
 {
  $args = [
   'taxonomy'   => $this->taxonomy_name,
   'hide_empty' => false
  ];
// GETTING THE TAXONOMIES
  $this->taxonomies = get_terms($args);

  return $this->taxonomies;

 }

}