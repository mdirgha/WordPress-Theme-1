<?php
/*

    =======================================
    Include scripts
    =======================================
*/
function awesome_script_enqueue() {

    //css    
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/awesome.css', array(), '1.0.0', 'all');
    wp_enqueue_script('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.6.1', 'all');
    //js
    wp_enqueue_script('customjs',get_template_directory_uri() . '/js/awesome.js', array(), '1.0.0', true);
    wp_enqueue_script('bootstrapjs',get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.6.1', true);
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'awesome_script_enqueue');

/*

    =======================================
    Activate menus
    =======================================
*/

function awesome_theme_setup()
{
    add_theme_support('menus');
    
}
add_action('init','awesome_theme_setup');

add_theme_support('custom-background'); 
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

add_theme_support('post-formats',array('aside','image','video'));

//sidebar functions 
function awesome_widget_setup() {
    register_sidebar(
        
        array(

            'name' => 'Sidebar',
            'id'   => 'Sidebar-1',
            'Class'=> 'custom',
            'description' => 'Standard Sidebar',
            'before_widget' => '<aside id="%1$s" class="widget%2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        )
    );
}
add_action('widgets_init','awesome_widget_setup');