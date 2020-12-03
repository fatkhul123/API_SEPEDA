<?php
include("connect.php");

$jenis = $_POST['jenis'];
$merk = $_POST['merk'];
$warna = $_POST['warna'];
$hargasewa = $_POST['hargasewa'];
$gambar = $_POST['gambar'];
	$sql = "INSERT INTO tbsepeda ( jenis, merk, warna, hargasewa, gambar)  VALUES ('$jenis', '$merk', '$warna,'$hargasewa','$gambar)";
	$json["hasil"]=array();
    if($con->query($sql) === TRUE) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
	}
	echo json_encode($json);
?>