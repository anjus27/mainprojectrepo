 <?php
//include 'connection.php';
//session_start();
// if(!(isset($_SESSION['lid']))){
// 	header('location:index.php');
// }
//$rid=$_SESSION['rid'];

//$s="select rid from tbl_retailerreg where lid='$lid'";
//$f=mysqli_query($con,$s);
//$x=mysqli_fetch_array($f);
include 'connection.php';
session_start();
if(!(isset($_SESSION['lid']))){
	header('location:index.php');
}




if(isset($_POST['submit']))
    {
      $lid=$_SESSION['lid'];
 $s="select rid from tbl_retailerreg where lid='$lid'";
$f=mysqli_query($con,$s);
$x=mysqli_fetch_array($f);
     
		$hotelname=$_POST['hotelname'];
		$address=$_POST['address'];
		$phonenumber=$_POST['phonenumber'];
        $city=$_POST['city'];
	$licensenumber=$_POST['licensenumber'];
		
		
		$file_name2 = $_FILES['tresume']['name'];

		$file_tmp2 = $_FILES['tresume']['tmp_name'];
	   move_uploaded_file($file_tmp2,"uploads".$file_name2);



	   $file_name = $_FILES['tphoto']['name'];
       $file_tmp = $_FILES['tphoto']['tmp_name'];
	  move_uploaded_file($file_tmp,"uploads".$file_name);

		  

		$rateing=$_POST['rateing'];
		


      
		//$sd="SELECT `hotelname` FROM `retailer_hoteladd` WHERE `hotelname`='$hotelname' AND `licensenumber=`='$licensenumber' ";
		//$re=mysqli_query($con,$sd);
	
		$sql1 = "INSERT INTO `retailer_hoteladd`(`lid`,`rid`,`hotelname`,`address`,`phonenumber`,`ctid`,`licensenumber`,`licenseprooff`,`profilepic`,`rateing`,`status`) VALUES ('$lid',$x[rid],'$hotelname','$address','$phonenumber','$city','$licensenumber','$file_name2','$file_name','$rateing',1)";
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
  background-color:     #66b3ff;
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
.submit{
  color: black;
  background-color:#b3d9ff;
}
</style>
</head>
<body>

<div class="header">
  <!-- <a href="#default" class="logo">CompanyLogo</a> -->
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
      <a href="retailerchangepassword.php">Change password</a>
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

<form method="POST" class="cv-form" class="register-form" id="register-form" enctype="multipart/form-data" onsubmit="return"  >
                        <table align="center"cellspacing="10"> 
                        <tr>
                        <tr><td>
                            <label for="hotelname" font color="#ffffff">Hotel Name :</label></td>
                               <td> <input type="text" size="40"class="cv-name" name="hotelname" cv-message="Invalid name" id="hotelname" required/>
                            </td></tr><br>
                       
                         
							<tr><td>
                            <label for="address">Address :</label></td>
                               <td> <input type="text" size=40 class="cv-name" name="address" cv-message="Invalid name"  id="address" required/>
                            </td></tr>
                        
							<tr><td>
                            <label for="phonenumber">Phone Number :</label></td>
                               <td> <input type="text" size=40 class="cv-mobile" name="phonenumber" cv-message="Invalid name"  id="phonenumber" required/>
                            </td></tr>
                       


                      
					  <tr>
                       <tr><td><label>Select City</label></td>
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
							   </select></td>
					  </tr>
					  


                        
                        <tr><td>
                            <label for="licensenumber"> License number:</label></td>
                               <td> <input type="text" size="40" class="cv-name" name="licensenumber" cv-message="Invalid name"  id="licensenumber" required/>
                            </td></tr>
                        
                           <tr><td> <label for="licenseprooff">License proof:</label></td>
                            <td><input type="file" size="40" accept ="application/pdf" class="cv-doccument"  name="tresume" cv-message="Invalid document format" id="tresume" required/>
                        </td></tr>

                       
		


                       <tr><td>
					   <label for="profilepic">Profile Picture :</label></td>
                          <td><input type="file"  accept= "image/.*" class="cv-image" cv-message="Invalid Image Format" name="tphoto" id="tphoto">
						</td></tr>


						

				
                    <tr><td>    
                            <label for="rateing">Rateing :</label></td>
                           <td> <input type="text" size="40" name="rateing" id="rateing" required/>
                        </td></tr>
                       <tr><td>

                       <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                       
                         </tr>
                        </table>


					


						<!-- <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                       
                          </div> -->

                            </form>
<div class="footer">
  <!-- <p>Footer</p> -->
</div>

</body>
</html>
