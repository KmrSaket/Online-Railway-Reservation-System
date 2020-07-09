<?php

	if(isset($_POST['login_btn'])){	//if cancel button is clicked

		header("Location: ../index.php");
		exit();

	}
	if(isset($_POST['signup_btn'])){	//if signup button is clicked


		include_once ('dbh_inc.php');	//includes database connection file

		//assigning values to php variables	using $_POST

		$uname = $_POST['uname'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$password = $_POST['psw'];
		$phone = $_POST['phone'];


		//check if all mandatory fields are filled
		if(empty($uname)||empty($fname)||empty($email)||empty($password)||
			empty($phone)){
				header("Location: ../signup.php?error=emptyfields&uname=".$uname."&fname=".$fname."&lname=".$lname."&email=".$email."&phone=".$phone."");
				exit();
			}

		//check if email , user name  and phone format are invalid
		elseif(!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$uname) && !preg_match("/^[0-9]*$/",$phone) &&   strlen($phone)!=10){
			header("Location: ../signup.php?error=invalidmailanduid&fname=".$fname."&lname=".$lname."");
				exit();
		}

		//check if only email format is invalid
		elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			header("Location: ../signup.php?error=invalidmail&uname=".$uname."&fname=".$fname."&lname=".$lname."&phone=".$phone."");
				exit();
		}

		//check if only user_name format is invalid
		elseif(!preg_match("/^[a-zA-Z0-9]*$/",$uname)){
			header("Location: ../signup.php?error=invaliduid&fname=".$fname."&lname=".$lname."&email=".$email."&phone=".$phone."");
				exit();
		}
		//check if only phone format is invalid
		elseif(!preg_match("/^[0-9]*$/",$phone) || strlen($phone)!=10){
			header("Location: ../signup.php?error=invalidphone&uname=".$uname."&fname=".$fname."&lname=".$lname."&email=".$email."");
				exit();
		}



		//if there is no error in the signup form
		else{
			$sql="SELECT user_name FROM passenger WHERE user_name=?";
			$stmt=mysqli_stmt_init($conn);

			//check if sql connection is created
			if(!mysqli_stmt_prepare($stmt,$sql)){
				header("Location: ../signup.php?error=sqlconnectionfailed1");
				exit();
			}
			else{
				mysqli_stmt_bind_param($stmt,"s",$uname);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);

				//check if user_name alrady exist
				if(mysqli_stmt_num_rows($stmt)){
					header("Location: ../signup.php?error=usertaken&fname=".$fname."&lname=".$lname."&email=".$email."&phone=".$phone."");
					exit();
				}
				//insert data into table
				else{
					$sql="INSERT INTO passenger (user_name, fname, lname, email, password,  phone)
						VALUES (?,?,?,?,?,?)";
					$stmt=mysqli_stmt_init($conn);

					//check if sql connection is created
					if(!mysqli_stmt_prepare($stmt,$sql)){
						header("Location: ../signup.php?error=sqlconnectionfailed2");
						exit();
					}
					else{
						$hashedPwd=password_hash($password,PASSWORD_DEFAULT);	//hasing the password
						mysqli_stmt_bind_param($stmt,"sssssi",$uname,$fname,$lname,$email,$hashedPwd,$phone);
						mysqli_stmt_execute($stmt);
						header("Location: ../signup.php?signup=success");
						exit();
					}
				}
			}
		}
		//closing connections
		mysqli_stmt_close($stmt);
		mysqli_close($conn);
	}
	else{
		header("Location: ../signup.php?signup=required");
					exit();
	}
?>
