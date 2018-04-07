<?php

$codigo    = $_POST['codigo'];
$producto  = $_POST['producto'];
$unidad    = $_POST['unidad'];
$ppv       = $_POST['ppv'];
$cantidad  = $_POST['cantidad'];
$proveedor = $_POST['proveedor'];
$piso      = $_POST['piso'];
$pasillo   = $_POST['pasillo'];
$peldaño  = $_POST['peldaño'];
$estante   = $_POST['estante'];
$factura   = $_POST['factura'];
$fechafac  = $_POST['fechafac'];

//evaluar COSTO NETO
if ($proveedor == 'permor') {
    $CN = $ppv * 0.64 * 1.16 * 0.89 * 0.95;
}
if ($proveedor == 'Apymsa') {
    $CN = $ppv * 1.044;
}
if ($proveedor == 'serva') {
    $CN = $ppv * 1.16;
}
if ($proveedor == 'Henlo') {
    $CN = $ppv * 1.16;
}
if ($proveedor == 'Dirco') {
    $CN = $ppv * 1.16;
}
if ($proveedor == 'ciosa') {
    $CN = $ppv * 1.16;
}

//evaluar PRECIO PB--------------------------------------------------------------------------*/
if ($proveedor == 'permor') {
    $PB = $ppv * 1.024;
}
if ($proveedor == 'Apymsa') {
    $PB = $ppv * 1.70694;
}
if ($proveedor == 'serva') {
    $PB = ($ppv * 1.8) * 1.16;
}
if ($proveedor == 'Henlo') {
    $PB = $ppv * 2;
}
if ($proveedor == 'Dirco') {
    $PB = $ppv * 1.7;
}
if ($proveedor == 'ciosa') {
    $PB = ($ppv * 1.8) * 1.16;
}

//evaluar PRECIO TALLER----------------------------------------------------------------------*/
if ($proveedor == 'permor') {
    $PT = $PB / 1.25;
}
if ($proveedor == 'Apymsa') {
    $PT = $ppv * 1.365552;
}
if ($proveedor == 'serva') {
    $PT = $PB * 0.8;
}
if ($proveedor == 'Henlo') {
    $PT = $PB * 0.8;
}
if ($proveedor == 'Dirco') {
    $PT = $PB * 0.8;
}
if ($proveedor == 'ciosa') {
    $PT = $PB * 0.8;
}

?>

<?php
session_start();

if (!isset($_SESSION["nombre"])) {
    header("location:../Vista/Login.php");
    exit();

}

?>

<!DOCTYPE html>
<html>
<head>
  <title>ALMACEN</title>
  <?PHP include "../Section/css.php";?>
  <?PHP include "../Section/js.php";?>

</head>
<body class="top-navigation">
  <div id="wrapper">
     <div id="page-wrapper" class="gray-bg">
                <?PHP include "../Section/menu.php";?>

                 <div class="wrapper wrapper-content">
                   <div class="container">
                     <?PHP include "../Section/PreRegistro.php";?>

                    </div>
                 </div>
           <?PHP include "../Section/footer.php";?>
      </div>
   </div>

 </body>
    <script>
        function EventoAlert(){
        swal("PRODUCTO REGISTRADO","","success");
        }
    </script>


</html>