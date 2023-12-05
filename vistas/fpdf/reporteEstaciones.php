<?php

require('./fpdf.php');

class PDF extends FPDF
{

   // Cabecera de página
   function Header()
   {
      include '../../modelo/conexion.php';//llamamos a la conexion BD

      $consulta_info = $conexion->query(" select * from estaciones ");//traemos datos de la empresa desde BD
      $datos_info = $consulta_info->fetch_object();
      $this->Image('logo.png', 180, 5, 20); //logo de la empresa,moverDerecha,moverAbajo,tamañoIMG
      $this->SetFont('Arial', 'B', 19); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(45); // Movernos a la derecha
      $this->SetTextColor(0, 0, 0); //color
      //creamos una celda o fila
      $this->Cell(110, 15, utf8_decode('Sistema Meteorológico UDG'), 0, 1, 'C', 0); // AnchoCelda,AltoCelda,titulo,borde(1-0),saltoLinea(1-0),posicion(L-C-R),ColorFondo(1-0)
      $this->Ln(3); // Salto de línea
      $this->SetTextColor(103); //color

      // Los dos apartados de abajo pertenecen a "agregar una celda debajo del titulo"
      // /* TELEFONO */
      // $this->Cell(110);  // mover a la derecha
      // $this->SetFont('Arial', 'B', 10);
      // $this->Cell(59, 10, utf8_decode("Teléfono : "), 0, 0, '', 0);
      // $this->Ln(5);

      // /* COREEO */
      // $this->Cell(110);  // mover a la derecha
      // $this->SetFont('Arial', 'B', 10);
      // $this->Cell(85, 10, utf8_decode("Correo : "), 0, 0, '', 0);
      // $this->Ln(5);


      /* TITULO DE LA TABLA */
      //color
      $this->SetTextColor(228, 100, 0);
      $this->Cell(50); // mover a la derecha
      $this->SetFont('Arial', 'B', 15);
      $this->Cell(100, 10, utf8_decode("REPORTE DE ESTACIONES"), 0, 1, 'C', 0);
      $this->Ln(3);

      /* CAMPOS DE LA TABLA */
      //color
      $this->SetFillColor(228, 100, 0); //colorFondo
      $this->SetTextColor(255, 255, 255); //colorTexto
      $this->SetDrawColor(163, 163, 163); //colorBorde
      $this->SetFont('Arial', 'B', 11);
      $this->Cell(25, 10, utf8_decode('No.'), 1, 0, 'C', 1);
      $this->Cell(55, 10, utf8_decode('Nombre'), 1, 0, 'C', 1);
      $this->Cell(55, 10, utf8_decode('Longitud'), 1, 0, 'C', 1);
      $this->Cell(55, 10, utf8_decode('Altitud'), 1, 1, 'C', 1);
   }

   // Pie de página
   function Footer()
   {
      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C'); //pie de pagina(numero de pagina)

      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, cursiva, tamañoTexto
      $hoy = date('d/m/Y');
      $this->Cell(355, 10, utf8_decode($hoy), 0, 0, 'C'); // pie de pagina(fecha de pagina)
   }
}

include '../../modelo/conexion.php';//llamamos a la conexion BD

//require '../../funciones/CortarCadena.php';
/* CONSULTA INFORMACION DEL HOSPEDAJE */


$pdf = new PDF();
$pdf->AddPage(""); /* aqui entran dos para parametros (horientazion,tamaño)V->portrait H->landscape tamaño (A3.A4.A5.letter.legal) */
$pdf->AliasNbPages(); //muestra la pagina / y total de paginas

$i = 0;
$pdf->SetFont('Arial', '', 12);
$pdf->SetDrawColor(163, 163, 163); //colorBorde

$consulta_reporte_estaciones = $conexion->query("SELECT * FROM estaciones");

while ($datos_reporte = $consulta_reporte_estaciones->fetch_object()) {      
   $i = $i + 1;
   /* TABLA */
   $pdf->Cell(25, 10, utf8_decode($i), 1, 0, 'C', 0);
   $pdf->Cell(55, 10, utf8_decode($datos_reporte->Nombre), 1, 0, 'C', 0);
   $pdf->Cell(55, 10, utf8_decode($datos_reporte->Longitud), 1, 0, 'C', 0);
   $pdf->Cell(55, 10, utf8_decode($datos_reporte->Latitud), 1, 1, 'C', 0);
}



$pdf->Output('reporteEstaciones.pdf', 'I');//nombreDescarga, Visor(I->visualizar - D->descargar)
