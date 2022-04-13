const dbParam = JSON.stringify({table:"customers",limit:20});
const xmlhttp = new XMLHttpRequest();
xmlhttp.onload = function() {
  const myObj = JSON.parse(this.responseText);


  let text = "<table border='1'>"
  for (let x in myObj) {

   

    //<button onclick="eliminarUsuario('+ myObj[x].id +')">eliminar1</button>
let eliminarBoton = '<button onclick="eliminarUsuario('+ myObj[x].id +')">eliminar</button>';

    text += "<tr><td>" + myObj[x].id + "</td><td>" + myObj[x].nombre + "</td><td>" + myObj[x].apellido + "</td><td>" + myObj[x].email + "</td><td>" + myObj[x].telefono + "</td> <td> +  + </td> </tr>";
  
}
  text += "</table>"    
  document.getElementById("demo3").innerHTML = text;
}
xmlhttp.open("GET", "usuarios");
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.send("x=" + dbParam);