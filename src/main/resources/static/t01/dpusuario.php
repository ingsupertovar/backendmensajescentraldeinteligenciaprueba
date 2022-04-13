<?php
  session_start();
 
$servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $dbname = "administrativa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("CONEXIÒN FALLIDA: " . $conn->connect_error);
} 
      
      if (!$conn) {
        die("CONEXIÒN FALLIDA: " . mysqli_connect_error());
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
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



<?php
  session_start();
 

    
      
$result = mysqli_query($conn, "SELECT Email, Password, Name FROM loginusuario");
      
    
      $row = mysqli_fetch_assoc($result);
      
    
        echo 
      
        $_SESSION['proceso'] = true;
        $_SESSION['name'] = $row['Name'];
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ;   
        $nom = $row['Name'];


echo 


"<div class='alert alert-success mt-4' role='alert'><strong>BIENVENIDO AL SISTEMA DE GESTIÓN</strong> $row[Name]
  
        <center><a class='btn btn-outline-primary' href='salir.php' role='button'>SALIR</a></div>";


?>



<script language="javascript">
$(document).ready(function(){
    $("#marca").on('change', function () {
        $("#marca option:selected").each(function () {
            elegido=$(this).val();
            $.post("http://www.localhost/loginmastervs/modelos.php", { elegido: elegido }, function(data){
                $("#modelo").html(data);
            });     
        });
   });
});
</script>



</head>
<body>

  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic"><font style="center-align: inherit;"><font style="vertical-align: inherit;">Sistema de Gestión</font></font></h1>
      <p class="lead my-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></p>

<div class="container">
  

   <form method="post" action="http://www.localhost/loginmastervs/registroproceso.php" method="POST">

    

<div class="form-group"> <!-- Full Name -->
        <label for="full_name_id" class="control-label">CEDULA</label>
        <input type="text" class="form-control" id="full_name_id" name="CC" placeholder="">
    </div> 

<div class="form-group"> <!-- Full Name -->
        <label for="full_name_id" class="control-label">CODIGO</label>
        <input type="text" class="form-control" id="full_name_id" name="NP" placeholder="">
    </div> 


 <div class="form-group"> <!-- Full Name -->
        <label for="full_name_id" class="control-label">CORREO</label>
        <input type="text" class="form-control" id="full_name_id" name="COR" placeholder="Escibe tu correo">
    </div>    


<!-- Mensaje-->
<div class="form-group">
   <label for="full_name_id" class="control-label">DESCRIPCIÓN</label>
<span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
<div class="col-md-8">
<textarea class="form-control" id="message" name="MSJ" placeholder="Ingrese la descripción del proceso" rows="7"></textarea>








    

    <div class="form-group form-check">
      <label class="form-check-label">
       
      </label>
    </div>
    <button type="submit" name="boton" class="btn btn-primary">ENVIAR</button>
  </form>
</div>

</body>
</html>