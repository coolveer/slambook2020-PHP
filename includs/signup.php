<?php

include './conn.php';


if(isset($_POST['signup'])) { 
	$email = trim(strip_tags($_POST['email']));
	$sql="select * from users where (email='$email');";
	$res=mysqli_query($conn,$sql);
 	$row = mysqli_fetch_assoc($res);
	if($email==$row['email']) // change it to just else
        {
        	echo "string";
            header('Location: ../index.php?email=true');
    }
    else{
            // strip_tags(str) remove tags from the input.
			$name = trim(strip_tags($_POST['name']));
			$email = trim(strip_tags($_POST['email']));
			$pwd = trim(strip_tags($_POST['pwd']));


			$sql = "INSERT INTO `users`( `name`, `email`, `password`) VALUES ('$name','$email','$pwd')";

			mysqli_query($conn, $sql);
			mail($email,"Slambook2020","thank you much for joining slambook 2020");

			header('Location: ../index.php');
    }
}







?>