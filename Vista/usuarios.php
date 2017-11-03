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
           <?PHP include("../Section/formusuarios.php");?>          

<div>

      

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
