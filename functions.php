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


/*if ( ! function_exists( 'yt_fs' ) ) {
    // Create a helper function for easy SDK access.
    function yt_fs() {
        global $yt_fs;

        if ( ! isset( $yt_fs ) ) {
            // Include Freemius SDK.
            require_once YATRI_TOOLS_ABSPATH . 'includes/freemius/start.php';

            $yt_fs = fs_dynamic_init( array(
                'id'                  => '5578',
                'slug'                => 'yatri-theme',
                'premium_slug'        => 'yatri-test-addon-premium',
                'type'                => 'theme',
                'public_key'          => 'pk_b9172980a3d756b764261a3690e5d',
                'is_premium'          => false,
                'has_addons'          => true,
                'has_paid_plans'      => false,
                'is_org_compliant'    => false,
                'menu'                => array(
                    'slug'           => 'yatri-theme',
                    'account'        => false,
                    'support'        => false,
                ),
            ) );
        }

        return $yt_fs;
    }

    // Init Freemius.
    yt_fs();
    // Signal that SDK was initiated.
    do_action( 'yt_fs_loaded' );
}*/


if ( ! function_exists( 'yat_fs' ) ) {

    if ( class_exists( 'Yatri_Tools' ) &&
        defined( 'YATRI_TOOLS_ABSPATH' ) &&
        file_exists( YATRI_TOOLS_ABSPATH . 'includes/freemius/start.php' )
    ) {
        // Create a helper function for easy SDK access.
        function yat_fs()
        {
            global $yat_fs;

            if (!isset($yat_fs)) {
                // Include Freemius SDK.
                require_once YATRI_TOOLS_ABSPATH . 'includes/freemius/start.php';


                $yat_fs = fs_dynamic_init(array(
                    'bundle_public_key' => 'pk_b904997a18ed97d7e2ea0e1799dd6',
                    'bundle_id' => '5583',
                    'id' => '5580',
                    'slug' => 'yatri',
                    'type' => 'theme',
                    'public_key' => 'pk_6badcf1377194c3168f615c0ccad3',
                    'is_premium' => false,
                    'has_addons' => true,
                    'has_paid_plans' => true,
                    'menu' => array(
                        'slug' => 'yatri-panel',
                        'account' => true,
                        'support' => false,

                    ),
                    'navigation' => 'menu',
                    'is_org_compliant' => true,
                ));
            }

            return $yat_fs;
        }

        // Init Freemius.
        yat_fs();
        // Signal that SDK was initiated.
        do_action('yat_fs_loaded');
    }
}

function Yatri()
{
    return Yatri_Core::get_instance();

}

Yatri();


