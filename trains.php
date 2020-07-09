<?php
	session_start();
	if(!isset($_SESSION['userName'])){
		header("Location: index.php?loginrequired");
		exit();
	}
	elseif (empty($_GET['s']) && empty($_GET['d']) && empty($_GET['date'])) {
		header("Location: homepage.php?search=notfilled");
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
  <link rel="stylesheet" href="style/train.css">

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
        <li class="nav-item">
          <a class="nav-link" href="homepage.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="transactions_link">TRANSACTIONS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Tnc.php">T&C</a>
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
		if(isset($_SESSION['firstName'])){
			$firstname=$_SESSION['firstName'];
			echo "Welcome "."$firstname";
		}
		?>
		</h3>
	</section>

<br>
<h2 id="searchQuery">Processing Your Query!</h2>
<br>

<div class="container" id="response">

</div>

<section id="contact-us">
<form class="contact-form" action="mailto:orrs.fyp@gmail.com" method="post" enctype="text/plain">
  <h2>CONTACT US</h2>
  <input class="form-control" type="name" name="name" placeholder="YOUR NAME">
  <input class="form-control" type="email" name="email" placeholder="YOUR EMAIL ID">
  <textarea class="form-control" name="query" rows="8" cols="80" placeholder="Your Query Please"></textarea>
  <button class="btn btn-lg btn-dark" type="submit">SUBMIT</button>
</form>
</section>

  <section id = "about-us">
    <h2>ABOUT US</h2>
    <ul>
			<li>Rishav Raj 			- 18700116050</li>
      <li>Shradha Praveen - 18700116036</li>
      <li>Saket Kumar 		- 18700116047</li>
      <li>Sujata Kumari 	- 18700116015</li>
			<li>Shalini Kumari 	- 18700116039</li>
    </ul>
  </section>
  <footer id="footer">
    <i class="f fab fa-twitter"></i>
    <i class="f fab fa-facebook"></i>
    <i class="f fab fa-instagram"></i>
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
								<div class="tab-pane fade show active" id="All" role="tabpanel" aria-labelledby="contact-tab"></div>
						</div>
					</div>
				</div>




	<!-- modal for users transactions (modal end) -->


	<!-- modal for checking pnr and cancelled ticket info (modal starts) -->

	<div id="pnrmodal" class="modal fade" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-md modal-dialog-centered" role="document"  >
			<div class="modal-content  text-center" id="ticket-pnr" style="padding:5vh 2vh">

			</div>
		</div>
	</div>

	<!-- modal for checking pnr (modal ends) -->






</body>

<script type="text/javascript" src="js/jquery-3.5.0.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/homepage.js"></script>
<script type="text/javascript" src="js/trains.js"></script>
<script type="text/javascript" src="js/fetchTicket.js"></script>
</html>
