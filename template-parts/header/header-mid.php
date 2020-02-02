<div class="yatri-mid-header yatri-header-item">
    <div class="yat-container">
        <div class="yat-row align-items-center">

            <?php

            $mid_header_sections = yatri_get_header_option('mid_header_sections');

            foreach ($mid_header_sections as $section_index => $section_info) {

                $section_id = isset($section_info['section']) ? $section_info['section'] : '';

                $width = isset($section_info['width']) ? $section_info['width'] : '';

                if (!empty($section_id) && ('' === $width || ('' != $width && $width > 0))) {


                    $options = array();

                    $container_class = 'yat-col-12 yat-col-lg-4 yatri-grid-' . (absint($section_index + 1));


                    switch ($section_id) {

                        case "offcanvas_menu":
                            $options = array(
                                'start_from' => yatri_get_header_option('mid_header_offcanvas_open_from'),
                                'type' => yatri_get_header_option('mid_header_offcanvas_menu_type'),
                                'sidebar' => yatri_get_header_option('mid_header_offcanvas_menu_sidebar'),
                                'menu' => yatri_get_header_option('mid_header_offcanvas_menu_nav_menu'),

                            );
                            break;
                        case "social_icons":

                            $option_json = yatri_get_header_option('mid_header_social_icons');

                            $options['icons'] = yatri_maybe_json_decode($option_json);

                            break;
                        case "menu":
                            $container_class .= ' main-navigation';
                            $options = array(
                                'location' => yatri_get_header_option('mid_header_main_menu'),
                                'class' => 'nav'

                            );
                            break;
                        case "site_branding":
                            $options = array(
                                'layout' => yatri_get_option('mid_header_branding_layout'),
                                'header' => 'mid',
                                'type' => yatri_get_header_option('mid_header_site_identity')

                            );
                            break;
                        case "search_form":

                            $options = array(
                                'icon' => yatri_get_header_option('mid_header_search_button_icon'),
                                'type' => yatri_get_header_option('mid_header_search_form_type'),
                                'placeholder' => yatri_get_header_option('mid_header_search_form_placeholder_text')

                            );
                            break;
                        case "button":

                            $options = array(
                                'icon' => yatri_get_header_option('mid_header_button_icon'),
                                'link' => yatri_get_header_option('mid_header_button_link'),
                                'target' => yatri_get_header_option('mid_header_button_target'),
                                'label' => yatri_get_header_option('mid_header_button_label'),

                            );
                            break;
                        case "office_information":

                            $option_json = yatri_get_header_option('mid_header_office_info');

                            $options['informations'] = yatri_maybe_json_decode($option_json);
                            break;
                        case "custom_html":

                            $options['content'] = yatri_get_header_option('mid_header_custom_html_content');
                            break;
                    }


                    Yatri_Sections::get_section($section_id, $options, $container_class);

                } else {

                    if ('' === $width || ('' != $width && $width > 0)) {
                        echo '<div class="yatri-section-container yat-col-12 yat-col-lg-4 yatri-grid-' . absint($section_index + 1) . '"></div>';
                    }

                }
            }

            ?>
        </div>
    </div>
</div>

