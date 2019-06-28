<?php
include 'connection.php';
session_start();
?>
<html>
<body>
<?php
$id = $_GET['id'];


$s="select * from book_room where id='$id'";
$row=mysqli_fetch_array(mysqli_query($con,$s));


$titto = $row['num_rooms'];
$q="update tbl_room set number=number+$titto where  roid='".$row['roid']."'";
$rs=mysqli_query($con,$q) or die(mysqli_error($con));




//$query="delete from book_room where id='$id'";
//$result=$con->query($query);
?>
<?php
echo "<script>alert('Booking Cancelled, Contact the hotel directly for refund')</script>";
echo "<script>location.href='viewbooking.php'</script>";
?>
</body>
</html>