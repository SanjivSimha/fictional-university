<?php 

/*
    Plugin Name: Our First Unique Plugin
    Description: A truly amazing plugin.
    Version: 1.0
    Author: Sanjiv
    Author URI: https://sanjivsimha.com
*/

add_filter('the_content', 'addToEndOfPost');

function addToEndOfPost($content) {
    if (is_single() && is_main_query()) {
        return $content . '<p>My name is Sanjiv.</p>';
    }
    return $content;
}