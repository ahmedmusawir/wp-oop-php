<?php
 /**
  * The template for displaying all pages
  * Template Name: Test OOP PHP
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

 $id          = new \Ramsey\Uuid\UuidFactory();
 $test_class1 = new CyberizeAppDev\Test\MooseTestOne(1);

 get_header();
?>
<style>
.box {
  border: 1px solid red;
}
</style>

<main id="primary" class="site-main container-fluid mx-auto">

  <header id="header-test" class="site-header container py-5 text-center">

    <h1>OOP PHP in WP</h1>

    <?php echo "<h4>UUID Module: " . $id->uuid4() . "</h4>"; ?>

  </header><!-- #masthead -->

  <div class="row">
    <article class="col-md-4 box">
      <h4>Test 1: Getting a Post object</h4>
      <?php
      echo '<pre>' . $test_class1->getAPost() . '</pre>'; ?>
    </article>
    <article class="col-md-4 box">
      <h4>Test 2: Getting Cats</h4>
      <?php
      echo $test_class1->getMyCategories(); ?>
    </article>
    <article class="col-md-4 box">
      <h4>Test 3: Post Titles</h4>
      <?php
      $test_class1->getPostTitles();?>
    </article>
  </div>

  <?php ;?>

</main><!-- #main -->

<?php
get_footer();