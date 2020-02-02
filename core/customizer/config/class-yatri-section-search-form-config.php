<?php

class Yatri_Section_Search_Form_Config
{
    public static function get_design_style_config($id, $parent_selector)
    {
        return array(
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
                'selector' => "{$parent_selector} .yatri-section-container.search_form-container",
                'css_property' => 'text-align:{{value}};'
            ),
            array(
                'name' => $id . '_font_color',
                'type' => 'color',
                'label' => __('Font Color', 'yatri'),
                'description' => '',
                'default' => '#c1c1c1',
                'selector' => "{$parent_selector} .yatri-section-search-form .search-form-main input,
                {$parent_selector} .yatri-section-search-form .search-form-main input::placeholder
                
                ",
                'css_property' => 'color:{{value}};'
            ),
            array(
                'name' => $id . '_icon_color',
                'type' => 'color',
                'label' => __('Icon Color', 'yatri'),
                'description' => '',
                'default' => '#c1c1c1',
                'selector' => "
                    {$parent_selector} .yatri-section-search-form .search-form-main .searchform .search-button span,
                    {$parent_selector} .yatri-section-search-form .search-main .yatri-search-icon
                    ",
                'css_property' => 'color:{{value}};'
            )
        );

    }
}