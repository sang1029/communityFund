
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

								UserName: <?= $username?> <br>
                                FirstName: <?= $userProfile->getFirstname()?> <br>
                                lastName: <?= $userProfile->getLastname()?> <br>
						        Email: <?= $email?> <br>
								Interest:<?= $interest?><br>
                                Location:<?= $location?><br>
	
								</div>
                            <div class="well">
                            Description : <?=$userProfile->getDescription()?>
                            
                            </div>

                        </div>
                        <div class="col-md-4">
                            <a href="<?= base_url()?>user/edit" class="btn btn-block">Edit Profile</a>
                        </div>
                        </div>
                </div>
                
                <div id="projects" class="tab-pane">
                <?php if ($userProject == null){ ?>
                    <h1>My Project:</h1>
                    <div class="well">
                        Current Project Status:<br>
                        No Project.
                    </div>
                    <div>
                        <!-- replace with create project page-->
                        <a style="width:100%;" href="<?= base_url()?>user/projectedit" class="btn btn-primary">Start New Project!</a>
                    </div>
                <?php } else { ?>
                    <h1>My Project:</h1>
                    <div class="well">
                        Current Project Status:<br>
                        --Project title: <?= $userProject->name?><br>
                        --Money donated: <?= $userProject->funded?><br>
                        --How many people donated:<br>
                        --Rating: <br>
                        --Comments:<br>
                    </div>
                    <div>
                        <div class="row col-sm-6">
                            <a style="width:100%;" href="<?= base_url()?>project/projectpage/<?= $pid ?>" class="btn btn-primary">Go to my Project page</a>
                        </div>
                        <div class="row col-sm-6">
                            <a style="width:100%;" href="<?= base_url()?>project/projectedit" class="btn btn-primary">Edit Project</a>
                        </div>
                    </div>
                    
                <?php } ?>
                    
					<h1>Projects Funding:</h1>
                    
					 <div class="well">
                        Current Project Status:<br>
                        --Money donated:<br>
                        --how many people donated:<br>
                        --comments:<br>
                    </div>
                    <a href="<?= base_url()?>project/make_project"><button type="button" class="btn btn-block">Create a new Project</button></a>
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



