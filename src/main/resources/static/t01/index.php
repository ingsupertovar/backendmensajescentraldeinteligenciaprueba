<?php 
  session_start();

  unset($_SESSION['consulta']);

 ?>

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
</head>
<body>


  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h2 class="display-4 font-italic"><font style="center-align: inherit;"><font style="vertical-align: inherit;">SISTEMA DE GESTIÓN</font></font></h2>
      <p class="lead my-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ingreso al sistema de gestión</font></font></p>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></a></p>
    </div>
  

	<div class="container">
    <div id="buscador"></div> 
		<div id="tabla"></div>




	</div>

	<!-- Modal para registros nuevos -->


<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega nueva persona</h4>
      </div>
      <div class="modal-body">
        	<label>Cedula</label>
        	<input type="text" name="cel" id="cedula" class="form-control input-sm">
        	<label>Codigo</label>
          <input type="text" name="" id="codigo" class="form-control input-sm">
          <label>Correo</label>
          <input type="text" name="COR" id="correo" class="form-control input-sm">
        	<label>Descripción</label>
        	<input type="text" name="" id="descripcion" class="form-control input-sm">
        	<label>Departamento</label>
        	<input type="text" name="" id="departamento" class="form-control input-sm">
          <label>Municipio</label>
          <input type="text" name="" id="municipio" class="form-control input-sm">


      </div>
      <div class="modal-footer">


        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
        Agregar
        </button>
       
      </div>
    </div>
  </div>
</div>



<!-- Modal para edicion de datos -->
<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">
      		<input type="text" hidden="" id="idpersona1" name="">
        	<label>cedula</label>
        	<input type="text" name="" id="cedulau" class="form-control input-sm">
        	<label>Codigo</label>
        	<input type="text" name="" id="codigou" class="form-control input-sm">
        	 <label>Correo</label>
          <input type="text" name="COR" id="correou" class="form-control input-sm">
          <label>Descripcion</label>
        	<input type="text" name="" id="descripcionu" class="form-control input-sm">
        	<label>Departamento</label>
        	<input type="text" name="" id="departamentou" class="form-control input-sm">
          <label>Municipio</label>
          <input type="text" name="" id="municipiou" class="form-control input-sm">
      </div>
      
      <div class="modal-footer">    
        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">
        Actualizar</button>

         
                 
         
      </div>
    </div>
  </div>
</div>

<center><a class='btn btn-outline-primary' href='salir.php' role='button'>SALIR</a></div>






</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla.php');
    $('#buscador').load('componentes/buscador.php');
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
          cedula=  $('#cedula').val();
          codigo=  $('#codigo').val();
          correo=  $('#correo').val();
          descripcion=  $('#descripcion').val();
          departamento=  $('#departamento').val();
          municipio=  $('#municipio').val();

            agregardatos(cedula,codigo,correo,descripcion,departamento,municipio);
        });



  $('#actualizadatos').click(function(){

  id=$('#idpersona1').val();
  cedula=$('#cedulau').val();
  codigo=$('#codigou').val();
  correo=$('#correou').val();
  descripcion=$('#descripcionu').val();
  departamento=$('#departamentou').val();
  municipio=$('#municipiou').val();

         actualizaDatos(cedula,codigo,correo,descripcion,departamento,municipio);
        });



        $('#actualizadatos1').click(function(){

  id=$('#idpersona11').val();
  cedula=$('#cedulauu').val();
  codigo=$('#codigouu').val();
  correo=$('#correouu').val();
  descripcion=$('#descripcionuu').val();
  departamento=$('#departamentouu').val();
  municipio=$('#municipiouu').val();

         actualizaDatos1(cedula,codigo,correo,descripcion,departamento,municipio);
        });




    });



   


</script>



