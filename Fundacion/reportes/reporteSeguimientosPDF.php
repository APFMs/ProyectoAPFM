<?php
require('../../fpdf/fpdf.php');

class reporteSeguimientosPDF extends FPDF {
    var $widths;
    var $aligns;

    function SetWidths($w)
    {
        //Set the array of column widths
        $this->widths=$w;
    }

    function SetAligns($a)
    {
        //Set the array of column alignments
        $this->aligns=$a;
    }

    function Row($data)
    {
        //Calculate the height of the row
        $nb=0;
        for($i=0;$i<count($data);$i++)
            $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
        $h=10*$nb;
        //Issue a page break first if needed
        $this->CheckPageBreak($h);
        //Draw the cells of the row
        for($i=0;$i<count($data);$i++)
        {
            $w=$this->widths[$i];
            $a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
            //Save the current position
            $x=$this->GetX();
            $y=$this->GetY();
            //Draw the border
            $this->Rect($x,$y,$w,$h);
            //Print the text
            $this->MultiCell($w,10,$data[$i],0,$a);
            //Put the position to the right of the cell
            $this->SetXY($x+$w,$y);
        }
        //Go to the next line
        $this->Ln($h);
    }

    function CheckPageBreak($h)
    {
        //If the height h would cause an overflow, add a new page immediately
        if($this->GetY()+$h>$this->PageBreakTrigger)
            $this->AddPage('L', 'A3');
    }

    function NbLines($w,$txt)
    {
        //Computes the number of lines a MultiCell of width w will take
        $cw=&$this->CurrentFont['cw'];
        if($w==0)
            $w=$this->w-$this->rMargin-$this->x;
        $wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
        $s=str_replace("\r",'',$txt);
        $nb=strlen($s);
        if($nb>0 and $s[$nb-1]=="\n")
            $nb--;
        $sep=-1;
        $i=0;
        $j=0;
        $l=0;
        $nl=1;
        while($i<$nb)
        {
            $c=$s[$i];
            if($c=="\n")
            {
                $i++;
                $sep=-1;
                $j=$i;
                $l=0;
                $nl++;
                continue;
            }
            if($c==' ')
                $sep=$i;
            $l+=$cw[$c];
            if($l>$wmax)
            {
                if($sep==-1)
                {
                    if($i==$j)
                        $i++;
                }
                else
                    $i=$sep+1;
                $sep=-1;
                $j=$i;
                $l=0;
                $nl++;
            }
            else
                $i++;
        }
        return $nl;
    }

    function Header() {
        $this->SetFont('Arial','B',15);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(220,10,'Reporte de Seguimientos',0,0,'C');
        // Line break
        $this->Ln(20);

        $this->SetFont('Arial','B',10);
        $this->Cell(40, 10, 'Nombre Mascota', 1, 0, 'C', 0);
        $this->Cell(60, 10, 'Adoptante', 1, 0, 'C', 0);
        $this->Cell(40, 10, 'Voluntario', 1, 0, 'C', 0);
        $this->Cell(40, 10, 'Fecha de Visita', 1, 0, 'C', 0);
        $this->Cell(180, 10, 'Reporte', 1, 0, 'C', 0);
        $this->Cell(40, 10, utf8_decode('Fundación'), 1, 1, 'C', 0);
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

$pdf = new reporteSeguimientosPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L', 'A3');
$pdf->SetFont('Times','',11);
$pdf->SetWidths(array(40,60,40,40,180,40));

$where = array();
$selectedMascota = "";
$selectedVoluntario = "";
$startDate = "";
$endDate = "";
$fundId = $_POST["rFundId"];
$fundName = $_POST["rFundName"];

if (isset($_POST['rMascota']) && $_POST['rMascota'] != '' && $_POST['rMascota'] != 'Todos') {
    $selectedMascota = $_POST['rMascota'];
    $where[] = " S.mascota_id = '$selectedMascota'";
}
if (isset($_POST['rVoluntario']) && $_POST['rVoluntario'] != '' && $_POST['rVoluntario'] != 'Todos') {
    $selectedVoluntario = $_POST['rVoluntario'];
    $where[] = " M.idVoluntario = '$selectedVoluntario'";
}
if (isset($_POST['rFechaInicio']) && $_POST['rFechaInicio'] != '') {
    $startDate = $_POST['rFechaInicio'];
}
if (isset($_POST['rFechaFin']) && $_POST['rFechaFin'] != '') {
    $endDate = $_POST['rFechaFin'];
}
if ($startDate != "" && $endDate != "") {
    $where[] = " SE.fechaVisita between '$startDate' AND '$endDate'";
} else if ($startDate != "" && $endDate == "") {
    $where[] = " SE.fechaVisita between '$startDate' AND NOW()";
} else if ($endDate != "" && $startDate == "") {
    $where[] = " SE.fechaVisita between '1800-01-01' AND '$endDate'";
}

$sqlCliente   =
    "SELECT S.id, CONCAT(S.nombre, ' ',S.apllpat, ' ', S.apllmat) as 'Adoptante', M.nombre as 'Mascota',
        M.idVoluntario, P.nombre as 'Voluntario', M.id as mascotaId, SE.fechaVisita, SE.reporte
    FROM solicitudadopcion S 
    INNER JOIN mascota M ON M.id=S.mascota_id 
    LEFT JOIN seguimiento SE ON SE.solicitud_fk=S.id 
    INNER JOIN persona P ON P.id=M.idVoluntario";
        
$where[] = " S.aprobada=2 AND M.fundaciones_id=$fundId";

if (!empty($where)) {
    $sqlCliente .= ' WHERE ' . implode(' AND ', $where);
}

$sqlCliente .= " ORDER BY Mascota, SE.fechaVisita";

$queryCliente = mysqli_query($con, $sqlCliente);

while ($dataCliente = mysqli_fetch_array($queryCliente)) { 
    $pdf->Row(array($dataCliente['Mascota'], $dataCliente['Adoptante'], $dataCliente['Voluntario'], $dataCliente['fechaVisita'], $dataCliente['reporte'], $fundName));
    /*$pdf->Cell(40, 10, $dataCliente['Mascota'], 1, 0, 'L', 0);
    $pdf->Cell(50, 10, $dataCliente['Adoptante'], 1, 0, 'L', 0);
    $pdf->Cell(30, 10, $dataCliente['Voluntario'], 1, 0, 'L', 0);
    $pdf->Cell(40, 10, $dataCliente['fechaVisita'], 1, 0, 'L', 0);
    $pdf->Cell(100, 10, $dataCliente['reporte'], 1, 0, 'L', 0);
    $pdf->Cell(40, 10, $fundName, 1, 1, 'L', 0);*/
}


$pdf->Output();
?>
                                                                