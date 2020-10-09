<footer class ='footer'>
        <ul class="footer__pages-list footer__info">
           <li class="footer__link-wrapper"><a class='footer__link' href="<?php echo site_url('/blog')?>">BLOG</a></li>
            <li class="footer__link-wrapper"><a class ='footer__link' href="<?php echo site_url('/o-nas')?>">O NAS</a></li>
            <li class="footer__link-wrapper"><a class= 'footer__link' href="<?php echo site_url('/kontakt')?>">KONTAKT</a></li>
        </ul>
        <section class="footer__contact-us footer__info">
            <h4 class="footer__title">SKONTAKTUJ SIĘ</h4>
            <p class="footer__email-address"><a href="mailto" class="footer__address-link">info@b-sharp.pl</a></p>
        </section>
        <section class="footer__know-us footer__info">
            <h4 class="footer__title">POZNAJ NAS</h4>
            <p class="footer__know-us-par">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet vulputate lectus. Integer sit amet arcu ac urna tincidunt consequat id </p>
        </section>
        <section class="footer__privacy-policy footer__info">
        <a class="footer__title" href="<?php echo site_url('/polityka-prywatnosci')?>">
            <h4 class="footer-title">POLITYKA PRYWATNOŚCI</h4>
        </a>
        </section>
        <section class="footer__find-us footer__info">
            <h4 class="footer__title">ZNAJDŹ NAS</h4>
            <div class='footer__icons'>
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-twitter"></i>                
            </div>
        </section>
    </footer>
<?php wp_footer(); ?>
</body>
</html>