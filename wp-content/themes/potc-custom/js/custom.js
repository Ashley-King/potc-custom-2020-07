jQuery(document).ready(function($){
   
    

    //show/hide mobile button
    if($(window).width() < 992){
        $('.nav__wrapper--mobile-button').addClass('show-flex');
        $('.nav__wrapper--main .main-menu-container').addClass('hide');
    }else{
        $('.nav__wrapper--mobile-button').removeClass('show-flex');
        $('.nav__wrapper--main .main-menu-container').removeClass('hide');
    }

    $(window).resize(function(){
        if($(window).width() < 992){
            $('.nav__wrapper--mobile-button').addClass('show-flex');
            $('.nav__wrapper--main .main-menu-container').addClass('hide');
        }else{
            $('.nav__wrapper--mobile-button').removeClass('show-flex');
            $('.nav__wrapper--main .main-menu-container').removeClass('hide');
        }
    });

    //show/hide mobile nav
    $('.nav__wrapper--mobile-button').click(function(){
        $(this).toggleClass('nav-open');
        $('.nav__mobile__background').toggleClass('show-nav-bg');
        $('.nav__wrapper--mobile').toggleClass('show-mobile-nav')
    })

    /**
     * control bg of header on scroll
     */
    $('body').on("scroll", function() {
        
        if($('body').scrollTop() > 20) {
            $(".site-header").addClass("header-scroll");
            
        } else {
            //remove the background property so it comes transparent again (defined in your css)
           $(".site-header").removeClass("header-scroll");
        }
        
    });

})

