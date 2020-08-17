<?php 
get_header();


while(have_posts()){
    the_post(); 
    pageBanner();
    ?>
    <!-- <header class='main-header main-header--post'>
        <div class="header header--post">
            <h2 class='header__sub-header1 header--tax header__sub-header1--post'>TAX</h2>
            <h2 class='header__sub-header1 header__sub-header1--legal header__sub-header1--post'>LEGAL</h2>
            <h1 class='header__main header--tech header__main--post'>TECH</h1>
            <h2 class='header__sub-header2 header__sub-header2--post'>NA CHŁODNO</h2>
        </div>
    </header> -->
    <section class="main main--contact">
        <div class="main__contact-us">
            <div class="main__titles">
                <h2 class="main__contact-title-sm">Masz pytania?</h2>
                <h1 class="main__contact-title-big">Skontaktuj się z nami</h1>
            </div>
            <div class="main__email"><a href=""><?php echo get_field('email_address')?></a></div>
        </div>
        <div>
        <?php
        echo do_shortcode(
            '[contact-form-7 id="94" title="Skontaktuj się z nami" html_class="contact-form"]'
        )
        ?>
        </div>
    </section>
<?php

}

get_footer();
?>