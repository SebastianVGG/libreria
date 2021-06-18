<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$nombre = $apellidos = $correo = $password = "";
$nombre_err = $apellidos_err = $correo_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Name

 $nombre = trim($_POST["login_nombre"]);
 $apellidos = trim($_POST["login_apellidos"]);
 $correo = trim($_POST["login_correo"]);
 $password = trim($_POST["login_password"]);
    
    

    
        // Prepare an insert statement
        $sql = "INSERT INTO cliente (nombre, apellidos, correo, password) VALUES (?, ?, ?, ?)";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $nombre, $apellidos, $correo, $password );
            
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                // header("location: login.php");
                echo "OK";
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
?>