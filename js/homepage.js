$('document').ready(function() {




  const queryString=window.location.search;
  const urlParams= new URLSearchParams(queryString);
  const errormsg=urlParams.get('payment');
  if(errormsg=="successfull"){
    $("#payment").modal();
    window.history.replaceState({}, document.title, "?" + "");
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
        $('#ticket-pnr').html(data);
        $('#pnrmodal').modal();

      }
    );

});



$("#transactions").on('click','button',function(){
         // get the current row
         var currentRow=$(this).closest("ul");
         var cancelpnr = currentRow.find("li:eq(1)").text().trim().substring(6);
         var choice = confirm("Do you want to cancel ticket?");
         if (choice == true) {
           $.post( './includes/customer/cancel_pnr_ticket.php',
           {pnr: cancelpnr},
           function(data,status) {
                 $('#transactions').toggle();
                 $('#ticket-pnr').text(data);
                 $('#pnrmodal').modal();
                 $('#pnrmodal').on('hidden.bs.modal', function () {
                location.reload();
              });
               }
             );
         }
       });



});
