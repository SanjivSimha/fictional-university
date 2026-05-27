<?php 

/*
    Plugin Name: Our Word Filter Plugin
    Description: A truly amazing plugin.
    Version: 1.0
    Author: Sanjiv
    Author URI: https://sanjivsimha.com
*/

if (!defined('ABSPATH')) exit; // exit if accessed directly

class OurWordFilterPlugin {
    function __construct() {
        add_action('admin_menu', array($this, 'ourMenu'));
    }

    function ourMenu() {
        add_menu_page('Words to Filter', 'Word Filter', 'manage_options', 'ourwordfilter', array($this, 'wordFilterPage'), 'dashicons-smiley', 100);
        add_submenu_page('ourwordfilter', 'Word to Filter', 'Word List', 'manage_options', 'ourwordfilter', array($this, 'wordFilterPage'));
        add_submenu_page('ourwordfilter', 'Word Filter Options', 'Options', 'manage_options', 'word-filter-options', array($this, 'optionsSubPage'));
    }

    function wordFilterPage() { ?>
        Hello world.
    <?php }

    function optionsSubPage() { ?>
        <h2>Word Filter Options</h2>
        <p>Configure your word filter settings here.</p>
    <?php }
}

$ourWordFilterPlugin = new OurWordFilterPlugin();