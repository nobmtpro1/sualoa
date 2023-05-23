<?php
require_once 'customizer.php';

function initTheme()
{
    // add_filter('use_block_editor_for_post', '__return_false');
    register_nav_menu('header-main', __('Menu chính'));
    add_theme_support('custom-logo');
}

add_action('init', 'initTheme');
