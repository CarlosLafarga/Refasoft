

$(document).ready(function() {
    $("#resultadoBusqueda").html('<p></p>');
});

function buscar() {

    var producto = $("#producto").val();
 
     if (producto != "") {

        $.post("../Controlador/buscar.php",{valorbusqueda:producto},function(mensaje){

            //$("#resultadoBusqueda").html(mensaje);

            if(mensaje != "" ){

            var types = JSON.parse(mensaje);
            console.log(types); 

            }else{

                $("#resultadoBusqueda").html('<p>No hay Resultados</p>');

            }

         }); 
     } else { 

        $("#resultadoBusqueda").html('<p>No hay Resultados</p>');

        };
};
