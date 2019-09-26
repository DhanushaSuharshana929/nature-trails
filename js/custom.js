jQuery(document).ready(function() {
    'use strict';
	
	var $container = jQuery('#gallery');
	var $newslist = jQuery('#newslist');
	var $isotope = jQuery('#isotope');
	
    jQuery(".page-title").each(function() {
        s = jQuery(this).find("i");
    });

    function init() {
        // - - - - - - - - - -
        jQuery('.sr-item').each(function() {
            jQuery(this).find("img").css("width", "100%");
            jQuery(this).find("img").css("height", "auto");
            jQuery(this).find("img").on('load', function() {
                var w = jQuery(this).css("width");
                var h = jQuery(this).css("height");
                var w = parseInt(w, 10) - 20;
                var h = parseInt(h, 10) - 18;
            }).each(function() {
                if (this.complete) jQuery(this).load();
            });
        });
        // - - - - - - - - - -
        jQuery(".sr-item").on("mouseenter", function() {
            var w = jQuery(this).find("img").css("width");
            var h = jQuery(this).find("img").css("height");
            var w = parseInt(w, 10) - 20;
            var h = parseInt(h, 10) - 18;
            jQuery(this).find(".overlay").css("width", w);
            jQuery(this).find(".overlay").css("height", h);
            jQuery(this).find(".overlay").stop().fadeTo(300,
                1);
            jQuery(this).find("h3").addClass("hover");
            desc = jQuery(this).attr("data-desc");
            jQuery("#services-desc .text").hide();
            jQuery(desc).fadeTo(300, 1);
        }).on("mouseleave", function() {
            jQuery(this).find(".overlay").stop().fadeTo(300,
                0);
            jQuery(this).find("h3").removeClass("hover");
        })
    };
    init();
    // booking form
    $("#r_room").on('change', function() {
        $("img[id=image-swap]").attr("src", $(this).val());
    });
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =
    // paralax background
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =
    var $window = jQuery(window);
    jQuery('section[data-type="background"]').each(function() {
        "use strict";
        var $bgobj = jQuery(this); // assigning the object
        jQuery(window).scroll(function() {
            "use strict";
            var yPos = -($window.scrollTop() / $bgobj.data(
                'speed'));
            var coords = '50% ' + yPos + 'px';
            $bgobj.css({
                backgroundPosition: coords
            });
        });
    });
    document.createElement("article");
    document.createElement("section");
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = 
    // date picker settings
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = 
    var nowTemp = new Date();
    var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(),
        nowTemp.getDate(), 0, 0, 0, 0);
    var checkin = $('#r_checkin').datepicker({
        onRender: function(date) {
            return date.valueOf() < now.valueOf() ?
                'disabled' : '';
        }
    }).on('changeDate', function(ev) {
        if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
        }
        checkin.hide();
        $('#r_checkout')[0].focus();
    }).data('datepicker');
    var checkout = $('#r_checkout').datepicker({
        onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ?
                'disabled' : '';
        }
    }).on('changeDate', function(ev) {
        checkout.hide();
    }).data('datepicker');
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =
    // sticky header
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =
    function exo_sticky() {
        var $header = jQuery("header"),
            wd = 65;
        $header.css("top", wd);
        jQuery(window).scroll(function() {
            if (!jQuery('body').hasClass('no-header')) {
                if ($(this).width() >= 992) {
                    if (jQuery(this).scrollTop() > wd) {
                        $header.addClass("fixed");
                        if (!$('body').hasClass('boxed-style')) {
                            $('#subheader').addClass("scroll");
                            $('#carousel-banner').addClass("scroll");
                            $('.section-top').addClass("scroll");
                            $('#logo').addClass("inner-2");
                        }
                    } else {
                        $header.removeClass("fixed");
                        if (!$('body').hasClass('boxed-style')) {
                            $('#subheader').removeClass("scroll");
                            $('#carousel-banner').removeClass("scroll");
                            $('.section-top').removeClass("scroll");
                            $('#logo').removeClass("inner-2");
                        }
                    }
                } else {
                    $header.removeClass("fixed");
                }
            }
        });
    }
    exo_sticky();
    
    
    /* --------------------------------------------------
     * custom background
     * --------------------------------------------------*/
    function custom_bg() {
        $("div,section").css('background-color', function() {
            return jQuery(this).data('bgcolor');
        });
        $("div,section").css('background-image', function() {
            return jQuery(this).data('bgimage');
        });
        $("div,section").css('background-size', function() {
            return 'cover';
        });
    }
    custom_bg();
    // owl carousel = = = = = = = = = =		
    jQuery("#room-carousel").owlCarousel({
        items: 1,
        singleItem: true,
        pagination: false,
        navigation: false,
        autoPlay: false,
    });
    jQuery(".single-carousel-no-controls").owlCarousel({
        items: 1,
        singleItem: true,
        pagination: false,
        navigation: false,
        autoPlay: true,
    });
    jQuery("#carousel-banner").owlCarousel({
        items: 1,
        singleItem: true,
        pagination: false,
        navigation: false,
        autoPlay: true,
        mouseDrag: false,
        transitionStyle: "fade"

    });
    jQuery("#carousel-content").owlCarousel({
        items: 1,
        singleItem: true,
        pagination: false,
        navigation: false,
        autoPlay: false,
    });
    jQuery(".lt-carousel").owlCarousel({
        items: 1,
        singleItem: true,
        pagination: false,
        navigation: false,
        autoPlay: true,
        transitionStyle: "backSlide"
    });


    var owl = $("#room-carousel");
    $(".owl-cst-prev").on("click", function() {
        owl.trigger('owl.prev');
    })
    $(".owl-cst-next").on("click", function() {
        owl.trigger('owl.next');
    })
    jQuery("#services-carousel").owlCarousel({
        items: 4,
        pagination: false,
        navigation: false,
    });
    jQuery(".carousel-one").owlCarousel({
        items: 1,
        pagination: false,
        navigation: false,
    });
    jQuery(".carousel-two").owlCarousel({
        items: 2,
        pagination: false,
        navigation: false,
    });
    jQuery(".carousel-three").owlCarousel({
        items: 3,
        pagination: false,
        navigation: false,
    });
    jQuery(".carousel-3-plain").owlCarousel({
        items: 3,
        pagination: false,
        navigation: false,
    });
    jQuery(".facilities_carousel").owlCarousel({
        singleItem: true,
        pagination: false,
        navigation: false,
    });
    jQuery(".list-quotes").owlCarousel({
        items: 1,
        singleItem: true,
        pagination: true,
        navigation: false,
        autoPlay: true,
        transitionStyle: "goDown"
    });
    jQuery(".client-quotes").owlCarousel({
        items: 1,
        singleItem: true,
        pagination: true,
        navigation: false,
        autoPlay: true,
        mouseDrag: false,
        transitionStyle: "fade"
    });
    jQuery(".blog-slider").owlCarousel({
        items: 1,
        singleItem: true,
        pagination: false,
        navigation: false,
        autoPlay: true,
        transitionStyle: "goDown"
    });
    jQuery(".intro-text").owlCarousel({
        items: 1,
        singleItem: true,
        pagination: false,
        navigation: false,
        autoPlay: 3000,
        mouseDrag: false,
        touchDrag: false,
        stopOnHover: false,
        transitionStyle: "fade"
    });
    jQuery(".gallery-carousel").owlCarousel({
        items: 4,
        pagination: false,
        navigation: false,
        autoPlay: true,
    });
    jQuery(".gallery-carousel-2-cols").owlCarousel({
        items: 2,
        pagination: false,
        navigation: false,
        autoPlay: false,
    });
    jQuery("#packages").owlCarousel({
        items: 4,
        pagination: false,
        navigation: false,
        autoPlay: true,
    });
    jQuery(".blog-carousel").owlCarousel({
        items: 5,
        pagination: false,
        navigation: false,
        autoPlay: true,
    });
    jQuery(".menu-carousel").owlCarousel({
        items: 4,
        pagination: false,
        navigation: false,
        autoPlay: true,
    });

    var sync1 = $(".room-pic-slider");
    var sync2 = $(".room-carousel-nav");


    sync1.owlCarousel({
        items: 1,
        singleItem: true,
        pagination: false,
        navigation: false,
        autoPlay: false,
    });

    sync2.owlCarousel({
        items: 3,
        pagination: false,
        navigation: false,
        autoPlay: true,
    });


    sync2.on("click", ".owl-item", function(e) {
        e.preventDefault();
        var number = $(this).index();
        sync1.trigger('owl.goTo', number);

    });

    jQuery('.owl-custom-nav').each(function() {
        var owl = $('.owl-custom-nav').prev();
        var ow = parseInt(owl.css("height"), 10);

        owl.owlCarousel();

        // Custom Navigation Events
        $(".btn-next").on("click", function() {
            owl.trigger('owl.next');
        });
        $(".btn-prev").on("click", function() {
            owl.trigger('owl.prev');
        });
    });


    var $w_height = jQuery(window).height();
    jQuery(".team-list img").fadeTo(0, .25);
    jQuery(".team-list").on("mouseenter", function() {
        jQuery(this).find(".text").fadeTo(150, 1);
        jQuery(this).find("img").animate({
            'border-width': '12px',
            "opacity": "1"
        }, '200');
    }).on("mouseleave", function() {
        jQuery(this).find(".text").fadeTo(150, 0);
        jQuery(this).find("img").animate({
            'border-width': '0px',
            "opacity": ".25"
        }, '200');
    })
    jQuery("#content").fitVids();
    jQuery(".blog-carousel li").fadeTo(0, .5);
    jQuery(".blog-carousel li").on("mouseenter", function() {
        jQuery(this).fadeTo(150, 1);
    }).on("mouseleave", function() {
        jQuery(this).fadeTo(150, .5);
    })

    jQuery(window).on("resize", function() {
		//alert('yes');
		$container.isotope('reLayout');
		$newslist.isotope('reLayout');
		$isotope.isotope('reLayout');
		
        exo_sticky();
        // adjust menu on resize
        var w = jQuery(this).height();
        w = parseInt(w, 10) - 80;
        jQuery('#homepage header').css("top", w);
		
		
		

		/*
        var mq = jQuery(window).matchMedia("(min-width: 992px)");
        var mx = jQuery(window).matchMedia("(max-width: 992px)");
        if (mq.matches) {
            jQuery("#mainmenu").css("height","auto");
        }
        if (mx.matches) {
            if (mb == 1) {
                jQuery('#mainmenu').show();
            } else if (mb == 0) {
                jQuery('#mainmenu').hide();
            }
        }
		*/
		
    });
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =
    // tabs
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =
    jQuery('.ex_tab').find('.ex_tab_content div').hide();
    jQuery('.ex_tab').find('.ex_tab_content div:first').show();
    jQuery('.ex_nav li').on("click", function() {
        "use strict";
        jQuery(this).parent().find('li span').removeClass(
            "active");
        jQuery(this).find('span').addClass("active");
        jQuery(this).parent().parent().find(
            '.ex_tab_content div').hide();
        var indexer = jQuery(this).index(); //gets the current index of (this) which is #nav li
        jQuery(this).parent().parent().find(
            '.ex_tab_content div:eq(' + indexer + ')').fadeIn(); //uses whatever index the link has to open the corresponding box 
    });
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =
    // magnific popup
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =
    // magnific popup init

    jQuery('.zoom-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        closeOnContentClick: false,
        closeBtnInside: false,
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        image: {
            verticalFit: true,
            titleSrc: function(item) {
                //return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
                return item.el.attr('title');
            }
        },
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,
            duration: 300, // don't foget to change the duration also in CSS
            opener: function(element) {
                return element.find('img');
            }
        }

    });

    jQuery('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

    $('.gallery-item').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image',
        mainClass: 'mfp-fade'
        // other options
    });

    $('.image-popup-vertical-fit').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-img-mobile',
        image: {
            verticalFit: true
        }

    });

    $('.image-popup-fit-width').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        image: {
            verticalFit: false
        }
    });

    $('.image-popup-no-margins').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        closeBtnInside: false,
        fixedContentPos: true,
        mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
        image: {
            verticalFit: true
        },
        zoom: {
            enabled: true,
            duration: 300 // don't foget to change the duration also in CSS
        }
    });

    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =
    // scroll to top
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =
    jQuery().UItoTop({
        easingType: 'easeOutQuart'
    });
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =
    // gallery hover
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =
    jQuery('.overlay').fadeTo(1, 0);
    jQuery(".gallery-item").on("mouseenter", function() {
        var ov = jQuery(this).find(".overlay");
        ov.width(jQuery(this).find(
            "img").css("width"));
        ov.height(jQuery(this).find(
            "img").css("height"));
        ov.stop().fadeTo(300, .95);

        var picheight = jQuery(this).find("img").css("height");
        var newheight = (picheight.substring(0, picheight.length -
            2) / 2) - 16;
        //alert(newheight);
        jQuery(this).find("p").animate({
            'margin-top': newheight
        }, 'fast');
    }).on("mouseleave", function() {
        jQuery(this).parent().find(".info-area").animate({
            'margin-top': '10%'
        }, 'fast');
        jQuery(this).parent().find(".overlay").stop().fadeTo(
            300, 0);
    })
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =
    // gallery hover
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =
    jQuery('.overlay').fadeTo(1, 0);
    jQuery(".item").on("mouseenter", function() {
        jQuery(this).find(".overlay").width(jQuery(this).find(
            "img").css("width"));
        jQuery(this).find(".overlay").height(jQuery(this).find(
            "img").css("height"));
        jQuery(this).find(".overlay").stop().fadeTo(100, .9);
        var picheight = jQuery(this).find("img").css("height");
        var newheight = (picheight.substring(0, picheight.length -
            2) / 2) - 56;
        //alert(newheight);
        jQuery(this).find(".inner").stop().animate({
            'margin-top': newheight
        }, 'fast');
    }).on("mouseleave", function() {
        jQuery(this).parent().find(".inner").stop().animate({
            'margin-top': '10%'
        }, 'fast');
        jQuery(this).parent().find(".overlay").stop().fadeTo(
            100, 0);
    })
    // ajax gallery

    function close_menu() {
        jQuery('.btn-close-x').on("click", function() {
            "use strict";
            jQuery("#divPage").slideUp(500, function() {
                jQuery('html, body').animate({
                    scrollTop: jQuery(
                            '#page-menu').offset()
                        .top - 78
                }, 500, 'easeInOutQuint');
            });
            return false;
        });
    }
    jQuery('.icon-plus').on("click", function() {
        "use strict";
        jQuery('#divPage').load(this.getAttribute('data-name'),
            function() {
                jQuery("#divPage").slideDown(500, function() {
                    jQuery('html, body').animate({
                            scrollTop: jQuery(
                                    '#divPage')
                                .offset().top -
                                78
                        }, 500,
                        'easeInOutQuint');
                    return false;
                });
                close_menu();
            });
    });
    // team hover
    jQuery(".team .picframe").on("mouseenter", function() {
        "use strict";
        jQuery(this).parent().find(".overlay").width(jQuery(
            this).find("img.team-pic").css("width"));
        jQuery(this).parent().find(".overlay").height(jQuery(
            this).find("img.team-pic").css("height"));
        jQuery(this).parent().find(".overlay").fadeTo(150, 1);
        picheight = jQuery(this).find("img.team-pic").css(
            "height");
        newheight = (picheight.substring(0, picheight.length -
            2) / 2) - 24;
        //alert(newheight);
        jQuery(this).parent().find(".sb-icons").animate({
            'margin-top': newheight
        }, 'fast');
    }).on("mouseleave", function() {
        "use strict";
        jQuery(this).parent().find(".sb-icons").animate({
            'margin-top': '10%'
        }, 'fast');
        jQuery(this).parent().find(".overlay").fadeTo(150, 0);
    })
    jQuery(window).load(function() {
        //$('body').jpreLoader();
        var v_url = document.URL;

        $.stellar({
            horizontalScrolling: false,
            verticalOffset: 0
        });
		
		// wow jquery
		new WOW().init();
		
		jQuery('#preloader').delay(500).fadeOut(500);
		
        // --------------------------------------------------
        // filtering gallery
        // --------------------------------------------------
		
			$container.isotope({
				itemSelector: '.item',
				filter: '*',
			});
		

        
        $newslist.isotope({
            itemSelector: '.news-item',
            filter: '*',
        });

        
        $isotope.isotope({
            itemSelector: '.item',
            filter: '*',
        });

        jQuery('#filters a').on("click", function() {
            var $this = jQuery(this);
            if ($this.hasClass('selected')) {
                return false;
            }
            var $optionSet = $this.parents();
            $optionSet.find('.selected').removeClass(
                'selected');
            $this.addClass('selected');
            var selector = jQuery(this).attr(
                'data-filter');
            $container.isotope({
                filter: selector,
            });
            return false;
        });

        jQuery('#cs-btn').on("click", function() {
            jQuery('#coming-soon-content').fadeTo(300, 1);
            jQuery('#coming-soon-content').addClass("cs-show");
            jQuery('#section-coming-soon-intro').addClass("cs-show");
        });

        jQuery('.btn-close').on("click", function() {
            jQuery('#coming-soon-content').fadeTo(300, 0);
            jQuery('#coming-soon-content').removeClass("cs-show");
            jQuery('#section-coming-soon-intro').removeClass("cs-show");
        });

        // lt scroll begin
        if (v_url.indexOf('#') != -1) {
            var v_hash = v_url.substring(v_url.indexOf("#") + 1);
            jQuery('html, body').animate({
                scrollTop: jQuery('#' + v_hash).offset()
                    .top - 78
            }, 200);
            return false;
        }
        // lt scroll close

        // stellar plugin

    });
	
	
    jQuery('.next-slider').on("click", function() {
        jQuery('.flexslider.pf-carousel').flexslider("next");
    });
    jQuery('.prev-slider').on("click", function() {
        jQuery('.flexslider.pf-carousel').flexslider("prev");
    });
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =
    // room loader
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =
    jQuery('.lt-btn').on("click", function() {
        jQuery('.page-overlay').fadeIn(100);
        jQuery('#room-preview').hide();
        rm = jQuery(this).attr('data-value');
        jQuery('.lt-btn').removeClass('clicked');
        jQuery(this).addClass('clicked');
        jQuery("#room-preview .load-here").load(rm, function() {
            jQuery('.page-overlay').stop().fadeOut(400);
            jQuery("#room-preview").stop().slideDown(
                500,
                function() {
                    jQuery('html, body').animate({
                        scrollTop: jQuery(
                                '#room-preview'
                            ).offset().top -
                            240
                    }, 500, 'easeOutCirc');
                });
        });
    });


    var mb = 0;


    jQuery('#menu-btn').on("click", function() {
        if (mb == 0) {
			jQuery('#mainmenu').css('height','100%');
			var h = jQuery('#mainmenu').height();
			jQuery('#mainmenu').css('height','0');

			$("#mainmenu").animate({
				height: h
			  }, {
				duration: 500,
				complete: function () {
				  jQuery('#mainmenu').css('height','100%');
				}
			  });
	  
            mb = 1;
        } else {
            jQuery('#mainmenu').stop().animate({
            'height': '0px'
        }, '500');
            mb = 0;
        }
    })
    // one page navigation

    jQuery("#homepage nav a").click(function(evn) {
        if (this.href.indexOf('#') != -1) {
            evn.preventDefault();
            jQuery('html,body').scrollTo(this.hash, this.hash);
        }
    });


    var aChildren = jQuery("nav li").children(); // find the a children of the list items
    var aArray = []; // create the empty aArray
    for (var i = 0; i < aChildren.length; i++) {
        var aChild = aChildren[i];
        var ahref = jQuery(aChild).attr('href');
        aArray.push(ahref);
    } // this for loop fills the aArray with attribute href values

    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =
    // scroll navigation
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =
    jQuery(
        '#mainmenu a[href^="#"], .btn-big, .room-description .btn-custom-x'
    ).on('click', function(e) {
        e.preventDefault();
        var target = this.hash,
            $target = jQuery(target);
        jQuery('html, body').stop().animate({
            'scrollTop': $target.offset().top - 79 // - 200px (nav-height)
        }, 800, 'easeInOutExpo', function() {
            window.location.hash = '1' + target;
        });
    });

    jQuery(document).scroll(function() {
        jQuery('nav li a').each(function() {
            if (this.href.indexOf('#') != -1) {
                var href = jQuery(this).attr('href');
                if (location.hash !== "") {
                    if (jQuery(window).scrollTop() > jQuery(
                            href).offset().top - 140) {
                        jQuery('nav li a').removeClass(
                            'active');
                        jQuery(this).addClass('active');
                    }
                }
            }
        });
    });
});

$(function() {
    var Accordion = function(el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;

        // Variables privadas
        var links = this.el.find('.et-link');
        // Evento
        links.on('click', {
            el: this.el,
            multiple: this.multiple
        }, this.dropdown)
    }

    Accordion.prototype.dropdown = function(e) {
        var $el = e.data.el;
        $this = $(this),
            $next = $this.next();

        $next.slideToggle();
        $this.parent().toggleClass('et-open');

        if (!e.data.multiple) {
            $el.find('.et-submenu').not($next).slideUp().parent().removeClass('et-open');
        };
    }

    var accordion = new Accordion($('#et-accordion'), false);
	
    jQuery('.small-border span').addClass('wow');
    jQuery('.small-border span').addClass('zoomIn');
    jQuery('.small-border span').attr('data-wow-delay', '.2s');
});