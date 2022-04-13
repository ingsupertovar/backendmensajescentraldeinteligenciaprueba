

function agregardatos(cedula,codigo,correo,descripcion){

   cadena="nombre=" + cedula + "&apellido=" + codigo + "&email=" + correo + "&clave=" + descripcion;
	
	$.ajax({
		type:"POST",
		url:"usuarios",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				 //$('#buscador').load('componentes/buscador.php');
				alertify.success("agregado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}



function agregaform(datos){

	d=datos.split('||');

	$('#idpersona1').val(d[0]);
	$('#cedulau').val(d[1]);
	$('#codigou').val(d[2]);
	$('#correou').val(d[3]);
	$('#descripcionu').val(d[4]);
	$('#departamentou').val(d[5]);
	$('#municipiou').val(d[6]);
	
}


function agregaform1(datos){

	d=datos.split('||');

	
$('#idpersona11').val(d[0]);
	$('#cedulauu').val(d[1]);
	$('#codigouu').val(d[2]);
	$('#correouu').val(d[3]);
	$('#descripcionuu').val(d[4]);
	
	
	
}



function preguntarSiNo(id){
	alertify.confirm('Eliminar Datos', '�Esta seguro de eliminar este registro?', 
					function(){ eliminarDatos(id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"php/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tabla.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}



function actualizaDatos(){


	

	cadena= "id=" + id + "&cedula=" + cedula + "&codigo=" + codigo + "&correo=" + correo + "&descripcion=" + descripcion + "&departamento=" + departamento + "&municipio=" + municipio;	

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}



function actualizaDatos1(){


	

	cadena= "id=" + id + "&cedula=" + cedula + "&codigo=" + codigo + "&correo=" + correo + "&descripcion=" + descripcion + "&departamento=" + departamento + "&municipio=" + municipio;	

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos1.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}


