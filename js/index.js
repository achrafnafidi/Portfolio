$( function() {

  $('.card').click( function( event ) {
    $( event.currentTarget ).toggleClass('flipped');
  });
  
});