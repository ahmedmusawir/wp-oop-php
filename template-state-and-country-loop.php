<?php
 /**
  * The template for displaying all pages
  * Template Name: State & Country
  * This is the template that displays all pages by default.
  * Please note that this is the WordPress construct of pages
  * and that other 'pages' on your WordPress site may use a
  * different template.
  *
  * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
  *
  * @package cyberize-app-dev
  */
 //  require __DIR__ . '\vendor\autoload.php';

 get_header();
?>

<main id="primary" class="site-main container">

  <header id="header-test" class="site-header container py-5 text-center">

    <h1>State & Country OOP DropDown</h1>

  </header><!-- #masthead -->

  <?php

   $countries = ["Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Chad", "Chile", "China", "Christmas Island", "Cocos", "Colombia", "Comoros", "Congo", "Cook Islands", "Costa Rica", "Cote dIvoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands", "Faroe Islands", "Fiji", "Finland", "France", "French Guiana", "French Polynesia", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Vatican City", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "South Korea", "Kuwait", "Kyrgyzstan", "Lao", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russia", "Rwanda", "Saint Lucia", "Samoa", "San Marino", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia", "Spain", "Sri Lanka", "St. Helena", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe"];

   $counter = 6;

   foreach ($countries as $country) {

    echo "<code><xmp>";
    //  echo '<option value="' . $counter . '">' . $country . '</option>';
    echo "</xmp></code>";

    // TAXONOMY INSERT
    //  $parent_id = 0;

    //  $term_insert_report = wp_insert_term(
    //   $country, // the Term
    //    'states', // the Taxonomy
    //   [
    //    'description' => 'This is a Country',
    //    'slug'        => $country,
    //    'parent'      => $parent_id,
    //   ]
    //  );

    //  echo 'Country Inserted:';
    //  echo '<pre>';
    //  print_r($term_insert_report);
    //  echo '</pre>';

    // END TAXONOMY INSERT

    //  $counter++;
   }

  ?>

  <!-- <div class="card p-5 bg-light">
  </div> -->

  <!-- ====================   DYNAMIC DROPDOWN   ========================== -->

  <?php

   // MAKING DROPDOWN OBJECT
   $the_tax = new CyberizeAppDev\DropDown\MakeDropdown('states');

   // DISPLAYING THE TAXONOMY OBJECT
   //  $tax_obj = $make_tax->getTaxonomyObject();
   //  CyberizeAppDev\Show\ShowObjects::show($tax_obj->labels);

   // DISPLAY TAXONOMIES OBJECTS
   $country_objs = $the_tax->getTaxonomies();
   // CyberizeAppDev\Show\ShowObjects::show($country_objs);

   // DISPLAY TAX TERMS LOOP
   $tax_terms = new \CyberizeAppDev\DropDown\Countries($country_objs);
   //  $tax_terms->showTaxTerms();
   //  CyberizeAppDev\Show\ShowObjects::show($tax_terms);

   //  $tax_terms->showTaxTerms($data);

  ?>

  <!-- ==================================================================== -->
  <!-- DYNAMIC OOP DROPDOWN -->
  <!-- ==================================================================== -->
  <?php

   if (isset($_POST['country'])) {
    $country = $_POST['country'];
   }
   if (empty($_POST['country'])) {
    $country = 0;
   }

   $show_posts   = new CyberizeAppDev\DropDown\ShowPosts($country);
   $random_posts = $show_posts->showRandomPosts();

  ?>
  <form action="" method="post">

    <select name="country" id="countries" class="form-control">
      <option value="0">Select A Country</option>
      <?php $tax_terms->showTaxTerms();?>
    </select>
    <button class="btn btn-info btn-block mt-2" type="submit">Find Posts</button>

  </form>

  <hr>

  <section class="result">
    <?php echo $country; ?>
    <?php if ($country === 0): ?>
    <?php $show_posts->showRandomPosts(true);?>
    <?php //CyberizeAppDev\Show\ShowObjects::show($random_posts)?>
    <?php else: ?>
    <?php $show_posts->showCountryPosts(true, $country);?>
    <?php endif;?>
  </section>

</main><!-- #main -->

<?php
get_footer();