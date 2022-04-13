<!doctype html>
<html lang="en">
	<head>		
    	<title>Recuperar Contraseña</title>
    	<!-- Required meta tags -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    	<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
	  <body>
<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    
   <div class="col-md-6 px-0">
      <h2 class="display-4 font-italic"><font style="center-align: inherit;"><font style="vertical-align: inherit;">SISTEMA DE GESTIÓN</font></font></h2>
      <p class="lead my-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></p>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></a></p>
    </div>
  </body>
			
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

					
			//$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
				
			$sql = "SELECT Email, Password FROM login WHERE Email='$COR'";				
			$result = mysqli_query($conn, $sql);


while ($columna = mysqli_fetch_array($result))
				
			if (mysqli_num_rows($result) > 0) {				
				$row = mysqli_fetch_assoc($result);
				
				$subject = "Recuperaciòn de contraseña Sistema De Gestión";


				$body = "Tu contraseña es:" . $row['Password'];
				

				
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
				<center><h1>El correo fue enviado!Revisa tu correo.</h1></center>
				<center><a class='btn btn-outline-primary' href='http://www.localhost/loginmastervs/logueo.php' role='button'>INGRESAR A TU CUENTA</a></div>";
			} else {
				echo //"Lo siento, Este correo no está en la base de datos.";

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
	
</html>