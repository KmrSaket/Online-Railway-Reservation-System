<!-- default station  -->
<option value="" disabled selected>FROM</option>

<?php
session_start();
if(!isset($_SESSION['userName'])){
  header("Location: index.php?loginrequired");
  exit();
}

		include_once ('../dbh_inc.php') ;		//includes database connection file


		$sql = "SELECT DISTINCT `source_st` FROM `train` ";
		$stmt=mysqli_stmt_init($conn);

			//check if sql connection is created
			if(!mysqli_stmt_prepare($stmt,$sql)){
				echo "error connecting database";
				exit();
			}
			else{
        mysqli_stmt_execute($stmt);
				$query=mysqli_stmt_get_result($stmt);
        if(mysqli_num_rows($query)>0){

  				while ($result=mysqli_fetch_array($query)) {
            ?>

						<option value="<?php echo $result[0]; ?>"><?php echo $result[0]; ?></option>

						<?php
          }
        }
				else {
					?>

						<?php echo "No stations in DB" ?>

					<?php
				}
		}

?>
