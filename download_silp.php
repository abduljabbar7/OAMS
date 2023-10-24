<?php
require_once('tcpdf/tcpdf.php'); // Include the TCPDF library

// Create a new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Set document information
$pdf->SetCreator('jabbar');
$pdf->SetAuthor('samad');
$pdf->SetTitle('Exam Slip');
$pdf->SetSubject('Exam Slip');
$pdf->SetKeywords('Exam, Slip');

// Add a page
$pdf->AddPage();

// Your exam slip content goes here
$pdf->SetFont('times', 'B', 12);
$pdf->Cell(0, 10, 'Exam Slip for', 0, 1, 'C');
$pdf->Cell(0, 10, $_POST['name'], 0, 1);
$pdf->Cell(0, 10, $_POST['fname'], 0, 1);
$pdf->Cell(0, 10, $_POST['cnic'], 0, 1);

// Output the PDF as a download
$pdf->Output('exam_slip.pdf', 'D');
?>