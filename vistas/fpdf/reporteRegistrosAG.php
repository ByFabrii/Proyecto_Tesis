<?php

require('./fpdf.php');
include "../../app/helpers/helpers.php";

class PDF extends FPDF
{

   // Cabecera de página
   function Header()
   {
      include '../../modelo/conexion.php';//llamamos a la conexion BD

      $consulta_info = $conexion->query(" select * from registro ");//traemos datos de la empresa desde BD
      $datos_info = $consulta_info->fetch_object();
      $this->Image('logo.png', 250, 5, 20); //logo de la empresa,moverDerecha,moverAbajo,tamañoIMG
      $this->SetFont('Arial', 'B', 19); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(95); // Movernos a la derecha
      $this->SetTextColor(0, 0, 0); //color
      //creamos una celda o fila
      $this->Cell(110, 15, utf8_decode('Red Meteorológica CUCSUR'), 0, 1, 'C', 0); // AnchoCelda,AltoCelda,titulo,borde(1-0),saltoLinea(1-0),posicion(L-C-R),ColorFondo(1-0)
      $this->Ln(3); // Salto de línea
      $this->SetTextColor(103); //color

    //   //Los dos apartados de abajo pertenecen a "agregar una celda debajo del titulo"
    //   /* TELEFONO */
    //   $this->Cell(110);  // mover a la derecha
    //   $this->SetFont('Arial', 'B', 10);
    //   $this->Cell(59, 10, utf8_decode("Teléfono : "), 0, 0, '', 0);
    //   $this->Ln(5);

    //   // /* COREEO */
    //   $this->Cell(110);  // mover a la derecha
    //   $this->SetFont('Arial', 'B', 10);
    //   $this->Cell(85, 10, utf8_decode("Nombre de usuario: " . $datos_info->nombre), 0, 0, '', 0);
    //   $this->Ln(5);


      /* TITULO DE LA TABLA */
      //color
      $this->SetTextColor(228, 100, 0);
      $this->Cell(100); // mover a la derecha
      $this->SetFont('Arial', 'B', 15);
      $this->Cell(100, 10, utf8_decode("REPORTE DE REGISTROS PARA AGRICULTORES"), 0, 1, 'C', 0);
      $this->Ln(3);

      /* CAMPOS DE LA TABLA */
      //color
      $this->SetFillColor(228, 100, 0); //colorFondo
      $this->SetTextColor(255, 255, 255); //colorTexto
      $this->SetDrawColor(163, 163, 163); //colorBorde
      $this->SetFont('Arial', 'B', 11);
      $this->Cell(10, 10, utf8_decode('ID'), 1, 0, 'C', 1); //Borde, salto de línea, Centrado de texto, booleano de color (1 o 0) .
      $this->Cell(25, 10, utf8_decode('Estación'), 1, 0, 'C', 1);
      $this->Cell(30, 10, utf8_decode('Fecha'), 1, 0, 'C', 1);
      $this->Cell(25, 10, utf8_decode('Hora'), 1, 0, 'C', 1);
      $this->Cell(25, 10, utf8_decode('Temp. Actual'), 1, 0, 'C', 1);
      $this->Cell(20, 10, utf8_decode('Temp. Alta'), 1, 0, 'C', 1);
      $this->Cell(20, 10, utf8_decode('Temp. Baja'), 1, 0, 'C', 1);
      $this->Cell(20, 10, utf8_decode('Vel. viento'), 1, 0, 'C', 1);
      $this->Cell(35, 10, utf8_decode('Dir. del viento'), 1, 0, 'C', 1);
      $this->Cell(15, 10, utf8_decode('Precip.'), 1, 0, 'C', 1);
      $this->Cell(20, 10, utf8_decode('Rad. Solar'), 1, 0, 'C', 1);
      $this->Cell(15, 10, utf8_decode('Hum.'), 1, 0, 'C', 1);
      $this->Cell(20, 10, utf8_decode('Evo'), 1, 1, 'C', 1);
   }

   // Pie de página
   function Footer()
   {
      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 12); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(0, 10, utf8_decode('Página: ') . $this->PageNo() . ' / {nb}', 0, 0, 'C'); //pie de pagina(numero de pagina)

      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 12); //tipo fuente, cursiva, tamañoTexto
      $hoy = date('d/m/Y');
      $this->Cell(355, 10, utf8_decode($hoy), 0, 0, 'C'); // pie de pagina(fecha de pagina)
   }
}

include '../../modelo/conexion.php';//llamamos a la conexion BD

//require '../../funciones/CortarCadena.php';
/* CONSULTA INFORMACION DEL HOSPEDAJE */
$consulta_info = $conexion->query(" select * from registro ");
$datos_info = $consulta_info->fetch_object();

$pdf = new PDF();
$pdf->AddPage('landscape'); /* aqui entran dos para parametros (horientazion,tamaño)V->portrait H->landscape tamaño (A3.A4.A5.letter.legal) */
$pdf->AliasNbPages(); //muestra la pagina / y total de paginas

$i = 0;
$pdf->SetFont('Arial', '', 12);
$pdf->SetDrawColor(163, 163, 163); //colorBorde

$consulta_reporte_registro = $conexion->query("SELECT * FROM registro");

while ($datos_reporte = $consulta_reporte_registro->fetch_object()) { 
$significado = getWindDirection($datos_reporte->Wind_Dir);
   $i = $i + 1;
   /* TABLA */
   $pdf->Cell(10, 10, utf8_decode($i), 1, 0, 'C', 0);
   $pdf->Cell(25, 10, utf8_decode($datos_reporte->estaciones_nombre), 1, 0, 'C', 0);
   $pdf->Cell(30, 10, utf8_decode($datos_reporte->fecha), 1, 0, 'C', 0);
   $pdf->Cell(25, 10, utf8_decode($datos_reporte->hora), 1, 0, 'C', 0);
   $pdf->Cell(25, 10, utf8_decode($datos_reporte->Temp_Out), 1, 0, 'C', 0);
   $pdf->Cell(20, 10, utf8_decode($datos_reporte->Hi_Temp), 1, 0, 'C', 0);
   $pdf->Cell(20, 10, utf8_decode($datos_reporte->Low_Temp), 1, 0, 'C', 0);
   $pdf->Cell(20, 10, utf8_decode($datos_reporte->Wind_Speed), 1, 0, 'C', 0);
   $pdf->Cell(35, 10, utf8_decode($significado), 1, 0, 'C', 0);
   $pdf->Cell(15, 10, utf8_decode($datos_reporte->Rain_Rate), 1, 0, 'C', 0);
   $pdf->Cell(20, 10, utf8_decode($datos_reporte->Solar_Rad), 1, 0, 'C', 0);
   $pdf->Cell(15, 10, utf8_decode($datos_reporte->Out_Hum), 1, 0, 'C', 0);
   $pdf->Cell(20, 10, utf8_decode($datos_reporte->ET), 1, 1, 'C', 0);
}



$pdf->Output('reporteAgricultores.pdf', 'I');//nombreDescarga, Visor(I->visualizar - D->descargar)
