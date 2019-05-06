</div><!-- .page-wrapper end-->

<footer class="footer js-footer">
    <div class="container">
        <div class="footer__row">
            <div class="left">
                <ul class="phone-list">
                    <?php $phones = get_phones(); 
                        foreach ($phones as $phone): ?>
                    <li>
                        <a href="tel:<?php the_phone_number($phone) ?>"><i class="fa fa-phone"></i>
                            <?php echo $phone; ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="right">
                <p class="copyright">
                    <?php _e('Сайт разработан', 'brainworks') ?>
                    <a href="https://brainworks.pro/" target="_blank">BRAIN WORKS</a>
                    &copy; <?php echo date('Y'); ?>
                </p>
            </div>
        </div>
    </div>
</footer>

</div><!-- .wrapper end-->

<?php scroll_top(); ?>

<?php if (is_customize_preview()) { ?>
<button class="button-small customizer-edit" data-control='{ "name":"bw_scroll_top_display" }'>
    <?php esc_html_e('Edit Scroll Top', 'brainworks'); ?>
</button>
<button class="button-small customizer-edit" data-control='{ "name":"bw_analytics_google_placed" }'>
    <?php esc_html_e('Edit Analytics Tracking Code', 'brainworks'); ?>
</button>
<button class="button-small customizer-edit" data-control='{ "name":"bw_login_logo" }'>
    <?php esc_html_e('Edit Login Logo', 'brainworks'); ?>
</button>
<?php } ?>

<div class="is-hide"><?php svg_sprite(); ?></div>

<?php wp_footer(); ?>

</body>

</html>