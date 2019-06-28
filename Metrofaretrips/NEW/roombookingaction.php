<?php
include 'connection.php';
session_start();


$lid=$_SESSION['lid'];


if(isset($_POST["submit"]))
{
    $hid=$_POST['hid'];
//$hotel=$_POST['hotel'];
$roomtype=$_POST['roomtype'];
$num_rooms=$_POST['num_rooms'];
$num_adults=$_POST['num_adults'];
$num_child=$_POST['num_child'];
//$bed=$_POST['bed'];
$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];

}




//exit;

$s="select * from tbl_room where roomtype='$room'";
$rs=mysqli_query($con,$s);
$titt=mysqli_fetch_array($rs);

//$id=$_SESSION[id];


//$id=$_SESSION['id']; 
$x=$titt['roid'];


$query="INSERT INTO book_room(`hid`,`lid`,`roid``,`roomtype`,`checkin`,`checkout`,`num_rooms`,
`num_adults`,`num_child`)values('$hid','$lid','$x','$hotel','$room','$checkin','$checkout',
'$num_rooms','$num_adults','$num_child')";
$result=$con->query($query);
$new_id = mysqli_insert_id($con);
$count=$con->affected_rows;

$q="update tbl_room set number=number-$num_rooms where roomtype='$room' and hid='$hid'";
$rs=mysqli_query($con,$q) or die(mysqli_error($con));



if($count>0)
{
    header("location:http://localhost/Metrofaretrips/octopus-master/octopus/viewbooking.php?id=$new_id    ");
    
}
else
{
 header("location:roombooking.php?status:failed");
}
?>