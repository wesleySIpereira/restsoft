<?php
require_once './application/third_party/fpdf/fpdf.php';

class Pdf extends FPDF {

  
public function criar($param=null) {


 
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Output();
    


}
}