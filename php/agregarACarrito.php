<?php 

session_start();
if(!isset($_SESSION['correo']))
{
  $sesion = '';
  $sesion.= '<h2>Sesión no iniciada </h2><a href="login.php"><button class="btn btn-info btn_logout" type="submit"> Iniciar sesión </button></a>';
  echo $sesion;
}else{

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'libreria');

    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if($link === false){
        die("Error". mysqli_connect_error());
    }

    if(isset($_POST["idLib"]) && isset($_POST["titLib"]) && isset($_POST["canti"])){
        if(empty($_POST["idLib"]) || empty($_POST["titLib"]) || empty($_POST["canti"]))
        {
            $estado_p = array("success" => 0);
            echo json_encode($estado_p);
            exit();
        }
        else
        {
            $titLib = $_POST['titLib'];
            $idLib = $_POST["idLib"];
            $idUsu = $_SESSION['id_'];
            $canti = intval($_POST['canti']);
            if($canti < 1){
                $estado_p = array("success" => 2);
                echo json_encode($estado_p);
                exit();
            }else{
                $sqlCon = "SELECT COUNT(*) as contar FROM carrito WHERE id_usuario = $idUsu and id_libro = $idLib;";
                $consul = mysqli_query($link,$sqlCon);
                $mostrarConteo = mysqli_fetch_array($consul);
                if($mostrarConteo['contar'] > 0){
                    $sqltodo = "SELECT * From carrito WHERE id_usuario = $idUsu and id_libro = $idLib;";
                    $result=mysqli_query($link,$sqltodo);
                    $mostrar=mysqli_fetch_array($result);
                    $cantidadFin = $mostrar['cantidad'] + $canti;
                    $sql = "UPDATE carrito SET cantidad = $cantidadFin WHERE id_usuario = $idUsu and id_libro = $idLib;";
                    if(mysqli_query($link, $sql)){
                        $estado_p = array("success" => 1, "TIT" => $titLib, "CANT" => $canti, "CANTFIN" => $cantidadFin);
                        echo json_encode($estado_p);
                        exit();
                    } else{
                        $estado_p = array("success" => 0);
                        echo json_encode($estado_p);
                        exit();
                    }
                }else{
                    $sql = "INSERT INTO carrito (id_usuario, id_libro, cantidad) VALUES ($idUsu,$idLib, $canti);";
                    if(mysqli_query($link, $sql)){
                        $estado_p = array("success" => 1, "TIT" => $titLib, "CANT" => $canti, "CANTFIN" => $canti);
                        echo json_encode($estado_p);
                        exit();
                    } else{
                        $estado_p = array("success" => 0);
                        echo json_encode($estado_p);
                        exit();
                    }
                }
            }
            
            mysqli_close($link);
        }
    }else{
        $estado_p = array("success" => 0);
        echo json_encode($estado_p);
        exit();
    }
}
?>