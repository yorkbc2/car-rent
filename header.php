<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">

    <meta property="og:locale" content="ru_RU" />
    <meta property="og:locale:alternate" content="ru_RU" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Комфортный трансфер в любую точку Украины" />
    <meta property="og:description" content="Компания Premium Car Rental предоставляет услуги проката автомобилей">
    <meta property="og:url" content="https://premiumcarrental.com.ua/" />
    <meta property="og:site_name" content="Premium Car Rental" />
    <meta property="og:image" content="https://premiumcarrental.com.ua/wp-content/uploads/premiumcarrental-cover.png" />
    <meta property="og:image:secure_url" content="https://premiumcarrental.com.ua/wp-content/uploads/premiumcarrental-cover.png" />
    <meta property="og:image:width" content="1280" />
    <meta property="og:image:height" content="629" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Комфортный трансфер в любую точку Украины" />
    <meta name="twitter:image" content="https://premiumcarrental.com.ua/wp-content/uploads/premiumcarrental-cover.png" />

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
                            <?php
                        $menu_name = 'main-nav';
                        $menu_items = [];

                        if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
                            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                            if ($menu && $menu->term_id) $menu_items = wp_get_nav_menu_items($menu->term_id);
                        }
                        foreach ($menu_items as $item) {
                            ?>
                            <li>
                                <a href="<?php echo $item->url ?>">
                                    <?php echo $item->title; ?>
                                </a>
                            </li>
                            <?php 
                        }
                        ?>
                        </ul>
                    </nav>
                </div>
                <div class="right">
                    <!-- <div class="social-list-wrapper">
                        <ul class="social-list social-list--white">
                            <?php $socials = get_social(); ?>
                            <?php foreach ($socials as $social): ?>
                            <li>
                                <a href="<?php echo $social['url'] ?>">
                                    <?php echo $social['icon-html']; ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div> -->
                    <div>
                        <?php $languages = pll_the_languages([ 'raw' => 1, 'hide_if_empty' => 0 ]); ?>
                        <ul class="lang-list">
                            <?php foreach ($languages as $lang): ?>
                            <li>
                                <a href="<?php echo $lang['url']; ?>">
                                    <?php echo $lang['name'] ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="phone-wrapper">
                        <div class="dropdown <?php echo is_front_page() ? '' : 'dropdown--inverse' ?>">
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
                        <button class="header-call-back button-medium button-outlined button-inverse header-call-back-<?php echo pll_current_language('slug'); ?>">
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

        <div class="container js-container">
