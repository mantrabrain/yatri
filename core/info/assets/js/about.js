jQuery(document).ready(function ($) {

    var at_document = $(document);

    $('.yatri-install-all-plugins').click(function (e) {
        e.preventDefault();

        $(this).addClass('updating-message');
        $(this).text(yatri_about_obj.button_text);

        $.ajax({
            type: "POST",
            url: ajaxurl,
            data: {
                action: yatri_about_obj.starter_site_install_action,
                security: yatri_about_obj.nonce,
                request: 1
            },
            success: function (response) {

                if (typeof response.redirect != "undefined") {

                    window.location.href = response.redirect;
                } else {
                    window.location.href = yatri_about_obj.redirect;
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError);
            }
        });
    });

});
