<?php
require('rotation.php');

//Today we will see how to generate and watermark that PDF

class PDF extends PDF_Rotate
{
    function Header(){
        //put watermark
        $this->setFont('ARIAL', 'B', 50);
        $this->setTextColor(255,192,203);
        $this->RotateText(35, 190, 'Codeflix Demo', 45);
    }

    function RotateText($x, $y, $txt, $angle){
        //text rotated at its angle
        $this->Rotate($angle, $x, $y);
        $this->Text($x, $y, $txt);
        $this->Rotate(0);
    }
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);
$txt = "In this video we have focussed on how to generate a PDF file and then watermark that PDF file with out own text.\n\n";
for($i=0;$i<30;$i++){
    $pdf->MultiCell(0, 5, $txt, 0, 'J');
}
//to generate output pdf
$pdf->Output();












?>












