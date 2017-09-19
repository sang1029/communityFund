<?php include("../htmlPages/header.php"); ?>

<main class="mainWrapper">

<body ng-controller="ProjectController">


  <div class="container projectBackground">
    <!--<div class="container projectBackground">-->
      
      <h1 style="text-align: center">Discover New Ideas</h1>
    <!--</div>-->
  </div>

  <div class="container-fluid" style="padding-top:50px;">

    <!--<div class="navigation">
      <ul class="nav nav-pills">
        <li ><a href="communityPage.php">Community</a></li>
        <li class="active"><a href="projectsListPage.php">Projects</a></li>
      </ul>
    </div>-->

    <div class="row">
      
      <div class="col-md-10">
        <!--Body content-->

        <ul class="projects">
          <li ng-repeat="project in projects | filter:query" class="thumbnail">
            <a href="project.php" class="thumb"><img ng-src="{{project.imageUrl}}"></a>
            <a href="project.php">{{project.name}}</a>
            <p>{{project.description}}</p>
          </li>
        </ul>

      </div>
      
      <div class="col-md-2">
        <!--Sidebar content-->
        Search: <input ng-model="query">
      </div>

    </div>
  </div>

</body>
</main>

<?php include("../htmlPages/footer.html"); ?>