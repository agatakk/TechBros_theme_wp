<?php
get_header();
?>
<section class="main main--not-found" style="background-image: url(<?php echo get_theme_file_uri('~/../img/headlessGuy.jpg')?>)">
<section class="error-message">
<h2 class="error-message__title">Błąd 404</h2>
<span class="error_message__subtitle">:ten kod nie zadziałał</span>
<h3 class="error-message_subtitle-explanation">Co się mogło stać?</h3>
<ul class="error-message__explanation-list">
    <li class="error-message__item">Strona nie istniała nie istnieje lub została usunięta</li>
    <li class="error-message__item">Strona jest jest już gdzieś indziej</li>
    <li class="error-message__item">Trwają prace techniczne związane z tą stroną</li>
</ul>
<h3 class="error-message_subtitle-explanation">Co możesz zrobić?</h3>
<ul class="error-message__explanation-list">
    <li class="error-message__item">Ponownie wpisać adres URL</li>
    <li class="error-message__item">Wrócić na <a class="error-message__link" href="<?php echo  get_home_url()?>"> <span>stronę główną</span></a></li>
    <li class="error-message__item">Skorzystać z wyszukiwarki <span> <?php get_search_form()?></span></li>
</ul>



</section>

</section>
<?php

get_footer()
?>