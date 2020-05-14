<?php
session_start();
if(!isset($_SESSION['userName'])){
  header("Location: index.php?loginrequired");
  exit();
}
// elseif (!isset($_POST['confirm'])) {
//   header("Location: homepage.php?book_a_train_first");
//   exit();
// }
  $totalPrice=$_POST['totalPrice'];

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
