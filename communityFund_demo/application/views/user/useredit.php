
<body class="signin-body">
<section class="container">
	<div class="row">
		<div class="">
			<div class="col-xs-12 error-message">
				<?php echo validation_errors(); ?>
				<?php if (isset($errorMsg)) echo $errorMsg; ?>
			</div>
			<?php echo form_open_multipart('user/edit');?>
				<div class="form-group col-xs-12 col-sm-6">
				    <label for="firstname">Firstname</label>
				    <div class="input-group">
					    <span class="glyphicon glyphicon-font input-group-addon" aria-hidden="true"></span>
					    <input type="firstname" class="form-control" id="firstname" name="firstname" value="<?= isset($firstname) ? $firstname: '' ?>">
					</div>
				</div>
				<div class="form-group col-xs-12 col-sm-6">
				    <label for="lastname">Lastname</label>
				    <div class="input-group">
					    <span class="glyphicon glyphicon-bold input-group-addon" aria-hidden="true"></span>
					    <input type="lastname" class="form-control" id="lastname" name="lastname" value="<?= isset($lastname) ? $lastname : "" ?>">
					</div>
				</div>
				<div class="form-group col-xs-12 col-sm-6">
				    <label for="location">Location</label>
				    <div class="input-group">
					    <span class="glyphicon glyphicon-globe input-group-addon" aria-hidden="true"></span>
					    <input type="location" class="form-control" id="location" name="location" value="<?= isset($location) ? $location : '' ?>">
					</div>
				</div>
				<div class="form-group col-xs-12 col-sm-6">
				    <label for="interest">Interest</label>
				    <div class="input-group">
					    <span class="glyphicon glyphicon-road input-group-addon" aria-hidden="true"></span>
					    <input type="text" class="form-control" id="interest" name="interest" value="<?= isset($interest) ? $interest : '' ?>">
					</div>
				</div>
				<div class="form-group col-xs-12 col-sm-6">
				    <label for="photo">upload your icon</label>
				    <div class="input-group">
					    <input type="file" name="userfile" id="photo" size="20">
					</div>
					<p class="help-block">plese upload you icon, form accept: png, jpg, jpeg, gif</p>
				</div>
				
				
				<div class="col-xs-12 pull-right">
					<button type="submit" class="btn btn-success pull-right">submit</button>
					<button type="button" class="btn btn-danger pull-right">cancel</button>
				</div>
				
		</div>
	</div>
</section>
</body>