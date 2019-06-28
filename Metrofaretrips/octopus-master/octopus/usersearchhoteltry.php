
<?php
include 'connection.php';
include 'dbconnection.php';
$db= new DbConnection;
$hotel=NULL;
$address=NULL;
$phonenumber=NULL;
$rate=NULL;
$st=NULL;
session_start();
if(!(isset($_SESSION['lid']))){
	header('location:index.php');
}
$lid=$_SESSION[lid];
if(isset($_POST['submit']))
{

	$ctid=$_POST['city'];
	//$h="select * from tbl_city where cityname=$'cityname'";
//	$sql = "SELECT r.*, c.* FROM retailer_hoteladd as r, tbl_city as c WHERE r.lid='$lid' and c.ctid=r.ctid";
	//		$result = mysqli_query($con,$sql) or die(mysqli_error());

			$query = "SELECT * FROM retailer_hoteladd as ap,tbl_city as i where ap.ctid=i.ctid and ap.ctid='$ctid'";
// print_r($query);
	$rs=mysqli_query($con,$query);
	if(mysqli_num_rows($rs)>0)
	{
		while($s=mysqli_fetch_array($rs))
		{
			$hotel= $s[4];
			$address=$s[5];
			$phonenumber=$s[6];
			$rate= $s[7];
			
		}
	}
	else{
		$st="No value";
	}

}

?>
<!doctype html>
<html class="fixed">
	<head>

	
</head>

	<body>
   
   <form action="#" method="POST">
   <table align="center">
   <tr>
   <td>
   <label>Select City</label>
					 <td>  <select class="form-control" name="city" id="city" >
                           
						 <option value=0>SELECT city </option>
						 <?php
						  $con = mysqli_connect("localhost", "root", "", "metrofaredb");
													 if (!$con) {
														 echo "Could not connect..Try again";
													 } else {
														 $sql = "SELECT ctid, cityname FROM `tbl_city` WHERE status=1";
														 $result = mysqli_query($con, $sql);
														 //echo "";
														 while ($row = mysqli_fetch_array($result)) {
															 $cityname = $row['cityname'];
															 $ctid = $row['ctid'];
															 echo "<option value='$ctid'>$cityname</option>";
														 }
													 }
													 mysqli_close($con);
													 ?>
							   </select>
					  
					  
   </td>
   <tr><td> <input type="submit"  name="submit" value="search">
</td></tr>

   </tr>
  
</table>
<?php 
echo $hotel;
echo $address;
echo $phonenumber;
echo $rate;
echo $st;

?>
					

						
	</body>
</html>


