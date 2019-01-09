<?php
include "fpdf/fpdf.php";
include "../conect/conexion.php";

if (isset($_GET['no_ticket'])) {

    $ticket = $_GET['no_ticket'];
}
$cn       = Conectarse();
$sql      = "SELECT venta_articulos.*, productos2.Grupo FROM venta_articulos left join productos2 ON venta_articulos.codigo = productos2.codigo WHERE no_tiket = '" . $ticket . "';";
$ejecutar = mysql_query($sql, $cn);


$pdf = new FPDF($orientation='P',$unit='mm', array(70,350)); // el primer nuemero del array es el ancho de pdf aqui
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);    //Letra Arial, negrita (Bold), tam. 20
$textypos = 5;
$pdf->setY(2);
$pdf->setX(7);
$pdf->Cell(10,$textypos,"Refaccionaria Rivera");
$pdf->SetFont('Arial','',6);    //Letra Arial, negrita (Bold), tam. 20} aqui
$pdf->setY(6);
$pdf->setX(8);
$pdf->Cell(20,$textypos,"Boulevar Solidaridad 601\tChoyal,");
$pdf->setY(8);
$pdf->setX(12);
$pdf->Cell(20,$textypos,"83130 Hermosillo, Son.");
$pdf->setY(10);
$pdf->setX(14);
$pdf->Cell(20,$textypos,"Tel: (662) 262-1129");
$textypos+=6;
$pdf->setX(2);
$pdf->Cell(5,$textypos,'-------------------------------------------------------------------');
$textypos+=6;
$pdf->setX(1);
$pdf->Cell(5,$textypos,'CANT.    ARTICULO          PRECIO            TOTAL');
$total =0;
$off = $textypos+6;




while($array= mysql_fetch_array($ejecutar)){
	$i= 0;
	$productos = array($array);

	// $pro['no_tiket'];
$pdf->setX(1);
$pdf->Cell(5,$off,$array["cantidad"]);
$pdf->setX(8);
$pdf->Cell(40,$off,  strtoupper(substr($array["codigo"]." ", 0,12)) );
$pdf->setX(20);
$pdf->Cell(11,$off,  "$".number_format($array["precio"],2,".",",") ,0,0,"R");
$pdf->setX(32);
$pdf->Cell(11,$off,  "$ ".number_format($array["total"],2,".",",") ,0,0,"R");
$total += $array["cantidad"]*$array["precio"];
$off+=6;

$pdf->setX(1);
$pdf->Cell(5,$off,"");
$pdf->setX(8);
$pdf->Cell(40,$off,  strtoupper(substr($array["Grupo"], 0,12)) );
$pdf->setX(20);
$pdf->Cell(11,$off,  "");
$pdf->setX(32);
$pdf->Cell(11,$off,  "");

$off+=6;

}
$textypos=$off+7;
$pdf->setX(25);
$pdf->Cell(5,$textypos,"TOTAL: " );
$pdf->setX(32);
$pdf->Cell(11,$textypos,"$ ".number_format($total,2,".",","),0,0,"R");
$pdf->setX(11);
$pdf->Cell(15,$textypos+10,'GRACIAS POR TU COMPRA');
$pdf->setY(12);
$pdf->setX(3);
$pdf->Cell(1,$textypos+15,'EN PARTES ELECTRICAS NO HAY GARANTIA');
$pdf->output();