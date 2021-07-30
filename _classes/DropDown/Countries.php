<?php
/**
 * Counties Class
 */

namespace CyberizeAppDev\DropDown;

class Countries
{
 private $countries;

 public function __construct($country_data)
 {
  $this->countries = $country_data;
 }

 public function showTaxTerms()
 {
  // print_r($this->countries);
  foreach ($this->countries as $country) {
   //  echo "<code><xmp>";
   echo '<option value="' . $country->term_id . '">' . $country->name . '</option>';
   //  echo "</xmp></code>";

  }

 }

}