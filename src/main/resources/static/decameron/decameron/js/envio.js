
var formulario1 = document.getElementById('formulario');

formulario1.addEventListener('submit', function(e){

    e.preventDefault()
        console.log('clic en el boton')
   
    var datos = new FormData(formulario)
    
    console.log(datos.get('nombre'))
    console.log(datos.get('ciudad'))
    console.log(datos.get('direccion'))
    //console.log(datos.get('nhabitaciones'))
    console.log(datos.get('nit'))


    fetch('usuario/{id}',{ 
        
    method: 'GET', 
    body: datos   
})
      .then( response => response.json() )
      .then( data => {
        console.log(data)
      })

    })
