<?php

/* Theme setup
/* -------------------------------- */
if ( ! function_exists( "magazine_setup" ) ) {
    function magazine_setup(){

        add_theme_support( "title-tag" );

        // Enable automatic feed links
        add_theme_support("automatic-feed-links");

        // Enable featured image
        add_theme_support("post-thumbnails");

        // Thumbnails sizes
        add_image_size("magazine_single", 800, 493, true); 
        add_image_size("magazine_big", 1400, 928, true); 

        //Custom menu areas
        register_nav_menus( array(
            "header" => esc_html__("Header", "magazine")
        ));

        load_theme_textdomain("magazine", get_template_directory()."/languages");
    }
}
add_action("after_setup_theme", "magazine_setup");


/*sidebars*/
/*-----------------------------------------*/
if (! function_exists("magazine_sidebars")) {
    function magazine_sidebars() {
        register_sidebar( array(
            'name'          => "Primary",
            'id'            => 'sidebar-1',
            "description"   => "Primary Sidebar",
            'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="sidebar-widget">', /* <---- impostare widjet title style nel CSS */
            'after_title'   => '</h2>',
        ) );
    }
}
add_action("widgets_init", "magazine_sidebars"); 

/* styles - scripts
/* ----------------------------------- */

if( ! function_exists("magazine_style_scripts")){
    function magazine_style_scripts(){

        wp_enqueue_script("magazine-scripts", get_template_directory_uri()."/js/scripts.js", array("jquery"), "", true);

        wp_enqueue_style("magazine-roboto", "//fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap");

        wp_enqueue_style("magazine", get_template_directory_uri().'/style.css');
        
    }
}

add_action( "wp_enqueue_scripts", "magazine_style_scripts");
?>