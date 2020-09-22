<div class="authors__summary authors__summary--search">
    <h3 class="authors__name"><a href="<?php echo site_url('/o-nas')?>"><?php the_title()?> </a></h3>          
    <img src="<?php the_post_thumbnail_url()?>" alt="Zdjęcie jednego z autorów" class="authors__img">
    <p class="authors__bio"><?php if(has_excerpt()){
                    echo get_the_excerpt();
                }else{
                    echo wp_trim_words(get_the_content(), 10);
                }?>
    </p>
</div>