<div class="bottom-footer yatri-bottom-footer-area">
    <div class="yat-container">
        <div class="yat-row align-items-center">

            <?php

            $bottom_footer_sections = yatri_get_header_option('bottom_footer_sections');

            foreach ($bottom_footer_sections as $section_index => $section_info) {

                $section_id = isset($section_info['section']) ? $section_info['section'] : '';

                $width = isset($section_info['width']) ? $section_info['width'] : '';

                if (!empty($section_id) && ('' === $width || ('' != $width && $width > 0))) {

                    $options = array();

                    $container_class = 'yat-col-12 yat-col-lg-4 yatri-grid-' . absint($section_index + 1);


                    switch ($section_id) {

                        case "menu":
                            $container_class .= ' main-navigation';
                            $options = array(
                                'location' => yatri_get_header_option('bottom_footer_main_menu'),
                                'class' => 'nav',
                                'depth' => 1,

                            );
                            break;
                        case "copyright":
                            $options['content'] = yatri_get_header_option('bottom_footer_copyright_content');
                            break;
                        case "social_icons":

                            $option_json = yatri_get_header_option('bottom_footer_social_icons');

                            $options['icons'] = yatri_maybe_json_decode($option_json);

                            break;
                        case "button":

                            $options = array(
                                'icon' => yatri_get_header_option('bottom_footer_button_icon'),
                                'link' => yatri_get_header_option('bottom_footer_button_link'),
                                'target' => yatri_get_header_option('bottom_footer_button_target'),
                                'label' => yatri_get_header_option('bottom_footer_button_label'),

                            );
                            break;
                        case "office_information":

                            $option_json = yatri_get_header_option('bottom_footer_office_info');

                            $options['informations'] = yatri_maybe_json_decode($option_json);
                            break;
                        case "custom_html":

                            $options['content'] = yatri_get_header_option('bottom_footer_custom_html_content');
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

