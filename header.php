<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.ico'); ?>"
        type="image/x-icon">
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.ico'); ?>"
        type="image/x-icon">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="top">

    <?php wp_body(); ?>

    <div class="wrapper">
        <header class="page-header">
            <div class="page-header__container">
                <div class="left">
                    <div class="logo-container">
                        <?php echo get_default_logo_link(); ?>
                    </div>
                    <nav class="page-menu">
                        <ul>
                            <li>
                                <a href="#">
                                    Главная
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Услуги
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    Условия аренды
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    Выбрать авто
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    Контакты
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="right">
                    <div>
                        <ul class="social-list social-list--white">
                            <li>
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/svg/facebook.svg"
                                        alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/svg/instagram.svg"
                                        alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul class="lang-list">
                            <li>
                                <a href="#">РУС</a>
                            </li>
                            <li>
                                <a href="#">ENG</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <div class="dropdown">
                            <?php $phones = get_phones(); ?>
                            <a href="tel:<?php the_phone_number($phones[0]); ?>">
                                <i class="fal fa-chevron-down"></i> <?php echo $phones[0]; ?>
                            </a>
                            <div class="dropdown-list">
                                <ul class="clear">
                                    <?php foreach ($phones as $index => $phone): if ($index === 0) continue; ?>
                                    <li>
                                        <a href="tel:<?php the_phone_number($phone); ?>">
                                            <?php echo $phone; ?>
                                        </a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="header-button-wrapper">
                        <button class="header-call-back button-medium button-outlined button-inverse">
                            <?php _e('Оставить заявку', 'brainworks'); ?>
                        </button>
                    </div>
                    <div class="header-hamburger">
                        <button type="button" class="hamburger">
                            <i class="bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </header>