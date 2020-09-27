<?php
get_header();
$url = site_url('/blog', 'localhost');
pageBanner(array(
    // 'title' => the_archive_title(),
    'home' => '<div class="content__back-to-blog"><i class="fas fa-home content__icon"></i><p><span>TechBROS Blog<span></p></div>',
    'arrows' => '>>',
    'title' => get_the_archive_title(),
));

?>

        </div>
        
           
    </header>
    <!-- MAIN -->
    <section class="main main--archives">

        <section class ='latest-posts latest-posts--archives'>
      
        <?php
            while(have_posts()){
                the_post();?>
                <div class="latest-posts__abstract">
                <h3 class="latest-posts__title"><a href="<?php the_permalink()?>"> <?php the_title()?></a></h3>
                    <div class="post-info__subtitles post-info__subtitles--posts">
                        <div class='latest-posts__details'>
                            <i class="post-info__icon post-info__icon--posts"><img src="<?php echo get_theme_file_uri('img/iconfinder_calendar-org.png') ?>" alt="icon od a calendar"></i>
                            <h4 class="post-info__date-author post-info__date-author--posts"><?php the_time('d-m-Y')?></h4>
                        </div>
                    
                            <div class='latest-posts__details'>
                                <i class="post-info__icon post-info__icon--posts"><img src="<?php echo get_theme_file_uri('img/person-org.png')?>" alt="icon of a person"></i>   
                                <h4 class="post-info__date-author post-info__date-author--posts"><?php the_author_posts_link() ?></h4>
                            </div>
                        </div>
                    <div class="latest-posts__par"><?php
                    the_excerpt();
                    ?> </div>
                    <a href="<?php the_permalink()?>"><button class="latest-posts__btn btn">Czytaj dalej</button></a>
                </div>


            <?php
            }
            ?>
            </section>
            <div class='main__pagination'>
             <?php
             echo paginate_links();
             ?>
             </div>
            <?php get_sidebar('for-archives')?>

    </section>

<?php
get_footer();
?>