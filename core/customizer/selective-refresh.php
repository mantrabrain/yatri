<?php

if (isset($wp_customize->selective_refresh)) {
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';

    $wp_customize->selective_refresh->add_partial('blogname', array(
        'selector' => '.site-title a',
        'container_inclusive' => false,
        'render_callback' => 'Yatri_customize_partial_blogname',
    ));
    $wp_customize->selective_refresh->add_partial('blogdescription', array(
        'selector' => '.site-description',
        'container_inclusive' => false,
        'render_callback' => 'Yatri_customize_partial_blogdescription',
    ));
}