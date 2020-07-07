<?php
session_start();
if(!isset($_SESSION['userName'])){
  header("Location: index.php?loginrequired");
  exit();
}

		include_once ('../dbh_inc.php') ;		//includes database connection file


    $pnr=$_POST['pnr'];



		$sql = "SELECT * FROM ticket WHERE pnr = ?";
		$stmt=mysqli_stmt_init($conn);

			//check if sql connection is created
			if(!mysqli_stmt_prepare($stmt,$sql)){
				echo "error connecting database";
				exit();
			}
			else{
        mysqli_stmt_bind_param($stmt,"i",$pnr);
        mysqli_stmt_execute($stmt);
				$query=mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($query)>0){
          $result=mysqli_fetch_array($query);
          ?>

          <div class="row justify-content-center" style="padding:5px 2px">
            <div class="col-8">
                <div class="card">
                    <div class="card-body" style="padding:5px 2px">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"> PNR:  <?php echo $result['pnr']; ?> </li>
                        <li class="list-group-item"> Source:  <?php echo $result['source_st']; ?> </li>
                        <li class="list-group-item"> Destination:  <?php echo $result['destination_st']; ?> </li>
                        <li class="doj list-group-item">Date of Journey:<?php echo $result['dateOfBooking']; ?></li>
                        <li class="list-group-item"> Passenger Name:  <?php echo $result['p1_name']; ?> <br> Age:  <?php echo $result['p1_age']; ?> | Gender:  <?php echo $result['p1_gender']; ?>  </li>
                        <li class="list-group-item"> Passenger Name:  <?php echo $result['p2_name']; ?> <br> Age:  <?php echo $result['p2_age']; ?> | Gender:  <?php echo $result['p2_gender']; ?>  </li>
                      </ul>
                    </div>
                </div>
              </div>
          </div>

          <?php
        }
				else {
					 echo "Invalid PNR! Ticket corresponding to PNR: " . $pnr . " does not exist!";
				}
		}

?>
