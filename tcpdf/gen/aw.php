<?php
//============================================================+
// File name   : example_006.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 006 for TCPDF class
//               WriteHTML and RTL support
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: WriteHTML and RTL support
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');
require_once('../../sql_connect.php');

$tracking = '';

 $query = "SELECT tracking_number, document_name, datetime_received, CONCAT( users.first_name,  ' ', users.last_name ) , 	submitted_by
		FROM documents
		INNER JOIN users ON documents.user_id = users.user_id
		WHERE document_id = ( 
		SELECT MAX( document_id ) 
		FROM documents )";

$result = mysqli_query($con, $query);

 while($row = mysqli_fetch_array($result))
 {
  $tracking = $row['tracking_number'];
  
 }


// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('Document Tracking System');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data


// set header and footer fonts

$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 10);

// add a page
$pdf->AddPage();


// create some HTML content


$html = '
<table>
	<tr>
		<th style="text-align: center" >Department of Education<br>Division of Southern Leyte<br>Document Tracking System</th>
       <th style="text-align: center">Department of Education<br>Division of Southern Leyte<br>Document Tracking System</th>
      <th style="text-align: center">Department of Education<br>Division of Southern Leyte<br>Document Tracking System</th>
	</tr>
	<tr>
		<br>
		<td style="text-align: center";><label>Tracking Number:</label><br><b><font face="Arial-Black" size="19">';
 $html .= $tracking;

 $html .= '</font></b><br><br><label>Document Name:</label><br><b>Wedding Certificate of Leizel Acibes</b><br><br><label>Date & Time Received:</label><br><b>09/13/17 8:00 AM</b><br><br><label>Submitted By:</label><br><br><b>Samson Kolorado</b><br><br><label>Received By:</label><br><br><b>Marjorie Crave</b></td>
		
		<td style="text-align: center";><label>Tracking Number:</label><br><b><font face="Arial-Black" size="19">20170907001</font></b><br><br><label>Document Name:</label><br><b>Wedding Certificate of Leizel Acibes</b><br><br><label>Date & Time Received:</label><br><b>09/13/17 8:00 AM</b><br><br><label>Submitted By:</label><br><br><b>Samson Kolorado</b><br><br><label>Received By:</label><br><br><b>Marjorie Crave</b></td>

		<td style="text-align: center";><label>Tracking Number:</label><br><b><font face="Arial-Black" size="19">20170907001</font></b><br><br><label>Document Name:</label><br><b>Wedding Certificate of Leizel Acibes</b><br><br><label>Date & Time Received:</label><br><b>09/13/17 8:00 AM</b><br><br><label>Submitted By:</label><br><br><b>Samson Kolorado</b><br><br><label>Received By:</label><br><br><b>Marjorie Crave</b></td>
		
	</tr>
	
</table>';

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// Print some HTML Cells




// reset pointer to the last page

// output the HTML content
//$pdf->writeHTML($html, true, false, true, false, '');

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// reset pointer to the last page
//$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('document tracking system.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
