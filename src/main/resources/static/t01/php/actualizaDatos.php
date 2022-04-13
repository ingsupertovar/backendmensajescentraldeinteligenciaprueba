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
	
	$id=$_POST['id'];
    $ccc=$_POST['cedula'];
	$cc=$_POST['codigo'];
	$COR=$_POST['correo'];
	$ee=$_POST['descripcion'];
	$tt=$_POST['departamento'];
	$mm=$_POST['municipio'];
	

$sql="UPDATE proceso set cedula='$ccc',
								codigo='$cc',
								correo= '$COR',
								descripcion='$ee',
								departamento='$tt',
								municipio='$mm'


				where id='$id'";


	echo $result=mysqli_query($conn,$sql);

 ?>