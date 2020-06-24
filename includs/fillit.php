<?php 
include './conn.php';

if(isset($_POST['fill'])){

$id = $_GET['id'];
$name = trim(strip_tags($_POST['name']));
$nik = trim(strip_tags($_POST['nik']));
$rlan = trim(strip_tags($_POST['rlan']));
$contect = trim(strip_tags($_POST['contect']));
$olike = trim(strip_tags($_POST['olike']));
$dlike = trim(strip_tags($_POST['dlike']));
$invisi = trim(strip_tags($_POST['invisi']));
$ask = trim(strip_tags($_POST['ask']));
$memorable = trim(strip_tags($_POST['memorable']));
$i = trim(strip_tags($_POST['i']));
	$temp =$_FILES['image']['tmp_name'];
    $file = $_FILES['image']['name'];
    $folder = "./images";
    $fname = rand(10,10000000).$file;
    move_uploaded_file($temp, "$folder/$fname");



$sql = "INSERT INTO `post`( `name`, `nik`, `rlan`,`olike`,`dlike`,`invisi`,`ask`,`memorable`,`i`,`id`,`img`,`contect`) VALUES ('$name','$nik','$rlan','$olike','$dlike','$invisi','$ask','$memorable','$i','$id','$folder/$fname','$contect')";

mysqli_query($conn, $sql);

header('Location: ../thankyou.php');



   

}





?>