

$(document).ready(function () {
     $('.chosen-select').chosen({width: "100%"});
            $(".select2_demo_1").select2();
            

     $.ajax({
        type:'POST',
        url:'../Controlador/cargarlistaprod.php'
     })
     .done(function(lista){

        $('#producto').html(lista);
     })
     .fail(function(){

        alert("Erro al cargar listas de productos")
     });
});

