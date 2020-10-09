
    
    <?php              
if(have_comments()){
    ?>
    <h3 class="comments__title">
        <?php
        printf(
            'Komentarze na temat wpisu <span class="comments__post-title">' . get_the_title() . '</span>' 
        )        
        ?>
    </h3>
    <a href="#commentform" class="commentform-link">Dodaj komentarz</a>
    <div class='comments-list'>
        <?php
        $args = array(
            
            'style'  => 'div',
            'reverse_top_level' => true,
        );
        wp_list_comments($args);
        ?>
    </div>
    <?php
}
    $commenter = wp_get_current_commenter();
// $req = get_option('require_name_email');
        comment_form(
             array(

                'comment_field' => '<p class="comment-form-author"> <textarea id="comment" rows="10" class="contact-form__input" name="comment" aria-required="true" placeholder="Wpisz komentarz"></textarea></p>',
                'fields' => array(
                   
                    'author' => '<input type="text" name="author" class="contact-form__input" value ="'. esc_attr($commenter['comment_author']) .'" placeholder="Twoje imię">',
                    'email' =>'<input type="text" name="email" class="contact-form__input" value ="'. esc_attr($commenter['comment_author_email']) .'" placeholder="Twój email">',
        
                ),
                'label_submit' => 'Opublikuj',    
            )
        );
?>
