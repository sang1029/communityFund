
<?php include("../htmlPages/header.php"); 
if (login_check($mysqli)==true) {
	header("../phpPages/indexPage");}
else { 
	$logged='out' ; } ?>
<!-- redirect to home page if logged in -->
<script type="text/JavaScript" src="../resources/js/sha512.js"></script>
<script type="text/JavaScript" src="../resources/js/forms.js"></script>
<body class="signin-body">
	<?php if (isset($_GET[ 'error'])) { echo '<p class="error">Error Logging In!</p>'; } ?>

	<div class="container">
		<form class="form-signin" action="../includes/process_login.php" method="post" name="login_form">
			<h2 class="form-signin-heading text-center">Please Sign In</h2>

			<div class="form-group">
				<label for="email" class="sr-only">Email address</label>
				<input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus>
			</div>
			<div class="form-group">
				<label for="password" class="sr-only">Password</label>
				<input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" value="remember-me">Remember me
				</label>
			</div>
			<button class="btn btn-lg btn-primary btn-block" type="button" value="Login"  onclick="formhash(this.form, this.form.password);">Sign in</button>
			<a href="signup.php">Dont have an account yet?</a>
		</form>  

	</div>

</body>

<?php include("../htmlPages/footer.html"); ?>


