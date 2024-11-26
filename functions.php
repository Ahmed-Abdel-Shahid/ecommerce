<?php

function wpdocs_lms_scripts(){
wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css');

wp_enqueue_style('templatemo',get_template_directory_uri().'/assets/css/templatemo.css');
wp_enqueue_style('custom',get_template_directory_uri().'/assets/css/custom.css');
wp_enqueue_style('fonts',"https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap");
wp_enqueue_style('fontawesome',get_template_directory_uri().'/assets/css/fontawesome.min.css');


wp_enqueue_script('jquery-js',get_template_directory_uri()."/assets/js/jquery-1.11.0.min.js",array(),'1.0.0',true);
wp_enqueue_script('jquery-migrate',get_template_directory_uri()."/assets/js/jquery-migrate-1.2.1.min.js",array('jquery'),'1.0.0',true);
wp_enqueue_script('bootstrap.bundle',get_template_directory_uri()."/assets/js/bootstrap.bundle.min.js",array('jquery'),'1.0.0',true);
wp_enqueue_script('templatemo-js',get_template_directory_uri()."/assets/js/templatemo.js",array('jquery'),'1.0.0',true);
wp_enqueue_script('custom-js',get_template_directory_uri()."/assets/js/custom.js",array('jquery'),'1.0.0',true);



}

add_action("wp_enqueue_scripts","wpdocs_lms_scripts");

function hemesupport()
{
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'hemesupport' );


// Register a new navigation menu




 
function theme_widgets_init(){
    $args =[
        'name' => __('Sidebar'),
        'id'            => 'sidebar_widget',
		'description'   => __( 'Registring widget area' ),
'before_widget'	=> '<section id="someId">',
		'after_widget'	=> '<section>',
		'before_title'	=> '<h2 class="widget-title">',
		'after_title'	=> '<h2>',

    ];
    register_sidebar($args);
}
add_action( 'widgets_init', 'theme_widgets_init' );
  
?>