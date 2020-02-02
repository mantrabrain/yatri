<?php

class Yatri_About
{
    static $_instance;

    public $title;

    public $config;

    public $current_tab = '';

    public $url = '';

    static function get_instance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
            self::$_instance->url = admin_url('themes.php');
            self::$_instance->url = add_query_arg(
                array('page' => 'yatri'),
                self::$_instance->url
            );


            self::$_instance->title = __('Yatri Options', 'yatri');

            self::$_instance->setup();

            add_action('admin_menu', array(self::$_instance, 'add_menu'), 5);
            add_action('admin_enqueue_scripts', array(self::$_instance, 'scripts'));

            add_action('yatri_about_menu_tabs', array(self::$_instance, 'menu_tabs'), 5);
            add_action('yatri_about_main', array(self::$_instance, 'box_links'), 15);

            add_action('yatri_about_sidebar', array(self::$_instance, 'box_plugins'), 10);
            add_action('yatri_about_sidebar', array(self::$_instance, 'box_recommend_plugins'), 20);
            add_action('yatri_about_sidebar', array(self::$_instance, 'box_community'), 25);

            add_action('admin_notices', array(self::$_instance, 'admin_notice'));
            add_action('admin_init', array(self::$_instance, 'admin_init'));


            add_action('wp_ajax_yatri_getting_started', array(self::$_instance, 'getting_started'));

            // Tabs.
            add_action('yatri_about_tab_changelog', array(self::$_instance, 'tab_changelog'));

        }
        return self::$_instance;
    }


    public function getting_started()
    {
        check_ajax_referer('yatri_theme_starter_site_install_nonce', 'security');

        $yatri_all_plugins = yatri_get_recommanded_plugins();

        $installation_details = array(
            'total_plugins' => count($yatri_all_plugins),
            'plugin' => array(),
            'redirect' => admin_url('/themes.php?page=starter-sites')
        );

        include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';

        include_once ABSPATH . 'wp-admin/includes/plugin-install.php';

        foreach ($yatri_all_plugins as $plugin_data) {

            $slug = isset($plugin_data['slug']) ? $plugin_data['slug'] : '';

            $installation_details['plugin'][$slug] = false;

            $plugin = $slug . '/' . $slug . '.php';

            if (current_user_can('install_plugins')) {

                if (is_plugin_active_for_network($plugin) || is_plugin_active($plugin)) {
                    // Plugin is activated
                    $installation_details['plugin'][$slug] = 'active';
                }

                if (file_exists(WP_PLUGIN_DIR . '/' . $slug)) {

                    $plugin_data = get_plugin_data(WP_PLUGIN_DIR . '/' . $plugin);

                    $status['plugin'] = $plugin;

                    $status['pluginName'] = $plugin_data['Name'];

                    if (current_user_can('activate_plugin', $plugin) && is_plugin_inactive($plugin)) {

                        $result = activate_plugin($plugin);

                        if (!is_wp_error($result)) {

                            $installation_details['plugin'][$slug] = 'active';

                        }
                    } else if (is_plugin_active($plugin)) {

                        $installation_details['plugin'][$slug] = 'active';
                    }

                } else {

                    $api = plugins_api(
                        'plugin_information',
                        array(
                            'slug' => sanitize_key(wp_unslash($slug)),
                            'fields' => array(
                                'sections' => false,
                            ),
                        )
                    );

                    if (!is_wp_error($api)) {

                        $status['pluginName'] = $api->name;

                        $skin = new WP_Ajax_Upgrader_Skin();

                        $upgrader = new Plugin_Upgrader($skin);

                        $result = $upgrader->install($api->download_link);

                        if (!is_wp_error($result) && !is_wp_error($skin->result) && !is_null($result)) {

                            $install_status = install_plugin_install_status($api);

                            if (!is_wp_error($install_status)) {

                                $installation_details['plugin'][$slug] = 'installed';

                                if (current_user_can('activate_plugin', $install_status['file']) && is_plugin_inactive($install_status['file'])) {

                                    $result = activate_plugin($install_status['file']);

                                    if (!is_wp_error($result)) {

                                        $installation_details['plugin'][$slug] = 'active';
                                    }
                                }
                            }
                        }
                    }


                }
            }
        }

        if (
            !isset($installation_details['plugin']['mantrabrain-starter-sites'])
            || (
                isset($installation_details['plugin']['mantrabrain-starter-sites']) &&
                'active' != $installation_details['plugin']['mantrabrain-starter-sites']
            )
        ) {

            $installation_details['redirect'] = admin_url('/themes.php?page=yatri');

        }
        wp_send_json($installation_details);
    }


    function add_url_args($args = array())
    {
        return add_query_arg($args, self::$_instance->url);
    }

    /**
     * Add admin notice when active theme.
     */
    function admin_notice()
    {
        global $pagenow;

        if (is_admin() && ('themes.php' == $pagenow) && isset($_GET['activated'])) {
            ?>
            <div class="yatri-notice-wrapper notice is-dismissible">
                <div class="yatri-notice">
                    <div class="yatri-notice-img">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/screenshot.png'); ?>"
                             alt="<?php esc_attr_e('logo', 'yatri'); ?>">
                    </div>
                    <div class="yatri-notice-content">
                        <div class="yatri-notice-heading"><?php
                            echo sprintf(esc_html__('Thanks for installing %s. To fully take advantage of the best our theme can offer, click on get started ', 'yatri'), $this->config['name']);
                            ?>
                        </div>
                        <?php
                        $yatri_get_recommanded_plugins = yatri_get_recommanded_plugins();

                        $plugin_name_text = '';

                        if (count($yatri_get_recommanded_plugins) > 0) {

                            $plugin_name_array = wp_list_pluck($yatri_get_recommanded_plugins, 'name');

                            $plugin_name_text = count($plugin_name_array) > 0 ? join(' & ', $plugin_name_array) : '';

                            $plugin_name_text .= count($plugin_name_array) > 1 ? esc_html__(' plugins', 'yatri') : esc_html__(' plugin', 'yatri');
                        }

                        if (!empty($plugin_name_text)) {
                            ?>

                            <p style="font-size:11px"><?php echo sprintf(esc_html__('Clicking on get started will install & activate %s.', 'yatri'), $plugin_name_text); ?></p>
                        <?php } ?>
                        <a href="#" class="yatri-install-all-plugins button" style="text-decoration: none;">
                            <?php echo sprintf(esc_html__('Get started with %s', 'yatri'), $this->config['name']); ?>
                        </a>
                    </div>
                </div>
            </div>
            <?php
        }
    }

    function menu_tabs()
    {
        $current_tab = isset($_GET['tab']) ? sanitize_text_field($_GET['tab']) : '';
        $menus = array(
            '' => __('General', 'yatri'),
            'changelog' => __('Changelog', 'yatri')

        );

        echo '<ul class="tab-menu">';

        foreach ($menus as $menu_key => $title) {

            $active_class = $current_tab == $menu_key ? 'active' : '';
            echo '<li class="' . esc_attr($active_class) . '">';

            ?>
            <a class="mb-about-top-link"
               href="<?php echo esc_url($this->add_url_args(array('tab' => $menu_key))); ?>"><?php echo esc_html($title); ?></a>
            <?php

            echo '</li>';
        }

        echo '</ul>';
    }

    function add_menu()
    {
        add_theme_page(
            $this->title,
            $this->title,
            'manage_options',
            'yatri',
            array($this, 'page')
        );
    }

    /**
     * Register scripts
     *
     * @param string $id
     */
    function scripts($id)
    {
        if ('appearance_page_yatri' != $id && 'themes.php' != $id) {
            return;
        }

        wp_enqueue_style('yatri-admin-about', esc_url(get_template_directory_uri()) . '/core/info/assets/css/about.css', false, YATRI_THEME_VERSION);
        wp_register_script('yatri-admin-about-js', esc_url(get_template_directory_uri()) . '/core/info/assets/js/about.js', array('jquery'), YATRI_THEME_VERSION);
        $translation = array(
            'button_text' => esc_html__('Processing...', 'yatri'),
            'nonce' => wp_create_nonce('yatri_theme_starter_site_install_nonce'),
            'admin_url' => admin_url(),
            'starter_site_install_action' => 'yatri_getting_started',
            'redirect' => admin_url('/themes.php?page=yatri')
        );
        wp_localize_script('yatri-admin-about-js', 'yatri_about_obj', $translation);

        wp_enqueue_media();
        wp_enqueue_script('yatri-admin-about-js');
        if ('themes' != $id) {
            wp_enqueue_style('plugin-install');
            wp_enqueue_script('plugin-install');
            wp_enqueue_script('updates');
            add_thickbox();
        }
    }

    function setup()
    {
        $theme = wp_get_theme();
        if (is_child_theme()) {
            $theme = $theme->parent();
        }
        $this->config = array(
            'name' => $theme->get('Name'),
            'theme_uri' => $theme->get('ThemeURI'),
            'desc' => $theme->get('Description'),
            'author' => $theme->get('Author'),
            'author_uri' => $theme->get('AuthorURI'),
            'version' => $theme->get('Version'),
        );

        $this->current_tab = isset($_GET['tab']) ? sanitize_text_field($_GET['tab']) : ''; // phpcs:ignore
    }

    function page()
    {
        $this->setup();
        $this->page_header();
        echo '<div class="wrap">';
        $cb = apply_filters('yatri_about_content_cb', false);
        if (!is_callable($cb)) {
            $cb = array($this, 'page_inner');
        }

        if (is_callable($cb)) {
            call_user_func_array($cb, array($this));
        }

        echo '</div>';
    }

    public function page_header()
    {
        ?>
        <div class="mb-about-header">
            <div class="mb-about-row">
                <div class="mb-about-header-inner">
                    <h1><?php echo esc_html($this->config['name']); ?></h1>
                    <span class="mb-about-version"><?php echo esc_html($this->config['version']); ?></span>
                </div>
            </div>
        </div>
        <?php
    }

    function tab_changelog()
    {
        global $wp_filesystem;
        WP_Filesystem();
        $file = get_template_directory() . '/changelog.txt';
        $file_contents = '';
        if (file_exists($file)) {
            $file_contents = $wp_filesystem->get_contents($file);
        }
        ?>

        <?php
        do_action('yatri_about_changelog_before');
        ?>
        <div class="mb-about-box theme-changelog">
            <div class="mb-about-box-top"><?php _e('Changelog', 'yatri'); ?></div>
            <div class="mb-about-box-content">
                <pre style="width: 100%; max-height: 60vh; overflow: auto"><?php echo esc_textarea($file_contents); ?></pre>
            </div>
        </div>
        <?php
        do_action('yatri_about_changelog_after');
    }

    function admin_init()
    {
        // Action for copy options.
        if (isset($_POST['copy_from']) && isset($_POST['copy_to'])) {
            $from = sanitize_text_field($_POST['copy_from']);
            $to = sanitize_text_field($_POST['copy_to']);
            if ($from && $to) {
                $mods = get_option('theme_mods_' . $from);
                update_option('theme_mods_' . $to, $mods);
                $url = wp_unslash($_SERVER['REQUEST_URI']);
                $url = add_query_arg(array('copied' => 1), $url);
                wp_redirect($url);
                die();
            }
        }
    }


    function box_links()
    {
        $url = admin_url('customize.php');

        $links = array(
            array(
                'label' => __('Logo & Site Identity', 'yatri'),
                'url' => add_query_arg(array('autofocus' => array('section' => 'title_tagline')), $url),
                'icon' => 'dashicons dashicons-format-image'
            ),
        );

        $links = apply_filters('yatri_about_links', $links);
        ?>
        <div class="mb-about-box">
            <div class="mb-about-box-top">
                <span class="dashicons dashicons-admin-links"></span>
                <?php _e('Links to Customizer Settings', 'yatri'); ?></div>
            <div class="mb-about-box-content">
                <ul class="mb-about-list-flex">
                    <?php foreach ($links as $l) {
                        $icon = isset($l['icon']) ? $l['icon'] : '';
                        ?>
                        <li class="">
                            <?php if (!empty($icon)) { ?>
                                <span class="<?php echo esc_attr($icon); ?>"></span>
                            <?php } ?>
                            <a class="mb-about-quick-setting-link" href="<?php echo esc_url($l['url']); ?>"
                               target="_blank"><?php echo esc_html($l['label']); ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <?php
    }

    /**
     * Display community info
     */
    function box_community()
    {
        ?>
        <div class="mb-about-box">
            <div class="mb-about-box-top">
                <span class="dashicons dashicons-facebook-alt"></span>
                <?php _e('Join Mantra Brain Community!', 'yatri'); ?></div>
            <div class="mb-about-box-content">
                <p><?php _e('Join our facebook community group so that you can post question and help each other.', 'yatri'); ?></p>
                <a target="_blank"
                   href="https://www.facebook.com/groups/mantrabraincommunity"><?php _e('Join our facebook community group »', 'yatri'); ?></a>
            </div>
        </div>
        <?php
    }

    /**
     * Display recommend plugins
     */
    function box_plugins()
    {

        ?>
        <div class="mb-about-box box-plugins">
            <div class="mb-about-box-top">
                <span class="dashicons dashicons-admin-customizer"></span>
                <?php _e('Yatri Starter Sites', 'yatri'); ?></div>
            <!-- <div class="mb-about-sites-thumb">
                <img src="<?php /*echo esc_url(get_template_directory_uri()) . '/core/info/assets/images/yatri-starter-sites.jpg'; */
            ?>">
            </div>-->
            <div class="mb-about-box-content">
                <p><?php _e('<strong>Mantra Brain Starter Sites</strong> is free WordPress plugin from which you can import ready made site within few clicks.', 'yatri'); ?></p>
                <?php

                $plugin_slug = 'mantrabrain-starter-sites';
                $plugin_info = array(
                    'name' => 'mantrabrain-starter-sites',
                    'active_filename' => 'mantrabrain-starter-sites/mantrabrain-starter-sites.php',
                );

                $plugin_info = wp_parse_args(
                    $plugin_info,
                    array(
                        'name' => '',
                        'active_filename' => '',
                    )
                );
                $status = is_dir(WP_PLUGIN_DIR . '/' . $plugin_slug);
                $button_class = 'install-now';
                if ($plugin_info['active_filename']) {
                    $active_file_name = $plugin_info['active_filename'];
                } else {
                    $active_file_name = $plugin_slug . '/' . $plugin_slug . '.php';
                }

                $sites_url = add_query_arg(
                    array(
                        'page' => 'starter-sites',
                    ),
                    admin_url('themes.php')
                );

                $view_site_txt = __('View Site Library', 'yatri');

                if (!is_plugin_active($active_file_name)) {
                    $button_txt = esc_html__('Install Importer Plugin', 'yatri');
                    if (!$status) {
                        $install_url = wp_nonce_url(
                            add_query_arg(
                                array(
                                    'action' => 'install-plugin',
                                    'plugin' => $plugin_slug,
                                ),
                                network_admin_url('update.php')
                            ),
                            'install-plugin_' . $plugin_slug
                        );

                    } else {
                        $install_url = add_query_arg(
                            array(
                                'action' => 'active',
                                'plugin' => rawurlencode($active_file_name),
                                'plugin_status' => 'all',
                                'paged' => '1',
                                '_wpnonce' => wp_create_nonce('activate-plugin_' . $active_file_name),
                            ),
                            network_admin_url('plugins.php')
                        );
                        $button_class = 'activate-now button-primary';
                        $button_txt = esc_html__('Active Now', 'yatri');
                    }

                    $detail_link = add_query_arg(
                        array(
                            'tab' => 'plugin-information',
                            'plugin' => $plugin_slug,
                            'TB_iframe' => 'true',
                            'width' => '772',
                            'height' => '349',

                        ),
                        network_admin_url('plugin-install.php')
                    );

                    echo '<div class="rcp">';
                    echo '<p class="action-btn plugin-card-' . esc_attr($plugin_slug) . '"><a href="' . esc_url($install_url) . '" data-slug="' . esc_attr($plugin_slug) . '" class="' . esc_attr($button_class) . '">' . $button_txt . '</a></p>'; // WPCS: XSS OK.
                    echo '<a class="plugin-detail thickbox open-plugin-details-modal" href="' . esc_url($detail_link) . '">' . esc_html__('Details', 'yatri') . '</a>';
                    echo '</div>';
                } else {
                    echo '<div class="rcp">';
                    echo '<p ><a href="' . esc_url($sites_url) . '" data-slug="' . esc_attr($plugin_slug) . '" class="view-site-library">' . $view_site_txt . '</a></p>'; // // WPCS: XSS OK.
                    echo '</div>';
                }

                ?>
                <script type="text/javascript">
                    jQuery(document).ready(function ($) {
                        var sites_url = <?php echo json_encode($sites_url); // phpcs:ignore ?>;
                        var view_sites = <?php echo json_encode($view_site_txt); // phpcs:ignore ?>;
                        $('#plugin-filter .box-plugins').on('click', '.activate-now', function (e) {
                            e.preventDefault();
                            var button = $(this);
                            var url = button.attr('href');
                            button.addClass('button installing updating-message');
                            $.get(url, function () {
                                $('.rcp .plugin-detail').hide();
                                button.attr('href', sites_url);
                                button.attr('class', 'view-site-library');
                                button.text(view_sites);
                            });
                        });
                    });
                </script>
            </div>
        </div>
        <?php
    }

    function get_plugin_file($plugin_slug)
    {
        $installed_plugins = get_plugins();
        foreach ((array)$installed_plugins as $plugin_file => $info) {
            if (strpos($plugin_file, $plugin_slug . '/') === 0) {
                return $plugin_file;
            }
        }
        return false;
    }

    function get_first_tag($content)
    {
        $content = wp_kses(
            $content,
            array(
                'a' => array(
                    'href' => array(),
                    'title' => array(),
                ),
                'br' => array(),
                'p' => array(),
                'em' => array(),
                'strong' => array(),
            )
        );
        $content = substr($content, 0, strpos($content, '</p>') + 4);
        return $content;
    }

    function box_recommend_plugins()
    {

        $plugins_info = yatri_get_recommanded_plugins();

        $html = '';
        foreach ($plugins_info as $plugin_info) {
            $title = $plugin_info['name'] ? $plugin_info['name'] : '';
            $plugin_slug = $plugin_info['slug'] ? $plugin_info['slug'] : '';
            if (!empty($title) && !empty($plugin_slug)) {
                $status = is_dir(WP_PLUGIN_DIR . '/' . $plugin_slug);
                $plugin_file = $this->get_plugin_file($plugin_slug);
                if (!is_plugin_active($plugin_file)) {
                    $html .= '<div class="mb-about-list-item">';
                    $html .= '<p class="mb-about-list-name">' . esc_html($title) . '</p>';
                    if ($status) {
                        $button_class = 'activate-now';
                        $button_txt = esc_html__('Activate', 'yatri');
                        $url = wp_nonce_url('plugins.php?action=activate&amp;plugin=' . urlencode($plugin_file), 'activate-plugin_' . $plugin_file); // phpcs:ignore
                    } else {
                        $button_class = 'install-now';
                        $button_txt = esc_html__('Install Now', 'yatri');
                        $url = wp_nonce_url(
                            add_query_arg(
                                array(
                                    'action' => 'install-plugin',
                                    'plugin' => $plugin_slug,
                                ),
                                network_admin_url('update.php')
                            ),
                            'install-plugin_' . $plugin_slug
                        );
                    }

                    $detail_link = add_query_arg(
                        array(
                            'tab' => 'plugin-information',
                            'plugin' => $plugin_slug,
                            'TB_iframe' => 'true',
                            'width' => '772',
                            'height' => '349',
                        ),
                        network_admin_url('plugin-install.php')
                    );

                    $class = 'action-btn plugin-card-' . $plugin_slug;

                    $html .= '<div class="rcp">';
                    $html .= '<p class="' . esc_attr($class) . '"><a href="' . esc_url($url) . '" data-slug="' . esc_attr($plugin_slug) . '" class="' . esc_attr($button_class) . '">' . $button_txt . '</a></p>';
                    $html .= '<a class="plugin-detail thickbox open-plugin-details-modal" href="' . esc_url($detail_link) . '">' . esc_html__('Details', 'yatri') . '</a>';
                    $html .= '</div>';

                    $html .= '</div>';
                }
            }
        } // end foreach

        if ($html) {
            ?>
            <div class="mb-about-box">
                <div class="mb-about-box-top">
                    <span class="dashicons dashicons-admin-plugins"></span>
                    <?php _e('Recommend Plugins', 'yatri'); ?></div>
                <div class="mb-about-box-content mb-about-list-border">
                    <?php
                    echo $html; // WPCS: XSS OK.
                    ?>
                </div>
            </div>
            <?php
        }
    }

    function premium_features()
    {

        $modules = array(

            array(
                'name' => __('WooCommerce Booster', 'yatri'),
                'desc' => __('Gives you creative control of style and layout options for your shop.', 'yatri'),
                'url' => '',
            ),

            array(
                'name' => __('Single Product Layouts', 'yatri'),
                'desc' => __('More beautiful layouts for your single product.', 'yatri'),
                'url' => '',
                'sub' => true,
            ),

            array(
                'name' => __('Infinity Scroll.', 'yatri'),
                'desc' => '',
                'url' => '',
            ),

        );

        ?>
        <div class="mb-about-box pro">
            <div class="mb-about-box-top"><?php _e('Yatri Pro - Features', 'yatri'); ?>
                <a class="mb-about-upgrade" target="_blank"
                   href="#"><?php _e('Upgrade Now &rarr;', 'yatri'); ?></a>
            </div>
            <div class="mb-about-box-content mb-about-modules">
                <?php foreach ($modules as $m) { ?>
                    <div class="mb-about-module-item <?php echo isset($m['sub']) && $m['sub'] ? 'mb-about-sub-module' : ''; ?>">
                        <div class="mb-about-module-info">
                            <div class="mb-about-module-name"><?php echo esc_html($m['name']); ?></div>
                            <?php if (isset($m['desc'])) { ?>
                                <div class="mb-about-module-desc"><?php echo esc_html($m['desc']); ?></div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php
    }

    private function page_inner()
    {
        ?>
        <div id="plugin-filter" class="mb-about-row metabox-holder">
            <hr class="wp-header-end">
            <?php

            do_action('yatri_about_start', $this);

            ?>
            <div class="mb-about-menu-tabs">
                <div class="mb-about-box">
                    <?php do_action('yatri_about_menu_tabs', $this); ?>
                </div>
            </div>
            <?php
            if ($this->current_tab && has_action('yatri_about_tab_' . $this->current_tab)) {
                do_action('yatri_about_tab_' . $this->current_tab, $this);
            } else {
                ?>
                <div class="mb-about-main">
                    <?php do_action('yatri_about_main', $this); ?>
                </div>
                <div class="mb-about-sidebar">
                    <?php do_action('yatri_about_sidebar', $this); ?>
                </div>
                <?php
            }

            do_action('yatri_about_end', $this);

            ?>
        </div>
        <?php
    }

}

Yatri_About::get_instance();


