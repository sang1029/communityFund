<body class="signin-body">
<section class="container">
	<div class="row">
		<div class="">
			<div class="col-xs-12 error-message">
				<?php echo validation_errors(); ?>
				<?php if (isset($error)) echo $error; ?>
				<?php if (isset($message)) echo $message; ?>
			</div>
			
			<?php echo form_open_multipart('user/change_password');?>
				<div class="form-group col-xs-12 ">
					<div class="input-wrapper col-xs-6 col-xs-offset-3">
					    <label for="password">Old Password</label>
					    <div class="input-group">
						    <span class="glyphicon glyphicon-lock input-group-addon" aria-hidden="true"></span>
						    <input name="old-password" type="password" class="form-control" id="old-password" placeholder="input your old password">
						</div>
					</div>
					<div class="input-wrapper col-xs-6 col-xs-offset-3">
					    <label for="password">New Password</label>
					    <div class="input-group">
						    <span class="glyphicon glyphicon-lock input-group-addon" aria-hidden="true"></span>
						    <input name="new-password" type="password" class="form-control" id="new-password" placeholder="input your new password at least 6 digit">
						</div>
					</div>
					<div class="input-wrapper col-xs-6 col-xs-offset-3">
					    <label for="password">Repeat the New password</label>
					    <div class="input-group">
						    <span class="glyphicon glyphicon-lock input-group-addon" aria-hidden="true"></span>
						    <input name="repeat-password" type="password" class="form-control" id="repeat-password" placeholder="reinput your new password at least 6 digit">
						</div>
					</div>
				</div>
				<div class="col-xs-12 pull-right">
					<button type="submit" class="btn btn-success pull-right">submit</button>
					<button type="button" class="btn btn-danger pull-right">cancel</button>
				</div>
		</div>
	</div>
</section>
</body>