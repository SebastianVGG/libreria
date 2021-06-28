<?php 

session_start();
if(!isset($_SESSION['correo']))
{
  $sesion = '';
  $sesion.= '<h2>Sesión no iniciada </h2><a href="login.php"><button class="btn btn-info btn_logout" type="submit"> Iniciar sesión </button></a>';
  echo $sesion;
}else{

    include("config.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM carrito WHERE id=$id";
    if (mysqli_query($link, $sql)) {
        $return_arr = array("success" => 1);
        echo json_encode($return_arr);
    }else{
        $return_arr = array("success" => 0);
        echo json_encode($return_arr);
        exit();
    }
}
?>