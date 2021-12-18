
<?php
include("fpdf182/fpdf.php");
$boleta=$_POST['boleta'];
$datos=["boleta","nombre","apellidop","apellidom","fechanacim","curp","calle",
"numero","colonia","alcaldia","cp","tel","email","escuela","entidadf","promedio"];
$datosc=["salon","horario"];
$datos2=["Boleta","Nombre","Apellido paterno","Apellido materno","Fecha de nacimiento","Curp","Calle",
"Numero","Colonia","Alcaldia","Codigo postal","Teléfono","Email","Escuela","Entidad federativa","Promedio"];
$datosc2=["Salón","Horario"];
    
class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        $this->Image('img/logo_escom.png',10,8,45);
        $this->SetFont("Arial","",25);
        $this->SetY(25);
        $this->SetX(65);
        $this->Cell(10,10,utf8_decode("Información personal"));
        $this->Image('img/ipn_logo.png',165,1,45);
        $this->Ln(20);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

    $conexion = new mysqli('localhost','root','','proyecto');
    $conexion->set_charset("utf8");
    $sql= "SELECT * from usuarios where boleta = '$boleta'";
	$result = mysqli_query($conexion, $sql);
    $fila = mysqli_fetch_assoc($result);

    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',10);
    for($i=0;$i<=15;$i++){
        $dato=$fila[$datos[$i]];
        $pdf->Cell(0,10,utf8_decode($datos2[$i]).": ".utf8_decode($dato),0,1);
    }
    $pdf->SetFont("Arial","",25);
        $pdf->SetY(210);
        $pdf->SetX(60);
        $pdf->Cell(0,10,utf8_decode("Aplicación del examen"),0,1);

    $sql= "SELECT * from cita where boleta = '$boleta'";
	$result = mysqli_query($conexion, $sql);
    $fila = mysqli_fetch_assoc($result);
    $pdf->SetFont('Arial','',10);
    for($i=0;$i<=1;$i++){
        $dato=$fila[$datosc[$i]];
        $pdf->Cell(0,10,utf8_decode($datosc2[$i]).": ".utf8_decode($dato),0,1);
    }
    $pdf->Output();
    mysql_free_result($result);

?>