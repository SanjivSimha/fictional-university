<?php 

/*
    Plugin Name: Are You Paying Attention Quiz
    Description: A truly amazing plugin.
    Version: 1.0
    Author: Sanjiv
    Author URI: https://sanjivsimha.com
*/

if (!defined('ABSPATH')) exit; // exit if accessed directly

class AreYouPayingAttention {
    function __construct() {
        add_action('init', array($this, 'adminAssets'));
    }

    function adminAssets() {
        wp_register_style('quizeditcss', plugin_dir_url(__FILE__) . 'build/index.css', array('wp-editor'));
        wp_register_script('ournewblocktype', plugin_dir_url(__FILE__) . 'build/index.js', array('wp-blocks', 'wp-element', 'wp-editor'));
        register_block_type('ourplugin/are-you-paying-attention', array(
            'editor_style' => 'quizeditcss',
            'editor_script' => 'ournewblocktype',
            'render_callback' => array($this, 'theHTML')
        ));
    }

    function theHTML($attributes) {
        ob_start(); ?>
        <p>Today the sky is <span class="skyColor"><?php echo esc_html($attributes['skyColor']); ?></span> and the grass is <span class="grassColor"><?php echo esc_html($attributes['grassColor']); ?></span>.</p>
        <?php
        return ob_get_clean();
    }
}

$areYouPayingAttention = new AreYouPayingAttention();