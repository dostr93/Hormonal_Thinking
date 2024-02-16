<footer class="footer">
    <div class="container">
        <div class="row footer__logo-wrap">
            <div class="col-12 text-center text-xl-left">
                <a class="footer__logo" href="https://hormonalthinking.com/">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/footer-logo.svg" alt="">
                </a>
            </div>
        </div>
        <div class="row justify-content-between mb-4">
            <div class="col-xl-3 col-xl-6 text-center text-xl-left">
                <nav class="footer__menu text-white">
                    <ul class="list-inline d-block d-xl-flex mb-0">
                        <li class="position-relative underlined-link">
                            <a href="#about">О нас </a>
                        </li>
                        <li class="position-relative underlined-link">
                            <a href="#project">Проекты</a>
                        </li>
                        <li class="underlined-link">
                            <a href="#contacts">Контакты</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-xl-3 col-xl-6">
                <div class="footer__links text-center text-xl-right">
                    <a class="underlined-link d-inline-block" target="_blank" href="<?php the_field('telegram-link'); ?>"><span class="">Telegram</span></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="footer-policy d-xl-block d-flex justify-content-between pt-3">
                    <a class="underlined-link" href="<?php echo get_page_link(58) ?>">Положения и условия</a>
                    <a class="underlined-link" href="<?php echo get_page_link(56) ?>">Политика конфиденциальности</a>
                </div>
            </div>
        </div>
    </div>
</footer>
</main>
</div>
</div>

<?php wp_footer(); ?>


</body>
</html>