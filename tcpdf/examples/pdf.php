<?php


// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);





// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor


// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
//$pdf->SetFont('dejavusans', '', 14, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

// Set some content to print<<<EOD
$html = <<<EOD
 '<table>
  <thead>
    <tr>
      <th>Department of Education<br>Division of Southern Leyte<br>Document Tracking System</th>
       <th>Department of Education<br>Division of Southern Leyte<br>Document Tracking System</th>
      <th>Department of Education<br>Division of Southern Leyte<br>Document Tracking System</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
     <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
       <td><label>Document Tracking:</label> 2017090701<br><label>Document Name:</label> Wedding Certificate of Leizel Acibes<br><label>Date & Time Received:</label> 09/13/17 8:00 AM<br><label>Received By:<label><u>Marjorie Crave</u></td>
        <td><label>Document Tracking:</label> 2017090701<br><label>Document Name:</label> Wedding Certificate of Leizel Acibes<br><label>Date & Time Received:</label> 09/13/17 8:00 AM<br><label>Received By:<label><u>Marjorie Crave</u></td>
          <td><label>Document Tracking:</label> 2017090701<br><label>Document Name:</label> Wedding Certificate of Leizel Acibes<br><label>Date & Time Received:</label> 09/13/17 8:00 AM<br><label>Received By:<label><u>Marjorie Crave</u></td>
    </tr>
</tbody>
</table>'
EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('pdf.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
