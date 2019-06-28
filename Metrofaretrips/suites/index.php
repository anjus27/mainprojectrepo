<?php
include 'connection.php';

//session_start();
session_start();


$lid=$_SESSION['lid'];
$s="select firstname from tbl_userreg where lid='$lid'";
$res=mysqli_query($con,$s);
$x=mysqli_fetch_array($res);



//$id=$_SESSION['id'];
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Suite &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>

  <style>
  <style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image:url("../../NEW/images1/chambre1.jpg");
  background-repeat: no-repeat;
   background-size: cover; 
  
}

.header {
  overflow: hidden;
  background-color:   #80ccff;
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
  <body>
  <div class="header">
  <!-- <a href="#default" class="logo">CompanyLogo</a> -->
  <!-- <p><b>Welcome <?php //echo $x['0']?></b></p> -->
  <div class="header-right">
    <a class="active" href="../NEW/new.php">Home</a> 
    <!-- <a href="changepassworduser.php">Change Password</a>
   <a href="#">Update profile</a> -->
    <div class="dropdown">
    <button class="dropbtn">Search Services 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../NEW/usersearchhotel.php">Hotels</a>
      <!-- <a href="#">Taxies</a> -->

    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">My Profile 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../NEW/changepassworduser.php">Change Password</a>
      <a href="../NEW/userprofile.php">Update Profile</a>

    </div>
  </div> 
  <a href="logout.php">Log out</a>

    

    
  </div>
</div>
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap js-site-navbar bg-white">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><a href="index.html">Suites</a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    
                    <div class="d-inline-block d-lg-none  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li class="active">
                        <a href="../NEW/new.php"> Back to Home</a>
                      </li>
                    <!--  <li class="has-children">
                        <a href="rooms.html">Rooms</a>
                       <ul class="dropdown arrow-top">
                          <li><a href="rooms.html">Standard Room</a></li>
                          <li><a href="rooms.html">Family Room</a></li>
                          <li><a href="rooms.html">Single Room</a></li>
                          <li class="has-children">
                            <a href="rooms.html">Rooms</a>
                            <ul class="dropdown">
                              <li><a href="rooms.html">America</a></li>
                              <li><a href="rooms.html">Europe</a></li>
                              <li><a href="rooms.html">Asia</a></li>
                              <li><a href="rooms.html">Africa</a></li>
                              
                            </ul>
                          </li>

                        </ul>
                      </li>-->
                    <!--  <li><a href="events.html">Events</a></li>
                      <li><a href="about.html">About</a></li>
                      <li><a href="contact.html">Contact</a></li>-->
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <?php


$id = $_GET['id'];
//$s=$_GET['lid'];

//$sql= "select * from retailer_hoteladd as ap,tbl_room as i where ap.hid = i.hid and ap.hid='$id' ";
//$result = mysqli_query($con,$sql) or die(mysqli_error());
			             



//$sql1="select * from retailer_hoteladd as ap,tbl_room as i where ap.hid=i.hid and ap.hid='$id'";
//$result = mysqli_query($con,$sql1) or die(mysqli_error());
//$row = mysqli_fetch_array($result);

//$query = "SELECT * FROM retailer_hoteladd as ap,tbl_city as i where ap.ctid=i.ctid and ap.ctid='$ctid'";
// print_r($query);
	//$rs=mysqli_query($con,$query);


//echo $sql1;	

//$sql1= "select * from login where  lid='".$row['lid']."'";
//$result3 = mysqli_query($con,$sql1) or die(mysqli_error());
//$row2 = mysqli_fetch_array($result3);



$sql1="select retailer_hoteladd.hid,tbl_room.roid,tbl_room.roomtype,tbl_room.ratepernight,tbl_room.profilepic from retailer_hoteladd inner join tbl_room on retailer_hoteladd.hid=tbl_room.hid and retailer_hoteladd.hid='$id'";
$res1= mysqli_query($con,$sql1) or die(mysqli_error());




?>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Our Rooms</h2>
          </div>
        </div>
        <div class="row">                                          
          <?php

              while($r=mysqli_fetch_array($res1)){
                ?>
                 <div class="col-md-6 col-lg-4 mb-5">
                  <div class="hotel-room text-center">
                    <!-- <a href="../NEW/roombooking.php?id=<?php //echo $id;?>&roid=<?php // echo $r['roid'];?>&ratepernight=<?php //echo $r['ratepernight'];?>" class="d-block mb-0 thumbnail"><img src="../NEW/uploads<?php //echo $r['profilepic'];?>" alt="Image" class="img-fluid"></a> -->
                    <a href="../brighthotel/index.php?id=<?php echo $id;?>&roid=<?php echo $r['roid'];?>&ratepernight=<?php echo $r['ratepernight'];?>" class="d-block mb-0 thumbnail"><img src="../NEW/uploads<?php echo $r['profilepic'];?>" alt="Image" class="img-fluid"></a>
                    <div class="hotel-room-body">
                      <!-- <h3 class="heading mb-0"><a href="#">Standard Room</a></h3> -->
                      <strong class="price"><?php echo $r['ratepernight'];?> / per night</strong>
                    </div>
                  </div>
                </div>
                <?php
              }

          ?>
        
          <!-- <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
              <a href="#" class="d-block mb-0 thumbnail"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
              <div class="hotel-room-body">
                <h3 class="heading mb-0"><a href="#">Family Room</a></h3>
                <strong class="price">$400.00 / per night</strong>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
              <a href="#" class="d-block mb-0 thumbnail"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
              <div class="hotel-room-body">
                <h3 class="heading mb-0"><a href="#">Single Room</a></h3>
                <strong class="price">$255.00 / per night</strong>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
              <a href="#" class="d-block mb-0 thumbnail"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
              <div class="hotel-room-body">
                <h3 class="heading mb-0"><a href="#">Deluxe Room</a></h3>
                <strong class="price">$150.00 / per night</strong>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
              <a href="#" class="d-block mb-0 thumbnail"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
              <div class="hotel-room-body">
                <h3 class="heading mb-0"><a href="#">Luxury Room</a></h3>
                <strong class="price">$200.00 / per night</strong>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
              <a href="#" class="d-block mb-0 thumbnail"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
              <div class="hotel-room-body">
                <h3 class="heading mb-0"><a href="#">Single Room</a></h3>
                <strong class="price">$155.00 / per night</strong>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>


    

   
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  
  <script src="js/mediaelement-and-player.min.js"></script>

  <script src="js/main.js"></script>
    

  <script>
      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });
    </script>

  </body>
</html>