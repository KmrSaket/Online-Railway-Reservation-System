$(document).ready(function() {

  const queryString=window.location.search;
  const urlParams= new URLSearchParams(queryString);
  const errormsg=urlParams.get('error');
  const logoutmsg=urlParams.get('user');
  if(errormsg=="emptyfields"){
    document.getElementById("errormsg").innerHTML="Please fill all the fields!";
    $("#loginErrorModal").modal();
    window.history.replaceState({}, document.title, "?" + "");
  }
	else if (errormsg=="invaliduid") {
    document.getElementById("errormsg").innerHTML="Please use valid characters!!";
    $("#loginErrorModal").modal();
    window.history.replaceState({}, document.title, "?" + "");
  }
  else if (errormsg=="sqlerror") {
    document.getElementById("errormsg").innerHTML="FATAL ERROR (Database Error)!!";
    $("#loginErrorModal").modal();
    window.history.replaceState({}, document.title, "?" + "");
  }
  else if (errormsg=="wrongpassword") {
    document.getElementById("errormsg").innerHTML="User name and Password does not match!";
    $("#loginErrorModal").modal();
    window.history.replaceState({}, document.title, "?" + "");
  }

  else if (errormsg=="userdontexist") {
    document.getElementById("errormsg").innerHTML="This User does not exist!";
    $("#loginErrorModal").modal();
    window.history.replaceState({}, document.title, "?" + "");
  }

  else if (logoutmsg=="logged_out") {
    document.getElementById("errormsg").innerHTML="Logged Out Successfully!";
    $("#loginErrorModal").modal();
    window.history.replaceState({}, document.title, "?" + "");
  }



});
