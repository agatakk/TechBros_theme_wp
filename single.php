<?php 

get_header();

while(have_posts()){
    the_post(); 
    pageBanner();
    ?>

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
                <h3 class="latest-posts__title latest-posts__title--single"><?php the_title()?></h3>
                <div class="latest-posts__par"><?php the_content()?></div>
                <div class="post-content__icons">
                    <div><span class="post-content__number">15</span><i class="fas fa-comment"></i></div>
                    <div><span class="post-content__number">15</span><i class="far fa-heart"></i></div>
                    <div class="post-content__social">
                    <i class="fab fa-linkedin"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-facebook-f"></i>
                    </div>
                </div>
                </article>
                     <div class="post-content__tags-and-categories">
                         <h4 class="post-content__titles">TAGI:</h4>
                         <p><?php echo get_the_tag_list("",', ')?></p>
                        </br>
                         <h4 class="post-content__titles">KATEGORIE:</h4>
                         <p><?php echo get_the_category_list(', ')?></p>
    
                     </div>
        </section>
       
        <?php get_sidebar()?>
    </section>
    
    <?php
}

get_footer();
?>