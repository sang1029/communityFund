<!doctype html>


<main class="mainWrapper">
<body ng-controller="CommunityController">

<div class="col-md-12">
      <div class="container postBackground">
          <h1>Welcome to make comments!</h1>
      </div>
    </div>

<div class="container">
<div ng-repeat="post in posts | filter:query" ng-show="{{post.text}}">
	<h2>{{post.postTitle}}</h2>
	<p>{{post.text}}</p>
</div>



<form  class="commentBox" action="" method="post">
<label for="title"> Title: <br><input type='title' name="title" id="title"></label><br>
<label for="post_content"> Post Content: <br><textarea  cols="60" rows="5" type="post_content" name="post_content" id="post_content"></textarea></label><br>
<button type="submit" class="btn btn-success pull-right">Submit</button>
</form>

</div>

</div>
</body>
</main>
