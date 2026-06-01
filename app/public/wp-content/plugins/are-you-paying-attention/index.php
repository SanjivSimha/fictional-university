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
        add_action('enqueue_block_editor_assets', array($this, 'adminAssets'));
    }

    function adminAssets() {
        wp_enqueue_script('ournewblocktype', plugin_dir_url(__FILE__) . 'build/index.js', array('wp-blocks', 'wp-element'));
    }

}

$areYouPayingAttention = new AreYouPayingAttention();