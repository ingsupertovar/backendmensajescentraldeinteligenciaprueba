
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Tabla dinamica</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">

	<script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script>
</head><body>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			
		<?php


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


			
			$COR=$_POST['COR'];

             $CO=$_POST['CO'];
					
			//$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}





				
			//$sql = "SELECT Email, Password FROM login WHERE Email='$COR'";				
			//$result = mysqli_query($conn, $sql);
			//while ($columna = mysqli_fetch_array($result))

			$sql1 = "SELECT cedula, descripcion,codigo FROM proceso WHERE codigo='$CO'";
           
            $result1 = mysqli_query($conn, $sql1);
            while ($columna1 = mysqli_fetch_array($result1))


				
			//if (mysqli_num_rows($result) > 0) {				
			//	$row = mysqli_fetch_assoc($result);
              if (mysqli_num_rows($result1) > 0) {	

                   $row1 = mysqli_fetch_assoc($result1);




				
				$subject = "El sistema de Gestión aprobó tu proceso";


				$body = "Tu proceso fue aprobado con el codigo . $CO si quieres puedes descargarlo en el siguiente link  ++++++++++" ;


				

				
				$headers = 'From: ing_gtovar@hotmail.com' . "\r\n" .
				'Reply-To: ing_gtovar@hotmail.com' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();

                //<!-- configurar servidor en xampp -->
				//en Configuracion en php.ini
				//smtp_port=587
                // sendmail_from = **********@hotmail.com
                //   sendmail_path = ""C:\xampp\sendmail\sendmail.exe" -t"

                //Configuracion en sendmail.ini dentro de xampp quitar(;):

                //smtp_server=smtp.live.com
                //smtp_port=587
                //smtp_ssl=TLS
                //auth_username=ing_gtovar@hotmail.com 
               //auth_password=*************
				
				mail($COR, $subject, $body, $headers);		


				
				echo "<div class='alert alert-success alert-dismissible mt-4' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span></button>
				<center><h1>El proceso fue aprobado y enviado correctamente.</h1></center>
				<center><a class='btn btn-outline-primary' href='/t01/index.php' role='button'>REGRESAR AL ÁREA DE APROBACIÓN</a></div>";

header("Location: /t01/gnrdocument.html");


		

			} else {
				echo 

"<center><h1>Lo siento, Este correo no se encuentra registrado</h1></center>
				<center><a class='btn btn-outline-primary' href='http://www.localhost/loginmastervs/logueo.php' role='button'>Intentalo Nuevamente</a></div>";



			}
			
			?>
		</div>
	</div>
</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</body>
</html>