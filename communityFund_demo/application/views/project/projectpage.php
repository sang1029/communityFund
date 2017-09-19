    <body>
        <?php if (isset($this->session->userdata['user_id']))
            $current_user = $this->session->userdata['user_id']; ?>
        <!--CAROUSEL-->
        <div class="carousel slide container " id="myProjectCarousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                <li class="" data-target="#myCarousel" data-slide-to="1"></li>
                <li class="" data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="image1.jpg" alt="random">
                    <div class="carousel-caption">
                        <h1>Project Name</h1>
                        <p>This is image1</p>
                    
                    </div>
                </div>
                <div class="item">
                    <img src="image2.jpg" alt="random">
                    <div class="carousel-caption">
                        <h1>HELLO!</h1>
                        <p>This is image2</p>
                    </div>
                </div>
                <div class = "item">
                    <img src="image3.jpg" alt="random">
                    <div class="carousel-caption">
                        <h1>HELLO!</h1>
                        <p>This is image3</p>
                    </div>
                </div>
            </div>
            <!--
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            -->
        </div>
        
        <!--INFO SECTION-->
        <!--Progressbar excluded for now...
        <div class="container">
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%;">
                60%
                </div>
            </div>
        </div>-->
        <div class="container project-body">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#sectionA">About Project</a></li>
                <li><a data-toggle="tab" href="#sectionB">About initator</a></li>
                <li><a data-toggle="tab" href="#sectionC">Progress</a></li>
                <li><a data-toggle="tab" href="#sectionD">Reviews</a></li>
                <li><a data-toggle="tab" href="#sectionE">Donate</a></li>
            </ul>
            <div class="tab-content">
                <div id="sectionA" class="tab-pane active">
                    <h3>About Project:</h3>
                    <p>
                        <div class="well">
                        <?php echo $userProject->description; ?>
                        </div>
                    </p>
                    <?php if (isset($current_user)){
                        if ($current_user == $userProject->initiator){ ?>
                    <a href="<?= base_url()?>project/projectedit" class="btn btn-default">Edit</a>
                    <?php }} ?>

                </div>
                <div id="sectionB" class="tab-pane">
                    
                    <p>
                        <h3>About Initiator:</h3>
                            <div class="well">

                            UserName: <?= $username?> <br>
                            FirstName: <?= $userProfile->firstname?> <br>
                            lastName: <?= $userProfile->lastname?> <br>
                            Email: <?= $email?> <br>
                            Interest:<?= $userProfile->interest?><br>
                            Location:<?= $userProfile->location?><br>
                            Current Project:<br>
                            </div>
                    </p>
                    <?php if (isset($current_user)){
                        if ($current_user == $userProject->initiator){ ?>
                    <a href="<?= base_url()?>user/edit" class="btn btn-default">Edit</a>
                    <?php } } ?>

                </div>
                <div id="sectionC" class="tab-pane">
                    <h3>Funding Progress:</h3>
                    <p>
                        <div class="well">
                            Funded: <?php echo $userProject->funded; ?><br>
                            Goal: <?php echo $userProject->goal; ?><br>
                        </div>
                    </p>

                    

                </div>
                <div id="sectionD" class="tab-pane">
                    <h3>SECTION D</h3>
                    <p>This is review section</p>
                    <a href="#" class="btn btn-default">Write Review</a>
                </div>
                <div id="sectionE" class="tab-pane">
                    <h3>SECTION E</h3>
                    <p>Fund this Project</p>
                    <a href="funding.php" class="btn btn-default">Donate</a>
                
                </div>
            </div>
            <hr>
        </div>  
    </body>