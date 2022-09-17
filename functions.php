<?php 
// require files 
function maka_date_time_arabic(){
	require_once get_template_directory() . '/datesandtimes-ar.php';

}
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
  if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
      if ( array_key_exists( 'data-toggle', $atts ) ) {
          unset( $atts['data-toggle'] );
          $atts['data-bs-toggle'] = 'dropdown';
      }
  }
  return $atts;
}
// Adding Filter bootstrap prefix to my teemplate
add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );


/* 
 (stylesheets files)
* adding my stylesheet file in my site 
*use wp_enqueue_style( $handle, $src, $deps, $ver, $media );
*/

function thmrat_add_styles() {
  /* Calling font-awesome Files */
  wp_enqueue_style('fas-icon', get_template_directory_uri() . '/css/all.min.css', array(), '1.0.0', '');
   /* Calling myframworks Files */
  wp_enqueue_style('myframworks', get_template_directory_uri() . '/css/framworks.css', array(), '1.0.0', '');
   /* Calling Stylesheet  */
  wp_enqueue_style('thmrat', get_template_directory_uri() . '/css/thmrat.css', array(), '1.0.0', '');

}

add_action('wp_enqueue_scripts','thmrat_add_styles');

/* 
* adding my Scripting files in my site 
* use wp_enqueue_script( $handle, $src, $deps, $ver, $media );
* reemove old jquery by using use wp_deregister_script( $handle, $src, $deps, $ver, $media );
* add jquery by using use wp_register_script( $handle, $src, $deps, $ver, $media );
* supporting internet explorer by  wp_script_add_data('html5shiv', 'conditional', 'lt IE 9'); to using html 5 
*/
// (javascript files)
function thmrat_add_scripts() {

  wp_deregister_script('jquery'); // display jquery in head
  // add new jquery in footer
  wp_register_script('jquery', includes_url('/js/jquery/jquery.min.js'), array(), '', true);
  // call jquery
  wp_enqueue_script('jquery');
  
  // global js file 
  wp_enqueue_script('thmrat', get_template_directory_uri() . '/js/thmrat.js', array(), false, true);
  // supporting html5 tag in internet explorer if you carry. 
  wp_enqueue_script('html5shiv', get_template_directory_uri() . '/js/html5shiv.js');
  // supporting html5 tag in internet explorer if you carry. 
  wp_script_add_data('html5shiv', 'conditional', 'lt IE 9');
  // supporting respond mobile devices for responsive. 
  wp_enqueue_script('respond', get_template_directory_uri() . '/js/respond.js');
 // supporting respond mobile devices for responsive. 
  wp_script_add_data('respond', 'conditional', 'lt IE 9');
}

  add_action('wp_enqueue_scripts','thmrat_add_scripts');

// menu navbar
  function thmrat_nav_menus() {

    $thmrat_menus = array(

        'primary' => 'header menu',
        'secondary'  => 'footer menu',
    );

    register_nav_menus ( $thmrat_menus);
}
    
function thmrat_call_navbar_links() {

   $arg_navbar = array(
    'theme_location'  => 'primary',
    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
    'container'       => false,
    'menu_class'      => 'nav-list',
    'menu_id'         => 'mynav',
    'container_aria_label' => 'nav',
   );
   
    wp_nav_menu( $arg_navbar);
}

add_action('init', 'thmrat_nav_menus'); // play the menu in your dashboard





function thmrat_change_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'thmrat_change_excerpt_length');

function thmrat_change_excerpt_more( $more ) {
	return ' ';
}
add_filter( 'excerpt_more', 'thmrat_change_excerpt_more');





 // Add option to my dashboard into theme supports
 add_theme_support( 'post-formats', array( 'standard','aside','chat', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio' ) );
 // adding html5 semantic to search-gallery-caption-comments-form
 add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script') );

 add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) );
 add_theme_support('custom-background');
 add_theme_support('custom-header');
 add_theme_support('title-tag');
 add_theme_support('custom-logo');
?>