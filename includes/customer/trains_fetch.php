<?php

		include_once ('../dbh_inc.php') ;		//includes database connection file


    //assigning values to php variables	using $_POST
		$source 	= $_POST['source'];
    $destination 	= $_POST['destination'];
    $dayIndex 	= $_POST['dayIndex']+2;





		$sql = "SELECT * FROM train WHERE source_st = ? AND destination_st = ? AND substring(running_days,?,1)=1";
		$stmt=mysqli_stmt_init($conn);

			//check if sql connection is created
			if(!mysqli_stmt_prepare($stmt,$sql)){
				?>
        <h5> An Error occured while connecting to database!</h5>
				<?php
				exit();
			}
			else{
        mysqli_stmt_bind_param($stmt,"ssi",$source,$destination,$dayIndex	);
        mysqli_stmt_execute($stmt);
				$query=mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($query)>0){

  				while ($result=mysqli_fetch_array($query)) {
            ?>

            <div class="row justify-content-center">
              <div class="col-8">
                  <div class="card">
                    <span>
                      <h5 class="card-header card-title"> <?php echo $result['train_no']." - ".$result['train_name']; ?></h5>
                      <div class="card-body">
                        <ul class="list-group list-group-flush">
													<li class="list-group-item"> Distance:  <?php echo $result['distance']; ?> </li>
													<li class="list-group-item"> Fare:  <?php echo $result['fare']; ?> </li>
                          <li class="list-group-item"> Availability:  <?php echo "YES"; ?> </li>
                          <li class="list-group-item">  <button class="btn btn-dark" name="book" type="button">Book Ticket</button></li>
                        </ul>
                      </div>
                    </span>
                  </div>
                </div>
            </div>

						<?php
          }
        }
				else {
					?>

							<h5> No Trains b/w the stations in Database!</h5>

					<?php
				}
		}

?>
