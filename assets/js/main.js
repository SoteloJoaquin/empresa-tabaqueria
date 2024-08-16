/*===============================================================================================================
                                                TABLE OF CONTENT

  01. PRELOADER LOADING 
  02. HEADER STICKY
  03. MOBILE MENU
  04. SLICK SLIDESHOW

=================================================================================================================*/

(function ($) {
	// Start of use strict
	'use strict';
    
/*===============================================================================================================
                                               1. PRELOADER LOADING 
=================================================================================================================*/
    function preloader() {
        $('#preloader').delay(500).fadeOut(500);
    }
	preloader();
    
/*===============================================================================================================
                                               2. HEADER STICKY 
=================================================================================================================*/
	function sticky_header(){
		if ($("#header").hasClass("header-fixed")) {
            var nav = $(".header");
            if (nav.length) {
                var offsetTop = nav.offset().top,
                    headerHeight = nav.height(),
                    injectSpace = $("<div />", { height: headerHeight }).insertAfter(nav);
                injectSpace.hide();
                $(window).on("load scroll", function () {
                    if ($(window).scrollTop() > offsetTop) {
                        nav.addClass("is-fixed");
                        injectSpace.show();
                    } else {
                        nav.removeClass("is-fixed");
                        injectSpace.hide();
                    }
                    if ($(window).scrollTop() > 350) {
                        nav.addClass("is-small animated fadeIn");
                    } else {
                        nav.removeClass("is-small animated fadeIn");
                    }
                });
            }
        }
	}
    sticky_header();
	
/*===============================================================================================================
                                               3. MOBILE MENU 
=================================================================================================================*/
	var selectors = {
      	body: 'body',
      	sitenav: '#siteNav',
      	navLinks: '#siteNav .lvl1 > a',
      	menuToggle: '.js-mobile-nav-toggle',
      	mobilenav: '.mobile-nav-wrapper',
      	menuLinks: '#MobileNav .cps',
      	closemenu: '.closemobileMenu'
	};
     
  	$(selectors.navLinks).each(function(){
        if($(this).attr('href') == window.location.pathname) $(this).addClass('active');
    })
	
  	$(selectors.menuToggle).on("click",function(){
      body: 'body',
      $(selectors.mobilenav).toggleClass("active");
      $(selectors.body).toggleClass("menuOn");
      $(selectors.menuToggle).toggleClass('mobile-nav--open mobile-nav--close');
    });
  
    $(selectors.closemenu).on("click",function(){
      body: 'body',
      $(selectors.mobilenav).toggleClass("active");
      $(selectors.body).toggleClass("menuOn");
      $(selectors.menuToggle).toggleClass('mobile-nav--open mobile-nav--close');
    });
    $("body").on('click', function (event) {
      var $target = $(event.target);
      if(!$target.parents().is(selectors.mobilenav) && !$target.parents().is(selectors.menuToggle) && !$target.is(selectors.menuToggle)){
          $(selectors.mobilenav).removeClass("active");
          $(selectors.body).removeClass("menuOn");
          $(selectors.menuToggle).removeClass('mobile-nav--close').addClass('mobile-nav--open');
      }
    });
	$(selectors.menuLinks).on('click', function(e) {
		e.preventDefault();
		$(this).toggleClass('cp-plus cp-minus');
		$(this).parent().next().slideToggle();
    });
	
/*===============================================================================================================
                                               4. SLICK SLIDESHOW 
=================================================================================================================*/
    /* Homepage Slideshow */
    function home_slider(){
        $('.home-slideshow').slick({
          dots: true,
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          fade: true,
          arrows: true,
          autoplay: true,
          autoplaySpeed: 6000,
          lazyLoad: 'ondemand'
        });
    }
    home_slider();
	  
	  /* Logo Slider */
	   function logo_slider(){
		$('.logo-bar').slick({
			dots: false,
			infinite: true,
			slidesToShow: 6,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 4000,
			arrows: true,
			responsive: [
			{
			  breakpoint: 1024,
			  settings: {
				slidesToShow: 4,
				slidesToScroll: 1
			  }
			},
			{
			  breakpoint: 768,
			  settings: {
				slidesToShow: 3,
				slidesToScroll: 1
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			  }
			}
			]
		});
	}
    logo_slider();

})(jQuery);
