<?PHP
include "../conect/conexion.php";
$cn = Conectarse();

$query  = "SELECT id,nombre_cliente FROM clientes ORDER BY nombre_cliente";
$result = mysql_query($query, $cn)
or die("Ocurrio un error en la consulta SQL");

//echo '<option value="0">Seleccionar opcion...</option>';
while (($fila = mysql_fetch_array($result)) != null) {
    echo '<option value="' . $fila["nombre_cliente"] . '">' . $fila["nombre_cliente"] . '</option>';
}
// Liberar resultados
mysql_free_result($result);

// Cerrar la conexión
mysql_close($cn);
