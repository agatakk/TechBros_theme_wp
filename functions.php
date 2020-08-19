<?php
function pageBanner(){
    //php logic will live here
    ?>
    <header class='main-header main-header--post'>
        <div class="header header--post">
            <h2 class='header__sub-header1 header--tax header__sub-header1--post'>TAX</h2>
            <h2 class='header__sub-header1 header__sub-header1--legal header__sub-header1--post'>LEGAL</h2>
            <h1 class='header__main header--tech header__main--post'>TECH</h1>
            <h2 class='header__sub-header2 header__sub-header2--post'>NA CHŁODNO</h2>
        </div>
        <div class="content">
            <div class="search-bar">
                <input type="text" class="search-bar__input" placeholder="Szukaj" aria-label="search">
                <button class="search-bar__submit" aria-label="submit search"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </header>
    <?php
}
function techbros_files() {
    wp_enqueue_style('custom_google_fonts_raleway', 'https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600&display=swap');
    wp_enqueue_style('custom_google_fonts_oswald', 'https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;600;700&display=swap');
    wp_enqueue_style('custom_google_fonts_merriweather', 'https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,900;1,400&display=swap');
    wp_enqueue_style('font-awsome', 'https://use.fontawesome.com/releases/v5.14.0/css/all.css"');
    
    if(strstr($_SERVER['SERVER_NAME'], 'localhost')){
        wp_enqueue_script('tech-bros-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
        
    }else{
        wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/undefined'), NULL, '1.0', true);
        wp_enqueue_script('tech-bros-js', get_theme_file_uri('/bundled-assets/scripts.8a29e5b94e3250f05861.js'), NULL, '1.0', true);
        wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.8a29e5b94e3250f05861.css'));
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