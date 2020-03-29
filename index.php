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
				echo '<p style="text-decoration:underline; font-weight:bold; color:#FF0000;"> Please fill all the fields</p>';
				}
				if($_GET['error']=="invaliduid"){
				echo '<p style="text-decoration:underline; font-weight:bold; color:#FF0000;"> Please input valid User Name</p>';
				}
				elseif($_GET['error']=="wroongpassword"){
				echo '<p style="text-decoration:underline; font-weight:bold; color:#FF0000;"> Wrong Password!</p>';
				}
				elseif($_GET['error']=="userdontexist"){
				echo '<p style="text-decoration:underline; font-weight:bold; color:#FF0000;"> User does not Exist!</p>';
				}
			}
			elseif(isset($_GET['user'])){
				if($_GET['user']=="logged_out"){
					echo '<p style="text-decoration:underline; font-weight:bold; color:#00FF00;"> Logged out Successfully!</p>';
				}
				
			}
			
		?>
    <div class="container">
      <label style = "padding-right: 35px;" for="uname"><b>USERNAME</b></label>
      <input type="text" placeholder="Enter Username" name="uname" >
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
