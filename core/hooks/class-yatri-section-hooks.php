<?php
/**
 * Yatri_Section_Hooks setup
 *
 * @package Yatri_Section_Hooks
 * @since   1.0.0
 */

/**
 * Main Yatri_Section_Hooks Class.
 *
 * @class Yatri_Section_Hooks
 */
class Yatri_Section_Hooks
{


    public function __construct()
    {
        add_action('init', array($this, 'register_sections'));
    }


    function register_sections()
    {

        Yatri_Sections::init();

        Yatri_Sections::register('office_information', array(
            'title' => __('Office Info', 'yatri')
        ));
        Yatri_Sections::register('button', array(

            'title' => __('Button', 'yatri'),
        ));
        Yatri_Sections::register('offcanvas_menu', array(
            'title' => __('Offcanvas Menu', 'yatri')
        ));
        Yatri_Sections::register('social_icons', array(
            'title' => __('Social Icons', 'yatri')
        ));
        Yatri_Sections::register('menu', array(
            'title' => __('Navigation Menu', 'yatri')
        ));
        Yatri_Sections::register('site_branding', array(
            'title' => __('Site Branding', 'yatri')
        ));
        Yatri_Sections::register('search_form', array(
            'title' => __('Search Form', 'yatri')
        ));

        Yatri_Sections::register('custom_html', array(
            'title' => __('Custom HTML', 'yatri')
        ));
        Yatri_Sections::register('copyright', array(
            'title' => __('Copyright', 'yatri')
        ));


    }


}

new Yatri_Section_Hooks();