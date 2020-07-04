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
  // $totalPrice=$_POST['totalPrice'];


  include_once ('./includes/dbh_inc.php') ;		//includes database connection file



      //assigning values to php variables	using $_POST
      $train = $_POST['train_no'];
      $train_name = $_POST['train_name'];
      $date = $_POST['date'];
  		$source 	= $_POST['source'];
      $destination 	= $_POST['destination'];

      $name1=$_POST['name1'];
      $age1=$_POST['age1'];
      $gender1=$_POST['gender1'];
      $name2=$_POST['name2'];
      $age2=$_POST['age2'];
      $gender2=$_POST['gender2'];

      $sql = "INSERT INTO `ticket`(`user_name`,  `source_st`, `destination_st`, `dateOfBooking`, `p1_name`, `p1_age`, `p1_gender` , `p2_name`, `p2_age`, `p2_gender`) VALUES (?,?,?,?,?,?,?,?,?,?)";

      // `ticket_no`, `pnr`, `transaction_id`, `class`, `seat_no`, `fare`
  		$stmt=mysqli_stmt_init($conn);

  			//check if sql connection is created
  			if(!mysqli_stmt_prepare($stmt,$sql)){
          echo "error";
  				exit();
  			}
  			else{

          if (true) {  //condition to check the format of all entry, according to their data type and property.
            mysqli_stmt_bind_param($stmt,"sssssissis",$user_name,$source,$destination,$date,$name1,$age1,$gender1,$name2,$age2,$gender2);
            mysqli_stmt_execute($stmt);
          }
          else {
            echo "error";
          }

  		  }

  ?>


<!-- <div style="margin:100px">
  dummy images and texts goes here!
  <br>
  <br>
  <strong>nothing else to be included!</strong>
  <br>
  <br>
  <a href="homepage.php?payment=successfull"><button type="button" name="button"> make payment</button></a>
  <input type="text" name="" value="<?php echo $age1; ?>" disabled>
</div> -->
<!DOCTYPE html>
<html>
	<head>
	<title>Payment Gateway </title>
  <style>
    form  {
        margin-left: auto;
        margin-right: auto;
        margin-top:100px;
        width:54%;
    }
  </style>
</head>
<body>
     <form>
        <fieldset>
            <table>
            <tr>
               <th> <p> <img src="res/image.png" width="55" height="35"> </p> </th>
               <th> <p> <img src="res/image2.png" width="57" height="36">  </p> </th>
            </tr>
            </table>
            <table>
            <tr>
               <td> <p>
                  <label for="cardnumber">Card Number :</label><br>
                  <input type="text" name="" value="XXXX XXXX XXXX XXXX" disabled style="width:300px">

                  </textarea>
             </p> </td>
              <td>  <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label for="securitycode">Security code (CVV) ? :</label><br>
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  <input type="text" name="" value="XXX" disabled>
                <td>
                  <p><label for="space"> </label><br>
                     <img src="res/image3.png" width="55" height="25"> </p> </td>
            </table>
            <table>
            <tr>
               <td> <p>
                 <label for="Name on the card">Name on the card :</lable><br />
                  <input type="text" name="" value="CARDHOLDER'S NAME" style="width:300px" disabled>
               </p> </td>

                 <td> <p>
            	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspExpiration date:
              <br>
            	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <input type="text" name="" value="MM" disabled>
            	<input type="text" name="" value="YYYY" disabled> </p> </td>
            </table>
        </fieldset>
     </form>
     <div style="margin-top:50px; margin-left:650px"><button type="button" name="button" disabled> make payment</button></div>
</body>
<script type="text/javascript">
setTimeout(function(){
     window.location='homepage.php?payment=successfull';
  }, 3000);
</script>
</html>
