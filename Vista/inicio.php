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
	<?PHP include("../Section/css.php");?>

       <script type="text/javascript">
       $(document).ready(function() {
		      $('select').material_select();
		      $(".dropdown-button").dropdown();
      });
      
      </script>
  
</head>
<body class="top-navigation">
     <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">




     <div class="row border-bottom white-bg">
        <nav class="navbar navbar-static-top" role="navigation">
            <div class="navbar-header">
                <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <i class="fa fa-reorder"></i>
                </button>
                <a href="#" class="navbar-brand">Inspinia</a>
            </div>
            <div class="navbar-collapse collapse" id="navbar">     
    <ul id="dropdown1" class="dropdown-content">
      <li><i class="material-icons left">shopping_cart</i><a href="" >Venta</a></li>
      <li><i class="material-icons left">add_shopping_cart</i><a href="almacen.php" >Almacen</a></li>
      <li><i class="material-icons left">person_add</i><a href="usuarios.php" >Usuarios</a></li>
    </ul>

    <ul id="nav-mobile" class="left hide-on-med-and-down">
      <li><a href="inicio.php" ><i class="material-icons left" hidden="home">home</i>Inicio</a></li>
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons left">menu</i>Menú</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
      <li><a href="../Controlador/Salir.php"><i class="material-icons left prefix">account_circle</i>Cerrar sesión</a></li>
    </ul>
    
 </div>
        </nav>
        </div>



<?php echo $_SESSION["nombre"];?>

    <?PHP include("../Section/footer.php"); ?>
     </div>
   </div>
</body>
<?PHP include("../Section/js.php");?>
</html>
