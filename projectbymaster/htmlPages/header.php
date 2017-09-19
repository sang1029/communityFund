<?php
include_once '../includes/db_connect.php';
include_once '../includes/functions.php'; 
sec_session_start();?>
<!DOCTYPE html>

<html lang="en" ng-app="csc309Project">
<head>
	<!-- meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- link -->
	<link rel="icon" href="http://getbootstrap.com/favicon.ico">
	<link href="../resources/css/bootstrap.min.css" rel="stylesheet">
	<link href="../resources/css/carousel.css" rel="stylesheet">

	<link href="../resources/css/customCSS.css" rel="stylesheet">

	<!-- script -->
	<script src="../resources/js/ie-emulation-modes-warning.js"></script>
	<script src="../resources/js/angular.js"></script>
	<script src="../resources/js/controllers.js"></script>
	<script src="../resources/js/jquery-2.1.3.min.js"></script>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
	<script src="../resources/js/bootstrap.min.js"></script>
	<script src="../resources/js/docs.min.js"></script>
	<script src="../resources/js/funding.js"></script>



	<title>CommunityFund</title>


 </head>

<body data-spy="scroll">
<div class="navbar-wrapper">
	<div id="header">
	<header id="header" class="header">
		<div class="container">
			<nav class="navbar navbar-inverse navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="../phpPages/indexPage.php">CommunityFund</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right index-navbar">
						<?php                    
							//Added a condition to the if clause.
							echo '<li><a href="../phpPages/browse.php">Browse Projects</a></li>';
							
							if (login_check($mysqli)==true){
								echo '<li><a href="../phpPages/communityPage.php">Communities</a>';
								echo '<li class="nav-item"><a href="../phpPages/profile.php">My Account</a></li>';
								echo '<li class="nav-item"><a href="../includes/logout.php">Logout</a></li>';
							}
							else{
								
								echo '<li><a href="../phpPages/signup.php">Sign Up</a>';
								//echo '<li><a href="../phpPages/admin.php">Admin</a></li>';
								echo '<li class="nav-item"><a href="signin.php">Log In</a></li>';
							}
						?>
						</ul>
					</div>
				</div>
			</nav>					
		</div>
	</header>
	</div>
</div>