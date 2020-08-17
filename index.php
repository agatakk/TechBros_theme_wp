<?php
get_header();
pageBanner();
?>

    <!-- MAIN -->
    <section class="main">

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
                    <button class="latest-posts__btn btn">Czytaj dalej</button>
                </div>


            <?php
            }
            ?>
            <br><div>
            <?php
            echo paginate_links();
            ?>

            </div>


            <!-- <div class="latest-posts__abstract">
                <h3 class="latest-posts__title">Tytuł consequat libero non est suscipit, non ultricies lacus</h3>
                <div class="post-info__subtitles post-info__subtitles--posts">
                    <div class='latest-posts__details'>
                        <i class="post-info__icon post-info__icon--posts"><img src="img/iconfinder_calendar-org.png" alt="icon od a calendar"></i>
                        <h4 class="post-info__date-author post-info__date-author--posts">25.05.2020</h4>
                    </div>
                
                    <div class='latest-posts__details'>
                        <i class="post-info__icon post-info__icon--posts"><img src="img/person-org.png" alt="icon of a person"></i>   
                        <h4 class="post-info__date-author post-info__date-author--posts">MACIEJ KOKOT</h4>
                     </div>
                </div>
                   <p class="latest-posts__par">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ultricies risus ut pulvinar egestas. Aliquam ultrices elit elit, eu elementum risus sodales eget. Curabitur vel tincidunt nisi, in porta turpis. </p>
                   <button class="latest-posts__btn btn">Czytaj dalej</button>
            </div>
          
            <div class="latest-posts__abstract">
                <h3 class="latest-posts__title">Tytuł consequat libero non est suscipit, non ultricies lacus</h3>
                <div class="post-info__subtitles post-info__subtitles--posts">
                    <div class='latest-posts__details'>
                        <i class="post-info__icon post-info__icon--posts"><img src="img/iconfinder_calendar-org.png" alt="icon od a calendar"></i>
                        <h4 class="post-info__date-author post-info__date-author--posts">25.05.2020</h4>
                    </div>
                
                    <div class='latest-posts__details'>
                        <i class="post-info__icon post-info__icon--posts"><img src="img/person-org.png" alt="icon of a person"></i>   
                        <h4 class="post-info__date-author post-info__date-author--posts">MACIEJ KOKOT</h4>
                     </div>
                </div>
                <p class="latest-posts__par">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ultricies risus ut pulvinar egestas. Aliquam ultrices elit elit, eu elementum risus sodales eget. Curabitur vel tincidunt nisi, in porta turpis. </p>
                <button class="latest-posts__btn btn">Czytaj dalej</button>
            </div>
        
            <div class="latest-posts__abstract">
                <h3 class="latest-posts__title">Tytuł consequat libero non est suscipit, non ultricies lacus</h3>
                <div class="post-info__subtitles post-info__subtitles--posts">
                    <div class='latest-posts__details'>
                        <i class="post-info__icon post-info__icon--posts"><img src="img/iconfinder_calendar-org.png" alt="icon od a calendar"></i>
                        <h4 class="post-info__date-author post-info__date-author--posts">25.05.2020</h4>
                    </div>
                
                    <div class='latest-posts__details'>
                        <i class="post-info__icon post-info__icon--posts"><img src="img/person-org.png" alt="icon of a person"></i>   
                        <h4 class="post-info__date-author post-info__date-author--posts">MACIEJ KOKOT</h4>
                     </div>
                </div>
                <p class="latest-posts__par">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ultricies risus ut pulvinar egestas. Aliquam ultrices elit elit, eu elementum risus sodales eget. Curabitur vel tincidunt nisi, in porta turpis. </p>
                <button class="latest-posts__btn btn">Czytaj dalej</button>
                </div>
                <div class="latest-posts__abstract">
                    <h3 class="latest-posts__title">Tytuł consequat libero non est suscipit, non ultricies lacus</h3>
                    <div class="post-info__subtitles post-info__subtitles--posts">
                        <div class='latest-posts__details'>
                            <i class="post-info__icon post-info__icon--posts"><img src="img/iconfinder_calendar-org.png" alt="icon od a calendar"></i>
                            <h4 class="post-info__date-author post-info__date-author--posts">25.05.2020</h4>
                        </div>
                    
                        <div class='latest-posts__details'>
                            <i class="post-info__icon post-info__icon--posts"><img src="img/person-org.png" alt="icon of a person"></i>   
                            <h4 class="post-info__date-author post-info__date-author--posts">MACIEJ KOKOT</h4>
                         </div>
                    </div>
                       <p class="latest-posts__par">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ultricies risus ut pulvinar egestas. Aliquam ultrices elit elit, eu elementum risus sodales eget. Curabitur vel tincidunt nisi, in porta turpis. </p>
                       <button class="latest-posts__btn btn">Czytaj dalej</button>
                </div>
                <div class="latest-posts__abstract">
                    <h3 class="latest-posts__title">Tytuł consequat libero non est suscipit, non ultricies lacus</h3>
                    <div class="post-info__subtitles post-info__subtitles--posts">
                        <div class='latest-posts__details'>
                            <i class="post-info__icon post-info__icon--posts"><img src="img/iconfinder_calendar-org.png" alt="icon od a calendar"></i>
                            <h4 class="post-info__date-author post-info__date-author--posts">25.05.2020</h4>
                        </div>
                    
                        <div class='latest-posts__details'>
                            <i class="post-info__icon post-info__icon--posts"><img src="img/person-org.png" alt="icon of a person"></i>   
                            <h4 class="post-info__date-author post-info__date-author--posts">MACIEJ KOKOT</h4>
                         </div>
                    </div>
                       <p class="latest-posts__par">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ultricies risus ut pulvinar egestas. Aliquam ultrices elit elit, eu elementum risus sodales eget. Curabitur vel tincidunt nisi, in porta turpis. </p>
                       <button class="latest-posts__btn btn">Czytaj dalej</button>
                </div>
                   -->
        </section>
        <?php get_sidebar()?>

    </section>

<?php
get_footer();
?>