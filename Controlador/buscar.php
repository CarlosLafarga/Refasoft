<?php
//Archivo de conexión a la base de datos
require '../conect/conexion.php';

//Variable de búsqueda
$consultaBusqueda = $_POST['valorbusqueda'];

//Filtro anti-XSS
$caracteres_malos  = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
$caracteres_buenos = array("& lt;", "& gt;", "& quot;", "& #x27;", "& #x2F;", "& #060;", "& #062;", "& #039;", "& #047;");
$consultaBusqueda  = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);

//Variable vacía (para evitar los E_NOTICE)
$mensaje = "";

//Comprueba si $consultaBusqueda está seteado
if (isset($consultaBusqueda)) {

    $cn       = Conectarse();
    $consulta = "SELECT * FROM productos2 WHERE codigo  like '%" . $consultaBusqueda . "%' OR Descripcion Like '%" . $consultaBusqueda . "%' ";
    $ejecutar = mysql_query($consulta, $cn) or die(mysql_error());

    //Obtiene la cantidad de filas que hay en la consulta
    $filas = mysql_num_rows($ejecutar);

    //Si no existe ninguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
    if ($filas === 0) {

        $consultaBusqueda;

    } else {

        //Si existe alguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
        $consultaBusqueda;

        //La variable $resultado contiene el array que se genera en la consulta, así que obtenemos los datos y los mostramos en un bucle
        while ($resultados = mysql_fetch_array($ejecutar)) {

            $codigo         = $resultados['codigo'];
            $producto       = $resultados['Descripcion'];
            $precio_publico = $resultados['PB'];

            //Output
            /*$mensaje .= '
            <p>
            <strong>Codigo:</strong> ' . $codigo . '<br>
            <strong>Producto:</strong> ' . $producto . '<br>
            <strong>Precio:</strong> ' . $precio_publico . '<br>
            </p>';*/

            $producto_desglosado = array(
                'codigo'   => $codigo,
                'producto' => $producto,
                'precio'   => $precio_publico,

            );

        }
        ; //Fin while $resultados

    }
    ; //Fin else $filas

}
; //Fin isset $consultaBusqueda

//Devolvemos el mensaje que tomará jQuery
if (!empty($producto_desglosado)) {
    echo json_encode($producto_desglosado, JSON_FORCE_OBJECT);

} else {

    $mensaje = "No hay resultado para ese codigo.";
    echo $mensaje;
}
