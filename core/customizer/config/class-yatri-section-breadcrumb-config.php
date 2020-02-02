<?php

class Yatri_Section_Breadcrumb_Config
{
    public static function get_design_style_config()
    {
        return array(
            'tabs' => array(
                'yatri_breadcrumb_style_design_color' => __('Colors', 'yatri'),
                'yatri_breadcrumb_style_design_spacing' => __('Spacing', 'yatri'),
            ),
            'yatri_breadcrumb_style_design_color_fields' => array(

                array(
                    'name' => 'yatri_breadcrumb_style_design_background_color',
                    'type' => 'color',
                    'label' => __('Section Background Color', 'yatri'),
                    'description' => '',
                    'default' => '#c1c1c1',
                    'selector' => '.section-breadcrumb-wrap',
                    'css_property' => 'background-color:{{value}};'
                ),
                array(
                    'name' => 'yatri_breadcrumb_style_design_background_image',
                    'type' => 'image',
                    'label' => __('Section Background Image', 'yatri'),
                    'description' => '',
                    'selector' => '.section-breadcrumb-wrap',
                    'css_property' => 'background-image:{{value}};'
                ),
                array(
                    'name' => 'yatri_breadcrumb_style_design_overlay_color',
                    'type' => 'overlay',
                    'label' => __('Section Overlay Background', 'yatri'),
                    'description' => '',
                    'default' => '#c1c1c1',
                    'additional_css' => '.section-breadcrumb-wrap .breadcrumb-wrap{position:relative;z-index:1;}',
                    'selector' => '.section-breadcrumb-wrap',
                    'css_property' => 'background-color:{{value}};'
                ),
                array(
                    'name' => 'yatri_breadcrumb_style_design_container_background_color',
                    'type' => 'color',
                    'label' => __('Container Background Color', 'yatri'),
                    'description' => '',
                    'default' => '#c1c1c1',
                    'selector' => '.section-breadcrumb-wrap .yat-container',
                    'css_property' => 'background-color:{{value}};'
                ),
                array(
                    'name' => 'yatri_breadcrumb_style_design_text_color',
                    'type' => 'color',
                    'label' => __('Text Color', 'yatri'),
                    'description' => '',
                    'default' => '#c1c1c1',
                    'selector' => '.breadcrumb-wrap .breadcrumbs .trail-items li:last-child span',
                    'css_property' => 'color:{{value}};'
                ),
                array(
                    'name' => 'yatri_breadcrumb_style_design_link_color',
                    'type' => 'color',
                    'label' => __('Link Color', 'yatri'),
                    'description' => '',
                    'default' => '#c1c1c1',
                    'selector' => '.breadcrumb-wrap .breadcrumbs .trail-items li a span',
                    'css_property' => 'color:{{value}};'
                ),
                array(
                    'name' => 'yatri_breadcrumb_style_design_link_hover_color',
                    'type' => 'color',
                    'label' => __('Link Hover Color', 'yatri'),
                    'description' => '',
                    'default' => '#c1c1c1',
                    'selector' => '.breadcrumb-wrap .breadcrumbs .trail-items li:hover a span',
                    'css_property' => 'color:{{value}};'
                ),
                array(
                    'name' => 'yatri_breadcrumb_style_design_separator_color',
                    'type' => 'color',
                    'label' => __('Separator Color', 'yatri'),
                    'description' => '',
                    'default' => '#c1c1c1',
                    'selector' => '.breadcrumb-wrap .breadcrumbs .trail-items a:after',
                    'css_property' => 'color:{{value}};'
                ),
            ),
            'yatri_breadcrumb_style_design_spacing_fields' => array(
                array(
                    'name' => 'yatri_breadcrumb_style_design_alignment',
                    'type' => 'alignment',
                    'label' => __('Alignment', 'yatri'),
                    'description' => '',
                    'default' => 'center',
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
                    'selector' => '.section-breadcrumb-wrap',

                    'css_property' => 'text-align:{{value}};'
                ),
                array(
                    'name' => 'yatri_breadcrumb_style_design_padding',
                    'type' => 'padding',
                    'device_settings' => true,
                    'devices' => array('desktop', 'tablet', 'mobile'),
                    'label' => __('Section Padding', 'yatri'),
                    'description' => '',
                    'default' => array(
                        'desktop' => array(
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
                        'tablet' => array(

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
                        'mobile' => array(

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

                    ),
                    'selector' => '.section-breadcrumb-wrap',
                ),
                array(
                    'name' => 'yatri_breadcrumb_style_design_container_padding',
                    'type' => 'padding',
                    'device_settings' => true,
                    'devices' => array('desktop', 'tablet', 'mobile'),
                    'label' => __('Container Padding', 'yatri'),
                    'description' => '',
                    'default' => array(
                        'desktop' => array(
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
                        'tablet' => array(

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
                        'mobile' => array(

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

                    ),
                    'selector' => 'body.yatri-global-layout-full_width .section-breadcrumb-wrap  .yat-container, 
                    body.yatri-global-layout-boxed .section-breadcrumb-wrap  .yat-container,
                 .section-breadcrumb-wrap .yat-container',
                ),
                array(
                    'name' => 'yatri_breadcrumb_style_design_border_heading',
                    'type' => 'heading',
                    'label' => __('Section Border', 'yatri'),
                ),
                array(
                    'name' => 'yatri_breadcrumb_style_design_border',
                    'type' => 'border',
                    'label' => '',
                    'default' => array(
                        'left' => 0,
                        'right' => 0,
                        'top' => 0,
                        'bottom' => 0
                    ),
                    'selector' => '.section-breadcrumb-wrap',

                ),

            )
        );
    }
}