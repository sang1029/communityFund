<?php 
include_once "../htmlPages/header.php";
include_once '../includes/register.inc.php';
include_once '../includes/functions.php'; ?>

<script type="text/JavaScript" src="../resources/js/sha512.js"></script>
<script type="text/JavaScript" src="../resources/js/forms.js"></script>

<body class="signin-body">
	<div class="container">
		<!-- Change to Popups -->
		<form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="registration_form" class="form-signin">
			<h2 class="form-signin-heading text-center">Sign Up</h2>
			
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-md" placeholder="Email Address" required autofocus>
			</div>
			<div class="form-group">
				<input type="password" name="password" id="signup_password" class="form-control input-sm" placeholder="Password" required>
			</div>
			<div class="form-group">
				<input type="password" name="password_confirmation" id="signup_password_confirmation" class="form-control input-sm" placeholder="Confirm Password" required>
			</div>
			<input type="submit" value="Register" onclick="return regformhash(this.form,
                                   this.form.email,
                                   this.form.password, this.form.password_confirmation);" class="btn btn-lg btn-success btn-block">
			<a href="signin.php">Already have an account?</a>

		</form>

		<?php if (!empty($error_msg)) { echo $error_msg; }?>

		
	</div>
	<!-- /container -->
	<!--- FOOTER --->
	<?php include( "../htmlPages/footer.html"); ?>
	<!--- /FOOTER --->


	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="resources/js/ie10-viewport-bug-workaround.js"></script>
</body>

