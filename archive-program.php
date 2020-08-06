
<?php 
get_header();
?>
<header class='main-header main-header--post'>
        <div class="header header--post">
            <h2 class='header__sub-header1 header--tax header__sub-header1--post'>TAX</h2>
            <h2 class='header__sub-header1 header__sub-header1--legal header__sub-header1--post'>LEGAL</h2>
            <h1 class='header__main header--tech header__main--post'>TECH</h1>
            <h2 class='header__sub-header2 header__sub-header2--post'>NA CHŁODNO</h2>
        </div>
        <div class="content">
            <div class="search-bar">
                <input type="text" class="search-bar__input" placeholder="Szukaj" aria-label="search">
                <button class="search-bar__submit" aria-label="submit search"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </header>
        <section class="main main--contact">
        <?php
        while (have_posts()){
            the_post(); ?>

            <section class="concept">
                <h3 class="concept__title"><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>
                <p class="concept__par">
                    <?php the_content();?>
                </p>
            </section>
    
        <?php

        }
        
        ?>
            <section class="authors-about">
                <div class="authors__author authors-about__author">
                    <div class="authors__name authors-about__name">
                        <h4 class="authors-about__title">MACIEJ KOKOT</h4>
                        <p class="authors-about__email">mk@b-sharp.pl</p>
                    </div>
                    <!-- <div class="authors-about__img"><img src="img/Maciek-Kokot.png" alt=""></div> -->
                    <!-- <div class="authors__bio authors-about__bio">
                        <p class="authors__par authors-about__par">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan, nunc nec tempor mattis, massa dui scelerisque nunc, quis gravida risus nibh et ligula. Duis euismod nunc in sem ultricies, sed malesuada orci suscipit. Donec convallis nibh metus, eget vestibulum purus tincidunt in. Cras sit amet metus nec nibh porta sollicitudin. Sed lacinia volutpat cursus. Pellentesque lobortis libero erat, et ultricies urna luctus dictum. Praesent elementum sapien dolor, non faucibus arcu dignissim nec. Donec at nunc elit. 
                        </p>
    
                    </div> -->
                </div>
                <div class="authors__author authors-about__author">
                    <div class="authors__name authors-about__name">
                        <h4 class="authors-about__title">WOJCIECH KOKOT</h4>
                        <p class="authors-about__email">wk@b-sharp.pl</p>
                    </div>
                    <!-- <div class="authors-about__img authors-about__img--wk"><img src="img/wojciech_kokot.png" alt=""></div>
                    <div class="authors__bio authors-about__bio">
                        <p class="authors__par authors-about__par">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan, nunc nec tempor mattis, massa dui scelerisque nunc, quis gravida risus nibh et ligula. Duis euismod nunc in sem ultricies, sed malesuada orci suscipit. Donec convallis nibh metus, eget vestibulum purus tincidunt in. Cras sit amet metus nec nibh porta sollicitudin. Sed lacinia volutpat cursus. Pellentesque lobortis libero erat, et ultricies urna luctus dictum. Praesent elementum sapien dolor, non faucibus arcu dignissim nec. Donec at nunc elit. 
                        </p>
                    </div> -->
                </div>
            </section>
        </section>

        
<?php 
get_footer();
?>
