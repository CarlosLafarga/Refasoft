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
          
           <?PHP include("../Section/FormEditUsuario.php");?>          

	</div>

</div>
      

<?PHP include("../Section/footer.php"); ?>
</body>
</html>
