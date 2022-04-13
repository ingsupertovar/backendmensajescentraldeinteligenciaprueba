
<script type="text/javascript">
    $(document).ready(function(){
    alert("2343");
    $('#usuarios').DataTable();


      function ConfirmDemo() {
                //Ingresamos un mensaje
                var mensaje = confirm("¿Te gusta Desarrollar con JavaScript?");
                //Verificamos si el usuario acepto el mensaje
                if (mensaje) {
                alert("¡Gracias por confirmar!");
                }
                //Verificamos si el usuario denegó el mensaje
                else {
                alert("¡Haz denegado el mensaje!");
                }
            }

        });
