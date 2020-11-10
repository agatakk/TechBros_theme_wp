<?php 
get_header();


while(have_posts()){
    the_post(); 
    pageBanner(array(
        'title' => get_the_title()
    ));
    ?>
 
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
            '[contact-form-7 id="5" title="Contact-form" html_class="contact-form"]'
        )
        ?>
        </div>
    </section>
<?php

}

get_footer();
?>