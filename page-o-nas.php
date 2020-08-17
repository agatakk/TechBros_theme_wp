<?php 
get_header();

while(have_posts()){
    the_post(); 
    pageBanner();
    ?>
    
   
  
    <section class="main main--contact main--about">
           
            <?php
            $infoLoop = new WP_Query(array(
                'post_type' => array('details', 'info'),
                
            ));

         
            while($infoLoop->have_posts()){
                $infoLoop->the_post();

           
                $relatedInfo = get_field('related_info');
                if($relatedInfo){
                    foreach($relatedInfo as $info) {
                    
                        ?>
                    <section class="concept">
                      <h3 class="concept__title"><?php echo get_the_title($info)?></h3>
                        <div class="concept__par">      
                        
                        <?php 
                        echo get_the_content($infoID);
                        ?>

                        </div>
                        </section>
                    <?php
                     }
                    }?>
                    



                    
               <?php }
                wp_reset_postdata()
                ?>
        
            <section class="authors-about">
            <?php
         $relatedPeople = get_field('related_person');
     
         if($relatedPeople){
             foreach($relatedPeople as $person) {
                $postID = $person->ID;
                $post_object = get_post($postID);       
                 ?>
                
                 <div class="authors__name authors-about__name">
                     <a href="<?php echo get_the_permalink($person)?>">
                     <img src="<?php echo get_the_post_thumbnail_url($person, 'authorSquare'); ?>" alt="Zdjęcie autora">
                     <h4 class="authors-about__title"><?php echo get_the_title($person)?></h4>
                     </a>
                     <span class="authors-about__email"><?php echo get_field('email_address', $postID)?></span>
                     <!-- <h4 class="authors-about__title"><a href="<?php echo get_the_permalink($person)?>"> <?php echo get_the_title($person);?></a></h4> -->
                     
                 </div>
                     <div class="concept__par">
                    
                     <?php  echo $person->post_content;?>
                     
                     </div>
    
             <?php
             }
             
         }
    
        
     ?>
    
                                   
               
            </section>
            <!-- 
                <div class="authors__author authors-about__author">
                    <div class="authors__name authors-about__name">
                        <h4 class="authors-about__title">MACIEJ KOKOT</h4>
                        <p class="authors-about__email">mk@b-sharp.pl</p>
                    </div>
                    <div class="authors-about__img"><img src="img/Maciek-Kokot.png" alt=""></div>
                    <div class="authors__bio authors-about__bio">
                        <p class="authors__par authors-about__par">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan, nunc nec tempor mattis, massa dui scelerisque nunc, quis gravida risus nibh et ligula. Duis euismod nunc in sem ultricies, sed malesuada orci suscipit. Donec convallis nibh metus, eget vestibulum purus tincidunt in. Cras sit amet metus nec nibh porta sollicitudin. Sed lacinia volutpat cursus. Pellentesque lobortis libero erat, et ultricies urna luctus dictum. Praesent elementum sapien dolor, non faucibus arcu dignissim nec. Donec at nunc elit. 
                        </p>
    
                    </div>
                </div>
                <div class="authors__author authors-about__author">
                    <div class="authors__name authors-about__name">
                        <h4 class="authors-about__title">WOJCIECH KOKOT</h4>
                        <p class="authors-about__email">wk@b-sharp.pl</p>
                    </div>
                    <div class="authors-about__img authors-about__img--wk"><img src="img/wojciech_kokot.png" alt=""></div>
                    <div class="authors__bio authors-about__bio">
                        <p class="authors__par authors-about__par">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan, nunc nec tempor mattis, massa dui scelerisque nunc, quis gravida risus nibh et ligula. Duis euismod nunc in sem ultricies, sed malesuada orci suscipit. Donec convallis nibh metus, eget vestibulum purus tincidunt in. Cras sit amet metus nec nibh porta sollicitudin. Sed lacinia volutpat cursus. Pellentesque lobortis libero erat, et ultricies urna luctus dictum. Praesent elementum sapien dolor, non faucibus arcu dignissim nec. Donec at nunc elit. 
                        </p>
                    </div>
                </div>
            </section> -->
        </section>
   
    
    <?php
}

get_footer();
?>

               
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   

                   