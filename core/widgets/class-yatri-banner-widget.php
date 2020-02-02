<?php
/**
 * Custom widgets.
 *
 * @package Yatri
 */

if (!class_exists('Yatri_Banner_Widget')) :

    /**
     * CTA widget class.
     *
     * @since 1.0.0
     */
    class Yatri_Banner_Widget extends Mantrabrain_Theme_Widget_Base
    {

        /**
         * Constructor.
         *
         * @since 1.0.0
         */
        function __construct()
        {
            $opts = array(
                'classname' => 'yatri_banner_widget',
                'description' => esc_html__('Banner', 'yatri'),
            );
            parent::__construct('yatri-banner-widget', esc_html__('Yatri - Banner', 'yatri'), $opts);
        }


        function widget_fields()
        {

            $fields = array(
                'enable_full_width' => array(
                    'name' => 'enable_full_width',
                    'title' => esc_html__('Enable full width', 'yatri'),
                    'type' => 'checkbox',
                ),
                'slider_content' => array(
                    'name' => 'slider_content',
                    'title' => esc_html__('Slider Content Repeator', 'yatri'),
                    'type' => 'repeator',
                    'repeator_num' => 5,
                    'options' =>
                        array(
                            'background_image' => array(
                                'name' => 'background_image',
                                'title' => esc_html__('Background Image', 'yatri'),
                                'type' => 'image',

                            ),
                            'caption_title' => array(
                                'name' => 'caption_title',
                                'title' => esc_html__('Caption Title', 'yatri'),
                                'default' => esc_html__('Default Caption Title', 'yatri'),
                                'type' => 'text',
                                'description' => esc_html__('Caption title description.', 'yatri'),

                            ),
                            'caption_description' => array(
                                'name' => 'caption_description',
                                'title' => esc_html__('Description', 'yatri'),
                                'default' => esc_html__('This is dummy caption details', 'yatri'),
                                'type' => 'text',
                            ),
                            'button_text' => array(
                                'name' => 'button_text',
                                'title' => esc_html__('Button Text', 'yatri'),
                                'default' => esc_html__('Buy Now', 'yatri'),
                                'type' => 'text',
                            ),
                            'button_link' => array(
                                'name' => 'button_link',
                                'title' => esc_html__('Button Link', 'yatri'),
                                'default' => '#',
                                'type' => 'text',
                            )
                        )
                ),
                'caption_alignment' => array(
                    'name' => 'caption_alignment',
                    'title' => esc_html__('Caption algnment', 'yatri'),
                    'type' => 'select',
                    'options' => array(
                        'left' => __('Left', 'yatri'),
                        'right' => __('Right', 'yatri'),
                        'center' => __('Center', 'yatri'),
                    ),
                    'default' => 'center'
                )


            );

            return $fields;

        }

        /**
         * Echo the widget content.
         *
         * @since 1.0.0
         *
         * @param array $args Display arguments including before_title, after_title,
         *                        before_widget, and after_widget.
         * @param array $instance The settings for the particular instance of the widget.
         */
        function widget($args, $instance)
        {

            $valid_widget_instance = $this->validation->validate($instance, $this->widget_fields());

            $enable_full_width = (bool)($valid_widget_instance['enable_full_width']);


            echo $args['before_widget'];

            $banner_widget_class = 'banner-widget';

            if ($enable_full_width) {
                $banner_widget_class .= ' mb-full-width';
            }
            ?>


            <div class="<?php echo esc_attr($banner_widget_class); ?>">

                <div class="carousel-wrap">
                    <div class="owl-carousel yatri-carousel caption-<?php echo esc_attr($valid_widget_instance['caption_alignment']) ?>">
                        <?php

                        $slider_content = isset($valid_widget_instance['slider_content']) ? $valid_widget_instance['slider_content'] : array();

                        foreach ($slider_content as $slider) {

                            $image_url = isset($slider['background_image']) ? $slider['background_image'] : '';
                            if (!empty($image_url)) {
                                ?>
                                <div class="item"
                                     style="background-image:url('<?php echo esc_url($image_url); ?>');">
                                    <div class="carousel-content">
                                        <h2><?php echo isset($slider['caption_title']) ? esc_html($slider['caption_title']) : '' ?></h2>
                                        <p><?php echo isset($slider['caption_description']) ? esc_html($slider['caption_description']) : '' ?></p>
                                        <?php if (!empty($slider['button_text'])) { ?>
                                            <a href="<?php echo esc_url($slider['button_link']) ?>"
                                               class="button-primary"><?php echo esc_html($slider['button_text']) ?></a>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php }
                        } ?>
                    </div>
                </div>


                <div style="clear:both">

                </div>
            </div><!-- .banner-widget -->

            <?php
            echo $args['after_widget'];

        }

    }

endif;