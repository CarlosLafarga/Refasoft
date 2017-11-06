

$(document).ready(function() {
    $("#resultadoBusqueda").html('<p></p>');
});

function buscar() {

    var producto = $("#producto").val();
 
     if (producto != "") {

        $.post("../Controlador/buscar.php",{valorbusqueda:producto},function(mensaje){

            $("#resultadoBusqueda").html(mensaje);
            console.log(mensaje); 

         }); 
     } else { 

        $("#resultadoBusqueda").html('<p></p>');

        };
};
