<?php
function techbros_files() {
    wp_enqueue_style('custom_google_fonts_raleway', 'https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600&display=swap');
    wp_enqueue_style('custom_google_fonts_oswald', 'https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;600;700&display=swap');
    wp_enqueue_style('custom_google_fonts_merriweather', 'https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,900;1,400&display=swap');
    
    if(strstr($_SERVER['SERVER_NAME'], 'localhost')){
        wp_enqueue_script('tech-bros-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
        
    }else{
        wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/undefined'), NULL, '1.0', true);
        wp_enqueue_script('tech-bros-js', get_theme_file_uri('/bundled-assets/scripts.95b8de60e386dddedb32.js'), NULL, '1.0', true);
        wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.95b8de60e386dddedb32.css'));
    }
    
    // wp_enqueue_style('techbros_main_styles', get_stylesheet_uri());
}


add_action('wp_enqueue_scripts', 'techbros_files');
function techbros_features(){

    /* dodawanie menu do kokpitu */
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('authorSquare', 250, 250, true);
    add_image_size('authorPortrait', 250, 290, true);

}
add_action('after_setup_theme', 'techbros_features');

//creating custom post types


?>