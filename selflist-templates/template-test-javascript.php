<?php
/**
 * The template for displaying all pages
 * Template Name: Test Javascript
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

<main id="primary" class="site-main container">

  <h2 class="text-center">Test JavaScript on Windows</h2>

  <h1>My Lists</h1>
  <hr class="bg-danger">
  <div class="list-item">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo nisi vitae temporibus. Esse nesciunt
      repudiandae libero expedita? Earum, quam inventore pariatur ab cumque omnis cum praesentium dolor, nisi veniam
      nobis?</p>
    <div class="form-group">
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fab fa-font-awesome-flag text-danger"></i>
          </div>
          <button class="btn btn-danger flag-btn" data-key="flag-123" data-post-id="123">Flag</button>
        </div>
      </div>
      <hr>
    </div>
    <div class="list-item">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo nisi vitae temporibus. Esse nesciunt
        repudiandae libero expedita? Earum, quam inventore pariatur ab cumque omnis cum praesentium dolor, nisi veniam
        nobis?</p>
      <div class="form-group">
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fab fa-font-awesome-flag text-danger"></i>
            </div>
            <button class="btn btn-danger flag-btn" data-key="flag-456" data-post-id="456">Flag</button>
          </div>
        </div>
        <hr>
      </div>
      <hr>
    </div>
    <div class="list-item">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo nisi vitae temporibus. Esse nesciunt
        repudiandae libero expedita? Earum, quam inventore pariatur ab cumque omnis cum praesentium dolor, nisi veniam
        nobis?</p>
      <div class="form-group">
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fab fa-font-awesome-flag text-danger"></i>
            </div>
            <button class="btn btn-danger flag-btn" data-key="flag-798" data-post-id="789">Flag</button>
          </div>
        </div>
        <hr>
      </div>
      <hr>
    </div>


</main><!-- #main -->

<?php
get_footer();