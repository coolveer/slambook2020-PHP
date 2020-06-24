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

<div class="container">
	<!-- image -->
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<?php 
	if (isset($_SESSION['id'])){

		include './includs/conn.php';
		$sql = "SELECT * FROM post WHERE pid = {$_GET['id']} ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
    		// output data of each row
    		while($row = mysqli_fetch_assoc($result)) {
        	echo '
    		// html starts here 

        			<div class="container">



			<div class="card" style="width: 18rem;">
	  			<img src="'.$row["img"].'" class="card-img-top" alt="...">
			</div>
			<div class="col-md-4"></div>
			</div> <br>
			<!-- data of the slambook -->
			<div class="card">
  				<div class="card-body">
    				<h5>I am : </h5>'.$row["name"].'
  				</div>
			</div><br>
			<!-- just to seprate -->
			<div class="card">
  				<div class="card-body">
    				<h5>I call you as: </h5>'.$row["nik"].'
  				</div>
			</div><br>
			<!-- just to seprate -->
			<div class="card">
  				<div class="card-body">
    				<h5>I am your: </h5>'.$row["rlan"].'
  				</div>
			</div><br>
			<!-- just to seprate -->
			<div class="card">
  				<div class="card-body">
    				<h5>you can contect me at: </h5>'.$row["contect"].'
  				</div>
			</div><br>
			<!-- just to seprate -->
			<div class="card">
  				<div class="card-body">
    				<h5>Things i like about you: </h5>'.$row["olike"].'
  				</div>
			</div><br>
			<!-- just to seprate -->
			<div class="card">
  				<div class="card-body">
    				<h5>Things i dont like about you: </h5>'.$row["dlike"].'
  				</div>
			</div><br>
			<!-- just to seprate -->
			<div class="card">
  				<div class="card-body">
    				<h5>If i have supernatural power of invisibility for one day I will: </h5>'.$row["invisi"].'
  				</div>
			</div><br>
			<!-- just to seprate -->
			<div class="card">
  				<div class="card-body">
    				<h5>A question i have never asked you: </h5>'.$row["ask"].'
  				</div>
			</div><br>
			<!-- just to seprate -->
			<div class="card">
  				<div class="card-body">
    				<h5>The most memorable time/thing about you is: </h5>'.$row["memorable"].'
  				</div>
			</div><br>
			<!-- just to seprate -->
			<div class="card">
  				<div class="card-body">
    				<h5>I : </h5>'.$row["i"].'
  				</div>
			</div><br>
		</div>




    		// html ends here
        	';
   			}
		} 
		else {
    		echo "0 results";
		}

		
	


		
	} 
	else{
		header('Location: ./index.php?login=1');
	}
?>











<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./assets/js/script.js"></script>
</body>
</html>