<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
    <link rel="stylesheet" href="style\style_loginSignup.css">
    <title>Sign-up</title>
  </head>
  <h2>ONLINE RAILWAY RESERVATION SYSTEM</h2>
  <hr>
  <body>
    <form action="includes\signup_inc.php" method="POST" style="border:1px solid #ccc">
      <div id="form-wrapper" class="container">
        <h1>Sign Up</h1>
		<p>Please fill in this form to create an account.</p>
        <hr>
		<?php
			if(isset($_GET['error'])){
				if($_GET['error']=="emptyfields"){
				echo '<p style="text-decoration:underline; font-weight:bold; color:#FF0000;"> Please fill all the required fields</p>';
				}
				if($_GET['error']=="invalidmailanduid"){
				echo '<p style="text-decoration:underline; font-weight:bold; color:#FF0000;"> Please fil valid User Name and Email</p>';
				}
				if($_GET['error']=="invalidmail"){
				echo '<p style="text-decoration:underline; font-weight:bold; color:#FF0000;"> Please fill valid Email</p>';
				}
				if($_GET['error']=="invaliduid"){
				echo '<p style="text-decoration:underline; font-weight:bold; color:#FF0000;"> Please fill vaild User name</p>';
				}
				if($_GET['error']=="invalidphone"){
				echo '<p style="text-decoration:underline; font-weight:bold; color:#FF0000;"> Please fill valid 10 digit phone number</p>';
				}
				if($_GET['error']=="usertaken"){
				echo '<p style="text-decoration:underline; font-weight:bold; color:#FF0000;"> User Name already exist. Try another!</p>';
				}
			}
			elseif(isset($_GET['signup'])){
				if($_GET['signup']=="success"){
				echo '<p style="text-decoration:underline; font-weight:bold; color:#00FF00;"> Sign up successfull!</p>';
				}
			}
			
		?>
        
		<label for="uname" style = "padding-right: 0px;"><b>USER NAME</b></label>
        <?php
			if(isset($_GET['uname'])){
				$uname=$_GET['uname'];
				echo '<input type="text" placeholder="Enter User Name" name="uname"  style="margin-left: 26px;" value='.$uname.'>';
			}
			else{
				echo '<input type="text" placeholder="Enter User Name" name="uname"  style="margin-left: 26px;">';
			}
	
		?>
        <br>
		<label for="fname" style = "padding-right: 0px;"><b>FIRST NAME</b></label>
        <?php
			if(isset($_GET['fname'])){
				$fname=$_GET['fname'];
				echo '<input type="text" placeholder="Enter First Name" name="fname"  style="margin-left: 26px;" value='.$fname.'>';
			}
			else{
				echo '<input type="text" placeholder="Enter First Name" name="fname"  style="margin-left: 26px;">';
			}
	
		?>
        <br>
		<label for="lname" style = "padding-right: 0px;"><b>LAST NAME</b></label>
        <?php
			if(isset($_GET['lname'])){
				$lname=$_GET['lname'];
				echo '<input type="text" placeholder="Enter Last Name" name="lname"  style="margin-left: 26px;" value='.$lname.'>';
			}
			else{
				echo '<input type="text" placeholder="Enter Last Name" name="lname"  style="margin-left: 26px;">';
			}
	
		?>
        <br>
        <label for="email" style = "padding-right: 35px;"><b>EMAIL</b></label>
        <?php
			if(isset($_GET['email'])){
				$email=$_GET['email'];
				echo '<input type="text" placeholder="Enter Email" name="email"  style="margin-left: 30px;" value='.$email.'>';
			}
			else{
				echo '<input type="text" placeholder="Enter Email" name="email"  style="margin-left: 30px;">';
			}
	
		?>
        <br>
        <label for="psw"><b>PASSWORD</b></label>
        <input type="password"  placeholder="Enter Password" name="psw"  style="margin-left: 30px;">
        <br>
        <label for="phone"><b>MOBILE NO.</b></label>
        <?php
			if(isset($_GET['phone'])){
				$phone=$_GET['phone'];
				echo '<input type="text" placeholder="Mobile Number (10 digit)" name="phone"  style="margin-left: 26px;" value='.$phone.'>';
			}
			else{
				echo '<input type="text" placeholder="Mobile Number (10 digit)" name="phone"  style="margin-left: 26px;">';
			}
	
		?>
		
        <br>
        <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <div id="form-wrapper" style="max-width:500px;margin:auto;" class="clearfix">
          <button type="submit" class="signupbtn" name="signup_btn">Sign Up</button>
		  <button type="submit" class="cancelbtn" name="login_btn" style="background-color: #f44336;">Login</button>
        </div>
		<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
      </div>
    </form>

  </body>
</html>
