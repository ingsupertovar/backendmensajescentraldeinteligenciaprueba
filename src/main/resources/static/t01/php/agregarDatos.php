<?php 

	//Configuracion de la conexion a base de datos
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "administrativa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	
	$o=$_POST['cedula'];
	$c=$_POST['codigo'];
	$COR=$_POST['correo'];
	$e=$_POST['descripcion'];
	$t=$_POST['departamento'];
	$m=$_POST['municipio'];
	$COR=$_POST['correo'];

$sql="INSERT into proceso (cedula,codigo,correo,descripcion,departamento,municipio)
								values ('$o','$c','$COR','$e','$t','$m')";
	echo $result=mysqli_query($conn,$sql);

	