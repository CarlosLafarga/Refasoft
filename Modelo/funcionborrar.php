
<?php

if (isset($_GET['id'])) {

    $id = $_GET['id'];

}

include "../conect/conexion.php";
EliminarProducto($_GET['id']);

function EliminarProducto($id)
{
    $cn = Conectarse();

    $sql = "INSERT INTO borrados(Num_Producto, codigo, unidad, Descripcion, PT, PB, Proveedor, ppv, Grupo)
		SELECT Num_Producto, codigo, unidad, Descripcion, PT, PB, Proveedor, ppv, Grupo FROM productos2 WHERE Num_Producto = '" . $id . "'";
    $ejecutar = mysql_query($sql, $cn) or die(mysql_error());

    $borrar  = "DELETE  FROM productos2 WHERE Num_Producto = '" . $id . "' ";
    $ejecuta = mysql_query($borrar, $cn) or die(mysql_error());
}
header("location: ../Vista/listar_prod.php")

?>

