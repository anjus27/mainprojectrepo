<?php
require('fpdf.php');
include 'connection.php';
//include(".dbconnection.php");
//$db = new DbConnection;
session_start();

$cid=$_GET['id'];
$_SESSION['cid']=$cid;
$query="select * from crime where cid='$cid'";
$result=$con->query($query);
$row=$result->fetch_assoc();
{
	$area=$row['area'];
	$complainttype=$row['complainttype'];
	$referencenumber=$row['referencenumber'];
	$complaintreport=$row['complaintreport'];
  
}

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('logo.png',5,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'Case Report',0,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}

}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
//$pdf->Image($imgs,130,20,50,40);
$pdf->Cell(0,10,'',0,1);
$pdf->Cell(0,10,'',0,1);
$pdf->Cell(0,10,'',0,1);
$pdf->Cell(0,10,"                                      Location             :     $area",0,1);
$pdf->Cell(0,10,"                                      Complaint Registered :     $complainttype",0,1);
$pdf->Cell(0,10,"                                      Your ReferenceNumber :     $referencenumber",0,1);
$pdf->Cell(0,10,"                                      Your Complaint Report :    $complaintreport",0,1);
//for($i=1;$i<=40;$i++)
//$pdf->Cell(0,10,'Srl.No',1,1,'C');
//$pdf->Cell(0,10,'Item',1,0,'C');

//$pdf->Cell(50,10,"PROGRAM",1,0,'C');
//$pdf->Cell(50,10,"CHEST_NO",1,1,'C');

$pdf->Cell(0,10,'',0,1);
$pdf->Cell(0,10,'',0,1);
$width_cell=array(50,50,50,40);
$pdf->SetFillColor(193,229,252); // Background color of header 
// Header starts /// 

//$pdf->Cell($width_cell[0],10,'Sl.No',1,0,'C',true); // First header column 
//$pdf->Cell($width_cell[1],10,'PROGRAM',1,0,'C',true); // Second header column
//$pdf->Cell($width_cell[2],10,'CHEST NUMBER',1,0,'C',true); // Third header column 

//// header is over ///////
$i=1;
//$det= mysqli_query($con,"SELECT * FROM `kalolsavam_tb12_registerd_program` where student_id=");
//while ($row3 = mysqli_fetch_array($ex)) {
 // $pgm=$row3["item"];
//  $chestno=$row3["chest_no"];
 // $pdf->Cell($width_cell[0],10,"$i",1,0,'C',true); // First header column 
//$pdf->Cell($width_cell[1],10,"$pgm",1,0,'C',true); // Second header column
//$pdf->Cell($width_cell[2],10,"$chestno",1,0,'C',true); // Third header column 
//$pdf->Cell($width_cell[3],10,'',1,1,'C',true);
//$i++;
//}
$pdf->Output();



?>
<!-- shuffle($photos) -->