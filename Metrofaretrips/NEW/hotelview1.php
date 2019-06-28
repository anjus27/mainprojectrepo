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


 $sql = "SELECT r.*, c.* FROM retailer_hoteladd as r, tbl_city as c WHERE r.lid='$lid' and c.ctid=r.ctid";
			$result = mysqli_query($con,$sql) or die(mysqli_error());
                   
      
      $lid=$_SESSION['lid'];
$s="select name from tbl_retailerreg where lid='$lid'";
$res=mysqli_query($con,$s);
$x=mysqli_fetch_array($res);
                //$Password = $row['User_password'];
            
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
</style>
</head>
<body>

<div class="header">
  <!-- <a href="#default" class="logo">CompanyLogo</a> -->
  <p><b>Welcome <?php echo $x['0']?></b></p>
  <div class="header-right">
    <a class="active" href="retailerhome.php">Home</a> 
    <!-- <a href="retailerchangepassword.php">Change Password</a> --> 
    
   <!-- <a href="#">Update profile</a> -->
    <div class="dropdown">
    <button class="dropbtn">Add Services 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="retaileraddhotel.php">Hotels</a>
      <!-- <a href="#">Taxies</a> -->

    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">View Services 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="hotelview1.php">Hotels</a>
      <!-- <a href="#">Taxies</a> -->

    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">My Profile 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="retailerchangepwsd.php">Change password</a>
      <a href="#">View  profile</a>

    </div>
  </div> 
  
  <a href="logout.php">Log out</a>

    
  </div>
</div>
<br>
<br>


<section class="body">

        <section role="main" class="content-body">


                <form method="POST" action="#">
				<section role="main" class="content-body">
      
				<br>
				<!--<a href="retailerhome.php">Back to home</a>-->
				
				<table border="2" align="center">
                   <tr>
				   <th>Hotel Name</th>
				   <!--<th>licensenumber</th>
				   <th>licenseproof</th>
				   <th>Rateing</th>-->
				   <th>Cityname</th>
					 <th>Image</th>
                     <th>Add More</th>
                 
				<?php
				while ($row = mysqli_fetch_array($result)){
					$hid=$row['hid'];
					$hotelname=$row['hotelname'];
					//$licensenumber=$row['licensenumber'];
					//$licenseprooff=$row['licenseprooff'];
					//$rateing=$row['rateing'];
					$cityname=$row['cityname'];
					$profilepic=$row['profilepic'];

				?>
			
				
                
        <tr>
        <td><input type="text" name="hotelname" value="<?php echo $hotelname;?>" id="hotelname" required/></td>
       <!--  <td><input type="text" name="licensenumber"  value="<?php //echo $licensenumber;?>" id="licensenumber" required/></td>
         <td><input type="text" name="licenseprooff" value="<?php //echo $licenseprooff;?>" id="licenseprooff" required/></td>
         <td><input type="text" name="rateing" value="<?php// echo $rateing;?>" id="rateing" required/></td>-->
       <td><input type="text" name="cityname" value="<?php echo $cityname;?>" id="cityname" required/></td>
	   <td><img src="uploads<?php echo $profilepic;?>" id="profilepic" width="75px"  height="75px" required/></td>
	
        <td><input type="button" value="Add Details" onclick="location.href='retailerroomadd.php?hid=<?php echo $hid;?>'" ></a></td>
      </tr>
                
       <?php
              
			  }
			 ?>  
			  </table>
              <br>
              <br>
              <br>

<div class="footer">
  <!-- <p>Footer</p> -->
</div>

</body>
</html>
