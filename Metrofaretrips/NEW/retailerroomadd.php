<?php
include 'connection.php';
session_start();
if(!(isset($_SESSION['lid']))){
	header('location:index.php');
}
$lid=$_SESSION['lid'];

if(isset($_POST['submit']))
{
if(isset($_GET['hid']))
{
    $hid=$_GET['hid'];
}
$roomtype = $_POST['roomtype'];
$number=$_POST['number'];
$ratepernight =$_POST['ratepernight'];
$file_name = $_FILES['tphoto']['name'];

$file_tmp = $_FILES['tphoto']['tmp_name'];
move_uploaded_file($file_tmp,"../NEW/uploads".$file_name);


	$sql1 = "INSERT INTO `tbl_room`(`lid`,`hid`,`roomtype`,`number`,`ratepernight`,`profilepic`,`status`) VALUES ('$lid','$hid','$roomtype','$number','$ratepernight','$file_name',1)";
        $result1 = mysqli_query($con, $sql1);



}
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
  background-color:   #66b3ff;
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
  <!-- <p><b>Welcome <?php //echo $x['0']?></b></p> -->
  <div class="header-right">
    <a class="active" href="new.php">Home</a> 
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
      <a href="hotelview1">Hotels</a>
      <!-- <a href="#">Taxies</a> -->

    </div>
  </div> 

  <div class="dropdown">
    <button class="dropbtn">My Profile 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="retailerchangepwsd.php">Change password</a>
      <a href="retailerviewprofile.php">View  profile</a>

    </div>
  </div> 
  <a href="logout.php">Log out</a>

    
  </div>
</div>
<br>
  </div> 
  <!-- <a href="logout.php">Log out</a> -->

    
  </div>
</div>
<br>
<br>
<br>
<br>


<!-- <div id="page-wrapper" >
            <div id="page-inner"> -->
			 <!-- <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           NEW ROOM <small></small>
                        </h1>
                    </div>
                </div>  -->
                 
                                 
            <!-- <div class="row">
                
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">  -->
                    <form name="form" method="post" enctype="multipart/form-data">
                        <table align="center" cellspacing="20">
                        <tr>
                        <!-- <div class="panel-body"> -->
					
                            <!-- <div class="form-group"> -->
                                          <tr><td>  <label>Type Of Room *</label>
                                            <select name="roomtype"  class="form-control" required>
												<option value selected ></option>
                                                <option value="Superior Room">SUPERIOR ROOM</option>
                                                <option value="Deluxe Room">DELUXE ROOM</option>
												
												<option value="Single Room">SINGLE ROOM</option>
                                            </select></td></tr><br>
                              <!-- </div> -->
							  
								
							   <!-- <div class="form-group"> -->
							             <tr><td><label>Total Number</label>
                                 <input type="text"  size="20" name="number"  id="number"></td></tr>
							   <!-- </div>

							   </div> -->
							   <!-- <div class="form-group"> -->
							         <tr><td>    <label>Rate Per Night</label>
                                 <input type="text" size="20"name="ratepernight"  id="ratepernight"></td></tr>
							   <!-- </div> -->

							   <!-- <div class="form-group"> -->
							  <tr><td> <label>Image :</label>
                            <input type="file"  size="20"name="tphoto" id="tphoto"></td></tr>
							   <!-- </div> -->
              <tr><td>   <input type="submit" name="submit" value="Add New" class="btn btn-primary"></td></tr>
              </tr>
                     </table>        
			 
             
           <!-- </div>
           </div> -->
           <!-- </div>
           </div> -->
    


<!--<table align="center" >
<tr>
                       
<tr><td> <label>Type Of Room *</label></td>
<td><select name="roomtype"  class="form-control" required>
<option value selected ></option>
<option value="Superior Room">SUPERIOR ROOM</option>
<option value="Deluxe Room">DELUXE ROOM</option>
<option value="Single Room">SINGLE ROOM</option>
</select></td></tr>
                            
<tr><td>Room Type</td>
<td><input type="text" name="roomtype" id="roomtype" size=40></td></tr>

<tr><td>Total Number</td>
<td><input type="text" name="number" id="number" size=40></td></tr>

<tr><td>Rate Per Night</td>
<td><input type="text" name="ratepernight" id="ratepernight" size=40></td></tr>

<tr><td><label>Image :</label></td>
<td><input type="file" name="tphoto" id="tphoto"></td></tr>


<tr><td><input type="submit" name="submit" value="Add" class="btn btn-primary"></td></tr><br>


</tr>

</table>-->

<div class="footer">
  <!-- <p>Footer</p> -->
</div>

</body>
</html>