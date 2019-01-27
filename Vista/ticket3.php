<?php
include "fpdf/fpdf.php";
include "../conect/conexion.php";

if (isset($_GET['no_ticket'])) {

    $ticket = $_GET['no_ticket'];
}
$cn       = Conectarse();
// CONSULTA PARA SACAR LA VENTA
$sql2      = "SELECT * FROM ventas WHERE no_tiket = '" . $ticket . "';";
$ejecutar2 = mysql_query($sql2, $cn);
$result2  = mysql_fetch_array($ejecutar2);


$sql      = "SELECT venta_articulos.*, productos2.Grupo FROM venta_articulos left join productos2 ON venta_articulos.codigo = productos2.codigo WHERE no_tiket = '" . $ticket . "';";
$ejecutar = mysql_query($sql, $cn);


$pdf = new FPDF($orientation='P',$unit='mm', array(70,350)); // el primer nuemero del array es el ancho de pdf aqui
$pdf->AddPage();
$pdf->SetFont('Arial','B',11);    //Letra Arial, negrita (Bold), tam. 20, era 8
$textypos = 5;
$pdf->setY(4);
$pdf->setX(11);
$pdf->Cell(10,$textypos,"REFACCIONARIA RIVERA");
$pdf->SetFont('Arial','',7.5);    //Letra Arial, negrita (Bold), tam. 20} aqui era 6
$pdf->setY(8);
$pdf->setX(15);
$pdf->Cell(20,$textypos,"Boulevar Solidaridad 601\tChoyal,");
$pdf->setY(11);
$pdf->setX(20);
$pdf->Cell(21,$textypos,"83130 Hermosillo, Son.");
$pdf->setY(14);
$pdf->setX(22);
$pdf->Cell(20,$textypos,"Tel: (662) 262-1129");
$pdf->setY(17);
$pdf->setX(5);
$pdf->Cell(20,$textypos,$result2['fecha_venta']);
$pdf->setX(41);
$pdf->Cell(20,$textypos,"FOLIO:");
$pdf->setX(50);
$pdf->Cell(20,$textypos,$ticket);
$textypos+=6;
$pdf->setX(4);
$pdf->Cell(5,$textypos,'-------------------------------------------------------------------');
$textypos+=6;
$pdf->setX(3);
$pdf->Cell(5,$textypos,'CANT.    ARTICULO              PRECIO          TOTAL');
$total =0;
$off = $textypos+6;




while($array= mysql_fetch_array($ejecutar)){
	$i= 0;
	$productos = array($array);

	// $pro['no_tiket'];
$pdf->setX(3);
$pdf->Cell(5,$off,$array["cantidad"]);
$pdf->setX(14);
$pdf->Cell(40,$off,  strtoupper(substr($array["codigo"]." ", 0,12)) );
$pdf->setX(38);
$pdf->Cell(11,$off,  "$".number_format($array["precio"],2,".",",") ,0,0,"R");
$pdf->setX(54);
$pdf->Cell(11,$off,  "$ ".number_format($array["total"],2,".",",") ,0,0,"R");
$total += $array["cantidad"]*$array["precio"];
$off+=6;

$pdf->setX(1);
$pdf->Cell(5,$off,"");
$pdf->setX(15);
$pdf->Cell(40,$off,  strtoupper(substr($array["Grupo"], 0,12)) );
$pdf->setX(20);
$pdf->Cell(11,$off,  "");
$pdf->setX(32);
$pdf->Cell(11,$off,  "");

$off+=6;

}
$textypos=$off+7;
$pdf->SetFont('Arial','',8.5);    
$pdf->setX(25);
$pdf->Cell(5,$textypos,"TOTAL: " );
$pdf->setX(32);
$pdf->Cell(25,$textypos,"$ ".number_format($total,2,".",","),0,0,"R");
$pdf->SetFont('Arial','',7.5);    
$pdf->setX(15);
$pdf->Cell(15,$textypos+18,'GRACIAS POR TU COMPRA');
$pdf->setY(18);
$pdf->setX(5);
$pdf->Cell(20,$textypos+23,'EN PARTES ELECTRICAS NO HAY GARANTIA');
$pdf->output();