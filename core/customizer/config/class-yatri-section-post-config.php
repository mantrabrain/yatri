<?php

class Yatri_Section_Post_Config
{
    public static function get_design_style_config($id, $selector)
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
                    'selector' => "{$selector}",
                    'css_property' => 'background-color:{{value}};'
                ),
                array(
                    'name' => $id . '_background_image',
                    'type' => 'image',
                    'label' => __('Background Image', 'yatri'),
                    'description' => '',
                    'default' => '#c1c1c1',
                    'selector' => "{$selector}",
                    'css_property' => 'background-image:{{value}};'
                ),
            ),
            $id . '_spacing_fields' =>
                array(
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
                        'selector' => "{$selector}",


                    ),
                    array(
                        'name' => $id . '_margin',
                        'type' => 'margin',
                        'device_settings' => true,
                        'devices' => array('desktop', 'tablet', 'mobile'),
                        'label' => __('Margin', 'yatri'),
                        'description' => '',
                        'disabled_fields' => array(
                            'desktop' => array('right', 'left'),
                            'tablet' => array('right', 'left'),
                            'mobile' => array('right', 'left')
                        ),
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
                        'selector' => "{$selector}",


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
                        'selector' => "{$selector}",
                    )
                ),


        );
    }
}