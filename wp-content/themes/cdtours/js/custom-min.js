jQuery(document).ready(function(){function e(e){var r=jQuery(document).scrollTop();jQuery("nav.desktop_nav a").each(function(){var e=jQuery(this),s=jQuery(e.attr("href"));s.position().top<=r&&s.position().top+s.height()>r?(jQuery("nav.desktop_nav a").removeClass("nav_active"),e.addClass("nav_active")):e.removeClass("nav_active")})}(new WOW).init(),jQuery(".new_slides_commercial").hide(),jQuery(".residential_button").addClass("new_slides_active"),jQuery(".commercial_button").click(function(){jQuery(".new_slides_commercial").fadeIn(400),jQuery(".new_slides_residential").fadeOut(400),jQuery(this).addClass("new_slides_active"),jQuery(".residential_button").removeClass("new_slides_active")}),jQuery(".residential_button").click(function(){jQuery(".new_slides_commercial").fadeOut(400),jQuery(".new_slides_residential").fadeIn(400),jQuery(this).addClass("new_slides_active"),jQuery(".commercial_button").removeClass("new_slides_active")}),jQuery(".threed_gallery_slideshow").slick({slidesToShow:1,slidesToScroll:1,arrows:!1,fade:!0,asNavFor:".gallery_tabs"}),jQuery(".gallery_tabs").slick({slidesToShow:4,slidesToScroll:2,asNavFor:".threed_gallery_slideshow",dots:!1,focusOnSelect:!0,arrows:!0,prevArrow:".gallery_prev",nextArrow:".gallery_next",responsive:[{breakpoint:800,settings:{slidesToShow:2,slidesToScroll:1,arrows:!1}}]}),jQuery(".mobile_nav_wrapper").click(function(){jQuery(".nav_wrap").slideToggle(200),jQuery(this).toggleClass("open"),jQuery("header").toggleClass("show")}),jQuery(".nav_wrap a").click(function(){jQuery(".nav_wrap").slideUp(200),jQuery(".mobile_nav_wrapper").removeClass("open"),jQuery("header").addClass("show")}),jQuery(window).resize(function(){Modernizr.mq("(max-width: 980px)")?jQuery("header").addClass("show"):jQuery("header").removeClass("show")}).resize(),jQuery(document).on("scroll",e),jQuery('a[href^="#"]').on("click",function(r){r.preventDefault(),jQuery(document).off("scroll"),jQuery("nav.desktop_nav a").each(function(){jQuery(this).removeClass("nav_active")}),jQuery(this).addClass("nav_active");var s=this.hash;$target=jQuery(s),jQuery("html, body").stop().animate({scrollTop:$target.offset().top+2},500,"swing",function(){window.location.hash=s,jQuery(document).on("scroll",e)})}),jQuery(".leavereview_wrapper").hide(),jQuery(".leaveareview").click(function(){jQuery(".form_wrapper").fadeOut(600),jQuery(".contact_right").css("height","512px"),jQuery(".leavereview_wrapper").delay(300).fadeIn(600)}),jQuery(".back, .contact_left h1 a").click(function(){jQuery(".leavereview_wrapper").fadeOut(600),jQuery(".form_wrapper").delay(300).fadeIn(600)}),jQuery(".industry_residential").addClass("control_active"),jQuery(".industry_controls span").click(function(){jQuery(this).addClass("control_active"),jQuery(".industry_controls span").not(this).removeClass("control_active")}),jQuery("span.industry_commercial").click(function(){jQuery(".residential_slider").addClass("myfadeout"),jQuery(".commercial_slider").removeClass("myfadeout")}),jQuery("span.industry_residential").click(function(){jQuery(".residential_slider").removeClass("myfadeout"),jQuery(".commercial_slider").addClass("myfadeout")}),jQuery(".residential_slider").slick({slidesToShow:1,slidesToScroll:1,arrows:!1,lazyLoad:"ondemand",dots:!0}),jQuery(".commercial_slider").slick({slidesToShow:1,slidesToScroll:1,arrows:!1,lazyLoad:"ondemand",dots:!0}),jQuery(".floor_plan_slider").slick({slidesToShow:1,slidesToScroll:1,arrows:!1,fade:!0,prevArrow:".floor_button_left",nextArrow:".floor_button_right",adaptiveHeight:!0})});