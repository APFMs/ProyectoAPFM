<?php
require('../../fpdf/fpdf.php');

class reporteMascotasPDF extends FPDF {
    function Header() {
        $this->SetFont('Arial','B',15);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(220,10,'Reporte de Mascotas',0,0,'C');
        // Line break
        $this->Ln(20);

        $this->SetFont('Arial','B',10);
        $this->Cell(50, 10, 'Nombre Mascota', 1, 0, 'C', 0);
        $this->Cell(30, 10, 'Especie', 1, 0, 'C', 0);
        $this->Cell(30, 10, 'Edad', 1, 0, 'C', 0);
        $this->Cell(20, 10, 'Sexo', 1, 0, 'C', 0);
        $this->Cell(40, 10, 'Color', 1, 0, 'C', 0);
        $this->Cell(30, 10, utf8_decode('Tamaño'), 1, 0, 'C', 0);
        $this->Cell(35, 10, utf8_decode('Estado Adopción'), 1, 0, 'C', 0);
        $this->Cell(60, 10, 'Nombre Voluntario', 1, 0, 'C', 0);
        $this->Cell(60, 10, utf8_decode('Fundación'), 1, 1, 'C', 0);
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

$pdf = new reporteMascotasPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L', 'A3');
$pdf->SetFont('Times','',10);

$where = array();
$selectedEspecie = "";
$selectedSexo = "";
$selectedEdad = "";
$selectedAdoptable = "";
$selectedVoluntario = "";
$fundId = $_POST["rFundId"];
$fundName = $_POST["rFundName"];

if (isset($_POST['rEspecie']) && $_POST['rEspecie'] != '' && $_POST['rEspecie'] != 'Todos') {
    $selectedEspecie = $_POST['rEspecie'];
    $where[] = " M.especie = '$selectedEspecie'";
}
if (isset($_POST['rSexo']) && $_POST['rSexo'] != '' && $_POST['rSexo'] != 'Todos') {
    $selectedSexo = $_POST['rSexo'];
    $where[] = " M.sexo = '$selectedSexo'";
}
if (isset($_POST['rEdad']) && $_POST['rEdad'] != '' && $_POST['rEdad'] != 'Todos') {
    $selectedEdad = $_POST['rEdad'];
    $where[] = " M.edad = '$selectedEdad'";
}
if (isset($_POST['rAdoptable']) && $_POST['rAdoptable'] != '' && $_POST['rAdoptable'] != '0') {
    $selectedAdoptable = $_POST['rAdoptable'];
    $where[] = " M.adoptable = '$selectedAdoptable'";
}
if (isset($_POST['rVoluntario']) && $_POST['rVoluntario'] != '' && $_POST['rVoluntario'] != 'Todos') {
    $selectedVoluntario = $_POST['rVoluntario'];
    $where[] = " p.id = $selectedVoluntario";
}

$sqlCliente   =
    "SELECT M.nombre, M.especie, M.edad, M.adoptable, M.sexo, M.color, M.tam, M.fundaciones_id, P.nombre as nombreVoluntario, P.apllpat as apellidoV1, P.apllmat as apellidoV2
    FROM mascota M
    INNER JOIN persona P On P.id = M.idVoluntario AND P.estado = 1";
$where[] = " M.fundaciones_id=$fundId";

if (!empty($where)) {
    $sqlCliente .= ' WHERE ' . implode(' AND ', $where);
}

$queryCliente = mysqli_query($con, $sqlCliente);

$adoptables = array(0=>"Todos", 1=>"Adoptable", 3=>"Reservado", 2=>"Adoptado");

while ($dataCliente = mysqli_fetch_array($queryCliente)) {
  $nombreVoluntario = $dataCliente['apellidoV1'] . " " . $dataCliente['apellidoV2'] . " " . $dataCliente['nombreVoluntario'];
  $estadoAdopcion = "";
  foreach ($adoptables as $adoptable_key=>$adoptable_val) {
      if ($adoptable_key == $dataCliente['adoptable']) {
          $estadoAdopcion = $adoptable_val;
      }
  }
  $pdf->Cell(50, 10, $dataCliente['nombre'], 1, 0, 'L', 0);
  $pdf->Cell(30, 10, $dataCliente['especie'], 1, 0, 'L', 0);
  $pdf->Cell(30, 10, $dataCliente['edad'], 1, 0, 'L', 0);
  $pdf->Cell(20, 10, $dataCliente['sexo'], 1, 0, 'L', 0);
  $pdf->Cell(40, 10, $dataCliente['color'], 1, 0, 'L', 0);
  $pdf->Cell(30, 10, $dataCliente['tam'], 1, 0, 'L', 0);
  $pdf->Cell(35, 10, $estadoAdopcion, 1, 0, 'L', 0);
  $pdf->Cell(60, 10, $nombreVoluntario, 1, 0, 'L', 0);
  $pdf->Cell(60, 10, $fundName, 1, 1, 'L', 0);  
}

$pdf->Output();
?>
                                                                
