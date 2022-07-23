<?php
$conn = mysqli_connect("localhost","root","","pro");
if(isset($_POST['bookticket'])){
$pid = $_POST['passid'];
$id = $_POST['planeplaneidid1'];
$age = $_POST['age'];
$From = $_POST['From'];
$to = $_POST['to'];
$arrivaltime = $_POST['arrivaltime'];
$depttime = $_POST['depttime'];
$name = $_POST['name'];
$city = $_POST['city'];
$waaya = $_POST['waaya'];
$zip = $_POST['zip'];
$email = $_POST['email'];
$mobileno = $_POST['mobileno'];
$fair = $_POST['fair123'];
$date = htmlentities($_POST['date']);

$sql = "INSERT INTO `ticket` (`pid`, `aid1`, `aid2`, `seatno`, `pname`, `age`, `dist`, `state`, `zip`, `pnrid`, `email`, `mobileno`,`date`) VALUES ('$id', '$to', '$From', '0', '$name', '$age', '$city', '$waaya', '$zip', '$pid', '$email', '$mobileno','".$date."');
";

$result = mysqli_query($conn,$sql);






                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'pro');
 
                $query = "SELECT * FROM `airport` where `airport`.`id`= '$From';";

                $query_run = mysqli_query($connection, $query);
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
                                $n1 =  $row['name'];
                                $d1 =  $row['dist'];
                                $s1 =  $row['state'];
                                $z1 =  $row['zip'];       
                    }
                }
                else 
                {
                    echo "No Record Found";
                }

                $query = "SELECT * FROM `airport` where `airport`.`id`= '$to';";

                $query_run = mysqli_query($connection, $query);
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
                                $n2 =  $row['name'];
                                $d2 =  $row['dist'];
                                $s2 =  $row['state'];
                                $z2 =  $row['zip'];       
                    }
                }
                else 
                {
                    echo "No Record Found";
                }






require("FPDF/fpdf.php");
$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('user.jpg',0,0,210,297);
$pdf->SetFont("Arial","",12);
$pdf->Cell(0,10,"Ticket",1,1,'C');
#1 ZERO BOX 2 NEXT LINE
$pdf->Cell(30,10,"Name",0,0);
$pdf->Cell(40,10,$name,0,1);

$pdf->Cell(30,5,"FAIR",0,0);
$pdf->Cell(40,5,$fair,0,1);

$pdf->Cell(30,10,"date",0,0);
$pdf->Cell(40,10,$date,0,0);
$pdf->Cell(30,10,"bookin date",0,0);
$pdf->Cell(40,10,date("Y-m-d"),0,1);

$pdf->Cell(30,15,"Waaya",0,0);
$pdf->Cell(40,15,$waaya,0,0);
$pdf->Cell(40,15, "|",0,0);
$pdf->Cell(30,15,"City",0,0);
$pdf->Cell(40,15,$city,0,1);
$pdf->Cell(30,10,"Pin Code",0,0);
$pdf->Cell(40,10,$zip,0,1);
$pdf->Cell(40,10,"",0,1);


$pdf->Cell(40,6,"PNR NO AND PLANE NO",0,1);
$pdf->Cell(30,5,"Passenger ID",0,0);
$pdf->Cell(40,5,$pid,0,0);
$pdf->Cell(40,5, "|",0,0);
$pdf->Cell(30,5,"Plane Id",0,0);
$pdf->Cell(40,5,$id,0,1);

$pdf->Cell(40,15,"PLANE DETAILS",0,1);
$pdf->Cell(30,2,"From",0,0);
$pdf->Cell(40,2,$From,0,0);
$pdf->Cell(40,2, "|",0,0);
$pdf->Cell(30,2,"To",0,0);
$pdf->Cell(40,2,$to,0,1);

$pdf->Cell(30,5,"name",0,0);
$pdf->Cell(40,5,$n1,0,0);
$pdf->Cell(40,5, "|",0,0);
$pdf->Cell(30,5,"name",0,0);
$pdf->Cell(40,5,$n2,0,1);

$pdf->Cell(30,10,"Dept Time",0,0);
$pdf->Cell(40,10,$depttime,0,0);
$pdf->Cell(40,10, "|",0,0);
$pdf->Cell(30,10,"Arrival Time",0,0);
$pdf->Cell(40,10,$arrivaltime,0,1);

$pdf->Cell(30,5,"dist",0,0);
$pdf->Cell(40,5,$d1,0,0);
$pdf->Cell(40,5, "|",0,0);
$pdf->Cell(30,5,"dist",0,0);
$pdf->Cell(40,5,$d2,0,1);

$pdf->Cell(30,5,"state",0,0);
$pdf->Cell(40,5,$s1,0,0);
$pdf->Cell(40,5, "|",0,0);
$pdf->Cell(30,5,"state",0,0);
$pdf->Cell(40,5,$s2,0,1);

$pdf->Cell(30,5,"pin code",0,0);
$pdf->Cell(40,5,$z1,0,0);
$pdf->Cell(40,5, "|",0,0);
$pdf->Cell(30,5,"pin code",0,0);
$pdf->Cell(40,5,$z2,0,1);


$pdf->Cell(40,15,"CONTACT DETAILS",0,1);
$pdf->Cell(30,2,"Email",0,0);
$pdf->Cell(40,2,$email,0,1);
// $pdf->Cell(40,2, "|",0,0);
$pdf->Cell(30,10,"Mobile no",0,0);
$pdf->Cell(0,10,$mobileno,0,1);




$pdf->Cell(40,2, "",0,1);
$pdf->Cell(40,2, "",0,1);
$pdf->Cell(40,2, "",0,1);
$pdf->Cell(40,2, "",0,1);
$pdf->Cell(40,2, "",0,1);
$pdf->Cell(40,2, "",0,1);
$pdf->Cell(40,2, "",0,1);



$pdf->Cell(0,10,"THANKS FOR VISITING
HAVE A NICE JOURNY WITH US",1,1,'C');
$pdf->output();



if($result){
    echo '<div class="alert alert-success" role="alert">
    we are vary glad to inform you that your data inserted suuccessfully
  </div>';
//   header('Location: homepage.php');
}
}
?>