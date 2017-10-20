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
	<title>Usuarios</title>
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
              patron =/[0-9]/;
              tecla_final = String.fromCharCode(tecla);
              return patron.test(tecla_final);
          }

         $(document).ready(function() {
            $('select').material_select();
         });     
      </script>
      <script type="text/javascript">
      function validarfc(e){
          tecla = (document.all) ? e.keyCode : e.which;

          if (tecla==8){
              return true;
          }
              patron =/^(([A-Z]|[a-z]|\s){1})(([A-Z]|[a-z]){3})([0-9]{6})((([A-Z]|[a-z]|[0-9]){3}))/;
              tecla_final = String.fromCharCode(tecla);
              return patron.test(tecla_final);
          }
          var valid = ;
         
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
      <li><a href="inicio.php" ><i class="material-icons left">home</i>Inicio</a></li>
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1" style="margin-left: 20px;margin-right: 20px;width: 200px;"><i class="material-icons left">menu</i>Menú</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
      <li><a href="../Controlador/Salir.php"><i class="material-icons left prefix">account_circle</i>Cerrar sesión</a></li>
    </ul>
    
  </div>
</nav></div>
<div class="container #eeeeee grey lighten-3 z-depth-5" style="border-radius: 9px;">
<br>
 <center><h1>REGISTRO DE USUARIOS</h1></center><br><br>
   <form align="center" class="col s12" id="fregistro"  method="POST" action="../Modelo/ValidaRegistro.php">
   
   <div class="row" align="center">
     <div class="input-field col s2">
              <i class="material-icons prefix">perm_identity</i>
                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario"  required="llenar campo">
                <div class="errorTxt3"></div>
          </div>
         <div class="input-field col s2">
              <i class="material-icons prefix">lock</i>
                <label for="contraseña">Contraseña</label>
                <input type="password" name="contrasena" required="llenar campo" >
                <div class="errorTxt3"></div>
          </div>
           <div class="input-field col s2">
              <label for=""></label>
              <select name="tipo" required="llenar campo">
                  <option value="">Tipo de usuario</option>
                  <option value="1">Administrador</option>
                  <option value="2">Usuario</option>
               </select>
          </div>
            <div class="input-field col s2">
              <i class="material-icons prefix">person</i>
              <label for="nombre">Nombre</label>
              <input id="nombre" name="nombre" maxlength="30" onkeypress="return validaletra(event)" type="text">
              <div class="errorTxt3"></div>
          </div>
            <div class="input-field col s3">
              <i class="material-icons prefix">person</i>
              <label for="apellido">Apellidos</label>
              <input type="text" name="apellido" maxlength="30" onkeypress="return validaletra(event)">
              <div class="errorTxt3"></div>
          </div>
          <br><br><br>
          <br><br><br><br><br><br><div class="input-field col s3">
              <i class="material-icons prefix">place</i>
              <label for="domicilio">Domicilio</label>
              <input type="text" name="domicilio" required="llenar campo" >
              <div class="errorTxt3"></div>
          </div>
          
            <div class="input-field col s2">
              <i class="material-icons prefix">phone</i>
              <label for="telefono">Telefono</label>
              <input type="text" name="telefono" onkeypress="return validanum(event)" maxlength="10" required="llenar campo">
              <div class="errorTxt3"></div>
          </div>
          <div class="input-field col s3">
              <i class="material-icons prefix">contact_mail</i>
              <label for="email">Correo</label>
              <input id="correo" type="email" name="correo" required="llenar campo">
              <div class="errorTxt3"></div>
          </div>
           
            <div class="input-field col s3">
              <i class="material-icons prefix">date_range</i>
              <label for="fecha"></label>
              <input type="date"  name="fecha" >
              <div class="errorTxt3"></div>
          </div>
          </div>
      
     <input TYPE="submit" NAME=OK VALUE="REGISTRAR" style="margin-left: 700px;width: 150px;" class="waves-effect waves-light btn z-depth-3 LEFT" onclick="EventoAlert()"><br><br>
      
</form> 
  <script type="text/javascript" src="../Content/js/jquery.js"></script>
  <script type="text/javascript" src="../Content/js/materialize.min.js"></script>
  <script type="text/javascript" src="../Content/js/validate.js"></script>

  <script type="text/javascript">
    //$(document).ready(function(){
        $("#fregistro").validate({
            rules: {
                usuario: {
                    required: true,
                    minlength: 4
                },
                contrasena: {
                    required: true,
                    minlength: 4
                },
                 nombre: {
                    required: true,
                    minlength: 3
                },
                 apellido: {
                    required: true,
                    minlength: 3
                },
                domicilio: {
                    required: true,
                    minlength: 5
                },
                telefono: {
                    required: true,
                    minlength: 5
                },
                 correo: {
                    required: true,
                    email:true
                },
                
                
          SelectName: { valueNotEquals: " " }

            },
            //For custom messages
            messages: {
                usuario:{
                    required: "Ingrese el usuario",
                    minlength: "Debe ser mayor a 4 letras o numeros"
                },
                 contrasena:{
                    required: "Ingrese una Contraseña",
                    minlength: "Debe ser mayor a 4 letras o numeros"
                },
                nombre:{
                    required: "Ingrese el nombre",
                    minlength: "Debe ser mayor a 3 letras"
                },
                apellido:{
                    required: "Ingrese Apellidos",
                    minlength: "Debe ser mayor a 4 letras"
                },
                domicilio:{
                    required: "Ingrese el domicilio",
                    minlength: "Debe ingresar un domicilio"
                },
                telefono:{
                    required: "Ingrese numero de telefono ",
                    minlength: "Ingrese un numero correcto"
                },
                correo:{
                    required: "Ingrese el correo electrónico",
                    email: "Formato de correo electrónico incorrecto"
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
      $('.datepicker').pickadate();

      

    
    });
  </script>
<script>
        function EventoAlert(){
          var usuario=document.getElementById('usuario').value;
          if(usuario==''){
                swal("ERROR","LLENAR LOS CAMPOS","error");
                return;
                }
      
            swal("USUARIO REGISTRADO","EXITO","success");
          
        
        }

    </script>

</body>
</html>
