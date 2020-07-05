$('document').ready(function() {




  const queryString=window.location.search;
  const urlParams= new URLSearchParams(queryString);
  const errormsg=urlParams.get('payment');
  if(errormsg=="successfull"){
    // document.getElementById("errormsg").innerHTML="Ticket Booked!";
    $("#payment").modal();
  }



  $("#transactions_link").click(function(){
    $('#transactions').modal();
  });





// to fetch all source stations from database
  $.post( './includes/customer/fetch_source_stations.php',
  function(responsedata_fetch) {
        $('#source_st').html(responsedata_fetch);
      }
    );

// to fetch all destination stations from database
  $.post( './includes/customer/fetch_destination_stations.php',
  function(responsedata_fetch) {
        $('#destination_st').html(responsedata_fetch);
      }
    );


// ajax for chech pnr
$('#checkpnr').click(function(){
  $.post( './includes/customer/fetch_pnr_ticket.php',
  {pnr: $('#pnr').val()},
  function(data,status) {
        // alert(data + status);
        $('#ticket-pnr').html(data);
        $("#pnrmodal").modal();
      }
    );
});



});
