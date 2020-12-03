<?php
include("connect.php");
$json["STATUS"] = array();
$json["MESSAGE"] = array();
  $jenis = $_POST['jenis'];
  $merk = $_POST['merk'];
  $warna = $_POST['warna'];
  $hargasewa = $_POST['hargasewa'];
  $gambar = $_POST['gambar'];
  $id = $_POST['id'];
 $sql = "UPDATE tbsepeda set jenis = '$jenis',merk = '$merk',warna = '$warna',hargasewa = '$hargasewa',$gambar = gambar  where id = $ID";
 if($con->query($sql) === TRUE) {
    $json["hasil"]["respon"]=true;
}else{
    $json["hasil"]["respon"]=false;
}
echo json_encode($json);
?>