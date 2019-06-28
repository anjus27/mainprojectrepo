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
    $name=$row['name'];
    
     $email=$row['email'];
}

if(isset($_POST['submit'])){
    //$lastname=$_POST['lastname'];
    //$phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $servicename=$_POST['servicename'];
    $servicetype=$_POST['servicetype'];
    $locality=$_POST['locality'];
    $city=$_POST['city'];
    $phonenumber=$_POST['phonenumber'];
    //$email=$_POST['email'];
    $licensenumber=$_POST['licensenumber'];
    //$idproof=$_POST['iproof'];
    
    // $file_name = $_FILES['tphoto']['name'];
    
    //       $file_tmp = $_FILES['tphoto']['tmp_name'];
    // 	 move_uploaded_file($file_tmp,"../uploads/".$file_name);
             
              $file_name2 = $_FILES['tresume']['name'];
    
            $file_tmp2 = $_FILES['tresume']['tmp_name'];
           move_uploaded_file($file_tmp2,"../uploads/".$file_name2);
          $sql = "UPDATE `tbl_userreg` SET `name`='$name',`gender`='$gender',`dob`='$dob',`servicename`='$servicename',`servicetype`='$servicetype',`locality`='$locality',`city`='$city',`phonenumber`='$phonenumber',`email`='$email',`licensenumber`='$licensenumber',`idproof`='$file_name2' WHERE lid='$lid'"; 
    if(mysqli_query($con, $sql)){ 
        $s="update login set pr_complete=0 where lid=$lid";
        mysqli_query($con,$s);
        
        header("location:../octopus-master/octopus/retailerhome.php");
       
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
                            <div class="form-group">
                                <label for="name">Name :</label>
                                <input type="text" class="av-name" name="name" av-message="Invalid name" value="<?php echo $name;?>" id="name" required/>
                            </div>

                        
                            <div class="form-radio">
                            <label for="gender" class="radio-label">Gender :</label>
                            <div class="form-radio-item">
                                <input type="radio"  name="gender" id="male" checked>
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <label for="dob">DOB :</label>
                            <input type="date" name="dob" id="dob">
                        </div>

                        <div class="form-group">
                            <label for="servicename">Service Name :</label>
                            <input type="text"  class= "av-mobile"  av-message="Invalid " name="servicename" id="servicename" required/>
                        </div>

                        <div class="form-group">
                            <label for="servicetype">Service Type :</label>
                            <input type="text"  class= "av-mobile"  av-message="Invalid " name="servicetype" id="servicetype" required/>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="locality">Locality :</label>
                                <div class="form-select">
                                    <select name="locality" id="locality">
                                        <option value=""></option>
                                        <option value="us">America</option>
                                        <option value="uk">English</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="city">City :</label>
                                <div class="form-select">
                                    <select name="city" id="city">
                                        <option value=""></option>
                                        <option value="losangeles">Los Angeles</option>
                                        <option value="washington">Washington</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </div>
                       

                        <div class="form-group">
                            <label for="phonenumber">Phone number :</label>
                            <input type="text" name="phonenumber" id="phonenumber" required/>
                        </div>
                       
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <input type="text" name="email" id="email" required/>
                        </div>

                        
                        <div class="form-group">
                            <label for="licensenumber">Licensenumber :</label>
                            <input type="text" name="licensenumber" id="licensenumber" required/>
                        </div>
                        
                           

                        
                        <div class="form-group">
                            <label for="idproof">Id Proof :</label>
                            <input type="file" name="tresume" id="tresume">
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



