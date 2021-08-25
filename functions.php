<?php

/**
 * Theme Setup Functions
 */
require get_template_directory() . '/_functions/theme-setup.php';

/**
 * Widget Setup Functions
 */
require get_template_directory() . '/_functions/widget-setup.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/_functions/scripts-setup.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/*
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
 require get_template_directory() . '/inc/jetpack.php';
}

/*======================================
=            MOOSE INCLUDES            =
======================================*/

/**
 * Bootstrap 4 Nav Walker
 */
// require get_template_directory() . '/_functions/bootstrap-navwalker.php';
// require get_template_directory() . '/_functions/moose-navwalker.php';
/**
 * Helper Functions
 */
require get_template_directory() . '/_functions/helpers-setup.php';

/**
 *
 * React App Setup
 *
 */
// require get_template_directory() . '/_functions/react-setup.php';

/**
 *
 * Adding Breadcrums
 *
 */

// require get_template_directory() . '/_functions/breadcrum-function.php';

/**
 *
 * CUSTOMIZING THE LOGIN SCREEN
 *
 */

require get_template_directory() . '/_functions/wp-logon-screen.php';

/**
 * SELFLIST CUSTOM FUNCTIONS
 */

// CUSTOM REST ROUTE FOR LISTING 1ST PROTOTYPE
require get_theme_file_path('/_functions/selflist/selflist-search-route.php');

// SELFLIST CUSTOM POST TYPE 1ST PROTOTYPE
require get_theme_file_path('/_functions/selflist/selflist-listing-cpt.php');

// SELFLIST CUSTOM USER ROLES & PERMISSIONS
// require get_theme_file_path('/_functions/selflist/selflist-user-roles.php');

// SELFLIST CUSTOM USER LOGIN LOGOUT RELATED FUNCTIONS (ADMIN BAR, LOGIN/LOGOUT BTN, REDIRECTION ETC.)
require get_theme_file_path('/_functions/selflist/selflist-user-logins.php');

// SELFLIST SUB CATEGORIES LISTING FUNCTION
require get_theme_file_path('/_functions/selflist/selflist-get-category-list.php');

//Getting Main Categories with Sub Cats to JSON - selflist-get-subcats-json.php IS A DEPENDENCY
require get_theme_file_path('/_functions/selflist/selflist-get-category-json.php');
//Getting Sub Categories
require get_theme_file_path('/_functions/selflist/selflist-get-subcats-json.php');

// SELFLIST SUB CATEGORIES LISTING FUNCTION
require get_theme_file_path('/_functions/selflist/selflist-post-acf-to-rest.php');
// SELFLIST SET CUSTOM POST TITLE WITH ID
// require get_theme_file_path('/_functions/selflist/selflist-post-title.php');

// SELFTLIST CREATE CATEGORIES
// require get_theme_file_path('/_functions/selflist/ajax/test-ajax.php');
// require get_theme_file_path('/_functions/selflist/selflist-create-categories.php');
// require get_theme_file_path('/_functions/selflist/ajax/main-cat-insert-ajax.php');
// require get_theme_file_path('/_functions/selflist/ajax/primo-cat-insert-ajax.php');
// require get_theme_file_path('/_functions/selflist/ajax/secondo-cat-insert-ajax.php');
// require get_theme_file_path('/_functions/selflist/ajax/terzo-cat-insert-ajax.php');
// require get_theme_file_path('/_functions/selflist/ajax/list-preview-ajax.php');
// require get_theme_file_path('/_functions/selflist/ajax/list-payment-and-publish-ajax.php');
// SELFLIST CUSTOM TAXONOMY & CATEGORIES
require get_theme_file_path('/_functions/selflist/taxonomy/selflist-create-taxonomy.php');
// require get_theme_file_path('/_functions/selflist/taxonomy/selflist-cat-list-w-links.php');
// require get_theme_file_path('/_functions/selflist/taxonomy/selflist-cat-list-wo-links.php');
// SELFLIST WITH WOOCOM
// require get_theme_file_path('/_functions/selflist/woocom/style-checkout-w-bootstrap.php');
// require get_theme_file_path('/_functions/selflist/woocom/add-points-to-member.php');
// require get_theme_file_path('/_functions/selflist/woocom/general-helpers.php');
// SELFLIST WITH GRAVITY FORMS
// require get_theme_file_path('/_functions/selflist/gravity/add-signup-customer-points.php');

// THIS UPDATES THE CATEGORY JSON FILE MANUALLY
// require get_theme_file_path('/_functions/selflist/taxonomy/selflist-auto-update-cat-json.php');

// DISPLAY STATES & CITIES IN CATEGORY.PHP PAGE TOP MENU
// require get_theme_file_path('/_functions/selflist/city_state/get_city_state.php');
// require get_theme_file_path('/_functions/selflist/rest/city-state-to-rest.php');
// require get_theme_file_path('/_functions/selflist/ajax/city-state-filter-ajax.php');
// require get_theme_file_path('/_functions/selflist/ajax/city-insert-ajax.php');
// MAIN LIST INSERT: HAD TO BE RE-WRITTEN DUE TO TAX_INPUT NOT WORKING. USING PHP NOW INSTEAD OF REST
// require get_theme_file_path('/_functions/selflist/ajax/list-insert-ajax.php');

// APP MANAGER PAGE RELATED
require get_theme_file_path('/_functions/selflist/app-manager/menu-page.php');
require get_theme_file_path('/_functions/selflist/ajax/admin-list-users-ajax.php');
require get_theme_file_path('/_functions/selflist/ajax/admin-users-points-add-ajax.php');

// FILTERS FOR ACF TO REST PLUGIN ... DON'T NEED THAT PLUGIN
// Enable the option show in rest
// add_filter( 'acf/rest_api/field_settings/show_in_rest', '__return_true' );

// Enable the option edit in rest
// add_filter( 'acf/rest_api/field_settings/edit_in_rest', '__return_true' );

/*
 * Proper ob_end_flush() for all levels
 *
 * This replaces the WordPress `wp_ob_end_flush_all()` function
 * with a replacement that doesn't cause PHP notices.
 */
remove_action('shutdown', 'wp_ob_end_flush_all', 1);
add_action('shutdown', function () {
 while (@ob_end_flush());
});

// MOOSE CLASSES
// require get_template_directory() . '/_classes/class-moose-test-1.php';
// require get_template_directory() . '/_classes/class-moose-test-2.php';
// require get_template_directory() . '/_classes/oop-calculator/Calculator.class.php';
// require get_template_directory() . '/_classes/oop-calculator/Add_Numbers.class.php';
// require get_template_directory() . '/_classes/oop-calculator/class-loader-calculator.php';
// require get_template_directory() . '/_functions/class-loader/class-loader-calculator.php';

// new Moose_Test_2();
// new CyberizeAppDev\Test\MooseTestOne(1);

/*
 * COMPOSER CLASS LOADS
 */

require __DIR__ . '\vendor\autoload.php';

// global $content;

// $filter_content = new CyberizeAppDev\Test\FilterContent('Cta with Content Filter', 'bg-warning');
// $filter_content->filter_content($content);

// $cta_to_top = new CyberizeAppDev\Test\FilterContent('CTA at Loop Start', 'bg-info');
// $cta_to_top->add_cta_at_loop_start();

// $cta_to_footer = new CyberizeAppDev\Test\FilterContent('CTA at Footer', 'bg-primary text-light');
// $cta_to_footer->add_cta_at_footer();

// $cta_to_loop_end = new CyberizeAppDev\Test\FilterContent('CTA at Loop End', 'bg-secondary text-light');
// $cta_to_loop_end->add_cta_at_loop_end();

// use CyberizeAppDev\Utils\ShowObjects;

// $woo_hook_one = new HookTest('Hook: woocommerce_checkout_billing', 'bg-warning', 187);
// $woo_hook_one->checkWooHookOne();

// $woo_hook_two = new HookTest('Hook: woocommerce_before_checkout_form', 'bg-info text-light', 187);
// $product_obj  = $woo_hook_two->checkWooHookTwo();

// ShowObjects::show($product_obj);

/*
 * Add Manage Options Capability to Editor Role
 */
function add_cap_to_editor()
{
 $editor = get_role('editor');
 $editor->add_cap('manage_options');
//  $editor->remove_cap('manage_options');

};

add_action('init', 'add_cap_to_editor');

/**
 * Removes some menus by page.
 */
function wpdocs_remove_menus()
{

 if (current_user_can('editor')) {
//  remove_menu_page('index.php'); //Dashboard
  remove_menu_page('jetpack'); //Jetpack*
  //  remove_menu_page('edit.php'); //Posts
  remove_menu_page('upload.php'); //Media
  //  remove_menu_page('edit.php?post_type=page'); //Pages
  remove_menu_page('edit-comments.php'); //Comments
  remove_menu_page('themes.php'); //Appearance
  remove_menu_page('plugins.php'); //Plugins
  remove_menu_page('users.php'); //Users
  remove_menu_page('tools.php'); //Tools
  remove_menu_page('options-general.php'); //Settings
  remove_menu_page('duplicator'); //Duplictor
  remove_menu_page('edit.php?post_type=acf-field-group'); //ACF

 }

}

add_action('admin_menu', 'wpdocs_remove_menus');

/*
 * THRIVE AUTOMATOR STUFF TESTING
 */
require get_theme_file_path('/_functions/thrive-automator/run-thrive-automator.php');