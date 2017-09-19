	<div class="row">
		<div class="container signin-body">
			<div class="col-xs-12 error-message">
				<?php echo validation_errors(); ?>
				<?php if (isset($error)) echo $error; ?>
			</div>
			<?php echo form_open_multipart('user/signup');?>
				<div class="form-group col-xs-12 col-sm-6">
				    <label for="email">Email</label>
				    <div class="input-group">
					    <span class="glyphicon input-group-addon" aria-hidden="true">@</span>
					    <input name="email" type="email" class="form-control" id="email" placeholder="input your email, ie: example@example.com" value="<?=isset($profileObject) ? $profileObject->email : ''?>">
					</div>
				</div>
				<div class="form-group col-xs-12 col-sm-6">
				    <label for="username">User Name</label>
				    <div class="input-group">
					    <span class="glyphicon glyphicon-user input-group-addon" aria-hidden="true"></span>
					    <input name="username" type="username" class="form-control" id="username" placeholder="input your username， ie: user001" value="<?=isset($username) ? $username : '' ?>">
					</div>
				</div>
				<div class="form-group col-xs-12 col-sm-6 ">
				    <label for="password">Password</label>
				    <div class="input-group">
					    <span class="glyphicon glyphicon-lock input-group-addon" aria-hidden="true"></span>
					    <input name="password" type="password" class="form-control" id="password" placeholder="input your password at least six digit">
					</div>
				</div>
				<div class="form-group col-xs-12 col-sm-6 ">
				    <label for="password">Password</label>
				    <div class="input-group">
					    <span class="glyphicon glyphicon-lock input-group-addon" aria-hidden="true"></span>
					    <input name="repeat-password" type="password" class="form-control" id="repeat-password" placeholder="input your password again">
					</div>
				</div>

				<div class="form-group col-xs-12 col-sm-6">
				    <label for="firstname">First Name</label>
				    <div class="input-group">
					    <span class="glyphicon glyphicon-font input-group-addon" aria-hidden="true"></span>
					    <input type="firstname" class="form-control" id="firstname" name="firstname" placeholder="input your first name" value="<?=isset($profileObject->firstname) ? $profileObject->firstname : ''?>">
					</div>
				</div>
				<div class="form-group col-xs-12 col-sm-6">
				    <label for="lastname">Last Name</label>
				    <div class="input-group">
					    <span class="glyphicon glyphicon-bold input-group-addon" aria-hidden="true"></span>
					    <input type="lastname" class="form-control" id="lastname" name="lastname" placeholder="input you last name" value="<?=isset($profileObject->lastname) ? $profileObject->lastname : ''?>">
					</div>
				</div>
				<div class="form-group col-xs-12 col-sm-6">
				    <label for="location">Location</label>
				    <div class="input-group">
					    <span aria-hidden="true"></span>
					    <select class="form-control" name="location" id="location">
						    <option value="North America">North America</option>
						    <option value="Asia">Asia</option>
						    <option value="Europe">Europe</option>
						    <option value="Africa">Africa</option>
						    <option value="Australia">Australia</option>
						</select>
					</div>
				</div>
				<div class="form-group col-xs-12 col-sm-6">
				    <label for="interest">Interest</label>
				    <div class="input-group">
					    <span aria-hidden="true"></span>
					    <select class="form-control" name="interest" id="interest">
						    <option value="Science">Science</option>
						    <option value="Music">Music</option>
						    <option value="Art/Fashion">Art/Fashion</option>
						    <option value="Game">Game</option>
						    <option value="Film">Film</option>
						</select>
					</div>
				</div>
				<div class="form-group col-xs-12 col-sm-6">
				<label for="description"> Description: <br><textarea  cols="60" rows="5" type="description" name="description" id="description"></textarea></label><br>
				</div>
				<div class="col-xs-12 pull-right">
					<button type="submit" class="btn btn-success pull-right">Submit</button>
				</div>
				
		</div>
	</div>
