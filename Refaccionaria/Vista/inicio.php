<?php 
session_start();

if(!isset($_SESSION["nombre"])){ 
   header("location:../Vista/login.php"); 
   exit();
   
}
?>  

<!DOCTYPE html>
<html>
<head>
	<title>. : REFACCIONARIA : .</title>
	<link type="text/css" rel="stylesheet" href="../Content/css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
      <link href="../Content/fonts/fuentes.css" rel="stylesheet">
      <script src="../Content/js/jquery.min.js"></script>
      <script src="../Content/js/materialize.min.js"></script>
       <script type="text/javascript">
       $(document).ready(function() {
		      $('select').material_select();
		      $(".dropdown-button").dropdown();
      });
      
      </script>
  
</head>
<body style="background-color: #e0e0e0 ">
<div class="navbar-fixed col s12">
<ul id="dropdown1" class="dropdown-content">
  <li><i class="material-icons left">shopping_cart</i><a href="" >Venta</a></li>
  <li><i class="material-icons left">add_shopping_cart</i><a href="almacen.php" >Almacen</a></li>
  <li><i class="material-icons left">person_add</i><a href="usuarios.php" >Usuarios</a></li>
</ul>

<nav class="button-collapse" >
  <div class="nav-wrapper #9e9e9e grey " >
   <!--  <a href="inicio.php" class="brand-logo" align="right" style="margin-left: 9px;"><img src="../Content/img/loggo.png" width="130" height="60"></a> -->
    <ul id="nav-mobile" class="left hide-on-med-and-down">
      <li><a href="inicio.php" ><i class="material-icons left" hidden="home">home</i>Inicio</a></li>
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons left">menu</i>Menú</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
      <li><a href="../Controlador/Salir.php"><i class="material-icons left prefix">account_circle</i>Cerrar sesión</a></li>
    </ul>
    
  </div>
</nav></div>
<div class="container z-depth-5 " style="background-color: #f2f2f2;width: 300px;border-radius: 5px;padding: 25px; margin-top: 5%;">

<center><h3>Bienvenid@</h3></center><br>
<center><h5><?php echo $_SESSION["nombre"];?></h5></center> 

</div>


</body>
</html>
