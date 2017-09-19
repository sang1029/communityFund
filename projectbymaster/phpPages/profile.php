<?php include("../htmlPages/header.php"); ?>

    <body>
        
        <!--INFO SECTION-->
        <div class="container" style="margin-top:90px;">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#userInfo">User Info</a></li>
                <li><a data-toggle="tab" href="#projects">Projects</a></li>
                <li><a href="#sectionC" data-toggle="tab">Messages</a></li>
                <!--<li><a href="#" data-toggle="tab">Others</a></li>-->
            </ul>
        
        
            <div class="tab-content">
                <div id="userInfo" class="tab-pane active">
                    <br>
                    <div class="row">
                        <div class="col-md-8">
                            <h1>About Me:</h1>
								<div class="well">
								Name:<br>
								Reputation:<br>
								Interest:<br>
								Current Project:<br>
								</div>
                            <div class="well">

                            Shelly has been working at Victoria College's Registrar's 
                            Office for the past 12 years (Mon-Fri, from 8:30 to 4). She 
                                lives in midtown Toronto, and usually takes the subway to 
                                work. She uses a computer all day at work, but she still 
                                shies away from the social web. Outside of work, Shelly 
                                enjoys Yoga at the gym, painting classes, and live Jazz. 
                                Shelly holds a B.A in Philosophy, and M.A in Fine Arts, 
                                both from UofT. She has been married for 22 years to 
                                Sam, who works in Finance. They have two girls, one 
                                starting her 2nd year at Western University, and the other 
                                in her senior year of high-school.
                            
                            </div>

                        </div>
                        <div class="col-md-4">
                            
                            <img src="smile.png" width="100%" height="250"><br><br><br>
                            <button type="button" class="btn btn-block">Change Picture</button>
                            <a href="userprofileedit.php" class="btn btn-block">Edit Profile</a>
                        </div>
                        </div>
                    <!--<button type="button" class="btn btn-default">Edit</button>-->
                    <!--<a href="project.html" class="btn btn-default" role="button">Edit</a>-->
                </div>
                <div id="projects" class="tab-pane">
                    <h1>Projects Started:</h1>
                    <div class="well">
                        Current Project Status:<br>
                        --Money donated:<br>
                        --how many people donated:<br>
                        --comments:<br>
                    </div>
					<h1>Projects Funding:</h1>
					 <div class="well">
                        Current Project Status:<br>
                        --Money donated:<br>
                        --how many people donated:<br>
                        --comments:<br>
                    </div>
                    <button type="button" class="btn btn-block">Create Project</button>
                </div>
                <div id="sectionC" class="tab-pane">
                    <h3>SECTION C</h3>
                    <p>
                        New Messages!
                    </p>                
                </div>
            </div>
            <hr>
        </div>
    </body>

<?php include("../htmlPages/footer.html"); ?>


