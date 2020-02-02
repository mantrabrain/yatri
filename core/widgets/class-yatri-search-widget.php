<?php
/**
 * Custom widgets.
 *
 * @package Yatri
 */

if (!class_exists('Yatri_Search_Widget')) :

    /**
     * CTA widget class.
     *
     * @since 1.0.0
     */
    class Yatri_Search_Widget extends Mantrabrain_Theme_Widget_Base
    {

        /**
         * Constructor.
         *
         * @since 1.0.0
         */
        function __construct()
        {
            $opts = array(
                'classname' => 'yatri_search_widget',
                'description' => esc_html__('Yatri Search', 'yatri'),
            );
            parent::__construct('yatri-search-widget', esc_html__('Yatri - Search', 'yatri'), $opts);
        }


        function widget_fields()
        {

            $fields = array(
                'enable_full_width' => array(
                    'name' => 'enable_full_width',
                    'title' => esc_html__('Enable full width', 'yatri'),
                    'type' => 'checkbox',
                ),
                'destination_placeholder_text' => array(
                    'name' => 'destination_placeholder_text',
                    'title' => esc_html__('Destination placeholder text', 'yatri'),
                    'type' => 'text',
                    'default' => esc_html__('Select Destination', 'yatri'),
                ), 'activity_placeholder_text' => array(
                    'name' => 'activity_placeholder_text',
                    'title' => esc_html__('Activity placeholder text', 'yatri'),
                    'type' => 'text',
                    'default' => esc_html__('Select Activity', 'yatri'),
                ),
                'search_keyword_placeholder_text' => array(
                    'name' => 'search_keyword_placeholder_text',
                    'title' => esc_html__('Search Keyword placeholder text', 'yatri'),
                    'type' => 'text',
                    'default' => esc_html__('Type your keyword here', 'yatri'),
                ),
                'search_button_text' => array(
                    'name' => 'search_button_text',
                    'title' => esc_html__('Search Button text', 'yatri'),
                    'type' => 'text',
                    'default' => esc_html__('Search', 'yatri'),
                ),
                'background_color' => array(
                    'name' => 'background_color',
                    'title' => esc_html__('Background Color', 'yatri'),
                    'type' => 'color',
                    'default' => '#ffffff',
                ),


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

            $background_color = ($valid_widget_instance['background_color']);

            $widget_class = 'yatri-search';

            if ($enable_full_width) {
                $widget_class .= ' mb-full-width';
            }

            echo $args['before_widget']; ?>


            <div class="<?php echo esc_attr($widget_class); ?>" <?php echo 'style="background:' . esc_attr($background_color) . '"' ?>>

                <div class="yatri-search-content">

                    <form action="<?php echo esc_url(home_url()); ?>">
                        <div class="yatri-search-row">
                            <?php
                            $destinations = $this->get_term_list(
                                array('taxonomy' => 'destination',
                                    'hide_empty' => false)
                            );
                            ?>
                            <select class="destination-select" name="destination">
                                <option value=""><?php echo esc_html($valid_widget_instance['destination_placeholder_text']) ?></option>
                                <?php foreach ($destinations as $destination) { ?>
                                    <option value="<?php echo isset($destination->term_id) ? absint($destination->term_id) : 0 ?>"><?php
                                        echo isset($destination->name) ? esc_html($destination->name) : '';
                                        echo isset($destination->count) ? ' (' . absint($destination->count) . ')' : '';

                                        ?></option>
                                <?php } ?>

                            </select>
                            <?php
                            $activities = $this->get_term_list(
                                array('taxonomy' => 'activity',
                                    'hide_empty' => false
                                )
                            );
                            ?>
                            <select class="activity-select" name="activity">

                                <option value=""><?php echo esc_html($valid_widget_instance['activity_placeholder_text']) ?></option>
                                <?php foreach ($activities as $activity) { ?>
                                    <option value="<?php echo isset($activity->term_id) ? absint($activity->term_id) : 0 ?>"><?php
                                        echo isset($activity->name) ? esc_html($activity->name) : '';
                                        echo isset($activity->count) ? ' (' . absint($activity->count) . ')' : '';
                                        ?></option>
                                <?php } ?>
                            </select>
                            <input type="hidden" name="post_type" value="tour"/>
                            <input type="text" name="s"
                                   placeholder="<?php echo esc_attr($valid_widget_instance['search_keyword_placeholder_text']) ?>"/>

                        </div>
                        <div class="yatri-search-row searh-row">
                            <input type="submit" value="<?php echo esc_attr($valid_widget_instance['search_button_text']) ?>"/>
                        </div>
                    </form>
                </div>


            </div><!-- .banner-widget -->

            <?php
            echo $args['after_widget'];

        }

        private function get_term_list($arguments = array())
        {
            $terms = get_terms($arguments);

            if (is_array($terms)) {

                return $terms;
            }
            return array();

        }

    }

endif;