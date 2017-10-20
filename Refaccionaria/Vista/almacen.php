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
	<link type="text/css" rel="stylesheet" href="../Content/css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
      <link href="../Content/fonts/fuentes.css" rel="stylesheet">
      <script src="../Content/js/jquery.min.js"></script>
      <script src="../Content/js/materialize.min.js"></script>
      <script src="../Content/sweetalert.min.js"></script>
      <link rel="stylesheet" type="text/css" href="../Content/sweetalert.css">
       <link rel="stylesheet" type="text/css" href="../Content/css/formulario.css">

       <script type="text/javascript">
      
      


          function validaletra(e) { 
          tecla = (document.all) ? e.keyCode : e.which; 
          if (tecla==8) return true; 
          patron =/[A-Za-z\s]/; 
          te = String.fromCharCode(tecla); 
          return patron.test(te); 
          }
           function validacorreo(e) { 
          tecla = (document.all) ? e.keyCode : e.which; 
          if (tecla==8) return true; 
          patron =/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i; 
          te = String.fromCharCode(tecla); 
          return patron.test(te); 
          }

          function validanum(e){
          tecla = (document.all) ? e.keyCode : e.which;

          if (tecla==8){
              return true;
          }
              patron =/^([0-9])/;
              tecla_final = String.fromCharCode(tecla);
              return patron.test(tecla_final);
          }

          function validaPiso(e){
          tecla = (document.all) ? e.keyCode : e.which;

          if (tecla==8){
              return true;
          }
              patron =/^([1-2])/;
              tecla_final = String.fromCharCode(tecla);
              return patron.test(tecla_final);
          }
           function validaPasillo(e){
          tecla = (document.all) ? e.keyCode : e.which;

          if (tecla==1){
              return true;
          }
              patron =/^([1-4])/;
              tecla_final = String.fromCharCode(tecla);
              return patron.test(tecla_final);
          }
          function validaEstantePeldaño(e){
          tecla = (document.all) ? e.keyCode : e.which;

          if (tecla==1){
              return true;
          }
              patron =/^([0-9])/;
              tecla_final = String.fromCharCode(tecla);
              return patron.test(tecla_final);
          }

          function validadecimal(e){
          tecla = (document.all) ? e.keyCode : e.which;

          if (tecla==8){
              return true;
          }
              patron =/^([0-9.]*$)/;
              tecla_final = String.fromCharCode(tecla);
              return patron.test(tecla_final);
          }

         $(document).ready(function() {
            $('select').material_select();
         });     
      </script>
    
      <script type="text/javascript">
         $(".dropdown-button").dropdown();
         $( document ).ready(function);
      </script>
  
</head>
<body BACKGROUND="../Content/img/LOGO.png" class="responsive-img" >
<div class="navbar-fixed">
<ul id="dropdown1" class="dropdown-content">
  <li><i class="material-icons left">shopping_cart</i><a href="" >Venta</a></li>
  <li><i class="material-icons left">add_shopping_cart</i><a href="almacen.php" >Almacen</a></li>
  <li><i class="material-icons left">person_add</i><a href="usuarios.php" >Usuarios</a></li>
</ul>

<nav class="button-collapse">
  <div class="nav-wrapper #9e9e9e grey " >
    <a href="#!" class="brand-logo" align="right"></a>
     
    <ul id="nav-mobile" class="left hide-on-med-and-down">
      <li><a href="inicio.php" ><i class="material-icons left" hidden="home">home</i>Inicio</a></li>
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1" style="margin-left: 20px;margin-right: 20px;width: 200px;"><i class="material-icons left">menu</i>Menú</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
      <li><a href="../Controlador/Salir.php"><i class="material-icons left prefix">account_circle</i>Cerrar sesión</a></li>
    </ul>
    
  </div>
</nav></div>
<div class="container #eeeeee grey lighten-3 z-depth-5" style="border-radius: 9px;">
 <center><h4>Almacen</h4></center>
    <div class="row" style="margin-left: 25px;">
    <form class="col s12" id="fregistro" method="POST"  action="../Controlador/calcular.php" enctype="multipart/form-data">
        <div class="row">
          <div class="input-field col s3">
              <i class="material-icons prefix">vpn_key</i>
               <label for="codigo">Codigo</label>
                <input type="text" id="codigo" name="codigo" required="llenar campo"  >
                    <div class="errorTxt1"></div>
          </div>
          <div class="row">
            <div class="input-field col s4">
              <i class="material-icons prefix">description</i>
              <label for="producto">Producto</label>
              <input type="text" id="producto" name="producto" required="llenar campo">
              <div class="errorTxt3"></div>
          </div>
           <div class="input-field col s3">
          <i class="material-icons prefix">view_list</i>
              <label for="unidad"></label>
              <select  id="unidad" name="unidad" required="llenar campo" onkeypress="return validaletra(event)">
                  <option value="">Seleccione Unidad</option>
                  <option value="Pieza">Pieza</option>
                  <option value="Metro">Metro</option>
                  <option value="Litro">Litro</option>
                  <option value="Juego">Juego</option>
               </select>
               <div class="errorTxt4"></div>
          </div>
        </div>
          <div class="input-field col s3">
          <i class="material-icons prefix">person_add</i>
            <label for=""></label>
            <select id="proveedor" name="proveedor" required="llenar campo" onkeypress="return validaletra(event)">
              <option value="">Seleccione Proveedor</option>
              <option value="Pernor">Pernor</option>
              <option value="Apymsa">Apymsa</option>
              <option value="Serva">Serva</option>
              <option value="Henlo">Henlo</option>
              <option value="Dirco">Dirco</option>
              <option value="Ciosa">Ciosa</option>
            </select>
            <div class="errorTxt4"></div>
          </div>
          <div class="input-field col s4">
              <i class="material-icons prefix">monetization_on</i>
                <label for="ppv">Precio Proveedor</label>
                <input type="text" id="precio" name="ppv" onkeypress="return validadecimal(event)"  required="llenar campo">
              <div class="errorTxt4"></div>
          </div>

         <div class="input-field col s3">
              <i class="material-icons prefix">add_box</i>
                <label for="cantidad">Cantidad</label>
                <input type="text" id="cantidad" name="cantidad" onkeypress="return validanum(event)"  required="llenar campo" >
              <div class="errorTxt4"></div>
          </div>
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

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="../Content/js/jquery.js"></script>
  <script type="text/javascript" src="../Content/js/materialize.min.js"></script>
  <script type="text/javascript" src="../Content/js/validate.js"></script>

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
</div>
</div>

<script>
        function EventoAlert(){
          var codigo=document.getElementById('codigo').value;
          var producto=document.getElementById('producto').value;
          var unidad=document.getElementById('unidad').value;
          var proveedor=document.getElementById('proveedor').value;
          var precio=document.getElementById('precio').value;
          var cantidad=document.getElementById('cantidad').value;
          if(codigo==''){
                swal("ERROR","LLENAR LOS CAMPOS","error");
                return;
                }
          if(producto==''){
                swal("ERROR","LLENAR LOS CAMPOS","error");
                return;
                }
           if(unidad==''){
                swal("ERROR","LLENAR LOS CAMPOS","error");
                return;
                }
             if(proveedor==''){
                swal("ERROR","LLENAR LOS CAMPOS","error");
                return;
                }
          if(precio==''){
                swal("ERROR","LLENAR LOS CAMPOS","error");
                return;
                }
          if(cantidad==''){
                swal("ERROR","LLENAR LOS CAMPOS","error");
                return;
                }
        }


    </script>

</body>
</html>