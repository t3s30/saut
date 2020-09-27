<?php
//Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$db="mosut";
//Check Connection
$conn = new mysqli($servername, $username, $password, $db);
if(!$conn){
 die ("Error on the Connection" . $conn->connect_error);
 //echo "Error de conexion";
}else{
  //echo "Conexion exitosa";
}
?>
