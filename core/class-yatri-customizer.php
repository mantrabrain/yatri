<?php
/**
 * Yatri_Customizer setup
 *
 * @package Yatri_Customizer
 * @since   1.0.0
 */

/**
 * Main Yatri_Customizer Class.
 *
 * @class Yatri_Customizer
 */
class Yatri_Customizer
{

    /**
     * The single instance of the class.
     *
     * @var Yatri_Customizer
     * @since 1.0.0
     */
    protected static $_instance = null;


    /**
     * Main Yatri_Customizer Instance.
     *
     * Ensures only one instance of Yatri_Customizer is loaded or can be loaded.
     *
     * @since 1.0.0
     * @static
     * @return Yatri_Customizer - Main instance.
     */
    public static function instance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        self::$_instance->includes();
        self::$_instance->hooks();

        return self::$_instance;
    }

    public function hooks()
    {

        add_action('wp_loaded', array($this, 'init_customizer_options'));

        add_action('customize_register', array($this, 'register_panel'));
        add_action('customize_register', array($this, 'register_control'));
        add_action('customize_register', array($this, 'customize_options'));
        add_action('customize_register', array($this, 'move_default_options'));

        add_action('customize_preview_init', array($this, 'customize_enqueue'));
        add_action('customize_controls_enqueue_scripts', array($this, 'control_scripts'));

    }

    public function init_customizer_options()
    {

        yatri_init_customizer_options();

    }

    public function control_scripts()
    {
        //$script_uri = YATRI_THEME_URI . 'assets/js/customizer/customize-control.js';
        //wp_enqueue_script('yatri-customize-controls-check-js', $script_uri, array('jquery', 'customize-controls'), YATRI_THEME_VERSION);


    }

    /**
     * Register custom controls
     *
     * @param WP_Customize_Manager $wp_customize Manager instance.
     */
    public function register_panel($wp_customize)
    {
        $wp_customize->register_panel_type('Mantrabrain_Theme_Customizer_Panel');
        $wp_customize->register_section_type('Mantrabrain_Theme_Customizer_Section');

    }

    public function register_control($wp_customize)
    {
        $wp_customize->register_control_type('Mantrabrain_Theme_Customizer_Control_Buttonset');
        $wp_customize->register_control_type('Mantrabrain_Theme_Customizer_Control_Editor');
    }

    public function customize_enqueue()
    {

        wp_enqueue_script('yatri-customize-preview', YATRI_THEME_URI . 'assets/js/customizer/customize-preview.js', array('customize-preview', 'jquery'), YATRI_THEME_VERSION, true);

    }

    public function move_default_options($wp_customize)
    {
        // Move custom logo setting
        $wp_customize->get_control('custom_logo')->section = 'yatri_section_logo_options';
        $wp_customize->get_control('blogname')->section = 'yatri_section_logo_options';
        $wp_customize->get_setting('blogname')->transport = 'postMessage';
        $wp_customize->get_control('blogdescription')->section = 'yatri_section_logo_options';
        $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
        $wp_customize->get_control('display_header_text')->section = 'yatri_section_logo_options';
        $wp_customize->get_control('site_icon')->section = 'yatri_section_logo_options';

        // priority
        $wp_customize->get_control('custom_logo')->priority = 100;
        $wp_customize->get_control('blogname')->priority = 200;
        $wp_customize->get_control('blogdescription')->priority = 300;
        $wp_customize->get_control('display_header_text')->priority = 400;
        $wp_customize->get_control('site_icon')->priority = 500;
    }

    public function customize_options($wp_customize)
    {

        $default = yatri_get_default_theme_options();

        require_once YATRI_THEME_DIR . '/core/customizer/selective-refresh.php';

        // Theme Panel
        require_once YATRI_THEME_DIR . '/core/customizer/panels/theme-panel.php';

        // Sections

        // Top Header Options

        require_once YATRI_THEME_DIR . '/core/customizer/sections/colors.php';
        require_once YATRI_THEME_DIR . '/core/customizer/sections/theme-base-options.php';
        require_once YATRI_THEME_DIR . '/core/customizer/sections/header-options.php';
        require_once YATRI_THEME_DIR . '/core/customizer/sections/blog-archive-page-options.php';
        require_once YATRI_THEME_DIR . '/core/customizer/sections/single-post-options.php';
        require_once YATRI_THEME_DIR . '/core/customizer/sections/single-page-options.php';
        require_once YATRI_THEME_DIR . '/core/customizer/sections/sidebars-options.php';
        require_once YATRI_THEME_DIR . '/core/customizer/sections/footer-options.php';


    }

    /**
     * Include required core files used in admin and on the frontend.
     */
    public
    function includes()
    {
        // Customizer default.
        require_once YATRI_THEME_DIR . '/core/customizer/core.php';

        // Customizer functios.
        require_once YATRI_THEME_DIR . '/core/customizer/functions.php';

        require_once YATRI_THEME_DIR . '/core/customizer/config/customizer-modal-config.php';
        require_once YATRI_THEME_DIR . '/core/customizer/customizer-hooks.php';

        // Customizer sanitzation.
        require_once YATRI_THEME_DIR . '/core/customizer/sanitization.php';
        require_once YATRI_THEME_DIR . '/core/customizer/active-callback.php';


    }


}

Yatri_Customizer::instance();