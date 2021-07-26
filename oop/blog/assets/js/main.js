 
$(document).ready(function(){
    // fixed navbar
        $(document).on('scroll', function() {
            var scrollPos = $(this).scrollTop();
    
            if( scrollPos > 10 ) {
                $(".header").addClass("menu_fixed");
            }
    
            else {
                $(".header").removeClass("menu_fixed");
            }
        });
        // fixed navber end

        // banner slider star
     $('.banner_slider_active').owlCarousel({
        loop:true,
        nav: true,
        
        dotsEach: false,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        responsiveClass:true,
        autoplay: true,
        autoplayTimeout: 7000,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:1,
            },
            1000:{
                items:1,
            }
        }
    });
        // banner slider end

        // blog post que
         $(".post_que_single_top").click(function(){
            $(this).toggleClass("pm").siblings().slideToggle(300);
          })
        // blog post que end

        // header search
        $(".menu_srch i").click(function(){
        $(".header_serch").toggleClass("dis_none");
         })

        
});


