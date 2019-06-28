<?php
include 'connection.php';
include 'dbconnection.php';
$db=new Dbconnection;
session_start();
if(!(isset($_SESSION['lid']))){
    header('location:index.php');
}
$lid=$_SESSION['lid'];

$sql="SELECT * FROM tbl_userreg WHERE lid='$lid'";
$result=mysqli_query($con,$sql) or die(mysqli_error());
while ($row=mysqli_fetch_array($result))
{
    $name=$row['firstname'];
    
     $email=$row['email'];
}



if(isset($_POST['submit'])){
$lastname=$_POST['lastname'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$housenumber=$_POST['housenumber'];
// $locality=$_POST['locality'];
$district=$_POST['district'];
$state=$_POST['state'];
$file_name = $_FILES['tphoto']['name'];

      $file_tmp = $_FILES['tphoto']['tmp_name'];
	 move_uploaded_file($file_tmp,"../uploads/".$file_name);
		 
		  $file_name2 = $_FILES['tresume']['name'];

       $file_tmp2 = $_FILES['tresume']['tmp_name'];
      move_uploaded_file($file_tmp2,"../uploads/".$file_name2);
      $sql = "UPDATE `tbl_userreg` SET `lastname`='$lastname',`phone`='$phone',`gender`='$gender',`dob`='$dob',`housenumber`='$housenumber',`locality`='$locality',`district`='$district',`state`='$state',`idproof`='$file_name2',`profilepic`='$file_name' WHERE lid='$lid'"; 
if(mysqli_query($con, $sql)){ 
    $s="update login set pr_complete=0 where lid=$lid";
    mysqli_query($con,$s);
    
    header("location:../NEW/new.php");
   
} else { 
    echo "ERROR: Could not able to execute $sql. ";
}
	}
 //   if($lastname !=''&& $phone !=''&& $gender !=''&& $dob !=''&& $housenumber !=''&& $locality !=''&& $district !=''&& $state !=''&& $file_name  !=''&& $file_name2 !=''){
   //     header("Location:../octopus-master/octopus/userhome.php");
    //}  else{
     //   echo "ERROR:not found" ;
    //}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="css/oh-autoVal-style.css">
<script src="js/jquery-3.2.1.min.js">
</script>
<script src="js/oh-autoVal-script.js"></script>

</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
              <!--<div class="signup-img">
                    <img src="images/signup-img.jpg" alt="">
                </div>-->
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" enctype="multipart/form-data">
                        
                         <div class="form-row">
                           <!-- <div class="form-group">
                                <label for="name">Name :</label>
                                <input type="hidden" class="av-name" name="name" av-message="Invalid name" value="<?php echo $name;?>" id="name" required/>
                            </div>
    

                       <div class="form-group">
                           <label for="email">Email ID :</label>
                            <input type="hidden" class="av-email"  av-message="Invalid email address" name="email" value="<?php echo $email;?>" id="email" />
                        </div> -->
                        
                        <div class="form-group">
                            <label for="lastnmame">Last Name :</label>
                            <input type="text" class="av-name" av-message="Invalid name" name="lastname"  id="lastname" />
                        </div>


                        </div>
                        <div class="form-group">
                            <label for="phone">Phone :</label>
                            <input type="text"  class= "av-mobile"  av-message="Invalid phone number" name="phone" id="phone" required/>
                        </div>

                        <div class="form-radio">
                            <label for="gender" class="radio-label">Gender :</label>
                            <div class="form-radio-item">
                                <input type="radio" value="male"  name="gender" id="male" checked>
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" value="female"name="gender" id="female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dob">DOB :</label>
                            <input type="date" name="dob" id="dob">
                        </div>

                        <div class="form-group">
                            <label for="housenumber">housenumber :</label>
                            <input type="text" name="housenumber" id="housenumber" required/>
                        </div>
                       
                    
                            <div class="form-group">
                                <label for="district">District :</label>
                                <div class="form-select">
                                    <select name="district" id="district">
                                        <option value=""></option>
                                        <option value="Alapuzha">Alappuzha</option>
                                        <option value="Ernakulam">Ernakulam</option>
                                        <option value="	Idukki">Idukki</option>
                                        <option value="Kannur">Kannur</option>
                                        <option value="Kasaragod">Kasaragod</option>
                                        <option value="	Kottayam">Kottayam</option>
                                        <option value="	Kozhikode">	Kozhikode</option>
                                        <option value="	Palakkad">	Palakkad</option>
                                        <option value="Pathanamthitta">Pathanamthitta</option>
                                        <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                                        <option value="Thrissur">Thrissur</option>
                                        <option value="Wayanad">Wayanad</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        

                        <div class="form-group">
                                <label for="state">State :</label>
                                <div class="form-select">
                                    <select name="state" id="state">
                                        <option value=""></option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="	Karnataka">	Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Tamil Nadu"></option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        
                        <div class="form-group">
                            <label for="idproof">Id Proof :</label>
                            <input type="file" name="tresume" id="tresume">
                        </div>

                        <div class="form-group">
                            <label for="profilepic">Profile Picture :</label>
                            <input type="file" name="tphoto" id="tphoto">
                        </div>
                     <!--   <div class="form-group">
                            <label for="course">Course :</label>
                            <div class="form-select">
                                <select name="course" id="course">
                                    <option value=""></option>
                                    <option value="computer">Computer Operator & Pragramming Assistant</option>
                                    <option value="desiger">Designer</option>
                                    <option value="marketing">Marketing</option>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>-->
                        
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                       
                          </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>