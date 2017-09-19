<?php include("../htmlPages/header.php"); ?>
<body class="editprofile-body">
	<div class="container" style="margin-top:90px;">
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#sectionA">About User</a></li>
		</ul>
		<div class="tab-content">
			<div id="sectionA" class="tab-pane active">
				<h2 class="form-signin-heading text-center">Edit Your Profile</h2>

					<div class="container">

						<form class="form-horizontal" role="form">
							<div class="form-group">
								<label class="control-label col-sm-2" for="name">Name:</label>
									<div class="col-sm-8">
										<input type="name" class="form-control" id="name" placeholder="Enter name">
									</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="location">Location:</label>
								<div class="col-sm-8">          
									<input type="email" class="form-control" id="location" placeholder="Where are you located?">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="Interests">Interests:</label>
								<div class="col-sm-8">          
									<input type="email" class="form-control" id="interests" placeholder="What are you interested in?">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2">Biography:</label>
								<div class="col-sm-10">          
									<textarea rows="10"></textarea>
								</div>
							</div>
							<div class="form-group">        
								<div class="col-sm-offset-2 col-sm-10">
									<a href="profile.html" class="btn btn-default">Done</a>
									<a href="profile.html" class="btn btn-default">Cancel</a>
								</div>
							</div>
						</form>
					</div>

			</div>

		</div>        
	</div>

</body>
<?php include("../htmlPages/footer.html"); ?>

