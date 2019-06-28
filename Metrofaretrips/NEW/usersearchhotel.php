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
if(!(isset($_SESSION['lid'])))
{
	header('location:index.php');
}
else{
	$lid=$_SESSION['lid'];
}

//$lid=$_SESSION[lid];
$lid=$_SESSION['lid'];
$s="select firstname from tbl_userreg where lid='$lid'";
$res=mysqli_query($con,$s);
$x=mysqli_fetch_array($res);
?>




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image:url("images1/chambre1.jpg");
  background-repeat: no-repeat;
   background-size: cover; 
  
}


.header {
  overflow: hidden;
  background-color:   #ffffff;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:   #99003d;
   color: white;
   text-align: center;}

   .dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: black;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}
.dropdown:hover .dropbtn {
  background-color: dodgerblue;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

#profilepic {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>

</head>

<body>

<div class="header">
  <!-- <a href="#default" class="logo">CompanyLogo</a> -->
  <p><b>Welcome :<?php echo $x['0']?></b></p>
  <div class="header-right">
    <a class="active" href="new.php">Home</a> 
    <!-- <a href="changepassworduser.php">Change Password</a>
   <a href="#">Update profile</a> -->
    <div class="dropdown">
    <button class="dropbtn">Search Services 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Hotels</a>
      <!-- <a href="#">Taxies</a> -->

    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">My Profile 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="changepassworduser.php">Change Password</a>
      <a href="userprofile.php">View Profile</a>

    </div>
  </div> 
  <a href="logout.php">Log out</a>

    
  </div>
</div>
<br>


<form action="#" method="POST">
   <br>
   <br>
   <br>
   
   <table align="center" >
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
   <td> <input type="submit"  name="submit" value="search">
   </form>

</td>
   <tr></tr>
<br>
   </tr>
  
   
<table align="center" cellspacing="30" cellpadding="30" rules="all" border="2" >
<br>
<th > Hotel name</th>
<th> address</th>
<th> contact Number</th>
<th> Rate </th>
<th>Image</th>
<th>Option</th>
<?php

if(isset($_POST['submit']))
{
	include 'connection.php';
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
			$rate= $s[9];
			$profilepic=$s[10];
			
?>
<br>

<!--<table align="center" cellspacing="8" cellpadding="7.8" >-->
<tr>
<td> <?php echo $hotel; ?></td>
<td width=10px>  <?php echo $address; ?></td>
<td> <?php echo $phonenumber; ?> </td>
<td> <?php echo $rate;?> </td>

<td><img src="/Metrofaretrips/uploads/<?php echo $profilepic;?>" id="profilepic" width="75px"  height="75px" required/></td>
<td><input type=button  align="center"
 onclick="window.location.href = '../suites/index.php?id=<?php echo $s[0];?>';">Book now...!!!</button> </td>


</tr>
<?php

}
}
else{
	$st="No value";
}

}



?>
</table>
<?php
?>


<div class="footer">
  <!-- <p>Footer</p> -->
</div>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
</body>
</html>