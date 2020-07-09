<?php
session_start();
if(!isset($_SESSION['userName'])){
  header("Location: index.php?loginrequired");
  exit();
}

		include_once ('../dbh_inc.php') ;		//includes database connection file

    $pnr=$_POST['pnr'];

		$sql = "DELETE FROM ticket WHERE `pnr` = ?";
		$stmt=mysqli_stmt_init($conn);

			//check if sql connection is created
			if(!mysqli_stmt_prepare($stmt,$sql)){
				echo "error connecting database";
				exit();
			}
			else{
        mysqli_stmt_bind_param($stmt,"i",$pnr);
        if (mysqli_stmt_execute($stmt)) {
          echo "Ticket Cancelled!";
        }

		}

?>
