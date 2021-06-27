<?php
include("../config.php");
session_start();

if (isset($_POST["l_correo"])) {
    $correo = $_POST["l_correo"];
}else{
  $return_arr = array("success" => 0, "err" =>0);
  echo json_encode($return_arr);
  exit();
}

if (isset($_POST["l_password"])) {
    $password = $_POST["l_password"];
}else{
  $return_arr = array("success" => 0, "err" =>0);
  echo json_encode($return_arr);
  exit();
}

$sql = "SELECT * FROM usuarios where correo = '$correo' and pass = '$password'";
$query = $link->query($sql);
if (mysqli_num_rows($query) == 1){

    $row = $query->fetch_assoc();
    $_SESSION['nombre'] = $row['nombre'];
    $_SESSION['apellidos'] = $row['apellidos'];
    $_SESSION['correo'] = $row['correo'];
    $_SESSION['pass'] = $row['pass'];
    $_SESSION['tipo'] = $row['tipo'];
    $_SESSION['url'] = $row['url'];
    $_SESSION['id_'] = $row['id'];
    $return_arr = array("success" => 1, 'info' => $_SESSION['nombre'] );
    echo json_encode($return_arr);

}else{
  $return_arr = array("success" => 0, "err" => 1);
  echo json_encode($return_arr);
}

?>