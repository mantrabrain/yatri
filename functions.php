<?php
/**
 * Yatri functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mantrabrain
 * @subpackage Yatri
 * @since 1.0.0
 */

define('YATRI_THEME_VERSION', '1.0.3');
define('YATRI_THEME_SETTINGS', 'yatri_theme_options');
define('YATRI_THEME_OPTION_PANEL', 'yatri_theme_option_panel');
define('YATRI_THEME_DIR', trailingslashit(get_template_directory()));
define('YATRI_THEME_URI', trailingslashit(esc_url(get_template_directory_uri())));
// Theme Core file init

require_once YATRI_THEME_DIR . 'core/class-yatri-core.php';

function Yatri()
{
    return Yatri_Core::get_instance();
}

Yatri();


