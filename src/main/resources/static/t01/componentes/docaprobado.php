
<?php 
	
  if (isset($_GET["boton"]))
    {

    
    $COR=$_GET['COR'];
 
  }
  

	session_start();
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

 ?>
<div class="row">

 	<form action="aprobacion.php" method="post">


<div class="modal fade" id="aprobar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">



        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Está seguro de Aprobar este Poceso? al aprobarlo se envía un mail de notificación a este correo</h4>
      </div>
      <div class="modal-body">
          <input type="text" hidden="" id="idpersona11" name="">
          <label>cedula</label>
          <input type="text" name="CC" id="cedulauu" class="form-control input-sm">
          <label>Codigo</label>
          <input type="text" name="CO" id="codigouu" class="form-control input-sm">
           <label>Correo</label>
          
          <input type="text" name="COR" id="correouu" class="form-control input-sm">
          <label>Descripción</label>
          
          <input type="text" name="DES" id="descripcionuu" class="form-control input-sm">
         
      </div>
      <div class="modal-footer">
      
        <button type="submit" name="boton" class="btn btn-warning" id="alerta" >Aprobar proceso</button>
        
        </form>
      </div>
    </div>
  </div>
</div>

	<div class="col-sm-12">
	<h2>Tabla dinamica facultad autodidacta</h2>
		<table class="table table-hover table-condensed table-bordered">
		<caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nuevo 
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>
			<tr>
				<td>Cedula</td>	
				<td>Codigo</td>
				<td>Correo</td>
				<td>Descripción</td>
				<td>Departamento</td>
				<td>Municipio</td>
				<td>Editar</td>
				<td>Eliminar</td>
				<td>Aprobar</td>

			</tr>





			<?php 

			if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
						$sql="SELECT id,cedula,codigo,correo,descripcion,departamento,municipio    
						from proceso where id='$idp'";
					}else{
						$sql="SELECT id,cedula,codigo,correo,descripcion,departamento,municipio  
						from proceso";
					}
				}else{
					$sql="SELECT id,cedula,codigo,correo,descripcion,departamento,municipio 
						from proceso";
				}


				$result=mysqli_query($conn,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
			   	           $ver[3]."||". 
						   $ver[4]."||".
						   $ver[5]."||".
						   $ver[6];


			 ?>

			

			<tr>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td><?php echo $ver[5] ?></td>
				<td><?php echo $ver[6] ?></td>
				<td>

<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
						
					</button>
				</td>
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove" 
					onclick="preguntarSiNo('<?php echo $ver[0] ?>')">
						
					</button>
				</td>

				<td>
					  
					<button class="btn btn-danger glyphicon glyphicon-ok"  data-toggle="modal" data-target="#aprobar"  onclick="agregaform1('<?php echo $datos ?>')">
					</button>
							
				</td>
			</tr>
			<?php 
		}
		

			 ?>


		</table>
	</div>
</div>





