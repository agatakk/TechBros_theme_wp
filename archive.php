<?php
get_header();
?>
 <header class='main-header main-header--post'>
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
            <div class="search-title__title">
    
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
        <section class="sidebar sidebar--post">
            <section class="sidebar__section sidebar__categories-and-tags">
                <h3 class="sidebar__title">Kategorie</h3>
                <h3 class="sidebar__title">Tagi</h3>
            </section>
            <section class="sidebar__section  sidebar_archives">
                <h3 class="sidebar__title">Archiwum</h3>
            </section>
            <section class ='sidebar__section  sidebar__authors authors'>
                <h3 class="sidebar__title">Autorzy</h3>
                <div class="authors__summary">
                    <h3 class="authors__name">MACIEJ KOKOT</h3>
                    <img src="img/Maciek-Kokot.png" alt="Zdjęcie Macieja Kokota" class="authors__img img--maciej">
                    <p class="authors__bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ultricies risus ut pulvinar egestas. Aliquam ultrices elit elit, eu elementum risus sodales eget. um dolor sit amet, consectetur adipia. um dolor sit amet
                    </p>
                </div>
                <div class="authors__summary">
                    <h3 class="authors__name">WOJCIECH KOKOT</h3>
                    <img src="img/wojciech_kokot.png" alt="Zdjęcie Wojciecha Kokota" class="authors__img img--wojciech">
                    <p class="authors__bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ultricies risus ut pulvinar egestas. Aliquam ultrices elit elit, eu elementum risus sodales eget. um dolor sit amet
                    </p>
                </div>
            </section>
        </section>

    </section>

<?php
get_footer();
?>