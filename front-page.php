<?php 
get_header();
?>
<header class='main-header'>
<div class="header">
    <h2 class='header__sub-header1 header--tax'>TAX</h2>
    <h2 class='header__sub-header1 header__sub-header1--legal'>LEGAL</h2>
    <h1 class='header__main header--tech'>TECH</h1>
    <h2 class='header__sub-header2 header--cool'>NA CHŁODNO</h2>
</div>
<div class="call-to-action">
    <p class="call-to-action__par">Czyli wszystko, co chciałeś wiedzieć o tax-techu i legal-techu, ale nie miałeś kogo zapytać.</p>
    <button class="call-to-action__btn btn">Wchodzę!</button>
</div>
</header>
<!-- MAIN -->
<section class="main">

<!-- LAST POST -->
<section class ='latest-post'>
    <?php 
    
    $latestPost = new WP_Query(array(
        'posts_per_page' => 1,
    ));

    while($latestPost->have_posts()){
            $latestPost ->the_post();?>

        <div class="post-info latest-post__box--hpg">
            <h2 class="post-info__title"> <?php the_title()?></a></h2>
            <div class="post-info__subtitles">
                <div>
                    <i class="post-info__icon"><img src="<?php echo get_theme_file_uri('img/calendar.png')?>" alt="icon od a calendar"></i>
                    <h4 class="post-info__date-author"><?php the_time('d-m-Y')?></h4>
                </div>
                <div>
                    <i class="post-info__icon"><img src="<?php echo get_theme_file_uri('img/person.png')?>" alt="icon of a person"></i>   
                    <h4 class="post-info__date-author"><?php the_author_posts_link() ?></h4>
                </div>
            </div>
        </div>
        <div class="abstract latest-post__box--hpg">
            <p class="abstract__par par"><?php echo wp_trim_words(get_the_content(), 30)?> </p>
            <button class="abstract__btn btn"><a href="<?php the_permalink()?>"> Czytaj dalej</a></button>
        </div>
    <?php       
    }
    ?>
</section>
<!-- LAST POSTS -->

<section class ='latest-posts'>

<?php 
$homepagePosts = new WP_Query(array(
    'paged' => get_query_var('paged', 1),
    'posts_per_page' => 4,
    'offset' => 1,
));

while ($homepagePosts -> have_posts()){
   $homepagePosts -> the_post();
   
   ?>
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
          <p class="latest-posts__par"> <?php echo wp_trim_words(get_the_content(), 20)?> </p>
          <button class="latest-posts__btn btn"><a href="<?php the_permalink()?>"> Czytaj dalej</a></button>
      
    </div>
 
    <?php 
}

wp_reset_postdata();
?> 
      
    <!-- <div class="latest-posts__abstract">
        <h3 class="latest-posts__title">Tytuł consequat libero non est suscipit, non ultricies lacus</h3>
        <div class="post-info__subtitles post-info__subtitles--posts">
            <div class='latest-posts__details'>
                <i class="post-info__icon post-info__icon--posts"><img src="<?php echo get_theme_file_uri('img/iconfinder_calendar-org.png') ?>" alt="icon od a calendar"></i>
                <h4 class="post-info__date-author post-info__date-author--posts">25.05.2020</h4>
            </div>
        
            <div class='latest-posts__details'>
                <i class="post-info__icon post-info__icon--posts"><img src="<?php echo get_theme_file_uri('img/person-org.png')?>" alt="icon of a person"></i>   
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
                <i class="post-info__icon post-info__icon--posts"><img src="<?php echo get_theme_file_uri('img/iconfinder_calendar-org.png') ?>" alt="icon od a calendar"></i>
                <h4 class="post-info__date-author post-info__date-author--posts">25.05.2020</h4>
            </div>
        
            <div class='latest-posts__details'>
                <i class="post-info__icon post-info__icon--posts"><img src="<?php echo get_theme_file_uri('img/person-org.png')?>" alt="icon of a person"></i>   
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
                <i class="post-info__icon post-info__icon--posts"><img src="<?php echo get_theme_file_uri('img/iconfinder_calendar-org.png') ?>" alt="icon od a calendar"></i>
                <h4 class="post-info__date-author post-info__date-author--posts">25.05.2020</h4>
            </div>
        
            <div class='latest-posts__details'>
                <i class="post-info__icon post-info__icon--posts"><img src="<?php echo get_theme_file_uri('img/person-org.png')?>" alt="icon of a person"></i>   
                <h4 class="post-info__date-author post-info__date-author--posts">MACIEJ KOKOT</h4>
             </div>
        </div>
        <p class="latest-posts__par">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ultricies risus ut pulvinar egestas. Aliquam ultrices elit elit, eu elementum risus sodales eget. Curabitur vel tincidunt nisi, in porta turpis. </p>
        <button class="latest-posts__btn btn">Czytaj dalej</button>
        </div> -->

</section>
<!-- SIDEBAR -->
<?php get_sidebar()?>
</section>
<!-- KONIEC MAIN -->
</section>

<?php get_footer();
?>