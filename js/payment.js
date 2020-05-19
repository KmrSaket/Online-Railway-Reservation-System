$('document').ready(function() {

  $.post('./includes/customer/pay_for_ticket.php',
  { source: source, destination: destination, date : date, train_no : tnum, train_name : tname },
  // function(responsedata_fetch) {
  //      console.log("done");
  //    }
  );
});
