<div class="latest-posts__abstract">
    <h3 class="latest-posts__title"><a href="<?php the_permalink()?>"> <?php the_title()?></a></h3>              
    <div class="latest-posts__par">
        <?php
            echo wp_trim_words(get_the_content(), 30);
        ?>
    </div>
</div>