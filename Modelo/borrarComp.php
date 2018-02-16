
<?php

if (isset($_GET['id'])) {

    $id = $_GET['id'];

}

include "../conect/conexion.php";
EliminarCompra($_GET['id']);

function EliminarCompra($id)
{
    $cn = Conectarse();

    $sql = "INSERT INTO Compras_Borradas(id_compra, factura_compra, codigo_compra, cantidad_compra, fechafac, Proveedor_compra, ppv_compra)
		SELECT id_compra, factura_compra, codigo_compra, cantidad_compra, fechafac, Proveedor_compra, ppv_compra FROM compras WHERE id_compra = '" . $id . "'";
    $ejecutar = mysql_query($sql, $cn) or die(mysql_error());

    $borrar  = "DELETE  FROM compras WHERE id_compra = '" . $id . "' ";
    $ejecuta = mysql_query($borrar, $cn) or die(mysql_error());
}
header("location: ../Vista/listar_comp.php")

?>
