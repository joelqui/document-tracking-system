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


$html = '<h><b>Tracking Number&nbsp;: 20170907001
		<br>Document Name&nbsp;&nbsp;: Salary Claim of Person A &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Submitted By&nbsp;:Person B</b>
		</h>
<br>
<br>
<table border= "1"  cellpadding="4" >
	<tr>
		<th style="text-align: center"><b>DATE & TIME</b></th>
		<th align="center"><b>STATUS</b></th>
		<th align="center"><b>USER</b></th>
		<th align="center"><b>REMARKS</b></th>
	</tr>
	
	<tr>
		<td style="text-align: center">09/07/17 8:00 AM</td>
		<td style="text-align: center">RECEIVED AT RECORDS</td>
		<td style="text-align: center">EDALINE</td>
		<td style="text-align: center"></td>
	</tr>
	<tr>
		<td style="text-align: center">09/07/17 9:30 AM</td>
		<td style="text-align: center">FORWARDED TO CID</td>
		<td style="text-align: center">EDALINE</td>
		<td style="text-align: center"></td>
	</tr>
	<tr>
		<td style="text-align: center">09/07/17 10:00 AM</td>
		<td style="text-align: center">RECEIVED AT CID</td>
		<td style="text-align: center">MALOU</td>
		<td style="text-align: center"></td>
	</tr>
	<tr>
		<td style="text-align: center">09/07/17 1:08 AM</td>
		<td style="text-align: center">RECEIVED AT RECORDS</td>
		<td style="text-align: center">MALOU</td>
		<td style="text-align: center"></td>
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
