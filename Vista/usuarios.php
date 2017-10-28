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
	<?PHP include("../Section/css.php");?>
      <?PHP include("../Section/js.php");?>
  
</head>
<body class="top-navigation">
  <div id="wrapper">
     <div id="page-wrapper" class="gray-bg">
          <?PHP include("../Section/menu.php");?>


<div>
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
<?PHP include("../Section/footer.php"); ?>
</body>
</html>
