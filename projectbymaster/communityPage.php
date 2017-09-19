<!DOCTYPE html>


<?php include("../htmlPages/header.html"); ?>

<main class="mainWrapper">
  <body ng-controller="CommunityController">
  
    <div class="col-md-12">
      <div class="container communityBackground">
          <h1>Community to discuss a project</h1>
      </div>
    </div> 

    <div class="container-fluid">

      <!--<div class="navigation">
        <ul class="nav nav-pills">
          <li class="active"><a href="communityPage.php">Community</a></li>
          <li><a href="projectsListPage.php">Projects</a></li>
        </ul>
      </div>-->

      <div class="row" style="padding-top:30px">

        <div class="col-md-10">
          <!--Body content-->
          <ul class = "communities">
            <div class = "comPostNav">
              <span>PostTitle</span>
              <span>PostAuthor</span>
              <span>PostDate</span>
              <span>PostReply</span>
              <span>PostFinalComments</span>
            </div>

            <li ng-repeat="post in posts | filter:query" class="thumbnail">
              <span class="postTitle"><a ng-href="postsPage.php" >{{post.postTitle}}</a></span>
              <span class="postAuthor">&copy;{{post.author}}</span>
              <span class="postDate">{{post.date}}</span>
              <span class="postReply">{{post.reply}}</span>
              <span class="postFinalComments">{{post.finalComments}}</span>
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
