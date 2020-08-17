<?php
get_header();
pageBanner();
?>
 <!-- <header class='main-header main-header--post'>
        <div class="header header--post">
            <h2 class='header__sub-header1 header--tax header__sub-header1--post'>TAX</h2>
            <h2 class='header__sub-header1 header__sub-header1--legal header__sub-header1--post'>LEGAL</h2>
            <h1 class='header__main header--tech header__main--post'>TECH</h1>
            <h2 class='header__sub-header2 header__sub-header2--post'>NA CHŁODNO</h2>
        <div class="search-title">

            <div class="content">
                <div class="search-bar">
                    <input type="text" class="search-bar__input" placeholder="Szukaj" aria-label="search">
                    <button class="search-bar__submit" aria-label="submit search"><i class="fas fa-search"></i></button>
            </div>
            <div class="search-title__title"> -->
    
            <h1><?php the_archive_title()?></h1>
            </div>
        </div>
        
           
    </header>
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
                    <button class="latest-posts__btn btn"><a href="<?php the_permalink()?>">Czytaj dalej</a> </button>
                </div>


            <?php
            }
            ?>
            <br><div>
            <?php
            echo paginate_links();
            ?>

            </div>
            </section>
       <?php get_sidebar()?>

    </section>

<?php
get_footer();
?>