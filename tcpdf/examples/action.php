<?php
require('tcpdf_include.php');
 
$pdf=new TCPDF();
 

$pdf->SetAutoPageBreak(true, 15);
 
$pdf->AddPage();

 

$htmlTable='
<label>Tracking Number:</label>
'.$tracking.'
<label>Date & Time Received:</label>
'.$_POST['datetime_received'].'
<label>Submitted by:</label>
'.$_POST['submitted_by'].'
';
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

$pdf->Output('pdf.pdf', 'I');
?>