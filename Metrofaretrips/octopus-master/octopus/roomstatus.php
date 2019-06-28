<?php
include 'connection.php';
include 'dbconnection.php';
$db= new DbConnection;
session_start();
if(!(isset($_SESSION['lid']))){
	header('location:index.php');
}
$lid=$_SESSION[lid];

 $sql = "SELECT r.*, c.* FROM retailer_hoteladd as r, tbl_room as c WHERE r.hid='$hid' and c.hid=r.hid";
			$result = mysqli_query($con,$sql) or die(mysqli_error());
			             
                //$Password = $row['User_password'];
            
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

				<a href="retailerhome.php">Back to home</a>
				<table border="2" align="center">
                   <tr>
				   <th>Hotel Name</th>
				   <th>Room Type</th>
				   <th>Bed</th>
				  
				   
                 
				<?php
				while ($row = mysqli_fetch_array($result)){
				//	$hid=$row['hid'];
					$hotelname=$row['hotelname'];
					$troom=$row['troom'];
					$bed=$row['bed'];
					$rateing=$row['rateing'];
					$cityname=$row['cityname'];
					$img1=$row['img1'];
				
				?>
			
				
                
        <tr>
        <td><input type="text" name="hotelname" value="<?php echo $hotelname;?>" id="hotelname" required/></a></td>
         <td><input type="text" name="troom"  value="<?php echo $troom;?>" id="troom" required/></td>
         <td><input type="text" name="bed" value="<?php echo $bed;?>" id="bed" required/></td>
         <td><input type="text" name="rateing" value="<?php echo $rateing;?>" id="rateing" required/></td>
       <td><input type="text" name="cityname" value="<?php echo $cityname;?>" id="cityname" required/></td>
	   <td><img src="uploads<?php echo $img1;?>" id="img1" width="75px"  height="75px" required/></td>
	   

      </tr>
                
       <?php
              
			  }
			 ?>  
			  </table>
			
				</form>

</body>
</html>