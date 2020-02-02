(function ($, api, _) {

    var yatriCustomizerPreview = {

        loadStyle: function () {


            var yatriCustomizerChanges = JSON.parse(window.localStorage.getItem("yatriCustomizerChanges"));

            var id = yatriCustomizerChanges.field_id;

            var style_node_id = 'yatri_dynamic_css_for_' + id;

            var style_node = $('<style type="text/css" id="' + style_node_id + '"/>');

            $('#' + style_node_id).remove();


            var css_code = yatriCustomizerChanges.css_code;
            css_code += yatriCustomizerChanges.additional_css;

            style_node.append(css_code);
            style_node.insertAfter('.yatri-dynamic-css');

            //$('body').find(yatriCustomizerChanges.selector).attr('style', yatriCustomizerChanges.css_property)


        }
    };

    var design_styling = [
        "body_and_paragraph_typography",
        "h1_typography",
        "h2_typography",
        "h3_typography",
        "h4_typography",
        "h5_typography",
        "h6_typography",
        "widget_title_typography",

        "main_layout_boxed_styling",
        "main_layout_full_width_styling",
        "yatri_button_style_design",
        "yatri_form_style_design",
        "yatri_breadcrumb_style_design",
        "top_header_design",
        "top_header_navigation_menu_design",
        "top_header_button_style_design",
        "top_header_search_form_design",
        "top_header_office_info_design",
        "top_header_social_icons_design",
        "top_header_offcanvas_menu_design",
        "top_header_branding_style_design",
        "top_header_custom_html_design",

        "mid_header_design",
        "mid_header_navigation_menu_design",
        "mid_header_button_style_design",
        "mid_header_search_form_design",
        "mid_header_office_info_design",
        "mid_header_social_icons_design",
        "mid_header_offcanvas_menu_design",
        "mid_header_branding_style_design",
        "mid_header_custom_html_design",

        "bottom_header_design",
        "bottom_header_navigation_menu_design",
        "bottom_header_button_style_design",
        "bottom_header_search_form_design",
        "bottom_header_office_info_design",
        "bottom_header_social_icons_design",
        "bottom_header_offcanvas_menu_design",
        "bottom_header_branding_style_design",
        "bottom_header_custom_html_design",

        "blog_archive_design_style",
        "blog_archive_page_content_wrapper_design_styling",
        "blog_archive_page_article_design_styling",
        "blog_archive_page_readmore_design_styling",
        "blog_archive_pagination_design_style",

        "single_post_design_style",
        "single_post_article_design_styling",

        "page_design_style",
        "page_article_design_styling",

        "left_sidebar_design_style",
        "right_sidebar_design_style",

        "footer_widgets_section_design_style",
        "footer_widgets_area_design_style",

        "bottom_footer_section_design_style",
        "bottom_footer_navigation_menu_design",
        "bottom_footer_button_style_design",
        "bottom_footer_office_info_design",
        "bottom_footer_social_icons_design",
        "bottom_footer_custom_html_design",
        "bottom_footer_copyright_design",

    ];

    design_styling.forEach(function (id, index, array) {
        var control_id = 'yatri_theme_options[' + id + ']';
        api(control_id, function (value, node) {
            value.bind(function (to) {
                yatriCustomizerPreview.loadStyle();

            });
        });
    });


}(jQuery, wp.customize, _));