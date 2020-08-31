<section class="sidebar">
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
     

        </div> -->
    
        
    </div>
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

    </section>