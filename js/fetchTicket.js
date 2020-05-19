$('document').ready(function() {

  // fetch tickets
  $.post( './includes/customer/fetch_upcoming_tickets.php',
  function(responsedata_fetch) {
        $('#upcoming').html(responsedata_fetch);
     }
  );


});
