<?php

function esp_enqueue_scripts(){
    wp_register_script(
        'esp_script',
        plugins_url('/assets/js/script.js', ESPORTUDO_PLUGIN_URL),
        ['jquery'],
        '1.0',
        true
    );

    wp_localize_script('esp_script', 'esp_obj', [
        'ajax_url' => admin_url('admin-ajax.php')
    ]);

    wp_register_style(
        'esp_style',
        plugins_url('/assets/css/css.css', ESPORTUDO_PLUGIN_URL)
    );

    wp_enqueue_script('esp_script');
    wp_enqueue_style('esp_style');
}