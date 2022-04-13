const dbParam2 = JSON.stringify({table:"customers",limit:20});
const xmlhttp2 = new XMLHttpRequest();
xmlhttp2.onload = function() {
  const myObj2 = JSON.parse(this.responseText);


  let text2 = "<table border='1'>"
  for (let x2 in myObj2) {

   

    //<button onclick="eliminarUsuario('+ myObj[x].id +')">eliminar1</button>
//let eliminarBoton = '<button onclick="eliminarUsuario('+ myObj[x].id +')">eliminar</button>';

    text2 += "<tr><td>" + myObj2[x2].id + "</td><td>" + myObj2[x2].nombre + "</td><td>" + myObj2[x2].apellido + "</td><td>" + myObj2[x2].email + "</td><td>" + myObj2[x2].telefono + "</td> <td> +  + </td> </tr>";
  
}
  text2 += "</table>"    
  document.getElementById("demo4").innerHTML = text2;
}
xmlhttp2.open("GET", "usuarios");
xmlhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp2.send("x2=" + dbParam2);




var formulario1 = document.getElementById('formulario');

formulario1.addEventListener('submit', function(e){

    e.preventDefault()
        console.log('clic en el boton')
   
    var datos = new FormData(formulario)

    datos.nombre = document.getElementById('txtNombre').value;
    datos.apellido = document.getElementById('txtApellido').value;
    datos.email = document.getElementById('txtEmail').value;
    datos.password = document.getElementById('txtPassword').value;

    let repetirPassword = document.getElementById('txtRepetirPassword').value;

    if (repetirPassword != datos.password) {
      alert('La contraseña que escribiste es diferente.');
      return;
    }
    
    


    fetch('usuarios',{ 
        
    method: 'POST', 
    body: datos   
})
      .then( response => response.json() )
      .then( data => {
        console.log(data)
      })

    })


    
    $(document).ready(function() {
        // on ready
     });
     
     
     async function registrarUsuario() {
       let datos = {};
       datos.nombre = document.getElementById('txtNombre').value;
       datos.apellido = document.getElementById('txtApellido').value;
       datos.email = document.getElementById('txtEmail').value;
       datos.password = document.getElementById('txtPassword').value;
     
       let repetirPassword = document.getElementById('txtRepetirPassword').value;
     
       if (repetirPassword != datos.password) {
         alert('La contraseña que escribiste es diferente.');
         return;
       }
     
       const request = await fetch('usuarios', {
         method: 'POST',
         headers: {
           'Accept': 'application/json',
           'Content-Type': 'application/json'
         },
         body: JSON.stringify(datos)
       });
       alert("La cuenta fue creada con exito!");
       window.location.href = 'login.html'
     
     }