<?php 
header('Content-Type: text/html; charset=utf-8'); // Setando Charset

require('../fpdf/fpdf.php');

$pdf = new FPDF();
$pdf -> AddPage();
$pdf -> SetFont('Courier', 'B', 24);
$pdf -> Cell(40,10, 'MIAU MIAU MIAU');
$pdf->Image('https://w7.pngwing.com/pngs/115/787/png-transparent-siamese-cat-black-cat-halloween-black-cat-mammal-cat-like-mammal-animals-thumbnail.png', 60, 30, 90, 0, 'PNG');
$pdf -> Output();
?>