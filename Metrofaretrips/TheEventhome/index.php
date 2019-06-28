<?php
include 'connection.php';
include 'dbconnection.php';
$db= new DbConnection;
session_start();
if(!(isset($_SESSION['lid']))){
	header('location:index.php');
}
$lid=$_SESSION[lid];
//echo $lid;
 $sql    = "SELECT * FROM tbl_userreg WHERE lid='$lid'";
            $result = mysqli_query($con,$sql) or die(mysqli_error());
            while ($row = mysqli_fetch_array($result))
            {

                $name= $row['firstname'];
				$lastname=$row['lastname'];
                $phone=$row['phone'];
                $gender=$row['gender'];
                $dob = $row['dob'];
                $housenumber=$row['housenumber'];
                $locality=$row['locality'];
                $district=$row['district'];
                $state=$row['state'];
                //$email=$row['email'];

                 
                //$Password = $row['User_password'];
            }
			if(isset($_POST['edit']))
    {
		$n=$_POST['name'];
		$lastname=$_POST['lastname'];
		$phone=$_POST['phone'];
		$gender=$_POST['gender'];
		$dob=$_POST['dob'];
		$housenumber=$_POST['housenumber'];
		$locality=$_POST['locality'];
		$district=$_POST['district'];
		$state=$_POST['state'];
		//$email=$_POST['email'];
		//echo $n;
        
       //$name=$_POST['firstname'];
        //$dob=$_POST['dob'];
		 $sql = "UPDATE `tbl_userreg` SET `firstname`='$n' ,`lastname` = '$lastname', `phone`='$phone', `gender`='$gender', `dob`='$dob',`housenumber`='$housenumber',`locality`='$locality',`district`='$district', `state`='$state' WHERE lid='$lid'"; 
		  $sql;
		 mysqli_query($con, $sql);
//if(mysqli_query($con, $sql)){ 
   // echo "Record was updated successfully."; 
//} 
//else { 
   // echo "ERROR: Could not able to execute $sql. ";
//}
	}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>TheEvent - Bootstrap Event Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#speakers">Speakers</a></li>
          <li><a href="#schedule">Schedule</a></li>
          <li><a href="#venue">Venue</a></li>
          <li><a href="#hotels">Hotels</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#supporters">Sponsors</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="buy-tickets"><a href="#buy-tickets">Buy Tickets</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->

  
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<form method="POST" action="#">
				<section role="main" class="content-body">
                <table border="2">
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
              <input type="submit" name="edit" value="edit" id="edit"
                </table>
				</form>




<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>




  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="img/logo.png" alt="TheEvenet">
            <p>In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam porro. Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis. In inventore consequatur ad voluptate cupiditate debitis accusamus repellat cumque.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>TheEvent</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>

</html>
