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


    // SHOP NAV ITEM 

    $('#menu-item-76').removeClass('menu-item menu-item-type-post_type menu-item-object-page menu-item-76').addClass('shop-nav-item');
    
    $('.shop-nav-item').on('click', function(event) {
        event.preventDefault();
    });

    // FRONT PAGE FLICKITY
    $('.testimonials-carousel').flickity({
        // options
        cellAlign: 'center',
        contain: true,
        wrapAround: true,
        autoPlay: 2000
    });

    

})( jQuery );

