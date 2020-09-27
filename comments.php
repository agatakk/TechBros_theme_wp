<section id="comments" class="comments-section">
<?php              
if(have_comments()){
    ?>
    <a href="#commentform" class="commentform-link">Dodaj komentarz</a>
    <ol class='comments-list'>
        <?php
        wp_list_comments();
        ?>
    </ol>
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
</section>
