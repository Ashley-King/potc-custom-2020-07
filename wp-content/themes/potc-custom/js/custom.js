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
    function navStyles(){
        if(!$('.nav__wrapper--main').hasClass('nav--transparent') && $('.nav__wrapper--mobile-button').hasClass('nav-open')){
            $('.nav__logo img').attr('src', '/wp-content/themes/potc-custom/images/logo-white.png') ;
            $('.nav__wrapper--main').css('border-bottom', 'none');
        }
        if(!$('.nav__wrapper--main').hasClass('nav--transparent') && !$('.nav__wrapper--mobile-button').hasClass('nav-open')){
            $('.nav__logo img').attr('src', $image) ;
            $('.nav__wrapper--main').css('border-bottom', '1px solid rgba(0, 0, 0, 0.1)');
        }
    }//navStyles
  

    $('.nav__wrapper--mobile-button').click(function(){
        $(this).toggleClass('nav-open');
        $('.nav__mobile__background').toggleClass('show-nav-bg');
        $('.nav__wrapper--mobile').toggleClass('show-mobile-nav')
        navStyles();

       
    }); 

    
    


    /**
     * control bg of header on scroll
     */
    
    $(window).on("scroll", function() {  
        if($(window).scrollTop() > 10) {
            $(".site-header").addClass("header-scroll");
            $('.nav__logo img').attr('src', '/wp-content/themes/potc-custom/images/logo-white.png') ; 
        } else {
            //remove the background property so it comes transparent again (defined in your css)
           $(".site-header").removeClass("header-scroll");
           $('.nav__logo img').attr('src', $image) ;
        }
        
    });
    
    /**
     * FUNCTIONS FOR MODALS
     */
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
            onClose: modal => normalIndex('.home__info__boxes__box'),
            disableFocus: true,
        });
    })

    $('#modal-blog-open').click(function(e){
        e.preventDefault();
        MicroModal.show('modal-blog',{
            disableFocus: true,
        });
    })

    $('#modal-error-open').click(function(e){
        e.preventDefault();
        MicroModal.show('modal-error',{
            disableFocus: true,
        });
    })

    $('#modal-page-open').click(function(e){
        e.preventDefault();
        MicroModal.show('modal-page',{
            disableFocus: true,
        });
    })

    /**
     * ANCHOR TAG SCROLL
     */
if (window.location.hash) {
    var hash = window.location.hash;
    $('html, body').animate({
        scrollTop :  $(hash).offset().top - 80
    }, 500);
  };



})//end doc ready

