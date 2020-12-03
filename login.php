<?php

include("connect.php");

	session_start();
	if (isset($_POST['username'])  && isset($_POST['password']))
	{
		$Username = $_POST ['username'];
		
		$Password = $_POST ['password'];
 
	 $login = "SELECT * FROM tbuser where username='$Username' and password='$Password'";
	 $check = mysqli_fetch_array(mysqli_query($con,$login));
	
	if($check > 0){
	$response["suksess"]  = 1;
	$response["message"]  = "berhasil";
	$response["id"] = $check["id"];
	$response["role"] = $check["roleuser"];
	$response["ktp"] = $check["noktp"];
	$response["hp"] = $check["nohp"];
	$response["email"] = $check["email"];
	$_SESSION['id'] = $check["id"];

	
	} else {
	$response["suksess"]  = 0;	
	$response["message"]  = "tidak berhasil";
	}

	echo json_encode($response);
	}
mysqli_close($con)
?>

	