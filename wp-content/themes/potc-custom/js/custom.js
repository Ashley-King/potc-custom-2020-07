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


})

