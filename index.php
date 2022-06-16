<?php
/**
 * Plugin Name: Exportudo
 * Description: Case do Desafio Wordpress
 * Version: 1.0
 * Author: Fernando Gobetti
 * Text Domain: exportudo
 *
 */

if (!function_exists('add_action')) {
    echo 'no no no';
    exit;
}
//setup
define('ESPORTUDO_PLUGIN_URL', __FILE__);

// Includes
require_once('includes/activate.php');
require_once('includes/shortcodes/esp_gitApi.php');
require_once('includes/enqueue.php');
require_once('includes/gitapi-ajax.php');

// Hooks
register_activation_hook(__FILE__, 'esp_activate_plugin');
add_action('wp_enqueue_scripts', 'esp_enqueue_scripts', 100);
add_action('wp_ajax_esp_gitapi', 'esp_gitapi');
add_action('wp_ajax_nopriv_esp_gitapi', 'esp_gitapi');


// Shortcodes
add_shortcode('git_api', 'esp_gitAPI_shortcode');