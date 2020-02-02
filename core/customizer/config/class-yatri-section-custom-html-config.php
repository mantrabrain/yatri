<?php

class Yatri_Section_Custom_HTML_Config
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
                    'name' => $id . '_background_color',
                    'type' => 'color',
                    'label' => __('Background Color', 'yatri'),
                    'description' => '',
                    'default' => '#c1c1c1',
                    'selector' => "{$parent_selector} .yatri-section-container.custom_html-container .yatri-section-inner",
                    'css_property' => 'background-color:{{value}};'
                ),
                array(
                    'name' => $id . '_text_color',
                    'type' => 'color',
                    'label' => __('Text Color', 'yatri'),
                    'description' => '',
                    'default' => '#c1c1c1',
                    'selector' => "
                    {$parent_selector} .yatri-section-container.custom_html-container .yatri-section-inner *,
                    {$parent_selector} .yatri-section-container.custom_html-container .yatri-section-inner
                    ",
                    'css_property' => 'color:{{value}};'
                ),
                array(
                    'name' => $id . '_link_color',
                    'type' => 'color',
                    'label' => __('Link Color', 'yatri'),
                    'description' => '',
                    'default' => '#c1c1c1',
                    'selector' => "{$parent_selector} .yatri-section-container.custom_html-container .yatri-section-inner a",

                    'css_property' => 'color:{{value}};'
                ),
                array(
                    'name' => $id . '_link_hover_color',
                    'type' => 'color',
                    'label' => __('Link Hover Color', 'yatri'),
                    'description' => '',
                    'default' => '#c1c1c1',
                    'selector' => "{$parent_selector} .yatri-section-container.custom_html-container .yatri-section-inner a:hover",
                    'css_property' => 'color:{{value}};'
                ),
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
                        'selector' => "{$parent_selector} .yatri-section-container.custom_html-container",
                        'css_property' => 'text-align:{{value}};'
                    ),
                    array(
                        'name' => $id . '_padding',
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
                        'selector' => "{$parent_selector} .yatri-section-container.custom_html-container .yatri-section-inner",


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
                        'default' => array(
                            'left' => 0,
                            'right' => 0,
                            'top' => 0,
                            'bottom' => 0
                        ),
                        'selector' => "{$parent_selector} .yatri-section-container.custom_html-container .yatri-section-inner",
                    )
                ),


        );
    }
}