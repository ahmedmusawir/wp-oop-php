<?php
class TermControl1
{
 /**
  * Create object
  */
 public function __construct()
 {
  add_action('save_post', [$this, 'save_post'], 10);
 }

 /**
  * When post is updated, check if has category 7 or not and add or remove custom field
  *
  * @param $id
  */
 public function savePost($id)
 {
  remove_action('save_post', [$this, 'save_post']);
  if (!empty($_POST['post_category']) && in_array(7, $_POST['post_category'])) {
   update_post_meta($id, '_fancy_cats', 1);
  } else {
   delete_post_meta($id, '_fancy_cats', 1);
  }

 }
}
new TermControl1();

add_action('save_post', ['Term_Control_Hooks', 'save_post'], 10, 2);
class TermControlHooks
{
 public static function savePost($id, $post)
 {
  if (!empty($_POST['post_category'])) {
   $categories = $_POST['post_category'];
   $control    = new Term_Control_2($post, $categories);
   $control->update_categories();
  }
 }
}

add_action('admin_init', ['Term_Control_Hooks', 'admin_hooks']);
class TermControlHooks
{
 public static function adminHooks()
 {
  add_action('save_post', [__CLASS__, 'save_post'], 10, 2);
 }

 public static function savePost($id, $post)
 {
  if (!empty($_POST['post_category'])) {
   $categories = $_POST['post_category'];
   $control    = new Term_Control_2($post, $categories);
   $control->update_categories();
  }
 }

}

add_action('admin_init', ['Term_Control_Hooks', 'admin_hooks']);
class TermControlHooks
{
 public static function adminHooks()
 {
  add_action('save_post', [__CLASS__, 'save_post'], 10, 2);
  add_action('admin_enqueue_scripts', [__CLASS__, 'load_scripts']);
 }

 public static function savePost($id, $post)
 {
  if (!empty($_POST['post_category'])) {
   $categories = $_POST['post_category'];
   $control    = new Term_Control_2($post, $categories);
   $control->update_categories();
  }
 }

 public static function loadScripts()
 {
 }
}

class AddCtaToContent
{
 /**
  * Call To Action to add to post
  *
  * @var string
  */
 protected $call_to_action;
 /**
  * Add_CTA_To_Content constructor.
  *
  * @param  string $call_to_action Call To Action to add to post
  */
 public function __construct($call_to_action)
 {
  $this->call_to_action = $call_to_action;
 }

 /**
  * Add the filter
  */
 public function addHook()
 {
  add_filter('the_content', [$this, 'filter_content']);
 }

 /**
  * Remove the filter
  */
 public function removeHook()
 {
  remove_filter('the_content', [$this, 'filter_content']);
 }

 /**
  * Append CTA to post content
  *
  * @param string $content
  *
  * @return string
  */
 public function filterContent($content)
 {
  return $content . $this->call_to_action;
 }
}

add_action('save_post', 'save_cta', 10, 2);
function saveCta($id, $post)
{
 remove_action('save_post', 'save_cta');
 $appender           = new Add_CTA_To_Content(get_option('saved_cta'));
 $post->post_content = $appender->filter_content($post->post_content);
 wp_update_post($post);
}

/**
 * HOW MANY WAYS TO LOAD A HOOK IN A CLASS OR OBJ
 */

class MyPlugin
{
 public function __construct()
 {
  add_action('wp_loaded', array($this, 'on_loaded'));

 }

 public function onLoaded()
 {
  // ...
 }
}
// =======================================================

class MyPlugin
{
 public function __construct()
 {
  $this->init();
 }

 public function init()
 {
  add_action('wp_loaded', array($this, 'on_loaded'));
 }

 public function onLoaded()
 {
  // ...
 }
}

// =======================================================

class MyPlugin
{
 public function init()
 {
  add_action('wp_loaded', array($this, 'on_loaded'));
 }

 public function onLoaded()
 {
  // ...
 }
}

$my_plugin = new MyPlugin();
$my_plugin->init();

// =======================================================

class MyPlugin
{
 public static function init()
 {
  $self = new self();
  add_action('wp_loaded', array($self, 'on_loaded'));
 }

 public function onLoaded()
 {
  // ...
 }
}

MyPlugin::init();

// =======================================================

class MyPlugin
{
 public static function init()
 {
  $self = new self();
  add_action('wp_loaded', array($self, 'on_loaded'));
 }

 public function onLoaded()
 {
  // ...
 }
}

add_action('plugins_loaded', array('MyPlugin', 'init'));

// =======================================================

class MyClass
{
 public static function getStuffDone()
 {
  // .. This is where stuff gets done ..
 }
}
add_action('admin_init', [__NAMESPACE__ . '\MyClass', 'getStuffDone']);

// =======================================================

class MyPlugin
{
 public function onLoaded()
 {
  // ...
 }
}

$my_plugin = new MyPlugin();
add_action('wp_loaded', array($my_plugin, 'on_loaded'));