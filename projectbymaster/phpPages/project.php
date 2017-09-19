<?php include("../htmlPages/header.php"); ?>
    <body>
        
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
                <li class="active"><a data-toggle="tab" href="#aboutproject">About Project</a></li>
                <li><a data-toggle="tab" href="#aboutinitiator">About Initiator</a></li>
                <li><a data-toggle="tab" href="#progress">Progress</a></li>
                <li><a data-toggle="tab" href="#reviews">Reviews</a></li>
                <li><a data-toggle="tab" href="#donate">Donate</a></li>
            </ul>
            <div class="tab-content">
                <div id="aboutproject" class="tab-pane active">
                    <h3>About ProjectName</h3>
                    <p>
                        This is where information about the project will be.
                    </p>

                    <a href="projectedit.php" class="btn btn-default">Edit</a>

                </div>
                <div id="aboutinitiator" class="tab-pane">
                    <h3>About the Initiator</h3>
                    <p>
                        This will contain information about the initiator.
                    </p>

                    <a href="initiatoredit.php" class="btn btn-default">Edit</a>

                </div>
                <div id="progress" class="tab-pane">
                    <h3>Progress So Far</h3>
                    <p>
                        This will have updates with regards to the project.
                    </p>

                    <a href="progressedit.php" class="btn btn-default">Edit</a>

                </div>
                <div id="reviews" class="tab-pane">
                    <h3>Reviews</h3>
                    <p>This is where reviews on the project will be shown.</p>
                    <a href="#" class="btn btn-default">Write Review</a>
                </div>
                <div id="donate" class="tab-pane">
                    <h3>Fund this Project</h3>
                    <p>This will show reward levels, and some information about donating.</p>
                    <a href="funding.php" class="btn btn-default">Donate</a>
                
                </div>
            </div>
            <hr>
        </div>  
    </body>
<?php include("../htmlPages/footer.html"); ?>
