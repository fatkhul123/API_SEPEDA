<?php
include("connect.php");

$email = $_POST['email'];
$username = $_POST['username'];
$nohp = $_POST['nohp'];
$noktp = $_POST['noktp'];
$alamat = $_POST['alamat'];
	$sql = "INSERT INTO tbsepeda ( email, username, nohp, noktp, alamat)  VALUES ('$email', '$username', '$nohp', '$noktp', '$alamat')";
	$json["hasil"]=array();
    if($con->query($sql) === TRUE) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
	}
	echo json_encode($json);
?>