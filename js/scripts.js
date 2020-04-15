(function( $ ) {

    $('.header-wrapper').on('click', function(event) {
        console.log ('it worked')
    });

    $('#menu-item-76').removeClass('menu-item menu-item-type-post_type menu-item-object-page menu-item-76').addClass('shop-nav-item');
    
    $('.shop-nav-item').on('click', function(event) {
        event.preventDefault();
    });


})( jQuery );

