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
  
    <section class="authors-about">
                <div class="authors__author authors-about__author">
                    <div class="authors__name authors-about__name">
                        <h4 class="authors-about__title"><?php the_title()?></h4>
                        <p class="authors-about__email"><?php the_field('email_address')?></p>
                    </div>
                    <div class="authors-about__img">
                    <?php the_post_thumbnail()?>
                    </div>
                    <div class="authors__bio authors-about__bio">
                        <p class="authors__par authors-about__par">
                        <?php echo get_the_content()?>
                        </p>
    
                    </div>
                </div>

   
               
    </section>
   
    
    <?php
}

get_footer();
?>