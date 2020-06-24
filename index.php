<!DOCTYPE html>
<html>
<head>
	<title>Slambook 2020</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Ma+Shan+Zheng&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">Slambook 2020</span>
</nav>
<div class="container">
	<div class="row">
		<div class="col-1"></div>
		<div class="col-10">
			<?php 
				if(isset($_GET['login'])) {
					echo "<p style='color:white'>you have to login or signup to use the website. </p>";
				}else{
					echo "";
				}

			?>
		<h1 class="text-center login"> Login</h1>
		<form class="form-group" action="./includs/login.php" method="post">
			<input class="form-control" type="email" name="email" placeholder="email" required><br>
			<input class="form-control" type="password" name="pwd" placeholder="password" requied><br>
			<button class="btn btn-info btn-lg btn-block" name="login" type="submit">Login</button>
			<?php 
				if(isset($_GET['pwd'])) {
					echo "<p style='color:white'> email or password incorrect </p>";
				}else{
					echo "";
				}

			?>
		</form>
		<hr>
		<h1 class="text-center login">Signup</h1>
		<form class="form-group" method="post" action="./includs/signup.php" >
			<input class="form-control" type="text" name="name" placeholder="name" required><br>
			<input class="form-control" type="email" name="email" placeholder="email" required><br>
			<?php 
				if(isset($_GET['email'])) {
					echo "<p style='color:white'> email already taken </p>";
				}else{
					echo "";
				}

			?>
			<input class="form-control" type="password" name="pwd" placeholder="password" requied><br>
			<button class="btn btn-info btn-lg btn-block" name="signup" value="1" type="submit">Signup</button>
		</form>
		</div>
		<div class="col-1"></div>
	</div>
	
</div>







<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./assets/js/script.js"></script>
</body>
</html>