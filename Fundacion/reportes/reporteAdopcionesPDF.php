<?php
require('../../fpdf/fpdf.php');

class reporteAdopcionesPDF extends FPDF {
    function Header() {
        $this->SetFont('Arial','B',15);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(220,10,'Reporte de Adopciones',0,0,'C');
        // Line break
        $this->Ln(20);

        $this->SetFont('Arial','B',10);
        $this->Cell(50, 10, 'Nombre Adoptante', 1, 0, 'C', 0);
        $this->Cell(20, 10, 'CI', 1, 0, 'C', 0);
        $this->Cell(20, 10, 'Sexo', 1, 0, 'C', 0);
        $this->Cell(40, 10, 'Fecha de Nacimiento', 1, 0, 'C', 0);
        $this->Cell(20, 10, 'Celular', 1, 0, 'C', 0);
        $this->Cell(70, 10, utf8_decode('Dirección'), 1, 0, 'C', 0);
        $this->Cell(40, 10, 'Nombre Mascota', 1, 0, 'C', 0);
        $this->Cell(30, 10, 'Especie', 1, 0, 'C', 0);
        $this->Cell(30, 10, 'Sexo Mascota', 1, 0, 'C', 0);
        $this->Cell(20, 10, 'Color', 1, 0, 'C', 0);
        $this->Cell(40, 10, utf8_decode('Fecha de Adopción'), 1, 1, 'C', 0);
    }

    function Footer() {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
    }
}

require '../config.php';

$pdf = new reporteAdopcionesPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L', 'A3');
$pdf->SetFont('Times','',10);

$where = array();
$selectedEspecie = "";
$selectedSexo = "";
$startDate = "";
$endDate = "";

if (isset($_POST['rEspecie']) && $_POST['rEspecie'] != '' && $_POST['rEspecie'] != 'Todos') {
    $selectedEspecie = $_POST['rEspecie'];
    $where[] = " M.especie = '$selectedEspecie'";
}
if (isset($_POST['rSexo']) && $_POST['rSexo'] != '' && $_POST['rSexo'] != 'Todos') {
    $selectedSexo = $_POST['rSexo'];
    $where[] = " M.sexo = '$selectedSexo'";
}
if (isset($_POST['rFechaInicio']) && $_POST['rFechaInicio'] != '') {
    $startDate = $_POST['rFechaInicio'];
}
if (isset($_POST['rFechaFin']) && $_POST['rFechaFin'] != '') {
    $endDate = $_POST['rFechaFin'];
}
if ($startDate != "" && $endDate != "") {
    $where[] = " M.fechaAdopcion between '$startDate' AND '$endDate'";
} else if ($startDate != "" && $endDate == "") {
    $where[] = " M.fechaAdopcion between '$startDate' AND NOW()";
} else if ($endDate != "" && $startDate == "") {
    $where[] = " M.fechaAdopcion between '1800-01-01' AND '$endDate'";
}

$sqlCliente   = 
"SELECT SA.nombre, SA.apllpat, SA.apllmat, SA.sexo, SA.ci, SA.fechaNac, 
    SA.direccion, SA.num, SA.aprobada, M.nombre as nombreMascota, M.especie, M.adoptable, M.sexo as sexoMascota, M.color, M.fechaAdopcion 
    FROM solicitudadopcion SA
    INNER JOIN mascota M ON M.id = SA.mascota_id AND SA.aprobada = 2";

if (!empty($where)) {
    $sqlCliente .= ' WHERE ' . implode(' AND ', $where);
}
$queryCliente = mysqli_query($con, $sqlCliente);

while ($dataCliente = mysqli_fetch_array($queryCliente)) { 
    $nombreAdoptante = $dataCliente['apllpat'] . " " . $dataCliente['apllmat'] . " " . $dataCliente['nombre'];
    $pdf->Cell(50, 10, $nombreAdoptante, 1, 0, 'L', 0);
    $pdf->Cell(20, 10, $dataCliente['ci'], 1, 0, 'L', 0);
    $pdf->Cell(20, 10, $dataCliente['sexo'], 1, 0, 'L', 0);
    $pdf->Cell(40, 10, $dataCliente['fechaNac'], 1, 0, 'L', 0);
    $pdf->Cell(20, 10, $dataCliente['num'], 1, 0, 'L', 0);
    $pdf->Cell(70, 10, $dataCliente['direccion'], 1, 0, 'L', 0);
    $pdf->Cell(40, 10, $dataCliente['nombreMascota'], 1, 0, 'L', 0);
    $pdf->Cell(30, 10, $dataCliente['especie'], 1, 0, 'L', 0);
    $pdf->Cell(30, 10, $dataCliente['sexoMascota'], 1, 0, 'L', 0);
    $pdf->Cell(20, 10, $dataCliente['color'], 1, 0, 'L', 0);
    $pdf->Cell(40, 10, $dataCliente['fechaAdopcion'], 1, 1, 'L', 0);
}

$pdf->Output();
?>
                                                                