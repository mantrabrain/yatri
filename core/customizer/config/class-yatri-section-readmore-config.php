<?php

class Yatri_Section_Readmore_Config
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
                    'name' => $id . '_text_color',
                    'type' => 'color',
                    'label' => __('Text Color', 'yatri'),
                    'description' => '',
                    'default' => '#c1c1c1',
                    'selector' => "{$parent_selector} .button-text, {$parent_selector} .button-text span",
                    'css_property' => 'color:{{value}};'
                ),
                array(
                    'name' => $id . '_hover_text_color',
                    'type' => 'color',
                    'label' => __('Hover Text Color', 'yatri'),
                    'description' => '',
                    'default' => '#c1c1c1',
                    'selector' => "{$parent_selector} .button-text:hover, {$parent_selector} .button-text:hover span",
                    'css_property' => 'color:{{value}};'
                ),
                array(
                    'name' => $id . '_background_color',
                    'type' => 'color',
                    'label' => __('Background Color', 'yatri'),
                    'description' => '',
                    'default' => '#c1c1c1',
                    'selector' => "{$parent_selector} .button-text",
                    'css_property' => 'background-color:{{value}};'
                ),
                array(
                    'name' => $id . '_hover_background_color',
                    'type' => 'color',
                    'label' => __('Hover Background Color', 'yatri'),
                    'description' => '',
                    'default' => '#c1c1c1',
                    'selector' => "{$parent_selector} .button-text:hover",
                    'css_property' => 'background-color:{{value}};'
                ),
            ),
            $id . '_spacing_fields' =>
                array(
                    array(
                        'name' => $id . '_alignment',
                        'type' => 'alignment',
                        'label' => __('Alignment', 'yatri'),
                        'description' => '',
                        'default' => 'left',
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
                        'selector' => "{$parent_selector}",

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
                        'selector' => "{$parent_selector} .button-text",


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
                        'selector' => "{$parent_selector} .button-text",
                    ),

                ),


        );
    }
}