
    $(document).ready(function(){
   // alert("2343");
    cargarUsuarios();
    $('#usuarios').DataTable();

        });


        async function cargarUsuarios() {
            
       
                const respuesta = await fetch('usuarios', {
                  method: 'GET',
                  headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                  }
                });
                const usuarios = await respuesta.json();
              
                console.log(usuarios);
      
                //let usuario = '<tr><td>Id</td><td>German Tovar</td><td>ing_gtovar@yahoo.es</td><td>3162478243</td><td><button type="button" class="btn btn-labeled btn-danger"><span class="btn-label"><i class="fa fa-trash"></i></span>Trash</button></td></tr>';
                //document.querySelector('#usuarios tbody').outerHTML = usuario
                

                let listadoHtml = '';
                for (let usuarios in myObj) {
                    text += "<tr><td>" + myObj[x].nombre + "</td><td>" + myObj[x].apellido + "</td><td>" + myObj[x].email + "</td><td>" + myObj[x].telefono + "</td></tr>";
                  }
                
                listadoHtml += text;

                document.querySelector('#usuarios tbody').outerHTML = listadoHtml;
                





        }








