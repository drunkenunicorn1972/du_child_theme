<?php
    add_action('wp_enqueue_scripts', 'du_child_enqueue_styles', 99);

    function du_child_enqueue_styles()
    {
        wp_enqueue_style( 'duchildstyles', get_template_directory_uri() . '/dist/css/style.css', array('bootstrap'), '1.0.' . date_i18n("YmdH"), 'all' );
    }