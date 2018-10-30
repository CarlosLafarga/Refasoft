<?php
session_start();
include "../conect/conexion.php";
$cn    = Conectarse();

$codigo    = $_POST['codigo'];
$producto  = $_POST['producto'];
$unidad    = $_POST['unidad'];
$proveedor = $_POST['proveedor'];
$cantidad  = $_POST['cantidad'];
$piso      = $_POST['piso'];
$pasillo   = $_POST['pasillo'];
$estante   = $_POST['estante'];
$peldano   = $_POST['peldano'];
$ppv       = $_POST['ppv'];
$CN        = $_POST['CN'];
$PB        = $_POST['PB'];
$PT        = $_POST['PT'];

$factura  = $_POST['factura'];
$fechafac = $_POST['fechafac'];

//CHECAR ESTE IF
if (!empty($factura)) {

    $q = ("INSERT INTO productos2(codigo,unidad,Descripcion,cantidad,PT,PB,Proveedor,ppv,CN,Piso,Pasillo,Estante,Peldano,ult_factura) VALUES ('$codigo',' $unidad',' $producto',' $cantidad','$PT','$PB','$proveedor','$ppv','$CN','$piso','$pasillo','$estante','$peldano','$factura')");
        mysql_query($q,$cn) or die(mysql_error());

    $qf        = ("INSERT INTO compras(factura_compra,codigo_compra,cantidad_compra,fechafac,Proveedor_compra,ppv_compra) VALUES ('$factura','$codigo','$cantidad','$fechafac','$proveedor','$ppv')");
               mysql_query($qf,$cn) or die(mysql_error());

} else {

    $q = ("INSERT INTO productos2(codigo,unidad,Descripcion,cantidad,PT,PB,Proveedor,ppv,CN,Piso,Pasillo,Estante,Peldano) VALUES ('$codigo','$unidad',' $producto','$cantidad','$PT','$PB','$proveedor','$ppv','$CN','$piso','$pasillo','$estante','$peldano')");
        mysql_query($q,$cn) or die(mysql_error());
}

header("location: ../Vista/almacen.php");
echo "<script>
		   swal({
                 title:'Buen trabajo!',
                 text: 'Buen Trabajo Deolucion echa con exito.',
                 type: 'success',
                 showCancelButton: false,
                 confirmButtonText: 'Aceptar',
                 closeOnConfirm: true
                 },
                 function(){


                 location.reload();

                 });
		</script>";
