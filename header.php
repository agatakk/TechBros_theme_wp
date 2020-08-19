<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
    
</head>
<body style="background-image: url(<?php echo get_theme_file_uri('~/../img/brain-chip-icon.png')?>)" > 
<nav class='main-nav'>
        <a href="<?php echo get_home_url();?>"><img src="<?php echo get_theme_file_uri('~/../img/Group53.png')?>" alt="logo" class="main-nav__logo"></a>
        <ul class="main-menu">
            <li class = 'main-menu__menu-item main-menu__menu-item--blog '>
                <a class="main-menu__link--btn" href="<?php echo site_url('/blog')?>">
                    <button class="btn main-menu__menu-item--btn btn--nav <?php if(get_post_type()=='post') echo 'current-btn'?>">BLOG</button>
                </a>
            </li>
            <li class = 'main-menu__menu-item'>
                <a class="main-menu__link <?php if(is_page('o-nas')) echo 'active'?>" href="<?php echo site_url('/o-nas')?>">O NAS</a>
            </li>
            <li class = 'main-menu__menu-item '>
                <a class="main-menu__link <?php if(is_page('kontakt')) echo 'active'?>"  href="<?php echo site_url('/kontakt')?>">KONTAKT</a>
            </li>
           
        </ul>
        <div class="menu-hamburger">
            <div class="menu-hamburger__line"></div>
            <div class="menu-hamburger__line menu-hamburger__line"></div>
            <div class="menu-hamburger__line menu-hamburger__line"></div>
        </div>
    </nav>