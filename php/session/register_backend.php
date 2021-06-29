<?php
include("../config.php");
session_start();

if (isset($_POST["r_nombre"]) && !empty($_POST["r_nombre"]) && !is_numeric($_POST["r_nombre"])) {
    $nombre = $_POST["r_nombre"];
}else{
  $return_arr = array("success" => 0, "err" =>0);
  echo json_encode($return_arr);
  exit();
}
if (isset($_POST["r_apellidos"]) && !empty($_POST["r_apellidos"]) && !is_numeric($_POST["r_apellidos"])) {
    $apellidos = $_POST["r_apellidos"];
}else{
  $return_arr = array("success" => 0, "err" =>0);
  echo json_encode($return_arr);
  exit();
}
if (isset($_POST["r_correo"]) && !empty($_POST["r_correo"]) && !is_numeric($_POST["r_correo"])) {
    $correo = $_POST["r_correo"];
}else{
  $return_arr = array("success" => 0, "err" =>0);
  echo json_encode($return_arr);
  exit();
}
if (isset($_POST["r_password"]) && !empty($_POST["r_password"]) && isset($_POST["r_password1"]) && !empty($_POST["r_password1"])) {
    $pass = $_POST["r_password"];
}else{
  $return_arr = array("success" => 0, "err" =>0);
  echo json_encode($return_arr);
  exit();
}

if ($_POST["r_password"] == $_POST["r_password1"]) {
  $sql = "INSERT INTO usuarios (nombre, apellidos, correo, pass, tipo, url) VALUES ('$nombre','$apellidos', '$correo', '$pass', 'usuario', 'none')";
  if (mysqli_query($link, $sql)){
      $_SESSION['nombre'] = $nombre;
      $_SESSION['apellidos'] = $apellidos;
      $_SESSION['correo'] = $correo;
      $_SESSION['pass'] = $pass;
      $_SESSION['tipo'] = 'usuario';
      $_SESSION['url'] = 'none';
      $_SESSION['id_'] = $link->insert_id;
      $return_arr = array("success" => 1);
      echo json_encode($return_arr);
  
  }else{
    $return_arr = array("success" => 0, "err" => 1);
    echo json_encode($return_arr);
    exit();
  }
}else{
$return_arr = array("success" => 0, "err" =>2);
echo json_encode($return_arr);
exit();
}



?>