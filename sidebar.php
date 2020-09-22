<section class="sidebar">
    <div class="sidebar__section sidebar__categories-and-tags">
        <h3 class="sidebar__title">Kategorie</h3>
        <div class="sidebar__cat-tags-list">

        <?php wp_list_categories(array(
           'title_li' => '', 
           'show_count' => 'true',
           
        ))?>
        </div>
        <h3 class="sidebar__title">Tagi</h3>
        <div class="sidebar__cat-tags-list">
            <?php wp_tag_cloud(array(
                'smallest' => 1,
                'largest' =>1.5,
                'unit' => 'rem',
                
            ))?>
        </div>
    </div>
    <div class="sidebar__section  sidebar_archives">
        <h3 class="sidebar__title">Archiwum</h3>
        
        <?php 
        wp_custom_archive()
        // wp_get_archives();
        ?>
        <!-- <div class="sidebar__year">
        <?php 
        wp_get_archives(array(
            'type' => 'yearly',
            'format' => 'custom', 
            'before'=>'<h5 class="siebar__item">', 
            'after'=>'</h5>',
            'echo' => 0,
        ));
        // $pattern = ' ((19|20)\d{2}(</a>))';
        // echo preg_replace($pattern, '\\3', $string);
      
        
        ?> 
        <div class="sidebar__month">
        <ul class="sidebar__month-item">
        <?php wp_get_archives(array(
            'type' => 'monthly', 'postbypost',
        ))?> 
        <ul class="sidebar__titles">
        <?php 
          wp_get_archives(array(
            'type' => 'postbypost',
            
          
        ));
        ?></ul>
        </ul>
        </div>

        </div> -->
    <div class ='sidebar__section  sidebar__authors authors'>
       <a href="<?php echo get_post_type_archive_link('details')?>"><h3 class="sidebar__title">Autorzy</h3></a>
        <?php
        $homepageInfo = new wp_Query(array(
            'posts_per_page'=> 2,
            'post_type' => 'details',
        ));?>
        <div class="authors__summary-wrapper">

        
        <?php

        while($homepageInfo->have_posts()){
            $homepageInfo->the_post();?>

            <div class="authors__summary">
                <h3 class="authors__name"><a href="<?php echo site_url('/o-nas')?>"><?php the_title()?> </a></h3>
           
                <img src="<?php the_post_thumbnail_url()?>" alt="Zdjęcie jednego z autorów" class="authors__img">
                <p class="authors__bio"><?php if(has_excerpt()){
                    echo get_the_excerpt();
                }else{
                    echo wp_trim_words(get_the_content(), 10);
                }?>
                </p>
            </div>
       
        <?php
        }

        ?>
        </div>
    </div>
    </section>