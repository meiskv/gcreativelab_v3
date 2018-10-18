(function( $ ) {   
    
    $(window).on('load resize',function(){
        if($(window).width() <= 414){
            window.location = "http://m.gcreativelab.com/"
        }
    });
    
})( jQuery );