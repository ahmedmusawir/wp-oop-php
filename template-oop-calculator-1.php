<?php
 /**
  * The template for displaying all pages
  * Template Name: OOP CALCULATOR
  * This is the template that displays all pages by default.
  * Please note that this is the WordPress construct of pages
  * and that other 'pages' on your WordPress site may use a
  * different template.
  *
  * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
  *
  * @package cyberize-app-dev
  */

 get_header();
?>
<?php
 require __DIR__ . '\vendor\autoload.php';

 if (isset($_POST['Submit'])) {
  echo 'form submitted';

  $data = new CyberizeAppDev\Cal\DataPrep($_POST);

  $digit_one = $data->getDigitOne();
  $digit_two = $data->getDigitTwo();
  $math_op   = $data->getMathOp();

  echo "<br>Digit One: $digit_one";
  echo "<br>Digit Two: $digit_two";
  echo "<br>Math: $math_op";

  // if (isset($_POST['digit_one'])) {
  //  $digit_one = $_POST['digit_one'];
  // }
  // if (empty($_POST['digit_one'])) {
  //  $digit_one = 0;
  // }

  // if (isset($_POST['digit_two'])) {
  //  $digit_two = $_POST['digit_two'];
  // }
  // if (empty($_POST['digit_two'])) {
  //  $digit_two = 0;
  // }

  // if (isset($_POST['math'])) {
  //  $math_op = $_POST['math'];
  // }
  // if (empty($_POST['math'])) {
  //  $math_op = 'plus';
  // }

  // $calculator = new CyberizeAppDev\Cal\Calculator($digit_one, $digit_two, $math_op);
  // $add        = new CyberizeAppDev\Cal\AddNumbers($digit_one, $digit_two, $math_op);
  // $minus      = new CyberizeAppDev\Cal\MinusNumbers($digit_one, $digit_two, $math_op);
  // $multiply   = new CyberizeAppDev\Cal\MultiplyNumbers($digit_one, $digit_two, $math_op);
  // $divide     = new CyberizeAppDev\Cal\DivideNumbers($digit_one, $digit_two, $math_op);

 }

?>

<main id="primary" class="site-main container">

  <header id="header-test" class="site-header container py-5 text-center">

    <h1 class="text-center">OOP CALCULATOR</h1>

    <form action="" method="POST">
      <input type="text" name="digit_one" id="" placeholder="Digit One">
      <select name="math" id="" style="padding: 1rem;">
        <option value="plus">Plus</option>
        <option value="minus">Minus</option>
        <option value="multiply">Multiply</option>
        <option value="divide">Divide</option>
      </select>
      <input type="text" name="digit_two" id="" placeholder="Digit Two">
      <input type="submit" name="Submit" value="Submit">
    </form>

    <?php if (isset($_POST['Submit'])): ?>

    <!-- <div class="card bg-light mt-5">
      <?php $calculator->display_number()?>
    </div> -->

    <div class="card bg-light mt-5">
      <?php

       //  switch ($math_op) {
       //   case 'plus':
       //    echo "<h3>TOTAL IS: " . $add->get_total() . "</h3>";

       //    break;
       //   case 'minus':
       //    echo "<h3>TOTAL IS: " . $minus->get_total() . "</h3>";

       //    break;
       //   case 'multiply':
       //    echo "<h3>TOTAL IS: " . $multiply->get_total() . "</h3>";

       //    break;
       //   case 'divide':
       //    echo "<h3>TOTAL IS: " . $divide->get_total() . "</h3>";

       //    break;

       //   default:
       //    echo 'Error!';
       //  }

      ?>

      <?php endif;?>

    </div>

  </header><!-- #masthead -->

</main><!-- #main -->

<?php
get_footer();