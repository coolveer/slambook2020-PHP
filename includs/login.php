<?php
include './conn.php';
session_start();
$email = trim(strip_tags($_POST['email']));
$pwd = trim(strip_tags($_POST['pwd']));

$query = "SELECT * FROM users WHERE email='$email'
and password='$pwd'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result);

if ($rows == 1) {
	while ($res = mysqli_fetch_array($result)) {
	$_SESSION["id"] = $res['id'];
	echo $res['id'];
	header('Location: ../entry.php');
	}
	


}else{
	header('Location: ../index.php?pwd=1');
}


?>