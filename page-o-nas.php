<?php 
get_header();
pageBanner(array(
    'title'=> get_the_title()
));

while(have_posts()){
    the_post(); 

  
    // foreach($relatedPeople as $per){
    //     echo get_the_title($per);
    // }
    ?>  
    <section class="main main--contact main--about">
                 
        
            <?php
           
            $infoLoopNew = new WP_Query(array(
                'post_type' => 'page',
            ));
                 
            while($infoLoopNew->have_posts()){
                $infoLoopNew->the_post();

           
                $relatedInfo = get_field('related_info');
                $relatedPerson = get_field('related_person');
            
               
                if($relatedInfo){
                    foreach($relatedInfo as $info) {
                    
                        ?>
                    <section class="concept">
                      <h3 class="concept__title concept__title--about"><?php echo get_the_title($info)?></h3>
                        <div class="concept__par">      
                        
                        <?php 
                        echo $info->post_content;
                        ?>

                        </div>
                        </section>
                     
                    <?php
                     }
                    }?>
                            <section class="authors-about">
           
            <?php
         $relatedPeople = get_field('related_person');
     
         if($relatedPeople){
             foreach($relatedPeople as $person) {
                $postID = $person->ID;
                $post_object = get_post($postID);       
                 ?>
                 <div class="authors-about__wrapper">
                 <div class="authors__name authors-about__name">
                     <img src="<?php echo get_the_post_thumbnail_url($person, 'authorSquare'); ?>" alt="Zdjęcie autora">
                     <div class="autors-about__info-wrapper">
                  
                     <h4 class="authors-about__title"><?php echo get_the_title($person)?></h4>
                     
                     <a href="mailto:<?php the_field('email_address', $postID); ?>"><span class="authors-about__email"><?php echo get_field('email_address', $postID)?></span></a>
                     </div>
                  
                     
                 </div>
                <div class="concept__par">                    
                     <?php  echo $person->post_content;?>

                </div>

                 </div>                   
    
             <?php
             }
             
         }
    
        
     ?>
    
                                   
               
    </section>    
                    
               <?php }
                // wp_reset_postdata()
                ?>
        

          
        </section>
   
    
    <?php
}

get_footer();
?>

               
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   

                   