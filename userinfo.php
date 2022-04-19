<?php 	

$con = mysqli_connect('localhost', 'root', '', 'mine');

if($con){

	echo "connection successful";
} else{

	echo "No connection";
}

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];


$query = "INSERT into tech (user, email, mobile, comment) VALUES ('$user', '$email', '$mobile', '$comment')";

mysqli_query($con, $query);
header('location:index.html');
 ?>