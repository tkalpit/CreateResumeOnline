<?php
$name=$_POST['name1'];
$address=$_POST['add'];
$contact=$_POST['contact'];
$github=$_POST['github'];
$linkdin=$_POST['linkdin'];
$objective=$_POST['objective'];
$project=$_POST['project'];
$project1=$_POST['project1'];
$project2=$_POST['project2'];
$workshop1=$_POST['workshop1'];
$workshop2=$_POST['workshop2'];
$workshop3=$_POST['workshop3'];
$certificate1=$_POST['certificate1'];
$certificate2=$_POST['certificate2'];
$certificate3=$_POST['certificate3'];
$skills1=$_POST['skills1'];
$skills2=$_POST['skills2'];
$skills3=$_POST['skills3'];
$act1=$_POST['act1'];
$act2=$_POST['act2'];
$act3=$_POST['act3'];
$degree=$_POST['degree'];
$year1=$_POST['year1'];
$university1=$_POST['university1'];
$percentage1=$_POST['percentage1'];
$year2=$_POST['year2'];
$university2=$_POST['university2'];
$percentage2=$_POST['percentage2'];
$year3=$_POST['year3'];
$university3=$_POST['university3'];
$percentage3=$_POST['percentage3'];
$father=$_POST['father'];
$nation=$_POST['nation'];
$birth=$_POST['birth'];
$description=$_POST['description'];
require('fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();

$pdf->SetFont("Arial","",16);
$pdf->Cell(0,20,$name,0,1);
$pdf->SetFont("Arial","",11);
$pdf->Cell(0,0,$address,0,1);
$pdf->SetFont("Arial","",11);
$pdf->Cell(0,10,"Mobile: {$contact}",0,1);
$pdf->SetFont("Arial","",11);
$pdf->Cell(0,0,"GitHub: {$github}",0,1,R);
$pdf->Cell(0,10,"Linkedin: {$linkdin}",0,1,R);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(0,10,"OBJECTIVE:",0,1);
$pdf->SetFont("Arial","",11);
$pdf->MultiCell(0,5,$objective,0,1);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(0,10,"PROJECT PROFILE:",0,1);
$pdf->SetFont("Arial","",11);
$pdf->Cell(0,7,"Project Name: {$project}",0,1,L);
$pdf->SetFont("Arial","",11);
$pdf->Cell(0,7,"Plateform: {$project1}",0,1,L);
$pdf->SetFont("Arial","",11);
$pdf->MultiCell(0,5,"Description: {$project2}",0,1);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(0,10,"WORKSHOPS:",0,1);
$pdf->SetFont("Arial","",11);
$pdf->MultiCell(0,7,"1. $workshop1",0,1);
$pdf->MultiCell(0,7,"2. $workshop2",0,1);
$pdf->MultiCell(0,7,"3. $workshop3",0,1);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(0,10,"TECHNICAL CERTIFICATIONS:",0,1);
$pdf->SetFont("Arial","",11);
$pdf->Cell(0,7,"1. $certificate1",0,1);
$pdf->Cell(0,7,"2. $certificate2",0,1);
$pdf->Cell(0,7,"3. $certificate3",0,1);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(0,10,"PROGRAMING SKILLS:",0,1);
$pdf->SetFont("Arial","",11);
$pdf->Cell(0,7,"1. $skills1",0,1);
$pdf->Cell(0,7,"2. $skills2",0,1);
$pdf->Cell(0,7,"3. $skills3",0,1);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(0,10,"EXTRACURRICULAR ACTIVITIES:",0,1);
$pdf->SetFont("Arial","",11);
$pdf->Cell(0,7,"1. $act1",0,1);
$pdf->Cell(0,7,"2. $act2",0,1);
$pdf->Cell(0,7,"3. $act3",0,1);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(0,10,"ACADEMICS:",0,1);
$pdf->SetFont("Arial","",11);
$pdf->Cell(30,7,"Sno.",1,0);
$pdf->Cell(50,7,"Qualifying Examination",1,0);
$pdf->Cell(40,7,"Year of Passing",1,0);
$pdf->Cell(30,7,"University",1,0);
$pdf->Cell(30,7,"Percentage.",1,1);
$pdf->Cell(30,7,"1.",1,0);
$pdf->Cell(50,7,$degree,1,0);
$pdf->Cell(40,7,$year1,1,0);
$pdf->Cell(30,7,$university1,1,0);
$pdf->Cell(30,7,$percentage1,1,1);
$pdf->Cell(30,7,"2.",1,0);
$pdf->Cell(50,7,"Secondary",1,0);
$pdf->Cell(40,7,$year2,1,0);
$pdf->Cell(30,7,$university2,1,0);
$pdf->Cell(30,7,$percentage2,1,1);
$pdf->Cell(30,7,"3.",1,0);
$pdf->Cell(50,7,"Sr. Secondary",1,0);
$pdf->Cell(40,7,$year3,1,0);
$pdf->Cell(30,7,$university3,1,0);
$pdf->Cell(30,7,$percentage3,1,1);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(0,10,"PERSONAL DETAILS:",0,1);
$pdf->SetFont("Arial","",11);
$pdf->Cell(0,7,"Father Name: {$father}",0,1);
$pdf->Cell(0,7,"Nationality    : {$nation}",0,1);
$pdf->Cell(0,7,"Date of Birth : {$birth}",0,1);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(0,10,"DESCRIPTION:",0,1);
$pdf->SetFont("Arial","",11);
$pdf->Cell(0,10,"$description",0,1);

$pdf->output();
?>