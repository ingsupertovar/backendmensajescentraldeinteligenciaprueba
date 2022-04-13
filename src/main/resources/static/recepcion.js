const dbParam = JSON.stringify({table:"customers",limit:20});
const xmlhttp = new XMLHttpRequest();
xmlhttp.onload = function() {
  const myObj = JSON.parse(this.responseText);


  let text = "<table border='1'>"
  for (let x in myObj) {

   

    //<button onclick="eliminarUsuario('+ myObj[x].id +')">eliminar1</button>
let eliminarBoton = '<button onclick="eliminarUsuario('+ myObj[x].id +')">eliminar</button>';

    text += "<tr><td>" + myObj[x].id + "</td><td>" + myObj[x].fecha + "</td><td>" + myObj[x].agente + "</td><td>" + myObj[x].idinteraccion + "</td><td>" + myObj[x].ttipificacion + "</td>  </tr>";
  
}
  text += "</table>"    
  document.getElementById("demo3").innerHTML = text;
}
xmlhttp.open("GET", "tipificacion/");
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.send("x=" + dbParam);