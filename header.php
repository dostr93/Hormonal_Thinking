<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0">
    <meta name="description" content="Official page for Power Energy app" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hormonal Thinking</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>
<body>
<header id="header" class="header position-fixed">
    <div class="container">
        <div class="header__inner row mx-0 align-items-center justify-content-between position-relative">
            <?php the_custom_logo(); ?>
            <nav class="header__menu d-xl-block d-none position-absolute">
                <ul class="list-inline row mx-0 mb-0">
                    <li class="position-relative">
                        <a href="#about">О нас </a>
                        <div class="header__vertical-line d-inline-block"></div>
                    </li>
                    <li class="position-relative">
                        <a href="#project">Проекты</a>
                        <div class="header__vertical-line d-inline-block"></div>
                    </li>
                    <li><a href="#contacts">Контакты</a></li>
                </ul>
            </nav>
            <div class="header__btn">
                <a href="https://play.google.com/store/apps/details?id=com.powerenergy.app" class="main-btn btn">
                    <span>Скачать сейчас</span>
                    <svg class="btn-arrow" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.77118 14.9295C4.47829 14.6366 4.47829 14.1617 4.77118 13.8689L12.4909 6.14917L7.70152 6.14917C7.2873 6.14917 6.95152 5.81338 6.95152 5.39917C6.95152 4.98496 7.2873 4.64917 7.70152 4.64917L14.3015 4.64917C14.5004 4.64917 14.6912 4.72819 14.8318 4.86884C14.9725 5.00949 15.0515 5.20026 15.0515 5.39917L15.0515 11.9992C15.0515 12.4134 14.7157 12.7492 14.3015 12.7492C13.8873 12.7492 13.5515 12.4134 13.5515 11.9992L13.5515 7.20983L5.83184 14.9295C5.53895 15.2224 5.06408 15.2224 4.77118 14.9295Z" fill="white"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</header>