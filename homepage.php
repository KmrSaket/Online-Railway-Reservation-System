<?php
	session_start();
	if(!isset($_SESSION['userName'])){
		header("Location: index.php?loginrequired");
		exit();
	}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- external css -->
	<link rel="stylesheet" href="style/homepage.css">

  <script src="https://kit.fontawesome.com/4f5b6480b7.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Ubuntu&display=swap" rel="stylesheet">
  <title>Homepage</title>


</head>

<body>
  <h2>ONLINE RAILWAYS RESERVATION SYSTEM</h2>






  <hr>
  <nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <a class="navbar-brand">orrs</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="transactions_link">TRANSACTIONS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#check-pnr">CHECK PNR</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="TnC.php">T&C</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact-us">CONTACT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about-us">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="signout" href="includes/logout_inc.php">SIGN OUT</a>
        </li>
      </ul>
    </div>
  </nav>
	<hr style="margin:0">

	<section id="WelcomeTag">
		<h3 style="padding:0; margin:0">
		<?php
		if(isset($_SESSION['userName'])){
			$username=$_SESSION['userName'];
			echo "Welcome "."$username";
		}
		?>
		</h3>
	</section>


  <section id="train-search">
    <div class="row">
      <div class="col-lg-6">
        <form class="reservation-form" action="trains.php" method="get">
          <h3>Search</h3>
          <input class="form-control mr-sm-2" type="text" placeholder="FROM" name="s">
          <br>
          <input class="form-control mr-sm-2" type="text" placeholder="TO" name="d">
          <br>
          <label for="doj">Select Date :  </label>
          <input type="date" name="date" placeholder="Select Date">
          <button class = "btn-train btn btn-primary btn-lg btn-block" type="submit" id="search" >Search</button>
        </form>
      </div>
      <div class="col-lg-6">
        <img class="title-img" src="res/rail.jpg" alt="rail_image">
      </div>
    </div>

  </section>

  <section id = "check-pnr">
    <form>
      <h1>Checking your PNR was never that easy!</h1>
      <input class="form-control " type="search" placeholder="Enter your PNR number" id="pnr">
      <button class="btn btn-dark btn-md" type="submit">Check PNR</button>
    </form>
  </section>
<hr>
<section id="contact-us">
<form class="contact-form">
  <h2>CONTACT US</h2>
  <input class="form-control" type="name" placeholder="YOUR NAME" id="contactus_name">
  <input class="form-control" type="email" placeholder="YOUR EMAIL ID" id="contactus_email">
  <textarea class="form-control" rows="8" cols="80" placeholder="Your Query Please" id="contactus_query"></textarea>
  <button class="btn btn-lg btn-dark" type="submit" name="button-for-contact">SUBMIT</button>
</form>
</section>
  <section id = "about-us">
    <h2>ABOUT US</h2>
    <ul>
      <li>lorem ipsum</li>
      <li>ugkbslxxz</li>
      <li>bohxc ohcild</li>
      <li>yj csukdxzo</li>
    </ul>
  </section>
  <footer id="footer">
    <i class="f fab fa-twitter"></i>
    <i class="f fab fa-facebook"></i>
    <i class="f fab fa-instagram"></i>
    <i class="f fab fa-envelope"></i>
    <p>© Copyright 2020  ORRS</p>
  </footer>





<!-- modal for users transactions (modal start) -->



<div id="transactions" class="modal fade" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-md modal-dialog-centered" role="document"  >
					<div class="modal-content  text-center" style="padding:5vh 2vh">
						<div class="modal-header">
											<h5 class="modal-title">Transactions</h5>
		      	</div>
						<br>
						<div class="container">
							user transactions goes here! (tab wise!)
							<br>
							1. Upcoming
							<br>
							2. past
							<br>
							3. cancelled
						</div>
					</div>
				</div>
			</div>




<!-- modal for users transactions (modal end) -->









</body>
<!--
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/homepage.js"></script> -->
<script type="text/javascript" src="js/jquery-3.5.0.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/homepage.js"></script>
</html>
