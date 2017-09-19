<?php 
include_once ('../includes/functions.php');

include( "../htmlPages/header.php"); ?>

<body>
	<div class="container" style="margin-top:90px;">
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#sectionA">Create Project</a>
			</li>
		</ul>
		<div class="tab-content">
			<div id="sectionA" class="tab-pane active">
				<h3>Create your Project!</h3>

				<div class="container">

					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label class="control-label col-sm-2" for="name">Name:</label>
							<div class="col-sm-8">
								<input type="name" class="form-control" id="name" placeholder="Enter Project name">
							</div>
						</div>
						<div class="form-group">

							<!--<select class="select" id="projectcategory" name="projectcategory">
								<option value="">Pick a project category:</option>
								<option value="1">Art</option>
								<option value="2">Fashion</option>
								<option value="3">Film, Movies and Video</option>
								<option value="4">Dance</option>
								<option value="5">Food</option>
								<option value="6">Games</option>
								<option value="7">Film &amp; Video</option>
								<option value="8">Music</option>
								<option value="9">Photography</option>
								<option value="10">Technology</option>
							</select> -->
							<label class="control-label col-sm-2" for="category">Category:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="project-category" placeholder="Enter Project Category">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">Project Information:</label>
							<div class="col-sm-10">
								<textarea rows="10"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<a href="project.php" class="btn btn-default">Done</a>
								<a href="project.php" class="btn btn-default">Cancel</a>
							</div>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>

</body>



<?php include( "../htmlPages/footer.html"); ?>