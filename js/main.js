$(document).ready( function(){
    
    $( "a.comic-tab" ).each( function() {
    var my_id = ($(this).attr( 'id' ));

    var request = $.ajax({
    url: "php/script.php",
    type: "POST",
    data: { data: my_id },
    dataType: "html"
    });

    request.done(function( msg ) {
    $( '.all-lightboxes' ).append( msg );
    });

    request.fail(function() {
    $( '.all-lightboxes' ).append( 'PHP Error' );
    });

    });
})