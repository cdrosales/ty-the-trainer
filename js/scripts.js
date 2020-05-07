(function( $ ) {


    // HAMBURGER MENU MOBILE 

    $('.fa-times').hide();

    $('.fa-bars').on('click', function(event){

        $('#menu-nav').slideToggle( 'slow', function(event) {
            $('.fa-bars').hide('fast', 'linear');
            $('.fa-times').show();
            $('#menu-nav').show();
            });
    });

    $('.fa-times').click(function(event){

        $('#menu-nav').slideToggle( 'slow', function(event) {
            $('#menu-nav').hide('fast', 'linear');
            $('.fa-times').hide('fast', 'linear');
            $('.fa-bars').show();

        });
    });


    // CONTACT NAV

    $('#menu-item-49').removeClass('menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-22 current_page_item menu-item-24').addClass('contact-nav-item');
    

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

  
    // SHRED CHALLENGE BTN

    $('.shred-challenge-BTN').on('click', function(e) {
        

        if($('.terms-conditions-CB').is(':checked')) { 
            console.log ('it worked')
        } else {
            console.log('keep trying')
            event.preventDefault();
        }
    });

    $('.wcSubmitButton').attr('id', 'chat-BTN');
    $('.wcTextColorReset').attr('id', 'chat-reset-BTN');
    $('.wcUserNameApprove').attr('id', 'chat-save-BTN');


    

    
    

})( jQuery );

