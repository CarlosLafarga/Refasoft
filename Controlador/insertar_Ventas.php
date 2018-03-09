<?php

//include("../conect/conexion.php");
//$cn = Conectarse();
function crearfolio()
{
    require_once '../conect/conexion.php';
    $cn           = Conectarse();
    $consulta_rpt = mysql_query("select * from ventas order by id desc", $cn);
    $row_rpt      = mysql_fetch_array($consulta_rpt);
    $anioact      = date('y');
    $ultfolio     = $row_rpt['no_tiket'];

    @list($prefijo, $consecutivo) = explode('-', $ultfolio);
    if ($anioact == $prefijo) {
        $num      = $consecutivo + 1;
        $longitud = strlen($num);
        $faltan   = 5 - $longitud;
        if ($faltan == 4) {$folio = $prefijo . '-' . '0000' . $num;}
        if ($faltan == 3) {$folio = $prefijo . '-' . '000' . $num;}
        if ($faltan == 2) {$folio = $prefijo . '-' . '00' . $num;}
        if ($faltan == 1) {$folio = $prefijo . '-' . '0' . $num;}
        if ($faltan == 0) {$folio = $prefijo . '-' . $num;}
        return $folio;
    } else {
        $folio = $anioact . '-00001';
        return $folio;
    }
}
$link = mysqli_connect("localhost", "root", "", "refaccionaria");

if (isset($_POST["codigo"])) {
    /*para insertar en tabla de ventas pero por unidad*/
    $codigo   = $_POST["codigo"];
    $producto = $_POST["producto"];
    $cantidad = $_POST["cantidad"];
    $precios  = $_POST["precios"];
    $total    = $_POST['totals'];
    /*para insertar en tabla de ventas pero general*/
    $id             = $_POST['id'];
    $total_input    = $_POST['total_total'];
    $nombre_usuario = $_POST['nombre_usuario'];
    $tipo_pago      = $_POST['tipo_pago'];
    $tipo_cliente   = $_POST['tipo_cliente'];
    $pago_con       = $_POST['pago_con'];
    $nombre_cliente = $_POST['nombre_credito'];

    $resultado_cuenta = $pago_con - $total_input;

    $int_rand = rand(100000, 1000000);
    date_default_timezone_set('America/Hermosillo');
    $tiket = crearfolio();
    $hoy   = date("Y-m-d H:i:s");

    $query  = '';
    $update = '';

    for ($count = 0; $count < count($codigo); $count++) {

        $codigo_clean   = mysqli_real_escape_string($link, $codigo[$count]);
        $producto_clean = mysqli_real_escape_string($link, $producto[$count]);
        $cantidad_clean = mysqli_real_escape_string($link, $cantidad[$count]);
        $precios_clean  = mysqli_real_escape_string($link, $precios[$count]);
        $total_clean    = mysqli_real_escape_string($link, $total[$count]);
        $random         = mysqli_real_escape_string($link, $tiket);
        $fecha          = mysqli_real_escape_string($link, $hoy);

        if ($codigo_clean != '' && $producto_clean != '' && $cantidad_clean != '' && $precios_clean != '' && $total_clean != '') {

            $query .= '
   INSERT INTO venta_articulos (no_tiket,codigo,descripcion,cantidad,precio,total,fecha_venta)
   VALUES("' . $random . '","' . $codigo_clean . '", "' . $producto_clean . '", "' . $cantidad_clean . '", "' . $precios_clean . '","' . $total_clean . '","' . $fecha . '");
   ';

        }

    }

    for ($contador = 0; $contador < count($id); $contador++) {

        $cantidad_clean2 = mysqli_real_escape_string($link, $cantidad[$contador]);
        $id_clean        = mysqli_real_escape_string($link, $id[$contador]);

        if ($cantidad_clean2 != '' && $id_clean != '') {

            $update .= '
   UPDATE productos2 SET cantidad = cantidad -' . $cantidad_clean2 . ' WHERE Num_Producto = ' . $id_clean . ';
   ';

        }

    }

    $query2 = "INSERT INTO ventas(no_tiket,vendedor,venta_total,tipo_pago,cliente_credito,tipo_cliente,fecha_venta)VALUES('" . $random . "','" . $nombre_usuario . "','" . $total_input . "','" . $tipo_pago . "','" . $nombre_cliente . "','" . $tipo_cliente . "',NOW());";

    if ($query != '' and $query2 != '' and $update != '') {

        if (mysqli_query($link, $query2)) {

            mysqli_close($link);

        } else {

            echo '4';

        }
        /*--------------------------------------------UPDATE -----------------------------------------------*/
        $link = mysqli_connect("localhost", "root", "", "refaccionaria");
        if (mysqli_multi_query($link, $update)) {
            # code...
            mysqli_close($link);

        } else {

            echo "5";
        }
/*----------------------------------------------------------------------------------------------------*/
        $link = mysqli_connect("localhost", "root", "", "refaccionaria");
        if (mysqli_multi_query($link, $query)) {

            $array = array("numero" => 1, "no_tiket" => $random);

            echo json_encode($array);

            mysqli_close($link);

        } else {

            echo "6";

        }

/*----------------------------------------------------------------------------------------------------*/

    } else {

        echo '7';

    }

/*----------------------------------------------------------------------------------------------------*/
} else {

    echo "8";
}
