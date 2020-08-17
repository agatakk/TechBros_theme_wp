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
    <section class="main main--post">
        <section class="post-content">
            <div class="post-info__subtitles post-info__subtitles--posts post-info__subtitles post-info__subtitles--post-cont">
                <div class='latest-posts__details latest-posts__details--post-cont'>
                    <i class="post-info__icon post-info__icon--posts"><img src="<?php echo get_theme_file_uri('img/iconfinder_calendar-org.png') ?>"></i>
                    <h4 class="post-info__date-author post-info__date-author--posts post-info__date-author--post-cont"><?php the_time('d-m-Y')?></h4>
                </div>
            
                <div class='latest-posts__details latest-posts__details--post-cont'>
                    <i class="post-info__icon post-info__icon--posts"><img src="<?php echo get_theme_file_uri('img/person-org.png')?>" alt="icon of a person"></i>   
                    <h4 class="post-info__date-author post-info__date-author--posts post-info__date-author--post-cont"><?php the_author_posts_link() ?></h4>
                </div>
            </div>
            <article class="post-content__article">
                <h3 class="latest-posts__title"><?php the_title()?></h3>
                <p class="latest-posts__par"><?php the_content()?></p>
                 <!-- <p class="latest-posts__par">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ultricies risus ut pulvinar egestas. Aliquam ultrices elit elit, eu elementum risus sodales eget. Curabitur vel tincidunt nisi, in porta turpis. </p>
                 <p class="latest-posts__par">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ultricies risus ut pulvinar egestas. Aliquam ultrices elit elit, eu elementum risus sodales eget. Curabitur vel tincidunt nisi, in porta turpis. </p>
                 <p class="latest-posts__par">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ultricies risus ut pulvinar egestas. Aliquam ultrices elit elit, eu elementum risus sodales eget. Curabitur vel tincidunt nisi, in porta turpis. </p>
                 <p class="latest-posts__par">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ultricies risus ut pulvinar egestas. Aliquam ultrices elit elit, eu elementum risus sodales eget. Curabitur vel tincidunt nisi, in porta turpis. </p>
                 <p class="latest-posts__par">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ultricies risus ut pulvinar egestas. Aliquam ultrices elit elit, eu elementum risus sodales eget. Curabitur vel tincidunt nisi, in porta turpis. </p> -->
                </article>
                     <div class="post-content__tags-and-categories">
                         <h4 class="post-content__titles">TAGI:</h4>
                         <p><?php the_tags()?></p>
                         <h4 class="post-content__titles">KATEGORIE:</h4>
                         <p><?php echo get_the_category_list()?></p>
    
                     </div>
        </section>
       
        <?php get_sidebar()?>
    </section>
    
    <?php
}

get_footer();
?>