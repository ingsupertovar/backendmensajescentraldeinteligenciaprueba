
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
    die("Connection failed: " . $conn->connect_error);
} 

 ?>
<div class="row">
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
						$sql="SELECT id,cedula,codigo,descripcion,departamento,municipio    
						from proceso where id='$idp'";
					}else{
						$sql="SELECT id,cedula,codigo,descripcion,departamento,municipio  
						from proceso";
					}
				}else{
					$sql="SELECT id,cedula,codigo,descripcion,departamento,municipio 
						from proceso";
				}


				$result=mysqli_query($conn,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4]."||".
						   $ver[5];
			 ?>

			

			<tr>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td><?php echo $ver[5] ?></td>
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
					<button class="btn btn-danger glyphicon glyphicon-ok" 
					onclick="preguntarSiNo('<?php echo $ver[0] ?>')">
						
					</button>
				</td>
			</tr>
			<?php 
		}
			 ?>
		</table>
	</div>
</div>