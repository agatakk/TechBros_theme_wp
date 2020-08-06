<?php 
get_header();?>

<header class='main-header main-header--post'>
   <div class="header header--post">
       <h2 class='header__sub-header1 header--tax header__sub-header1--post'>TAX</h2>
       <h2 class='header__sub-header1 header__sub-header1--legal header__sub-header1--post'>LEGAL</h2>
       <h1 class='header__main header--tech header__main--post'>TECH</h1>
       <h2 class='header__sub-header2 header__sub-header2--post'>NA CHŁODNO</h2>
   </div>
</header>
<?php
while(have_posts()){
    the_post(); ?>
    <h2><?php the_title()?></h2>
    <?php the_content()?>
    
    <?php
}

get_footer();
?>