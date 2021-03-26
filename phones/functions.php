<?php
include_once('inc/function-modules/phones.php');

add_action('wp_enqueue_scripts', 'style_theme');
//add_action('wp_enqueue_scripts', 'scripts_theme');
add_action('after_setup_theme', 'theme_register_nav_menu');
add_action('init', 'scripts_theme');
add_action('widgets_init', 'register_my_widgets');
add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if( is_category() ) {
    $post_type = get_query_var('post_type');
    if($post_type)
      $post_type = $post_type;
    else
      $post_type = array('nav_menu_item', 'post', 'phones');
    $query->set('post_type',$post_type);
    return $query;
  }
}
function my_search_form( $form ) {
  $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <div>
    <input placeholder="Search" type="text" value="' . get_search_query() . '" name="s" id="s" />
    </div>
    </form>';

  return $form;
}

add_filter( 'get_search_form', 'my_search_form', 100 );

function register_my_widgets(){

  register_sidebar( array(
    'name'          => 'Top Sidebar',
    'id'            => "top_sidebar",
    'description'   => '',
    'class'         => '',
    'before_widget' => '<div class="widget %2$s">',
    'after_widget'  => "</div>\n",
    'before_title'  => '<h5 class="widgettitle">',
    'after_title'   => "</h5>\n",
  ) );
  register_sidebar( array(
    'name'          => 'Top Sidebar2',
    'id'            => "top_sidebar2",
    'description'   => '',
    'class'         => '',
    'before_widget' => '<div class="widget %2$s">',
    'after_widget'  => "</div>\n",
    'before_title'  => '<h5 class="widgettitle">',
    'after_title'   => "</h5>\n",
  ) );
}

function style_theme() {
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('main',get_template_directory_uri() . '/assets/scss/main.css');
  wp_enqueue_style('reset',get_template_directory_uri() . '/assets/scss/reset.css');
  wp_enqueue_style('font',get_template_directory_uri() . '/assets/scss/font.css');
}

function scripts_theme() {
  //wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js');
  wp_deregister_script('jquery');
  wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', null, null, false);
  wp_enqueue_script('jquery');
  wp_enqueue_script('slick-slider', get_template_directory_uri() . '/assets/js/slick.min.js');
}
function theme_register_nav_menu() {
  register_nav_menu( 'top', 'Menu into head' );
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('post_thumb', 1300, 500, true);
}
