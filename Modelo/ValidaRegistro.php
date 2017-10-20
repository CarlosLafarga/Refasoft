<?php

$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$tipo=$_POST['tipo'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$domicilio=$_POST['domicilio'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$fecha=$_POST['fecha'];
$conexion= mysqli_connect("localhost","root","","refaccionaria");


$q=("INSERT INTO usuario VALUES ('','$usuario','$contrasena','$tipo','$nombre','$apellido','$domicilio','$telefono','$correo','$fecha')");

$ejecutar_q=mysqli_query($conexion,$q) or die("error al insertar");
header("location: ../Vista/usuarios.php");
echo "<br> Registro Insertado Correctamente! <br>";
?>