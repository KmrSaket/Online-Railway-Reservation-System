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
          $i=1;
  				while ($result=mysqli_fetch_array($query)) {
            ?>

            <div class="row justify-content-center" style="padding:5px 2px">
              <div class="col-8">
                  <div class="card">
                      <div class="card-body" style="padding:5px 2px">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item" style="padding:5px 2px"> Ticket Number:  <?php echo $i; $i++; ?> </li>
													<li class="list-group-item" style="padding:5px 2px"> PNR:  <?php echo $result['pnr']; ?> </li>
                          <li class="list-group-item" style="padding:5px 2px"> Source:  <?php echo $result['source_st']; ?> </li>
                          <li class="list-group-item" style="padding:5px 2px"> Destination:  <?php echo $result['destination_st']; ?> </li>
                          <li class="doj list-group-item" style="padding:5px 2px">Date of Journey:<?php echo $result['dateOfBooking']; ?></li>
                          <li class="list-group-item" style="padding:5px 2px"> Passenger Name:  <?php echo $result['p1_name']; ?> <br> Age:  <?php echo $result['p1_age']; ?> | Gender:  <?php echo $result['p1_gender']; ?>  </li>
                          <?php if ($result['p2_name'] != ""): ?>
                            <li class="list-group-item" style="padding:5px 2px"> Passenger Name:  <?php echo $result['p2_name']; ?> <br> Age:  <?php echo $result['p2_age']; ?> | Gender:  <?php echo $result['p2_gender']; ?>  </li>
                          <?php endif; ?>


                          <li class="list-group-item"> <button type="button" name="canelTicket">CANCEL</button> </li>
                        </ul>
                      </div>
                  </div>
                  ..................................
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
