
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

	$sql="DELETE from proceso where id='$id'";
	echo $result=mysqli_query($conn,$sql);
 ?>