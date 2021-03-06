<?php
/**
 * The search template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @since 1.0.0
 */


get_header();

/**
 * Prints Title and breadcrumbs for archive pages
 * @since 1.0.0
 */
do_action('yatri_before_main_content');

?>
    <section class="wrapper block-grid site-content <?php echo esc_attr(yatri_get_option('blog_archive_page_meta_style'))?>" id="main-content">
        <div class="yat-container">
            <div class="yat-row">
                <?php

                do_action('yatri_before_main_wrap');

                do_action('yatri_content_loop');

                do_action('yatri_after_main_wrap');

                ?>
            </div>
        </div>
    </section>
<?php
do_action('yatri_after_main_content');

get_footer();