$('document').ready(function() {

  // fetch tickets
  $.post( './includes/customer/fetch_all_tickets.php',
  function(responsedata_fetch) {
        $('#All').html(responsedata_fetch);
     }
  );

});
