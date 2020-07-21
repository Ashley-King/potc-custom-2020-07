jQuery(document).ready(function($){
   
    /**
     * control bg of header on scroll
     */
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 50) {
            $(".site-header").addClass("header-scroll");
            
        } else {
            //remove the background property so it comes transparent again (defined in your css)
           $(".site-header").removeClass("header-scroll");
        }
    });
    if($(window).width() < 992){
        $('.nav__wrapper--mobile-button').addClass('show-flex');
        $('.nav__wrapper--main .main-menu-container').addClass('hide');
    }else{
        $('.nav__wrapper--mobile-button').removeClass('show-flex');
        $('.nav__wrapper--main .main-menu-container').removeClass('hide');
    }

})

