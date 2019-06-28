<?php
include 'connection.php';
include 'dbconnection.php';
$db= new DbConnection;
session_start();
if(!(isset($_SESSION['lid'])))
{
	header('location:index.php');
}
else{
	$lid=$_SESSION['lid'];
}


//$sql = "SELECT r.*, c.* FROM retailer_hoteladd as r, tbl_city as c WHERE r.lid='$lid' and c.ctid=r.ctid";
			//$result = mysqli_query($con,$sql) or die(mysqli_error());



$sql = "SELECT c.*,r.* FROM retailer_hoteladd as c , tbl_room as r WHERE c.lid='$lid' and c.hid=r.hid group by roomtype";
			$result = mysqli_query($con,$sql) or die(mysqli_error());
			             
              
            

?>

<!doctype html>
<html class="fixed">
<head>

<style>
		table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  align:center;
  width: 10%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

table, th, td { 
    border: 1px solid black; 
} 


</style>
	</head>
	<body>
		<section class="body">

        <section role="main" class="content-body">


                <form method="POST" action="#">
				<section role="main" class="content-body">

				<br>
        <br>
				<br>

				<a href="retailerhome.php">Back to home</a>
			
				<table border="2" align="center">
                   <tr>
				   <th>Hotel Name</th>
				   <th>Type of room</th>
				   <th>Bed</th>
					 <th>Number</th>
					 <th>Rate per night</th>
					 <th>Image</th>
				  
				<?php
				while ($row = mysqli_fetch_array($result)){
//$hid=$row['hid'];
					$hotelname=$row['hotelname'];
					$roomtype=$row['roomtype'];
				
					$number=$row['number'];
					$ratepernight=$row['ratepernight'];
					$profilepic=$row['profilepic'];

				?>
			
				
                
        <tr>
        <td><input type="text" name="hotelname" value="<?php echo $hotelname;?>" id="hotelname" required/></td>
         <td><input type="text" name="roomtype"  value="<?php echo $roomtype;?>" id="roomtype" required/></td> 
         <td><input type="text" name="number" value="<?php echo $number;?>" id="number" required/></td>
				 <td><input type="text" name="ratepernight" value="<?php echo $ratepernight;?>" id="ratepernight" required/></td>
				 <td> <img src="../../uploads/<?php echo $profilepic;?>" id="profilepic" width="50" height="50" required/></td>
          
      </tr>
                
       <?php
              
			  }
			 ?>  
			  </table>
			
				</form>

</body>
</html>