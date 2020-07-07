<?php
	session_start();
	if(isset($_SESSION['userName'])){
		session_unset();
		session_destroy();
		//header("Location: ../index.php?user=logged_out");
	}
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login Page</title>
  	<link rel="stylesheet" href="style/bootstrap.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- external css -->
	<link rel="stylesheet" href="style/style_loginSignup.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Ubuntu&display=swap" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
</head>


<h2>ONLINE RAILWAY RESERVATION SYSTEM</h2>
<hr>
<body>
  <form action="includes\login_inc.php" method="POST">
    <div class="imgcontainer">
      <img src="res\rail-img.png" alt="Avatar" class="avatar">
    </div>


    <div class="container1">
      <label style = "padding-right: 35px;" for="uname"><b>USERNAME</b></label>

	  <?php
		echo '<input type="text" placeholder="Enter Username" name="uname" value="">';
	  ?>

      <label style = "padding-right: 35px;" for="psw"><b>PASSWORD</b></label>
      <input type="password" placeholder="Enter Password" name="psw" >

      <button type="submit" name="login_btn">Login</button>

      <button type="submit" name="signup_btn" style ="background-color: #f44336;">Signup</button>
    </div>

    
  </form>




	<!-- login error modal start -->


	  <div id="loginErrorModal" class="modal fade" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	    <div class="modal-dialog modal-sm modal-dialog-centered" role="document"  >
	      <div class="modal-content  text-center" id="errormsg" style="padding:5vh 2vh">

	      </div>
	    </div>
	  </div>


		<!-- login error modal end -->







</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="js\login.js"></script>

</html>
