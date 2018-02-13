<?PHP
include "../conect/conexion.php";
$cn = Conectarse();

$query  = "SELECT ID_PROVEEDOR,PROVEEDOR FROM proveedores ORDER BY PROVEEDOR";
$result = mysql_query($query, $cn)
or die("Ocurrio un error en la consulta SQL");

//echo '<option value="0">Seleccionar opcion...</option>';
while (($fila = mysql_fetch_array($result)) != null) {
    echo '<option value="' . $fila["PROVEEDOR"] . '">' . $fila["PROVEEDOR"] . '</option>';
}
// Liberar resultados
mysql_free_result($result);

// Cerrar la conexión
mysql_close($cn);
