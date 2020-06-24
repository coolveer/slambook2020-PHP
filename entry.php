<?php
session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Slambook 2020</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Ma+Shan+Zheng&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<!-- nav bar  -->
<nav class="navbar navbar-light bg-light fixed-top">
  <span class="navbar-brand mb-0 h1">Slambook 2020</span>
  logout:-
  <span >
  	<a href="./includs/logout.php">
  		<i style="color: red; font-size: 20px" class="fa fa-sign-out" aria-hidden="true"></i>
  	</a>
  </span>
   		share :-
		<a href="https://api.whatsapp.com/send?text=  " target="_blank">
			<span style="color: green; font-size: 25px">
				<i class="fa fa-whatsapp" aria-hidden="true"></i>
			</span> 
		</a>
	<a href="https://www.facebook.com/sharer/sharer.php?u=google.com" target="_blank">	
	   <span style="color: blue; font-size: 25px">
	   	<i class="fa fa-facebook-official" aria-hidden="true"></i>
	   </span>
	</a>
   
</nav> <br><br> <br>

<?php 
	if (isset($_SESSION['id'])){

		include './includs/conn.php';
		$sql = "SELECT * FROM post WHERE id = {$_SESSION['id']} ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
    		// output data of each row
    		while($row = mysqli_fetch_assoc($result)) {
        	echo '
        	<div class="container">
				<!-- cards -->
				<a href="./slam.php?id='.$row["pid"].'">
					<div class="card" style="width: 18rem;">
			  			<img src="'.$row["img"].'" class="card-img-top" alt="...">
			  			<div class="card-body">
			    			<p class="card-text">'.$row["name"].'</p>
			  			</div>
					</div>
				</a> <br> <br>
				<!-- cards other -->
			</div>
        	';
   			}
		} 
		

		
	


		
	} 
	else{
		header('Location: ./index.php?login=1');
	}
?>
<div class="card">
  <div class="card-body">
    <p>share your slambook of year 2020 so that your friends/loved-once fill it and share there love for you.share by a click with share buttons above.</p>
     <hr>
    <p>or copy the link below and send it to your friends/loved-once</p>
    <h5>http://veer.com/fill.php?id=<?php echo $_SESSION['id']   ?></h5>
  </div>
</div>
<!-- $row["id"] -->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./assets/js/script.js"></script>
</body>
</html>