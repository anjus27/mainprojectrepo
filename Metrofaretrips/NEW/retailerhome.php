<?php
include 'connection.php';
include 'dbconnection.php';
$db= new DbConnection;
session_start();
if(!(isset($_SESSION['lid']))){
	header('location:index.php');
}
$lid=$_SESSION['lid'];
$s="select name from tbl_retailerreg where lid='$lid'";
$res=mysqli_query($con,$s);
$x=mysqli_fetch_array($res);

//echo $lid;
 
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
  background-image:url("images1/retailerhome.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}

.header {
  overflow: hidden;
  background-color:   #1a8cff;
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
    <!-- <a href="retailerchangepassword.php">Change Password</a>
   <a href="#">Update profile</a> -->
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
<br>
<br>


</body>
</html>
