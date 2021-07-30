<?php
 /**
  * The template for displaying all pages
  * Template Name: OOP POST INSERT
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
 if (isset($_POST['post-title'])) {
  $post_title = $_POST['post-title'];
 }
 if (empty($_POST['post-title'])) {
  $post_title = '';
  // $post_title = 'No Topic Given';
 }

 if (isset($_POST['post-cat'])) {
  $post_cat = $_POST['post-cat'];
 }
 if (empty($_POST['post-cat'])) {
  $post_cat = 1;
 }

 if (isset($_POST['post-content'])) {
  $post_content = $_POST['post-content'];
 }
 if (empty($_POST['post-content'])) {
  $post_content = '';
  // $post_content = 'No Detail Given';
 }

 use CyberizeAppDev\SupportDesk\PostInsert;

?>

<main id="primary" class="site-main container">

  <header id="header-test" class="site-header container py-5 text-center">

    <h1 class="text-capitalize">insert an oop ticket</h1>
    <hr class="bg-light">

  </header><!-- #masthead -->

  <form action="" method="post">
    <input type="text" name="post-title" class="form-control" placeholder="Your Support Topic...">
    <select name="post-cat" id="post-cat" class="form-control mt-2">
      <option value="1">Select an Operating System</option>
      <option value="227">Windows 10</option>
      <option value="229">Mac OSx</option>
      <option value="228">Linux</option>
      <option value="231">Apple iOS</option>
      <option value="232">Andriod</option>
    </select>
    <textarea class="form-control mt-2" name="post-content" id="" cols="30" rows="10"
      placeholder="Details of your issue..."></textarea>
    <input class="btn btn-info btn-block mt-2" type="submit" value="INSERT TICKET">
  </form>

  <div>
    <hr>
    <?php echo 'Support Topic: ' . $post_title . '<br>'; ?>
    <?php echo 'Choice OS: ' . $post_cat . '<br>'; ?>
    <?php echo 'Issue Details: ' . $post_content . '<br>'; ?>
  </div>

  <?php

   $ticket = new PostInsert($post_title, $post_cat, $post_content);

   $notice = $ticket->insertToDb();

   //  ShowObjects::show($notice);

   $ticket->showMessage($notice);

   // echo 'Notice from Insert: ' . CyberizeAppDev\Show\ShowObjects::show($notice);

  ?>

</main><!-- #main -->

<?php
get_footer();