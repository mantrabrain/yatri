<?php

class Yatri_Section_Social_Icons_Config
{
    public static function get_design_style_config($id, $parent_selector)
    {
        return array(
            'tabs' => array(
                $id . '_color' => __('Colors', 'yatri'),
                $id . '_spacing' => __('Spacing', 'yatri'),
            ),
            $id . '_color_fields' => array(
                array(
                    'name' => $id . '_icon_color',
                    'type' => 'color',
                    'label' => __('Icon Color', 'yatri'),
                    'description' => '',
                    'default' => '#c1c1c1',
                    'selector' => "{$parent_selector} .yatri-section-container.social_icons-container .yatri-section-social-icons ul li a span",
                    'css_property' => 'color:{{value}};'
                ),

                array(
                    'name' => $id . '_icon_hover_color',
                    'type' => 'color',
                    'label' => __('Icon Hover Color', 'yatri'),
                    'description' => '',
                    'default' => '#c1c1c1',
                    'selector' => "{$parent_selector} .yatri-section-container.social_icons-container .yatri-section-social-icons ul li:hover a span",
                    'css_property' => 'color:{{value}};'
                ),
                array(
                    'name' => $id . '_background_color',
                    'type' => 'color',
                    'label' => __('Background Color', 'yatri'),
                    'description' => '',
                    'default' => '#c1c1c1',
                    'selector' => "{$parent_selector} .yatri-section-container.social_icons-container .yatri-section-social-icons ul li",
                    'css_property' => 'background-color:{{value}};'
                ),
                array(
                    'name' => $id . '_background_hover_color',
                    'type' => 'color',
                    'label' => __('Hover Background Color', 'yatri'),
                    'description' => '',
                    'default' => '#c1c1c1',
                    'selector' => "{$parent_selector} .yatri-section-container.social_icons-container .yatri-section-social-icons ul li:hover",
                    'css_property' => 'background-color:{{value}};'
                )
            ),
            $id . '_spacing_fields' =>
                array(
                    array(
                        'name' => $id . '_alignment',
                        'type' => 'alignment',
                        'label' => __('Alignment', 'yatri'),
                        'description' => '',
                        'default' => array('desktop' => ''),
                        'device_settings' => true,
                        'devices' => array('desktop'),
                        'options' => array(
                            '' => array(
                                'title' => '',
                                'icon' => '',
                            ),
                            'left' => array(
                                'title' => __('Left', 'yatri'),
                                'icon' => 'dashicons dashicons-editor-alignleft',
                            ),
                            'center' => array(
                                'title' => __('Center', 'yatri'),
                                'icon' => 'dashicons dashicons-editor-aligncenter',
                            ),
                            'right' => array(
                                'title' => __('Right', 'yatri'),
                                'icon' => 'dashicons dashicons-editor-alignright',
                            )
                        ),
                        'selector' => "{$parent_selector} .yatri-section-container.social_icons-container",
                        'css_property' => 'text-align:{{value}};'
                    ),
                    array(
                        'name' => $id . '_icon_padding',
                        'type' => 'padding',
                        'device_settings' => true,
                        'devices' => array('desktop', 'tablet', 'mobile'),
                        'label' => __('Padding', 'yatri'),
                        'description' => '',
                        'default' => array(
                            'top' => array(
                                'value' => '',
                                'unit' => 'px'
                            ),
                            'right' => array(
                                'value' => '',
                                'unit' => 'px'
                            ),
                            'bottom' => array(
                                'value' => '',
                                'unit' => 'px'
                            ),
                            'left' => array(
                                'value' => '',
                                'unit' => 'px'
                            )

                        ),
                        'selector' => "{$parent_selector} .yatri-section-container.social_icons-container .yatri-section-social-icons ul li a",

                    ),
                    array(
                        'name' => $id . '_icon_margin',
                        'type' => 'margin',
                        'device_settings' => true,
                        'devices' => array('desktop', 'tablet', 'mobile'),
                        'label' => __('Margin', 'yatri'),
                        'description' => '',
                        'default' => array(
                            'top' => array(
                                'value' => '',
                                'unit' => 'px'
                            ),
                            'right' => array(
                                'value' => '',
                                'unit' => 'px'
                            ),
                            'bottom' => array(
                                'value' => '',
                                'unit' => 'px'
                            ),
                            'left' => array(
                                'value' => '',
                                'unit' => 'px'
                            )

                        ),
                        'selector' => "{$parent_selector} .yatri-section-container.social_icons-container .yatri-section-social-icons ul li",


                    ),


                    array(
                        'name' => $id . '_border_heading',
                        'type' => 'heading',
                        'label' => __('Border', 'yatri'),
                    ),
                    array(
                        'name' => $id . '_border',
                        'type' => 'border',
                        'label' => '',
                        'device_settings' => true,
                        'devices' => array('desktop', 'tablet', 'mobile'),
                        'default' => array(
                            'left' => 0,
                            'right' => 0,
                            'top' => 0,
                            'bottom' => 0
                        ),
                        // 'additional_css' => "@media (max-width: 768px){{$parent_selector} .yatri-section-container.social_icons-container .yatri-section-social-icons.yatri-section-inner ul li:last-child{border-bottom:auto;}} ",
                        'selector' => "{$parent_selector} .yatri-section-container.social_icons-container .yatri-section-social-icons ul li",
                    )
                ),


        );
    }
}