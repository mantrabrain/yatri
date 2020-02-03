<?php
// Archive Page Layout
$wp_customize->add_setting(yatri_get_customizer_id('blog_archive_page_layout'),
    array(
        'default' => $default['blog_archive_page_layout'],
        'sanitize_callback' => 'yatri_sanitize_select',
    )
);

$wp_customize->add_control(
    new Mantrabrain_Theme_Customizer_Control_Radio(
        $wp_customize,
        yatri_get_customizer_id('blog_archive_page_layout'),
        array(
            'label' => esc_html__('Layout Style', 'yatri'),
            'section' => 'yatri_section_blog_archive_page_layouts_options',
            'priority' => 40,
            'choices' => yatri_layout_options(),
            'has_images' => true,

        )
    )
);
// Setting blog_archive_sidebar_width.
$wp_customize->add_setting(yatri_get_customizer_id('blog_archive_sidebar_width'),
    array(
        'default' => $default['blog_archive_sidebar_width'],
        'sanitize_callback' => 'yatri_sanitize_slider',
        'transport' => 'postMessage',
    )
);
$wp_customize->add_control(
    new Mantrabrain_Theme_Customizer_Control_Slider(
        $wp_customize,
        yatri_get_customizer_id('blog_archive_sidebar_width'),
        array(
            'label' => esc_html__('Sidebar Width (%)', 'yatri'),
            'section' => 'yatri_section_blog_archive_page_layouts_options',
            'priority' => 80,
            'input_attrs' => array(
                'min' => 15,
                'max' => 50,
                'step' => 1
            ),
        )
    )
);

// Blog Archive Design & Styling
$wp_customize->add_setting(yatri_get_customizer_id('blog_archive_design_style'),
    array(
        'default' => $default['blog_archive_design_style'],
        'sanitize_callback' => array('Mantrabrain_Theme_Helper', 'sanitize_modal'),
        'transport' 			=> 'postMessage',


    )
);

$wp_customize->add_control(
    new Mantrabrain_Theme_Customizer_Control_Modal(
        $wp_customize,
        yatri_get_customizer_id('blog_archive_design_style'),
        array(
            'label' => esc_html__('Design & Styling ( Section )', 'yatri'),
            'section' => 'yatri_section_blog_archive_page_layouts_options',
            'priority' => 100,
            'type' => 'yatri-style',

        )
    )
);




