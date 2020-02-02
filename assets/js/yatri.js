(function ($) {

    var YatriThemeLib = {

        init: function () {
            this.bindEvents();
            this.initLib();
            this.initAccessibility();
            this.initOffCanvasMenu();
            this.initSearchForm();
            this.navigationMenu();
        },
        navigationMenu: function () {
            var $el = $('.yatri-section-menu');
            $el.each(function () {
                var subMenu = $(this).find("ul.sub-menu");
                subMenu.append();
                $('<i class="yatri-submenu-toggle fa fa-angle-down"/>').insertBefore(subMenu);
                /* var header = $(this).closest('.yatri-header-item');
                 if (header.length > 0) {
                     var height = header.height();
                 }*/

            });
            $('body').on('click', '.yatri-submenu-toggle', function () {
                if (!$(this).closest('li.menu-item').hasClass('yatri-menu-open')) {
                    $(this).closest('li.menu-item').addClass('yatri-menu-open');
                    $(this).closest('li.menu-item').removeClass('yatri-menu-close');

                } else {
                    $(this).closest('li.menu-item').addClass('yatri-menu-close');
                    $(this).closest('li.menu-item').removeClass('yatri-menu-open');
                }
            });

            $('body').on('click', '.yatri-responsive-toggle-menu', function () {
                var _that = $(this);
                if (!$(this).closest('.yatri-section-container').hasClass('yatri-toggle-section-open')) {
                    _that.closest('.yatri-section-container').addClass('yatri-toggle-section-open');
                    $(this).closest('.yatri-section-container').find('.yatri-section-inner').slideDown('slow', function () {

                        _that.removeClass('open');
                        _that.addClass('close');
                    });

                } else {

                    $(this).closest('.yatri-section-container').find('.yatri-section-inner').slideUp('slow', function () {
                        _that.closest('.yatri-section-container').removeClass('yatri-toggle-section-open');
                        _that.removeClass('close');
                        _that.addClass('open');

                    });

                }
            });
        },
        getPosition: function (el) {
            var xPos = 0;
            var yPos = 0;

            while (el) {
                if (el.tagName == "BODY") {
                    // deal with browser quirks with body/window/document and page scroll
                    var xScroll = el.scrollLeft || document.documentElement.scrollLeft;
                    var yScroll = el.scrollTop || document.documentElement.scrollTop;

                    xPos += (el.offsetLeft - xScroll + el.clientLeft);
                    yPos += (el.offsetTop - yScroll + el.clientTop);
                } else {
                    // for all other non-BODY elements
                    xPos += (el.offsetLeft - el.scrollLeft + el.clientLeft);
                    yPos += (el.offsetTop - el.scrollTop + el.clientTop);
                }

                el = el.offsetParent;
            }
            return {
                x: xPos,
                y: yPos
            };
        },
        getOffsetLeft: function (elem) {
            var offsetLeft = 0;
            do {
                if (!isNaN(elem.offsetLeft)) {
                    offsetLeft += elem.offsetLeft;
                }
            } while (elem = elem.offsetParent);
            return offsetLeft;
        },
        getOffset: function (element) {

            var calculated_offset = {};

            var offset = element.offset();

            calculated_offset.left = element.offset().left;

            calculated_offset.top = offset.top;

            var right = ($(window).width() - (element.offset().left + element.outerWidth()));

            calculated_offset.right = right;

            return calculated_offset;

        },

        initSearchForm: function () {
            var _that = this;
            var search_form = $('.yatri-section-search-form.form-type-default');
            $.each(search_form, function () {
                $(this).find('.search-form-main').removeClass('before-left').removeClass('before-right');
                var offset = _that.getOffset($(this).find('.yatri-search-icon'));
                var search_form = $(this).find('.search-form-main');
                var search_form_width = offset.left + search_form.width();
                var container = $(this).closest('.yat-container');
                var container_offset = _that.getOffset(container);

                if ((container_offset.left + container.width()) > (offset.left + search_form_width)) {
                    search_form.css({
                        'left': '0',
                        'right': 'unset'
                    });
                    $(this).find('.search-form-main').addClass('before-left');
                } else {
                    search_form.css({
                        'right': '0',
                        'left': 'unset'
                    });
                    $(this).find('.search-form-main').addClass('before-right');
                }

            });
            search_form.find('.search-main').click(function () {

                var wrap = $(this).closest('.yatri-section-search-form');
                wrap.find('.search-form-main').toggleClass('active-search');
                wrap.find('.search-form-main .search-field').focus();
            });
        },
        bindEvents: function () {
            var $this = this;
            $(window).on('resize', function () {
                var offcanvas_section = $('.yatri-section-offcanvas-menu');
                $.each(offcanvas_section, function () {
                    $this.initCanvasMenuOffset($(this));
                });
            });
            $(document).ready(function () {
                var offcanvas_section = $('.yatri-section-offcanvas-menu');
                $.each(offcanvas_section, function () {
                    $this.initCanvasMenuOffset($(this));
                });
            });
            $('.yatri-canvas-close').on('click', function () {
                $(this).closest('.yatri-section-offcanvas-menu').find('.yatri-toggle-wrap').trigger('click');
            });


        },
        initCanvasMenuOffset: function (offcanvas_section, is_toggle) {
            is_toggle = typeof is_toggle == "undefined" ? false : is_toggle;
            
            var container = offcanvas_section.closest('.yat-container');
            var offcanvas_menu_content = offcanvas_section.find('.yatri-offcanvas-menu-content');
            var offcanvas_menu_width = offcanvas_menu_content.width();
            var left = (offcanvas_menu_width + 100);
            var right = (offcanvas_menu_width + 100);
            var top = offcanvas_menu_content.offset().top;
            if (container.length > 0) {
                var container_left = container.offset().left;
                var container_right = ($(window).width() - (container.offset().left + container.outerWidth()));
                left = left + container_left;
                right = right + container_right;
            }
            top = 0 - top;
            if (offcanvas_section.closest('body').find('#wpadminbar').length > 0) {
                var admin_bar_height = offcanvas_section.closest('body').find('#wpadminbar').height();
                top = top + admin_bar_height;
            }
            var css = {};
            if (!is_toggle) {
                css.top = top + 'px';
            }
            if (offcanvas_section.find('.yatri-offcanvas-menu-content.left').length > 0) {
                css.left = -left + 'px'
            } else {
                css.right = -right + 'px'
            }
            offcanvas_section.find('.yatri-offcanvas-menu-content').css(css);
        },
        initOffCanvasMenu: function () {
            var _that = this;
            var offcanvas_section = $('.yatri-section-offcanvas-menu');
            offcanvas_section.find('.yatri-toggle-wrap').click(function () {
                var container = $(this).closest('.yat-container');
                var offcanvas_menu_content = $(this).closest('.yatri-section-offcanvas-menu').find('.yatri-offcanvas-menu-content');
                var offcanvas_menu_width = offcanvas_menu_content.width();
                var left = 0;
                var right = 0;
                if (container.length > 0) {
                    var container_left = container.offset().left;
                    var container_right = ($(window).width() - (container.offset().left + container.outerWidth()));
                    left = left - container_left;
                    right = right - container_right;
                }


                var css = {};
                if ($(this).closest('.yatri-section-offcanvas-menu').hasClass('show-nav')) {
                    _that.initCanvasMenuOffset($(this).closest('.yatri-section-offcanvas-menu'), true);
                    $(this).closest('.yatri-section-offcanvas-menu').removeClass('show-nav');
                    $(this).closest('.yatri-section-offcanvas-menu').find('.toggle-icon').addClass('fa-bars').removeClass('fa-times');


                } else {
                    $(this).closest('.yatri-section-offcanvas-menu').addClass('show-nav');
                    $(this).closest('.yatri-section-offcanvas-menu').find('.toggle-icon').addClass('fa-times').removeClass('fa-bars');

                    if ($(this).closest('.yatri-section-offcanvas-menu').find('.yatri-offcanvas-menu-content.left').length > 0) {
                        css.left = left + 'px'
                    } else {
                        css.right = right + 'px'
                    }
                }
                offcanvas_menu_content.css(css);

            });
        },
        initLib: function () {

            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                navText: [
                    "<i class='fa fa-angle-left'></i>",
                    "<i class='fa fa-angle-right'></i>"
                ],
                autoplay: true,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 1
                    }
                }
            })

        },
        initAccessibility: function () {
            var main_menu_container = $('.main-navigation #primary-menu');
            main_menu_container.find('li.menu-item').focusin(function () {
                if (!$(this).hasClass('focus')) {
                    $(this).addClass('focus');
                }
            });
            main_menu_container.find('li.menu-item').focusout(function () {
                $(this).removeClass('focus');

            });
        }
    };
    YatriThemeLib.init();


})(jQuery);