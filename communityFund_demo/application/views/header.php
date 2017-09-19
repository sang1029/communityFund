
<?php
/* Connect to the online database

include_once '../includes/db_connect.php';
include_once '../includes/functions.php'; 
sec_session_start();

*/
?>


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
	<link href="<?= base_url(); ?>resources/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>resources/css/carousel.css" rel="stylesheet">

	<link href="<?= base_url(); ?>resources/css/customCSS.css" rel="stylesheet">

	<!-- script -->
	<script src="<?= base_url(); ?>resources/js/ie-emulation-modes-warning.js"></script>
	<script src="<?= base_url(); ?>resources/js/angular.js"></script>
	<script src="<?= base_url(); ?>resources/js/controllers.js"></script>
	<script src="<?= base_url(); ?>resources/js/jquery-2.1.3.min.js"></script>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
	<script src="<?= base_url(); ?>resources/js/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>resources/js/docs.min.js"></script>
	<script src="<?= base_url(); ?>resources/js/funding.js"></script>



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
						<a class="navbar-brand" href="<?= base_url()?>">CommunityFund</a>
					</div>

					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right index-navbar">
							<?php if (isset($logged_in) && $logged_in){ ?>
										<li><a href="<?= base_url()?>post/make_post">Brwose Project</a></li>
                                        <li><a href="<?= base_url()?>project/projectlist">Browse Projects (TEST)</a></li>
										<li class="dropdown">
					                		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Account<span class="caret"></span></a>
												<ul class="dropdown-menu" role="menu">
                                                    <li><a href="<?= base_url()?>user">My Profile</a></li>
                                                    <li><a href="<?= base_url()?>user/change_password">Change Password</a></li>
                                                    <li><a href="<?= base_url()?>user/edit">Edit Your profile</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="<?= base_url()?>user/logout">Log Out</a></li>
								                </ul>
							            </li>
                                        
										<!--<li><a href="<?= base_url()?>user/logout">Log Out</a></li>-->
							<?php }else{ ?>
                                        <li><a href="<?= base_url()?>project/projectlist">Browse Projects (TEST)</a></li>
										<li><a href="<?= base_url()?>user/signup">Sign Up</a></li>
										<li><a href="<?= base_url()?>user/login">Log In</a></li>
							<?php }?>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	</div>
</div>