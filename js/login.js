$(document).ready(function() {

  const queryString=window.location.search;
  const urlParams= new URLSearchParams(queryString);
  const errormsg=urlParams.get('error');
  if(errormsg=="emptyfields"){
    document.getElementById("errormsg").innerHTML="Please fill all the fields!";
    $("#loginErrorModal").modal();
  }
	else if (errormsg=="invaliduid") {
    document.getElementById("errormsg").innerHTML="Please use valid characters!!";
    $("#loginErrorModal").modal();
  }
  else if (errormsg=="sqlerror") {
    document.getElementById("errormsg").innerHTML="FATAL ERROR (Database Error)!!";
    $("#loginErrorModal").modal();
  }
  else if (errormsg=="wrongpassword") {
    document.getElementById("errormsg").innerHTML="User name and Password does not match!";
    $("#loginErrorModal").modal();
  }

  else if (errormsg=="userdontexist") {
    document.getElementById("errormsg").innerHTML="This User does not exist!";
    $("#loginErrorModal").modal();
  }

});
