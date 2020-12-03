<?php
include("connect.php");
$json["STATUS"] = array();
$json["MESSAGE"] = array();
$sql = "SELECT * FROM tbuser";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if ($result) {
  $json["STATUS"] = "SUCCESS";
  $json["MESSAGE"] = "SUCCESS";
  if ($count > 0) {
        $json["PAYLOAD"]["DATA"] = [];
    while ($row = mysqli_fetch_array($result)) {
      if ($row['roleuser'] == "customer") {
        $array["ID"] = $row['id'];
        $array["email"] = $row['email'];
        $array["username"] = $row['username'];
        $array["nohp"] = $row['nohp'];
        $array["alamat"] = $row['alamat'];
        $array["noktp"] = $row['noktp'];
        $array["roleuser"] = $row['roleuser'];
        array_push($json["PAYLOAD"]["DATA"], $array);
      }
    }
  } else {
    $json["PAYLOAD"]["DATA"] = "null";
  }
} else {
  $json["STATUS"] = "FAILED";
  $json["MESSAGE"] = mysqli_error($con);
}

echo json_encode($json);
mysqli_close($con);
