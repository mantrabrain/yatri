<?php
$wp_customize->add_section(new Mantrabrain_Theme_Customizer_Section(
    $wp_customize, 'yatri_section_blog_archive_page_content_options', array(
    'title' => esc_html__('Content & Metas', 'yatri'),
    'panel' => YATRI_THEME_OPTION_PANEL,
    'section' => 'yatri_section_blog_archive_page_options',
    'priority' => 40,
)));

include_once 'content/main.php';


$blog_archive_page_content_priority = 300;

$yatri_blog_archive_page_content_order = yatri_blog_archive_page_content_order('blog_archive_page_content_order');

foreach ($yatri_blog_archive_page_content_order as $archive_page_content_key => $archive_page_contents) {

    $include_path = 'blog-archive/section/' . $archive_page_content_key;

    $include_path = 'blog-archive/section/' . $archive_page_content_key . '.php';

    if (file_exists(YATRI_THEME_DIR . '/core/customizer/sections/' . $include_path)) {

        include_once YATRI_THEME_DIR . '/core/customizer/sections/' . $include_path;
    }

}

