<!DOCTYPE html>
<html>
<head>
	<title>Slambook 2020- exiting and funny questions.</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Ma+Shan+Zheng&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<!-- nav bar  -->
<nav class="navbar navbar-light bg-light fixed-top" id="scroll">
  <span class="navbar-brand mb-0 h1">Slambook 2020</span>
</nav> <br><br> <br>
<!-- container -->
<div class="container">
	<h1 class="login text-center"> Fill <span style="color: red">someone</span>'s slambook.</h1>
	<div style="background-color: white">
		<p>"I" refer's here for the person who is filling this slambok</p>
	</div>
	<!-- form starts here -->
		<form class="form-group" method="post" enctype="multipart/form-data" action="<?php echo "./includs/fillit.php?id=".$_GET['id'] ?>">
		<p class="white">I look like :</p>
		<input type="file" class="form-control-file spx" name="image" value="3" >
		<p class="white">I am :</p>
		<input type="text" class="form-control spx" name="name" placeholder="Your name">
		<p class="white">I call you as:</p>
		<input type="text" class="form-control spx" name="nik" placeholder="Nick name of your friend">
		<p class="white">I am your:</p>
		<input type="text" class="form-control spx" name="rlan" placeholder="friend/brother">
		<p class="white">you can contect me at:</p>
		<input type="text" class="form-control spx" name="contect" placeholder="9415xxxxxx/you have one">
		<p class="white">Things i like about you:</p>
		<input type="text" class="form-control spx" name="olike" placeholder="style/behavior/nature etc.">
		<p class="white">Things i dont't like about you:</p>
		<input type="text" class="form-control spx" name="dlike" placeholder="attitude/ego/nature etc.">
		<p class="white">If i have supernatural power of invisibility for one day I will:</p>
		<input type="text" class="form-control spx" name="invisi" placeholder="kill my enemy/rob a bank etc.">
		<p class="white">A question i have never asked you:</p>
		<input type="text" class="form-control spx" name="ask" placeholder="is she your girlfriend? etc.">
		<p class="white">The most memorable time/thing about you is:</p>
		<input type="text" class="form-control spx" name="memorable" placeholder="The day we visited that fort etc.">
		<p class="white">I :</p>
		<input type="text" class="form-control spx" name="i" placeholder="love you/like you/wanna be your bf etc.">
		
		<button class="btn btn-info btn-lg btn-block"  onclick="myFunction()" name="fill" type="submit" id="fill">Fill this</button>

	</form>
<div id="loader_div" class="loader_div">
	</div>
</div>









<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script type="text/javascript" src="./assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>