<?php
/**
 * Template Name: Landing
 **/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-title"
        content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">

    <title><?php wp_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/favicon.ico"
        type="image/x-icon" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php get_template_part('loops/content', 'page'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="covered-block">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/accompaniment.jpg" alt="" />
                    <div class="covered-block__content">
                        <h3>
                            Аренда
                        </h3>
                        <p>
                            Я текстовый блок. Нажмите кнопку редактирования, чтобы изменить этот текст. Разнообразный и
                            богатый
                            опыт постоянный количественный рост и сфера нашей активности требуют от нас анализа позиций.
                            Я
                            текстовый блок.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php scroll_top(); ?>

    <?php wp_footer(); ?>

</body>

</html>