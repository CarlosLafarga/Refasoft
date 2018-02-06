<?php
require '../conect/conexion.php';

function getListaProd()
{

    $cn     = Conectarse();
    $sql    = "SELECT Descripcion FROM productos2";
    $result = mysql_query($sql, $cn) or die(mysql_error());
    $option = '<option value="0">Buscar Producto</option>';
    while ($row = mysql_fetch_array($result)) {

        $option .= "<option value='$row[Descripcion]'> $row[Descripcion] </option>";
    }

    return $option;
}

echo getListaProd();
