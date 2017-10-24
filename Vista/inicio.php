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

       <script type="text/javascript">
       $(document).ready(function() {
		      $('select').material_select();
		      $(".dropdown-button").dropdown();
      });
      
      </script>
  
</head>
<body class="top-navigation">
    <?PHP include("../Section/menu.php");?>



<?php echo $_SESSION["nombre"];?>

    <?PHP include("../Section/footer.php"); ?>
     </div>
   </div>

</body>
<?PHP include("../Section/js.php");?>

</html>
