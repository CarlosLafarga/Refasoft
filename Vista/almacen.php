<?php 
session_start();

if(!isset($_SESSION["nombre"])){ 
   header("location:../Vista/Login.php"); 
   exit();
   
} 

?> 
<!DOCTYPE html>
<html>
<head>
	<title>ALMACEN</title>
      <?PHP include("../Section/css.php");?>
          <?PHP include("../Section/js.php");?>
</head>
<body class="top-navigation">
  <div id="wrapper">
     <div id="page-wrapper" class="gray-bg">
                <?PHP include("../Section/menu.php");?>

                 <div class="wrapper wrapper-content">
                   <div class="container">
                     <?PHP include("../Section/formAlmacen.php");?>
                    </div>
                 </div>

                <?PHP include("../Section/footer.php"); ?>
      </div>
   </div>

</body>

<script type="text/javascript">
    //$(document).ready(function(){
        $("#fregistro").validate({
            rules: {
                codigo: {
                    required: true,
                    minlength: 1
                },
                producto: {
                    required: true,
                    minlength: 2
                },
                unidad: {
                    required: true,
                    minlength: 1
                },
                proveedor: {
                    required: true,
                    minlength: 1
                },
                ppv: {
                    required: true,
                    minlength: 1
                },
                cantidad: {
                    required: true,
                    minlength: 1
                },
                facturas:{
                    required: true,
                    notEqualTo: " "
                },
                
                
          SelectName: { valueNotEquals: "seleccione una opcion! " }

            },
            //For custom messages
            messages: {
                codigo:{
                    required: "Ingrese el codigo",
                    minlength: "Debe ser codigo valido"
                },
                producto:{
                    required: "Ingrese un producto",
                    minlength: "Debe ingresar un producto"
                },
                unidad:{
                    required: "seleccione la unidad ",
                    minlength: "debe seleccionar una opcion"
                },
                proveedor:{
                    required: "seleccione el proveedor ",
                    minlength: "seleccione un proveedor"
                },
                ppv:{
                    required: "Ingrese un precio ",
                    minlength: "Ingrese un precio"
                },
                cantidad:{
                    required: "Ingrese una cantidad ",
                    minlength: "Ingrese una cantidad"
                },
                facturas:{
                    required: "Ingrese la respuesta",
                    notEqualTo : "Seleccione una opcion"
                },
                
               
               

          SelectName: { valueNotEquals: "seleccione una opcion!" }

            },
            errorElement : 'div',
            errorPlacement: function(error, element) {
              var placement = $(element).data('error');
              if (placement) {
                $(placement).append(error)
              } else {
                error.insertAfter(element);
              }
            }
        });
    //});

    // add the rule here
     $.validator.addMethod(" ", function(value, element, arg){
      return arg != value;
     }, "Value must not equal arg.");

    $(document).ready(function() {

      $('select').material_select();
    });
    $('select#facturas').on('change', function() {
          var opcion = this.value;
          if (opcion == 0) {
          if ($( "#facturacion" ).hasClass("factura") == false) {
          $( "#facturacion" ).addClass("factura");
          Limpiarfactura();
          }
        }
        else{
          if ($( "#facturacion" ).hasClass("factura") == true) {
          $( "#facturacion" ).removeClass("factura");
          Limpiarfactura();
          }
        }
      });
  </script>
</html>


<?php
    if(isset($_POST['submit'])){
      require('calcular.php');
    }
    
?>