<?php
include 'connection.php';
include 'dbconnection.php';
$db= new DbConnection;
session_start();
if(!(isset($_SESSION['lid']))){
	header('location:index.php');
}

$lid=$_SESSION['lid'];
$s="select firstname from tbl_userreg where lid='$lid'";
$res=mysqli_query($con,$s);
$x=mysqli_fetch_array($res);
//echo $lid;
//  $sql    = "SELECT * FROM tbl_userreg WHERE lid='$lid'";
//             $result = mysqli_query($con,$sql) or die(mysqli_error());
//             while ($row = mysqli_fetch_array($result))
//             {

//                 $name= $row['firstname'];
// 				$lastname=$row['lastname'];
//                 $phone=$row['phone'];
//                 $gender=$row['gender'];
//                 $dob = $row['dob'];
//                 $housenumber=$row['housenumber'];
//                 $locality=$row['locality'];
//                 $district=$row['district'];
//                 $state=$row['state'];
//                 //$email=$row['email'];

                 
//                 //$Password = $row['User_password'];
//             }
// 			if(isset($_POST['edit']))
//     {
// 		$n=$_POST['name'];
// 		$lastname=$_POST['lastname'];
// 		$phone=$_POST['phone'];
// 		$gender=$_POST['gender'];
// 		$dob=$_POST['dob'];
// 		$housenumber=$_POST['housenumber'];
// 		$locality=$_POST['locality'];
// 		$district=$_POST['district'];
// 		$state=$_POST['state'];
// 		//$email=$_POST['email'];
// 		//echo $n;
        
//        //$name=$_POST['firstname'];
//         //$dob=$_POST['dob'];
// 		 $sql = "UPDATE `tbl_userreg` SET `firstname`='$n' ,`lastname` = '$lastname', `phone`='$phone', `gender`='$gender', `dob`='$dob',`housenumber`='$housenumber',`locality`='$locality',`district`='$district', `state`='$state' WHERE lid='$lid'"; 
// 		  $sql;
// 		 mysqli_query($con, $sql);
// //if(mysqli_query($con, $sql)){ 
//    // echo "Record was updated successfully."; 
// //} 
// //else { 
//    // echo "ERROR: Could not able to execute $sql. ";
// //}
// 	}
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
  background-image:url("images1/preview_luxurious-hotel-room.jpeg");
  background-repeat: no-repeat;
  background-size: cover;
}


.header {
  overflow: hidden;
  background-color:     #ffffff;
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

body, html {
  height: 100%;
  margin: 0;
}

/* .bg {
  /* The image used */
  background-image: url("../uploads/bag.jpg.");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
} */
</style>

</head>
<body >

<div class="header">
  <!-- <a href="#default" class="logo">CompanyLogo</a> -->
  <!-- <p><b>Welcome <?php //echo $x['0']?></b></p> -->
  <div class="header-right">
    <a class="active" href="#home">Home</a> 
    <!-- <a href="changepassworduser.php">Change Password</a>
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
<h1 align="center"><b>Hello <?php echo $x['0']?></b></h1>
<h2 align="center">Welcome to Metro fare Trip</h2>
<form method="POST" action="#">

				<section role="main" class="content-body">
                <!-- <table border="2" align="center">
                <tr>
                <td>
                <td><label for="name">Name :</label></td>
                <td><input type="text" name="name" value="<?php echo $name;?>" id="name" required/></td>
                </td>
                </tr>

                <tr>
                <td>
                <td><label for="lastname">Last Name :</label></td>
                         <td>   <input type="text" name="lastname" value="<?php echo $lastname;?>" id="lastname" /></td>
                </td>
                </tr>

                <tr>
                <td>
              <td>  <label for="phone">Phone :</label></td>
                      <td>      <input type="text" name="phone"  value="<?php echo $phone;?>" id="phone" required/></td>
                </td>
                </tr>

                <tr>
                <td>
                <td><label for="gender">gender :</label></td>
                <td><input type="text" name="gender" value="<?php echo $gender;?>" id="gender" required/></td>
                </td>
                </tr>

                <tr>
                <td>
                <td><label for="gender">gender :</label></td>
                <td><input type="text" name="gender" value="<?php echo $gender;?>" id="gender" required/></td>
                </td>
                </tr>

                <tr>
                <td>
                <td><label for="dob">dob :</label></td>
                <td><input type="text" name="dob" value="<?php echo $dob;?>" id="dob" required/></td>
                </td>
                </tr>
                
                <tr>
                <td>
                <td><label for="housenumber">housenumber :</label></td>
                <td><input type="text" name="housenumber" value="<?php echo $housenumber;?>" id="housenumber" required/></td>
                </td>
                </tr>


                <tr>
                <td>
                <td><label for="locality">locality :</label></td>
                <td><input type="text" name="locality" value="<?php echo $locality;?>" id="locality" required/></td>
                </td>
                </tr>

                <tr>
                <td>
                <td><label for="district">district :</label></td>
                <td><input type="text" name="district" value="<?php echo $district;?>" id="district" required/></td>
                </td>
                </tr>
                
                <tr>
                <td>
                <td><label for="state">state:</label></td>
                <td><input type="text" name="state" value="<?php echo $state;?>" id="state" required/></td>
                </td>
                </tr>
             <!-- <input type="submit" name="edit" value="edit" id="edit">-->
                </table>
				</form>


<!--<div style="padding-left:20px">
  <h1>Responsive Header</h1>
  <p>Resize the browser window to see the effect.</p>
  <p>Some content..</p>
</div>-->

<div class="footer">
  <!-- <p>Footer</p> -->
</div>

</body>
</html>
