<?php
include 'connection.php';
include 'dbconnection.php';
$db= new DbConnection;

session_start();
$lid=$_SESSION['lid'];


if(isset($_POST['submit']))
{
$lid=$_POST["lid"];
$currentpassword=$_POST["currentpassword"];
$newpassword = $_POST["newpassword"];
$confirmpassword=$_POST["confirmpassword"];
$sql="select * from login where  password='$currentpassword' and lid=$lid";
$res=mysqli_query($con,$sql);
$no=mysqli_num_rows($res);
if($no==1)
{
	$sql1="update  login set password='$newpassword' where lid=$lid";
	$result=mysqli_query($con,$sql1);
	if($result==1)
 {
         echo"<script> alert('Password Changed Successfully')</script>";
         
       
 }
}}
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
  background-image:url("images1/img_2.jpg");
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
    <a class="active" href="new.php">Home</a> 
    <!-- <a href="#">Change Password</a>
   <a href="#">Update profile</a> -->
    <div class="dropdown">
    <button class="dropbtn">Search Services 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="usersearchhotel.php">Hotels</a>
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
<br>
<br>
<br>

<form method="POST" class="register-form" id="register-form">
                        <table border=2 align="center" > 
                        <tr>
                        <tr><td>
                            <label for="currentpassword">Current password :</label></td>
                               <td> <input type="text" class="av-password" name="currentpassword" av-message="Invalid password"  id="currentpassword" required/>
                            </td></tr>

                       <tr>  <td>   
                            <label for="newpassword">New Password :</label></td>
                           <td> <input type="text" class="av-password"  av-message="Invalid password" name="newpassword"  id="newpassword" />
                        </td></tr>


                        
                        <tr><td>
                            <label for="confirmpassword"> Confirm Password:</label></td>
                               <td> <input type="text" class="av-password" name="confirmpassword" av-message="password mismatch...!!!"  id="confirmpassword" required/>
                            </td></tr>

                            <tr><td> <input type="submit" align="center" value="Update" class="submit" name="submit" id="submit" /></td></tr>
                       

                            <div class="form-submit">
                            
                            <input type="hidden" name="lid" value="<?php echo $_SESSION['lid'];?>">
                           
                          </div>

                            </form>

<div class="footer">
  <!-- <p>Footer</p> -->
</div>

</body>
</html>
