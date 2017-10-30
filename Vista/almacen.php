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
          <?PHP include("../Section/formAlmacen.php");?>
<!-- 
<div class="container #eeeeee grey lighten-3 z-depth-5" style="border-radius: 9px;">
           
         </div>
        <h6><p style="margin-left: 15px;">UBICACION</p></h6>
        <div class="input-field col s2">
              <i class="material-icons prefix">find_in_page</i>
                <label for="piso">Piso</label>
                <input type="number" id="piso" name="piso" min="1" max="2" onkeypress="return validaPiso(event)">
              <div class="errorTxt4"></div>
          </div>
          <div class="input-field col s2">
              <i class="material-icons prefix">find_in_page</i>
                <label for="pasillo">Pasillo</label>
                <input type="number" id="pasillo" name="pasillo" min="1" max="4" onkeypress="return validaPasillo(event)" >
              <div class="errorTxt4"></div>
          </div>
          <div class="input-field col s2">
              <i class="material-icons prefix">find_in_page</i>
                <label for="estante">Estante</label>
                <input type="number" id="estante" name="estante" min="1" max="10" onkeypress="return validaEstantePeldaño(event)">
              <div class="errorTxt4"></div>
          </div> 
          <div class="input-field col s2">
              <i class="material-icons prefix">find_in_page</i>
                <label for="peldaño">Peldaño</label>
                <input type="number" id="peldaño" name="peldaño" min="1" max="10" onkeypress="return validaEstantePeldaño(event)" >
              <div class="errorTxt4"></div>
          </div><BR> 
         <div class="row">
          <br><br><br><br><div class="input-field col s5">
            <i class="material-icons prefix">assignment</i>
            <select id="facturas" name="facturas" required="required">
                <option value=" " disabled selected>Elige una opcion</option>
                <option value="0">Sin factura</option>
                <option value="1">Con factura</option>
            </select>
            <label>Facturacion</label>
              <div class="errorTxt13"></div>
          </div>
          </div>
          <div id="facturacion" class="factura">
            <div class="input-field col s3">
                <i class="material-icons prefix">content_paste</i>
                <input id="factura" name="factura" type="text" class="validate" data-error=".errorTxt6">
                <label for="factura">Factura</label>
                      <div class="errorTxt6"></div>
            </div>
            <div class="input-field col s3">
                <i class="material-icons prefix">date_range</i>
                <input id="fechafac" name="fechafac" type="date" class="validate" data-error=".errorTxt7">
                <label for="fechafac"></label>
                <div class="errorTxt7"></div>
            </div>
          </div>
         <center> <div class="row">
            <div class="input-field col s12">
              <input type="submit" value="Visualizar" onclick="EventoAlert()" style="width: 144px; height: 30px; margin-left: 540px;"class="waves-effect waves-light btn z-depth-3">
            </div>
          </div></center>
    </form>
    </div>
  </div>
  </div>


<?php
    if(isset($_POST['submit'])){
      require('calcular.php');
    }
    
  ?>

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

</li>  
</ul>
</div>     
 </div>  
</div> -->
<?PHP include("../Section/footer.php"); ?>
</div>

</body>
</html>