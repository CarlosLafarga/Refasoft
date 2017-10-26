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
	<title>. : RefaSoft : .</title>
	<?PHP include("../Section/css.php");?>

       
  
</head>
<body class="top-navigation">
  <div id="wrapper">
     <div id="page-wrapper" class="gray-bg">
          <?PHP include("../Section/menu.php");?>



    

          <?PHP include("../Section/footer.php"); ?>
      </div>
  </div>
</body>

<?PHP include("../Section/js.php");?>

</html>
