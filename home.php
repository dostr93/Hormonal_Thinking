<?php
/*
Template Name: Home-page
*/
?>


<div class="wrapper">
    <?php get_header(); ?>
    <div class="content">
        <main>
            <section class="hero overflow-hidden">
                <div class="container position-relative">
                    <div class="row justify-content-center">
                        <div class="hero__inner text-center mx-auto col-12">
                            <h1 class="text-uppercase hero__title mx-auto inbox"><?php the_field('title'); ?>
                                <br>
                                <span class="font-italic"><?php the_field('hero_title_italic'); ?></span></h1>
                            <p class="hero__txt secondary-font mx-auto inbox"><?php the_field('text'); ?></p>
                            <div class="hero__img inbox">
                                <img data-speed=".9" class="w-100" src="<?php bloginfo('template_url'); ?>/assets/images/hero-img.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <img data-speed=".8" class="hero__bg-l position-absolute" src="<?php bloginfo('template_url'); ?>/assets/images/hero-bg-l.svg" alt="">
                    <img data-speed=".75" class="hero__bg-r position-absolute" src="<?php bloginfo('template_url'); ?>/assets/images/hero-bg-r.svg" alt="">
                </div>
            </section>
            <section class="cards">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mb-5">
                            <div class="cards__heading overflow-hidden justify-content-between row mx-0 inbox">
                                <h2 class="cards__title text-uppercase mb-0  text-center text-md-left"><?php the_field('slogan_text'); ?> <span class="font-italic"><?php the_field('slogan_text_italic'); ?></span></h2>
                                <div data-speed="1.05" class="cards__img d-none d-md-block">
                                    <img class="w-100" src="<?php bloginfo('template_url'); ?>/assets/images/cards-bg.svg" alt="">
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 mb-4 mb-md-5 mb-lg-0">
                            <div class="card inbox">
                                <div class="card__number">1</div>
                                <div class="card__img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/card-1.svg" alt="">
                                </div>
                                <div class="card__txt">Успокаивается нервная система</div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 mb-md-5 mb-lg-0">
                            <div class="card inbox">
                                <div class="card__number">2</div>
                                <div class="card__img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/card-2.svg" alt="">
                                </div>
                                <div class="card__txt">Расширяется горизонт планирования</div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card inbox">
                                <div class="card__number">3</div>
                                <div class="card__img">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/card-3.svg" alt="">
                                </div>
                                <div class="card__txt">Повышаются возможности мозга</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="about" class="about overflow-hidden">
                <div class="container position-relative">
                    <div class="row about__content position-relative align-items-center">
                        <div class="col-xl-6 order-xl-1 order-2 d-flex d-xl-block justify-content-around align-items-baseline">
                            <div class="about__img-1 inbox inbox-left">
                                <img data-speed="1.05" class="w-100" src="<?php bloginfo('template_url'); ?>/assets/images/about-1.jpg" alt="">
                            </div>
                            <div class="about__img-2 ml-xl-auto inbox">
                                <img data-speed="1.13" class="w-100" src="<?php bloginfo('template_url'); ?>/assets/images/about-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-xl-5 pt-xl-4 mt-xl-3 offset-xl-1 order-xl-2 order-1 text-xl-left text-center text-white mb-5 mb-xl-0">
                            <h2 class="about__title text-white text-uppercase inbox inbox-right"><?php the_field('about_title'); ?></h2>
                            <p class="about__txt inbox inbox-right"><?php the_field('about_txt'); ?></p>
                            <div class="about__img-3 inbox">
                                <img data-speed="1.1" class="w-100" src="<?php bloginfo('template_url'); ?>/assets/images/about-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <img data-speed=".85" class="about__bg-img-1 position-absolute" src="<?php bloginfo('template_url'); ?>/assets/images/about-bg-top.svg" alt="" >
                    <img data-speed=".9" class="about__bg-img-2 position-absolute" src="<?php bloginfo('template_url'); ?>/assets/images/about-bg-left-bottom.svg" alt="">
                    <img data-speed=".9" class="about__bg-img-3 position-absolute" src="<?php bloginfo('template_url'); ?>/assets/images/about-bg-right-bottom.svg" alt="">
                </div>
            </section>
            <section class="switchback">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-5 order-xl-1 order-2">
                            <h2 class="switchback__title text-uppercase inbox inbox-left text-center text-xl-left"><?php the_field('success_title'); ?></h2>
                            <p class="switchback__txt inbox inbox-left text-center text-xl-left"><?php the_field('success_txt'); ?></p>
                            <ul class="switchback__list list-unstyled mb-0">
                                <li class="inbox"><span>Работы в организации</span></li>
                                <li class="inbox"><span>Практик любого рода от духовных до телесных</span></li>
                                <li class="inbox"><span>Самоменеджмента</span></li>
                                <li class="inbox"><span>Реализации личных и совместных проектов</span></li>
                                <li class="inbox"><span>Сценарного планирования своей жизни</span></li>
                            </ul>
                        </div>
                        <div class="offset-xl-1 col-xl-6 order-1 order-xl-2">
                            <div class="switchback__img inbox inbox-right">
                                <img data-speed=".93" class="w-100" src="<?php bloginfo('template_url'); ?>/assets/images/swb-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="banner overflow-hidden">
                <div class="container position-relative">
                    <div class="row">
                        <div class="col-4 d-none d-md-block position-relative">
                            <div class="banner__img position-absolute inbox">
                                <img data-speed=".9" class="w-100" src="<?php bloginfo('template_url'); ?>/assets/images/banner-1.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-8 text-md-left text-center">
                            <h2 class="banner__title text-uppercase text-white mb-0 inbox inbox-right">
                                <?php the_field('banner_txt'); ?> <span class="font-italic"><?php the_field('banner_txt_italic'); ?></span>
                            </h2>
                        </div>
                        <img data-speed=".95" class="banner__bg-l" src="<?php bloginfo('template_url'); ?>/assets/images/banner-bg-l.svg" alt="">
                        <img data-speed="1.1" class="banner__bg-r" src="<?php bloginfo('template_url'); ?>/assets/images/banner-bg-r.svg" alt="">
                    </div>
                </div>
            </section>
            <section class="switchback switchback-2" id="project">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-5 offset-xl-1 order-2 text-center text-xl-left">
                            <h2 class="switchback__title text-uppercase inbox"><?php the_field('app_title'); ?></h2>
                            <p class="switchback__txt swb-2-txt inbox"><?php the_field('app_txt'); ?></p>
                            <p class="switchback__txt inbox"><?php the_field('app_text-bottom'); ?></p>
                            <div class="header__btn inbox">
                                <a href="https://play.google.com/store/apps/details?id=com.powerenergy.app" class="main-btn btn">
                                    <span>Скачать сейчас</span>
                                    <svg class="btn-arrow" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.77118 14.9295C4.47829 14.6366 4.47829 14.1617 4.77118 13.8689L12.4909 6.14917L7.70152 6.14917C7.2873 6.14917 6.95152 5.81338 6.95152 5.39917C6.95152 4.98496 7.2873 4.64917 7.70152 4.64917L14.3015 4.64917C14.5004 4.64917 14.6912 4.72819 14.8318 4.86884C14.9725 5.00949 15.0515 5.20026 15.0515 5.39917L15.0515 11.9992C15.0515 12.4134 14.7157 12.7492 14.3015 12.7492C13.8873 12.7492 13.5515 12.4134 13.5515 11.9992L13.5515 7.20983L5.83184 14.9295C5.53895 15.2224 5.06408 15.2224 4.77118 14.9295Z" fill="white"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 order-1">
                            <div class="switchback__img">
                                <div class="switchback__img-bg position-relative inbox inbox-left">
                                    <img class="switchback__img-bg-cover position-absolute" src="<?php bloginfo('template_url'); ?>/assets/images/swb-phone.png" alt="">
                                    <img data-speed=".95" class="switchback__img-bg-top position-absolute" src="<?php bloginfo('template_url'); ?>/assets/images/swb-bg-t.svg" alt="">
                                    <img data-speed="1.05" class="switchback__img-bg-bottom position-absolute" src="<?php bloginfo('template_url'); ?>/assets/images/swb-bg-b.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="form-sec overflow-hidden" id="contacts">
                <div class="container position-relative">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-md-8">
                            <h2 class="form__title text-uppercase text-center inbox">Напишите нам</h2>
                            <form id="form" class="form" action="#">
                                <div class="form-control-row pb-sm-3 mb-4">
                                    <div class="form-control-wrap mb-4 inbox">
                                        <input class="form-control _req" id="name" type="text" name="name"  placeholder="Ваше имя">
                                    </div>
                                    <div class="form-control-wrap mb-4 inbox">
                                        <input class="form-control _req _email" id="email" type="email" name="email" placeholder="Ваш Email">
                                    </div>
                                    <div class="form-control-wrap inbox">
                                        <textarea placeholder="Ваше сообщение" class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="row mx-0 align-items-center justify-content-start justify-content-sm-between">
                                    <label class="checkbox mb-4 d-flex mb-sm-0 inbox inbox-left h-100 position-relative mb-0">
                                        <input class="checkbox__input _req" type="checkbox">
                                        <span class="checkbox__text align-items-center">Я соглашаюсь с <a class="underlined-link" href="<?php echo get_page_link(56) ?>">политикой конфиденциальности</a> Hormonalthinking</span>
                                    </label>
                                    <button class="btn main-btn inbox inbox-right" name="submit">Отправить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <img data-speed=".8" class="form__bg-l position-absolute" src="<?php bloginfo('template_url'); ?>/assets/images/form-bg-l.svg" alt="">
                    <img data-speed=".75" class="form__bg-r position-absolute" src="<?php bloginfo('template_url'); ?>/assets/images/form-bg-r.svg" alt="">
                </div>
            </section>
<?php get_footer(); ?>


