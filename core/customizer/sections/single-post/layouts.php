<?php
$wp_customize->add_section(new Mantrabrain_Theme_Customizer_Section(
    $wp_customize, 'yatri_section_single_post_layouts_options', array(
    'title' => esc_html__('Layouts', 'yatri'),
    'panel' => YATRI_THEME_OPTION_PANEL,
    'section' => 'yatri_section_single_post_options',
    'priority' => 20,
)));

include_once 'layouts/main.php';
