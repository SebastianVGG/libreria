
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
 <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "libreria");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


// Escape user inputs for security
$nombre = mysqli_real_escape_string($link, $_REQUEST['login_nombre']);
$apellidos = mysqli_real_escape_string($link, $_REQUEST['login_apellidos']);
$correo = mysqli_real_escape_string($link, $_REQUEST['login_correo']);
$password = mysqli_real_escape_string($link, $_REQUEST['login_password']);

 


$sql = "INSERT INTO cliente (nombre, apellidos, correo, password) VALUES ('$nombre','$apellidos', '$correo', '$password')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

?>

 </body>
 </html>
