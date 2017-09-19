
<!-- redirect to home page if logged in -->
<script type="text/JavaScript" src="../resources/js/sha512.js"></script>
<script type="text/JavaScript" src="../resources/js/forms.js"></script>

<body class="signin-body">

	<div class="col-xs-12 error-message">
		<?php echo validation_errors(); ?>
		<?php if (isset($error)) echo $error; ?>
		<?php if (isset($message)) echo $message; ?>
	</div>
	<div class="container">

			<?php echo form_open_multipart('user/login', array("class"=>"form-signin"));?>

			<h2 class="form-signin-heading text-center">Please Sign In</h2>

			<div class="form-group">
				<label for="email" class="sr-only">Email address</label>
				<input class="form-control" type="text" name="email" placeholder="email" required autofocus/>
			</div>

			<div class="form-group">
				<label for="password" class="sr-only">Password</label>
				<input class="form-control" type="password" name="password" placeholder="password"/>
			</div>

			<div class="checkbox">
				<label>
					<input type="checkbox" value="remember-me">Remember me
				</label>
			</div>

			<button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>

			<a href="">Dont have an account yet?</a>

	</div>

</body>
