<?php 
get_header();
pageBanner(array(
    'title' => 'Wyniki wyszukiwania frazy:  &ldquo; <span>'. esc_html(get_search_query(false)) .'&rdquo; </span>'
));
?>



<section class="main main--search">
<?php
if(have_posts()){
    
    while(have_posts()){
        the_post(); ?>   
            <section class="post-content">
              
            <?php get_template_part('template-parts/content', get_post_type()); ?>
    
            </section>
    
    <?php
       
    }
}else{
      echo '<h3 class="latest-post__title main__no-results">Nie znaleziono wyników pasujących do wyszukiwania.</h3>';  
}
?>
</section>
<?php
get_footer();
?>