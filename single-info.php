<?php 
get_header();

while(have_posts()){
    the_post(); ?>
     <header class='main-header main-header--post'>
        <div class="header header--post">
            <h2 class='header__sub-header1 header--tax header__sub-header1--post'>TAX</h2>
            <h2 class='header__sub-header1 header__sub-header1--legal header__sub-header1--post'>LEGAL</h2>
            <h1 class='header__main header--tech header__main--post'>TECH</h1>
            <h2 class='header__sub-header2 header__sub-header2--post'>NA CHŁODNO</h2>
        </div> 
    </header>
  
    <section class="main main--contact">
            <section class="concept">
                <h3 class="concept__title"><?php the_title()?></h3>
                <div class="concept__par">
                   <?php the_content()?>
           
                </div>
            </section>
            <section>
            
                <?php
                $relatedPeople = get_field('related_person');
                if($relatedPeople){
                    foreach($relatedPeople as $person) {
                
                        ?>
                       
                        <div class="authors__name authors-about__name">
                            <a href="<?php echo get_the_permalink($person)?>">
                            <img src="<?php echo get_the_post_thumbnail_url($person, 'authorSquare'); ?>" alt="Zdjęcie autora">
                            <h4 class="authors-about__title"><?php echo get_the_title($person)?></h4>
                            </a>
                            <!-- <h4 class="authors-about__title"><a href="<?php echo get_the_permalink($person)?>"> <?php echo get_the_title($person);?></a></h4> -->
                            
                        </div>
    
                    <?php
                    }
                    
                }
                ?>
            </section>
        
        </section>
   
    
    <?php
}

get_footer();
?>
    