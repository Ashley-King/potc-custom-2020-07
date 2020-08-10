jQuery(document).ready(function($){
   
    //current logo
    $image = $('.nav__logo img').attr('src');

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
        if(!$('.nav__wrapper--main').hasClass('nav--transparent') && $('.nav__wrapper--mobile-button').hasClass('nav-open')){
            $('.nav__logo img').attr('src', '/wp-content/themes/potc-custom/images/logo-white.png') ;
            $('.nav__wrapper--main').css('border-bottom', 'none');
        }
        if(!$('.nav__wrapper--main').hasClass('nav--transparent') && !$('.nav__wrapper--mobile-button').hasClass('nav-open')){
            $('.nav__logo img').attr('src', $image) ;
            $('.nav__wrapper--main').css('border-bottom', '1px solid rgba(0, 0, 0, 0.1)');
        }

       
    }); 
  
    


    /**
     * control bg of header on scroll
     */
    
    $('body').on("scroll", function() {
        
        
        if($('body').scrollTop() > 20) {
            $(".site-header").addClass("header-scroll");
            $('.nav__logo img').attr('src', '/wp-content/themes/potc-custom/images/logo-white.png') ; 
        } else {
            //remove the background property so it comes transparent again (defined in your css)
           $(".site-header").removeClass("header-scroll");
           $('.nav__logo img').attr('src', $image) ;
        }
        
    });
    //functions for modals
    function changeIndex(el){
        $(el).addClass('change-index');

    }
    function normalIndex(el){
        $(el).removeClass('change-index');
    }

    $('#modal-home-open').click(function(e){
        e.preventDefault();
        MicroModal.show('modal-home', {
            onShow: modal => changeIndex('.home__info__boxes__box'),
            onClose: modal => normalIndex('.home__info__boxes__box')
        });
    })

    $('#modal-blog-open').click(function(e){
        e.preventDefault();
        MicroModal.show('modal-blog');
    })

    $('#modal-error-open').click(function(e){
        e.preventDefault();
        MicroModal.show('modal-error');
    })





})//end doc ready

