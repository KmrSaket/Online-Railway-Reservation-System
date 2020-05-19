<?php
session_start();
$user_name = $_SESSION['userName'];
if(!isset($user_name)){
  header("Location: index.php?loginrequired");
  exit();
}
// elseif (!isset($_POST['confirm'])) {
//   header("Location: homepage.php?book_a_train_first");
//   exit();
// }
  $totalPrice=$_POST['totalPrice'];

  include_once ('./includes/dbh_inc.php') ;		//includes database connection file


      //assigning values to php variables	using $_POST
      $train = $_POST['train_no'];
      $train_name = $_POST['train_name'];
      $date = $_POST['date'];
  		$source 	= $_POST['source'];
      $destination 	= $_POST['destination'];

  		$sql = "INSERT INTO `ticket`(`user_name`,  `source_st`, `destination_st`, `dateOfBooking`) VALUES (?,?,?,?)";
      // `ticket_no`, `pnr`, `transaction_id`, `class`, `seat_no`, `fare`
  		$stmt=mysqli_stmt_init($conn);

  			//check if sql connection is created
  			if(!mysqli_stmt_prepare($stmt,$sql)){
          echo "error";
  				exit();
  			}
  			else{
          echo "successfull";
          mysqli_stmt_bind_param($stmt,"ssss",$user_name,$source,$destination,$date);
          mysqli_stmt_execute($stmt);
  		  }

  ?>


<div style="margin:100px">
  dummy images and texts goes here!
  <br>
  <br>
  <strong>nothing else to be included!</strong>
  <br>
  <br>
  <a href="homepage.php?payment=successfull"><button type="button" name="button"> make payment</button></a>
  <input type="text" name="" value="<?php echo $totalPrice; ?>" disabled>
</div>
