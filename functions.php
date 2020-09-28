<?php

function change_sharebuttons_display(){
    if(is_singular('post')&& function_exists('sharing_display')){
        remove_filter('the_content', 'sharing_display', 19);
        remove_filter('the_excerpt', 'sharing_display', 19);
    }
}

add_action('loop_start', 'change_sharebuttons_display');

function custom_excerpt_length($length){
    return 30;
}
add_filter('excerpt_length', 'custom_excerpt_length', 100);

function wp_custom_archive($args = ''){
    global $wpdb, $wp_locale;
    $defaults = array(
        'limit' => '',
        'format' => 'html', 'before' => '',
        'after'=> '', 'show_post_count' => true,
        'echo' => 1,
    );
    $r = wp_parse_args($args, $defaults);
    extract($r, EXTR_SKIP);
    if('' != $limit){
        $limit = absint($limit);
        $limit = ' LIMIT ' . $limit;
    }

      // over-ride general date format ? 0 = no: use the date format set in Options, 1 = yes: over-ride
      $archive_date_format_over_ride = 0;
 
      // options for daily archive (only if you over-ride the general date format)
      $archive_day_date_format = 'Y/m/d';
   
      // options for weekly archive (only if you over-ride the general date format)
      $archive_week_start_date_format = 'Y/m/d';
      $archive_week_end_date_format   = 'Y/m/d';

      if(!$archive_date_format_over_ride){
          $archive_day_date_format = get_option('date_format');
          $archive_week_start_date_format = get_option('date_format');
          $archive_week_end_date_format = get_option('date_format');
      }

      //filters
      $where = apply_filters('customarchives_where', "WHERE post_type = 'post' AND post_status = 'publish'", $r );
      $join = apply_filters('customarchives_join', "", $r);
      $output = '<ul class="sidebar__archlist">';

      $query = "SELECT YEAR(post_date) AS 'year', MONTH(post_date) AS 'month', count(ID) as posts FROM $wpdb->posts $join $where GROUP BY YEAR (post_date), MONTH(post_date) ORDER BY post_date DESC $limit";
      $key = md5($query);
      $cache = wp_cache_get('wp_custom_archive', 'general');
      if(!isset($cache[ $key ])){
        $arcresults = $wpdb -> get_results($query);
        $cache[ $key ] = $arcresults;
        wp_cache_set('wp_custom_archive', $cache, 'general'); 
      }else{
          $arcresults = $cache[ $key ];
      }
      if($arcresults){
          $afterafter = $after;
          foreach((array)$arcresults as $arcresult){
              $url = get_month_link($arcresult->year, $arcresult->month);
              /* translators: 1: month name, 2: 4-digit year */
              $text = sprintf(__('%s'), $wp_locale->get_month($arcresult->month));
              $year_text = sprintf('<li class="sidebar__year">%d</li>', $arcresult->year);
              if($show_post_count)
                $after = '&nbsp;('.$arcresult->posts.')'.$afterafter;
             $output .= ( $arcresult->year != $temp_year ) ? $year_text : '';
             $output .= get_archives_link($url, $text, $format, $before, $after);

             $temp_year = $arcresult->year;

          }
      }
      $output .= '</ul>';
      if($echo)
        echo $output;
      else
        return $output;  
}

function pageBanner($args=NULL){
  
       
    ?>
    <header class='main-header main-header--post'>
        <div class="header header--post">
            <h2 class='header__sub-header1 header--tax header__sub-header1--post'>TAX</h2>
            <h2 class='header__sub-header1 header__sub-header1--legal header__sub-header1--post'>LEGAL</h2>
            <h1 class='header__main header--tech header__main--post'>TECH</h1>
            <h2 class='header__sub-header2 header__sub-header2--post'>NA&nbsp;CHŁODNO</h2>
        </div>
        <div class="content">
            <div class="archives_back"><a href="<?php echo site_url('/blog')?>"> <?php echo $args['home']?> </a></div>
            <span><?php echo $args['arrows']?></span>
            <p class='content__page-title'><?php echo $args['title']?></p>
            <!-- <div class="search-bar">
                <input type="text" class="search-bar__input" placeholder="Szukaj" aria-label="search">
                <button class="search-bar__submit" aria-label="submit search"><i class="fas fa-search"></i></button>
            </div> -->
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
        wp_enqueue_script('tech-bros-js', get_theme_file_uri('/bundled-assets/scripts.80b49fe06a0381c6ea2f.js'), NULL, '1.0', true);
        wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.80b49fe06a0381c6ea2f.css'));
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