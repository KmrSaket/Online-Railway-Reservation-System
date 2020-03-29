<?php
	session_start();
	if(!isset($_SESSION['userName'])){
		header("Location: index.php?loginrequired");
		exit();
	}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title></title>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>ONLINE RAILWAY RESERVATION SYSTEM</h1>
    <form action="includes\logout_inc.php" method="POST">
		
		<button type="submit" name= "logout_btn" > logout</button>
		
	</form>
	<?php
		if(isset($_SESSION['userName'])){
			echo '<h3>You are logged in !</h3>';
		}
	
	?>
  </body>
</html>
