  
<main class="mainWrapper">
<body ng-controller="CommunityController">

<div class="container" style="margin-top:90px;">
		<div class="container">
			<h1 class="title text-center"> Create your Project </h1>
            <form action="" method="post" role="form">
                <div class="col-md-6 col-md-offset-3">
                    <div class="form-group">
                        <label for="ProjectName">Project Name</label>
                        <div class="input-group">
							<span class="input-group-addon"></span>
                            <input type="text" class="form-control" name="name" id="name" required>
                            
                        </div>
                    </div>

                    
                    <div class="form-group">
						<label for="ProjectDescription">Describe your project:</label>
                        <div class="input-group">
							<span class="input-group-addon"></span>
                            <textarea name="description" id="description" class="form-control" rows="6" required></textarea>
                        </div>
                    </div>
					<div class="form-group">
						<label for="ProjectGoal">What is your goal to fund?</label>
                        <div class="input-group">
							<span class="input-group-addon"></span>
                            <input type="number" name="goal" id="goal" class="form-control" required>
                            
                        </div>
                    </div>
					<div class="form-group">        
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-success pull-right">Submit</button>
						</div>
					</div>

			</div>        
		</div>



</body>

</main>	