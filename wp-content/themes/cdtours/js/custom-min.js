jQuery(document).ready(function(){function e(e){var s=jQuery(document).scrollTop();jQuery("nav.desktop_nav a").each(function(){var e=jQuery(this),o=jQuery(e.attr("href"));o.position().top<=s&&o.position().top+o.height()>s?(jQuery("nav.desktop_nav a").removeClass("nav_active"),e.addClass("nav_active")):e.removeClass("nav_active")})}jQuery("#mobileslides").slick({slidesToShow:1,slidesToScroll:1,arrows:!1,fade:!0,asNavFor:".slide_tabs.mobile"}),jQuery(".slide_tabs.mobile").slick({slidesToShow:4,slidesToScroll:1,asNavFor:"#mobileslides",dots:!0,focusOnSelect:!0,arrows:!1,responsive:[{breakpoint:800,settings:{slidesToShow:1,slidesToScroll:1}}]}),jQuery("#desktopslides").slick({slidesToShow:1,slidesToScroll:1,arrows:!1,fade:!0,asNavFor:".slide_tabs.desktop"}),jQuery(".slide_tabs.desktop").slick({slidesToShow:4,slidesToScroll:1,asNavFor:"#desktopslides",dots:!0,focusOnSelect:!0,arrows:!1,responsive:[{breakpoint:800,settings:{slidesToShow:1,slidesToScroll:1}}]}),jQuery(".mobile_nav_wrapper").click(function(){jQuery(".nav_wrap").slideToggle(200),jQuery(this).toggleClass("open"),jQuery("header").toggleClass("show")}),jQuery(".nav_wrap a").click(function(){jQuery(".nav_wrap").slideUp(200),jQuery(".mobile_nav_wrapper").removeClass("open"),jQuery("header").addClass("show")}),jQuery(window).resize(function(){Modernizr.mq("(max-width: 980px)")?jQuery("header").addClass("show"):jQuery("header").removeClass("show")}).resize(),jQuery(document).on("scroll",e),jQuery('a[href^="#"]').on("click",function(s){s.preventDefault(),jQuery(document).off("scroll"),jQuery("nav.desktop_nav a").each(function(){jQuery(this).removeClass("nav_active")}),jQuery(this).addClass("nav_active");var o=this.hash;$target=jQuery(o),jQuery("html, body").stop().animate({scrollTop:$target.offset().top+2},500,"swing",function(){window.location.hash=o,jQuery(document).on("scroll",e)})}),jQuery(".leavereview_wrapper").hide(),jQuery(".leaveareview").click(function(){jQuery(".form_wrapper").fadeOut(600),jQuery(".contact_right").css("height","600px"),jQuery(".leavereview_wrapper").delay(300).fadeIn(600)}),jQuery(".back").click(function(){jQuery(".leavereview_wrapper").fadeOut(600),jQuery(".form_wrapper").delay(300).fadeIn(600)})});