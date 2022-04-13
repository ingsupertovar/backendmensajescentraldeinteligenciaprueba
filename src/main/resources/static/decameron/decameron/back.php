<?php
 



//Configuracion de la conexion a base de datos
    $servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "tiendavirtual";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

} 


 

    //echo $var

    $CC=$_POST['nombre'];
    $NP=$_POST['ciudad'];
    $COR=$_POST['direccion'];
    $MSJ=$_POST['nit'];
   



//$NP = bin2hex(random_bytes(2));

$sql = "INSERT INTO proceso (cedula, codigo, correo, Descripcion)
VALUES ('$CC','$NP','$COR','$MSJ')";

if ($conn->query($sql) === TRUE) {
    
    echo json_decode ('muy bien');



} else {
    echo json_decode ('no se guardaron');
}

$conn->close();

?>
