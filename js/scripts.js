(function( $ ) {


    // HAMBURGER MENU MOBILE 

    $('.fa-times').hide();

    $('.fa-bars').on('click', function(event){

        $('#menu-nav').slideToggle( 'slow', function(event) {
            $('.fa-bars').hide();
            $('.fa-times').show();
            $('#menu-nav').show();
            });
    });

    $('.fa-times').click(function(event){

        $('#menu-nav').slideToggle( 'slow', function(event) {
            $('#menu-nav').hide();
            $('.fa-times').hide();
            $('.fa-bars').show();

        });
    });


    // CONTACT NAV

    $('#menu-item-24').removeClass('menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-22 current_page_item menu-item-24').addClass('contact-nav-item');
    

    // FRONT PAGE FLICKITY
    $('.testimonials-carousel').flickity({
        // options
        cellAlign: 'center',
        contain: true,
        wrapAround: true,
        autoPlay: 2000
    });

    $macroForm = $('.section-4');
    console.log($macroForm)

  
    

})( jQuery );

