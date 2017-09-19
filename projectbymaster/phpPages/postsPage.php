<!doctype html>

<?php include("../htmlPages/header.php"); ?>

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
<label> Name: <br><input type='text' name="name"></label><br>
<label> Message: <br><textarea  cols="60" rows="5" name="mes"></textarea></label><br>
<input type ="submit" name = "post" value="Post">
</form>

<div class="commentShow">
	<?php
	$name = $_POST['name'];
	$text = $_POST['mes'];
	$post = $_POST['post'];

	if($post){
		$write = fopen("com.txt", "a+");
		fwrite($write, "<u><b> $name </b></u><br>$text<br>");
		fclose($write);

		$read = fopen("com.txt", "r+t");
		echo "ALL comments: <br>";

		while (!feof($read)) {
			echo fread($read, 1024);
			# code...
		}
		fclose($read);
	}

	else{

		$read = fopen("com.txt", "r+t");
		echo "ALL comments: <br> ";

		while (!feof($read)) {
			echo fread($read, 1024);
			# code...
		}
		fclose($read);

	}

	?>
</div>

</div>
</body>
</main>


<?php include("../htmlPages/footer.html"); ?>