<?php 

	$codigo = $_POST['codigo'];
	$producto = $_POST['producto'];
	$unidad = $_POST['unidad'];
	$ppv = $_POST['ppv'];
	$cantidad = $_POST['cantidad'];
	$proveedor = $_POST['proveedor'];
  $piso = $_POST['piso'];
  $pasillo = $_POST['pasillo'];




  
  $peldaño = $_POST['peldaño'];
  $estante = $_POST['estante'];
  $factura = $_POST['factura'];
  $fechafac = $_POST['fechafac'];
 

//evaluar COSTO NETO
	if ($proveedor == 'Pernor') {
		$CN = $ppv*0.64*1.16*0.89*0.95;
	}
	if($proveedor == 'Apymsa'){
		$CN = $ppv*1.16*0.9;
	}
	if ($proveedor == 'Serva') {
		$CN = $ppv*1.16;
	}
	if ($proveedor == 'Henlo') {
		$CN = $ppv*1.16;
	}
	if ($proveedor == 'Dirco') {
		$CN = $ppv*1.16;
	}
  if ($proveedor == 'Ciosa') {
    $CN = $ppv*1.16;
  }
	//evaluar PRECIO PB
	if ($proveedor == 'Pernor') {
		$PB = $ppv*1.24;
	}
	if($proveedor == 'Apymsa'){
		$PB = $CN*1.35;
	}
	if ($proveedor == 'Serva') {
		$PB = $CN*1.8;
	}
	if ($proveedor == 'Henlo') {
		$PB = $CN*2;
	}
	if ($proveedor == 'Dirco') {
		$PB = $CN*1.7;
	}
  if ($proveedor == 'Ciosa') {
    $PB = $CN*1.8;
  }

//evaluar PRECIO TALLER
	if ($proveedor == 'Pernor') {
		$PT = $PB/1.25;
	}
	if($proveedor == 'Apymsa'){
		$PT = $PB*0.8;
	}
	if ($proveedor == 'Serva') {
		$PT = $PB*0.8;
	}
	if ($proveedor == 'Henlo') {
		$PT = $PB*0.8;
	}
	if ($proveedor == 'Dirco') {
		$PT = $PB*0.8;
	}
  if ($proveedor == 'Ciosa') {
    $PT = $PB*0.8;
  }

?>

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
       
  
</head>
<body BACKGROUND="../Content/img/LOGO.png" class="responsive-img" >
<div class="navbar-fixed">
<ul id="dropdown1" class="dropdown-content">
  <li><i class="material-icons left">shopping_cart</i><a href="" >Venta</a></li>
  <li><i class="material-icons left">add_shopping_cart</i><a href="../Vista/almacen.php" >Almacen</a></li>
  <li><i class="material-icons left">person_add</i><a href="../Vista/usuarios.php" >Usuarios</a></li>
</ul>

<nav class="button-collapse">
  <div class="nav-wrapper #9e9e9e grey " >
    <a href="#!" class="brand-logo" align="right"></a>
     
    <ul id="nav-mobile" class="left hide-on-med-and-down">
      <li><a href="../Vista/inicio.php" ><i class="material-icons left" hidden="home">home</i>Inicio</a></li>
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1" style="margin-left: 20px;margin-right: 20px;width: 200px;"><i class="material-icons left">menu</i>Menú</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
      <li><a href="../Controlador/Salir.php"><i class="material-icons left prefix">account_circle</i>Cerrar sesión</a></li>
    </ul>
    
  </div>
</nav></div>
<form class="col s5" style="margin-left: 40px; height: 50px;" id="registro" method="POST" action="../Modelo/ValidaAlmacen.php">
<div class="container #eeeeee grey lighten-3 z-depth-5" style="border-radius: 9px;">
<br>
<CENTER><h3>REGISTRO</h3></CENTER>

<hr/><div style="margin-right: 30px;">
<blockquote style="margin-left: 150px; margin-right: 10px; text-align: justify-all;" ><h5><P> <div class="row">
    <!-- <form class="col s9" style="margin-left: 90px;" id="registro" method="POST" action="calcular.php"  enctype="multipart/form-data"> -->
      <h6><P>CODIGO: <?php echo $codigo; ?></P></h6>
      <h6><P>CANTIDAD: <?php echo $cantidad; ?></P></h6>
      <h6><P>PRODUCTO: <?php echo $producto; ?></P></h6>
      <h6><P>UNIDAD: <?php echo $unidad;  ?></P></h6>
      <h6><P>PRECIO PROVEEDOR: <?php echo $ppv;  ?></P></h6>
      <h6><P>PROVEEDOR: <?php echo $proveedor;  ?></P></h6>
      <h6><P>PISO: <?php echo $piso; ?></P></h6>
      <h6><P>PASILLO: <?php echo $pasillo; ?></P></h6>
      <h6><P>ESTANTE: <?php echo $estante; ?></P></h6>
      <h6><P>PELDAÑO: <?php echo $peldaño; ?></P></h6>
      <h6><P>COSTO NETO: <?php echo $CN;  ?></P></h6>
      <h6><P>PRECIO PUBLICO: <?php echo $PB;  ?></P></h6>
      <h6><P>PRECIO TALLER: <?php echo $PT;  ?></P></h6> 
      <h6><P>FACTURA: <?php echo $factura;  ?></P></h6>  
      <h6><P>FECHA DE FACTURA: <?php echo $fechafac;  ?></P></h6>       
  </blockquote>
  <div class="row">
   <div class="input-field col s4 left">
    <input type="reset"  value="Corregir" name="atras" style="margin-left: 100px;width: 140px; height: 30px;" onclick="history.back()" class="waves-effect waves-light btn z-depth-3">
    </div>
    <div class="input-field col s4 right">
    <input TYPE="submit" NAME=OK VALUE="REGISTRAR" style="margin-left: 100px;width: 140px; height: 30px;" class="waves-effect waves-light btn z-depth-3" onclick="EventoAlert()"><br><br><br><br>
  </div>
</div>

<form method="POST" action="ValidaAlmacen.php">
  <input type="text" name="codigo" value="<?php echo $codigo; ?>" hidden ></input>
  <input type="text" name="cantidad" value="<?php echo $cantidad; ?>" hidden></input>
  <input type="text" name="producto" value="<?php echo $producto; ?>" hidden></input>
  <input type="text" name="unidad" value="<?php echo $unidad; ?>" hidden></input>
  <input type="text" name="ppv" value="<?php echo $ppv; ?>" hidden></input>
  <input type="text" name="proveedor" value="<?php echo $proveedor; ?>" hidden></input>
  <input type="text" name="piso" value="<?php echo $piso; ?>" hidden></input>
  <input type="text" name="pasillo" value="<?php echo $pasillo; ?>" hidden></input>
  <input type="text" name="peldaño" value="<?php echo $peldaño; ?>" hidden></input>
  <input type="text" name="estante" value="<?php echo $estante; ?>" hidden></input>
  <input type="text" name="CN" value="<?php echo $CN; ?>" hidden></input>
  <input type="text" name="PB" value="<?php echo $PB; ?>" hidden></input>
  <input type="text" name="PT" value="<?php echo $PT; ?>" hidden></input>
  <input type="text" name="factura" value="<?php echo $factura; ?>" hidden></input>
  <input type="text" name="fechafac" value="<?php echo $fechafac; ?>" hidden></input>

</form>


<script>
        function EventoAlert(){
        swal("PRODUCTO REGISTRADO","","success");
        }
    </script>

<!-- 
</form>
</form> -->
 
</body>
</html>