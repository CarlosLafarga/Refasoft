
<?php

	$servidor="localhost";
    $basededatos="refaccionaria";
    $usuario="root";
    $clave="";

    $cn=mysql_connect($servidor,$usuario,$clave) or die ("Error conectando a la base de datos");
    mysql_select_db($basededatos ,$cn) or die("Error seleccionando la Base de datos");
   

if (isset($_POST['buscar'])) {

$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$tipo=$_POST['tipo'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$domicilio=$_POST['domicilio'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$fecha=$_POST['fecha'];


    $q = mysql_query("UPDATE usuario SET Usuario = '$usuario', Contrasena = '$contrasena', Tipo = '$tipo', Domicilio = '$domicilio', Telefono = '$telefono', Correo = '$correo', fecha = '$fecha' WHERE Nombre = '$nombre'");
}

$ejecutar_q=mysql_query($cn,$q) or die("error al insertar");
header("location: ../Vista/usuarios.php");
echo "<br> Registro Insertado Correctamente! <br>";




?>