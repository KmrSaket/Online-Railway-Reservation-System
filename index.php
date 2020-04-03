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
  <link rel="stylesheet" href="style\style_loginSignup.css">
</head>


<h2>ONLINE RAILWAY RESERVATION SYSTEM</h2>
<hr>
<body>
  <form action="includes\login_inc.php" method="POST">
    <div class="imgcontainer">
      <img src="res\rail-img.png" alt="Avatar" class="avatar">
    </div>
	<?php
			if(isset($_GET['error'])){
				if($_GET['error']=="emptyfields"){
				echo '<script>alert("Please fill all the fields");</script>';
				echo '<script>window.location.href="http://localhost/Online%20Railway%20Reservation%20System/";</script>';
				}
				if($_GET['error']=="invaliduid"){
				echo '<script>alert("Please input valid User Name")</script>';
				echo '<script>window.location.href="http://localhost/Online%20Railway%20Reservation%20System/";</script>';
				}
				elseif($_GET['error']=="wroongpassword"){
				echo ' <script>alert("Wrong Password!")</script>';
				echo '<script>window.location.href="http://localhost/Online%20Railway%20Reservation%20System/";</script>';
				}
				elseif($_GET['error']=="userdontexist"){
				echo '<script>alert("User does not Exist!")</script>';
				echo '<script>window.location.href="http://localhost/Online%20Railway%20Reservation%20System/";</script>';
				}
			}
			elseif(isset($_GET['user'])){
				if($_GET['user']=="logged_out"){
					echo '<script>alert("Logged out Successfully!")</script>';
					echo '<script>window.location.href="http://localhost/Online%20Railway%20Reservation%20System/";</script>';
				}
				
			}
			
		?>
    <div class="container">
      <label style = "padding-right: 35px;" for="uname"><b>USERNAME</b></label>
	  <?php 
		echo '<input type="text" placeholder="Enter Username" name="uname" value="">';
	  ?>
    
      <label style = "padding-right: 35px;" for="psw"><b>PASSWORD</b></label>
      <input type="password" placeholder="Enter Password" name="psw" >

      <button type="submit" name="login_btn">Login</button>

      <button type="submit" name="signup_btn" style ="background-color: #f44336;">Signup</button>
    </div>

    <div class="container">
      <label style="text-align:">
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      <span class="psw"><a href="#">Forgot password?</a></span>
    </div>
  </form>

</body>

</html>
