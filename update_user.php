<?php
include("connect.php");
$json["STATUS"] = array();
$json["MESSAGE"] = array();
  $email = $_POST['email'];
  $username = $_POST['username'];
  $nohp = $_POST['nohp'];
  $noktp = $_POST['noktp'];
  $alamat = $_POST['alamat'];
  $id = $_POST['id'];
 $sql = "UPDATE tbuser set email = '$email',username = '$username',nohp = '$nohp',noktp = '$noktp',alamat = '$alamat' where id = $ID";
 if($con->query($sql) === TRUE) {
    $json["hasil"]["respon"]=true;
}else{
    $json["hasil"]["respon"]=false;
}
echo json_encode($json);
?>