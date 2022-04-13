$(document).ready(function() {
   actualizarmail();

  });


  //esta funcion es para devolver el email con el token
  function actualizarmail()   {
document.getElementById('demo10') = localStorage.email;

  }
  
  function headers(){
return{

    'Accept': 'application/json',
    'Content-Type': 'application/json',
    'Authorization': localStorage.token
  }
  }



  async function registrarUsuario() {
   let datos = {};
   datos.fecha = document.getElementById('txtFecha').value;
   datos.agente = document.getElementById('txtAgente').value;
   datos.idinteraccion = document.getElementById('txtIdinteraccion').value;
   datos.ttipificacion = document.getElementById('txtTipificacion').value;
   
  
  
  
  
  
   const request = await fetch('tipificacion', {
     method: 'POST',
     headers: {
       'Accept': 'application/json',
       'Content-Type': 'application/json'
     },
     body: JSON.stringify(datos)
   });
   alert("la tipificacion fue guardada con exito");
  
   window.location.href = ''
  
  }