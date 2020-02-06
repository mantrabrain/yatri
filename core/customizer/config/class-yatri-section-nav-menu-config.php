<?php

class Yatri_Section_Nav_Menu_Config
{
    public static function get_design_style_config($id, $parent_selector)
    {
        return array(
            'tabs' => array(
                $id . '_main_menu' => __('Main Menu', 'yatri'),
                $id . '_dropdown_menu' => __('Dropdown', 'yatri'),
            ),
            $id . '_main_menu_fields' =>
                array(
                    array(
                        'name' => $id . '_nav__alignment',
                        'type' => 'alignment',
                        'label' => __('Menu Alignment', 'yatri'),
                        'description' => '',
                        'default' => array(
                            'desktop' => 'center',
                        ),
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
                        'selector' => "{$parent_selector} .yatri-section-container.menu-container nav > ul",
                        'css_property' => 'text-align:{{value}};'
                    ),
                    array(
                        'name' => $id . '_nav_color_heading',
                        'type' => 'heading',
                        'label' => __('Menu Colors', 'yatri'),
                    ),
                    array(
                        'name' => $id . '_nav_color',
                        'type' => 'color',
                        'label' => __('Font color', 'yatri'),
                        'description' => '',
                        'default' => '#fff',
                        'css_property' => 'color:{{value}};',
                        'selector' => "{$parent_selector} .yatri-section-container.menu-container ul:not(.sub-menu)>li>a",
                    ),
                    array(
                        'name' => $id . '_nav_hover_color',
                        'type' => 'color',
                        'label' => __('Hover font color', 'yatri'),
                        'description' => '',
                        'default' => '#fff',
                        'css_property' => 'color:{{value}};',
                        'selector' => "{$parent_selector} .yatri-section-container.menu-container ul:not(.sub-menu)>li:hover>a,
                    {$parent_selector} .yatri-section-container.menu-container ul:not(.sub-menu)>li.current-menu-item:hover>a",
                    ),
                    array(
                        'name' => $id . '_nav_background_color',
                        'type' => 'color',
                        'label' => __('Background color', 'yatri'),
                        'description' => '',
                        'default' => '#fff',
                        'css_property' => 'background-color:{{value}};',
                        'selector' => "{$parent_selector} .yatri-section-container.menu-container ul:not(.sub-menu)>li>a",
                    ),
                    array(
                        'name' => $id . '_nav_hover_background_color',
                        'type' => 'color',
                        'label' => __('Hover background color', 'yatri'),
                        'description' => '',
                        'default' => '#fff',
                        'css_property' => 'background-color:{{value}};',
                        'selector' => "{$parent_selector} .yatri-section-container.menu-container ul:not(.sub-menu)>li:hover>a,
                    {$parent_selector} .yatri-section-container.menu-container ul:not(.sub-menu)>li.current-menu-item:hover>a",
                    ),
                    array(
                        'name' => $id . '_nav_active_font_color',
                        'type' => 'color',
                        'label' => __('Active font color', 'yatri'),
                        'description' => '',
                        'default' => '#fff',
                        'css_property' => 'color:{{value}};',
                        'selector' => "{$parent_selector} .yatri-section-container.menu-container ul:not(.sub-menu)>li.current-menu-item>a",
                    ),
                    array(
                        'name' => $id . '_nav_active_background_color',
                        'type' => 'color',
                        'label' => __('Active background color', 'yatri'),
                        'description' => '',
                        'default' => '#fff',
                        'css_property' => 'background-color:{{value}};',
                        'selector' => "{$parent_selector} .yatri-section-container.menu-container ul:not(.sub-menu)>li.current-menu-item>a",
                    ),

                    array(
                        'name' => $id . '_hamburger',
                        'type' => 'heading',
                        'label' => __('Mobile/Tablet Menu', 'yatri'),
                    ),
                    array(
                        'name' => $id . '_hamburger_color',
                        'type' => 'color',
                        'label' => __('Hamburger Color', 'yatri'),
                        'description' => '',
                        'default' => '#c1c1c1',
                        'selector' => "{$parent_selector} .yatri-section-container.menu-container .yatri-responsive-toggle-menu",
                        'css_property' => 'color:{{value}}; border-color:{{value}};'
                    ),
                    array(
                        'name' => $id . '_nav_hamburger_alignment',
                        'type' => 'alignment',
                        'label' => __('Hamburger Alignment', 'yatri'),
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
                        'selector' => "{$parent_selector} .yatri-section-container.menu-container .yatri-responsive-toggle-menu-wrap",
                        'css_property' => 'text-align:{{value}};'
                    ),
                    array(
                        'name' => $id . '_nav_padding_margin_heading',
                        'type' => 'heading',
                        'label' => __('Padding & Margin', 'yatri'),
                    ),
                    array(
                        'name' => $id . '_nav_padding',
                        'type' => 'padding',
                        'device_settings' => true,
                        'devices' => array('desktop', 'tablet', 'mobile'),
                        'label' => __('Padding', 'yatri'),
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
                        'selector' => "{$parent_selector} .yatri-section-container.menu-container ul:not(.sub-menu)>li>a",
                    ),
                    array(
                        'name' => $id . '_nav_margin',
                        'type' => 'margin',
                        'device_settings' => true,
                        'devices' => array('desktop', 'tablet', 'mobile'),
                        'label' => __('Margin', 'yatri'),
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
                        'selector' => "{$parent_selector} .yatri-section-container.menu-container ul:not(.sub-menu)>li>a",
                    ),
                    array(
                        'name' => $id . '_nav_border_heading',
                        'type' => 'heading',
                        'label' => __('Main Menu Border', 'yatri'),
                    ),
                    array(
                        'name' => $id . '_nav_border',
                        'type' => 'border',
                        'device_settings' => true,
                        'devices' => array('desktop', 'tablet', 'mobile'),
                        'label' => '',
                        'default' => array(
                            'left' => 0,
                            'right' => 0,
                            'top' => 0,
                            'bottom' => 0
                        ),
                        'selector' => "{$parent_selector} .yatri-section-container.menu-container ul:not(.sub-menu)>li>a",

                    ),


                ),
            $id . '_dropdown_menu_fields' => array(
                array(
                    'name' => $id . '_dropdown_nav_color_heading',
                    'type' => 'heading',
                    'label' => __('Dropdown Menu Colors', 'yatri'),
                ),
                array(
                    'name' => $id . '_dropdown_nav_color',
                    'type' => 'color',
                    'label' => __('Dropdown font color', 'yatri'),
                    'description' => '',
                    'default' => '#fff',
                    'css_property' => 'color:{{value}};',
                    'selector' => "{$parent_selector} .yatri-section-container.menu-container li.menu-item-has-children ul.sub-menu li a",
                ),
                array(
                    'name' => $id . '_dropdown_nav_hover_color',
                    'type' => 'color',
                    'label' => __('Dropdown hover font color', 'yatri'),
                    'description' => '',
                    'default' => '#fff',
                    'css_property' => 'color:{{value}};',
                    'selector' => "{$parent_selector} .yatri-section-container.menu-container li.menu-item-has-children ul.sub-menu li:hover>a,
                {$parent_selector} .yatri-section-container.menu-container li.menu-item-has-children ul.sub-menu li.current-menu-item:hover>a",
                ),
                array(
                    'name' => $id . '_dropdown_nav_background_color',
                    'type' => 'color',
                    'label' => __('Dropdown background color', 'yatri'),
                    'description' => '',
                    'default' => '#fff',
                    'css_property' => 'background-color:{{value}};',
                    'selector' => "{$parent_selector} .yatri-section-container.menu-container li.menu-item-has-children ul.sub-menu li a",
                ), array(
                    'name' => $id . '_dropdown_nav_hover_background_color',
                    'type' => 'color',
                    'label' => __('Dropdown hover background color', 'yatri'),
                    'description' => '',
                    'default' => '#fff',
                    'css_property' => 'background-color:{{value}};',
                    'selector' => "{$parent_selector} .yatri-section-container.menu-container li.menu-item-has-children ul.sub-menu li:hover>a,
                {$parent_selector} .yatri-section-container.menu-container li.menu-item-has-children ul.sub-menu li.current-menu-item:hover>a",
                ), array(
                    'name' => $id . '_dropdown_nav_active_font_color',
                    'type' => 'color',
                    'label' => __('Dropdown active font color', 'yatri'),
                    'description' => '',
                    'default' => '#fff',
                    'css_property' => 'color:{{value}};',
                    'selector' => "{$parent_selector} .yatri-section-container.menu-container li.menu-item-has-children ul.sub-menu li.current-menu-item>a",
                ), array(
                    'name' => $id . '_dropdown_nav_active_background_color',
                    'type' => 'color',
                    'label' => __('Dropdown active background color', 'yatri'),
                    'description' => '',
                    'default' => '#fff',
                    'css_property' => 'background-color:{{value}};',
                    'selector' => "{$parent_selector} .yatri-section-container.menu-container li.menu-item-has-children ul.sub-menu li.current-menu-item>a",
                ),
                array(
                    'name' => $id . '_dropdown_nav_padding_margin_heading',
                    'type' => 'heading',
                    'label' => __('Padding & Margin', 'yatri'),
                ),
                array(
                    'name' => $id . '_dropdown_nav_padding',
                    'type' => 'padding',
                    'device_settings' => true,
                    'devices' => array('desktop', 'tablet', 'mobile'),
                    'label' => __('Padding', 'yatri'),
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
                    'selector' => "{$parent_selector} .yatri-section-container.menu-container li.menu-item-has-children ul.sub-menu li a",
                ),
                array(
                    'name' => $id . '_dropdown_nav_margin',
                    'type' => 'margin',
                    'device_settings' => true,
                    'devices' => array('desktop', 'tablet', 'mobile'),
                    'label' => __('Margin', 'yatri'),
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
                    'additional_css' =>
                        array('desktop' => "{$parent_selector} .yatri-section-container.menu-container li.menu-item-has-children ul.sub-menu li a{display:inline-block;width:100%;} "),
                    'selector' => "{$parent_selector} .yatri-section-container.menu-container li.menu-item-has-children ul.sub-menu li a",
                ),
                array(
                    'name' => $id . '_dropdown_nav_wrapper_margin',
                    'type' => 'margin',
                    'label' => __('Wrapper Margin', 'yatri'),
                    'description' => '',
                    'selector' => "{$parent_selector} .yatri-section-container.menu-container nav > ul > li:hover > ul,
                        {$parent_selector} .yatri-section-container.menu-container nav > ul > li.focus > ul
                        ",
                ),
                array(
                    'name' => $id . '_nav_border_heading',
                    'type' => 'heading',
                    'label' => __('Dropdown Menu Border', 'yatri'),
                ),
                array(
                    'name' => $id . '_dropdown_nav_border',
                    'type' => 'border',
                    'device_settings' => true,
                    'devices' => array('desktop', 'tablet', 'mobile'),
                    'label' => '',
                    'additional_css' =>
                        array(
                            'desktop' => "{$parent_selector} .yatri-section-container.menu-container li.menu-item-has-children ul.sub-menu,
                        {$parent_selector} .yatri-section-container.menu-container li.menu-item-has-children ul.sub-menu li{border:none;}
                        {$parent_selector} .yatri-section-container.menu-container li.menu-item-has-children ul.sub-menu ul{top:0px;} "
                        ),
                    'default' => array(
                        'left' => 0,
                        'right' => 0,
                        'top' => 0,
                        'bottom' => 0
                    ),
                    'selector' => "{$parent_selector} .yatri-section-container.menu-container li.menu-item-has-children ul.sub-menu li a",

                ),

            ),

        );
    }
}