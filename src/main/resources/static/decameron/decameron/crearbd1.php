<?php

if (isset($_GET["boton"]))
  {







$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "decameron1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


// crea una tabla de usuario

// sql to create table
$sql = "CREATE TABLE hoteles1 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
NOMBRE VARCHAR(30),
CIUDAD   VARCHAR(30),
DIRECCION VARCHAR(50),
NUMERO_HABITACIONES VARCHAR(50),
NIT VARCHAR(50)
)";


if ($conn->query($sql) === TRUE) {
    echo "TABLA CREADA SATISFACTORIAMENTE";
} else {
    echo "ERROR EN LA CREACION DE LA TABLA: " . $conn->error;

}

$conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>CREAR BASE DE DATOS Y TABLAS DEL SISTEMA DE GESTIÓN</h2>


<form>
	<button type="submit" name="boton" class="btn btn-primary">ENVIAR</button>

</form>


</div>

</body>
</html>
