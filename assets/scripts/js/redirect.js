(function( $ ) {   
    
    $(window).on('load resize',function(){
        if($(window).width() < 1024){
            window.location = "http://m.gcreativelab.com/"
        }
    });
    
})( jQuery );