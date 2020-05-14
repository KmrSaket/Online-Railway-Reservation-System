$(document).ready(function(){



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
  $("#search").click(function(){
    // alert("h");
  });

});
