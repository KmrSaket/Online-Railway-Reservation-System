<?php
session_start();
if(!isset($_SESSION['userName'])){
  header("Location: index.php?loginrequired");
  exit();
}

		include_once ('../dbh_inc.php') ;		//includes database connection file


		$sql = "SELECT * FROM ticket WHERE user_name = ?";
		$stmt=mysqli_stmt_init($conn);

			//check if sql connection is created
			if(!mysqli_stmt_prepare($stmt,$sql)){
				echo "error connecting database";
				exit();
			}
			else{
        mysqli_stmt_bind_param($stmt,"s",$_SESSION['userName']);
        mysqli_stmt_execute($stmt);
				$query=mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($query)>0){

  				while ($result=mysqli_fetch_array($query)) {
            ?>

            <div class="row justify-content-center">
              <div class="col-8">
                  <div class="card">

                      <!-- <h5 class="card-header card-title"> <?php echo $result['train_no']." - ".$result['train_name']; ?></h5> -->
                      <div class="card-body">
                        <ul class="list-group list-group-flush">
													<li class="list-group-item"> PNR:  <?php echo $result['pnr']; ?> </li>
                          <li class="list-group-item"> Source:  <?php echo $result['source_st']; ?> </li>
                          <li class="list-group-item"> Destination:  <?php echo $result['destination_st']; ?> </li>
                          <li class="list-group-item"> Date:  <?php echo $result['dateOfBooking']; ?> </li>
                        </ul>
                      </div>
                  </div>
                </div>
            </div>
            <br> <br>
						<?php
          }
        }
				else {
					?>

							<h5> No Tickets!</h5>

					<?php
				}
		}

?>
