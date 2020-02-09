<?php
if ( ! function_exists( 'fe_setup' ) ) {

  function fe_setup() {

    add_theme_support( "title-tag" );

    // Enable automatic feed links
    add_theme_support( 'automatic-feed-links' );

    // Enable featured image
    add_theme_support( 'post-thumbnail' );

    // Thumbnail size
    add_image_size( 'fe_single' , 800, 493, true ); //(cropped)
    add_image_size( 'fe_big' , 1400, 928, true); //(cropped)

    // Custom menu areas
    register_nav_menus( array(
      'header' => esc_html__( 'header' , 'fe' )
    ) );

    // Load theme languages
    load_theme_textdomain( 'fe' , get_template_directory().'/languages' );

  }

}
add_action( 'after_setup_theme' , 'fe_setup' );


/* Load Bootstrap + Style
/* ------------------------------- */
function fe_load_stylesheets()
{

    wp_register_style('fe-bootstrap-stylesheet', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('fe-bootstrap-stylesheet');

    wp_register_style('fe-stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('fe-stylesheet');

}
add_action( 'wp_enqueue_scripts', 'fe_load_stylesheets');


/* delete previous jquery + load new jquery
/* --------------------------------------- */
function fe_include_jquery()
{

  wp_deregister_script('fe-jquery');
  /* Version 3.4.1*/
  wp_enqueue_script('fe-jquery', get_template_directory_uri() . '/js/jquery.min.js', '', 1, false);

}
add_action('wp_enqueue_scripts', 'fe_include_jquery');

/* load scripts
/* --------------------------------------- */
function fe_loadjs()
{

    wp_register_script('fe-load-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', '', 1, true);
    wp_enqueue_script('fe-load-bootstrap');

    wp_register_script('fe-load-laxjs', get_template_directory_uri() . '/js/lax.js', '', 1, true);
    wp_enqueue_script('fe-load-laxjs');

    wp_register_script('fe-load-popper', get_template_directory_uri() . '/js/popper.min.js', '', 1, true);
    wp_enqueue_script('fe-load-popper');

    wp_register_script('fe-load-smoothscroll', get_template_directory_uri() . '/js/smoothscroll.min.js', '', 1, true);
    wp_enqueue_script('fe-load-smoothscroll');

    wp_register_script('fe-load-swup', get_template_directory_uri() . '/js/swup.min.js', '', 1, true);
    wp_enqueue_script('fe-load-swup');

    wp_register_script('fe-load-customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('fe-load-customjs');


}
add_action ('wp_enqueue_scripts', 'fe_loadjs');
