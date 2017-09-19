<?php include( "../htmlPages/header.php"); ?>

<body class="browse-body">

	<div class="container">
		<h1>Choose a Category</h1>
		<div class="row">
			<div class="row">
				<div class="col-md-3">
					<div class="well">
						<a href="projectsListPage.php?category=<?='Art'?>" class="list-group-item">Art</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="well">
						<a href="projectsListPage.php?category=<?='Fashion'?>" class="list-group-item">Fashion</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="well">
						<a href="projectsListPage.php?category=<?='Film and Movies'?>" class="list-group-item">Film &amp; Movies</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="well">
						<a href="projectsListPage.php?category=<?='Food'?>" class="list-group-item">Food</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="well">
						<a href="projectsListPage.php?category=<?='Food'?>" class="list-group-item">Food</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="well">
						<a href="projectsListPage.php?category=<?='Games'?>" class="list-group-item">Games</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="well">
						<a href="projectsListPage.php?category=<?='Music'?>" class="list-group-item">Music</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="well">
						<a href="projectsListPage.php?category=<?='Photography'?>" class="list-group-item">Photography</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<p><a class="btn btn-lg btn-primary btn-block" href="createProject.php" role="button">Start a Project</a></p>
				</div>
			</div>

		</div>
	</div>
</body>
<?php include( "../htmlPages/footer.html"); ?>