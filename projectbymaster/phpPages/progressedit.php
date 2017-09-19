<?php include("../htmlPages/header.php"); ?>
<body>
	<div class="container" style="margin-top:90px;">
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#sectionA">Progress</a></li>
		</ul>
		<div class="tab-content">
			<div id="sectionA" class="tab-pane active">
				<h3>SECTION A</h3>
				<p>
					Edit Here:
				</p>
					<div class="container">

						<form class="form-horizontal" role="form">
							<div class="form-group">
								<label class="control-label col-sm-2">Progress:</label>
								<div class="col-sm-10">          
									<textarea style="width:80%;" rows="10"></textarea>
								</div>
							</div>
							<div class="form-group">        
								<div class="col-sm-offset-2 col-sm-10">
									<a href="project.html" class="btn btn-default">Done</a>
									<a href="project.html" class="btn btn-default">Cancel</a>
								</div>
							</div>
						</form>
					</div>
			</div>
			</div>

		</div>        
</body>
<?php include("../htmlPages/footer.html"); ?>
