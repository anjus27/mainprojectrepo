<?php
session_start();

// $id=$_SESSION['logid']
?>
<?php
include 'connection.php';
if(isset($_POST['submit']))
{
    $b_id=$_POST["b_id"];
$cardno=$_POST["cardno"];
$cardname=$_POST["cardname"];
$month = $_POST["month"];
$year=$_POST["year"];
$cvv=$_POST["cvv"];
$bamount=$_POST["amount"];

$ll="select amount from tbl_bank where cardno='$cardno'";
    $resultpp=mysqli_query($con,$ll);
    $po=mysqli_fetch_array($resultpp);
    $balance=$po[0];
$sql="select * from tbl_bank where  cardno='$cardno' and cardname='$cardname' and month='$month' and year='$year' and cvv='$cvv' ";
$res=mysqli_query($con,$sql);
$no=mysqli_num_rows($res);
if($no==null)
{
	 
    
    echo"<script>alert('Invalid Details.........');
    document.location=('roompayment.php?id=$b_id');     
        </script>";
		
}

elseif($bamount>$balance)
{
    echo"<script>alert(' Insufficient balance.........');
    document.location=('roompayment.php?id=$b_id');     
        </script>";
}
else
{
    $sql1="update book_room set status=1 where `b_id` = $b_id";
    mysqli_query($con,$sql1);
    $b="select amount from tbl_bank where cardno='$cardno'";
    $result=mysqli_query($con,$b);
    $rowm=mysqli_fetch_array($result);
     $pamount=$rowm[0]-$bamount;
     $pay="update tbl_bank set amount=$pamount where `cardno` = $cardno";
    mysqli_query($con,$pay);


    $c="select amount from tbl_bank where cardno='$cardno'";
    $result45=mysqli_query($con,$c);
    $ro=mysqli_fetch_array($result45);
     $aamount=$ro[0]+$bamount;
    $payment="update tbl_bank  set amount=$aamount where `cardno` = $cardno";
    mysqli_query($con,$payment);

     echo"<script>alert('sucessful.........');
 
       document.location=('viewbooking.php?id=$b_id');
       </script>";

	?>
   
    <?php
}
}
?>