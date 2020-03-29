<?php
	
	
	if(isset($_POST['signup_btn'])){	//if signup button is clicked
		
			header("Location: ../signup.php");
			exit();
			
		}
	if(isset($_POST['login_btn'])){			//if login button is clicked
		
		include_once ('dbh_inc.php') ;		//includes database connection file
		
		
		//assigning values to php variables	using $_POST
		$uname	= $_POST['uname'];
		$password 	= $_POST['psw'];
			
		
		//check if all mandatory fields are filled
		if(empty($_POST['uname']) || empty($_POST['psw'])){
			header("Location: ../index.php?error=emptyfields");
			exit();
		}
		
		//check if user_name format is invalid
		elseif(!preg_match("/^[a-zA-Z0-9]*$/",$uname)){
			header("Location: ../signup.php?error=invaliduid&fname=".$fname."&lname=".$lname."&email=".$email."&phone=".$phone."");
				exit();
		}
		
		//if there is no error in the login form
		else{
			$sql = "SELECT * FROM passenger WHERE user_name = ?";
			$stmt=mysqli_stmt_init($conn);
			
			//check if sql connection is created
			if(!mysqli_stmt_prepare($stmt,$sql)){
				header("Location: ../index.php?error=sqlerror");
				exit();
			}
			else{
				mysqli_stmt_bind_param($stmt,"s",$uname);
				mysqli_stmt_execute($stmt);
				$result=mysqli_stmt_get_result($stmt);
				
				//check if user_name exist (if $row = 1 then user exist)
				if($row=mysqli_fetch_assoc($result)){
					$pwdCheck=password_verify($password,$row['password']);
					
					//check if password matches with the password in the database
					if($pwdCheck == false){
						header("Location: ../index.php?error=wroongpassword");
						exit();
					}
					elseif($pwdCheck == true){
						session_start();							//session started on successfull login
						$_SESSION['userName']=$row['user_name'];	//session variable for user_name created
						$_SESSION['userEmail']=$row['email'];		//session variable for email created
						header("Location: ../homepage.php?login=success");
						exit();
					}
					else{
						header("Location: ../index.php?error=wroongpassword");	//double check for wrong password
						exit();
					}
				}
				else{
					header("Location: ../index.php?error=userdontexist");
				exit();
				}
			}		
		}	
	}
?>